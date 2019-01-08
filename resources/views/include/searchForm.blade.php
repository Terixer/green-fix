@auth
    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form action="{{ route('advertisements') }}" method="GET">
            <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                    <input type="text" name="search" class="form-control form-control-lg"
                           placeholder="What do you want to search?" value="{{old('search')}}">
                </div>
                <div class="col-12 col-md-3">
                    <button type="submit" class="btn btn-block btn-lg btn-success">Search!</button>
                </div>
            </div>
        </form>
    </div>
@endauth