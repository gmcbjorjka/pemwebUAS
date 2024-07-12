<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>

        <li class="menu-title">
          <span>Main Menu</span>
        </li>

        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
          <a href="/home">
            <i class="fas fa-tachometer-alt"></i>
            <span> Dashboard</span>
          </a>
        </li>

        @if (auth()->user()->role === 'super admin')
        <li class="submenu ">
          <a href="#">
            <i class="fas fa-shield-alt"></i>
            <span>User Management</span>
            <span class="menu-arrow"></span>
          </a>
          <ul>
            <li><a href="#" class="#">List Users</a></li>
          </ul>
        </li>
        @endif

        <li class="submenu  {{ request()->routeIs('stocks.index') || request()->routeIs('stocks.create') ? 'active' : '' }}">
          <a href="#">
            <i class="fas fa-list"></i>
            <span>List Alternatives</span>
            <span class="menu-arrow"></span>
          </a>
          <ul>
            <li><a href="{{ route('stocks.index') }}" class="{{ request()->routeIs('stocks.index') ? 'active' : '' }}">Stock List</a></li>
            <li><a href="{{ route('stocks.create') }}" class="{{ request()->routeIs('stocks.create') ? 'active' : '' }}">Add Stock</a></li>
          </ul>
        </li>

        <li class="menu-title">
          <span>Feature</span>
        </li>

        <li class="submenu {{ request()->routeIs('weights.create') || request()->routeIs('weights.store') || request()->routeIs('weights.normalization') || request()->routeIs('wp.preferens') || request()->routeIs('wp.hasil') || request()->routeIs('saw.weights') || request()->routeIs('saw.store') || request()->routeIs('saw.normalization') || request()->routeIs('saw.preferens') || request()->routeIs('saw.hasil') ? 'active' : '' }}">
          <a href="{{ route('weights.create') }}">
            <i class="fas fa-sitemap"></i>
            <span>DSS</span>
            <span class="menu-arrow"></span>
          </a>
          <ul>
            <li><a href="{{ route('weights.create') }}" class="{{ request()->routeIs('weights.create') || request()->routeIs('weights.store') || request()->routeIs('weights.normalization') || request()->routeIs('wp.preferens') || request()->routeIs('wp.hasil')  ? 'active' : '' }}">WP method</a></li>
            <li><a href="{{ route('saw.weights') }}" class="{{ request()->routeIs('saw.weights') || request()->routeIs('saw.store') || request()->routeIs('saw.normalization') || request()->routeIs('saw.preferens') || request()->routeIs('saw.hasil')  ? 'active' : '' }}">SAW method</a></li>
          </ul>
        </li>


        <li class="submenu">
          <a href="#"><i class="fas fa-calculator"></i>
            <span> Calculator</span>
            <span class="menu-arrow"></span>
          </a>
          <ul>
            <li><a href="#" class="#">Return On Invesment</a></li>
            <li><a href="#" class="#">Financial Ratio</a></li>
            <li><a class="#">Dividen</a></li>
            <li><a href="#" class="#">Valuation</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="fas fa-chart-line"></i>
            <span>Chart</span>
          </a>
        </li>
        <li class="{{ request()->routeIs('calender') ? 'active' : '' }}">
          <a href="{{ route('calender') }}">
            <i class="fas fa-calendar-day"></i>
            <span>Calender Economic</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>