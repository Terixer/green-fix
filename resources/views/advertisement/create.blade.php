@extends('layouts.app')

@section('content')


    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Advertisement</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="logout-form" action="{{ route('storeAdvertisement') }}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                       placeholder="Write title here" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" name="description"
                                          placeholder="Write description here" rows="3">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                       placeholder="Write phone here" value="{{ old('phone') }}">
                                <small>The phone will be displayed in the advertisement</small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Write email here" value="{{ old('email') }}">
                                <small>The email will be displayed in the advertisement</small>
                            </div>
                            <div class="form-group">
                                <label for="pictures">Pictures</label>
                                <input multiple="multiple" type="file" name="pictures[]" class="form-control-file" id="pictures" multiple>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection