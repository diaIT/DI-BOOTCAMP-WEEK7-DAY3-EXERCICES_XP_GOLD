


<?php 
session_start();
if ($_POST) {
	$_SESSION['name']=$_POST['name'];

	if (isset($_SESSION['name'])|| empty('name')) {

		echo "Welcome: ".$_SESSION['name'];
		
	} else {
		echo '<form method="post" action="">
                <input type="text" name="name" value=""><br>
                <input type="submit" value="Submit">
              </form>' ;
	}
	
}

 ?>