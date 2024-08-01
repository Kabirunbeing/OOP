// index.php

// Define a class for the to-do list
class TodoList {
    private $tasks = [];

    public function addTask($task) {
        $this->tasks[] = $task;
    }

    public function getTasks() {
        return $this->tasks;
    }
}

// Create a new to-do list object
$todoList = new TodoList();

// Add some tasks to the list
$todoList->addTask('Buy milk');
$todoList->addTask('Walk the dog');
$todoList->addTask('Do laundry');

// Display the tasks
foreach ($todoList->getTasks() as $task) {
    echo "<p>$task</p>";
}