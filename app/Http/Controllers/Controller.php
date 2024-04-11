<?php

namespace App\Http\Controllers;

use Segment\Segment;

abstract class Controller
{
    public function __construct()
    {
        Segment::init(env("SEGMENT_WRITE_KEY"));
    }
}
