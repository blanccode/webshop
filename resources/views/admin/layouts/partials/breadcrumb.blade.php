<div class="container-fluid header  ">
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2  d-inline-block mb-0">Default</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home text-custom"></i></a></li>
                    <li class="breadcrumb-item text-custom"><a href="#" class="text-custom">Dashboards</a></li>
                    <li class="breadcrumb-item active text-custom" aria-current="page">@yield('crumb')</li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral text-custom">New</a>
            <a href="#" class="btn btn-sm btn-neutral text-custom">Filters</a>
        </div>
    </div>
</div>

@if (request()->is('dashboard/users'))

<div class="pb-5 bg-primary"></div>
@else
    
@endif
