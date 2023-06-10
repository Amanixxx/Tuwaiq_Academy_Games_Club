
@extends('layouts.app')
@section('content')
<div class="container" dir="rtl">
    <h1 > قائمة المسجلين في الدورات التدريبية   </h1>
<table class="table table-bordered">
    <thead >
   <tr>
<th>id</th>
<th>CourseID</th>
<th>Name</th>
<th>NationalID</th>
<th>email</th>
<th>country</th>
<th>phone</th>
<th>address</th>
<th>statuse</th>
<th>created_at</th>
<th>updated_at</th>
</tr>
    </thead>
    <tbody>
@foreach($allregs as $allreg)
    <tr>
        <td >{{$allreg['id']}}</td>
        <td>{{$allreg['CourseID']}}</td>
        <td>{{$allreg['Name']}}</td>
        <td>{{$allreg['NationalID']}}</td>
        <td>{{$allreg['email']}}</td>
        <td>{{$allreg['country']}}</td>
        <td>{{$allreg['phone']}}</td>
        <td>{{$allreg['address']}}</td>
        <td>{{$allreg['statuse']}}</td>
        <td>{{$allreg['created_at']}}</td>
        <td>{{$allreg['updated_at']}}</td>
        </tr>


@endforeach
    </tbody>
</table>


</div>
@endsection