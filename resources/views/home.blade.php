@extends('layouts.app')

@section('content')



<div class="container" id="tabs">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="card" >
                            <div class="card-header" id="dashboard">Dashboard</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                You are logged in!
                            </div>
                        </div>

                    </div>


                    <div id="menu1" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                </div>
            </div>
{{--            <div class="card" >
                <div class="card-header" id="dashboard">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>--}}

        </div>
    </div>
</div>


   {{-- </style>--}}
@endsection
