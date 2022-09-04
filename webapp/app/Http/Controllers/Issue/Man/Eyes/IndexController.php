<?php

namespace App\Http\Controllers\Issue\Man\Eyes;

use App\Http\Controllers\Controller;
use App\Models\Issue;

class IndexController extends Controller
{
    public function __invoke()
    {
        $eye_issues = Issue::all();
        return view('app.issues.man.eyes.index', compact('eye_issues'));
    }
}
