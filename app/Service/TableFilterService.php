<?php


namespace App\Service;


use App\Models\Good;

class TableFilterService
{
    public function tableFilter($filter)
    {
        $query = [];

        foreach ($filter as $k => $v) {
            if (gettype($filter[$k]) === "array") {
                $query[] = $v;
            } else {
                $query[] = [$k, 'like', '%'.$v.'%'];
            }
        }
        $filteredData = Good::where($query)
                            ->get()
        ;

        return $filteredData->toArray();
    }
}
