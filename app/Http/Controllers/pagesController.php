<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Staff;

/**
 * Class pagesController
 * @package App\Http\Controllers
 */
class pagesController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $staff = Staff::All();

        return view('login', compact('staff'));

        // This returns JSON on the specified route.
     //   return $staff;
    }

}