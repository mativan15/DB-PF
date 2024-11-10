from flask import Flask, render_template,request,redirect, url_for, jsonify
from flask_graphql import GraphQLView
import graphene
import datetime
import mysql.connector

mydb = mysql.connector.connect(
    host = "localhost",
    user = "root",
    port = 3306,
    password= "",
    database ="DB proyecto final",
)

myCursor = mydb.cursor()

app = Flask(__name__)

app.static_folder = 'Static'

def check_and_reconnect():
    if not mydb.is_connected():
        mydb.reconnect()
        global myCursor
        myCursor = mydb.cursor()


@app.route('/')
def index():
    return redirect(url_for('landing'))

@app.route('/administrador')
def admin():
    user_id = request.args.get('user_id', '')
    user_data = fetch_user_data(user_id)
    return render_template('administrador.html', user_data=user_data)

@app.route('/landing')
def landing():
    print("acceder a landing")
    user_id = request.args.get('user_id', '')
    user_data = fetch_user_data(user_id)
    return render_template('landing.php', user_data=user_data)

def fetch_user_data(user_id):
    myCursor = mydb.cursor()
    query = "SELECT * FROM usuarios WHERE id = %s"

    myCursor.execute(query, (user_id,))

    user_data = myCursor.fetchall()
    myCursor.close()
    if user_data:
        return user_data[0] 
    else:
        return None

def login():
    return render_template('login.php')

@app.route('/recibir_datos', methods=["POST"]) 
def Recibir_datos():
    if request.method == "POST":
        name = request.form['nombre']
        email = request.form['email']
        region = request.form['region']
        contacto = request.form['contacto']
        intereses = request.form['intereses']
        mensaje = request.form['mensaje']
        query = f"INSERT INTO contacto (nombre, email, region, contacto, intereses, mensaje) VALUES('{name}','{email}','{region}','{contacto}','{intereses}','{mensaje}')"
        myCursor.execute(query)
        mydb.commit()
        return redirect(url_for('landing'))
    else:
        return "El formulario de contacto no se envio correctamente"

@app.route('/trip')
def trip():
    print("acceder a trip")
    user_id = request.args.get('user_id', '')
    user_data = fetch_user_data(user_id)
    return render_template('trip.php', user_data=user_data)

@app.route('/confirmar', methods=['GET', 'POST'])
def confirmar():
    if request.method == 'POST':
        print("Acceder a confirmar")
        data = request.json
        print(data)

        query = """
        REPLACE INTO pedidos (id, fecha_ini, fecha_fin, destino, transporte, comida, hotel, foto)
        VALUES (1, %s, %s, %s, %s, %s, %s, %s)
        """
        values = (
            data['startDate'],
            data['endDate'],
            data['destination'],
            data['transport'],
            data['food'],
            data['hotel'],
            data['photo']
        )
        global trip_data
        trip_data = data

        myCursor.execute(query, values)
        mydb.commit()
        return jsonify({"message": "Datos recibidos"})

    else:
        user_id = request.args.get('user_id', '')
        user_data = fetch_user_data(user_id)
        return render_template('confirmar.php', user_data=user_data, trip_data=trip_data)

@app.route('/obtener_precio', methods=['POST'])
def obtener_precio():
    data = request.json
    destination = data['destination']
    transport = data['transport']
    hotel = data['hotel']
    photo = data['photo']
    
    query = f"SELECT {destination},{transport},{hotel},{photo} FROM precios LIMIT 1"
    myCursor.execute(query)
    precio = myCursor.fetchone()
    
    if precio:
        print("precioooooss", precio)
        return jsonify(precio)
    else:
        print("precio no exist")
        return jsonify({"error": "Precio no encontrado"}), 404

@app.route('/guardar_pedido', methods=['POST'])
def guardar_pedido():
    data = request.json
    
    start_date = data.get('departureDate')
    end_date = data.get('returnDate')
    destination = data.get('destination')
    hotel = data.get('hotel', {}).get('name')  
    transport_type = data.get('transport', {}).get('type')
    transport_empresa = data.get('transport', {}).get('empresa')
    guia_name = data.get('guia', {}).get('name')  
    price_total = data.get('precio_total')
    user_id = data.get('user_id')

    if not all([start_date, end_date, destination, hotel, transport_type, transport_empresa, guia_name, price_total, user_id]):
        return jsonify({"success": False, "message": "Missing required fields"}), 400
    try:
        query = """
            INSERT INTO pedidos (user_id, fecha_ini, fecha_fin, destino, hotel, transporte_tipo, transporte_empresa, guia, precio_total) 
            VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)
        """
        values = (user_id, start_date, end_date, destination, hotel, transport_type, transport_empresa, guia_name, price_total)
        myCursor.execute(query, values)
        mydb.commit()

        return jsonify({"success": True, "message": "Order saved successfully"}), 200


    except mysql.connector.Error as err:
        print(f"Error: {err}")
        return jsonify({"success": False, "message": "Database error"}), 500

@app.route('/obtener_pedidos', methods=['GET'])
def obtener_pedidos():
    user_id = request.args.get('user_id') 
    check_and_reconnect()
    try:
        query = """
            SELECT p.id, p.user_id, p.fecha_ini, p.fecha_fin, p.destino, 
                   p.hotel, p.transporte, p.comida, p.foto, u.nombre
            FROM pedidos p
            LEFT JOIN usuarios u ON p.user_id = u.id
            WHERE p.user_id IS NOT NULL
        """
        myCursor.execute(query)

        pedidos = myCursor.fetchall()
        pedidos_list = []
        for pedido in pedidos:
            pedidos_list.append({
                'user_name': pedido[9],
                'id': pedido[0],
                'user_id': pedido[1],
                'start_date': pedido[2],
                'end_date': pedido[3],
                'destination': pedido[4],
                'hotel': pedido[5],
                'transport': pedido[6],
                'food': pedido[7],
                'photo': pedido[8],
            })
        return jsonify({"success": True, "data": pedidos_list}), 200
    except mysql.connector.Error as err:
        print(f"Error: {err}")
        return jsonify({"success": False, "message": "Database error"}), 500

@app.route('/actualizar_confirmacion', methods=['POST'])
def actualizar_confirmacion():
    data = request.json
    pedido_id = data.get('pedido_id')
    confirmado = data.get('confirmado')
    
    if pedido_id is None or confirmado is None:
        return jsonify({'success': False, 'message': 'Datos inválidos'}), 400
    
    query = "UPDATE pedidos SET confirmado = %s WHERE id = %s"
    try:
        with mydb.cursor() as cursor:
            cursor.execute(query, (confirmado, pedido_id))
            mydb.commit()
        return jsonify({'success': True})
    except Exception as e:
        return jsonify({'success': False, 'message': str(e)}), 500


if __name__=="__main__":
    #para usar https
    app.run(debug=True, host='127.0.0.1', port=5000, ssl_context=('ssl/server.cert', 'ssl/server.key'))
