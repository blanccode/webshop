<?php

// namespace App\Http\Livewire;

// use App\Models\Sale;
// use App\Models\User;
// use App\Models\View;
// use Livewire\Component;
// use App\Models\DashboardColumn;
// use App\Repositories\RoleRepository;
// use App\Repositories\UserRepository;

// class Dashboard extends Component
// {
//     public $totalUsers;
//     public $usersPercentage;
//     public $option;
//     public $totalViews;
//     public $viewsPercentage;
//     public $percentages;
//     public $dashboardColumns;

//     public $salesPercentage;

//     public function mount(UserRepository $userRepository, RoleRepository $roleRepository, View  $view )
//     {
        
        
//         // dd($this->dashboardColumns);



//     }
//     public function render()
//     {
//         $view = new View;
//         if ($this->option == 'last-week') {
//             $this->percentages = $view->calcViewsSinceWeak();
//         } elseif ($this->option == 'last-month') {
//             $this->percentages = $view->calcViewsIncrease();
//         }

//         return view(
//             'livewire.dashboard',
//             ['totalUsers' => 'totalUsers'],
//             ['usersPercentage' => 'usersPercentage'],
//             ['totalViews' => 'totalViews'],
//             ['viewsPercentage' => 'viewsPercentage'],
//             ['salesPercentage' => 'salesPercentage'],
//         )->layout('admin.dashboard');
//     }
// }
