<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return '2341760049 | Muhammad Mahdi Arielreza Hafiz';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ke-' . $id;
    }
}
