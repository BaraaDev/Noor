<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

function responseJson($status, $message, $data = null)
{

    if ($data == null) {
        $response =
            [
                'status'  => $status,
                'message' => $message
            ];
    } else {
        $response =
            [
                'status'  => $status,
                'message' => $message,
                'data'    => $data
            ];
    }

    return response()->json($response);
}

function chart($number, $model, $date,$sub,  $where = null)
{
    $charts = [];
    for ($i = 0; $i <= $number; $i++){
        if ($where != null) {
            $charts[] = $model::$where(0)->whereDate($date, today()->$sub($i))->count();

        }else{
            $charts[] = $model::whereDate($date, today()->$sub($i))->count();
        }
    }
    return $charts;
}

function visit_details($table, $column, $id, $title) {
    if (\auth()->user())
    {
        $user    = auth::user()->id;
    } else {
        $user    = '0';
    }
    // var '$insert' check in table `$table` before add visit .
    $insert = DB::table($table)->where($column, $id)->where('session_id', Request::getSession()->getId())->where('user_id',$user)->latest()->first();
    // if insert db table `$table` .
    if ($insert == null ){
        DB::table($table)->insert(
            [
                $column      => $id,
                'titleslug'  => $title,
                'url'        => $id,
                'session_id' => \Request::getSession()->getId(),
                'user_id'    =>  $user,
                'ip'         => \Request::getClientIp(),
                'agent'      => \Request::header('User-Agent'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        // add visit after hour .
    } else {
        // var insert 1 hour on created_at in table `$table` .
        $var =  Date("Y-m-d H:i:s", strtotime('1 hour', strtotime($insert->created_at)));

        // add visit after hour if it's visited.
        if($var <= Date("Y-m-d H:i:s") && $insert != null ) {
            DB::table($table)->insert(
                [
                    $column      => $id,
                    'titleslug'  => $title,
                    'url'        => $id,
                    'session_id' => \Request::getSession()->getId(),
                    'user_id'    =>  $user,
                    'ip'         => \Request::getClientIp(),
                    'agent'      => \Request::header('User-Agent'),
                    'created_at' =>  Carbon::now(),
                    'updated_at' =>  Carbon::now(),
                ]
            );
        }

    }
    //thx .
}



function visit($table) {
    if (\auth()->user())
    {
        $user    = auth::user()->id;
    } else {
        $user    = '0';
    }
    // var '$insert' check in table `$table` before add visit .
    $insert = DB::table($table)->where('session_id', Request::getSession()->getId())->where('user_id',$user)->latest()->first();
    // if insert db table `$table` .
    if ($insert == null ){
        DB::table($table)->insert(
            [
                'session_id' => \Request::getSession()->getId(),
                'user_id'    =>  $user,
                'ip'         => \Request::getClientIp(),
                'agent'      => \Request::header('User-Agent'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        // add visit after hour .
    } else {
        // var insert 1 hour on created_at in table `$table` .
        $var =  Date("Y-m-d H:i:s", strtotime('1 hour', strtotime($insert->created_at)));

        // add visit after hour if it's visited.
        if($var <= Date("Y-m-d H:i:s") && $insert != null ) {
            DB::table($table)->insert(
                [
                    'session_id' => \Request::getSession()->getId(),
                    'user_id'    =>  $user,
                    'ip'         => \Request::getClientIp(),
                    'agent'      => \Request::header('User-Agent'),
                    'created_at' =>  Carbon::now(),
                    'updated_at' =>  Carbon::now(),
                ]
            );
        }

    }
    //thx .
}