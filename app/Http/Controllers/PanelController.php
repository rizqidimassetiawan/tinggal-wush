<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    

    public function dashboard()
    {
        $datas = User::all()->load('village');
        return view('admin.panel.dashboard',[
            'datas' => $datas
        ]);    
    }

    public function default()
    {
        return view('admin.panel.default');
    }


}