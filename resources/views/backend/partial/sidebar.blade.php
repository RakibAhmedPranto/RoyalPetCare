<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{ asset('backend/img/admin.jpg') }}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a class="active" href="{{ route('adminIndex') }}">

            Dashboard
              </a>
          </li>


          <li><a href="">Landing page</a>
            <ul class="sub">
              <li><a href="">Slider Section</a>
                <ul class="sub">
                    <li><a href="{{ route('adminCreateSlider') }}">Create New Slider</a></li>
                  <li><a href="{{ route('adminManageSlider') }}">Manage Slider</a></li>

                </ul>


              </li>

              <li><a href="">Appointment Section</a>
                <ul class="sub">
                    <li><a href="{{ route('adminEditSecA') }}">Left Side Content</a></li>
                  <li><a href="{{ route('adminAppointmentHistory') }}">Appointment History</a></li>
                  <li><a href="{{ route('adminManageAppointment') }}">Pending Appointments</a></li>
                </ul>
              </li>
              <li><a href="{{ route('adminEditPetcounter') }}">Counter Section</a></li>
              <li><a href="{{ route('adminHomeService') }}">Home Service Section</a></li>
              <li><a href="#">Review Section</a>
                <ul class="sub">
                  <li><a href="{{ route('adminEditSecC') }}">Manage Content</a></li>
                  <li><a href="{{ route('adminCreateReview') }}">Create New Review</a></li>
                  <li><a href="{{ route('adminManageReview') }}">Manage All Reviews</a></li>
                </ul>

              </li>

            </ul>

          </li>
          <li><a href="#">Services</a>
            <ul class="sub">
              <li><a href="{{ route('adminCreateService') }}">Create New Service</a></li>
              <li><a href="{{ route('adminManageService') }}">Manage Services</a></li>
              <li><a href="{{ route('adminServiceBanner') }}">Manage Services Banner</a></li>
            </ul>
          </li>
          <li><a href="profile.html">Contact</a>
            <ul class="sub">
              <li><a href="{{ route('adminEditContact') }}">Edit Contact Information</a></li>
              <li><a href="{{ route('adminManageFeedback') }}">Customer Feedback</a></li>
              <li><a href="{{ route('adminManageBanner') }}">Manage Contact Banner</a></li>
            </ul>
          </li>

          <li><a href="profile.html">About Us</a>
            <ul class="sub">
              <li><a href="{{ route('adminEditAboutUs') }}">Manage About Us Page</a></li>
              <li><a href="{{ route('adminAboutUsBanner') }}">Manage About Us Banner</a></li>
            </ul>
          </li>

          <li><a href="#">Blogs</a>
            <ul class="sub">
              <li><a href="{{ route('adminCreateBlog') }}">Create Blog</a></li>
              <li><a href="{{ route('adminManageBlog') }}">Manage Blog</a></li>
              <li><a href="{{ route('adminCreateBlogCategory') }}">Create Blog Category</a></li>
              <li><a href="{{ route('adminBlogBanner') }}">Manage Blog Page Banner</a></li>
            </ul>
          </li>
          <li><a href="faq.html">Team Management</a>
            <ul class="sub">
              <li><a href="{{ route('adminCreateTeam') }}">Add New Team Member</a></li>
              <li><a href="{{ route('adminManageTeam') }}">Manage Team Member</a></li>
            </ul>

          </li>


          <li><a href="{{ route('adminMailingList') }}">Mailing List</a></li>

          <li><a href="{{ route('register') }}">Add New Admin</a></li>


          </li>









        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
