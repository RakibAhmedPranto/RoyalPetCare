<header class="header black-bg">
  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>

  <a href="index.html" class="logo"> <img src="{{ asset('backend/img/logo.png') }}" height="28px" alt=""></a>


  <div class="top-menu">
    <ul class="nav pull-right top-menu">


              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle user_logout_button" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right userbutton" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>

      </ul>




  </div>
</header>
