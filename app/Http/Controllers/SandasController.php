<?php

namespace App\Http\Controllers;

use App\Models\sandas;
use Illuminate\Http\Request;

class SandasController extends Controller
{
    public function done($todo)
    {
        $task = todo::find($todo);
        $task -> done = 1;
        $task ->update();
        return back();
    }
}
