<?php

namespace App\Http\Controllers;
use App\Models\Report as Report;
use Illuminate\Http\Request;
use App\Exports\StockExport;


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
        $data['reports'] = Report::List();
        return view('home',$data);
    }
}
