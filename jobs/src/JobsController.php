<?php

namespace Codekidney\Jobs;

use App\Http\Controllers\Controller;

class JobsController extends Controller {

    public function index() {
        $jobs = app()->make('JobsService')->getList();
        dd($jobs);
    }

}