<?php
$connection=mysqli_connect('MySQL-5.7', 'root', '', 'catalog');
$sql = "SELECT * FROM `jewelry`;";
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="style2.css" rel="stylesheet" />
    <title></title>
</head>
<body>
    <div class="mag "><p>Магазины</p></div>
    <div class="izbr "><p>Избранное</p></div>
    <div class="corzin "><p>Корзина</p></div>
    <div class="skidki "><p>Скидки</p></div>
    <a href="html4.html"><div class="we"><p>О нас</p></div></a>
    <div class="mag "><p>Магазины</p></div>
    <img class="logo" src="image/majesty-high-resolution-logo-transparent.png" alt="Alternate Text" />
    <div class="bb"></div>
    <a href="html2.html"><div class="catalog"><p>Каталог укршений</p></div></a>
    <a href="html.html"><div class="main"><p>Главная</p></div></a>
    <div class="collection"><p>Коллекции</p></div>
    <div class="brend"><p>Бренды</p></div>
    <div class="gift"><p>Подарки</p></div>
    <div class="accesuar"><p>Аксессуары</p></div>


    <div class="obcolc">
    <?php $id =0; ?>
        <img class="img1" src="image/6-0309-901.jpg" alt="Alternate Text" />
        <p class="text"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['name'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></p>
        <p class="price1"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['price'];
                                  }
                                  $i = $i + 1;
                                }
                              ?>Р</p>
        <a href="html3.html"><button class="button1">Купить</button></a>
    </div>
 <?php $id =1; ?>
    <div class="obcolc1">
        <img class="img2" src="image/rgy5dw244.jpg" alt="Alternate Text" />
        <p class="text1"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['name'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></p>
        <p class="price2"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['price'];
                                  }
                                  $i = $i + 1;
                                }
                              ?>Р</p>
        <button class="button2">Купить</button>
    </div>

     <?php $id =2; ?>
    <div class="obcolc2">
        <img class="img3" src="image/KRB-1-1f-s.jpg" alt="Alternate Text" />
        <p class="text2"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['name'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></p>
        <p class="price3"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['price'];
                                  }
                                  $i = $i + 1;
                                }
                              ?>Р</p>
        <button class="button3">Купить</button>
    </div>

     <?php $id =3; ?>
    <div class="obcolc3">
        <img class="img4" src="image/T1097-400.jpg" alt="Alternate Text" />
        <p class="text3"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['name'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></p>
        <p class="price4"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['price'];
                                  }
                                  $i = $i + 1;
                                }
                              ?>Р</p>
        <button class="button4">Купить</button>
    </div>

    <?php $id =4; ?>
    <div class="obcolc4">
        <img class="img5" src="image/RH211004.jpg" alt="Alternate Text" />
        <p class="text4"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['name'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></p>
        <p class="price5"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['price'];
                                  }
                                  $i = $i + 1;
                                }
                              ?>Р</p>
        <button class="button5">Купить</button>
    </div>

    <?php $id =5; ?>
    <div class="obcolc5">
        <img class="img6" src="image/rgw5zbl338.jpg" alt="Alternate Text" />
        <p class="text5"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['name'];
                                  }
                                  $i = $i + 1;
                                }
                              ?></p>
        <p class="price6"><?php
                                $i = 0;
                                $count = $id;
                                $result=mysqli_query($connection,$sql);
                                while($food = mysqli_fetch_assoc($result)){
                                  if($i == $count){
                                    echo $food['price'];
                                  }
                                  $i = $i + 1;
                                }
                              ?>Р</p>
        <button class="button6">Купить</button>

    </div>

</body>
</html>