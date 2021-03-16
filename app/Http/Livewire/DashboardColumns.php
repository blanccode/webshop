<?php

// namespace App\Http\Livewire;

// use App\Models\DashboardColumn;
// use App\Models\Sale;
// use App\Models\User;
// use App\Models\View;
// use Livewire\Component;
// use App\Repositories\RoleRepository;
// use App\Repositories\UserRepository;

// class DashboardColumns extends Component
// {
   
//     public $dashboardColumns;

//     public function mount(UserRepository $userRepository, RoleRepository $roleRepository, View  $view, User $user, Sale $sale, DashboardColumn  $dashboardColumns)
//     {
//         $this->userRepository = $userRepository;
//         $this->roleRepository = $roleRepository;

//         $this->totalUsers = $this->userRepository->getUserCount();
//         $this->usersPercentage = $user->calcUsersIncrease();

//         $this->totalViews = $view->addAllViews();
//         $this->viewsPercentage = $view->calcViewsIncrease();
      

//         $this->salesPercentage = $sale->calcSalesIncrease();
//         $this->dashboardColumns = $dashboardColumns->dashboardColumns;
//         // dd($this->dashboardColumns);

        
        
//     }

    

//     public function render()
//     {
//         // $view = new View;
//         // if ($this->option == 'last-week') {
//         //     $this->viewsSinceWeek = $view->calcViewsSinceWeak();
//         // }
//         // elseif ($this->option == 'last-year') {
//         //     $this->viewsSinceWeek = $view->calcViewsIncrease();
//         // }
      
//         return view('livewire.dashboard-columns',
//             ['totalUsers' => 'totalUsers'], 
//             ['usersPercentage' => 'usersPercentage'], 
//             ['totalViews'=>'totalViews'], 
//             ['viewsPercentage'=>'viewsPercentage'], 
//             ['salesPercentage'=>'salesPercentage'],
//         )->layout('admin.dashboard');
//     }

// }
