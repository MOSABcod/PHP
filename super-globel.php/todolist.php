<?php
// Initialize the task array if not already set
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Handle task addition
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['task'])) {
    $newTask = trim($_POST['task']);
    if (!empty($newTask)) {
        $_SESSION['tasks'][] = $newTask;
    }
}

// Handle task deletion
if (isset($_GET['delete'])) {
    $taskIndex = (int)$_GET['delete'];
    if (isset($_SESSION['tasks'][$taskIndex])) {
        unset($_SESSION['tasks'][$taskIndex]);
        $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Re-index array
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .todo-list {
            list-style-type: none;
            padding: 0;
        }
        .todo-list li {
            margin: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .todo-list button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        .todo-list button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <h1>To-Do List</h1>

    <form method="POST" action="">
        <input type="text" name="task" placeholder="Enter a new task" required>
        <button type="submit">Add Task</button>
    </form>

    <h2>Your Tasks:</h2>
    <?php if (empty($_SESSION['tasks'])): ?>
        <p>No tasks added yet!</p>
    <?php else: ?>
        <ul class="todo-list">
            <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
                <li>
                    <?php echo htmlspecialchars($task); ?>
                    <a href="?delete=<?php echo $index; ?>">
                        <button>Delete</button>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
