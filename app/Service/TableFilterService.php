<?php


namespace App\Service;


use App\Models\Good;

class TableFilterService
{
    public function tableFilter($filter) {
        $query = [];

        foreach ($filter as $k => $v) {
            $query[] = [$k , '=', $v];
        }
        $filteredData = Good::where($query)->get();

        return $filteredData->toArray();
    }
}
