<?php

namespace App\Http\Controllers;

use App\Models\Lugares;
use Illuminate\Http\Request;

class AdminnistradorController extends Controller
{
    public function index() {
        $lugar = Lugares::orderBy('id', 'ASC')->paginate();
        return view('admin', compact('lugar'));
    }
}
