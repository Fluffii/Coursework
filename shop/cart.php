<?php include_once '../register/db.php'; 
session_start(); 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="../shop/css/style_index.css">
</head>
<body>
	<div id="top-line"></div>
		<div id="header">
    		<a id="logo" href="#"></a>
    		<?php if(isset($_SESSION['logged_user'])) 
			{ ?>
    		<div id="top-menu">
    			<a href="../shop/index.php">Главная</a>
        		<div class="top-menu-line"></div>
        		<a href="../register/logout.php">Выход</a>
        		<div class="top-menu-line"></div>
    		</div>
			<?php } else {?>
				<div id="top-menu">
				<a href="../shop/index.php">Главная</a>
        		<div class="top-menu-line"></div>
        		<a href="../register/login.php">Вход</a>
        		<div class="top-menu-line"></div>
        		<a href="../register/signup.php">Регистрация</a>
    		</div>
    	<?php }?>
    	</div>
	<main id="content">
			<div class="main-cart"></div>
			<div class="email-field">
				<p>
                    <p>Имя:</p>
                    <input type="text" name="ename">
                </p>
				<p>
                    <p>Email:</p>
                    <input type="text" name="email">
                </p>
				<p>
                    <p>Телефон:</p>
                    <input type="text" name="ephone">
                </p>
				<p>
                    <p><button class="send-email">Отправить</button></p>
                </p>
		</div>
	</main>
	<div id="footer">
    	<div id="footer-menu">
        <?php if(isset($_SESSION['logged_user'])) 
			{ ?>
	    			<a href="../index.php">Главная</a>
	        		<div class="top-menu-line"></div>
	        		<a href="../register/logout.php">Выход</a>
			<?php } else {?>
					<a href="../shop/index.php">Главная</a>
	        		<div class="top-menu-line"></div>
	        		<a href="../register/login.php">Вход</a>
	        		<div class="top-menu-line"></div>
	        		<a href="../register/signup.php">Регистрация</a>
    	<?php }?>
    </div>
    <div id="copyright">
        &copy; <a href="#">www.sparksmobile.ru</a>
    </div>
	<script type="text/javascript" src="../shop/js/jquery-3.4.0.min.js"></script>
	<script type="text/javascript" src="../shop/js/cart.js"></script>
</body>
</html>
