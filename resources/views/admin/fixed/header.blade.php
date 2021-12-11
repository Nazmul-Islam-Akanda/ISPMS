<!-- Header -->
<header class="header header-light bg-white">

    <nav class="navbar flex-nowrap p-0">
    <div class="navbar-brand-wrapper col-auto">
     
      <!-- Company Name -->
      {{--@dd($site_infos)--}}
      @foreach ($site_infos as $site_info)
      <h4 style="color:yellow"><b><img src="{{url('/uploads/'.$site_info->logo)}}" width="50px" alt="Company Logo"> {{$site_info->company_name}}</b></h4>
      @endforeach
      <!-- Company Name -->
    </div>




    

        <!-- Header Dropdown -->
        <div class="dropdown ml-auto">
          <a id="messagesInvoker" class="header-invoker" href="#" aria-controls="messages" aria-haspopup="true" aria-expanded="false"
             data-unfold-event="click"
             data-unfold-target="#messages"
             data-unfold-type="css-animation"
             data-unfold-duration="300"
             data-unfold-animation-in="fadeIn"
             data-unfold-animation-out="fadeOut">
            <span class="indicator indicator-bordered indicator-top-right indicator-secondary rounded-circle"></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>
          </a>

          <div id="messages" class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem" aria-labelledby="messagesInvoker">
            <div class="card">
              <div class="card-header d-flex align-items-center border-bottom py-3">
                <h5 class="mb-0">Messages</h5>
                <a class="link small ml-auto" href="#">View All</a>
              </div>

              <div class="card-body p-0">
                <div class="list-group list-group-flush">
                  <a class="list-group-item list-group-item-action" href="#">
                    <div class="media align-items-center">
                      <div class="position-relative d-none d-md-block mr-2">
                        <span class="indicator indicator-lg indicator-bordered-reverse indicator-top-left indicator-success rounded-circle"></span>
                        <img class="avatar-lg rounded-circle" src="{{url('jpg/img4.jpg')}}" alt="Image description">
                      </div>

                      <div class="media-body">
                        <div class="d-flex">
                          <h6 class="font-weight-semi-bold mb-0">Frances James</h6>
                          <small class="text-muted ml-auto">just now</small>
                        </div>

                        <p class="text-truncate mb-0" style="max-width: 250px;">
                          Reminder about your Appointment
                        </p>
                      </div>
                    </div>
                  </a>

                  <a class="list-group-item list-group-item-action" href="#">
                    <div class="media align-items-center">
                      <div class="position-relative d-none d-md-block mr-2">
                        <span class="indicator indicator-lg indicator-bordered-reverse indicator-top-left indicator-danger rounded-circle"></span>
                        <img class="avatar-lg rounded-circle" src="{{url('jpg/img8.jpg')}}" alt="Image description">
                      </div>

                      <div class="media-body">
                        <div class="d-flex">
                          <h6 class="font-weight-semi-bold mb-0">Chad Ward</h6>
                          <small class="text-muted ml-auto">an hour ago</small>
                        </div>

                        <p class="text-truncate mb-0" style="max-width: 250px;">
                          If you could have any kind of pet, what would you choose?
                        </p>
                      </div>
                    </div>
                  </a>

                  <a class="list-group-item list-group-item-action" href="#">
                    <div class="media align-items-center">
                      <div class="position-relative d-none d-md-block mr-2">
                        <span class="indicator indicator-lg indicator-bordered-reverse indicator-top-left indicator-warning rounded-circle"></span>
                        <img class="avatar-lg rounded-circle" src="{{url('jpg/img5.jpg')}}" alt="Image description">
                      </div>

                      <div class="media-body">
                        <div class="d-flex">
                          <h6 class="font-weight-semi-bold mb-0">Carolyn Carlson</h6>
                          <small class="text-muted ml-auto">2 days ago</small>
                        </div>

                        <p class="text-truncate mb-0" style="max-width: 250px;">
                          I won $500 million in the lottery, I quit!
                        </p>
                      </div>
                    </div>
                  </a>

                  <a class="list-group-item list-group-item-action" href="#">
                    <div class="media align-items-center">
                      <div class="position-relative d-none d-md-block mr-2">
                        <span class="indicator indicator-lg indicator-bordered-reverse indicator-top-left indicator-success rounded-circle"></span>
                        <img class="avatar-lg rounded-circle" src="{{url('jpg/img6.jpg')}}" alt="Image description">
                      </div>

                      <div class="media-body">
                        <div class="d-flex">
                          <h6 class="font-weight-semi-bold mb-0">Lizzie Barber</h6>
                          <small class="text-muted ml-auto">4 days ago</small>
                        </div>

                        <p class="text-truncate mb-0" style="max-width: 250px;">
                          Spring fever.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Header Dropdown -->

        <!-- Header Dropdown -->
        <div class="dropdown ml-2">
          <a id="notificationsInvoker" class="header-invoker" href="#" aria-controls="notifications" aria-haspopup="true" aria-expanded="false"
             data-unfold-event="click"
             data-unfold-target="#notifications"
             data-unfold-type="css-animation"
             data-unfold-duration="300"
             data-unfold-animation-in="fadeIn"
             data-unfold-animation-out="fadeOut">
            <span class="indicator indicator-bordered indicator-top-right indicator-primary rounded-circle"></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg>
          </a>

          <div id="notifications" class="dropdown-menu dropdown-menu-center py-0 mt-4 w-18_75rem w-md-22_5rem" aria-labelledby="notificationsInvoker">
            <div class="card">
              <div class="card-header d-flex align-items-center border-bottom py-3">
                <h5 class="mb-0">Notifications</h5>
                <a class="link small ml-auto" href="#">Clear All</a>
              </div>

              <div class="card-body p-0">
                <div class="list-group list-group-flush">
                  <div class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center text-nowrap mb-2">
                      <i class="nova-star icon-text text-primary mr-2"></i>
                      <h6 class="font-weight-semi-bold mb-0">Frances James</h6>
                      <span class="list-group-item-date text-muted ml-auto">just now</span>
                    </div>

                    <p class="mb-0">
                      Reminder about your Appointment.
                    </p>
                    <a class="list-group-item-closer text-muted" href="#"><i class="nova-close"></i></a>
                  </div>

                  <div class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center text-nowrap mb-2">
                      <i class="nova-twitter icon-text text-primary mr-2"></i>
                      <h6 class="font-weight-semi-bold mb-0">Mollie Banks</h6>
                      <span class="list-group-item-date text-muted ml-auto">an hour ago</span>
                    </div>

                    <p class="mb-0">
                      You subscribed to local deals in Amsterdam
                    </p>
                    <a class="list-group-item-closer text-muted" href="#"><i class="nova-close"></i></a>
                  </div>

                  <div class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center text-nowrap mb-2">
                      <i class="nova-dropbox icon-text text-primary mr-2"></i>
                      <h6 class="font-weight-semi-bold mb-0">File Sync</h6>
                      <span class="list-group-item-date text-muted ml-auto">2 days ago</span>
                    </div>

                    <p class="mb-0">
                      Subscription confirmed
                    </p>
                    <a class="list-group-item-closer text-muted" href="#"><i class="nova-close"></i></a>
                  </div>

                  <div class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center text-nowrap mb-2">
                      <i class="nova-dribbble icon-text text-primary mr-2"></i>
                      <h6 class="font-weight-semi-bold mb-0">Cody Walters</h6>
                      <span class="list-group-item-date text-muted ml-auto">4 days ago</span>
                    </div>

                    <p class="mb-0">
                      Do you like roller coasters?
                    </p>
                    <a class="list-group-item-closer text-muted" href="#"><i class="nova-close"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Header Dropdown -->

        <!-- Header User Dropdown -->
        <div class="dropdown mx-3">
          <a id="profileMenuInvoker" class="header-complex-invoker" href="#" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false"
             data-unfold-event="click"
             data-unfold-target="#profileMenu"
             data-unfold-type="css-animation"
             data-unfold-duration="300"
             data-unfold-animation-in="fadeIn"
             data-unfold-animation-out="fadeOut">
            <img class="avatar rounded-circle mr-md-2" src="{{url('jpg/img9.jpg')}}" alt="Image description">
            <span class="d-none d-md-block">David Walters</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
</svg>
          </a>

          <ul id="profileMenu" class="unfold unfold-user unfold-light unfold-top unfold-centered position-absolute pt-2 pb-1 mt-4" aria-labelledby="profileMenuInvoker">
            <li class="unfold-item">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-user"></i>
                </span>
                My Profile
              </a>
            </li>
            
            <li class="unfold-item unfold-item-has-divider">
              <a class="unfold-link d-flex align-items-center text-nowrap" href="#">
                <span class="unfold-item-icon mr-3">
                  <i class="nova-power-off"></i>
                </span>
                Sign Out
              </a>
            </li>
          </ul>
        </div>
        <!-- End Header User Dropdown -->

      </div>
    </div>
  </nav>
</header>
<!-- End Header -->