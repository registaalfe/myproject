<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Film'
        ];
        return view('pages/home', $data);
    }
}
