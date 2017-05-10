<?php

namespace App\Queries\GridQueries\Contracts;

interface FilteredDataQuery
{
    public function filteredData($column, $direction, $keyword);
}
