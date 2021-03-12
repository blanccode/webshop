<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class CalcPercentages {


    public static function calcIncrease($pastViews, $currentViews)
    {
        $increase = $currentViews - $pastViews;

        $increase = $increase / $pastViews * 100;

        return number_format($increase, 2);
    }

    // public static function calcIncrease($a, $b)
    // {
    //     return self::calcIncreaseSinceMonth(self::getLastMonth(), self::getCurrent());
    // }

    public static function getCurrent($models) : int
    {
        $model = $models->whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->get();
        $viewsMonth = 0;
        foreach ($model as $model) {
            $viewsMonth++;
        }
        return $viewsMonth;
    }

    public static function getLastMonth($models) : int
    {
        $model = $models->whereDate('created_at', now()->subMonth())->get();
        $viewsLastMonth = 0;

        foreach ($model as $model) {
            $viewsLastMonth++;
        }
        return $viewsLastMonth;
    }



}