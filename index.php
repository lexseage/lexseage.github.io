<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>������� ��������</title>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
<body>
<!-- ��������� ��������, ����� -->
   <div id='logo'>
                      <a  class="tutu" href="index.php"><img src="image/logo.png" / height="80" width="200"></a>
                </div>
                <div id='contacts'>
                    <h1>������� ������ ��� ���������� �����</h1>
                </div>
                <div id='logo2'>
                     <a  class="tutu" href="index.php"><img src="image/logo.png" / height="80" width="200"></a>
                </div>
<!-- �������������� ���� -->
				<div id='main-menu'>
<ul>
<li><a href="index.php">�������</a></li>
<li><a href="inf.php">����������</a></li>
<li><a href="corzina.php">�������</a></li>
<li><div id="otstup"> <?php
echo "<a href='vihod.php'>".$_SESSION['login']."</a>";
if($_SESSION['login']!=null){
}
else {
echo "<a href='registr/vxod.php'>���� � ������ �������</a>";
}
?>
</div></li>

                </div>
 
<!-- ������������ ���� -->				
<div id='left-col'>
<div class="horizontal-click">
  <label for="vkl1">�������</label>
  <input type="radio" name="vkl" id="vkl1" checked="checked"/>
  <label for="vkl1">����</label>
  <div>
  <a href="catalogZ1.php">�������</a>
  <a href="catalogZ2.php">�������</a>
   <a href="catalogZ3.php">�����</a>
  </div>
  <input type="radio" name="vkl" id="vkl2"/>
  <label for="vkl2">����</label>
  <div>
    <a href="catalogL1.php">�����</a>
  <a href="catalogL2.php">�����</a>
   <a href="catalogL3.php">������</a>
  </div>
  <input type="radio" name="vkl" id="vkl3"/>
  <label for="vkl3">�����</label>
  <div>
    <a href="catalogO1.php">�����</a>
  <a href="catalogO2.php">�����</a>
   <a href="catalogO3.php">�����</a>
  </div>
  <input type="radio" name="vkl" id="vkl4"/>
  <label for="vkl4">�����</label>
  <div>
    <a href="catalogV1.php">�������</a>
  <a href="catalogV2.php">�����</a>
   <a href="catalogV3.php">������</a>
  </div>
   <input type="radio" name="vkl" id="vkl5" />
  <label for="vkl5"> <div>
    <a  align="center" style="color: red; " href="nov1.php">������ %</a></div></label>
  
 
</div>
</div>
 <!-- �������� -->	


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



 <!-- ������ -->	
            <div id='footer'>
               <div id="logo3"><a class="aa" href="mail.html">������ ���������</a></div>
			  
            </div>
 
   
</body>
</html>