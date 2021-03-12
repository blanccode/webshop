<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class CalcPercentages {


    public static function calcIncreaseSinceMonth($pastViews, $currentViews)
    {
        // $increase = self::getViews() - self::getViewsLastMonth();
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

        $models = $models->whereDate('created_at', now()->subMonth())->get();
        $lastMonth = 0;
            dd($models);

        foreach ($models as $model) {

            $lastMonth++;

        }



        return $lastMonth;
    }



}