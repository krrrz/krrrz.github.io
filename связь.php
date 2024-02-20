<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Обратная связь</title>
		<link rel="stylesheet" type="text/css" href="css/sviz.css" charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/form.css" charset="utf-8">
	<link href="image/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	</head>
	<body>
	 <div id="wrapper">
	    <div id="content">
	 <header>
	 		<div class="all_menu" id="logo">
	 			<img src="image/ico1.png">
	 			<span>Knitting room </span>
	 			<div>
	 			<div class="menu" id="about">
	 				<nav class="nav">
				  <a id="n1" href="interes.html" title="Интересный материал">Интересные статьи</a>
	 			  <a id="n2" href="mater.html" title="Виды пряжи и крючков">Необходимые материалы</a>
	 			  <a id="n3" href="osnov.html" title="Условные обозначения и основные понятия">Основные понятия</a>
	 			  <a id="n4" href="history.html" title="История появления вязания">История вязания</a>
					</nav>
				</div>
	 		</div>
	 	  </div>
	    </header>
		<br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <h2 class="heading">Обратная связь</h2>
		   <br> <br> <br>
		   <p class="otstp">Заполните форму обратной связи, чтобы написать нам об интересующих вопросах и предложениях.</p>
		   <br>
		   <h3 class="otstp1">Форма обратной связи:</h3>
	 <script>
			function checkForm(form) {
				var name = form.name.value;
				var n = name.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
				if (!n) {
					alert("Имя введено неверно, пожалуйста исправьте ошибку");
					return false;
				}
				var mail = form.mail.value;
				var m = mail.match(/^[A-Za-z0-9][A-Za-z0-9\._-]*[A-Za-z0-9_]*@([A-Za-z0-9]+([A-Za-z0-9-]*[A-Za-z0-9]+)*\.)+[A-Za-z]+$/);
				if (!m) {
					alert("E-mail введен неверно, пожалуйста исправьте ошибку");
					return false;
				}
				return true;
			}
		</script>
		<!-- проверка формы. Конец -->
 
 
		<form method="post" action="mail.php" onSubmit="return checkForm(this)">
 
			<div class="left">
				<label for="name">Имя:</label>
				<input maxlength="30" type="text" name="name" /> <br>
 
 
				<label for="mail">E-mail:</label>
				<input maxlength="30" type="text" name="mail" />
			</div>
 
			<div class="right">
				<label for="message">Сообщение:</label> <br>
				<textarea rows="7" cols="50" name="message"></textarea>
 
				<input type="submit" class="knop" value="Отправить" />
			</div>
 
		</form>
	</div> 
	<!--Конец формы, начало подвала-->
	 <footer>
	  <div id="site_name">
	    <p>Knitting room - твой мир вязания</p> 
	  </div>
	  <div id="clear"></div>
	  <div id="footer_menu">
	      <a href="index.php" title="Вернуться на главную">Главная</a>
		  <a href="связь.php" title="Написать письмо">Обратная связь</a>
	  </div>
	  <div id="rights">
	     <a href="">Все права защищены &copy; <?=date ('Y')?></a>
	  </div>
      <div id="social">
        <a href="https://vk.com/mycreativerooom" title="Группа ВК"><i class="fa fa-vk" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/inspiration_and_comfort_/" title="Мы в Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>		
	 </footer>
	 </div>	 
	</body>
	</html>