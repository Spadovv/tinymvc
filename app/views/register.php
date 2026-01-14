<?php require 'header.php'; ?>
<h2>Регистрация</h2>
<form method="post">
<input name="login" placeholder="Логин"><br>
<input name="password" type="password" placeholder="Пароль"><br>
<button type="submit" name="register">Зарегистрироваться</button>
</form>
<?php if (isset($error)) echo "<p>$error</p>"; ?>
<?php require 'footer.php'; ?>
