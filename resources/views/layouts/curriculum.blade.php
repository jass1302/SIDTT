@extends('layouts.principal')
@section('content')
<head>
  <title>SIDTT - Registro</title>
</head>
 <div class="contec">

  <div class="box">
    @yield('contenidos')
  </div>
  @include('forms.curriculo')
</div>
  @stop