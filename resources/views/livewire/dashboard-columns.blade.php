

        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            {{-- @foreach ($views as $view) --}}
                            <h5 class="card-title text-uppercase text-muted mb-0">Site hits</h5>
                            {{-- @endforeach --}}
                            <span class="h2 font-weight-bold mb-0 gray">{{$totalViews ?? ''}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape {{$dashboardColumns[0]['icon-class']}} text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                    @if ($viewsPercentage ?? '' >= 0 )
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>
                        {{number_format($viewsPercentage ?? 0, 2)}}%</span>
        
                    @else
                    <span class="text-warning mr-2"><i class="fa fa-arrow-down"></i>
                        {{number_format($viewsPercentage ?? 0, 2)}}%</span>
                    @endif
                 
                </div>
            </div>
        
        </div>
        {{-- <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                            <span class="h2 font-weight-bold mb-0 gray">{{$totalUsers ?? ''}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>
                    @if ($usersPercentage ?? '' >= 0 )
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>
                        {{number_format($usersPercentage ?? 0, 2)}}%</span>
    
                    @else
                    <span class="text-warning mr-2"><i class="fa fa-arrow-down"></i>
                        {{number_format($usersPercentage ?? 0 , 2)}}%</span>
                    @endif
                    @include('admin.layouts.partials.dropdown')
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                            <span class="h2 font-weight-bold mb-0 gray">924</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="ni ni-money-coins"></i>
                            </div>
                        </div>
                    </div>
                    @if ($salesPercentage ?? '' >= 0 )
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>
                        {{number_format($salesPercentage ?? 0, 2)}}%</span>
    
                    @else
                    <span class="text-warning mr-2"><i class="fa fa-arrow-down"></i>
                        {{number_format($salesPercentage ?? 0, 2)}}%</span>
                    @endif
                    @include('admin.layouts.partials.dropdown')
                    
                </div>
                
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                            <span class="h2 font-weight-bold mb-0 gray">49,65%</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="ni ni-chart-bar-32"></i>
                            </div>
                        </div>
                    </div>
                    @if ($salesPercentage ?? '' >= 0 )
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i>
                        {{number_format($salesPercentage ?? 0, 2)}}%</span>
    
                    @else
                    <span class="text-warning mr-2"><i class="fa fa-arrow-down"></i>
                        {{number_format($salesPercentage ?? 0, 2)}}%</span>
                    @endif
                    @include('admin.layouts.partials.dropdown')
                </div>
            </div>
        </div>--}}
