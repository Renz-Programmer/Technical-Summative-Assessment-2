<h1>New Task</h1>

<form action="/tasks/create" method="post">

<input
    type="text"
    name="title"
    placeholder="Title">

<br><br>

<textarea
    name="description"></textarea>

<br><br>

<input
    type="date"
    name="task_date">

<br><br>

<button type="submit">
    Save
</button>

</form>