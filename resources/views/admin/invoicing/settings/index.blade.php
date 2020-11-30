@extends('layouts.app')

@section('breadcrumbs')



<li class="breadcrumb-item"><a href="{{ route('admin.invoicing.dashboard')}}">Invoicing</a></li>
<li class="breadcrumb-item"><a href="{{ route('admin.invoicing.settings.dashboard')}}">Settings</a></li>
<li class="breadcrumb-item">Dasboard</li>
@endsection





@section('content')
<div class="card mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-10">
                <h3>Invoicing Settings<small class="text-muted">Manage Invoicing Settings</small> </h3>
            </div>
            <div class="col-2">
                <ul class="navbar-nav float-right">

                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Option <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Edit Company Details</a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection
