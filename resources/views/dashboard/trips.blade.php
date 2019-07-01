@include('inc.headersidebar-db')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Past Trips</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
      </div>

@foreach($trips as $value)
<div class="container-card-trip" style="display: inline-block; padding-left:3%;" >
<div class="card" style="width: 18rem;">
        <img src="{{asset($value->photo)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
        <p class="card-text">{{$value->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Begin date: {{$value->begin_date}}</li>
        <li class="list-group-item">End date: {{$value->end_date}}</li>
        @foreach($users as $usersVal)
        @if($usersVal->id == $value->created_by)
          <li class="list-group-item">Created by: {{$usersVal->name}}</li>
        </ul>
        @endif

        
        <div class="card-body">
            <a href="#" class="btn btn-primary">More details</a>
        </div>
      </div>
    </div>
      @endforeach
      @endforeach
    </main>
    @include('inc.functions-dashb')


