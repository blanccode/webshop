<?php

namespace App\Http\Controllers;

use App\Helpers\CalcPercentages;
use App\Models\DashboardColumn;
use Carbon\Carbon;
use App\Models\Role;
use App\Models\Sale;
use App\Models\User;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;


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

    public function index(Request $request, View $view ,Response $response, Sale $sale)
    {
        if ($request->input('since') == 'last-week') {
           $viewsSinceWeak = $view->calcViewsSinceWeak();
        }

        $roles = $this->roleRepository->all();
        $admin = $this->userRepository->getAdmin();
        $users = $this->userRepository->all();
        $totalUsers = $this->userRepository->getUserCount();

        foreach ($users as $user) {
            $user->roles()->attach($roles);
        }

       

        return view('admin.dashboard', compact('admin','users'));
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
