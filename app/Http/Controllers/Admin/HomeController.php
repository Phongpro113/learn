<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Gasstation;
use App\Models\Gasstationgastype;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $district;
    private $gasStation;
    private $gasstationgastype;
    public function __construct(District $district, Gasstation $gasStation, Gasstationgastype $gasstationgastype)
    {
        $this->district = $district;
        $this->gasStation = $gasStation;
        $this->gasstationgastype = $gasstationgastype;
    }

    public function home() {

        $districtName = $this->district->all()->pluck('DistrictName')
            ->sort();
        $gasStation = $this->gasStation->all();

        return view('admin.home', compact('districtName', 'gasStation'));
    }
}
