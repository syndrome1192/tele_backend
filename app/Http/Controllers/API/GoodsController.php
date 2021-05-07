<?php

namespace App\Http\Controllers\API;

use App\Models\Good;
use App\Service\TableFilterService;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;

class GoodsController extends BaseController
{
    public function index(Request $request)
    {
        $paginationParams = $request->all();
        $data = Good::paginate($paginationParams['per_page']);

        return $this->sendResponse($data->toArray(), 'ok');
    }

    public function getFilterData(Request $request, TableFilterService $table)
    {

        $data = $table->tableFilter($request->all());

        return $this->sendResponse($data, 'ok');
    }
}
