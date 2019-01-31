<?php

namespace App\Http\Controllers;

use App\categorias;
use DB;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
    }
	
    public function index()
    {
        return view('admin.categorias.index');
    }	
}
