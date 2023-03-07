 // este va a ser el objeto que es el carrito
 var carrito= {

    prendas: []



 };
///  esta seria la funcion para que agregue al carrito
 function agregaralabolsa(prenda)
 {
    carrito.productos.push(prenda);

 }

 ///esta va a ser la funcion que actualiza osea suma y resta con contador en ciclo for (falta enlazar el id de la base de datos con la primer variable)
// (falta enlazar el boton del total )

 function actualizador(){
// Obtiene la lista de productos y el total del carrito en el HTML:
    var listadeprendas= document.getElementById("");
    var totalprendas = document.getElementById('total');
    var total=0;
    //contador:
    for (i=0;i<carrito.productos.length;i++)
    {
        var producto = carrito.productos[i];
        // Suma el precio del producto al total del carrito :
    total += producto.precio;
    // Crea un elemento HTML para mostrar el nombre y precio del producto
    var item = document.createElement('li');
    item.innerText = producto.nombre + ' - $' + producto.precio;
    // Agrega el elemento HTML a la lista de productos en el carrito
    listadeprendas.appendChild(item);

    

    }

// Actualiza el elemento HTML que muestra el total del carrito
totalElement.innerText = 'Total: $' + total;




 }

