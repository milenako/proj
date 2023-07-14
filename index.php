<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>PHP страница</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
<div class="d-flex flex-wrap">
<?php
for($i=0; $i<5; $i++):
?>
<div class="col-m4">
   <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Фильмы</h4> 
          </div>
          <div class="card-body">
            <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
            <h4 class="my-0 fw-normal mt-2">1980-е</h4>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Лучшие фильмы этих лет</li>
              <li>Подборка лучшей озвучки</li>
              <li>Подробное описание сюжета</li>
              <li>Достоверные отзывы</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
          </div>
    </div>
    <?php endfor; ?>
 </div>
</div>
</div>
<?php require "blocks/footer.php" ?>
</body>
</html>