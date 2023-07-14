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
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white bordeer-bottom shadow-sm">
      <h5 class="p-3 my-0 mr-md-auto font-weigth-normal">KINOROOM</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Главная</a>
        <a class="p-2 text-dark" href="about">Контакты</a>
      </nav>
      <?php
      if($_COOKIE['user'] == 'Да'):
      ?>
      <a class="btn btn-outline-primary" href="/auth.php">Кабинет пользователя</a> 
      <?php else: ?>
      <a class="btn btn-outline-primary" href="/auth.php">Войти</a> 
      <?php endif; ?>
    </div>