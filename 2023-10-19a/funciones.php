<?php
//crear función para hacer una consulta
function consulta(){
    $salida=0;//inicializa la variable

    $salida= 10*2/2;//calcular el área del triángulo

    return $salida; //retornar la operación
}

function comer(){
             
    $salida=0; // inicializar la variable

    $salida=4*6/2; //calcular el área de un triángulo retangular

    return $salida;// retornar la operación


}
function nuevoregistro(){
    $salida=0;//inicializar la variable
    
    $conexion=mysqli_connect('localhost','root','','proyecto_tours_people');//conectar con la base de datos
    
    $sql="select 2+1 as suma";
    $resultado=$conexion->query($sql);
    //recorre el recordset
     while($fila=mysqli_fetch_assoc($resultado))
     {
        //incluye o acumula

        $salida += $fila['suma'];
     }


    return $salida;//retornar la operación
}