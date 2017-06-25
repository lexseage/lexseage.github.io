<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Главная страница</title>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
<body>
<!-- Загаловок страницы, шапка -->
   <div id='logo'>
                      <a  class="tutu" href="index.php"><img src="image/logo.png" / height="80" width="200"></a>
                </div>
                <div id='contacts'>
                    <h1>Магазин одежды для счастливых детей</h1>
                </div>
                <div id='logo2'>
                     <a  class="tutu" href="index.php"><img src="image/logo.png" / height="80" width="200"></a>
                </div>
<!-- Горизонтальное меню -->
				<div id='main-menu'>
<ul>
<li><a href="index.php">Главная</a></li>
<li><a href="inf.php">Информация</a></li>
<li><a href="corzina.php">Корзина</a></li>
<li><div id="otstup"> <?php
echo "<a href='vihod.php'>".$_SESSION['login']."</a>";
if($_SESSION['login']!=null){
}
else {
echo "<a href='registr/vxod.php'>Вход в личный кабинет</a>";
}
?>
</div></li>

                </div>
 
<!-- Вертикальное меню -->				
<div id='left-col'>
<div class="horizontal-click">
  <label for="vkl1">Каталог</label>
  <input type="radio" name="vkl" id="vkl1" checked="checked"/>
  <label for="vkl1">Зима</label>
  <div>
  <a href="catalogZ1.php">Манишки</a>
  <a href="catalogZ2.php">Пинетки</a>
   <a href="catalogZ3.php">Шарфы</a>
  </div>
  <input type="radio" name="vkl" id="vkl2"/>
  <label for="vkl2">Лето</label>
  <div>
    <a href="catalogL1.php">Кепки</a>
  <a href="catalogL2.php">Шляпы</a>
   <a href="catalogL3.php">Панамы</a>
  </div>
  <input type="radio" name="vkl" id="vkl3"/>
  <label for="vkl3">Осень</label>
  <div>
    <a href="catalogO1.php">Шапки</a>
  <a href="catalogO2.php">Вязка</a>
   <a href="catalogO3.php">Шлемы</a>
  </div>
  <input type="radio" name="vkl" id="vkl4"/>
  <label for="vkl4">Весна</label>
  <div>
    <a href="catalogV1.php">Косынки</a>
  <a href="catalogV2.php">Шапки</a>
   <a href="catalogV3.php">Береты</a>
  </div>
   <input type="radio" name="vkl" id="vkl5" />
  <label for="vkl5"> <div>
    <a  align="center" style="color: red; " href="nov1.php">СКИДКИ %</a></div></label>
  
 
</div>
</div>
 <!-- Картинки -->	


<div class="carousel-wrapper">
	<input type="radio" checked="checked" id="slide1" class="carousel-selector" name="carousel-selector" />
	<input type="radio" id="slide2" class="carousel-selector" name="carousel-selector" />
	<input type="radio" id="slide3" class="carousel-selector" name="carousel-selector" />

	<ul class="carousel-items">
		<li class="carousel-item carousel-item-blue">
			<img src="image/1.jpg" width="1066" height="392"/>
		</li>

		<li class="carousel-item carousel-item-red">
			<img src="image/2.jpg" width="1066" height="392" />
		</li>

		<li class="carousel-item carousel-item-green">
			<img src="image/3.jpg" width="1066" height="392" />
		</li>
	</ul>

	<ul class="carousel-labels">
		<li class="carousel-label">
			<label for="slide1"></label>
		</li>
		<li class="carousel-label">
			<label for="slide2"></label>
		</li>
		<li class="carousel-label">
			<label for="slide3"></label>
		</li>
	</ul>
</div>



 <!-- Подвал -->	
            <div id='footer'>
               <div id="logo3"><a class="aa" href="mail.html">Личное сообщение</a></div>
			  
            </div>
 
   
</body>
</html>