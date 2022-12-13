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
          <a href="{{route('user.subscribe')}}">
            <i class="bi bi-journal-check"></i>
            <span key="t-dashboards">Subscribe</span>
          </a>
        </li>
        <li>
          <a href="{{route('user.wallet')}}">
            <i class="bi bi-credit-card-fill"></i>
            <span key="t-dashboards">Wallet</span>
          </a>
        </li>
        <li>
          <a href="#" class="has-arrow">
            <i class="bi bi-bank"></i>
            <span key="t-dashboards">Transaction</span>
          </a>
          <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{route('user.deposit')}}" key="t-tui-calendar">Deposit</a></li>
            <li><a href="{{route('user.withdraw')}}" key="t-full-calendar">Withdraw</a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('user.guide')}}">
            <i class="bi bi-play-btn"></i>
            <span key="t-dashboards">Video guide</span>
          </a>
        </li>
        <li>
          <a href="{{route('user.affiliate')}}">
            <i class="bi bi-graph-up-arrow"></i>
            <span key="t-dashboards">Affiliate</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-reception-4"></i>
            <span key="t-dashboards">Signals Room</span>
          </a>
        </li>
        <li>
          <a href="{{route('user.profile')}}">
            <i class="bi bi-sliders2-vertical"></i>
            <span key="t-tasks">Profile</span>
          </a>
        </li>
        <li class="mt-4">
          <a href="/logout">
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