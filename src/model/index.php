<?php

include_once("model/task.php");

class Model
{
    public function __construct()
    {
        if (!isset($_SESSION['task list'])) {
            $_SESSION['task list'] = array();
        }
    }

    public function getTasks($count = 3, $offset = 0)
    {
        return $_SESSION['task list'];
    }

    public function getTasksCount()
    {
        return count($_SESSION['task list']);
    }

    public function getTask($id)
    {
        return $_SESSION['task list'][$id];
    }

    public function addTask($username, $email, $content)
    {
        $task = new Task(count($_SESSION['task list']), $username, $email, $content);
        array_push($_SESSION['task list'], $task);
    }

    public function updateTask($id, $content, $done) {
        $task = &$_SESSION['task list'][$id];
        $task->content = $content;
        $task->done = $done;
    }

    public function authorization($login, $password)
    {
        $_SESSION['is admin'] = $login == 'admin' & $password == '123';
    }

    public function unauthorization()
    {
        unset($_SESSION['is admin']);
    }
}
