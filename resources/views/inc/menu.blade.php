<nav class="navbar navbar-expand-sm navbar-dark fixed-top navMenu">
    <div class="container-fluid navMenu">
    <a class="navbar-brand" href="{{ url ('/') }}"> <img class="" src="img/free.png"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="">მთავარი</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">ფრელანსერი</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">სერვისები</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">IT & პროგრამირება</a></li>
                        <li><a class="dropdown-item" href="#">გრაფიკა & დიზაინი</a></li>
                        <li><a class="dropdown-item" href="#">მარკეტინიგი & სოც. მარკეტინგი</a></li>
                        <li><a class="dropdown-item" href="#">ბიზნესი</a></li>
                        <li><a class="dropdown-item" href="#">კონსულტაცია & რჩევები</a></li>
                        <li><a class="dropdown-item" href="#">მართლწერა & თარგმნა</a></li>
                        <li><a class="dropdown-item" href="#">რეკლამა</a></li>
                        <li><a class="dropdown-item" href="#">მუსიკა & აუდიო/ვიდეო</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">ბლოგი</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">კონტაქტი</a>
                </li>
            </ul>
            
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn searchButton" type="button"><i class="fa fa-search"></i> </button>
            </form> 

            <ul class="navbar-nav langImg">
                <li class="nav-item">
                    <a class="nav-link" href=""> <img src="img\geo.png"> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""> <img src="img\eng.png"></a>
                </li>
            </ul>

        </div>
    </div>
</nav>