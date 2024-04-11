<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav"  href="{{route('transactions.index')}}">
            <i class="bi bi-credit-card"></i><span>Payment</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav"  href="{{route('cac.index')}}">
            <i class="bi bi-chat"></i><span>Communication & Collaboration</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav"  href="{{route('market.index')}}">
            <i class="bi bi-shop"></i><span>Market Place</span>
        </a>
      </li><!-- End Components Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav"  href="{{route('pfrs.checklist.index')}}">
          <span><i class="bi bi-card-checklist"></i>Accounting Standards</span>
        </a>
      </li><!-- End Icons Nav -->




    </ul>

  </aside><!-- End Sidebar-->
