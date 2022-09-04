<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\BodyPart;
use App\Models\Gender;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $genders = Gender::all();
        $bodyParts = BodyPart::all();
        return view('app.gender.index', compact('genders', 'bodyParts'));
    }
}
