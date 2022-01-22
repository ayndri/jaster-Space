<div class="page-header">
  <div class="header-wrapper row m-0">
    <form class="form-inline search-full col" action="#" method="get">
      <div class="mb-3 w-100">
        <div class="Typeahead Typeahead--twitterUsers">
          <div class="u-posRelative">
            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
            <i class="close-search" data-feather="x"></i>
          </div>
          <div class="Typeahead-menu"></div>
        </div>
      </div>
    </form>
    <div class="header-logo-wrapper col-6 p-0">

      <button class="toogle-nav" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
        <svg width="35" height="35" viewBox="0 0 100 100">
          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
      </button>
      <div class="logo-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/img/logodash.png')}}" alt=""></a></div>
    </div>
    <div class="left-header col horizontal-wrapper ps-0">

    </div>
    <div class="nav-right col-6 pull-right right-header p-0">
      <ul class="nav-menus">
        {{-- <li>                         <span class="header-search"><i data-feather="search"></i></span></li> --}}
        <li class="onhover-dropdown">
          <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">
            
            @php
            $showNotif = auth()->user()->unreadNotifications()->latest()->paginate(5);
            @endphp
            {{ $showNotif->count() }}

          </span></div>
          <ul class="notification-dropdown onhover-show-div">
            <li>
              <i data-feather="bell"></i>
              <h6 class="f-18 mb-0">Notitications</h6>
            </li>

            @forelse ($showNotif as $notifications)
            
            @if ($notifications->data['notifType'] == 'createabsen')

            <li>
              <p><i class="fa fa-circle-o me-3 font-primary"> </i>{{ $notifications->data['text'] }} <span class="pull-right">{{ $notifications->created_at->diffForHumans(null, false, true) }}</span></p>
            </li>
            @elseif ($notifications->data['notifType'] == 'setujuAbsen')
            <li>
              <p><i class="fa fa-circle-o me-3 font-success"></i>{{ $notifications->data['text'] }}<span class="pull-right">{{ $notifications->created_at->diffForHumans(null, false, true) }}</span></p>
            </li>
            @elseif ($notifications->data['notifType'] == 'tolakabsen')
            <li>
              <p><i class="fa fa-circle-o me-3 font-danger"></i>{{ $notifications->data['text'] }}<span class="pull-right">{{ $notifications->created_at->diffForHumans(null, false, true) }}</span></p>
            </li>
            @elseif ($notifications->data['notifType'] == 'cancelabsen')
            @role('1')
            <li>
              <p><i class="fa fa-circle-o me-3 font-danger"></i>{{ $notifications->data['textAdmin'] }}<span class="pull-right">{{ $notifications->created_at->diffForHumans(null, false, true) }}</span></p>
            </li>
            @endrole
            @role('3')
            <li>
              <p><i class="fa fa-circle-o me-3 font-danger"></i>{{ $notifications->data['textUser'] }}<span class="pull-right">{{ $notifications->created_at->diffForHumans(null, false, true) }}</span></p>
            </li>
            @endrole
            @elseif ($notifications->data['notifType'] == 'createorder')
            <li>
              <p><i class="fa fa-circle-o me-3 font-info"></i>{{ $notifications->data['text'] }}<span class="pull-right">{{ $notifications->created_at->diffForHumans(null, false, true) }}</span></p>
            </li>

            @endif
            @empty
            <li>
              <p>Belum Ada Notifikasi</p>
            </li>
            @endforelse
            <li><a class="btn btn-primary" href="{{ route('notif')}}">Check all notification</a></li>
            
           

          </ul>
        </li>



        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
        <li class="profile-nav onhover-dropdown p-0 me-0">
          <div class="media profile-media">

            @if (auth()->user()->fotoUser == NULL)
            <img class="b-r-10" src="{{asset('assets/img/face1.jpg')}}" alt="">
              @else
              <img class="b-r-10" src="{{asset('public/assets/fotoUser')}}/{{auth()->user()->fotoUser}}">
              @endif

              

          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li class="fotopro">

              @if (auth()->user()->fotoUser == NULL)
                <img src="{{asset('assets/img/face1.jpg')}}">
              @else
                <img src="{{asset('public/assets/fotoUser')}}/{{auth()->user()->fotoUser}}">
              @endif
              
              <p class="namanya">{{ auth()->user()->nama }}</p><span class="siapanya">Welcomeback !</span>
            <li><a href="{{route('profile.edit',auth()->user()->idUser)}}"><i data-feather="user"></i><span>Account </span></a></li>
            <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
            <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
            <li><a href="{{ route('reset.pass') }}"><i data-feather="settings"></i><span>Password</span></a></li>
            <li><a href="{{ route('logout') }}"><i data-feather="log-out"> </i><span>Log out</span></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <script class="result-template" type="text/x-handlebars-template">
      <div class="ProfileCard u-cf">
      <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
      <div class="ProfileCard-details">
      <div class="ProfileCard-realName">@{{name}}</div>
      </div>
      </div>
    </script>
    <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
  </div>
</div>


