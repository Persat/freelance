@extends('layouts.app')

@section('content')
{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>

                <div class="userHomeCard card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    გამარჯობა: {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div> 
--}}

{{--
<div class="container">
    <section class="userHomeFeelPage">
            <div class="container mt-3">
                <h2>შეავსეთ პროფილი</h2>
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="row">
                        

                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="შეიყვანეთ სახელი" name="name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="შეიყვანეთ გვარი" name="lastname">
                        </div>

                        <div class="col-md-12">
                            <input type="file" class="form-control mt-3" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <input type="text" class="form-control mt-3" placeholder="თქვენი პროფესია">
                            <textarea class="form-control mt-3" rows="3" placeholder="აღწერეთ თქვენი პროფესია..."></textarea>
                        </div>

                        <div class="col-md-12 input-group">
                            <input type="text" class="form-control mt-3" placeholder="უნარები" aria-label="Recipient's username with two button addons">
                            <button class="btn btn-outline-secondary mt-3" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>   
                        </div>
                        <p class="mt-3">dkfjvb</p>

                        
                    </div>
                    <button class="btn btn-warning mt-3" type="submit" id="submit">გაგზავნა</button>
                    
                </form>
            </div>
    </section>
</div> 
--}}

<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item active" aria-current="page">გამარჯობა: {{ Auth::user()->name }}</li>
            </ol>
          </nav>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="img/userphoto/pakistan.png" alt="avatar"
                   class="img-fluid" style="width: 150px;">
              <h5 class="my-3" style="color: #144F89;">{{ Auth::user()->name }}</h5>
              <p class="text-muted mb-1">პროფესია</p>
              <p class="text-muted mb-4">მისამართი</p>

              <form action="" enctype="multipart/form-data" method="post">
                    <label class="form-label" for="customFile">ატვირთეთ პროფილის სურათი</label>
                    <input type="file" class="form-control" id="#">
              <div class="d-flex justify-content-center mb-2 mt-3">
                <button type="button" class="btn btn-success">ატვირთვა</button>
              </div>
              
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
                <p style="padding-top: 5%; padding-left: 5%; margin-bottom: 0px ;">უნარები</p>
                <div class="col-md-12 input-group" style="padding: 2%">
                    <input type="text" class="form-control mt-3" aria-label="Recipient's username with two button addons">
                    <button class="btn btn-outline-primary mt-3" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>   
                </div>
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">PhP</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">Python</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">JavaScript</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">C++</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">.Net</p>
                </li>
              </ul>
            </form>

            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <form action="" enctype="multipart/form-data" method="post" class="userPagePersonalEdit">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">სახელი / გვარი</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">შეავსეთ სახელი / გვარი<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">მობ. ნომერი</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">შეიყვანეთ თქვენი ნომერი<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">მისამართი</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">შეავსეთ მისამართი<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                </div>
              </div>
              </form>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p>განათლება</p>
                  
                  <form action="" enctype="multipart/form-data" method="post">
                    <div class="col-md-12 input-group">
                        <input type="text" class="form-control mt-3" placeholder="დაამატეთ...">
                        <button class="btn btn-outline-primary mt-3" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>   
                    </div>
                  </form>

                  <hr>
                  
                  <div class="userPageStudy">
                    <p class="mb-1">Web Design<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                    <p class="mt-4 mb-1">Website Markup<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                    <p class="mt-4 mb-1">One Page<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                    <p class="mt-4 mb-1">Mobile Template<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                    <p class="mt-4 mb-1">Backend API<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p>სამუშაო გამოცდილება</p>

                  <form action="" enctype="multipart/form-data" method="post">
                    <div class="col-md-12 input-group">
                        <input type="text" class="form-control mt-3" placeholder="დაამატეთ...">
                        <button class="btn btn-outline-primary mt-3" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>   
                    </div>
                  </form>
                  
                  <hr>
                  
                  <div class="userPageJob">
                    <p class="mb-1">Web Design<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                    <p class="mt-4 mb-1">Website Markup<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                    <p class="mt-4 mb-1">One Page<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                    <p class="mt-4 mb-1">Mobile Template<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                    <p class="mt-4 mb-1">Backend API<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4 mt-3">
                <div class="card-body">
                    <form action="" enctype="multipart/form-data" method="post">
                        <textarea class="form-control" rows="6" placeholder="აღწერეთ თქვენი პროფესია..."></textarea> 
                    </form>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
