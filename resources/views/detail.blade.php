@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Question</div>

                    <div class="card-body">

                        {{$detail-> question_body}}
                    </div>
                    <div class="card-footer">
                        {{--<a class="btn btn-primary float-right"
                           href="{{ route('question.edit',['id'=> $question->id])}}">
                            Edit Question
                        </a>

                        {{ Form::open(['method'  => 'DELETE', 'route' => ['question.destroy', $question->id]])}}
                        <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete
                        </button>
                        {!! Form::close() !!}--}}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"> Answer
                        {{--<a class="btn btn-primary float-left"
                                                href="{{ route('answer.create', ['question_id'=> $question->id])}}">
                            Answer Question
                        </a>--}}
                    </div>

                    <div class="card-body">

                            {{$detail-> answer_body}}

                    </div>
                </div>
            </div>
@endsection