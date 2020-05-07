@extends('frontend.master')
@section('title','Home page')
@section('stylesheet')
@endsection
@section('content')
<div class="row">
    @include('frontend.sidebar',['something'])
</div>
@endsection

@section('scripts')
@endsection
