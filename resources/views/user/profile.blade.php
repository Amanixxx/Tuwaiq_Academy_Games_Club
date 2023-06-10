




@extends('layouts.app')
@section('content')
<div class="container" dir="rtl">
    <h1> حسابي  </h1>


    <h4> {{Auth::user()->name}}</h4>
    <a class="btn btn-outline-dark" href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
    <a class="btn btn-outline-dark"href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      Logout
  </a>


  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>

</div>
@endsection