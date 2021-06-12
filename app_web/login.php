<?php 
	session_start();
	
	if(isset($_SESSION['id'])){
        header('Location:profil_st_pr.php');
     }

	 $error = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>LOGIN</title>
</head>
<body>

<section class="haeder_main" style="justify-content: space-evenly;">

		 <?php
			include "assets/php/header.php";
		?> 



    <main class="login">
		<div class="container">
		<div class="zone_main_login">
		<div class="animation_img">
				<img src="assets/img/animation/animation.png" alt="">
			</div>
			<form action="" method="POST">
				<h3 class="form_titre">Sign up</h3>

					<input type="email" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<div class="checkout">
					<input class="input_data" type="checkbox"><p>Remmeber me?</p>
					</div>
					<div class="btn_form">
						<button name="login" type="submit">Login</button>
					</div>
					<a href="#"><p>Forgot password?</p></a>
				</form>
		</div>



			<div>

			</div>
		</div>
    </main>
</section>
<?php
    require "assets/php/connection.php";

                    if(isset($_POST['login'])){
                        $email = $_POST['email'];
                        $password = $_POST['password'];
						$sql_requet = mysqli_query($connection_DB,"SELECT * FROM  position WHERE email='$email' AND password = '$password' ");
						
											
						if(mysqli_num_rows($sql_requet) ==  1)
						{

							foreach($sql_requet as $value){

								$position_user = $value["position"];
								$id_user = $value["id_user"];

							}
							$sql_requet_posiiton = mysqli_query($connection_DB,"SELECT * FROM  $position_user WHERE id = '$id_user'");

							if(mysqli_num_rows($sql_requet_posiiton ) ==  1 )
							{
								$row = mysqli_fetch_array($sql_requet_posiiton);


								$_SESSION["id"] = $row["id"];
								$_SESSION["position"] = $position_user;

								$_SESSION['login_succesfly'] = "login_succesfly";

								header('location:./profil_st_pr.php');

							}
							else{
								echo "erroooooooooooooor";
							}

						}
						else{
							$error = true;

						}
                    }
                    ?>

<?php include "assets/php/footer.php"?>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="assets/js/main.js"></script>

<script>

	<?php
    if ($error) {
        ?>

		swal("Error", "The information is not correct!", "error");

	<?php
    }
	?>
</script>

</script>
</body>
</html>