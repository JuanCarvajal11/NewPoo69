<?php session_start(); ?>
<?php

class Loguin{

    public $user="";
    public $password = "";
    public $usu = "carvajaljuanmanuel8@gmail.com";
    public $pass = "123456789012";
    public $cadena = "true";
    public $cadena2 = "false";

    function entradaDatos($variable1, $variable2){
        $this->user = $variable1;
        $this->password = $variable2;

    }

    function loguear(){
        $_SESSION['usuario'] = $this->usu;
        $us = $this->usu;
        $ps = $this->pass;

        $us1 = $this->user;
        $pas1 = $this->password;

        if(($us === $us1) && ($ps === $pas1)){
            return $this->cadena;
        }else{
            return $this->cadena2;
        }
    }
}