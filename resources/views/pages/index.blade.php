@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<style>
        p{color: #e6ffee;}
</style>
</head>
<body>
@section('content')
<div class="jumbotron text-center" style= "background: #198cb3;">
        <h1> {{$title}} </h1>
        <p> Hope you are feeling earthly and heavenly ;) </p>
        <p>Leave your thoughts and wishes regarding anything of our planet!</p>
        <p>If you are not a member yet, then what are you waiting for? you are already brave enough to drop by!!<br>
        Create your account right now and show your power of art and creativity ^_^</p>
        <p>And to all our precious members..<br>
        Don't stop contributing ...if nothing, you are making this world a better place..</p>
</div>
@endsection
</body>
</html>
