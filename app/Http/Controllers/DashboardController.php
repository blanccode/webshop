<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\View;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->middleware('role');
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
    }

    public function index(Request $request, View $view ,Response $response, User $user)
    {
        $roles = $this->roleRepository->all();
        $admin = $this->userRepository->getAdmin();
        $users = $this->userRepository->all();

        $totalUsers = 0;
        foreach ($users as $user) {
            $totalUsers++;
            $user->roles()->attach($roles);
        }
        $totalUsers -= 1;

        $totalViews = $view->addAllViews();
        $viewsPercentage = $view->calcIncrease();

        $usersPercentage =  $user->calcUsersIncrease();
        // $time = Carbon::now()->subMonth(1);
        // $view->created_at = $time;
        // $view->save();
        // $views = new View;
        // $views->created_at->now()->subMonth();
        // $views->save();

        return view('admin.dashboard', compact('totalUsers', 'totalViews', 'viewsPercentage','admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
