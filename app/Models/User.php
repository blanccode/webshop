<?php

namespace App\Models;

use App\Models\Role;
use App\Helpers\CalcPercentages;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'admin_name',
        'email',
        'password',
        'role_id',
        'dev_access',
        'created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public static function calcIncreaseSinceMonth($pastViews, $currentViews)
    {
        // $increase = self::getViews() - self::getViewsLastMonth();
        $increase = $currentViews - $pastViews;

        $increase = $increase / $pastViews * 100;

        return number_format($increase, 2);
    }

    public function calcUsersIncrease() :int
    {
     
        return CalcPercentages::calcIncreaseSinceMonth($this->getUsersLastMonth(), $this->getCurrentUsers());
    }

  
    public function getCurrentUsers(): int
    {
        return CalcPercentages::getCurrent($this);
    }

    public function getUsersLastMonth(): int
    {
        return CalcPercentages::getLastMonth($this);
    }
    
}
