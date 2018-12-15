@extends('layouts.app')

@section('content')



<div class="container" id="tabs">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>

            <div class="card">


             {{--   <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                    <li><a data-toggle="tab" href="#explore">Explore</a></li>
                </ul>--}}

               {{-- <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="card" >--}}
                            <div class="card-header" >Your Questions


                                <a class="btn btn-primary float-right" href="#">
                                    Explore More
                                </a>

                                <a class="btn btn-primary float-right mr-2" href="#">
                                    Create a Question
                                </a>

                                <div class="card-body" >

                                    <div class="card-deck">
                                        @forelse($questions as $question)
                                            <div class="col-sm-4 d-flex align-items-stretch">
                                                <div class="card mb-3 ">
                                                    <div class="card-header">
                                                        <small class="text-muted">
                                                            Updated: {{ $question->created_at->diffForHumans() }}
                                                            {{--Answers: {{ $question->answers()->count() }}--}}

                                                        </small>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">{{$question->body}}</p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="card-text">

                                                            <a class="btn btn-primary float-right" href="{{ route('question.show', ['id' => $question->id]) }}">
                                                                View
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            There are no questions to view, you can  create a question.
                                        @endforelse


                                    {{--</div>--}}

                                </div>
                            </div>
                            <div class="card-footer" id="home">
                                <div class="float-right">
                                    {{ $questions->links() }}
                                </div>
                            </div>


                      {{--  </div>

                    </div>--}}


                   {{-- <div id="explore" class="tab-pane fade">
                        <h3>Explore</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>--}}

                {{--</div>--}}
            </div>


        </div>
    </div>
</div>


   {{-- </style>--}}
@endsection
