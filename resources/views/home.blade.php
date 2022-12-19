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


              <form class="d-flex">
                  <input class="form-control me-2" type="text" placeholder="სახელის შეცვლა">
                  <button class="btn userChangeNameButton" type="button"><i class="fa fa-check"></i> </button>
              </form> 

              <form class="d-flex">
                  <input class="form-control me-2" type="file" placeholder="ფაილის ატვირთვა">
                  <button class="btn userImgUploadButton" type="button"><i class="fa fa-upload"></i> </button>
              </form> 
{{-- 
              <form action="" enctype="multipart/form-data" method="post">
                  <label class="form-label" for="customFile">ატვირთეთ პროფილის სურათი</label>
                  <input type="file" class="form-control" id="#">
                  <div class="d-flex justify-content-center mb-2 mt-3">
                    <button class="btn userImgUploadButton">ატვირთვა</button>
                  </div>
              </form>
--}}

            <hr>
            
            <form class="col-md-12">
              <div class="d-flex justify-content-center mt-3">
                <button 
                      class="btn btn-danger userAccountDelete col-md-12"
                      data-bs-toggle="modal" 
                      data-bs-target="#accountDeleteModal"
                      type="button">

                      ექაუნთის გაუქმება
                
                </button>
              </div>
            </form> 

            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
                <p style="padding-top: 5%; padding-left: 5%; margin-bottom: 0px; text-align: center;">უნარები</p>
                
                <div class="col-md-12 input-group" style="padding: 2%">
                    <button
                          class="btn mt-3 userPlusStyle col-md-12"
                          data-bs-toggle="modal" 
                          data-bs-target="#skillsModal"
                          type="button">

                          დაამატე
                          
                    </button> 
                       
                </div>
              <form action="" enctype="multipart/form-data" method="post">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">PhP </p>
                  <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">Python</p>
                  <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">JavaScript</p>
                  <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">C++</p>
                  <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">.Net</p>
                  <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">C#</p>
                  <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">React JS</p>
                  <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <p class="mb-0">Angular</p>
                  <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                </li>
              </ul>
              </form>

            </div>
          </div>
        </div>
        
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              
              <div class="row">
                <p class="personalPageTitle">
                  
                  პირადი მონაცემები

                   <button class="btn addPagePersonalInfo float-end"                        
                      data-bs-toggle="modal" 
                      data-bs-target="#personalModal">
                   <i class="fa fa-plus" aria-hidden="true"></i>
                   </button>
                   
                   <button class="btn editPagePersonalInfo float-start"
                      data-bs-toggle="modal" 
                      data-bs-target="#EditPersonalModal">
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                   </button>   
                </p>
                <hr>
                <div class="col-sm-3 mt-3">
                  <p class="mb-0">სახელი / გვარი</p>
                </div>
                <div class="col-sm-9 mt-3">
                  <p class="text-muted mb-0">შეავსეთ სახელი / გვარი</p>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-3 mt-3">
                  <p class="mb-0">მობ. ნომერი</p>
                </div>
                <div class="col-sm-9 mt-3">
                  <p class="text-muted mb-0">შეიყვანეთ თქვენი ნომერი</p>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-3 mt-3">
                  <p class="mb-0">მისამართი</p>
                </div>
                <div class="col-sm-9 mt-3">
                  <p class="text-muted mb-0">შეავსეთ მისამართი</p>
                </div>
              </div>
              
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="userPageStudy">
                      <button 
                          data-bs-toggle="modal" 
                          data-bs-target="#eduModal" 
                          class="btn btn-outline userPlusStyle float-start" 
                          type="button">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </button> 

                    განათლება

                    <button class="btn btn-outline userEditStyle float-end"
                      data-bs-toggle="modal" 
                      data-bs-target="#EditEduModal">
                      <i class="fa fa fa-pencil-square-o float-end" aria-hidden="true"></i>
                    </button>
                  </p>
  
                  <hr>
                  
                  <div class="educationH5Titles">
                    <p class="mb-1">სამხატვრო აკადემია</p>
                    <p class="mt-4 mb-1">3D დიზაინის კურსები</p>
                    <p class="mt-4 mb-1">მაგისტრი</p>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="userPageJob">
                    
                    სამუშაო გამოცდილება

                    <button
                        data-bs-toggle="modal" 
                        data-bs-target="#jobModal" 
                        class="btn btn-outline userEditStyle float-end" 
                        type="button">
                      <i class="fa fa-pencil-square-o float-end" aria-hidden="true"></i>
                    </button>

                    <button
                        data-bs-toggle="modal" 
                        data-bs-target="#jobEditModal" 
                        class="btn btn-outline userPlusStyle float-start" 
                        type="button">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                  
                  <hr>
                  
                  <div class="jobH5Titles">
                    <p class="mb-1">ავეჯის სალონი "მოდი გააკეთე"</p>
                    <p class="mt-4 mb-1">სადიზაინერო სტუდია "შექმენი"</p>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card mb-4 mt-3">
                <div class="card-body">
                    {{-- <form action="" enctype="multipart/form-data" method="post"> --}}
                        <textarea class="form-control" rows="6" placeholder="თქვენს შესახებ..."></textarea> 
                        <button class="btn mt-3 col-md-2 userTextAreaUploadButton">ატვირთვა</button>
                        <button class="btn mt-3 col-md-2 float-end userDescriptionButton"
                                data-bs-toggle="modal" 
                                data-bs-target="#aboutMeModal">რედაქტირება</button>
                    {{-- </form> --}}
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

@endsection
