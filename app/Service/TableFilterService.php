<?php


namespace App\Service;


use App\Models\Good;

class TableFilterService
{
    public function tableFilter($filter)
    {
        $query = [];

        foreach ($filter["data"] as $k => $v) {
            if (gettype($filter["data"][$k]) === "array") {
                $query[] = $v;
            } else {
                $query[] = [$k, 'like', '%'.$v.'%'];
            }
        }
        $filteredData = Good::where($query)
                            ->paginate($filter["per_page"])
        ;

        return $filteredData->toArray();
    }
}
