<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengawasController extends Controller
{
    public function login()
    {
        $data['title'] = 'Login';
        return view('frontEnd.auth.login', $data);
    }

    public function Dashboard()
    {
        $data['title'] = 'Dashboard Pengawas';
        return view('frontEnd.dashboard', $data);
    }

    public function user_management()
    {
        $data['title'] = 'User Management';
        return view('frontEnd.user_management', $data);
    }

    public function role_management()
    {
        $data['title'] = 'Role Management';
        return view('frontEnd.role_management', $data);
    }

    public function banner()
    {
        $data['title'] = 'Banner';
        return view('frontEnd.banner', $data);
    }

    public function catergory()
    {
        $data['title'] = 'catergory';
        return view('frontEnd.catergory', $data);
    }

    public function provider()
    {
        $data['title'] = 'Penyedia';
        return view('frontEnd.provider', $data);
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

    public function book_teks()
    {
        $data['title'] = 'Book Teks';
        return view('frontEnd.book_teks', $data);
    }

    public function book_non_teks()
    {
        $data['title'] = 'Book Non Teks';
        return view('frontEnd.book_non_teks', $data);
    }

    public function negotiation()
    {
        $data['title'] = 'Negosiasi';
        return view('frontEnd.negotiation', $data);
    }

    public function order_list()
    {
        $data['title'] = 'Book Teks';
        return view('frontEnd.order_list', $data);
    }

    public function activity_history()
    {
        $data['title'] = 'Histori Aktifitas';
        return view('frontEnd.activity_history', $data);
    }

    public function chats()
    {
        $data['title'] = 'Chats';
        return view('frontEnd.chats', $data);
    }

    public function message()
    {
        $data['title'] = 'Message';
        return view('frontEnd.message', $data);
    }
}