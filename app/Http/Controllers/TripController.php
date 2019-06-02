<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function tripPlannerByCity(Request $request)
    {
        $dest1 = $request->input('destiantion1');
        $dest2 = $request->input('destiantion2');
        $dest3 = $request->input('destiantion3');
        $dest1url = "http://localhost:8000/api/v1/places/bycityname/" . $dest1;
        $json1 = file_get_contents($dest1url);
        $jsonDest1 = json_decode($json1, true);
        $returnView =  view('trip')->with('places1', $jsonDest1);
        if(!empty($dest2)){
            $dest2url = "http://localhost:8000/api/v1/places/bycityname/" . $dest2;
            $json2 = file_get_contents($dest2url);
            $jsonDest2 = json_decode($json2, true);
            $returnView->with('places2', $jsonDest2);
            if(!empty($dest3)){
            $dest3url = "http://localhost:8000/api/v1/places/bycityname/" . $dest3;
            $json3 = file_get_contents($dest3url);
            $jsonDest3 = json_decode($json3, true);
            $returnView->with('places3', $jsonDest3);
        }
        }
        return $returnView;

    }
}
