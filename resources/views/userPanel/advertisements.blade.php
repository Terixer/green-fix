@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-4">
            <h5 class="card-header text-center">All advertisement</h5>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Active</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($advertisements as $advertisement)
                        <tr class="@if(!$advertisement->is_active) bg-dark text-white @endif">
                            <th>{{$advertisement->id}}</th>
                            <td>{{$advertisement->title}}</td>
                            <td>{{$advertisement->phone}}</td>
                            <td>{{$advertisement->email}}</td>
                            <td>
                                @if ($advertisement->is_active)
                                    True
                                @else
                                    False
                                @endif
                            </td>
                            <td>
                                <div class="d-flex flex-row">
                                    <a class="btn btn-warning display-inline mx-1" data-toggle="tooltip" data-placement="bottom" title="View" href="{{route('showAdvertisement', ['id' => $advertisement->id])}}"><i class="far fa-eye"></i></a>

                                    @if($advertisement->is_active)
                                        <form action="{{ route('deactiveAdvertisement') }}" method="POST">
                                            <input type="hidden" value="{{$advertisement->id}}" name="id">
                                            <button data-toggle="tooltip" data-placement="bottom" title="Deactive" class="btn btn-danger" type="submit">
                                                <i class="fas fa-trash-alt"></i></button>
                                            @csrf
                                        </form>
                                    @else
                                        <form action="{{ route('activeAdvertisement') }}" method="POST">
                                            <input type="hidden" value="{{$advertisement->id}}" name="id">
                                            <button data-toggle="tooltip" data-placement="bottom" title="Active" class="btn btn-success" type="submit">
                                                <i class="fas fa-check"></i></button>
                                            @csrf
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
