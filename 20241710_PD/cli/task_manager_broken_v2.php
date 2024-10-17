<?php

class Task
{
    private $id;
    private $title;
    private $description;

    public function __construct($id, $title, $description)
    {
        $id = $this->$id;
        $title = $this->$title;
        $description = $this->$description;
    }

    public function setTitle()
    {
        $title = $this->title;
    }

    public function setDescription()
    {
        $description = $this->description;
    }

    public function displayTask()
    {
        echo "ID: " . $this->id . "\n";
        echo "Title: " . $this->title . "\n";
        echo "Description: " . $this->description . "\n";
        echo "--------------------------\n";
    }
}

$tasks = [];

function displayAllTasks($tasks)
{
    if (empty($tasks)) {
        echo "No tasks available.\n";
    } else {
        foreach ($tasks as $task) {
            $task->displayTask();
        }
    }
}

function createTask(&$tasks)
{
    $title = readline("Enter Task Title: ");
    $description = readline("Enter Task Description: ");

    end($tasks);
    $lastKey = key($tasks);
    $id = $lastKey + 1;

    $tasks[$id] = new Task($id, $title, $description);
    echo "Task Created.\n";
}

function updateTask(&$tasks)
{
    $id = readline("Enter Task ID to Update: ");

    if (isset($tasks[$id])) {
        $newTitle = readline("Enter New Title: ");
        $newDescription = readline("Enter New Description: ");

        $tasks[$id]->setTitle($newTitle);
        $tasks[$id]->setDescription($newDescription);

        echo "Task Updated.\n";
    } else {
        echo "Task ID not found.\n";
    }
}

function deleteTask(&$tasks, $id)
{
    if (isset($tasks[$id])) {
        unset($tasks[$id]);
        echo "Task Deleted.\n";
    } else {
        echo "Task ID not found.\n";
    }
}



while (true) {
    echo "\nToDo List CLI Application\n";
    echo "1. Create Task\n";
    echo "2. View All Tasks\n";
    echo "3. Update Task\n";
    echo "4. Delete Task\n";
    echo "5. Exit\n";
    echo "Choose an option: ";
    $choice = trim(fgets(STDIN));



    switch ($choice) {
        case 1:
            deleteTask($tasks, $id);
            break;
        case 2:
            displayAllTasks($tasks);
            break;
        case 3:
            updateTask($tasks);
            break;
        case 4:
            createTask($tasks);
            break;
        case 5:
            echo "Exiting the application. Goodbye!\n";
            exit;
        case 13:
            print_r($tasks);
        default:
            echo "Invalid option. Please choose again.\n";
    }
}
