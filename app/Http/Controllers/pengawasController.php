<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengawasController extends Controller
{
    public function Dashboard()
    {
        $data['title'] = 'Dashboard Pengawas';
        return view('frontEnd.dashboard', $data);
    }

    public function penyedia()
    {
        $data['title'] = 'Penyedia';
        return view('frontEnd.Penyedia', $data);
    }

    public function product()
    {
        $data['title'] = 'Product';
        return view('frontEnd.Product', $data);
    }

    public function satdik()
    {
        $data['title'] = 'Satdik';
        return view('frontEnd.Satdik', $data);
    }
}