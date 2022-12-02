@extends('layouts.appPage')
@section('content')

<div class="clear"></div>
<section class="mainPage">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="social">
                    <a href="">FACEBOOK</a>
                    <a href="">INSTAGRAM</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/home') }}" class="">Home</a>
   
                        @else
                        <a class="btn aLog" href="{{ route('login') }}">შესვლა</a>


                        @if (Route::has('register'))
                        <a class="btn aReg" href="{{ route('register') }}">რეგისტრაცია</a>
                        @endif
                        @endauth

                    @endif
                </div>
            </div>
        </div>
    
    

</div>
    
</section>

@endsection