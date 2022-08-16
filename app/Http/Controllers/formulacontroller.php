<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formulacontroller extends Controller
{
    public function ep()
    {
        return view('moduls.formula.ep');
    }
}
