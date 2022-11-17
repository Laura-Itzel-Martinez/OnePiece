<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SagasController extends Controller
{
    public function saga(){
        return view('/sagas');
    }
}
