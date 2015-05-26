<?php 

if($_POST["contrato"]) {
$nombre=$_POST['nombre']; 
$apellido=$_POST['apellido']; 
$fecha=$_POST['fecha']; 


//Comprobamos que disponemos de los parámetros necesarios 

if(!$nombre || !$apellido) 
{ 
    echo "<h2>Error:</h2>Esta página fue llamada incorrectamente<br>"; 
}else{ 

    //Generamos los encabezados para que el navegador seleccione la aplicación correcta 


    header('Content-type: application/msword'); 
    header('Content-Disposition: inline; filename=nuevo.rtf'); 

     

    //Abrimos el archivo de plantilla 

    $filename="contrato.rtf"; 
    $output=file_get_contents($filename); 

    //Sustituimos los marcadores de posición en la plantilla por los datos 

    
  
    $output=str_replace('<<nombre>>',$nombre,$output); 
    $output=str_replace('<<apellido>>',$apellido,$output);
    $output=str_replace('<<fecha>>',$fecha,$output);
    
 
     
    //Enviamos el documento generado al navegador 
    echo $output; 
} }

if($_POST["contrato2"]) {
$nombre=$_POST['nombre']; 
$apellido=$_POST['apellido']; 
$fecha=$_POST['fecha']; 


//Comprobamos que disponemos de los parámetros necesarios 

if(!$nombre || !$apellido) 
{ 
    echo "<h2>Error:</h2>Esta página fue llamada incorrectamente<br>"; 
}else{ 

    //Generamos los encabezados para que el navegador seleccione la aplicación correcta 


    header('Content-type: application/msword'); 
    header('Content-Disposition: inline; filename=nuevo.rtf'); 

     

    //Abrimos el archivo de plantilla 

    $filename="contrato2.rtf"; 
    $output=file_get_contents($filename); 

    //Sustituimos los marcadores de posición en la plantilla por los datos 

    
  
    $output=str_replace('<<nombre>>',$nombre,$output); 
    $output=str_replace('<<apellido>>',$apellido,$output);
    $output=str_replace('<<fecha>>',$fecha,$output);
    
 
     
    //Enviamos el documento generado al navegador 
    echo $output; 
} 
}

/*
2 acciones en 1 formulario con varios botones

<form action="handle_user.php" method="POST />
  <input type="submit" value="Save" name="save" />
  <input type="submit" value="Submit for Approval" name="approve">
</form>
if($_POST["save"]) {
  //User hit the save button, handle accordingly
}
//You can do an else, but I prefer a separate statement
if($_POST["approve"]) {
  //User hit the Submit for Approval button, handle accordingly
}

*/
?>
