<?php

namespace Qrcod\Http\Controllers;

use Illuminate\Http\Request;

use Qrcod\Http\Requests;
use Qrcod\Http\Controllers\Controller;

class QrctrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
}
