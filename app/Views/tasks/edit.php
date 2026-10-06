<h1>Edit Task</h1>

">

<input
    type="text"
    name="title"
    value="<?= $task['title'] ?>">

<br><br>

<textarea
    name="description"><?= $task['description'] ?></textarea>

<br><br>

<input
    type="date"
    name="task_date"
    value="<?= $task['task_date'] ?>">

<br><br>

<button type="submit">
    Update
</button>

</form>