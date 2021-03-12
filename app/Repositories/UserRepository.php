<?php



namespace App\Repositories;

use App\Models\User;
use App\Interfaces\UserInterface;
use App\Repositories\BaseRepository;


class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function getAdmin()
    {
        $admin =  User::all()->where('role_id', 1);

        foreach ($admin as $admin) {
            return $admin;
        }
        
    }

    
}
