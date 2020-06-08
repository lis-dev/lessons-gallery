<?php

if (isset($_GET['exit'])) {
  setcookie('auth', false, 1);
}

if ($_POST['email'] == 'info@google.com' && $_POST['password'] == '123') {
  $_COOKIE['auth'] = true;
  setcookie('auth', true);
} elseif (!empty($_POST)) {
  $message = 'Неправильно введен логин или пароль';
}

if (isset($_COOKIE['auth'])) {
  header('Location: /');
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>

  <?php include 'includes/header.php'; ?>
  
  <div class="container">
  
  <?php include 'includes/message.php' ?>
  
  <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <?php include 'includes/footer.php'; ?>

</body>

</html>