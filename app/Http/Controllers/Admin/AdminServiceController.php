<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;

class AdminServiceController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Página de Administración - Servicios - Tienda Online";
        $viewData["services"] = Servicio::all();
        return view('admin.service.index')->with("viewData", $viewData);
    }

}
