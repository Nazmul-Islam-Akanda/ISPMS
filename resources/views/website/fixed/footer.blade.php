<!-- FOOTER -->
<footer class="py-7 py-md-9 bg-black">
      <div class="container px-4">
        <div class="row gx-7">
          <div class="col-sm-4">
    
            <!-- Heading -->
            <h5 class="text-xs text-primary">
              Mobile Banking
            </h5>
    
            <!-- Text -->
            <p class="mb-6">
            @foreach ($site_infos as $site_info)
            {{$site_info->mobile_banking_info}}
              @endforeach
            </p>
    
          </div>
          <div class="col-sm-4">
    
            <!-- Heading -->
            <h5 class="text-xs text-primary">
              Contact info
            </h5>
    
            <!-- List -->
            <ul class="list-unstyled mb-6">
            @foreach ($site_infos as $site_info)
              <li class="d-flex mb-2">
                <div class="fas fa-phone me-3 mt-2 fs-sm"></div>
                {{$site_info->contact_info}}
              </li>
              <li class="d-flex">
                <div class="far fa-envelope me-3 mt-2 fs-sm"></div> <a href="mailto:admin@domain.com">{{$site_info->company_email}}</a>
              </li>
              @endforeach
            </ul>
    
          </div>
          <div class="col-sm-4">
    
            <!-- Heading -->
            <h5 class="text-xs text-primary">
              Opening hours
            </h5>
    
            <!-- Text -->
            <div class="mb-3">
            @foreach ($site_infos as $site_info)
              <div class="text-xs">{{$site_info->opening_hours}}</div>
              @endforeach
            </div>
    
          </div>
        </div>
        <div class="row">
          <div class="col-12">
    
            <!-- Copyright -->
            <div class="d-flex align-items-center">
              <hr class="hr-sm me-3" style="height: 1px;" /> &copy; 2021 Nazmul. All rights reserved.
            </div>
    
          </div>
        </div>
      </div>
    </footer>
    
    
    <!--  -->