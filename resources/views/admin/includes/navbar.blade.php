<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src= {{ asset('assets/admin/dist/img/user1-128x128.jpg') }} alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src={{ asset('assets/admin/dist/img/user8-128x128.jpg') }} alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src= {{ asset('assets/admin/dist/img/user3-128x128.jpg') }} alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>

      {{-- auth --}}
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">


          <span></i>{{ Auth::user()->name }}</span>
          <svg class="arrow" width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADACAMAAAB/Pny7AAAAaVBMVEX///8AAADu7u6vr6+2trazs7NsbGxxcXG7u7t6enqqqqr5+flUVFTy8vJ2dnalpaUXFxcfHx8PDw9OTk42NjZnZ2dcXFzU1NTg4ODMzMxiYmJISEjn5+fGxsaNjY0wMDCamppAQECFhYWJVgnoAAAE5ElEQVR4nO2cbXeiMBCFCVatUKqiFl+wXf3/P3Khri0kuWOQkIQ983ykSOeekLl34m6jiGEYhmEYhmEYhmEYhmEYhmEYhmEYhmGY/4ys3O/3ceq7jO6kcVV4mTWuxOfP01p87ZJiZHLSItl9ifXp8xzfLxXv4h/bZUZ9NjTi5fZe+aK4XTpsxA/5dURqsutv4WJzqC+VF9FkMZo3LV20Cr+U1bWdaDPzXaQpM6nweRTthczRd5VmHJXCy+hTuSY+fNdpwoda95/ool4Ub74rfcybpuxNpLkoxC7wLpDKG/2bXC9GzIPu0NlcX3W01V9fxI+f6Yt4oa95G4EfBKwGaRHX6AB+IhaBvmkZ0iIOUQres2rfBNkFUrBfhDhV9cKlETvfhevQ9rFvvqNmAn8coN/o/OVGcrthRGoeaqHUBJZsNBlG1hJFyxzdNAuop2VyTv4hXzbvw2rCyQLI92UtlRq4gKG4J/RKIZbyvXjfhKGG0JKod0/hze8BvGnZOyxvqrt/Am+fec8CKdz7YqL/BFbjfZJWZ+QHWig1G5eVq2xgYVALpcZrFsC+T2ghs4C3fZMa+b6O5Qp90FcWwL6/UvxFBmeBdy9+E8OeLPu+jrDcs5tXquAu4F4NoYXc+79gNa6zAOH7hlooNY4naTwjazOMHqzG6bSGe7LxutTg1OkwC5xsrEtNAFngSd/XkUC/OTrJAinMlrlRT26Ds4CLSRrPyI99X4fPLNDP93X4ywJ9fV8HMUkPqgavS9c+1gT3tCFP1fHZePc+1uQFPnbASRrPyC/9HuzBb7C/9HjHbuC1GSgLYN/vuS41jnOapTyGSKB77qy7ZwZz8urpntyGyAKWO3Rs2fd14Jxm1z0J37e0LjVuJmnCK63slzu4p9lLnThb2uhjTXCysXWqTpyN9/YXGbw2ljo07smW16Vm4Ekan41bX5cavDan/g/Hvv/a/+E6JrBD9z1Vx2fjudU+1iRZo9/Z71Qdn42vLfqLDE42fbIA4fsDaiFPbstnn1k68koV+5P0MDOyGa/wVz+3bwjfH6iPNcFr89SpOj4bH8ArVbDfPDFJ4xnZwbrUYDWXro8adEY2w1qycZxh9Eyg33x06AIZPFNaDdyT2xBZwLhDx158XweRBQzds/Tk+zoI9zRSQ/i+w/1yh5ikDd40nMfc9bEmWM3j8zSck135i0yPSdrpjGzG07Mn9hdvWqjUuaU+Bv8vha937MYUTtJvcJJOYR7LPfSxJhPonigLZHC/rJ36vg6sZqb1mxL7vnct1JmNLgtg3x/uHKYLOAuoarAWn32sCTFJS1kAZ0u/fawJ8Z10q6fhfw8TyrrU4LVpTdLeZ2QzjNzzMg4tRmoC9X0dUzit3bIAPhtfefZ9Hdg9j1VPi+HeD8ErVbCaeYxnsTC1UKlzjn0/wHfsBvYbSED+IoN7GiC4Ptako5qgtXRUE7iWTmqC19JBzQi0VB0a+k2TdbA9uQ12z4aWQL1SBX/jccftdxb9eOieAXulyoMuMIq9/8uZ0nL2XV1XiLUZ2brUQDUj1ALVjFJLpUbTofORaqk6tOKeY/F9HXKyGbMW+cwmxHOYLrS6wGj3y53i56x8VviupT9xcb2sV6drEcTf4ulNmlV4/9M1DMMwDMMwDMMwDMMwDMMwDMMwDMMwDPP/8xf5kTFQ8zp2PwAAAABJRU5ErkJggg=="></path>
          </svg>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <span class="dropdown-item dropdown-header">logout</span>

          <div class="dropdown-divider"></div>
          <div class="card-body"><div class="col-md-12 text-center">
            <form method="POST" action="{{ route('admins.logout') }}">
                @csrf
                <button type="submit" class="">Logout</button>
            </form>
        </div>
          <div class="dropdown-divider"></div>


      </li>


      {{-- end auth --}}
    </ul>
  </nav>
