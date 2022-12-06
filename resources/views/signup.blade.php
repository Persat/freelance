@extends('layouts.appSignupPage')
@section('content')

<section class="sign_up_page">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 signUpLogo">
                <a href="{{ url ('/') }}"> <img src="img/free.png"> </a>
            </div>
        </div>
    </div>

    <div class="clearSignUp"></div>

    <div class="container">
        <div class="row signUpBigCard">
            
            <h4 class="signupTitle">შემოგვიერთდი, როგორც დამკვეთი ან ფრილანსერი</h4>

            <div class="col-md-1">

            </div>

            <div class="col-md-5 col client">
                <div class="card">
                    <i class="fa fa-user clientChoose"></i>
                    <div class="card-body">
                        <h5 class="card-title">დამკვეთი</h5>
                        <p class="card-text">დარეგისტრირდით, როგორც დამკვეთი</p>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn">რეგისტრაცია</a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-5 col freelancer">
                <div class="card">
                    <i class="fa fa-rocket freelanceChoose"></i>
                    <div class="card-body">
                        <h5 class="card-title">ფრილანსერი</h5>
                        <p class="card-text">დარეგისტრირდით, როგორც ფრილანსერი</p>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn">რეგისტრაცია</a>
                        @endif

                    </div>
                </div>
            </div>

            <div class="col-md-1">

            </div>


            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" class="">Home</a>

            @else
            <p class="authorization">უკვე გააქვთ ექუნთი? <a href="{{ route('login') }}">ავტორიზაცია</a> </p>
            @endif
            @endauth

        </div>
    </div>
</section>
@endsection