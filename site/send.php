<?php
	if (isset($_POST['button_message'])) 
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$theme = $_POST['theme'];
		$intrests = $_POST['intrests'];
		include_once "connect.php";
		$sql = mysql_query("INSERT into kontakti_message(name, email, theme, message ,data_otpr) values('$name','$email', '$theme', '$intrests' , now())");
        
        if($sql == true){
echo <<<rg
    <script>
        setTimeout(function(){
            window.location.href="kontakts.php?q=1";
        }, 0);
    </script>
rg;
        }
        else{
 echo <<<rg
    <script>
        setTimeout(function(){
            window.location.href="kontakts.php?q=0";
        }, 0);
    </script>
rg;
        }

	}


	if (isset($_POST['zabron'])) 
	{
		$fam = $_POST['Familia'];
		$name = $_POST['name'];
		$number = $_POST['Number'];
		$date_1 = $_POST['date'];
        $time_1 = $_POST['time'];
        $usluga = $_POST['usluga'];
        
        if($time_1 == '' || $usluga == '')
        {
    echo <<<rg
        <script>
            setTimeout(function(){
                window.location.href="zapis.php?error=1";
            }, 0);
        </script>
rg;
        }
        else
        {
		include_once "connect.php";
        $error = mysql_query("SELECT * FROM zapis_clientov where data_zapis = '$date_1' && vremya = '$time_1'");
        if(mysql_fetch_array($error)>0)
        {
    echo <<<rg
        <script>
            setTimeout(function(){
                window.location.href="zapis.php?z=2";
            }, 0);
        </script>
rg;
        }
        else
        {
            $sql1 = mysql_query("INSERT into zapis_clientov(name, fam, tel, data_zapis ,vremya, usluga) values('$name','$fam', '$number', '$date_1', '$time_1', '$usluga')");
            if($sql1 == true){
    echo <<<rg
        <script>
            setTimeout(function(){
                window.location.href="zapis.php?z=1";
            }, 0);
        </script>
rg;
            }
            else{
     echo <<<rg
        <script>
            setTimeout(function(){
                window.location.href="zapis.php?z=0";
            }, 0);
        </script>
rg;
            }
        }
            
            
        }
    }










?>