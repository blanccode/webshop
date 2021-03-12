<?php

namespace App\Models;

use App\Helpers\CalcPercentages;
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
    public function calcViewsIncrease() {
        // $this->getViews();
        // $this->getViewsLastMonth();
        return CalcPercentages::calcIncrease($this->getViewsLastMonth(),$this->getViews());
    }

    // public static function calcIncrease() {
    //    return self::calcIncreaseSinceMonth(self::getViewsLastMonth(), self::getViews());
    // }

    public function getViews() : int {
        return CalcPercentages::getCurrent($this);
    }

    public function getViewsLastMonth() : int {
       return CalcPercentages::getLastMonth($this);
    }
    

}

