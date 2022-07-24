<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CosmeController extends BaseController
{
    public function index() {
        return "Welcome to Cosme page!";
    }
}
