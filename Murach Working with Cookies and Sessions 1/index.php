<?php
require_once('cart.php');

// Start session management with a persistent cookie
//$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
//$lifetime = 0; //Session Cookie
$lifetime = 60 * 60 * 24 * 365 * 3;
session_set_cookie_params($lifetime, '/');
session_start();

// Create a cart array if needed
if (empty($_SESSION['cart'])) { $_SESSION['cart'] = []; }

// Create a table of products
$products = [
    'MMS-1754' => ['name' => 'Flute', 'cost' => '149.50'],
    'MMS-6289' => ['name' => 'Trumpet', 'cost' => '199.50'],
    'MMS-3408' => ['name' => 'Clarinet', 'cost' => '299.50'],
];

// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_add_item';
    }
}

// Add or update cart as needed
switch($action) {
    case 'add':
        $product_key = filter_input(INPUT_POST, 'productkey');
        $item_qty = filter_input(INPUT_POST, 'itemqty');
        $product = $products[$product_key];
        add_item($product_key, $item_qty, $product);  
        header('Location: .?action=show_cart');
        break;
    case 'update':
        $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        foreach($new_qty_list as $key => $qty) {
            if ($_SESSION['cart12'][$key]['qty'] != $qty) {
                update_item($key, $qty);
            }
        }
        header('Location: .?action=show_cart');
        break;
    case 'show_cart':
        include('cart_view.php');
        break;
    case 'show_add_item':
        include('add_item_view.php');
        break;
    case 'empty_cart':
        unset($_SESSION['cart12']);
        include('cart_view.php');
        break;
    case 'end_session':
        $_SESSION = array();
        session_destroy();
        $name = session_name();
        $expire = strtotime('-1 year');
        $params = session_get_cookie_params();
        $path = $params['path'];
        $domain = $params['domain'];
        $secure = $params['secure'];
        $httponly = $params['httponly'];
        setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
        include('cart_view.php');
        break;
}
?>