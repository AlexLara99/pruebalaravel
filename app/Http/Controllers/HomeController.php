<?php

namespace App\Http\Controllers;

use App\home;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Mostrar información de un usuario.
     * @param  int  $id
     * @return Response
     */
    public function getHome(){

        return redirect()->action('CatalogControler@getIndex');
    }
}