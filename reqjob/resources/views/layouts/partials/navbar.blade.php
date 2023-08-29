 <!-- Header -->
 <header class="sticky-top bsb-tpl-header-sticky bsb-tpl-header-sticky-animationX">

  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-4 text-white text-decoration-none">
        <svg class="bi me-4" width="20" height="7" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link href="{{URL::asset('css/wave-bsb.css')}}" rel="stylesheet"/>


      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg bg-body-tertiary">

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-3">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                       href="{{ route('home.index') }}">home</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                        href="/reqjob/create" >Requset Job</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                        href="{{ route('view-rec') }}">list of applicants</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                        href="/records/approved">Approved Applications</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                        href="/records/rejected">Rejected Applications</a>
                      </li>
                    </form>
                  </div>
                </div>
      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-warning">Logout</a>
        </div>
      @endauth

      @guest
      <div class="nav-item">
        <a href="{{ route('login.perform') }}" class="btn btn-warning">Login</a>
      </div>

      <div class="nav-item">
        <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
      </div>

      @endguest



    </div>
  </div>
</header>
