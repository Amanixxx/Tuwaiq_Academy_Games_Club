@extends('layouts.app')
@section('content')
<div class="container " dir="rtl">

    <h1> الدورات والبطولات </h1>
<br>
    <div class="container " >
@foreach ($courses as $course)


<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src={{$course['image']}} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$course['CourseName']}}</h5>
          <p class="card-text">{{$course['description']}}</p>

          <h5>{{$course['Date']}}</h5>

          <a class="btn btn-primary" href="/courseCheckout/{{$course->id}}" role="button">التسجيل </a>
          <br>
        </div>
      </div>
    </div>
  </div>

<br>

@endforeach

</div>
</div>

@endsection