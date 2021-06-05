<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class Tampilan extends Controller
{
    public function index228()
    {
       $data = Pasien::get();
       return view('index228',compact('data'));
    }
    public function ubah228($id)
    {
       $data = Pasien::find($id);
       return view('ubah228',compact('data'));
    }
   
}
