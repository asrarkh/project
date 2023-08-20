
<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <link href="assets/css/styles.css" rel="stylesheet"/>
      <body class="antialiased">
      <button type="button" class="btn btn-primary btn-sm">
      <div class="text-end">
        <a href="{{ route('home.index') }}">home</a>
        <button type="button" class="btn btn-primary btn-sm">

      <div class="text-end">
          <a href="{{ route('view-rec') }}">list of applicants</a>
          <button type="button" class="btn btn-primary btn-sm">
        
      <div class="text-end">
          <a href="/records/approved">Approved Applications</a>
          <button type="button">
        <div class="text-end">
          <a href="/records/rejected">Rejected Applications</a>
          <button type="button" class="btn btn-primary btn-sm">
 
   
      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest

     

    </div>
  </div>
</header>