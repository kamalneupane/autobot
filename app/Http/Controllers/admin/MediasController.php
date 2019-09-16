<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediasController extends Controller
{
    //
    public function index()
    {
    return view('admin.medias.media');
    }
}
