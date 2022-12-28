<?php

namespace App\Http\Controllers;
use App\Models\Report as Report;
use Illuminate\Http\Request;
use App\Exports\StockExport;
use App\Models\Inward_master as Inward_master;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['reports'] = Report::List(3);
        $data['reorders'] = Inward_master::reorders();
        // dd($data['reorders']);

        return view('home',$data);
    }
}
