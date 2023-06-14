<?php 
// ---------------------OR

// echo "Limpiaste tu cuarto ??
// ---- (1) = SI
// ---- (2) = NO
// "; 
// $A = (readline());

// if ($A == "si" || $A == "no"){}
// else{
//     echo "ingresa unicamnete si o no";
//     exit();
// }

// echo "Hiciste tu tarea ??
// ---- (1) = SI
// ---- (2) = NO
// "; 
// $B = (readline());
// if ($B == "si" || $B == "no"){}
// else{
//     echo "recuerda que solo puedes ingresar si o no";
//     exit();
// }

// if($A == "si"|| $B == "si"){
//         echo "Felicidades, puedes salir a parrandear";
// }else{
//         echo "Lo siento, no cumpliste con al menos una tarea, no puedes parrandear";;
//     }


// ---------------------AND 

// function Validacion($actividad){
//     //convierte todos los caracteres en minusculas (strtolower)
//     $actividad = strtolower($actividad);

//     while($actividad != "si" && $actividad != "no"){
//         echo "Ingresa solo si o no \n";
    
//         $actividad = strtolower(readline());
//     }

//     return $actividad;
// }

// echo "Limpiaste tu cuarto ??
// ---- (1) = SI
// ---- (2) = NO
// "; 
// $limpiarcuartito = Validacion(readline());

// echo "Hiciste tu tarea ??
// ---- (1) = SI
// ---- (2) = NO
// "; 
// $hacertareita = validacion(readline());

// // usar un if ternario :
//     //la primera expresion es para indicar que pasa si se cumple la condicion, la segunda, es para cuando no se cumpla.
// //     $variable = condición ? expresión1 : expresión2;

// echo ($limpiarcuartito == "si" || $hacertareita == "si" ) ? "Al menos hiciste algo, puedes salir a parrandear" : "lo siento, no cumpliste con una tarea, no puedes parrandear";
// // echo $probar; 


// if ($limpiarcuartito == "si" || $hacertareita == "si") {
//     echo "al menos hiciste algo, puedes salir a parrandear";
// } else {
//     echo "Lo siento, no cumpliste con al menos una tarea, no puedes parrandear";
// }


// ---------------------XOR

function Validacion($actividad){
        //convierte todos los caracteres en minusculas (strtolower)
        $actividad = strtolower($actividad);
    
        while($actividad != "si" && $actividad != "no"){
            echo "Ingresa solo si o no \n";
        
            $actividad = strtolower(readline());
        }
    
        return $actividad;
    }
    
    echo "Limpiaste tu cuarto ??
    ---- (1) = SI
    ---- (2) = NO
    "; 
    $limpiarcuartito = Validacion(readline());
    
    echo "Hiciste tu tarea ??
    ---- (1) = SI
    ---- (2) = NO
    "; 
    $hacertareita = validacion(readline());
    
if ($limpiarcuartito == "si" xor $hacertareita == "si") {
    // echo "Una de las condiciones es verdadera y la otra es falsa.";
    echo "hiciste una actividad, ve a parrandear ";
} elseif($limpiarcuartito == "si" && $hacertareita == "si"){
    echo "Felicidades, hiciste todas tus chambitas, ve a parrandear";
}
else {
    // echo "Ambas condiciones son verdaderas o falsas.";
    echo "Lo siento, no hiciste tus actividades o te falto alguna";
}

 // xor se evalua si una de las condiciones es verdadera
    // devuelve false en todas las demas
    // si limpie mi cuarto pero no hice tarea = bueno, aun puedo ir a parrandear
    // si no limpie mi cuarto pero si hice la tarea = bueno, aun puedo ir a parrandear
    


  

    
    
    
    
    
    










// if ($A == "si" && $B == "si") {
//     echo "Felicidades, puedes salir a parrandear";
// } elseif ($A == "si" && $B == "no") {
//     echo "Limpiaste tu cuarto, pero no hiciste tu tarea. No puedes parrandear";
// } elseif ($A == "no" && $B == "si") {
//     echo "Hiciste tu tarea, pero no limpiaste tu cuarto. No puedes parrandear";
// } elseif ($A == "no" && $B == "no") {
//     echo "No hiciste nada, definitivamente no puedes parrandear";
// } else {
//     echo "Por favor ingresa SI o NO";
// }



// $respuestas = [
//     'si-si' => "Felicidades, puedes salir a parrandear",
//     'si-no' => "Limpiaste tu cuarto, pero no hiciste tu tarea. No puedes parrandear",
//     'no-si' => "Hiciste tu tarea, pero no limpiaste tu cuarto. No puedes parrandear",
//     'no-no' => "No hiciste nada, definitivamente no puedes parrandear"
// ];

// $A = strtolower(readline("Limpiaste tu cuarto ??\n---- (1) = SI\n---- (2) = NO\n"));
// $B = strtolower(readline("Hiciste tu tarea ??\n---- (1) = SI\n---- (2) = NO\n"));

// $opcion = $A . '-' . $B;

// echo isset($respuestas[$opcion]) ? $respuestas[$opcion] : "Por favor ingresa SI o NO";




?>