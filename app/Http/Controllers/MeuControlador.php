<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos(){
        echo "<h1>produtos</h1>";
        echo "<ol>";
        echo "<li>NoteBook</li>";
        echo "<li>Impressora</li>";
        echo "<li>Mouse</li>";
        echo "</ol>";
    }
    public function getNome(){
        return "jose da silava";
    }
    public function getIdade(){
    return "30 anos";
    }
    public function multiplicar($n1, $n2){
    return $n1 * $n2;
    }
}
