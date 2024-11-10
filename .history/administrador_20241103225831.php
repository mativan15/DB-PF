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
        <h1 class="heading-1">Hola, Admin!</h1>
        <p class="parrafo">Verifiquemos nuevos pedidos</p>
		

        <section class="container pedidos">
			<h1>Lista de Pedidos</h1>
    		<div id="pedidos-container"></div>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					fetch('/obtener_pedidos')
					.then(response => response.json())
					.then(data => {
						if (data.success) {
							const pedidosContainer = document.getElementById('pedidos-container');
							if (data.data.length > 0) {
								data.data.forEach(pedido => {
									const pedidoDiv = document.createElement('div');
									pedidoDiv.className = 'pedido';
									pedidoDiv.innerHTML = `
										<div class="trip-card">
											<div class="trip-details">
												<br>
												<h3>Resumen del viaje</h3>
												<p><strong>ID Pedido:</strong> ${pedido.id}</p>
												<p><strong>ID Usuario:</strong> ${pedido.user_id}</p>
												<p><strong>Titular:</strong> ${pedido.user_name}</p>
												<p><strong>Fecha de Inicio:</strong> ${pedido.start_date}</p>
												<p><strong>Fecha de Fin:</strong> ${pedido.end_date}</p>
												<p><strong>Destino:</strong> ${pedido.destination}</p>
												<p><strong>Hotel:</strong> ${pedido.hotel}</p>
												<p><strong>Transporte:</strong> ${pedido.transport}</p>
												<p><strong>Tipo de Comida:</strong> ${pedido.food}</p>
												<p><strong>Paquete de Fotos:</strong> ${pedido.photo}</p>
											</div>
											
											<button class="confirm-btn">Confirmar</button>
										</div>
									`;
		
									const confirmBtn = pedidoDiv.querySelector('.confirm-btn');
									confirmBtn.addEventListener('click', function() {
										const pedidoId =pedido.id;
										const confirmado = this.getAttribute('data-confirmado') === 'true';
										const nuevoEstado = !confirmado;

										fetch('/actualizar_confirmacion', {
											method: 'POST',
											headers: {
												'Content-Type': 'application/json'
											},
											body: JSON.stringify({
												pedido_id: pedidoId,
												confirmado: nuevoEstado
											})
										})
										.then(response => response.json())
										.then(data => {
											if (data.success) {
												this.setAttribute('data-confirmado', nuevoEstado);
												this.classList.toggle('confirmed', nuevoEstado);
												this.textContent = nuevoEstado ? 'Desconfirmar' : 'Confirmar';
												const confirmadoTexto = this.parentElement.querySelector('.trip-details p:last-of-type');
												confirmadoTexto.textContent = `Confirmado: ${nuevoEstado ? 'Sí' : 'No'}`;
											} else {
												console.error('Error al actualizar la confirmación:', data.message);
											}
										})
										.catch(error => console.error('Error:', error));
									});
									pedidosContainer.appendChild(pedidoDiv);
								});
							} else {
								pedidosContainer.innerHTML = '<p>No se encontraron pedidos.</p>';
							}
						} else {
							console.error('Error al obtener los pedidos:', data.message);
							const errorDiv = document.createElement('div');
							errorDiv.textContent = 'Error al obtener los pedidos.';
							pedidosContainer.appendChild(errorDiv);
						}
					})
					.catch(error => console.error('Error:', error));
				});
			</script>
			<br> 
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