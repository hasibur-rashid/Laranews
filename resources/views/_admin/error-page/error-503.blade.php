@extends('admin.error-page.master')
@section('title', 'Error 503')
@section('style')
@stop
@section('content')
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>503</h1>
                <h3 class="text-uppercase">This site is getting up in few minutes. </h3>
                <p class="text-muted m-t-30 m-b-30">Please try after some time</p>
                <a href="index.html" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a>
            </div>
            <footer class="footer text-center">© 2017 Adminwrap.</footer>
        </div>
    </section>
@endsection
@section('script')
@stop