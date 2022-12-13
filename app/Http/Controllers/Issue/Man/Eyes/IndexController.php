<?php

namespace App\Http\Controllers\Issue\Man\Eyes;

use App\Http\Controllers\Controller;
use App\Models\Issue;

class IndexController extends Controller
{
    public function __invoke()
    {
        $eye_issues = Issue::where('body_part_id', 2)->where('gender_id', 1)->get();
        return view('app.issues.man.eyes.index', compact('eye_issues'));
    }
}
