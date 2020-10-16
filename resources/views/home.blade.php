@extends('layout/main')
@section('mainc')
<button> <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}</a></button>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endsection

