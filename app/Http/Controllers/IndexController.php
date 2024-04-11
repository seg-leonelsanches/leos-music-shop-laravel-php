<?php

namespace App\Http\Controllers;

use Segment\Segment;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        Segment::page(array(
            "userId" => "23456",
            "category" => "Retail Pages",
            "name" => "Initial Page",
            "properties" => array(
                "url" => "https://localhost:8000/"
            )
        ));
        return view('welcome');
    }
}
