@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Questions</div>

                    <div class="card-body">

                         {{--{{$questions ->body}}--}}
                        {{--{{$questions}}--}}
                        <div class="card-deck">

                        @foreach($questions as $question)
                                <div class="col-sm-4 d-flex align-items-stretch">
                                    <div class="card mb-3 ">

                                        <div class="card-header">
                                            <small class="text-muted">
                                                Updated: {{ $question->created_at->diffForHumans() }}
                                                {{--Answers: {{ $question->answers()->count() }}--}}

                                            </small>
                                        </div>
                                        <div class="card-body">
                                            <p>{{$question -> body}}</p>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text">

                                                <a class="btn btn-primary float-right"
                                                   href="{{ route('detail.show', ['$question' => $question]) }} ">
                                                    View
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        @endforeach


                        </div>
                    </div>

                   {{-- <div class="card-footer">
                        <a class="btn btn-primary float-right"
                           href="#">
                            Subscribe
                        </a>
                    </div>--}}

                </div>
            </div>
        </div>
    </div>
@endsection


            {{--Answer section--}}

            {{--<div class="col-md-4">
                <div class="card">
                    <div class="card-header"><a class="btn btn-primary float-left"
                                                href="#">
                            Answer Question
                        </a></div>

                    <div class="card-body">
                        @forelse($question->answer as $answer)
                            <div class="card">
                                <div class="card-body">{{$answer->body}}</div>
                                <div class="card-footer">

                                    <a class="btn btn-primary float-right"
                                       href="{{ route('answer.show', ['question_id'=> $question->id,'answer_id' => $answer->id]) }}">
                                        View
                                    </a>

                                </div>
                            </div>
                        @empty
                            <div class="card">

                                <div class="card-body"> No Answers</div>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>--}}



