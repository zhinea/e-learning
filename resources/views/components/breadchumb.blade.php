<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Alerts</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Components</a>
                        </li>
                        <li class="breadcrumb-item active">Alerts
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
        <div class="form-group breadcrumb-right">
            <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>

                <div class="dropdown-menu dropdown-menu-right">
     
                   {{--  @foreach (App\Models\HighlightMenu::orderBy('position')->get() as $menu)
                    
                        <a class="dropdown-item" href="{{ $menu->link }}">
                            <i class="mr-1" data-feather="{{ $menu->icon }}"></i>
                            <span class="align-middle">{{ $menu->title }}</span>
                        </a>
                        
                    @endforeach --}}

                </div>
            </div>
        </div>
    </div>
</div>