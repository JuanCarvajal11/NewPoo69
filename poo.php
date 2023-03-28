<?php

class Variables{ 

    
    private $valor1= "";
    private $valor2 = "";
    private $texto = "";
    public $mensaje1 = "";
    public $mensaje2 = "";
    public $mensaje3 = "";
    
    function guardaVariable($palabra, $valor1, $valor2){
        $this->texto = $palabra;
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }

    function tipoVariable(){
        $this->mensaje1 = "El primer valor es un: " . gettype($this->valor1) . "\n";
        $this->mensaje2 = "El segundo valor es un: " . gettype($this->valor2) . "\n";
        $this->mensaje3 = "El tercer valor es un: " . gettype($this->texto) . "\n";
    }



    // function determinarA(){
    //     if(str_contains($this->texto, "a")) {
    //         echo "El texto contiene la letra a. \n";
    //     }elseif(str_contains($this->texto, "A")){
    //         echo "El texto contiene la letra a. \n";
    //     }else{
    //         echo "El texto no contiene la letra a \n";
    //     }
    // }

    // function mostrarnumero3(){
    //     if(str_contains($this->valor2, 3)) {
    //         echo "Este numero tiene un numero 3. \n";

    //     }else{
    //         echo "Este numero no tiene un numero 3. \n";
    //     }
    // }

    // function mostrar_mensajes(){
    //     print($this->mensaje1);
    //     print($this->mensaje2);
    //     print($this->mensaje3);
    // }









    

}