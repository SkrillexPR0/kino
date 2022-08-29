<?php
session_start();

if ($_SESSION['user']) {
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LikeKino</title>
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
<link href = "https://fonts.googleapis.com/css2? family = Fira + Sans: wght @ 100 & display = swap "rel =" stylesheet ">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
  </head>
<body>
    <div class="wrapper">
        <header>
          <div class="top-line">

          </div>
          <div class="container">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"><img class="img-logo" src="/img/logolove.png" alt="logo"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                          </li>
                          <li class="nav-item">
                            
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Подборки
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#"><img class="icon-img" src="./img/horer.png" alt=""> Ужасы</a></li>
                              <li><a class="dropdown-item" href="#"><img class="icon-img" src="/img/comedy.png" alt=""> Комедии</a></li>
                              <li><a class="dropdown-item" href="#"><img class="icon-img" src="/img/Minion.png" alt=""> Мультики</a></li>
                              <li><a class="dropdown-item" href="#"><img class="icon-img" src="/img/drama.png" alt=""> Драммы</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            
                          </li>
                        </ul>
                            <div class="menu-right">
                              <div class="menu-login">
                              <a class="profile" href="/contact.php" >
                                    <img class="icon-img" src="/img/person.png"  alt="">
                                </a>
                              </div>
                            </div>
                      </div>
                    </div>
                  </nav>
                </div>
    </header>
    </div> 

     
    <main>
      <div class="container">
        <div class="test">
          
          <div class="block">
          <div class = "reg-form">
        <form action="/vendor/signin.php" method="post">
            <label>Логин</label> <br>
            <input type="text" name="login" placeholder="Введите свой логин"><br>
            <label>Пароль</label><br>
            <input type="password" name="password" placeholder="Введите пароль"><br>
            <button type="submit">Войти</button><br>
            <p>
                У вас нет аккаунта? - <a class = "a.reg" href="register.php">зарегистрируйтесь</a>!
            </p><br>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
          </div>
        </div>
        <div class="main-podborki"><!-- Подборки фильмов-->
          <script src="/js.js" ></script>
        </div>
      </div>
    </main>
    <footer>
      <div class="container">
      <div class="footer">
        <p>контакты автора</p>
        
        <ul>
          <li><a href=""><img class="instPhoto" src="/img/klipartz.com.png" alt=""></a></li>
          <li><a href=""><img class="vkPhoto" src="/img/1024px-Vk_Logo.svg.png" alt=""></a></li>
          
        </ul>
      </div>
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>