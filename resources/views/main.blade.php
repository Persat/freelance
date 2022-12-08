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
                    <a href="{{ url('/home') }}" class="btn aHome">კაბინეტი</a>
   
                        @else
                        <a class="btn aLog" href="{{ route('login') }}">შესვლა</a>
                        @endif
                        @endauth

                        <a class="btn aReg" href="{{ route('signup') }}">რეგისტრაცია</a>

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

<section class="serviceBlock container-fluid">
    <div class="services pd">
        <div class="container">
            <h3 class="title">სერვისები</h3>
            <div class="clearTwo"></div>
            <div class="row text-center">

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-code"></i></div>
                    <div class="serv">
                        <h5><a href="">  IT & პროგრამირება </a></h5>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-paint-brush"></i></div>
                    <div class="serv">
                        <h5><a href=""> გრაფიკა & დიზაინი </a></h5>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-share-alt"></i></div>
                    <div class="serv">
                        <h5><a href=""> მარკეტინგი & სოც. მარკეტინგი</a></h5>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-briefcase"></i></div>
                    <div class="serv">
                        <h5><a href=""> ბიზნესი</a></h5>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-handshake-o"></i></div>
                    <div class="serv">
                        <h5><a href=""> კონსულტაცია & რჩევები </a></h5>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-language"></i></div>
                    <div class="serv">
                        <h5><a href=""> მართლწერა & თარგმნა </a></h5>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-bullhorn"></i></div>
                    <div class="serv">
                        <h5><a href=""> რეკლამა </a></h5>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="square"><i class="fa fa-music"></i></div>
                    <div class="serv">
                        <h5><a href=""> მუსიკა & აუდიო/ვიდეო </a></h5>
                        <p>ლორემ იპსუმ დოლორ სიტ ამეტ კონსექტეტურ ადიპიზიცინგ ელიტ</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="container-fluid noticeBlock">

        <div class="noticeTitle">
            <h3 class="title">განცხადებები</h3>
        </div>

        <div class="clearTwo"></div>
        <div class="container">

            <div class="row">
    
                <div class="col-md-3 cardBlock">
                    <div class="card"">
                        <img src="img\webdev.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ვებ პროგრამირება</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body buttonA">
                            <a href="#" class="btn btn-warning">სრულად</a>
                        </div>
                    </div>      
                </div>
    
                <div class="col-md-3 cardBlock">
                    <div class="card">
                        <img src="img\design.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">გრაფიკა და დიზაინი</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body buttonA">
                            <a href="#" class="btn btn-warning">სრულად</a>
                        </div>
                    </div>      
                </div>
    
                <div class="col-md-3 cardBlock">
                    <div class="card">
                        <img src="img\socmarketing.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">მარკეტინგი & სოც. მარკეტინგი</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body buttonA">
                            <a href="#" class="btn btn-warning">სრულად</a>
                        </div>
                    </div>      
                </div>
    
                <div class="col-md-3 cardBlock">
                    <div class="card">
                        <img src="img\business.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ბიზნესი</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body buttonA">
                            <a href="#" class="btn btn-warning">სრულად</a>
                        </div>
                    </div>      
                </div>
    
                <div class="col-md-3 cardBlock">
                    <div class="card">
                        <img src="img\consultation.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">კონსულტაცია & რჩევები</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body buttonA">
                            <a href="#" class="btn btn-warning">სრულად</a>
                        </div>
                    </div>      
                </div>
    
                <div class="col-md-3 cardBlock">
                    <div class="card">
                        <img src="img\translate.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">მართლწერა & თარგმნა</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body buttonA">
                            <a href="#" class="btn btn-warning">სრულად</a>
                        </div>
                    </div>      
                </div>
    
                <div class="col-md-3 cardBlock">
                    <div class="card">
                        <img src="img\advert.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">რეკლამა</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body buttonA">
                            <a href="#" class="btn btn-warning">სრულად</a>
                        </div>
                    </div>      
                </div>
    
                <div class="col-md-3 cardBlock">
                    <div class="card">
                        <img src="img\music.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">მუსიკა & აუდიო/ვიდეო</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body buttonA">
                            <a href="#" class="btn btn-warning">სრულად</a>
                        </div>
                    </div>      
                </div>
    
            </div> 
        </div>

        <div class="row">
            <div class="col-md-12 moreNotice">
                <button class="btn">მეტი შემოთავაზება</button>
            </div>
        </div>

</section>

@endsection