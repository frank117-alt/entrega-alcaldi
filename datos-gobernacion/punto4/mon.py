from pymongo import MongoClient

#conexion a mongo
url  = "mongodb+srv://test-gov:1myX4S5YTAYOfYU6@cluster0.vm452tu.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0"

client = MongoClient(url)

db = client['store']

# Crear una colección llamada productos
productos_collection = db['productos']

# Paso 3: Inserta al menos tres documentos en la colección productos
productos = [
    {"id": 1, "nombre": "tomate A", "precio": 10.99, "cantidad": 100},
    {"id": 2, "nombre": "ternero", "precio": 15.49, "cantidad": 200},
    {"id": 3, "nombre": "tamal", "precio": 7.99, "cantidad": 150}
]

productos_collection.insert_many(productos)

def obtener_precio_producto(nombre_producto):
    producto = productos_collection.find_one({"nombre": nombre_producto})
    if producto:
        return producto['precio']
    else:
        return None

nombre_producto = "tamal"
precio = obtener_precio_producto(nombre_producto)
if precio is not None:
    print(f"El precio de {nombre_producto} es: {precio}")
else:
    print(f"El producto {nombre_producto} no se encontro.")
