<?php

include_once("model/index.php");

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function showTaskList()
    {
        $tasks = $this->model->getTasks();
        include 'view/task_list.php';
    }

    public function invoke()
    {
        ?>
        <html lang="en" class="h-100">
        <?php include 'view/head.php'; ?>
        <body class="container h-100">
        <?php
        switch ($_GET['page']) {
            case 'login':
                include 'view/login/index.php';
                break;
            case 'new-task':
                include 'view/navbar.php';
                include 'view/new_task.php';
                break;
            case 'edit-task':
                if (isset($_SESSION['is admin'])) {
                    $task = $this->model->getTask((int) $_GET['task-id']);
                    include 'view/navbar.php';
                    include 'view/edit_task.php';
                } else {
                    $this->showTaskList();
                }
                break;
            case 'update-task':
                if (isset($_SESSION['is admin'])) {
                    $this->model->updateTask((int) $_GET['id'], $_GET['content'], (bool) $_GET['done']);
                }
                include 'view/navbar.php';
                $this->showTaskList();
                break;
            case 'add-task':
                $this->model->addTask($_GET['username'], $_GET['email'], $_GET['content']);

                include 'view/navbar.php';
                $this->showTaskList();
                break;
            case 'authorization':
                if (isset($_GET['login']) & isset($_GET['password'])) {
                    $this->model->authorization($_GET['login'], $_GET['password']);
                }
                include 'view/navbar.php';
                $this->showTaskList();
                break;
            case 'logout':
                $this->model->unauthorization();
                include 'view/navbar.php';
                $this->showTaskList();
                break;
            default:
                include 'view/navbar.php';
                $this->showTaskList();
                break;
        }
        ?>
        </body>
        </html>
        <?php
    }
}
