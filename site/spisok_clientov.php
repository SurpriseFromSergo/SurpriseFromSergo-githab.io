<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html>
	<head> 
		<meta charset="UTF-8"> 
		<title>Клиенты на сегодня</title> 
		<link rel="stylesheet" href="css/main_style.css"> 
	</head> 
	<body> 
		<div class="content_all_O_nas">
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
						<a href="onas.php" style="color: blue">О нас</a>
					</div>
					<div class="menu_v">
						<a href="kontakts.php">Контакты</a>
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
			<div class="content_spisok_">
             <dir class="zagolovoc_spisok">Список клиентов на сегодня</dir>
              <dir class="table_spisok">
               <table>
                    <tr>
                        <td width=50 high=50>Имя</td>
                        <td width=100 high=50>Дата</td>
                        <td width=100 high=50>Время</td>
                        <td width=100 high=50>Услуга</td>
                    </tr>
                    
<?php 
    include_once "connect.php";
    $nextPoas = time() + (3 * 60 * 60);
     $data_ = date("Y-m-d", $nextPoas);
                
    $sql = mysql_query("SELECT * FROM zapis_clientov where data_zapis = '$data_'");
    while($row = mysql_fetch_array($sql))
    {
        echo<<<show
     
     <tr>
        <td width=50 high=50>$row[name]</td>
        <td width=100 high=50>$row[data_zapis]</td>
        <td width=100 high=50>$row[vremya]</td>
        <td width=100 high=50>$row[usluga]</td>
    </tr>
     
show;
    }
?>
                    
                    
                </table>
                </dir>
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