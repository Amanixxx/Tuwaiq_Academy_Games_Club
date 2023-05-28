
@extends('layouts.app')
@section('content')

<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<link rel ="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel ="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

<div class="container" dir="rtl">




    <h1> نموذج أضافة دورة تدريبية</h1>
              <br> <br>

 <form action="{{url('/addCourse')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <br>

{{-- upload course title--}}
    <div class="mb-3">

    <label for="CourseName" class="form-label">عنوان الدورة </label>
    <input type="text"  class="form-control" name="CourseName">

   <br>
{{-- upload description --}}
    <label for="description" class="form-label">وصف الدورة التدريبية </label>
    <textarea type="text"  class="form-control" id="FormControlTextarea1" name="description" rows="3"> </textarea>
    <br>

{{-- upload image --}}
        <br>
        <div class="mb-3">
        <label for="image" class="form-label">الصورة الرئيسية للدورة التدريبية </label>
        <input type="text"  class="form-control" name="image">
        <br>

{{-- date picker --}}
<div class="mb-3">
<label for="date" class="form-label"> التاريخ</label>
<input type="date" id="date" class="form-control" name="date">


</div>
<br>


<div class="col-md-12 text-center">
    <button type="button" class="btn btn-warning">إلغاء</button>
    <button type="submit" class="btn btn-primary">أضافة</button>
</div>

</div>
  <br>
</form>
</div>

@endsection