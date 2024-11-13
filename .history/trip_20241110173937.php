<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1.0"
	/>
	<title>Around the world</title>
	<link rel="stylesheet" href="style2.css" />
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container-hero">
			<div class="container hero">
				<div class="llamar">
					<i class="fa-brands fa-whatsapp"></i>
					<div class="content-llamar">
						<span class="text">Llamanos</span>
						<span class="number">(+51)989 297 765</span>
					</div>
				</div>

				<div class="container-logo">
					<a href="#" title="Ir a mi perfil">
						<img
							class="logo"
							src="img/logo.png" alt="Travel agency" 
							height="50"
							width="50"
						>
					</a> 
					<h1 class="logo"><a href="https://localhost/DB-PF/landing.php">Around the world</a></h1>
				</div>

				<div class="container-user">
					<i class="fa-solid fa-user"></i>
					<div class="iniciar-sesion">
						<div class="text-container">
						<?php if (isset($_SESSION['username'])): ?>
							<h2 class="hover-area"> <?php echo htmlspecialchars($_SESSION['nombre'] ?? 'Usuario Desconocido') . ' ' . htmlspecialchars($_SESSION['apellidos'] ?? ''); ?></h2>
							<div class="hover-container">
								<p>
								<h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre'] ?? 'Usuario Desconocido') . ' ' . htmlspecialchars($_SESSION['apellidos'] ?? ''); ?></h2>
								<p><strong>Usuario:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
								<p><strong>DNI:</strong> <?php echo htmlspecialchars($_SESSION['dni'] ?? 'No disponible'); ?></p>
								<p><strong>Teléfono:</strong> <?php echo htmlspecialchars($_SESSION['telefono'] ?? 'No disponible'); ?></p>
								<p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email'] ?? 'No disponible'); ?></p>
								</p>
								<container id="boton_logout" >Cerrar sesión</container>
							</div>
            
						<?php else: ?>
							<span id="iniciar-sesion-click" class="text">Iniciar sesión</span>
						<?php endif; ?>

						</div>
					</div>
				</div>
				
				<script>
					var iniciarSesionBtn = document.getElementById('iniciar-sesion-click');
					iniciarSesionBtn.addEventListener('click', function() {
						window.location.href = 'https://localhost/DB-PF/login.php';
					});
				</script>
				<script>
					var cerrarSesionBtn = document.getElementById('boton_logout');
					cerrarSesionBtn.addEventListener('click', function() {
						window.location.href = 'https://localhost/DB-PF/logout.php';
					});
				</script>
			</div>
		</div>

	</header>
	
	

	<main class="main-content">
		<section class="container top-trips">
			<h1 class="heading-1">Plan your next adventure</h1>
			<p class="parrafo">¿A dónde te gustaría ir?</p>
	
			<div class="date-inputs">
				<div>
					<label for="origin-country">País de Origen:</label>
					<div class="country-box">Perú</div>
				</div>
			
				<div>
					<label for="destination-country">País de Destino:</label>
					<select id="destination-country" name="destination-country" >
						<option value="">Seleccione un país</option>
						<option value="Perú">Perú</option>
						<option value="Chile">Chile</option>
						<option value="Argentina">Argentina</option>
						<option value="México">México</option>
					</select>
				</div>
			
				<div>
					<label for="start-date">Fecha de Inicio:</label>
					<input type="date" id="start-date" name="start-date">
				</div>
			
				<div>
					<label for="end-date">Fecha de Fin:</label>
					<input type="date" id="end-date" name="end-date">
				</div>
			
				<div>
					<label for="num-people">Número de Personas:</label>
					<div class="num-people-input">
						<button type="button" onclick="decrementPeople()">-</button>
						<input type="number" id="num-people" name="num-people" min="1" value="1" readonly>
						<button type="button" onclick="incrementPeople()">+</button>
					</div>
				</div>
				
			</div>

			<button type="button" onclick="searchFlights(), updateTrips()">BuscAAAAAAAAAAR</button>
			
	
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					const cards = document.querySelectorAll('.card-trips');
					cards.forEach(card => {
						card.addEventListener('click', function() {
							cards.forEach(c => c.classList.remove('selected'));
							this.classList.add('selected');
						});
					});
				});

			</script>
			
			<section class="container Vuelo">
				<div  id="vuelo-selection">
					<!-- Vuelos de acuerdo a destino -->
				</div>
			</section>

			
			<div class="container-trips" id="trips-container">
				<!-- Trips de acuedo al pais -->
				
			</div>


			<section class="container Hotels">
				<div class="container-hotels" id="hotel-selection">
					<!-- Hoteles de acuerdo a trip -->
				</div>
			</section>

			<section class="container Transport">
				<div class="container-transport-options" id="transport-selection">
					<!--Transporte de acuerdo a trip -->
				</div>
			</section>

			<section class="container Guia">
				<div class="container-guia-options" id="guia-selection">
					<!-- Guiass de acuerdo a trip -->
				</div>
			</section>
			
			

			<div class="navigation-buttons" style="display: none;">
				<button id="back-button" onclick="goBack()">Back</button>
				<button id="nex-step" onclick="nextStep()">Next</button>
			</div>

			<div class="container confirm-trip">
				<button id="confirm-button" class="confirm-button" onclick="confirmar()">Confirma tu viaje</button>
			</div>	

		</section>

	</main>
	

	<footer class="footer">
		<div class="container container-footer">
			<div class="menu-footer">
				<div class="contact-info">
					<p class="title-footer">Información de Contacto</p>
					<ul>
						<li>
							Dirección: San Agustin 324
						</li>
						<li>Teléfono: 989 297 765</li>
						<li>EmaiL: aroundtheworld@support.com</li>
					</ul>
					<div class="social-icons">
						<span class="facebook">
							<i class="fa-brands fa-facebook-f"></i>
						</span>
						<span class="twitter">
							<i class="fa-brands fa-twitter"></i>
						</span>
						<span class="youtube">
							<i class="fa-brands fa-youtube"></i>
						</span>
						<span class="instagram">
							<i class="fa-brands fa-instagram"></i>
						</span>
					</div>
				</div>

				<div class="information">
					<p class="title-footer">Información</p>
					<ul>
						<li><a href="#">Acerca de Nosotros</a></li>
						<li><a href="#">Politicas de Privacidad</a></li>
						<li><a href="#">Términos y condiciones</a></li>
						<li><a href="#">Contactános</a></li>
					</ul>
				</div>

				<div class="my-account">
					<p class="title-footer">Mi cuenta</p>

					<ul>
						<li><a href="#">Mi cuenta</a></li>
						<li><a href="#">Historial de ordenes</a></li>
					</ul>
				</div>

				<div class="newsletter">
					<p class="title-footer">Boletín informativo</p>

					<div class="content">
						<p>
							Suscríbete a nuestra revista turística, en Arequipa siempre hay por descubrir.
						</p>
						<input type="email" placeholder="Ingresa el correo aquí...">
						<button>Suscríbete</button>
					</div>
				</div>
			</div>

		</div>
	</footer>

	<script
		src="https://kit.fontawesome.com/81581fb069.js"
		crossorigin="anonymous"
	></script>
	<script src="js/modal.js"></script>

	<script>
		function populateForm(userData) {
			if (userData) {
				document.getElementById('nombre').value = userData[3];
				document.getElementById('apellido').value = userData[4];
				document.getElementById('email').value = userData[8];
			}
		}
		document.addEventListener('DOMContentLoaded', function () {
			var hoverArea = document.querySelector('.hover-area');
			var userData = JSON.parse(hoverArea.dataset.userData);
			hoverArea.addEventListener('mouseover', function () {
				populateForm(userData);
			});
		});
	</script>


	<script src="script.js"></script>
	
</body>
</html>