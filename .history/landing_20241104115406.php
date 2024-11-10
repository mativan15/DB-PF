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
	<link rel="stylesheet" href="style.css" />
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
					<h1 class="logo"><a href='https://localhost/DB-PF/landing.html'>Around the world</a></h1>
				</div>

				<div class="container-user">
					<i class="fa-solid fa-user"></i>
					<div class="iniciar-sesion">
						<div class="text-container">
						<?php if (isset($_SESSION['username'])): ?>
							<h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre'] ?? 'Usuario Desconocido') . ' ' . htmlspecialchars($_SESSION['apellidos'] ?? ''); ?></h2>
							<p class="hover-area"> </p>
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
						window.location.href = 'https://localhost/DB-PF/landing.html';
					});
				</script>
			</div>
		</div>

		<div class="container-navbar">
			<nav class="navbar container">
				<i class="fa-solid fa-bars"></i>
				<ul class="menu">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Nosotros</a></li>
					<li><a href="#">Destinos</a></li>
					<li><a href="#">Tours</a></li>
					<li><a id="enlace-contacto" href="#">Contacto</a></li>
				</ul>

				<form class="search-form">
					<input type="search" placeholder="Buscar..." />
					<button class="btn-search">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>
				</form>
			</nav>
		</div>
		
		
	</header>
	
	<div id="modal-contacto" class="modal oculto">
		<div class="modal-contenido">
			<span id="cerrar-modal">&times;</span>
	
			<form method="POST" action="{{url_for('Recibir_datos')}}" id="contacto-form">
				<label for="nombre">Nombre:</label>
				<input type="text" id="nombre" name="nombre" required  value="{{ user_data[3] }} {{ user_data[4] }}">
				
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required  value="{{ user_data[8] }}">
				<div id="emailHelp" class="form-text">No compartiremos tu email con nadie</div>
				
				<label for="region">Región:</label>
				<select id="region" name="region">
					<option value="aqp">Arequipa</option>
					<option value="ica">Ica</option>
					<option value="tacna">Tacna</option>
					<option value="lima">Lima</option>
					<option value="puno">Puno</option>
					<option value="cusco">Cusco</option>
					<option value="moquegua">Moquegua</option>
				</select>
				
				<label for="contacto">Número de Contacto:</label>
				<input type="tel" id="contacto" name="contacto" required value="{{ user_data[6] }}">
				
				<label for="intereses">Intereses de viaje:</label>
				<select id="Intereses" name="intereses">
					<option value="op1">Ciudad</option>
					<option value="op2">Campo</option>
					<option value="op3">Playa</option>
					<option value="op4">Selva</option>
				</select>
				
				<label for="mensaje">Mensaje:</label>
				<textarea id="mensaje" name="mensaje" rows="4"></textarea>
				
				<button type="submit">Enviar</button>
			</form>
		</div>
	</div>
	
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			if ( user_data ) {
				const form = document.getElementById('contacto-form');
				form.querySelectorAll('input').forEach(function(input) {
					if ( user_data[loop.index] ) {
						input.value = user_data[loop.index] ;
					}
				});
			}
		});
	</script>
	

	<section class="banner">
		<div class="content-banner">	
			{% if user_data %}
                <h2 id="saludo">Hola, {{ user_data[3] }}!</h2>
            {% else %}
				<h2 id="saludo">Hola!</h2>
            {% endif %}
			 
			
			<p>Bienvenidos a</p>
			<h2>Arequipa <br />Ciudad Blanca</h2>
			<a href="https://localhost/DB-PF/trip.html">Tu viaje comienza aquí</a>
		</div>
	</section>

	<main class="main-content">
		<section class="container container-features">
			<div class="card-feature">
				<i class="fa-regular fa-star"></i>
				<div class="feature-content">
					<span>13+ YEARS OF EXPERIENCE</span>
					<p>We have experience in the tourism industry, over 50,000 customers have traveled with us.</p>
				</div>
			</div>
			<div class="card-feature">
				<i class="fa-solid fa-map-location-dot"></i>
				<div class="feature-content">
					<span>20+ DESTINATIONS</span>
					<p>We can help you plan the vacation of your dreams.</p>
				</div>
			</div>
			<div class="card-feature">
				<i class="fa-solid fa-square-h"></i>
				<div class="feature-content">
					<span>LUXURY HOTELS</span>
					<p>We have more than 10 agreements with luxurious hotoles.</p>
				</div>
			</div>
			<div class="card-feature">
				<i class="fa-solid fa-headset"></i>
				<div class="feature-content">
					<span>TOP NOTCH SUPPORT</span>
					<p>You can consult and book your trip with us online, easily, quickly and safely.</p>
				</div>
			</div>
		</section>

		<section class="container top-categories">
			<h1 class="heading-1">Destinos Populares</h1>
			<div class="container-categories">
				<div class="card-category category-colca">
					<p>Colca</p>
					<span>Ver más</span>
				</div>
				<div class="card-category category-cotahuasi">
					<p>Cotahuasi</p>
					<span>Ver más</span>
				</div>
				<div class="card-category category-salinas">
					<p>Salinas</p>
					<span>Ver más</span>
				</div>
			</div>
		</section>

		
		<section class="container top-trips">
			<h1 class="heading-1">Seguro te encantará</h1>

			<div class="container-options">
				<p>Find you ideal tour, here we offer you the best selection of trips to Arequipa. Allow yourself to be seduced by the history, culture and nature of Arequipa.</p>
			</div>
			

			<div class="container-trips">
				
				<div class="card-trips" >
					<div class="container-img">
						<img src="img/colca2.jpg" alt="Colca Full Day" />
						<span class="discount">-13%</span>
	
					</div>
					<div class="content-card-trips">
						<span class="date">2 días y 1 noche</span>
						<h3>Colca Full Day</h3>
						<p class="list_info">
							<i class="fa fa-location-dot"></i> Provincia de Caylloma<br />
							<i class="fa fa-bed" ></i> Accommodations included<br />
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


				<div class="card-trips">
					<div class="container-img">
						<img src="img/cotahuasi.jpg" alt="Cotahuasi" />
						<span class="discount">-13%</span>
	
					</div>
					<div class="content-card-trips">
						<span class="date">3 days</span>
						<h3>Cañon de Cotahuasi</h3>
						<p class="list_info">
							<i class="fa fa-location-dot"></i> Provincia La Union<br />
							<i class="fa fa-bed" ></i> Accommodations included<br />
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

				<div class="card-trips">
					<div class="container-img">
						<img src="img/salinas.jpg" alt="Colca Full Day" />
						<span class="discount">-13%</span>
	
					</div>
					<div class="content-card-trips">
						<span class="date">1 días</span>
						<h3>Laguna Salinas</h3>
						<p class="list_info">
							<i class="fa fa-location-dot"></i> Provincia Arequipa and Caylloma<br />
							<i class="fa fa-bed" ></i> Accommodations included<br />
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

		<section class="gallery">
			<img src="img/salinas.jpg" alt="Gallery Img1" class="gallery-img-1"/>
			<img src="img/colcacanyon.jpg" alt="Gallery Img2" class="gallery-img-2"/>
			<img src="img/catedral.jpg" alt="Gallery Img3" class="gallery-img-3"/>
			<img src="img/pillones.avif" alt="Gallery Img4" class="gallery-img-4"/>
			<img src="img/piedras.webp" alt="Gallery Img5" class="gallery-img-5"/>
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

	
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const cards = document.querySelectorAll('.card-trips');
			cards.forEach(card => {
				card.addEventListener('click', function() {
					window.location.href = 'https://localhost/DB-PF/trip.html';
				});
			});
		});

	</script>
	
</body>
</html>
