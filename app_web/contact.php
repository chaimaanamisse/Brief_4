<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/contact.css">
	<script src="https://kit.fontawesome.com/ecb8b74a3a.js" crossorigin="anonymous"></script>
	<script>
		function verif()
		{ a=contact-form.username.value;
		exp=/^[a-zA-Z ]+$/;
		if(exp.test(a) ==false) {alert("attention votre nom n'est pas valid");return false;}

	}

	</script>
</head>
<body>

<section class="haeder_main" style="justify-content: space-evenly;">

		<?php

		include "assets/php/header.php";

		?>


    <main class="box-contact">
		
        <div class="contenu-contact">
			
            <div class="before-form">
				<h2 class="titre-contact">Get a quote</h2>
				<p class="p-contact">full up the form and our team will back 
					to you within 24 hours</p>
					<div class="boite-info">
						<i class="fas fa-phone-alt"></i>
						<p class="info">+00 0000000000000</p></div>
					<div class="boite-info"><i class="fas fa-at"></i>
						<p class="info">student@gmail.com</p>
						</div>
					<div class="boite-info"><i class="fas fa-map-marker-alt"></i><p class="info">44, Rue AL massira SAFI</p>
						</div>
					<div class="reseau-sociaux">
						<div class="moncercle"><i class="fab fa-twitter"></i></div>
						<div class="moncercle"><i class="fab fa-youtube"></i></div>
						<div class="moncercle"><i class="fab fa-instagram"></i></div>

					</div>
                </div>

                <div class="contact-form">
                	<form name="contact-form" action="assets/php/contact_sent.php" method="POST">

						<h1 class="form-titre">Contact us</h1>
						<input type="text" name="username" placeholder="name">
						<input type="email" name="email" placeholder="Email">
						<input type="text" name="sujet" placeholder="subject">
						<textarea name="msg" id="" cols="30" rows="10"  placeholder="message"></textarea>
						<button type="submit" name="submit" class="btn-form" onclick="return verif()">Send</button>
						
					</form>
				</div>


        
            
            
    
</div>
    </main>
   
       

   </section>

    <footer>
        <p>© Copyright 2021 Wecode, All Rights Reserved.</p>
        <div class="footer_btn">
            <button>Support</button>
        </div>
    </footer>

	<script src="node_modules/sweetalert/dist/sweetalert.min.js"></script>

	<?php
	
	if(isset( $_SESSION["mesage_sent"] ))
	{
	?>
		<script>					
		swal("Message has been sent");
		</script>
		

	<?php
	  unset($_SESSION['mesage_sent']);

	}
	elseif(isset( $_SESSION["mesage_not_sent"] )){
        ?>
			<script>					
				swal("Field Empty");
			</script>
	<?php
		  unset($_SESSION["mesage_not_sent"]);

    }
	?>

 
    
</body>
</html>