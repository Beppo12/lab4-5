<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <link href="style.css" rel="stylesheet" />
    <title></title>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="mag"><p>Магазины</p></div>
  <a href="#" id="openModal2" class="special1">Войти</a>

    <div class="corzin"><p>Корзина</p></div>
    <div class="skidki"><p>Скидки</p></div>
    <a href="html4.html"><div class="we"><p>О нас</p></div></a>
    <div class="mag"><p>Магазины</p></div>
    <img class="logo" src="image/majesty-high-resolution-logo-transparent.png" alt="Alternate Text" />
    <div class="bb"></div>
    <a href="html2.html"><div class="catalog"><p>Каталог украшений</p></div></a>
    <a href="html.html"><div class="main"><p>Главная</p></div></a>
    <div class="collection"><p>Коллекции</p></div>
    <div class="brend"><p>Бренды</p></div>
    <div class="gift"><p>Подарки</p></div>
    <div class="accesuar"><p>Аксессуары</p></div>
    <div class="slide">
        <img class="photo" src="image/samantha-gades-N1CZNuM_Fd8-unsplash.jpg" alt="Alternate Text" />
    </div>
    <div class="text"><p>Скидка - 50% на обручальные кольца</p></div>

   

 <div id="myModal2" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form id="loginform" action="login.php" method="post">
                <div class="form-group">
                    <label for="name">Введите E-mail</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="name">Введите пароль</label>
                    <input type="password" id="pass" name="pass" required>
                </div>
                <input type="submit" value="Войти">
                <a id="openModal3" class="special5" >Зарегестироваться</a>
                <!-- <input id="openModal3" type="submit" value="Зарегестироваться"> -->
            </form> 
        </div>
    </div>

        <!-- Это модальное окно регистрации -->
    <div id="myModal3" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form  action="register.php" method="post">
                <div class="form-group">
                    <label for="name">Введите E-mail</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="name">Введите пароль</label>
                    <input type="password" id="pass" name="pass" required>
                </div>
                <div class="form-group">
                    <label for="name">Повторите пароль</label>
                    <input type="password" id="repass" name="repass" required>
                </div>
                <input type="submit" value="Зарегестироваться">
            </form> 
        </div>
    </div>
            
        </div>
    </div>


 <script src="script.js"></script>
    

</body>
</html>
