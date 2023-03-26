<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Lot;

class LotController extends BaseController
{
    public function index()
    {
        $apples = Lot::all();
        return $this->sendResponse(json_decode($apples), 'Apples retrieved successfully.',JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $weight=$request->input('weight');
        if($weight>=1000)
        {
            $input['auction_started']="true";
        }
        else
        {
            $input['auction_started']="false";
        }

        $createapple = Lot::create($input);

        return $this->sendResponse($createapple->toArray(), '201 created');
    }

    public function updateHarvestDate(Request $request, $id)
    {
        $data=Lot::findOrFail($id);
        $data->harvesting_date = $request->input('harvesting_date');   
        $data->save();
        return $this->sendResponse($data->toArray(), '200 OK');

    }

    public function updateAuction(Request $request, $id)
    {
        $data=Lot::findOrFail($id);
        $data->starting_price = $request->input('starting_price');   
        $data->auction_started='true';
        $data->save();
        return $this->sendResponse($data->toArray(), '200 OK');

    }
}
