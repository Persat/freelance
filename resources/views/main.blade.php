@extends('layouts.appPage')
@section('content')

<div class="clear"></div> <!-- Clear Both -->

<section class="mainPageHeader">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="login float-start">
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
            <div class="col-md-6">
                <div class="social float-end">
                    <a class="face" href=""><i class="fa fa-facebook-square" aria-hidden="true"></i> </a>
                    <a class="insta" href=""><i class="fa fa-instagram" aria-hidden="true"></i> </a>
                </div>

            </div>
        </div>

    </div>
</section>

<div class="clearTwo"></div>

<section class="serviceBlock container-fluid">
    <div class="services pd">
        <div class="container">
            <h3 class="title">სერვისები</h3>
            <div class="clearTwo"></div>
            <div class="row text-center">

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-code"></i></div>
                    <div class="serv">
                        <a href=""> <h5>IT & პროგრამირება</h5> </a>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-paint-brush"></i></div>
                    <div class="serv">
                        <a href=""> <h5>გრაფიკა & დიზაინი</h5> </a>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-share-alt"></i></div>
                    <div class="serv">
                        <a href=""> <h5>მარკეტინგი & სოც. მარკეტინგი</h5> </a>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-briefcase"></i></div>
                    <div class="serv">
                        <a href=""> <h5>ბიზნესი</h5> </a>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-handshake-o"></i></div>
                    <div class="serv">
                        <a href=""> <h5>კონსულტაცია & რჩევები</h5> </a>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-language"></i></div>
                    <div class="serv">
                        <a href=""> <h5>მართლწერა & თარგმნა</h5> </a>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-bullhorn"></i></div>
                    <div class="serv">
                        <a href=""> <h5>რეკლამა</h5> </a>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-music"></i></div>
                    <div class="serv">
                        <a href=""> <h5>მუსიკა & აუდიო/ვიდეო</h5> </a>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="notice">
    <div class="container-fuid">
        <h5>განცხადებები</h5>
    </div>
</section>

<div class="clearTwo"></div>

@endsection