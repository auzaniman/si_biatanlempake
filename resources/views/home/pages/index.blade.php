@extends('home.layouts.app')

@section('title')
Biatan Lempake
@endsection

@section('content')
<div class="wrapper">
  @include('home.components.hero')
  @include('home.components.superiority')
  @include('home.components.feature')
</div>
@endsection
