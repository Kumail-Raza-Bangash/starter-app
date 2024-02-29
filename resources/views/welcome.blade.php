
@extends("layout")
@section("content")

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      @foreach($posts as $post)
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{asset($post -> image)}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
            </img>

            <div class="card-body">
              <p class="card-text">{{$post -> title}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/detail/{{$post -> id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                  <!--button type="button" class="btn btn-sm btn-outline-secondary">Edit</button-->
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      @endforeach


      </div>
    </div>
  </div>
  @endsection
