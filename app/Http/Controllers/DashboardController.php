<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('role');
    }

    public function index(Request $request, View $view ,Response $response)
    {

        //  $routeCollection = collect(Route::getRoutes());

        // $uriArray = [];

        // foreach ($routeCollection as $route) {
        //     $uris = $route->uri();

        //     array_push($uriArray, $uris);
        // }
        // foreach ($uriArray as $item) {
        //     echo $item;
        // }
        // dd($uriArray);

        if (Cookie::get('view-session') == '') {
            Cookie::queue(Cookie::make('view-session', '1', 1));
            $view->incrementViewCount();
            
        }


        // $uriArray = [];

        // $routeCollection->map(function ($route) {
        //    $uris = $route->uri();

        //     array_push($uriArray, $uris);

        // });
        // print_r($uriArray);


        $roles = Role::all();
        $users = User::all()->where('role_id', 1);
        foreach ($users as $user) {
            $user->roles()->attach($roles);
        }

        return view('admin.dashboard', compact('users'));
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
