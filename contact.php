<?php
if (isset($_POST['email']) && isset($_POST['message'])) {
  $chatId = '';
  $token = '';
  $text = urlencode($_POST['email'] . "\n" . $_POST['message']);

  file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatId}&parse_mode=html&text={$text}");
  $message = 'Спасибо за ваше сообщение';
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
        <label for="exampleInputMessage1">Your message</label>
        <textarea type="text" name="message" class="form-control" id="exampleInputMessage1"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
  </div>

  <?php include 'includes/footer.php'; ?>
  
</body>

</html>
