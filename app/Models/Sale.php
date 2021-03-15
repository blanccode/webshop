<?php

namespace App\Models;

use App\Helpers\CalcPercentages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory;


    public function calcSalesIncrease(): int
    {

        return CalcPercentages::calcIncrease($this->getSalesLastMonth(), $this->getCurrentSales(),);
    }


    public function getCurrentSales(): int
    {
        return CalcPercentages::getCurrentMonth($this) - 1;
    }

    public function getSalesLastMonth(): int
    {
        return CalcPercentages::getLastMonth($this);
    }
}
