@extends('layouts.UserNav')
@section('content')

<br>
<hr>
<h1>User Profile</h1>

<br>
<br>
<hr>
<h2 class="">User Id : {{$id}}</h2><br>
<h2 class="">Username : {{$name}}</h2><br>
<h2 class="">Email : {{$email}}</h2><br>
<h2 class="">Member Since : {{$created_at}}</h2>

@endsection
