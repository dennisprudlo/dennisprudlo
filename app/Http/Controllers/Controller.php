<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class Controller extends BaseController {

    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * Handles an incoming request
     *
     * @return \Illuminate\View\View
     */
    public function handle () : View {
        return view('index', [
            'title' => 'Hi, I am Dennis Prudlo',
            'description' => 'I am a highly motivated full-stack web & iOS developer with a keen eye for UI/UX based in Berlin.'
        ]);
    }
}
