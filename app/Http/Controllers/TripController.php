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
        $error1 = FALSE;
        $error2 = FALSE;
        $error3 = FALSE;
        $returnView =  view('trip');

        $dest1url = "http://localhost:8000/api/v1/places/bycityname/" . $dest1;
        $dest2url = "http://localhost:8000/api/v1/places/bycityname/" . $dest2;
        $dest3url = "http://localhost:8000/api/v1/places/bycityname/" . $dest3;
        if ($json1 = @file_get_contents($dest1url)) {
            $jsonDest1 = json_decode($json1, true);
            $returnView->with('places1', $jsonDest1);
        }else {
            $error1 = TRUE;
        }
        if($json2 = @file_get_contents($dest2url)){
            $jsonDest2 = json_decode($json2, true);
            $returnView->with('places2', $jsonDest2);
        }else {
            $error2 = TRUE;
        }
        if($json3 = @file_get_contents($dest3url)){
            $jsonDest3 = json_decode($json3, true);
            $returnView->with('places3', $jsonDest3);
        }else {
            $error3 = TRUE;
        }
        
        return $returnView;
    }
}
