<?php require 'header.php'; ?>
<h2>Вход</h2>
<form method="post">
<input name="login" placeholder="Логин"><br>
<input name="password" type="password" placeholder="Пароль"><br>
<button type="submit" name="login_btn">Войти</button>
</form>
<?php if (isset($error)) echo "<p>$error</p>"; ?>
<?php require 'footer.php'; ?>
