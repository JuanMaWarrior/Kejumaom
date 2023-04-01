<nav>
       <ul class="NavBar">
            <li><a href="Index.php">KEJUMAOM</a></li>
            <li><a href="Index.php">Historia</a></li>
            <li>
                <a href="#">Prendas</a>
                <ul class="Vertical">
                    <li><a href="caps.php">Beanie/Gorra</a></li>
                    <li><a href="">Buzo</a></li>
                    <li><a href="">Camiseta</a></li>
                    <li><a href="">Jean/Drill</a></li>
                    <li><a href="">Tennis</a></li>
                    <li><a href="">Accesorios</a></li>
                </ul>
            </li>
            <li><a href="registro.php" target="_blank"><img src="../Images/user.png" alt="" width="30px" height="30px" class="logo"></a></li>
            <li><a href="registro.php"><img src="../Images/car.png" alt="" width="30px" height="30px" class="logo"></a></li>
        </ul>
</nav>

<style>
    nav{
    max-width: 900px;
    margin: auto;
    background-color: #333;
    font-size: 20px;
    margin-top: 10px;
}

.NavBar{
    list-style: none;
    display: flex;
    justify-content: space-around;
}

.NavBar > li > a {
display: block;
padding: 15px 20px;
color: white;
text-decoration: none;
}

.NavBar > li:hover{
    background-color: rgba(0, 128, 255, 0.5);
}

.Vertical{
    position:absolute;
    display: none;
    list-style: none;
    width: 200px;
    background-color: rgba(0, 0, 0, .5);
}

.NavBar li:hover .Vertical{
    display: block;
}

.Vertical li:hover{
    background-color: black;
}

.Vertical li a{
    display: block;
    color: white;
    padding: 15px 15px 15px 20px;
    text-decoration: none;
}
.logo{
    filter: invert();
}
</style>