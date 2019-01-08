@extends('layouts.app')

@section('content')
    <header class="masthead masthead-small text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Build a landing page for your business or project and generate more leads!</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input type="email" class="form-control form-control-lg"
                                       placeholder="Enter your email...">
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-block btn-lg btn-success">Search!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid mt-3">
        <div class="card-columns">
            @foreach ($advertisements as $advertisement)
                <a class="text-dark" href="{{route('showAdvertisement', ['id' => $advertisement->id])}}">
                    <div class="card">
                        <img class="card-img-top "
                             src="{{asset('storage/pictures/'.basename($advertisement->pictures[0]->filename))}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$advertisement->title}}</h5>
                            <p class="card-text">{{$advertisement->description}}</p>
                        </div>
                    </div>
                </a>

            @endforeach
        </div>
    </div>
@endsection
