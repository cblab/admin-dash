<?php

namespace App\Queries\GridQueries;

use DB;

use App\Queries\GridQueries\Contracts\DataQuery;
use App\Queries\GridQueries\Contracts\FilteredDataQuery;

class ProfileQuery implements DataQuery, FilteredDataQuery
{

    public function data($column, $direction)
    {

        $rows = DB::table('profiles')
                ->select('profiles.id as Id',
                         'profiles.first_name as First',
                         'profiles.last_name as Last',
                         'profiles.gender as Gender',
                         'users.name as User',
                         'users.id as UserId',
                DB::raw('DATE_FORMAT(profiles.created_at,
                         "%m-%d-%Y") as Created'))
                ->leftJoin('users', 'user_id', '=', 'users.id')
                ->orderBy($column, $direction)
                ->paginate(10);

        return $rows;

    }

    public function filteredData($column, $direction, $keyword)
    {
        $rows = DB::table('profiles')
                ->select('profiles.id as Id',
                         'profiles.first_name as First',
                         'profiles.last_name as Last',
                         'profiles.gender as Gender',
                         'users.name as User',
                         'users.id as UserId',
                DB::raw('DATE_FORMAT(profiles.created_at,
                         "%m-%d-%Y") as Created'))
                ->leftJoin('users', 'user_id', '=', 'users.id')
                ->where('profiles.id', 'like', '%' . $keyword . '%')
                ->orWhere('profiles.first_name', 'like', '%' . $keyword . '%')
                ->orWhere('profiles.last_name', 'like', '%' . $keyword . '%')
                ->orWhere('users.name', 'like', '%' . $keyword . '%')
                ->orderBy($column, $direction)
                ->paginate(10);

        return $rows;

    }
}