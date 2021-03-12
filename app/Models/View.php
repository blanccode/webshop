<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class View extends Model
{
    use HasFactory;

    protected $fillabe = [];

    public function incrementViewCount()
    {
        $time = Carbon::now()->addMonth(1);
        $this->views++;
        $this->created_at = $time;
        $this->save();
        return;
        
    }

    public function addAllViews() {
        $views = View::all();

        $viewCount = 0;
        foreach ($views as $view) {
            $viewCount++;
            
        }
        return $viewCount;
    }
    public static function calcIncreaseSinceMonth($pastViews, $currentViews)
    {
        // $increase = self::getViews() - self::getViewsLastMonth();
        $increase = $currentViews - $pastViews;

        $increase = $increase / $pastViews * 100;

        return number_format($increase, 2);
    }

    public static function calcIncrease()
    {
        return self::calcIncreaseSinceMonth(self::getLastMonth(), self::getCurrent());
    }

    public static function getCurrent(): int
    {
        $model = self::whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->get();
        $viewsMonth = 0;
        foreach ($model as $model) {
            $viewsMonth++;
        }
        return $viewsMonth;
    }

    public static function getLastMonth(): int
    {
        
        $model = self::whereDate('created_at', now()->subMonth())->get();
        $lastMonth = 0;


        foreach ($model as $model) {
            $lastMonth++;
        }


        return $lastMonth;
    }
    

}

