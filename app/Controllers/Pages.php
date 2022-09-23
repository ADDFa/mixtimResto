<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Landing Page',
            'style'     => ['coba'],
            'script'    => ['coba']
        ];

        return view('landingPage', $data);
    }

    public function menu()
    {
        $data = [
            'title'     => 'Menu',
            'style'     => [],
            'script'    => []
        ];

        return view('menu', $data);
    }

    public function about()
    {
        $data = [
            'title'     => 'About',
            'style'     => [],
            'script'    => []
        ];

        return view('about', $data);
    }
}
