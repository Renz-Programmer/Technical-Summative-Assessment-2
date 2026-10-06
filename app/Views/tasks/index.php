<h1>Tasks</h1>

<a href="/tasks/new">Add Task</a></a>

<hr>

<?php foreach ($tasks as $task): ?>

    <h3><?= $task['title'] ?></h3>

    <p><?= $task['description'] ?></p>

    <p><?= $task['task_date'] ?></p>

    <a href="/tasks/edit/<?= $task['id'] ?>">
    Edit
    </a>

    <a href="/tasks/archive/<?= $task['id'] ?>">
        Archive
    </a>

    <hr>

<?php endforeach; ?>