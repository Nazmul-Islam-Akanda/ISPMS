<!-- NAVBAR -->
<nav class="navbar navbar-dark navbar-expand-lg navbar-togglable fixed-top">
      <div class="container">
    
        <!-- Navbar toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Navbar collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
    
          <!-- Navbar nav -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " id="scrollDownBtn" >Reach Us</a>
            </li>
          </ul>

          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    
          <!-- Navbar brand -->
          <a class="navbar-brand d-none d-lg-flex mx-lg-auto" href="{{route('website.home')}}">
            Home
          </a>
    
          <!-- Navbar nav -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="{{route('website.user')}}">Admin/User</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{route('website.customer')}}">Customer</a>
            </li>
          </ul>
    
        </div>
      </div>
    </nav>

    <!-- Scrolldown js -->
    <script>
       let btnScrolDown = document.getElementById("scrollDownBtn");
       btnScrolDown.addEventListener("click",function(){
            window.scrollTo({
               top:750,
               left:0,
               behavior: 'smooth'
            });
       });
    </script>

