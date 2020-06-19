<?php

class Task
{
    public $description;
    public $completed = false;
    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }
}


$tasks = [
    new Task('Complete office work'),
    new Task('Start your project'),
    new Task('Make your mind empty'),
];

$tasks[0]->complete();

require 'index.view.php';
