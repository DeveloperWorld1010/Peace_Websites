 <!-- Modern Navigation -->
 <nav class="main-navbar navbar navbar-expand-lg">
     <div class="container">
         <a class="navbar-brand" href="#home">
             <img src="{{ asset('assets/images/logo.jpg') }}" class="navbar-logo" width="80" height="80"
                 alt="">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-auto align-items-center">
                 <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                         href="{{ route('home') }}">Home</a></li>
                 <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                         href="{{ route('about') }}">About</a></li>
                 <li class="nav-item"><a class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}"
                         href="{{ route('team') }}">Team</a></li>
                 <li class="nav-item"><a class="nav-link {{ request()->routeIs('mission-vission') ? 'active' : '' }}"
                         href="{{ route('mission-vission') }}">Mission & Vision</a></li>
                 <li class="nav-item"><a class="nav-link {{ request()->routeIs('blogs') ? 'active' : '' }}"
                         href="{{ route('blogs') }}">Blogs</a></li>
                 <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}"
                         href="{{ route('contact-us') }}">Contact</a></li>
                 <li class="nav-item">
                     <a href="#" class="btn-donate">
                         <i class="fas fa-heart"></i> Donate Now
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
