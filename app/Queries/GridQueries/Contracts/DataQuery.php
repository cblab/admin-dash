<?php

namespace App\Queries\GridQueries\Contracts;

interface DataQuery
{
    public function data($column, $direction);
}