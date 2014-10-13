


<?php

include('accadmin.php');
require 'header.php';
require 'footer.php';

echo"<center><h1>MENÚ DE USUARIO ADMINISTRADOR</h1><a href='cerrar.php'><img src=imagenes/exit.jpg height='30' width='30' align=right></a>";


echo"<div class='table-responsive sok_font'>";
            echo"<table class=table table-bordered>";
echo"<tr><td><a href='TestMateria.php'><input type=button value='agregar materias a maestro'></a><br></td>";
echo"<td><a href='TestAlumno.php'><input type=button value='agregar alumnos a grupos'></a></td></tr>";
echo"</table>";
echo"<img src=imagenes/administrador.jpg height='80' width='80' >";
echo"</div></center>";