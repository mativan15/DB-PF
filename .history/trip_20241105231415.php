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
					<h1 class="logo"><a href="https://localhost/DB-PF/landing.html">Around the world</a></h1>
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
				<a>Start Date:</a>
				<input type="date" id="start-date" name="start-date">
				<a>End Date:</a>
				<input type="date" id="end-date" name="end-date">
			</div>
	
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
	
			<div class="container-trips">
				<!-- Trip 1 -->
				<div class="card-trips" data-destination="Colca_Full_Day">
					<div class="container-img">
						<img src="img/colca2.jpg" alt="Colca Full Day" />
						<span class="discount">-13%</span>
					</div>
					<div class="content-card-trips">
						<span class="date">2 días y 1 noche</span>
						<h3>Colca Full Day</h3>
						<p class="list_info">
							<i class="fa fa-location-dot"></i> Provincia de Caylloma<br />
							<i class="fa fa-bed"></i> Accommodations included<br />
							<i class="fa fa-bus"></i> Transfers included<br />
							<i class="fa fa-flag-o"></i> Activities and excursions<br />
							<i class="fa fa-coffee"></i> Breakfast included<br />
							<i class="fa fa-calendar"></i> Daily departures<br />
						</p>
					</div>
					<div class="card-stats">
						<div class="stat">
							<div class="value">From</div>
						</div>
						<div class="stat">
							<div class="value"></div>
						</div>
						<div class="stat">
							<div class="value">US$180</div>
						</div>
					</div>
				</div>
	
				<!-- Trip 2 -->
				<div class="card-trips" data-destination="Cañon_de_Cotahuasi">
					<div class="container-img">
						<img src="img/cotahuasi.jpg" alt="Cotahuasi" />
						<span class="discount">-13%</span>
					</div>
					<div class="content-card-trips">
						<span class="date">3 days</span>
						<h3>Cañon de Cotahuasi</h3>
						<p class="list_info">
							<i class="fa fa-location-dot"></i> Provincia La Union<br />
							<i class="fa fa-bed"></i> Accommodations included<br />
							<i class="fa fa-bus"></i> Transfers included<br />
							<i class="fa fa-flag-o"></i> Activities and excursions<br />
							<i class="fa fa-coffee"></i> Breakfast included<br />
							<i class="fa fa-calendar"></i> Daily departures<br />
						</p>
					</div>
					<div class="card-stats">
						<div class="stat">
							<div class="value">From</div>
						</div>
						<div class="stat">
							<div class="value"></div>
						</div>
						<div class="stat">
							<div class="value">US$300</div>
						</div>
					</div>
				</div>
	
				<!-- Trip 3 -->
				<div class="card-trips" data-destination="Laguna_Salinas">
					<div class="container-img">
						<img src="img/salinas.jpg" alt="Colca Full Day" />
						<span class="discount">-13%</span>
					</div>
					<div class="content-card-trips">
						<span class="date">1 días</span>
						<h3>Laguna Salinas</h3>
						<p class="list_info">
							<i class="fa fa-location-dot"></i> Provincia Arequipa and Caylloma<br />
							<i class="fa fa-bed"></i> Accommodations included<br />
							<i class="fa fa-bus"></i> Transfers included<br />
							<i class="fa fa-flag-o"></i> Activities and excursions<br />
							<i class="fa fa-coffee"></i> Breakfast included<br />
							<i class="fa fa-calendar"></i> Daily departures<br />
						</p>
					</div>
					<div class="card-stats">
						<div class="stat">
							<div class="value">From</div>
						</div>
						<div class="stat">
							<div class="value"></div>
						</div>
						<div class="stat">
							<div class="value">US$60</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section class="container Transport">
			<p class='parrafo'>Selecciona el medio de transporte de tu preferencia</p>
	
			<div class="container-transport-options">
				<div class="transport-option" data-transport="Automovil">
					<h3>Automovil</h3>
					<img src="img/carro.png" alt="carro" />
					<div class="price-box">$100</div>
				</div>
				<div class="transport-option" data-transport="Minivan">
					<h3>Minivan</h3>
					<img src="img/minivan.png" alt="Minivan" />
					<div class="price-box">$80</div>
				</div>
				<div class="transport-option" data-transport="Bus">
					<h3>Bus</h3>
					<img src="img/bus.png" alt="Minivan" />
					<div class="price-box">$30</div>
				</div>
			</div>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					const transport = document.querySelectorAll('.transport-option');
					transport.forEach(card => {
						card.addEventListener('click', function() {
							transport.forEach(c => c.classList.remove('selected'));
							this.classList.add('selected');
						});
					});
				});
			</script>
		</section>
	
		<section class="container Food">
			<p class='parrafo'>Selecciona tu tipo de comida preferida</p>
			<div class="container-food-options">
				<div class="food-option" data-food="Vegetariano">
					<i class="fas fa-carrot"></i> <span>Vegetariano</span>
				</div>
				<div class="food-option" data-food="Pastas">
					<i class="fas fa-pizza-slice"></i> <span>Pastas</span>
				</div>
				<div class="food-option" data-food="Carnes">
					<i class="fas fa-drumstick-bite"></i> <span>Carnes</span>
				</div>
			</div>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					const foodOptions = document.querySelectorAll('.food-option');
					foodOptions.forEach(option => {
						option.addEventListener('click', function() {
							foodOptions.forEach(opt => opt.classList.remove('selected'));
							this.classList.add('selected');
						});
					});
				});
				</script>
		</section>
	
		<section class="container Hotels">
			<p class="parrafo">¿Dónde te hospedaras?</p>
	
				<script>
					document.addEventListener('DOMContentLoaded', function() {
						const cards = document.querySelectorAll('.card-hotels');
						cards.forEach(card => {
							card.addEventListener('click', function() {
								cards.forEach(c => c.classList.remove('selected'));
								this.classList.add('selected');
							});
						});
					});
				</script>
			<div class="container-hotels">
				<div class="card-hotels" data-hotel="Luxury_Lodge_1">
					<div class="container-img">
						<img src="img/luxurius_lodge.jpg" alt="Colca Full Day" />
	
					</div>
					<div class="content-card-hotels">
						<span class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
						</span>
						<h3>Luxury Lodge</h3>
						<p>Lorem ipsum</p>
					</div>
					<div class="card-stats">
						<div class="stat">
							<div class="value">From</div>
						</div>
						<div class="stat">
							<div class="value"></div>
						</div>
						<div class="stat">
							<div class="value">US$150</div>
						</div>
					</div>
				</div>

				<div class="card-hotels" data-hotel="Luxury_Lodge_2">
					<div class="container-img">
						<img src="img/luxurius_lodge.jpg" alt="Colca Full Day" />
	
					</div>
					<div class="content-card-hotels">
						<span class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
						</span>
						<h3>Luxury Lodge</h3>
						<p>Lorem ipsum</p>
					</div>
					<div class="card-stats">
						<div class="stat">
							<div class="value">From</div>
						</div>
						<div class="stat">
							<div class="value"></div>
						</div>
						<div class="stat">
							<div class="value">US$180</div>
						</div>
					</div>
				</div>

				<div class="card-hotels" data-hotel="Luxury_Lodge_3">
					<div class="container-img">
						<img src="img/luxurius_lodge.jpg" alt="Colca Full Day" />
	
					</div>
					<div class="content-card-hotels">
						<span class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
						</span>
						<h3>Luxury Lodge</h3>
						<p>Lorem ipsum</p>
					</div>
					<div class="card-stats">
						<div class="stat">
							<div class="value">From</div>
						</div>
						<div class="stat">
							<div class="value"></div>
						</div>
						<div class="stat">
							<div class="value">US$210</div>
						</div>
					</div>
				</div>

				<div class="card-hotels" data-hotel="Luxury_Lodge_4">
					<div class="container-img">
						<img src="img/luxurius_lodge.jpg" alt="Colca Full Day" />
	
					</div>
					<div class="content-card-hotels">
						<span class="stars">
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
						</span>
						<h3>Luxury Lodge</h3>
						<p>Lorem ipsum</p>
					</div>
					<div class="card-stats">
						<div class="stat">
							<div class="value">From</div>
						</div>
						<div class="stat">
							<div class="value"></div>
						</div>
						<div class="stat">
							<div class="value">US$240</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section class="container Photos">
			<p class='parrafo'>El paquete de fotos ideal para esta aventura lo eliges tú</p>
			<div class="container-photo-options">
				<div class="photo-option" data-photo="_1_Foto_HD">
					<h3>1 Foto HD</h3>
					<img src="img/photo1.png" alt="carro" />
					<div class="price-box">Free</div>
				</div>
				<div class="photo-option" data-photo="_10_Fotos_HD">
					<h3>10 Fotos HD</h3>
					<img src="img/photo2.png" alt="Minivan" />
					<div class="price-box">$50</div>
				</div>
				<div class="photo-option" data-photo="_15_Fotos_HD">
					<h3>15 Fotos HD + 1 Foto impresa</h3>
					<img src="img/photo3.png" alt="Minivan" />
					<div class="price-box">$65</div>
				</div>
			</div>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					const photo = document.querySelectorAll('.photo-option');
					photo.forEach(card => {
						card.addEventListener('click', function() {
							photo.forEach(c => c.classList.remove('selected'));
							this.classList.add('selected');
						});
					});
				});
			</script>
		</section>
	
		<section class="container confirm-trip">
			<button id="confirm-button" class="confirm-button">Confirma tu viaje</button>
			<script>
				document.getElementById('confirm-button').addEventListener('click', function() {
					const startDate = document.getElementById('start-date').value;
					const endDate = document.getElementById('end-date').value;
					const selectedTrip = document.querySelector('.card-trips.selected').getAttribute('data-destination');
					const selectedTransport = document.querySelector('.transport-option.selected').getAttribute('data-transport');
					const selectedFood = document.querySelector('.food-option.selected').getAttribute('data-food');
					const selectedHotel = document.querySelector('.card-hotels.selected').getAttribute('data-hotel');
					const selectedPhoto = document.querySelector('.photo-option.selected').getAttribute('data-photo');
		
					const tripDetails = {
						startDate: startDate,
						endDate: endDate,
						destination: selectedTrip,
						transport: selectedTransport,
						food: selectedFood,
						hotel: selectedHotel,
						photo: selectedPhoto
					};
		
					fetch('/confirmar', {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json'
						},
						body: JSON.stringify(tripDetails)
					})
					.then(response => response.json())
					.then(data => {
						window.location.href = 'https://localhost/DB-PF/confirmar.php';
					})
					.catch(error => console.error('Error:', error));
				});
			</script>
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
	
</body>
</html>