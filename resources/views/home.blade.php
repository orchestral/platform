@extends('app')

@section('content')
<h1>Hello, {{ Auth::user()->fullname }}.</h1>
@stop
