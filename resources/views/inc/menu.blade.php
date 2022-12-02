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
                    <a class="nav-link" href="">სტუდია</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">სერვისები</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">სერვისი 1</a></li>
                        <li><a class="dropdown-item" href="#">სერვისი 2</a></li>
                        <li><a class="dropdown-item" href="#">სერვისი 3</a></li>
                        <li><a class="dropdown-item" href="#">სერვისი 4</a></li>
                        <li><a class="dropdown-item" href="#">სერვისი 5</a></li>
                        <li><a class="dropdown-item" href="#">სერვისი 6</a></li>
                        <li><a class="dropdown-item" href="#">სერვისი 7</a></li>
                        <li><a class="dropdown-item" href="#">სერვისი 8</a></li>
                        <li><a class="dropdown-item" href="#">სერვისი 9</a></li>
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

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Geo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Eng</a>
                </li>
            </ul>

        </div>
    </div>
</nav>