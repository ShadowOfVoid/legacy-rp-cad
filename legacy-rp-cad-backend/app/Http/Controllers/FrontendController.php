<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    function show() {
        return view()->file('app/index.html');
    }

}
