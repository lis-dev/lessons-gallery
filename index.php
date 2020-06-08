
<?php
if (isset($_FILES['new_image'])) {
  $newImageName = uniqid() . '.jpg';
  move_uploaded_file($_FILES['new_image']['tmp_name'], 'img/' . $newImageName);
  $message = 'Файл успешно загружен';
}

if ($_GET['delete'] && file_exists($_GET['delete'])) {
  unlink($_GET['delete']);
  $message = 'Файл успешно удалён';
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>

  <?php include 'includes/header.php'; ?>

  <div class="container">

    <?php if (isset($message)) : ?>
      <div class="alert alert-success">
        <?php echo $message?>
      </div>
    <?php endif; ?>

    <div class="row">
      <?php $images = glob('img/*.jpg'); ?>
      <?php foreach ($images as $i) : ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="img-thumbnail" src="<?php echo "$i" ?>">
            <div class="card-body">
              <p class="card-text">Изображение <?php echo $i; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <?php if (isset($_COOKIE['auth'])) : ?>
                  <div class="btn-group">
                    <a href="/?delete=<?php echo $i; ?>" type="button" class="btn btn-sm btn-outline-secondary">Delete</a>
                  </div>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <?php if (isset($_COOKIE['auth'])) : ?>
        <form class="col-md-4" method="POST" enctype="multipart/form-data" action="/">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <p class="card-text">
                <label for="exampleFile">Загрузка файла</label>
                <input type="file" name="new_image" id="exampleFile">
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="submit" class="btn btn-primary">Загрузить</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      <?php endif ?>

    </div>
  </div>

  <?php include 'includes/footer.php'; ?>

</body>
</html>
