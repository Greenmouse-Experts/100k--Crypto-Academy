<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
  <div data-simplebar class="h-100">
    <!--- Sidemenu -->
    <div id="sidebar-menu">
      <!-- Left Menu Start -->
      <ul class="metismenu list-unstyled" id="side-menu">
        <li>
          <a href="{{route('user.dashboard')}}">
            <i class="bi bi-grid-fill"></i>
            <span key="t-dashboards">Dashboards</span>
          </a>
        </li>
        <li>
          <a href="#" class="has-arrow">
            <i class="bx bx-task"></i>
            <span key="t-tasks">Asset</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="#">Deposit</a></li>
            <li><a href="#">Withdraw</a></li>
            <li><a href="#">Transfer</a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('user.training')}}">
            <i class="bi bi-book-half"></i>
            <span key="t-dashboards">Training</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-graph-up-arrow"></i>
            <span key="t-dashboards">Affiliate</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-reception-4"></i>
            <span key="t-dashboards">Signals</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-info-circle"></i>
            <span key="t-dashboards">Help centre</span>
          </a>
        </li>
        <li>
          <a href="#" class="has-arrow">
          <i class="bi bi-sliders2-vertical"></i>
            <span key="t-tasks">Settings</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="#">Account</a></li>
          </ul>
        </li>
        <li class="mt-4">
          <a href="#">
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