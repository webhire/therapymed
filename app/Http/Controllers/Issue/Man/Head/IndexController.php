<?php

namespace App\Http\Controllers\Issue\Man\Head;

use App\Http\Controllers\Controller;
use App\Models\Issue;

class IndexController extends Controller
{
    public function __invoke()
    {
        $head_issues = Issue::where('body_part_id', 1)->where('gender_id', 1)->get();
        return view('app.issues.man.head.index', compact('head_issues'));
    }
}
