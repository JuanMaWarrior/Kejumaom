<footer>

<div class="container-footer-all">

    <div class="container-body">
        <div class="columna1">

            <img src="../Images/Logo3.png" alt="" width="400px" height="350px">

        </div>
        <div class="columna2">
            <h2>Encuentranos en:</h2>
            <div class="fila">
                <a href="https://www.facebook.com/" target="_blank">
                <img src="../Images/facebook.png" alt="Facebook">
                <label >Facebook</label></a>
            </div>
            <div class="fila">
                <a href="https://www.instagram.com/" target="_blank">
                <img src="../Images/Instagram.png" alt="Instagram">
                <label >Instagram</label></a>
            </div>
            <div class="fila">
                <a href="https://twitter.com/?lang=es" target="_blank">
                <img src="../Images//Twitter.png" alt="Twitter">
                <label >Twitter</label></a>
            </div>
        </div>

        <div class="columna3">
            <h1>Contactanos</h1>

            <div class="column-fila1">
                <img src="../Images/ubicacion.png" alt="ubicacion">
                <label>
                    Cl. 49 #41-9 <br> <br> La Candelaria, Medellín,
                    Antioquia
                </label>
            </div>

            <div class="column-fila1">
                <img src="../Images/telefono.png" alt="telefono">
                <label>
                    +57 300 397 95 32
                </label>
            </div>

            <div class="column-fila1">
                <img src="../Images/correo.png" alt="icono correo">
                <label>
                    Kejumaom@gmail.com 
                </label>
            </div>

            <div class="column-fila">
                <img src="../Images/Tarjetas.png" alt="Tarjetas aceptadas" width="400px" height="100px">
            </div>


        </div>
    </div>

</div>

<div class="containerfooter">
    <div class="copyright">
        Kelly, Juan, Mariana, Omar © 2023 Todos los Derechos Reservados | <a href="Index.php">KEJUMAOM</a>
    </div>


    <div class="terminos">
        <a href="">Sobre Nosotros</a> | <a href="">Politica</a> | <a href="">Terminos y Condiciones</a>
    </div>
</div>

</footer>

<style>

*{
    margin: 0;
    padding: 0px;
    box-sizing: border-box;
    font-family: sans-serif;
}


footer{
    margin-top: 90px;
    background-color: #211F1E;
    width: 100%;
    color: white;
}

.container-footer-all{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 40px;
}

.container-body{
    display: flex;
    justify-content: space-between;
}

.columna1{
    width: 100%;
    max-width: 400px;
}

.columna2{
    max-width: 400px; 
}

.columna2 h2{
    font-size: 22px;
}

.fila{
    margin-top: 20px;
    display: flex;
}

.fila a{
    text-decoration: none;
    color: #c7c7c7;

}

.fila img{
    width: 36px;
    height: 36px;
}

.fila label{
    margin-top: 10px;
    margin-left: 20px;
    color: #c7c7c7;
}

.columna3{
    max-width: 400px;
}

.columna3 h1{
    font-size: 22px;
}

.column-fila1{
    margin-top: 20px;
    display: flex;
}

.column-fila1 img{
    width: 36px;
    height: 36px;
    filter: invert();
}

.column-fila1 label{
    margin-left: 20px;
    max-width: 150px;
    margin-top: 10px;
}

.column-fila{
    margin-top: 20px;
}

.containerfooter{
    width: 100%;
    background-color: #101010;
    display: flex;
    padding: 10px;
    justify-content: space-between;
}


.copyright{
    color: #c7c7c7;
}

.copyright a{
    color: #c7c7c7;
    text-decoration: none;
    font-weight: bold;
}

.terminos a{
    text-decoration: none;
    color: #c7c7c7;
}

@media screen and (max-width: 1100px){
    .container-body{
        flex-wrap: wrap;
    }
    .columna2, .columna3{
        margin-top: 40px;
    }
}
</style>