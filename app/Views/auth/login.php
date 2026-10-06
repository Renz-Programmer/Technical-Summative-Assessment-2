<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

    <h1>Login</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <p><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form action="/login" method="post">

    <p>Username</p>
    <input type="text" name="username">

    <p>Password</p>
    <input type="password" name="password">

    <br><br>

    <button type="submit">Login</button>

    </form>

</body>

</html>