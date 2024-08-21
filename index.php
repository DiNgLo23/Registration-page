<!-- </html><!DOCTYPE html>
<html land = 'ru'>
<head>
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
        <a href = "index.php">Главная</a>
        <br><a href = "about.php">про нас</a></br>

</header>

    <form action="login.php" method="post">
    <br><input type="text" name="username" placeholder="Введите имя" class="usname"></br>
    <br><input type="text" name="password" placeholder="Введите пароль" class="pass">
    <?php


    ?></input></br>
    <br><input type = "text" name="email" placeholder="Введите email" class="email"></br>

    <br><input type="submit" value="Отправить" class="sub"></input></br>


    </form>
<?php

?>
<footer class="prava">Все права защищены &copy; 2023</footer>
</body>



   -->




<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Просто сайт</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="index.css">
  </head>
  <body class = 'bod'>
    <div class='glav'>
      a
    </div>

    <div class='name_body'>
      <a href='map.php>' class ='map'>SleepMap</a>
    </div>

    <div class = 'wind_reg'>
      <div class='sign'>
        sign up
      </div>

      <form method="post" action='form_id.php'>
          <input class="name" type ='text' name = 'first' placeholder='name'></br>
          <input class="password" type='password' name = 'pass' placeholder='password'>
          <input class='check_agree' type='checkbox'>
          <input class="send" type='submit' value = 'Send'>
        </form>

      <div class='agree_reg'>
        I've read it and I agree with 
      </div>
      <div class='terms'>
        
        <a class = 'term' href ='agreement.php'>Terms of Usea</a>
      </div>

    </div>
  </body>

