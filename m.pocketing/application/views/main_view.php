<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="title" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
         <meta name="viewport" content="width=device-width, initial-scale=1">
<title>СпецКомп</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>-->
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link rel= "stylesheet" href="handheld.css" media="handheld,only screen and (max-device-width:480px)"/>

<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
</style>  
<body>

<div id="wrapper">
   
      
        
        
        
 
<script type="text/javascript"> 
function show(state) { 

document.getElementById('windowAuth').style.display = state; 
document.getElementById('wrap').style.display = state; 
} 
</script> 

<div onclick="show('none')" id="wrap"></div> 

<div id="windowAuth"> 
<style type="text/css"> 
/*Общий стиль*/ 
#subscribe, 
#login1{ 
top: 0px; 
width: 88%; 
padding: 18px 6% 60px 6%; 
margin: 0 0 35px 0; 
} 
/*Стили для шапки*/ 
#wrapper1 h1{ 
font-size: 48px; 
color: rgb(6, 106, 117); 
padding: 2px 0 10px 0; 
font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif; 
font-weight: bold; 
text-align: center; 
padding-bottom: 30px; 
} 
/*Стили для полей для заполнения*/ 
::-webkit-input-placeholder { 
color: rgb(190, 188, 188); 
font-style: italic; 
} 
input:-moz-placeholder, 
textarea:-moz-placeholder{ 
color: rgb(190, 188, 188); 
font-style: italic; 
} 
input { 
outline: none; 
} 
#wrapper1 input:not([type="checkbox"]){ 
width: 92%; 
margin-top: 4px; 
padding: 10px 5px 10px 32px; 
border: 1px solid rgb(178, 178, 178); 
box-sizing : content-box; 
border-radius: 3px; 
box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset; 
transition: all 0.2s linear; 
} 
#wrapper1 input:not([type="checkbox"]):active, 
#wrapper1 input:not([type="checkbox"]):focus{ 
border: 1px solid rgba(91, 90, 90, 0.7); 
background: rgba(238, 236, 240, 0.2); 
box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.9) inset; 
} 
/*Стили для кнопок*/ 
#wrapper1 p.button input{ 
width: 30%; 
cursor: pointer; 
background: rgb(61, 157, 179); 
padding: 8px 5px; 
font-family: 'BebasNeueRegular','Arial Narrow',Arial,sans-serif; 
color: #fff; 
font-size: 24px; 
border: 1px solid rgb(28, 108, 122); 
margin-bottom: 10px; 
text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5); 
border-radius: 3px; 
box-shadow: 
0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset, 
0px 0px 0px 3px rgb(254, 254, 254), 
0px 5px 3px 3px rgb(210, 210, 210); 
transition: all 0.2s linear; 
} 
#wrapper1 p.button input:hover{ 
background: rgb(74, 179, 198); 
} 
#wrapper1 p.button input:active, 
#wrapper1 p.button input:focus{ 
background: rgb(40, 137, 154); 
position: relative; 
top: 1px; 
border: 1px solid rgb(12, 76, 87); 
box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.2) inset; 
} 
#wrapper1 .keeplogin1 label{ 
padding-top: 20px; 
} 

</style> 
<!— Картинка крестика--> 
<img class="close" onclick="show('none')" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close..."> 
<div id="container1"> 
<div id="wrapper1"> 
<div id="login1"> 
<form class="form-getemail-checkout" action="" method="post"> 
<h1>Регистрация</h1> 
 <div class="emailBox">
   <label for="email">Введите EMail</label><br>
   <input id="email" name="email" type="email" size="64" maxLength="64" required placeholder="username@mail.com" />
 </div>
<div class="p1"> 
<label class="youpasswd" data-icon="p">Введите пароль</label> 
<input id ="password" pattern="^[A-z0-9]{4,30}$" name="password" type="text" placeholder="Password" required
       title ="Пароль должен состоять не менее чем из 4 символов"/> 
</div> 
<p class="keeplogin1"> 
<br> 
<input type="checkbox" name="login1keeping" id="login1keeping" value="login1keeping" /> 
<label for="login1keeping">Запомните меня</label> 
</p> 
<input type="submit" value="Регистрация" onclick=""/> 
<br> 
</div> 
</div> 
</div> 
</div> 
   </form>

<style type="text/css"> 

#wrap{ 
display: none; 
opacity: 0.8; 
position: fixed; 
left: 0; 
right: 0; 
top: 0; 
bottom: 0; 
padding: 16px; 
background-color: rgba(1, 1, 1, 0.725); 
z-index: 100; 
overflow: auto; 
} 

#windowAuth{ 
width: 400px; 
height: 420px; 
margin: 50px auto; 
display: none; 
background: #fff; 
z-index: 200; 
position: fixed; 
left: 0; 
right: 0; 
top: 0; 
bottom: 0; 
padding: 16px; 
} 

.close{ 
margin-left: 364px; 
margin-top: 4px; 
cursor: pointer; 
} 

</style> 

        
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">SpecKomp</a></h1>
			</div>
                    
			<div id="menu">
				<ul>
					<li class="active"><a href="#" accesskey="1" title="">Главная</a></li>
                                        <li><a href="#" accesskey="3" onclick="show('block')">Регистрация</a></li>
     
					<!--<li><a href="#" accesskey="4" title="">About Us</a></li>
					<li><a href="#" accesskey="5" title="">Contact Us</a></li>-->
				</ul>
			</div>
		</div>
	</div>
 
	<div id="page" class="container">
		<div id="content">
			<div id="box1">
				<h2 class="title"><a href="#">Welcome to SpecKomp</a></h2>
				<p>Мы осуществляем качественную и профессиональную помощь по ремонту компьютеров в самые сжатые сроки. Мы предлагаем срочный выезд мастера по адресу в любой
				район Ульяновска. Заказ мастера для ремонта компьютера - совершенно бесплатный! При ремонте компьютера наш мастер устранит все неполадки аппаратного
				и программного обеспечения. Мы сделаем ваш компьютер быстрее, он будет работать лучше, перестанет выключатся и зависать. :) </p>
				<p>Установка Windows поможет решить все самые распространенные проблемы, но мы делаем ее только в самых крайних случаях. 
				Наша компьютерная помощь сможет восстановить работу вашего ПК без переустановки Windows. Это позволит сохранить ваши личные файлы и 
				настройки к которым вы уже так привыкли. </p>
				<p>Так же, при ремонте компьютера мы восстановим работоспособность всех необходимых вам программ. Если вам нужны будут дополнительные программы, 
				наш мастер установит их вам. Если у вас возникли проблемы с драйверами, наш мастер по ремонту компьютеров поможет вам и в этом.</p>
			</div>
						<div>
<ul id="slides"> 
<li class="slide showing"><img  src="images/img01.jpg"></li> 
<li class="slide"><img src="images/img02.jpg"></li> 
<li class="slide"><img src="images/img03.jpg"></li> 
<li class="slide"><img src="images/img04.jpg"></li> 
<li class="slide"><img src="images/img05.jpg"></li> 
</ul>

    </div>
                    <style>
 #slides{ 
text-align: center;
position: relative; 
top: 10px; 
height: 350px; 
bottom: 30px;
padding: 0px; 
list-style-type: none; 
} 
#slides1{ 
text-align: center; 
} 
#slides1 img{ padding-top:30px;}

.slide{ 
position: absolute; 
left: 0px; 
top: 0px; 
width: 100%; 
height: 100%; 
opacity: 0; 
z-index: 1; 

-webkit-transition: opacity 1s; 
-moz-transition: opacity 1s; 
-o-transition: opacity 1s; 
transition: opacity 1s; 
} 

.showing{ 
opacity: 1; 
z-index: 2; 
}</style>
                    <script>
var controls = document.querySelectorAll('.controls'); 
for(var i=0; i<controls.length; i++){ 
controls[i].style.display = 'inline-block'; 
} 

var slides = document.querySelectorAll('#slides .slide'); 
var currentSlide = 0; 
var slideInterval = setInterval(nextSlide,3000); 

function nextSlide(){ 
goToSlide(currentSlide+1); 
} 

function previousSlide(){ 
goToSlide(currentSlide-1); 
} 

function goToSlide(n){ 
slides[currentSlide].className = 'slide'; 
currentSlide = (n+slides.length)%slides.length; 
slides[currentSlide].className = 'slide showing'; 
} 

</script>
			    <p>Если ПК перестал включаться, вышли из строя какие либо детали - вызовите на дом нашего компьютерного мастера и получите быстрый, 
			    квалифицированный ремонт компьютера или вышедших из строя деталей. Наш мастер проведет диагностику и выявит поломку вашего ПК. 
			    Сделает максимально выгодный для вас, расчет стоимости ремонта деталей ПК.</p>
			    <p>Наша компания рекомендует проводить регулярную проверку вашего ПК что бы выявить возможные, будущие проблемы и предотвратить серьезные, дорогие поломки. Мы предоставляем спектр профилактических работ по ремонту компьютера:</p>
			    <ul><li><span style="font-size: 10pt;">очистку компьютера от пыли</span></li>
                <li><span style="font-size: 15pt;">замену термопасты</span></li>
                <li><span style="font-size: 15pt;">смазку вентиляторов</span></li>
                <li><span style="font-size: 15pt;">замену вентиляторов</span></li>
                <li><span style="font-size: 15pt;">проверку температуры деталей</span></li>
                <li><span style="font-size: 15pt;">проверку жесткого диска</span></li>
                <li><span style="font-size: 15pt;">проверку напряжений питания</span></li></ul>
                <p>Подобная диагностика убережет вас от лишних трат и позволит компьютеру работать быстро и долговечно. Наша компания сможет помочь вам в любой даже самой сложной поломке.</p>

			<!--<div>
				<ul class="style1">
					<li class="first">
						<h3><em><img src="images/img02.jpg" alt="" width="130" height="130" class="alignleft border" /></em>Lorem ipsum dolor interdum</h3>
						<p>Ut vel nisl tristiUt vel nisl tristique justo ornare iaculis.qUt vel nisl tristique justo ornare iaculis.Ut vel nisl tristique justo ornare iaculis.ue justo ornare iaculis.
						Suspendisse suscipitUt vel nisl tristique justo ornare iaculis., Ut vel nisl tristique justo ornare iaculis.orci ac interdum viverra, nullpendisse suscipitUt vel nisl tristique justo ornare iaculis., Ut vel nisl tristique justo ornare iaculis.orcipendisse suscipitUt vel nisl tristique justo ornare iaculis., Ut vel nisl tristique justo ornare iacpendisse suscipitUt vel nisl tristique justo ornare iaculis., Ut vel nisl tristique justo ornare iaculis.orci ac interdum viverra, nulla orci facilisis miulis.orci ac interdum viverra, nulla orci facilisis mi ac interdum viverra, nulla orci facilisis mia orci facilisis mi, a ultrices mi lectus vitae felis. Morbi suscipit adipiscing orci et blandit. Morbi a nulla ut tellus blandit placerat a quis eros.</p>
						
					</li>
					<li>
						<h3><em><img src="images/img03.jpg" alt="" width="130" height="130" class="alignleft border" /></em>Magna phasellus etiam ultrices</h3>
						<p>Ut vel nisl tristique justo ornare iaculis. Suspendisse suscipit, orci ac interdum viverra, nulla orci facilisis mi, a ultrices mi lectus vitae felis. Morbi suscipit adipiscing orci et blandit. Morbi a nulla ut tellus blandit placerat a quis eros.</p>
						
					</li>
				</ul>
			</div>-->
		</div>
            <style>
                #sidebar{float: left}
            </style>
            <div id="sidebar">
			<h2>Новости</h2>
			<ul class="style3">
				<li class="first">
					<p class="date">01-14-2013</p>
					<p><a href="#">
                                                <?php
                                                $line_counter = 0;
$desired_line = 0; //нужная строка
$fh = fopen("textfile2.txt",'r') or die($php_errormsg);
while ((! feof($fh)) && ($line_counter <= $desired_line)) {
if ($s = fgets($fh,1048576)) {
$line_counter++;
}
}
fclose($fh) or die($php_errormsg);
print $s;
                                                ?>
                                                <!--Сегодня с уверенностью можно сказать, что компьютер занимает очень важную роль в жизни человека. Причем если у некоторых такая ситуация только дома, то для кого-то компьютер и на работе стал частью жизни. Уже не стыдно признаваться, что мы с вами большую часть своего времени проводим за компьютером...-->
                                                </a></p>
				</li>
				<li>
					<p class="date">01-13-2013</p>
					<p><a href="#"><?php
                                                $line_counter = 0;
$desired_line = 1; //нужная строка
$fh = fopen("textfile2.txt",'r') or die($php_errormsg);
while ((! feof($fh)) && ($line_counter <= $desired_line)) {
if ($s = fgets($fh,1048576)) {
$line_counter++;
}
}
fclose($fh) or die($php_errormsg);
print $s;
                                                ?><!--Всем привет. Сегодня я расскажу о вирусах майнерах. Что это? Где их можно словить? Что будет с компьютером при заражении майнером? Как избавится от вируса майнера?</a></p>
				-->
                                                  </li>
				<!--<li>
					<p class="date">01-07-2013</p>
					<p><a href="#">Vestibulum laoreet lorem sed amet condimentum eget ultrices et mago porttitor nequese blandit.</a></p>
				</li>-->
			</ul>

		</div>
	</div>
	<div id="footer">
		<p>Copyright (c) <?php echo date('Y') ?></a>.</p>
	</div>
</div>
</body>
</html>
