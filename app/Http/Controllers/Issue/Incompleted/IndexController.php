<?php

namespace App\Http\Controllers\Issue\Incompleted;

use App\Http\Controllers\Controller;
use App\Models\Issue;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('app.issues.incompleted.index');
    }
}
