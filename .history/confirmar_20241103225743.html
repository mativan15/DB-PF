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
						{% if user_data %}
							<p class="hover-area" data-user-data="{{ user_data | tojson }}">{{ user_data[1] }}</p>

							<div class="hover-container">
								<p>
									Nombre: {{ user_data[3] }} <br/>
									Apellidos: {{ user_data[4] }}<br/>
									DNI: {{ user_data[5] }}<br/>
									Telefono: {{ user_data[6] }}<br/>
									Email: {{ user_data[8] }}<br/>
									Fecha de Nacimiento: {{ user_data[7] }}<br/>
								</p>
								<container id="boton_logout" >Cerrar sesión</container>
							</div>
						{% else %}
							<span id="iniciar-sesion-click" class="text">Iniciar sesión</span>
						{% endif %}
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

	</header>
	


	<main class="main-content">
        <h1 class="heading-1">Confirm your trip!</h1>
        <p class="parrafo">Todo listo para esta gran aventura, te esperamos!</p>

        <section class="container summary">
            <div class="summary-column image-column">
                <img src="img/colca2.jpg" alt="Destination Image" />
            </div>
            <div class="summary-column details-column">
                <h3>Resumen de tu viaje</h3>
				<p><strong>Fecha de inicio:</strong> {{ trip_data['startDate'] }} </p>
				<p><strong>Fecha de fin:</strong> {{ trip_data['endDate'] }} </p>
                <p><strong>Duración:</strong>  días y  noches</p>
                <p><strong>Destino:</strong> {{ trip_data['destination'] }}  <span class="price">US$<span id="precio_destino"></span></p>
				<p><strong>Hotel:</strong>  {{ trip_data['hotel'] }} <span class="price">US$<span id="precio_hotel"></span></span></p>
                <p><strong>Transporte:</strong> {{ trip_data['transport'] }} <span class="price">US$<span id="precio_transporte"></span></span></p>
                <p><strong>Tipo de comida:</strong> {{ trip_data['food'] }} <span class="price">US$20</span></p>
                <p><strong>Paquete de fotos:</strong> {{ trip_data['photo'] }} <span class="price">US$<span id="precio_foto"></span></span></p>
                <p class="precio-final"><strong>Precio total:</strong> US$<span id="precio_total"></span></p>
				
				<div class="button confirmar">
					<a href="#" id="confirmarBtn">Confirmar</a>
				</div>
			
				<div id="popup" style="display: none;">
					<p>Solicitud enviada correctamente<br>Su confirmación está en proceso...</p>
				</div>
			

				<script>
					document.addEventListener('DOMContentLoaded', function() {
						const tripDetails = {
							destination: "{{ trip_data['destination'] }}",
							transport: "{{ trip_data['transport'] }}",
							hotel: "{{ trip_data['hotel'] }}",
							photo: "{{ trip_data['photo'] }}"
						};
			
						fetch('/obtener_precio', {
							method: 'POST',
							headers: {
								'Content-Type': 'application/json'
							},
							body: JSON.stringify(tripDetails) 
						})
						.then(response => response.json())
						.then(data => {
							console.log(data);
							if (!data.error) {
								const precio_destino = parseFloat(data[0]);
								const precio_transporte = parseFloat(data[1]);
								const precio_hotel = parseFloat(data[2]);
								const precio_foto = parseFloat(data[3]);

								document.getElementById('precio_destino').innerText = precio_destino;
								document.getElementById('precio_transporte').innerText = precio_transporte;
								document.getElementById('precio_hotel').innerText = precio_hotel;
								document.getElementById('precio_foto').innerText = precio_foto;

								const precio_total = precio_destino + precio_transporte + precio_hotel + precio_foto +20;
								document.getElementById('precio_total').innerText = precio_total; 
								console.log("Precio final:", precio_total);
							} else {
								console.log("precio no encontrado :(",data.precio)
								document.getElementById('precio_destino').innerText = "No disponible";
								document.getElementById('precio_transporte').innerText = "No disponible";
								document.getElementById('precio_hotel').innerText = "No disponible";
								document.getElementById('precio_foto').innerText = "No disponible";
							}
						})
						.catch(error => console.error('Error:', error));
					});

					document.getElementById('confirmarBtn').addEventListener('click', function(event) {
						event.preventDefault();
						const tripData = {
							startDate: "{{ trip_data['startDate'] }}",
							endDate: "{{ trip_data['endDate'] }}",
							destination: "{{ trip_data['destination'] }}",
							hotel: "{{ trip_data['hotel'] }}",
							transport: "{{ trip_data['transport'] }}",
							food: "{{ trip_data['food'] }}",
							photo: "{{ trip_data['photo'] }}",
							user_id: "{{ user_data[0] }}" 
						};
						fetch('/guardar_pedido', {
							method: 'POST',
							headers: {
								'Content-Type': 'application/json'
							},
							body: JSON.stringify(tripData)
						})
						.then(response => response.json())
						.then(data => {
							if (data.success) {
								var popup = document.getElementById('popup');
								popup.style.display = 'block';

								setTimeout(function() {
									var userId = tripData.user_id;
									var url = "https://127.0.0.1:5000/landing?user_id=" + userId;
									window.location.href = url;
								}, 4000);
							} else {
								console.error('Error al guardar el pedido:', data.message);
							}
						})
						.catch(error => console.error('Error:', error));
					});
				</script>
				
				<div class="button regresar">
					<a href="https://localhost/DB-PF/trip.html">Regresar</a>
				</div>
                <p class="contact-doubt-subtitle"> Contact information</p>
                <p class="contact-doubt">If you have any doubts or questions you can contact us.</p>
                <p class="contact-doubt"> Phone: (+51) 989 297 765</p>
                <p class="contact-doubt"> E-mail: aroundtheworld@support.com</p>
 
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