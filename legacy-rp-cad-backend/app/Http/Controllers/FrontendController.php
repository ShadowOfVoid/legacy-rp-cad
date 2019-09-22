<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controller for rendering frontend framework.
 *
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{

    /**
     * Shows the entry index file.
     */
    function show() : View {
        return view()->file('app/index.html');
    }

}
