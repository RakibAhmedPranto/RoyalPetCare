<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{ asset('backend/img/admin.jpg') }}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a class="active" href="{{ route('adminIndex') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Pages</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('adminLandingpage') }}">Landing page</a></li>
              <li><a href="{{ route('adminAbout') }}">About Us</a></li>
              <li><a href="lock_screen.html">Food Menu</a></li>
              <li><a href="profile.html">Clients</a></li>
              <li><a href="invoice.html">Blogs</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="">Contact</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Menu</span>
              </a>
            <ul class="sub">
              <li><a href="">Add Menu</a></li>
              <li><a href="">Add Sub Menu</a></li>
              <li><a href="">Delete Menu</a></li>
            </ul>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="#">Form Components</a></li>
              <li><a href="#">Advanced Components</a></li>
              <li><a href="#">Form Validation</a></li>
              <li><a href="#">Contact Form</a></li>
            </ul>
          </li>
          </li>

          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="features.html">
              <i class="fa fa-bar-chart">
                <span>Features</span>
              </i>
            </a>
            <ul class="sub">
              <li><a href="{{ route('adminAddnewFeatures') }}">Add New Feature</a></li>
              <li><a href="featureslis.html">Feature List</a></li>
              <li><a href="archive.html">Archive</a></li>
            </ul>
          </li>


          <li class="sub-menu">
            <a href="features.html">
              <i class="fa fa-bar-chart">
                <span>Blog</span>
              </i>
            </a>
            <ul class="sub">
              <li><a href="{{ route('adminCreateBlog') }}">Create Blog</a></li>
              <li><a href="{{ route('adminManageBlog') }}">Manage Blog</a></li>
              <li><a href="archive.html">Archive</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
