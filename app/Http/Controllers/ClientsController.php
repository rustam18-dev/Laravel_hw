<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $client = Clients::all();

        return view('clients.index', compact('client'));
    }
}
