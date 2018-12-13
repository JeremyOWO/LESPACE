
<?php
	
	
		if(!empty($_POST))
		{
		

		// Cette partie expédie un mail a l'adresse indiqué ci-dessous
		$to = 'florian.dublange@lespace-owo.com';
		$prenom = $_POST["prenom"];
		$nom= $_POST["nom"];
		$email= $_POST["email"];
		$commentaire= $_POST["commentaire"];
		

		
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$message ='<table style="width:100%">
			<tr>
				<td>'.$prenom.'  '.$nom.'</td>
			</tr>
			<tr><td>Email: '.$email.'</td></tr>
			<tr><td>Text: '.$commentaire.'</td></tr>
			
		</table>';

		if (@mail($to, "OWO - Avis", $message, $headers))
		{
			echo '<script type="text/javascript">window.alert("Votre avis a bien été enregistré");</script>';
		}else{
			echo '<script type="text/javascript">window.alert("Un problème est survenu, Merci de remplir tout les champs");</script>';
		}
	}
	
?>
<!DOCTYPE html>
	<html lang="fr" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" type="image/png" href="http://www.lespace-owo.com/img/fav.ico">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>L'Espace - OwO</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#acceuil">Accueil</a></li>
				          <li><a href="#objectif">Nos objectifs</a></li>
				          <li><a href="#presentation">OWO</a></li>
				          <li><a href="#equipe">L'équipe</a></li>
				          <li><a href="#NL">Votre Avis</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section  id="acceuil">	
				<div  style="margin-top:75px;">
					<div >
					<img src="img/header-bg.png	"	class="img-fluid"/>								
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start we-offer Area -->
			<section class="we-offer-area section-gap" id="objectif">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Nos Objectifs</h1>
								<p class="bold-subtitle">Mettre en œuvre des solutions pour dynamiser le commerce de proximité.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-6">
							<div class="single-offer d-flex flex-row pb-30">
								<div class="icon">
								<img src="img/s1.png" alt="">
								</div>
								<div class="desc">
									<p>
									Le  numérique  crée  de  la  distance  si  celui-ci  n’est  qu’une  solution  digitale  de  plus.  Nous nous positionnons comme de véritable  <span style="font-weight:bold; text-decoration:underline;">acteur  de  la  transformation</span>  au  travers  de différents projets basés sur nos modes de consommations. 
									</p>
								</div>
							</div>
							<div class="single-offer d-flex flex-row pb-30">
								<div class="icon">
									<img src="img/s2.png" alt="">
								</div>
								<div class="desc">
									<p>
									Le premier projet est le développement d’une solution de type <span style="font-weight:bold; text-decoration:underline;">application mobile</span>. Son objectif est de proposer un outil numérique permettant de gérer l’affluence et d’optimiser l’expérience client dans les commerces de proximité.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-offer d-flex flex-row pb-30">
								<div class="icon">
									<img src="img/s3.png" alt="">
								</div>
								<div class="desc">
									<p>
									Au-delà de cet outil, l’objectif final de L’ESPACE est de <span style="font-weight:bold; text-decoration:underline;">créer une synergie</span>, à Salon de Provence, où nous pourrons créer une nouvelle dynamique autour du digital pour faciliter le quotidien de chacun.
									</p>
								</div>
							</div>
							<div class="single-offer d-flex flex-row pb-30">
								<div class="icon">
									<img src="img/s4.png" alt="">
								</div>
								<div class="desc">
									<p>
									Le Networking est le fait de se <span style="font-weight:bold; text-decoration:underline;">constituer un réseau</span> de relations et de savoir en tirer parti, notamment dans un but professionnel. Les outils du digital permettent de faciliter ces échanges. 
									</p>
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End we-offer Area -->
			
	
			<!-- Start home-video Area -->
			<section class="home-video-area" id="presentation" style="padding-bottom:0px;margin-bottom:0px;">
				<div class="container-fluid">
					<div class="row justify-content-end align-items-center">
						<div class="col-lg-6 padding-top-supp" style="padding-left:8%; padding-left:8%;text-justify:auto;">
							
							<h1 class="no-padding-bot no-margin-bot ">L'ESPACE OwO</h1>
							<p class="bold-subtitle">Optimisez et augmentez vos ventes grâce à la gestion de l’affluence.<p>
							<p style="font-weight: 500;">
							La Start Up Salonaise est dédiée au  développement d’une solution digitale à destination des commerces de proximité. L’application mobile « Owo » permettra :
							</p>
							<ol>
								<li>1.	De référencer les commerces dans une base de données ludique qui sera traitée en fonction des habitudes de vos clients.</li>
								<li>2.	D’accompagner les commerçants dans la gestion de leurs affluences en proposant aux utilisateurs des plannings en fonction de leurs besoins et habitudes.</li>
								<li>3.	D’optimiser les ventes des commerces en travaillant sur les habitudes et les besoins de leurs clients.</li>
</ol>
						</div>
						<section class="col-lg-6" >
									
									<img src="img/video-bg.png" class="img-fluid" >
								
							
						</section>											
					</div>
				</div>
					
			</section>
			<!-- End home-aboutus Area -->
			

			
			

			<!-- Start testomial Area -->
			<section class="testomial-area section-gap" id="equipe">
			<hr/>
				<div class="container" style="padding-top:30px;">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">L'équipe</h1>
								<p class="bold-subtitle">Jeune et dynamique voici l'équipe prête à developper L'ESPACE</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-tstimonial-carusel">
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/FD.png" alt="">
								<p class="desc">
								Habitant de Salon de Provence de 28 ans, dynamique dans ses engagements professionnels et personnels. En responsabilité dans le monde associatif il est à l’initiative de cette structure.
								</p>
								<h4>Florian DUBLANGE</h4>
								<p>
									Dirigeant
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/FP.png" alt="">
								<p class="desc">
								Avec plusieurs années passées dans le management technique où l'humain et la communication ont été au coeur de son activité. Il met naturellement ses compétences au service de l'espace.</p>
								<h4>Frédéric PINET</h4>
								<p>
									Responsable commercial
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/JB.png" alt="">
								<p class="desc">
								Agé de 27 ans, ses connaissances dans le développement logiciel et son dynamisme lui permettent aujourd'hui de prendre en charge le développement de notre application.	
							</p>
								<h4>Jérémy BERTHIER</h4>
								<p>
									Responsable Technique
								</p>
							</div>	
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/SN.png" alt="">
								<p class="desc">
								Manager dans la vie professionnelle et jeune papa de 29 ans , il contribue grâce à son experience et à ses compténces techniques à relever ce challenge avec optimisme.</p>
								<h4>Soufiane Naser</h4>
								<p>
									Responsable produit
								</p>
							</div>
																	
						</div>
					</div>
				</div>	
			</section>

			
			
		
			

			<!-- Start callto-action Area -->
			<section class="callto-action-area relative section-gap" id="NL">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Nous avons besoin de vos avis</h1>
								<p></p>
								<p></p> <!-- Saut de Ligne -->
							</div>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-10">
							<div class="align-items-center">
								<form method="POST" action="#" onsubmit="return verifier(this)">
									<div class="row mb-1 d-flex justify-content-center">
										<div class="col-lg-4 ">
											<input type="text" class="margin-bottom-supp" style="width: 100%;" placeholder="Prénom" name="prenom" ID="prenom" onBlur="coloration(this)"/>
										</div>
										<div class="col-lg-4 ">
											<input type="text" style="width: 100%;" placeholder="Nom" name="nom" ID="nom" onBlur="coloration(this)"/>
										</div>
									</div>
									<div class="row mb-1 d-flex justify-content-center">
										<div class="col-lg-8 ">
											<input type="email" style="width: 100%;" placeholder="Adresse e-mail" name="email" ID="email" onBlur="coloration(this)" />
										</div>
									</div>
									<div class="row mb-1 d-flex justify-content-center">
										<div class="col-lg-8 ">
											<textarea style="width: 100%;" placeholder=" Indiquez votre avis ici" name="commentaire" ID="commentaire" rows="4" onBlur="coloration(this)"></textarea>
										</div>
									</div>
									<div class="row d-flex justify-content-center">
										<input type="submit" class="primary-btn" id="envoyer" class="envoyer" value="Envoyer"/>
									</div>
									
								</form>
								
							</div>
						</div>
					</div>	
				</div>	
			</section>
			<!-- End calto-action Area -->
		
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-12 justify-content-center" style="text-align:center;margin-bottom:50px;">
							<img src="img/logo.png"/>
						</div>
						<div class="col-lg-5 col-sm-12 justify-content-center">
							<div class="row">
								<div class="col-lg-12">
									<p style="font-size:30px;text-align: center;">Nous contacter</p>
								</div>
							</div>
							<div class="row">
									<div class="col-lg-12" style="text-align: center;">
										<ul>
											<li><img src="img/mail.png"/>&emsp;Mail : </li>
											<li><a style="color:#005EA4;"href="mailto:florian.dublange@lespace-owo.com">M Florian Dublange</a></li>
											<li>&emsp;</li>
											<li><img src="img/adresse.png"/>&emsp;Adresse : </li>
											<li>Mr Florian DUBLANGE</li>
											<li>Avenue de Weirtheim</li>
											<li>Résidence les vert bocage</li>
											<li>Batiment M</li>
											<li>13300 Salon de Provence</li>
										</ul>
									</div>
								</div>
								
						</div>
						<div class="col-lg-4 col-sm-12 footer-social justify-content-center">
								<div class="row">
										<div class="col-lg-12">
											<p style="font-size:30px;text-align: center;">Suivez-nous</p>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 text-center">
											<a href="https://www.facebook.com/LESPACE.OWO/"><i class="fa fa-facebook"></i></a>
											<a href="https://www.instagram.com/lespaceowo/"><i class="fa fa-instagram"></i></a>
										</div>
									</div>		
								</div>					
						</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-12 col-sm-12 footer-text  text-center">
							
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Réalisé par <a class="color-corporate" href="http://www.jeremy-berthier.fr">Jérémy BERTHIER</a>
						</p>
						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	
			/*<script>
				function coloration(champ) {
					if(champ.value)
					{
						champ.style.backgroundColor = "#f9f9ff";
					}
					
				}
			</script>	
			<script type="text/javascript"> // Le script permet le scroll automatique vers la section objectif au bout de 3sec a une vitesse de 1,5 sec
				var t = setTimeout(function(){
				$('html,body').animate({
				scrollTop: $("#objectif").offset().top},
				1500); 
				},3000);

			</script>
			<script type="text/javascript"> // Le script annulé le scroll automatique a partir du moment ou le visiteur a déja scroller la page manuellement
				window.onscroll = function (e) {  
				clearTimeout(t);
				}
			</script>
			<script type="text/javascript">
				function verifier(f){
					
					var nomOk = verifNom(f.nom);
					
					var prenomOk = verifNom(f.prenom);
					
					var emailOk = verifNom(f.email);
					
					var commentaireOk = verifNom(f.commentaire);
					
					if(nomOk && prenomOk && emailOk && commentaireOK)
						return true;
					else
					{
						alert("Veuillez remplir correctement tous les champs");
						return false;
					}
				}
				function surligne(champ, erreur)
				{
				if(erreur)
					champ.style.backgroundColor = "#fba";
					
				else
					champ.style.backgroundColor = "";
				}
				function verifNom(champ)
				{
				if(!champ.value)
				{
					surligne(champ, true);
					return false;
				}
				else
				{
					surligne(champ, false);
					return true;
				}
				
				/*function verifMail(champ)
				{
				//var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
				if(!champ.value)
				{
					surligne(champ, true);
					return false;
				}
				else
				{
					surligne(champ, false);
					return true;
				}
				}*/
			}
			</script>
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



