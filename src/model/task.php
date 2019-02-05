<?php

class Task
{
    public $id;
    public $username;
    public $email;
    public $content;
    public $done;

    public function __construct($id, $username, $email, $content)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->content = $content;
        $this->done = false;
    }
}
