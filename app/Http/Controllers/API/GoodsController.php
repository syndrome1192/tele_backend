<?php

namespace App\Http\Controllers\API;

use App\Models\Good;
use App\Service\TableFilterService;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;

class GoodsController extends BaseController
{
    public function index()
    {
        $data = Good::limit(10)
                    ->get()
        ;

        return $this->sendResponse($data->toArray(), 'ok');
    }

    public function getFilterData(Request $request, TableFilterService $table)
    {

        $data = $table->tableFilter($request->all());

        return $this->sendResponse($data, 'ok');
    }
}
