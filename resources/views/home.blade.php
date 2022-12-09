@extends('layouts.app')
@extends('layouts.appModals')

@section('content')

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
                    <button class="btn userImgUploadButton">ატვირთვა</button>
                  </div>
              </form>
              
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
                <p style="padding-top: 5%; padding-left: 5%; margin-bottom: 0px ;">უნარები</p>
                
                <form action="" enctype="multipart/form-data" method="post">
                <div class="col-md-12 input-group" style="padding: 2%">
                    <input type="text" class="form-control mt-3">
                    <button 
                          class="btn btn-outline mt-3 userPlusStyle" 
                          data-bs-toggle="modal" 
                          data-bs-target="#skillsModal"
                          type="button">
                      <i class="fa fa-plus" aria-hidden="true"></i></button>   
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
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">C#</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">React JS</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">Angular</p>
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
                <p class="">პირადი მონაცემები<a                           data-bs-toggle="modal" 
                   data-bs-target="#personalModal" 
                   href="">
                   <i class="fa fa-plus float-end" aria-hidden="true"></i></a></p>
                <hr>
                <div class="col-sm-3">
                  <p class="mb-0">სახელი / გვარი</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">შეავსეთ სახელი / გვარი</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">მობ. ნომერი</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">შეიყვანეთ თქვენი ნომერი</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">მისამართი</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">შეავსეთ მისამართი</p>
                </div>
              </div>
              </form>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="userPageStudy">განათლება<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>
                  
                  <form action="" enctype="multipart/form-data" method="post">
                    <div class="col-md-12 input-group">
                        <input type="text" class="form-control mt-3" placeholder="დაამატეთ...">
                        <button 
                            data-bs-toggle="modal" 
                            data-bs-target="#eduModal" 
                            class="btn btn-outline mt-3 userPlusStyle" 
                            type="button">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>   
                    </div>
                  </form>

                  <hr>
                  
                  <p class="mb-1">სამხატვრო აკადემია</p>
                  <p class="mt-4 mb-1">3D დიზაინის კურსები</p>
                  <p class="mt-4 mb-1">მაგისტრი</p>

                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="userPageJob">სამუშაო გამოცდილება<a href=""><i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i></a></p>

                  <form action="" enctype="multipart/form-data" method="post">
                    <div class="col-md-12 input-group">
                        <input type="text" class="form-control mt-3" placeholder="დაამატეთ...">
                        <button
                            data-bs-toggle="modal" 
                            data-bs-target="#jobModal" 
                            class="btn btn-outline mt-3 userPlusStyle" 
                            type="button">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>   
                    </div>
                  </form>
                  
                  <hr>
                  
                  <p class="mb-1">ავეჯის სალონი "მოდი გააკეთე"</p>
                  <p class="mt-4 mb-1">სადიზაინერო სტუდია "შექმენი"</p>

                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4 mt-3">
                <div class="card-body">
                    <form action="" enctype="multipart/form-data" method="post">
                        <textarea class="form-control" rows="6" placeholder="თქვენს შესახებ..."></textarea> 
                        <button class="btn mt-3 col-md-2 userUploadButton">ატვირთვა</button>
                        <button class="btn mt-3 col-md-2 float-end userDescriptionButton">რედაქტირება</button>
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
