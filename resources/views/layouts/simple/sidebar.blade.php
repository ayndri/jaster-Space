<div class="navtop">
  <div class="overnav"></div>
  <ul class="navlist">

    <li class="nav-item"><a class="{{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}" href="{{route('/')}}">
      <i data-feather="home"> </i><span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="{{ request()->route()->getPrefix() == '/page-layouts' ? 'active' : '' }}" href="#">
	  <i data-feather="monitor"></i><span>Jasterweb</span>
      </a>
      <ul class="nav-submenu">
      <li><a href="{{ Route('jweb.all') }}" class="{{ Route::currentRouteName() == 'list-prog' ? 'active' : '' }}">List Pending</a></li>
      <li><a href="{{ Route('jweb.semua') }}" class="{{ Route::currentRouteName() == 'list-prog' ? 'active' : '' }}">List Fix</a></li>
      <li><a href="{{ Route('jweb.add') }}" class="{{ Route::currentRouteName() == 'list-prog' ? 'active' : '' }}">Add Order</a></li>
      <li><a href="#" class="{{ Route::currentRouteName() == 'history-order' ? 'active' : '' }}">History Order</a></li>
      <li><a href="#" class="{{ Route::currentRouteName() == 'prog-point' ? 'active' : '' }}">Progress Point</a></li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="{{ request()->route()->getPrefix() == '/page-layouts' ? 'active' : '' }}" href="#">
	  <i data-feather="hard-drive"></i><span>Server</span>

      </a>
      <ul class="nav-submenu">
        <li><a href="{{route('host.all')}}" class="{{ Route::currentRouteName() == 'hosting' ? 'active' : '' }}">Hosting</a></li>
        <li><a href="{{route('domain.getAllDomain')}}" class="{{ Route::currentRouteName() == 'domain' ? 'active' : '' }}">Domain</a></li>
        <li><a href="#" class="{{ Route::currentRouteName() == 'renewal' ? 'active' : '' }}">Renewal</a></li>
        <li><a href="{{route('domain.index')}}" class=" ">Cari Hosting</a></li>
      </ul>
    </li>

    @role('1|2')
    <li class="nav-item">
      <a class="{{ request()->route()->getPrefix() == '/page-layouts' ? 'active' : '' }}" >
	  <i data-feather="flag"></i><span>JasterAds</span>

      </a>
      <ul class="nav-submenu">
        <li><a href="{{route('ads.active')}}" class="{{ Route::currentRouteName() == 'acv-ads' ? 'active' : '' }}">Active Ads</a></li>
        <li><a href="{{route('ads.alltop')}}" class="{{ Route::currentRouteName() == 'antri-ads' ? 'active' : '' }}">Antri Transfer</a></li>
        <li><a href="{{route('ads.allads')}}" class="{{ Route::currentRouteName() == 'hist-ads' ? 'active' : '' }}">History Ads</a></li>
        <li><a href="{{route('ads.recap')}}" class="{{ Route::currentRouteName() == 'recap-ads' ? 'active' : '' }}">Recap Ads</a></li>
      </ul>
    </li>
    @endrole

    <li class="nav-item">
      <a class="{{ request()->route()->getPrefix() == '/page-layouts' ? 'active' : '' }}" href="#">
	  <i data-feather="instagram"></i><span>Jastergram</span>

      </a>
      <ul class="nav-submenu">
        <li><a href="#" class="{{ Route::currentRouteName() == 'prog-jg' ? 'active' : '' }}">List Progress</a></li>
        <li><a href="#" class="{{ Route::currentRouteName() == 'hist-jg' ? 'active' : '' }}">History Order</a></li>
        <li><a href="#" class="{{ Route::currentRouteName() == 'point-jg' ? 'active' : '' }}">Progress Point</a></li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="{{ request()->route()->getPrefix() == '/page-layouts' ? 'active' : '' }}" href="{{route('account.index')}}">
        <svg className="w-6 h-6" width="20" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd" /></svg>
        <span>Account</span>
      </a>
    </li>

  </ul>
</div>
