<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Gasstation;
use App\Models\Gasstationgastype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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

        $districtName = $this->district->all()->sortBy('DistrictName');

        $gasStation = $this->gasStation->all()->sortBy('GasStationName');

        return view('admin.home', compact('districtName', 'gasStation'));
    }

    public function filter(Request $request) {
        if (empty($request->name) && empty($request->a92) && empty($request->a95) && empty($request->district) ){
            return Redirect()->route('admin.home');
        }

        $districtName = $this->district->all()->sortBy('DistrictName');

        $gasStation = $this->gasStation->all()->sortBy('GasStationName');

        $gas = DB::table('Gasstation')
            ->leftJoin('Gasstationgastype', 'Gasstation.GasStationId', '=', 'Gasstationgastype.GasStationId')
            ->leftJoin('gastype', 'Gasstationgastype.GasType', '=','gastype.TypeCode')
            ->leftJoin('m_district', 'Gasstation.District', '=', 'm_district.DistrictId');

//        dd($gas->get());

        if (isset($request->name)){
             $gas = $gas->where("GasstationName", $request->name);
        }

        if(isset($request->a92)){
            $gas = $gas->where("TypeCode", $request->a92);
            if(isset($request->a95)){
                $gas = $gas->where("TypeCode", $request->a95);
            }
        } elseif(isset($request->a95)){
            $gas = $gas->where("TypeCode", $request->a95);
        }

        if(isset($request->district)){
            $gas = $gas->where("DistrictId", $request->district);
        }

        $gas = $gas->get();

//        dd($gas);

//        foreach ($gasStation as $key) {
//            if ($key->GasStationName == $request->name) {
//                foreach ($key->gastypeRelation as $value) {
//
//                }
//            }
//        }

        return view('admin.filter', compact('districtName', 'gas'));
    }
}
