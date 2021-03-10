<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;

    public static function incrementViewCount()
    {
        $this->views++;
        $this->save();
        return;
    }

    public static function addAllViews() {
        $views = View::all();

        $viewCount = 0;
        foreach ($views as $view) {
            $viewCount++;
            
        }
        return $viewCount;
    }
}
