<?php
require_once 'vendor/connect.php';
    session_start();
    
    ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LikeKino</title>
    <link rel="stylesheet" href="style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">

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
                          
                          <?php
                          if(isset($_SESSION['user'])){
                            echo '<li class="nav-item">
                                  <a class="nav-link" href="rec.php">Мои рекоментации</a>
                                  </li>';
                          }
                          else{
                            echo "";
                          }
                           ?>
                            
                          
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Подборки
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#"><img class="icon-img" src="/img/horer.png" alt=""> Ужасы</a></li>
                              <li><a class="dropdown-item" href="#"><img class="icon-img" src="/img/comedy.png" alt=""> Комедии</a></li>
                              <li><a class="dropdown-item" href="#"><img class="icon-img" src="/img/Minion.png" alt=""> Мультики</a></li>
                              <li><a class="dropdown-item" href="#"><img class="icon-img" src="/img/drama.png" alt=""> Драммы</a></li>
                            </ul>
                          </li>
                          
                        </ul>
                            <div class="menu-right">
                              <div class="menu-login">
                              <?php
                          if(isset($_SESSION['user'])){
                            echo "";
                          }
                          else{
                            echo '<a class="profile" href="/contact.php" >
                                  <img class="icon-img" src="/img/person.png"  alt="">
                                  </a>
                                  </div>';
                            
                          }
                           ?>
                               
                              <div class="php-log">
                              <form>
                                  <img src="<?= $_SESSION['user']['avatar'] ?>" width="32px" height="" alt="">
                                  <p style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></p>
                                  
                                  <?php
                          if(isset($_SESSION['user'])){
                            echo '<a href="vendor/logout.php" class="logout">Выход</a>';
                          }
                          else{
                            echo "";     
                          }
                           ?>
                              </form>
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
            <!-- Всплывающиее окно  с тестом
          echo '<a hreh="contact.php" class="testButton"><img src="/img/Test.png" alt="" onclick="dispBlock()"></a>';-->
            <h3>Пройди тест</h3>
            <p>и получишь новый любимый фильм.<p>
              <form action="">
              <?php
                          if(isset($_SESSION['user'])){
                            echo '<button type="button" class="testButton"><img src="/img/Test.png" alt="" onclick="dispBlock()"></button>';
                          }
                          else{
                            echo '<a href="contact.php" class="testButton"><img src="/img/Test.png"></a>';
                          }
              ?>
                
              </form>
              <?php
                          if(isset($_SESSION['user'])){
                            echo '<div class="testBlock">
                            <form method="POST" action="">
                              <h5>Ответьте на вопросы, это поможет нам подобрать для вас фильм.</h3>
                              <p>Ваш пол?</p>
                              <input type="radio" name="sex" id="" ><span>Мужской</span> <br>
                              <input type="radio" name="sex" id="" ><span>Женский</span> <br>
                              <p>Ваш возраст?</p>
                              <input type="radio" name="age" id="" ><span>0-16</span> <br>
                              <input type="radio" name="age" id="" ><span>16-30</span> <br>
                              <input type="radio" name="age" id="" ><span>30-45</span> <br>
                              <input type="radio" name="age" id="" ><span>45+</span> <br>
                              <p>Какой жанр  вы любите больше всего?</p>
                              <input type="checkbox" name="genre" id="" ><span>Драма</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Ужасы</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Мультики</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Боевики</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Фантастика</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Комедия</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Приключения</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Детективы</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Фентези</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Новые</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Популярные</span> <br>
                              <input type="checkbox" name="genre" id="" ><span>Старые</span> <br>
                              <input type = "button" value = "отправить">
                            </form> 
                          </div>';
                          }
                          else{
                            echo "";
                            
                          }
                           ?>
              
          </div>
        </div>
        <script>
          function dispBlockRandMovie(){
            let dis = document.querySelector('.rand-movie');
            if(dis.style.display == 'block'){
            dis.style.display = 'none'
            }
            else{dis.style.display = 'block'}    
          }
        </script>
        <div class="block">
        <form action="">
     
                        <button type="button" class="testButton"><img src="/img/rand-movie.png" alt="" onclick="dispBlockRandMovie()"></button>
                         </form>
                        <div class="rand-movie" style="display:none">
                        <div class="get-rand-film">
                        <?php
      require_once("function.php");
          $films = rand_film();
      ?>
   <?php foreach($films as $film):  ?> 
    
        <div class="bottom-cart container">
                          <div class="cart" style="width: 18rem;">
                            <img src="<?= $film['poster'] ?>" class="card-img-top"  alt="...">
                              <div class="card-body">
                                <h5 class="card-title"><?= $film['name'] ?></h5>
                                <p class="card-text"><?= $film['description'] ?></p>
                                <a href="#" class="btn btn-primary">Перейти</a>
                              </div>
                          </div>
        </div>
       <?php endforeach; ?>
                        </div>
                        </div>
          
                
              
              
        </div>
        <script>
          function dispBlockZhrebiy(){
    let dis = document.querySelector('.zhrebiy');
    if(dis.style.display == 'block'){
    dis.style.display = 'none'
    }
    else{dis.style.display = 'block'}
    
}
        </script>
        <div class="block" >
        <form action="">
                
                           <button type="button" class="testButton"><img src="/img/zhrebiy.png" alt="" onclick="dispBlockZhrebiy()"></button>
                         </form>
                         <div class="zhrebiy" style="display:none">
                        
                       
                        
                              <div>
                              <script> 
                              
                              function randbtn(){
                                
                                let buttonfield = document.createElement("input");
                                        buttonfield.type = "button";
                                        
                                        buttonfield.id = "txtbtn1";
                                        buttonfield.value = "Далее";
                                        buttonfield.addEventListener('click', function() {
                                          debugger;
                                          let num = document.getElementById("idname").value;
                                          let randF=randomInteger(1, num);
                                          alert(randF);
                                                        }, false);
                                        document.getElementById('form').appendChild(buttonfield);
                                        

                              }

                                    function fun() {
                                      
                                       
                                        let no = document.getElementById("idname").value;
                                        
                                        for(let i=0;i<no;i++) {
                                          
                                            let textfield = document.createElement("input");
                                            textfield.type = "text";
                                            textfield.value = "";
                                            textfield.id = "txt"+i;
                                            document.getElementById('form').appendChild(textfield);
                                        }

                                    }

    
    
                              </script>
                              <form id="form">
   

                                <label for="idname">Сколько фильмов:</label>
                                <input id="idname" type="number" name="idname" step="1" min="2" max="15" required onkeypress="return false">
                                <span class="validity"></span>
                              </div>
                              <div>
                              <input type="button" onclick="fun(), randbtn()" value="Далее">
                              </div>
                              </form> 
              
              
        </div>
        <div class="main-podborki"><!-- Подборки фильмов-->
          <script src="/js.js" ></script>
        </div>
      </div>
      <div class="rec-bloc container"  style="display:flex;">
      <?php
      require_once("function.php");
          $films = get_films();
      ?>
   <?php foreach($films as $film):  ?> 
    
        <div class="bottom-cart container">
                          <div class="cart" style="width: 18rem;">
                            <img src="<?= $film['poster'] ?>" class="card-img-top"  alt="...">
                              <div class="card-body">
                                <h5 class="card-title"><?= $film['name'] ?></h5>
                                <p class="card-text"><?= $film['description'] ?></p>
                                <a href="#" class="btn btn-primary">Перейти</a>
                              </div>
                          </div>
        </div>
       <?php endforeach; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
    crossorigin="anonymous">
    </script>
</body>
</html>