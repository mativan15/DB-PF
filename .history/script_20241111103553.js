const trips = {
    peru: [
        {
            destination: "Colca_Full_Day",
            image: "img/colca2.jpg",
            duration: "2 días y 1 noche",
            description: [
                "Provincia de Caylloma",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Breakfast included",
                "Daily departures"
            ],
            price: 134
        },
        {
            destination: "Cañon_de_Cotahuasi",
            image: "img/cotahuasi.jpg",
            duration: "3 días",
            description: [
                "Provincia La Union",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Breakfast included",
                "Daily departures"
            ],
            price: 300
        },
        {
            destination: "Laguna_Salinas",
            image: "img/salinas.jpg",
            duration: "1 día",
            description: [
                "Provincia Arequipa and Caylloma",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Breakfast included",
                "Daily departures"
            ],
            price: 60
        }
    ],
    chile: [
        {
            destination: "Torres_del_Paine",
            image: "https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Torres_del_Paine_4.jpg/800px-Torres_del_Paine_4.jpg",
            duration: "4 días",
            description: [
                "Parque Nacional Torres del Paine",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Meals included",
                "Daily departures"
            ],
            price: 500
        },
        {
            destination: "San_Pedro_de_Atacama",
            image: "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/San_Pedro_de_Atacama_%28Chile%29_-_Laguna_Chaxa.jpg/800px-San_Pedro_de_Atacama_%28Chile%29_-_Laguna_Chaxa.jpg",
            duration: "3 días",
            description: [
                "Desierto de Atacama",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Breakfast included",
                "Daily departures"
            ],
            price: 350
        },
        {
            destination: "Valparaiso",
            image: "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Valparaiso%2C_Chile.jpg/800px-Valparaiso%2C_Chile.jpg",
            duration: "2 días",
            description: [
                "Ciudad Patrimonio de la Humanidad",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Meals included",
                "Daily departures"
            ],
            price: 150
        }
    ],
    argentina: [
        {
            destination: "Iguazu_Falls",
            image: "https://www.journeylatinamerica.com/app/uploads/destinations/argentina/igauzu/arg_iguazuview_shutterstock_1077922052-0x1100-c-center.webp",
            duration: "2 días",
            description: [
                "Parque Nacional Iguazú",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Meals included",
                "Daily departures"
            ],
            price: 250
        },
        {
            destination: "Patagonia",
            image: "https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Patagonia%2C_Argentina.jpg/800px-Patagonia%2C_Argentina.jpg",
            duration: "5 días",
            description: [
                "Región de la Patagonia",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Meals included",
                "Daily departures"
            ],
            price: 700
        },
        {
            destination: "Mendoza_Wine_Tour",
            image: "https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Mendoza_vineyard.jpg/800px-Mendoza_vineyard.jpg",
            duration: "3 días",
            description: [
                "Región vitivinícola",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Wine tastings included",
                "Daily departures"
            ],
            price: 400
        }
    ],
    mexico: [
        {
            destination: "Cancun_Beach",
            image: "https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Cancun_Beach.jpg/800px-Cancun_Beach.jpg",
            duration: "7 días",
            description: [
                "Playa y resorts",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Meals included",
                "Daily departures"
            ],
            price: 600
        },
        {
            destination: "Chichen_Itza",
            image: "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Chichen_Itza_El_Castillo_2011.jpg/800px-Chichen_Itza_El_Castillo_2011.jpg",
            duration: "1 día",
            description: [
                "Sitio arqueológico",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Breakfast included",
                "Daily departures"
            ],
            price: 80
        },
        {
            destination: "Tulum",
            image: "https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Tulum_El_Castillo.jpg/800px-Tulum_El_Castillo.jpg",
            duration: "3 días",
            description: [
                "Ruinas mayas junto al mar",
                "Accommodations included",
                "Transfers included",
                "Activities and excursions",
                "Meals included",
                "Daily departures"
            ],
            price: 300
        }
    ]
};

const hotels = {
    "Colca_Full_Day": [
        { id: "hotel1",
            name: "Hotel Paradise",
            description: "Descripción breve del Hotel Paradise.",
            price: 120,
            image: "img/luxurius_lodge.jpg",
            type: "beach"
        },
        { id: "hotel2",
            name: "Hotel Sunset",
            description: "Descripción breve del Hotel Sunset.",
            price: 150,
            image: "img/luxurius_lodge.jpg",
            type: "mountain"
        },
        { id: "hotel4",
            name: "Hotel asdasd",
            description: "Descripción breve del Hotel Sunset.",
            price: 150,
            image: "img/luxurius_lodge.jpg",
            type: "mountain"
        },
        { id: "hotel5",
            name: "Hotel asdasd",
            description: "Descripción breve del Hotel Sunset.",
            price: 150,
            image: "img/luxurius_lodge.jpg",
            type: "mountain"
        }
    ],
    "Cañon_de_Cotahuasi": [
        { id: "hotel3",
            name: "Hotel City View",
            description: "Descripción breve del Hotel City View.",
            price: 180,
            image: "img/luxurius_lodge.jpg",
            type: "city" 
        }
    ],
    // Agregar más hoteles para otros destinos
};
const transports = {
    "Cañon_de_Cotahuasi": [
        { id: "auto1",
            type: "Automovil",
            empresa: "Los Andes",
            price: 20,
            image: "img/carro.png",
        },
        { id: "minivan1",
            type: "Minivan",
            empresa: "El Rapido",
            price: 10,
            image: "img/minivan.png",
        }
    ],
    "Colca_Full_Day": [
        { id: "bus1",
            type: "Bus",
            empresa: "El Lento",
            price: 5,
            image: "img/bus.png",
        }
    ]
};

const guias = {
    "Cañon_de_Cotahuasi": [
        { id: "6524131",
            name: "Carlos Caceres",
            idioma: "Ingles",
            image: "https://st4.depositphotos.com/39034226/40318/i/450/depositphotos_403182514-stock-photo-handsome-young-man-looking-at.jpg",
        },
        { id: "12313124",
            name: "Maria Merces",
            idioma: "Frances, Ingles",
            image: "https://www.sandozbienestar.com/wp-content/uploads/Captura-de-pantalla-2020-03-13-a-las-12.08.22-1200x675.png",
        }
    ],
    "Colca_Full_Day": [
        { id: "345332123",
            name: "Jose Luna",
            idioma: "Español, Ingles",
            image:"https://elcomercio.pe/resizer/gYw00tIobjxlJohz31Z06Dufz5Q=/1200x800/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/Z3XWGDDV3ZC4XLEKQLMY2ARZXE.jpg",
        }
    ]
};


let selectedTrip = null;

function updateTrips() {
    const countrySelect = document.getElementById('destination-country');
    const selectedCountry = countrySelect.value;
    const tripsContainer = document.getElementById('trips-container');
    const hotelSelection = document.getElementById('hotel-selection');
    const guiaSelection = document.getElementById('hotel-selection');
    const transportSelection = document.getElementById('transport-selection');
    const navigationButtons = document.querySelector('.navigation-buttons');

    tripsContainer.innerHTML = '';
    hotelSelection.innerHTML = ''; // Limpiar la selección de hoteles
    transportSelection.innerHTML = ''; 
    guiaSelection.innerHTML = ''; 

    navigationButtons.style.display = 'none'; // Ocultar botones de navegación al inicio


    if (trips[selectedCountry]) {
        trips[selectedCountry].forEach(trip => {
            const tripCard = document.createElement('div');
            tripCard.className = 'card-trips';

            tripCard.setAttribute('data-destination', trip.destination);
            tripCard.setAttribute('data-price', trip.price);
            tripCard.setAttribute('data-duration', trip.duration);
            tripCard.setAttribute('data-image', trip.image);
            tripCard.setAttribute('data-description', JSON.stringify(trip.description));

            tripCard.innerHTML = `
                <div class="container-img">
                    <img src="${trip.image}" alt="${trip.destination}" />
                    <span class="discount">-13%</span>
                </div>
                <div class="content-card-trips">
                    <span class="date">${trip.duration}</span>
                    <h3>${trip.destination.replace(/_/g, ' ')}</h3>
                    <p class="list_info">
                        ${trip.description.map(info => `<i class="fa fa-location-dot"></i> ${info}<br />`).join('')}
                    </p>
                </div>
                <div class="card-stats">
                    <div class="stat">
                        <div class="value">From</div>
                    </div>
                    <div class="stat"></div>
                    <div class="stat">
                        <div class="value">$${trip.price}</div>
                    </div>
                </div>
            `;

            tripCard.addEventListener('click', () => {
                const allTripCards = document.querySelectorAll('.card-trips');
                allTripCards.forEach(card => card.classList.remove('selected'));
                tripCard.classList.add('selected');

                selectedTrip = trip; 
                hotelSelection.innerHTML = ''; 
                transportSelection.innerHTML = ''; 
                guiaSelection.innerHTML = ''; 
                navigationButtons.style.display = 'block'; // Mostrar botones de navegación
            });

            tripsContainer.appendChild(tripCard);
        });
    }
}

function updateTransport(){
    if (selectedTrip) {
        
        const transportSelection = document.getElementById('transport-selection');
        transportSelection.innerHTML = ''; // limpiar seleccion anterior

        const questionParagraph = document.createElement('p');
        questionParagraph.className = 'parrafo';
        questionParagraph.textContent = '¿Cómo te transportarás?';
        transportSelection.appendChild(questionParagraph);

        if (transports[selectedTrip.destination]) {
            transports[selectedTrip.destination].forEach(transport => {
                const transportCard = document.createElement('div');
                transportCard.classList.add('transport-option');

                transportCard.setAttribute('data-trip', transport.type);
                transportCard.setAttribute('data-type', transport.type);
                transportCard.setAttribute('data-price', transport.price); 
                transportCard.setAttribute('data-empresa', transport.empresa);
                transportCard.setAttribute('data-image', transport.image);



                transportCard.innerHTML = `
                        
                    <img src="${transport.image}" alt="${transport.id}" />
                    <h3>${transport.type}</h3>
                    <p class = "transport_option p ">${transport.empresa}</p>
                    <div class="price-box">$${transport.price}</div>
                        
                `;


                transportCard.addEventListener('click', () => {
                    const alltransportCards = document.querySelectorAll('.transport-option');
                    alltransportCards.forEach(card => card.classList.remove('selected'));
                    transportCard.classList.add('selected');
    
                });


                transportSelection.appendChild(transportCard);
            });
        }
    }
};

function updateHotels(){
    if (selectedTrip) {
        
        const hotelSelection = document.getElementById('hotel-selection');
        hotelSelection.innerHTML = ''; // Limpiar selección anterior

        const questionParagraph = document.createElement('p');
        questionParagraph.className = 'parrafo';
        questionParagraph.textContent = '¿Dónde te hospedarás?';
        hotelSelection.appendChild(questionParagraph);

        if (hotels[selectedTrip.destination]) {
            hotels[selectedTrip.destination].forEach(hotel => {
                const hotelCard = document.createElement('div');
                hotelCard.classList.add('card-hotels');

                hotelCard.setAttribute('data-trip', hotel.type);
                hotelCard.setAttribute('data-name', hotel.name);
                hotelCard.setAttribute('data-price', hotel.price); // Elimina cualquier símbolo de moneda
                hotelCard.setAttribute('data-description', hotel.description);
                hotelCard.setAttribute('data-image', hotel.image);



                hotelCard.innerHTML = `
                    <div class="container-img">
                        <img src="${hotel.image}" alt="${hotel.name}" />
                    </div>
                    <div class="content-card-hotels">
                        <h3>${hotel.name}</h3>
                        <p>${hotel.description}</p>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>
                    <div class="card-stats">
                        <div class="stat">
                            <div class="value">Desde</div>
                        </div>
                        <div class="stat"></div>
                        <div class="stat">
                            <div class="value">$${hotel.price}</div>
                        </div>
                    </div>
                `;


                hotelCard.addEventListener('click', () => {
                    const allHotelCards = document.querySelectorAll('.card-hotels');
                    allHotelCards.forEach(card => card.classList.remove('selected'));
                    hotelCard.classList.add('selected');
    
                });


                hotelSelection.appendChild(hotelCard);
            });
        }
    }
};

function updateGuia(){
    if (selectedTrip) {
        
        const guiaSelection = document.getElementById('guia-selection');
        guiaSelection.innerHTML = ''; //limpiar seleccion anterior
        
        //***********TEXTO********* */
        const questionParagraph = document.createElement('p');
        questionParagraph.className = 'parrafo';
        questionParagraph.textContent = '¿Quién será tu guía?';
        guiaSelection.appendChild(questionParagraph);

        


        if (guias[selectedTrip.destination]) {
            guias[selectedTrip.destination].forEach(guia => {
                const guiaCard = document.createElement('div');
                guiaCard.classList.add('guia-option');
                guiaCard.setAttribute('data-guia', guia.id);
                guiaCard.setAttribute('data-id', guia.id);
                guiaCard.setAttribute('data-name', guia.name);
                guiaCard.setAttribute('data-idioma', guia.idioma);
                guiaCard.setAttribute('data-image', guia.image);

                guiaCard.innerHTML = `
                    <img src="${guia.image}" alt="${guia.id}" />
                    <h3>${guia.name}</h3>
                    <div class="guia-box">${guia.idioma}</div>
                        
                `;
                guiaCard.addEventListener('click', () => {
                    const allguiaCards = document.querySelectorAll('.guia-option');
                    allguiaCards.forEach(card => card.classList.remove('selected'));
                    guiaCard.classList.add('selected');
    
                });

                guiaSelection.appendChild(guiaCard);
            });
        }
    }
};


function searchFlights() {
    const destination = document.getElementById('destination-country').value;
    const departureDate = document.getElementById('start-date').value;
    console.log(" amhfbjkashfs", destination, departureDate); 
    if (!destination || !departureDate) {
        alert("Por favor, selecciona el destino y la fecha de salida.");
        return;
    }

    const params = new URLSearchParams();
    params.append('destination', destination);
    params.append('departureDate', departureDate);

    fetch('s_vuelos.php', {
        method: 'POST',
        body: params,
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        //alert("JDHGKSJDF", data);
        console.log('Respuesta recibida:', data)
        const availableFlights = data;
        displayResults(availableFlights);
    })
    .catch(error => console.error('Errorrrr:', error));
}

function displayResults(flights) {
    const resultsContainer = document.getElementById('vuelo-selection');
    resultsContainer.innerHTML = "";  // Clear previous results

    const questionParagraph = document.createElement('p');
    questionParagraph.className = 'parrafo';
    questionParagraph.textContent = flights.Ciudad_Destino;
    resultsContainer.appendChild(questionParagraph);

    if (!flights || flights.length === 0) {
        resultsContainer.innerHTML = "<p>No se encontraron vuelos para los criterios seleccionados.</p>";
        return;
    }
    console.log('vuelkossss ', flights)
    flights.forEach(flight => {
        const flightDetails = document.createElement('div');
        flightDetails.className = 'flight-details';

        const departureDate = new Date(flight.Fecha_Salida);
        const formattedDepartureDate = departureDate.toLocaleDateString('es-ES');

        flightDetails.innerHTML = `
            <div class="flight-segment">
                <h3>IDA</h3>
                <p class="date">${formattedDepartureDate}</p>
                <p class="route">AQP <span class="arrow">→</span> ${flight.Ciudad_Destino.toUpperCase()}</p>
                <p class="airline">${flight.Num_Vuelo}</p>
                <p class="time">${flight.Fecha_Salida} <span class="layover">${flight.Pais_Destino}</span></p>
                <p class="duration">${flight.Precio}</p>
            </div>
            <div>
                <p class="route">$${flight.Precio}</p>
            </div>
        `;
        resultsContainer.appendChild(flightDetails);
    });
}
document.getElementById('previous-step').addEventListener('click', () => {
    selectedTrip = null; 
    const hotelSelection = document.getElementById('hotel-selection');
    hotelSelection.innerHTML = ''; 
    const navigationButtons = document.querySelector('.navigation-buttons');
    navigationButtons.style.display = 'none'; 
});

//document.getElementById('destination-country').addEventListener('change', updateTrips);




function nextStep() {
    //updateTrips();

    updateHotels();
    updateTransport();
    updateGuia();    
    //tripsContainer.style.display = 'none';

}
function goBack() {
    const tripsContainer = document.getElementById('trips-container');
    const hotelSelection = document.getElementById('hotel-selection');
    const navigationButtons = document.querySelector('.navigation-buttons');

    // Mostrar de nuevo las tarjetas de viaje
    tripsContainer.style.display = 'trips-container';
    hotelSelection.style.display = 'none';
    navigationButtons.style.display = 'none'; // Ocultar botones de navegación
}


function confirmar(){
    alert("Se entro a la funcion confirmar...");

    const destination = document.getElementById('destination-country').value;
    const departureDate = document.getElementById('start-date').value;
    const returnDate = document.getElementById('end-date').value;
    const numPeople = document.getElementById('num-people').value;
    const selectedHotel = document.querySelector('.card-hotels.selected');
    const selectedGuia = document.querySelector('.guia-option.selected');
    const selectedTransport = document.querySelector('.transport-option.selected');
    const selectTrip = document.querySelector('.card-trips.selected');

    if (!destination || !departureDate || !returnDate || !selectedHotel || !selectedGuia || !selectedTransport) {
        alert("Por favor, completa todas las selecciones antes de confirmar");
        return;
    }

    const tripDetails = {
        destination: destination,
        departureDate: departureDate,
        returnDate: returnDate,
        numPeople: numPeople,

        trip:{
            destination: selectTrip.getAttribute('data-destination'),
            price: parseFloat(selectTrip.getAttribute('data-price')),
            duration: selectTrip.getAttribute('data-duration'),
            description: selectTrip.getAttribute('data-description'),
            image: selectTrip.getAttribute('data-image')
        },
        hotel: {
            name: selectedHotel.getAttribute('data-name'),
            price: parseFloat(selectedHotel.getAttribute('data-price')),
            description: selectedHotel.getAttribute('data-description'),
            image: selectedHotel.getAttribute('data-image')
        },
        transport: {
            type: selectedTransport.getAttribute('data-type'),
            price: parseFloat(selectedTransport.getAttribute('data-price')),
            empresa: selectedTransport.getAttribute('data-empresa'),
            image: selectedTransport.getAttribute('data-image')
        },
        guia: {
            id: selectedGuia.getAttribute('data-id'),
            name: selectedGuia.getAttribute('data-name'),
            idioma: selectedGuia.getAttribute('data-idioma'),
            image: selectedGuia.getAttribute('data-image')
        }
    };

     localStorage.setItem('tripDetails', JSON.stringify(tripDetails));
     window.location.href = 'confirmar2.php';
}


function incrementPeople() {
    alert("Se entro a la funcion increeee...");
    const numPeopleInput = document.getElementById('num-people');
    numPeopleInput.value = parseInt(numPeopleInput.value) + 1;
}

function decrementPeople() {
    alert("Se entro a la funcion decree...");
    const numPeopleInput = document.getElementById('num-people');
    if (numPeopleInput.value > 1) {
        numPeopleInput.value = parseInt(numPeopleInput.value) - 1;
    }
}
