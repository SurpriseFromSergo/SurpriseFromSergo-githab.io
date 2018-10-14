<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html>
	<head>
		<meta charset="UTF-8"> 
		<title>Контакты</title> 
		<link rel="stylesheet" href="css/main_style.css"> 
	</head>
	<body>
		<div class="content_all_Kontaktu">
			<div class="header">
				<div class="logotip">
					<div class="logo_photo">
						photo
					</div>
					<div class="logo_WORLD">
						WORLD
					</div>
				</div>
				<div class="menu">
					<div class="menu_v">
						<a href="obloshka.php">Обложка</a>
					</div>
					<div class="menu_v">
						<a href="index.php">Главная</a>
					</div>
					<div class="menu_v">
						<a href="photo__clientov.php">Фото клиентов</a>
					</div>
					<div class="menu_v">
						<a href="onas.php">О нас</a>
					</div>
					<div class="menu_v">
                        <a href="kontakts.php" style="color: blue">Контакты</a>
					</div>
					<div class="menu_v">
						<a href="zapis.php">Запись</a>
					</div>
					<div class="social_networks">
						<a href="https://vk.com" target="_blank"><img src="img/social/vk.png" alt="vk site" width=30 high=30></a>
						<a href="https://ru-ru.facebook.com/" target="_blank"><img src="img/social/fb.png" alt="facebook site" width=30 high=30></a>
						<a href="https://www.instagram.com/" target="_blank"><img src="img/social/ins.png" alt="instagram site" width=30 high=30></a>
					</div>
				</div>	
			</div>
			<div class="under_header_content_Kontaktu">
				<div class="mini_text_block_Kontaktu">
					<div class="zagolovok_text_block_Kontaktu">
						СВЯЖИТЕСЬ С НАМИ
					</div>
					<div class="osnovnue_kontaktnue_dannue_in_block_Kontaktu">
						<p><strong>Email</strong></p>
						
						<p class="pochta_i_telefon_Kontaktu"><a href="mailto:privet.19973@yandex.ru">privet.19973@yandex.ru</a></p>
						<br>
						<p><strong>Телефон</strong></p>
						
						<p class="pochta_i_telefon_Kontaktu">+7(905)925-32-74</p>
					</div>
					<div class="forma_otpravki_okna_Kontaktu">
					<form action="send.php" method="post">
						<input type="text" name="name" placeholder="Имя" required>
						<input type="email" name="email" placeholder="Email" required>
						<input type="text" name="theme" placeholder="Тема" required>
						<textarea name="intrests" placeholder="Сообщение" required></textarea>
						
                   <?php 
                    if(isset($_GET["q"]) && $_GET["q"]==1)
                    {
                        echo "Сообщение доставлено!!!";
                    } 
                        elseif(isset($_GET["q"]) && $_GET["q"]==0){
                            echo "Сообщение не доставлено!!!";
                        }
                    ?>
                    
						<input type="submit" name="button_message" value="Отправить">
					</form>


					
					</div>
				</div>
			</div>
			<div class="autor_foto_clientov">
				<h3>© 2017 Сергей Мелкомуков </h3>
			</div>
			<!--конец кода подключаем джава скрипты-->
			<script src="js/headhesive.min.js"></script>
			<script src="js/js.js"></script>
		</div>
	</body>
</html>