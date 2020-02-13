<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class controllerprueba extends Controller{
     public function prueba($param){
         return 'Estoy dentro de controllerprueba y recibi este parametro'.  $param;
     }
}