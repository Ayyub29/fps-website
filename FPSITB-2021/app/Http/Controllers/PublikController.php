<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PublikController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $beritas = DB::select('select * from beritas order by updated_at desc');
        return view('welcome', ['beritas' => $beritas]);
    }

    public function visiMisi()
    {
        return view('visi-misi');
    }

    public function timArtistik()
    {
        return view('tim-artistik');
    }

    public function tema()
    {
        return view('tema');
    }

    public function pendaftaran()
    {
        return view('pendaftaran-belumlogin');
    }

    public function maknaLogo()
    {
        return view('makna-logo');
    }

    public function festivalGrupVokal()
    {
        return view('festival-grup-vokal');
    }

    public function faq()
    {
        return view('faq');
    }
}
