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
					<h1 class="logo"><a href="/">Around the world</a></h1>
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
						window.location.href = 'https://localhost/DB-PF/landing.php';
					});
				</script>
			</div>
		</div>

	</header>
	


	<main class="main-content">
        <h1 class="heading-1">Confirm your trip!</h1>
        <p class="parrafo">Todo listo para esta gran aventura, te esperamos!</p>

        <section class="container summary">
            <div class="summary-column image-column">
                <img id="destino-imagen" src="" alt="Destination Image" />
            </div>
            <div class="summary-column details-column">
                <h3>Resumen de tu viaje</h3>
                
                
                    <p><strong>Fecha de inicio:</strong> <span id="fechaInicio"></span></p>
                    <p><strong>Fecha de fin:</strong> <span id="fechaFin"></span></p>
                    <p><strong>Duración:</strong> <span id="duracion"></span> días y noches</p>
                    <p><strong>Número de personas:</strong> <span id="numPersonas"></span></p>

					<p><strong>Destino:</strong> <span id="destino"></span></p>
					<p><strong>Paquete Turistico:</strong> <span id="destino-trip"></span> <span class="price">US$<span id="precio_trip">0</span></span></p>

					<p><strong>Hotel:</strong><span id="hotel-nombre"></span> <span class="price">US$<span id="precio_hotel">0</span></span></p>
					<p><strong>Transporte:</strong><span id="transporte-tipo"></span><span  id = "transporte-empresa"></span><span class="price">US$<span id="precio_transporte">0</span></span>	</p>
					<p><strong>Guía:</strong><span id="guia-nombre"></span></p>

    
                <!-- precio final -->
                <div class="detail-group total-price">
                    <p class="precio-final">
                        <strong>Precio total:</strong> 
                        US$<span id="precio_total">0</span>
                    </p>
                    <p class="tax-note">*Incluye cargo por servicio (US$20)</p>
                </div>

                <!-- COnfirmar o regresar -->
                <div class="button-group">
                    <div class="button confirmar">
                        <a href="#" id="confirmarBtn">Confirmar Reserva</a>
                    </div>
                    <div class="button regresar">
                        <a href="trip.php">Regresar</a>
                    </div>
                </div>

                <!-- para indicar si se ha registrado bien la reserva -->
                <div id="popup" class="popup" style="display: none;">
                    <div class="popup-content">
                        <i class="fas fa-check-circle"></i>
                        <p>Solicitud enviada correctamente</p>
                        <p>Su confirmación está en proceso...</p>
                    </div>
                </div>

                <!-- Por si las moscas -->
                <div class="contact-info">
                    <p class="contact-doubt-subtitle"> Contact information</p>
                <p class="contact-doubt">If you have any doubts or questions you can contact us.</p>
                <p class="contact-doubt"> Phone: (+51) 989 297 765</p>
                <p class="contact-doubt"> E-mail: aroundtheworld@support.com</p>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
		const tripDetails = JSON.parse(localStorage.getItem('tripDetails'));
		
		if (!tripDetails) {
			alert('No se encontraron detalles del viaje');
			window.location.href = 'trip.php';
			return;
		}

		document.getElementById('fechaInicio').textContent = tripDetails.departureDate;
		document.getElementById('fechaFin').textContent = tripDetails.returnDate;
		document.getElementById('destino').textContent = tripDetails.destination.replace(/_/g, ' ');
		document.getElementById('numPersonas').textContent = tripDetails.numPeople;

		//calcula la duracion
		const inicio = new Date(tripDetails.departureDate);
		const fin = new Date(tripDetails.returnDate);
		const duracion = Math.ceil((fin - inicio) / (1000 * 60 * 60 * 24));
		document.getElementById('duracion').textContent = duracion;

		//Trip
		document.getElementById('precio_trip').textContent = tripDetails.trip.price;
		document.getElementById('destino-imagen').textContent = tripDetails.trip.image;
		document.getElementById('destino-trip').textContent = tripDetails.trip.destination;

		//Hotel
		document.getElementById('hotel-nombre').textContent = tripDetails.hotel.name;
		document.getElementById('precio_hotel').textContent = tripDetails.hotel.price;

		//Transporte
		document.getElementById('transporte-tipo').textContent = tripDetails.transport.type;
		document.getElementById('transporte-empresa').textContent = tripDetails.transport.empresa;
		document.getElementById('precio_transporte').textContent = tripDetails.transport.price;

		//Guia
		document.getElementById('guia-nombre').textContent = tripDetails.guia.name;

		//Calculando el total (ahora con números enteros)
		const precio_total = (
			tripDetails.trip.price +
			tripDetails.hotel.price +
			tripDetails.transport.price +
			20  // cargo por servicio
		);
		
		// Mostramos el total con dos decimales
		document.getElementById('precio_total').textContent = precio_total;

		// Manejo del evento de confirmación
		document.getElementById('confirmarBtn').addEventListener('click', function(event) {
			event.preventDefault();
			
			const finalTripData = {
				...tripDetails,
				precio_total: precio_total  
			};

			fetch('/guardar_pedido', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				body: JSON.stringify(finalTripData)
			})
			.then(response => response.json())
			.then(data => {
				if (data.success) {
					const popup = document.getElementById('popup');
					popup.style.display = 'block';

					localStorage.removeItem('tripDetails');

					setTimeout(function() {
						window.location.href = '/landing';
					}, 4000);
				} else {
					alert('Error al guardar el pedido: ' + data.message);
				}
			})
			.catch(error => {
				console.error('Error:', error);
				alert('Error al procesar su solicitud. Por favor, intente nuevamente.');
			});
		});
	});
    </script>




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