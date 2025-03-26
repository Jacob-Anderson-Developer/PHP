<?php
//get tasklist array from POST
$task_list = filter_input(
    INPUT_POST,
    'tasklist',
    FILTER_DEFAULT,
    FILTER_REQUIRE_ARRAY
);
if ($task_list === NULL) {
    $task_list = [];

    //    add some hard-coded starting values to make testing easier
//    $task_list[] = 'Write chapter';
//    $task_list[] = 'Edit chapter';
//    $task_list[] = 'Proofread chapter';
}

//get action variable from POST
$action = filter_input(INPUT_POST, 'action');

//initialize error messages array
$errors = [];

//process
switch ($action) {
    case 'Add Task':
        $new_task = filter_input(INPUT_POST, 'newtask');
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
            //$task_list[] = $new_task;
            array_push($task_list, $new_task);
        }
        break;
    case 'Delete Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be deleted.';
        } else {
            unset($task_list[$task_index]);
            $task_list = array_values($task_list);
        }
        break;

    case 'Modify Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be modified.';
        } else {
            $task_to_modify = $task_list[$task_index];
        }
        break;
    case 'Save Changes':
        $modified_task_id = filter_input(INPUT_POST, 'modifiedtaskid', FILTER_VALIDATE_INT);
        $modified_task = filter_input(INPUT_POST, 'modifiedtask');
        if (
            $modified_task_id === NULL || $modified_task_id === FALSE ||
            $modified_task === NULL || $modified_task === FALSE
        ) {
            $errors[] = 'The task cannot be modified.';

        } else {
            $task_list[$modified_task_id] = $modified_task;
            $modified_task = '';
        }
        break;

    case 'Cancel Changes':
        $modified_task = '';
        break;
    case 'Promote Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be promoted.';
        } elseif ($task_index === 0) {
            $errors[] = 'Cannot promote first task.';
        } else {
            $temp_task = $task_list[$task_index - 1];
            $task_list[$task_index - 1] = $task_list[$task_index];
            $task_list[$task_index] = $temp_task;
        }
        break;
    case 'Sort Tasks':
        sort($task_list);
        break;

}

include('task_list.php');
?>