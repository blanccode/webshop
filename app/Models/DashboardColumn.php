<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardColumn extends Model
{
    use HasFactory;

    public $dashboardColumns;
    public $percentages;


    public function __construct() {
        $this->dashboardColumns[0]['id'] = 1;
        $this->dashboardColumns[0]['icon-class'] = "bg-gradient-red";
        $this->dashboardColumns[0]['icon-name'] = "ni ni-active-40";

        $this->dashboardColumns[1]['id'] = 2;
        $this->dashboardColumns[1]['icon-class'] = "bg-gradient-orange";
        $this->dashboardColumns[1]['icon-name'] = "ni ni-chart-pie-35";

        $this->dashboardColumns[2]['id'] = 3;
        $this->dashboardColumns[2]['icon-class'] = "bg-gradient-green";
        $this->dashboardColumns[2]['icon-name'] = "ni ni-money-coins";

        $this->dashboardColumns[3]['id'] = 4;
        $this->dashboardColumns[3]['icon-class'] = "bg-gradient-info";
        $this->dashboardColumns[3]['icon-name'] = "ni ni-chart-bar-32";
    }
}
