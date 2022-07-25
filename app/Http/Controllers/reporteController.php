<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class reporteController extends Controller
{
    public function reporte(){

        $pdf=PDF::loadHTML('<h1>BERMEO</h1>');
        return $pdf->download('mi-archivo.pdf');
    }

}
