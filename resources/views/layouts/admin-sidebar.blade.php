<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
  <div data-simplebar class="h-100">
    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu">
        <li>
          <a href="{{route('admin.welcome')}}">
            <i class="bi bi-grid-fill"></i>
            <span key="t-dashboards">Dashboards</span>
          </a>
        </li>
        @if(Auth::guard('admin')->user()->type == 'super admin')
        <li>
          <a href="{{route('admin.members')}}">
            <i class="bi bi-person-circle"></i>
            <span key="t-dashboards">Members</span>
          </a>
        </li>
        @endif
        <li>
          <a href="{{route('admin.subscribers')}}">
            <i class="bi bi-journal-check"></i>
            <span key="t-dashboards">Subscribers</span>
          </a>
        </li>
        <li>
            <a href="{{route('admin.unsubscribers')}}">
              <i class="bi bi-journal-x"></i>
              <span key="t-dashboards">Unsubscribers</span>
            </a>
        </li>
        @if(Auth::guard('admin')->user()->type == 'super admin')
        <li>
          <a href="{{route('admin.transaction')}}">
            <i class="bi bi-bank"></i>
            <span key="t-dashboards">Transaction <span class="badge bg-warning">{{\App\Models\Transaction::where('status', 2)->get()->count()}}</span></span>
          </a>
        </li>
        {{--
         <li>
          <a href="{{route('admin.trainings')}}">
            <i class="bi bi-book-half"></i>
            <span key="t-dashboards">Trainings</span>
          </a>
        </li> --}}
        {{--<li>
          <a href="{{route('admin.affiliate')}}">
            <i class="bi bi-graph-up-arrow"></i>
            <span key="t-dashboards">Affiliate</span>
          </a>
        </li>--}}
        <li>
          <a href="https://discord.gg/mg7gjwdYPsCke" target="_blank">
            <i class="bi bi-reception-4"></i>
            <span key="t-dashboards">Signal Room</span>
          </a>
        </li>
        @endif
        <li>
          <a href="{{route('admin.profile')}}">
            <i class="bi bi-sliders2-vertical"></i>
            <span key="t-tasks">Profile</span>
          </a>
        </li>
        @if(Auth::guard('admin')->user()->type == 'super admin')
        <li>
          <a href="{{route('admin.role')}}">
            <i class="bi bi-people"></i>
            <span key="t-dashboards">Sub Admin</span>
          </a>
        </li>
        @endif
        <!-- <li>
          <a>
            <i class="bi bi-person-check"></i>
            <span key="t-tasks">Admin Role</span>
          </a>
        </li> -->
        <li class="mt-4">
          <a href="{{route('admin.logout')}}">
            <i class="bi bi-box-arrow-in-left"></i>
            <span key="t-dashboards">Logout</span>
          </a>
        </li>
      </ul>

      </ul>
    </div>
    <!-- Sidebar -->
  </div>
</div>
<!-- Left Sidebar End -->
