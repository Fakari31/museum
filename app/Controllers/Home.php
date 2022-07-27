<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function koleksi()
    {
        return view('koleksi');
    }

    public function virtual_tour()
    {
        return view('virtual_tour');
    }

    public function wisata()
    {
        return view('wisata');
    }







    public function login()
    {
        return view('/admin/login');
    }

    public function halaman_admin()
    {
        return view('/admin/halaman_admin');
    }

    public function lantai1()
    {
        return view('/admin/lantai1');
    }

    public function lantai2()
    {
        return view('/admin/lantai2');
    }
}
