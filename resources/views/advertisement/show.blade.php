@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="jumbotron text-center">
                    <img class="img-fluid"
                         src="{{asset('storage/pictures/'.basename($advertisement->pictures[0]->filename))}}"/>
                    <h1 class="display-4 pt-5 text-uppercase">{{$advertisement->title}}</h1>
                    <p class="lead">{{$advertisement->description}}</p>
                    <hr class="my-4">
                    <div class="align-content-center">
                        @foreach ($advertisement->pictures as $picture)
                            <a target="__blank" href="{{asset('storage/pictures/'.basename($picture->filename))}}">
                                <img class="img-fluid" style="width:18rem;" src="{{asset('storage/pictures/'.basename($picture->filename))}}"/>
                            </a>
                        @endforeach
                    </div>


                </div>
            </div>
            <div class="col-3 pt-3">
                <div class="position-fixed">
                    <h3>{{$user->name}}</h3>
                    <hr class="my-4">
                    <h5>Phone: {{$advertisement->phone}}</h5>
                    <h5>Email: {{$advertisement->email}}</h5>
                </div>
            </div>
        </div>
    </div>


@endsection
