@extends('layouts.app')
@section('content')



<div class="container"  dir="rtl" >
{{-- <div class="container">
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted" >          فاتورتك                        </span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0" >{{$course->CourseName}}</h6>

            </div>
            <span class="text-muted">${{$course->price}}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>${{$course->price}}</strong>
          </li>
        </ul>


      </div> --}}
      <div class="col-md-12 order-md-1">
        <h4 class="alert alert-secondary">التسجيل في {{$course->CourseName}}</h4>
        <h5 class="alert alert-danger">وذلك في تاريخ  <strong>  {{$course->Date}} </strong></h5>



{{-- form --}}


<div class="container">
  <form action="{{url('courseCheckout')}}" method="POST">
    @csrf

<input type="hidden" id="course_id" name="course_id" value={{$course->id}}>
{{-- first row --}}
    <div class="row">
      <div class="col">
       <label class="text-dark p-2 " for="fullname" >الاسم الثلاثي</label>
       <input type="text" id="fullname" name="fullname" required class="form-control">
      </div>
      <div class="col">
        <label class="text-dark p-2  " for="phone">رقم الهوية الوطنية  </label>
        <input type="phone" id="phone" name="NationalID" required class="form-control" >
       </div>
       <div class="col">
        <label class="text-dark p-2  " for="kkuID"> الرقم الجامعي  </label>
        <input type="kkuID" id="kkuID" name="kkuID" class="form-control">
       </div>
    </div>

{{-- second row --}}
       <div  class="row">

        <div class="col">
          <label class="text-dark p-2  " for="phone">البريد الالكتروني  </label>
          <input type="email" id="email" name="email" required class="form-control">
         </div>




     <div class="col">
       <label class="text-dark p-2  " for="phone">رقم الهاتف </label>
       <input type="phone" id="phone" name="phone" required class="form-control" >
      </div>

       </div>
      {{-- third  row --}}
<div class="row">
      <div class="col">
       <label class="text-dark p-2  " for="address">العنوان  </label>
       <input type="address" id="address" name="address" class="form-control">
      </div>
      <div class="col">
        <label for="country" class="text-dark p-2">اختر المدينة</label>
        <select id="country" name="country" class="form-control">
          <option>الرياض</option>
          <option>جدة</option>
          <option>خميس مشيط </option>
          <option>أبها </option>
          <option>مكة المكرمة</option>
          <option>الدمام</option>
        </select>
       </div>
    </div>
      </div>
    <div class="row  m-5 text-center">
      <div class="col">
        <button type="submit" class="btn btn-success">إتمام عملية التسجيل </button>
      </div>
    </div>
  </form>
</div>

{{-- end form --}}

      </div>
    </div>


  </div>

</div>
<script>
Swal(
  "Good job!","{!!Session::get('success')!!}","success",{button:"ok"}
);
</script>
 @endsection