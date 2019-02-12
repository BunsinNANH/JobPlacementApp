<style>
    .navbar{
        width: 100%;
        height: 86px;
        background: lightgray;
    }
    li{
        list-style: none;
    }
    .site-nav{
        background: lightgray;
        width:17.2%;
    }
</style>
 <script src="{{asset('js/app.js')}}"></script>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<nav class="navbar navbar-expand-sm ">
    <!-- Brand -->
    <a class="navbar-brand" href="#">
        <img src="img/brand-logo.png" alt="brand-logo" style="width:86%;">
    </a>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                {{-- <div class="row"> --}}
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <i class="material-icons text-white">settings</i>
                    {{-- <span>Settings</span> --}}
                </a>
                {{-- </div> --}}
                <div class="dropdown-menu">
                    <p class="text-center">
                        <a class="dropdown-item" href="#">
                            <i class="material-icons ">account_circle</i>
                            <span>Profile</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="material-icons">exit_to_app</i>
                            <span>Logout</span>
                        </a>
                    </p>
                </div>
            </li>              
        </ul>
</nav>

<nav class="site-nav pt-3">
    <ul>
        <li>
            <div class="row">
                <a class="home-post-link" href="/circulardesign.html"><i class="material-icons">account_balance</i>&nbsp;</a>
                <span> Job Post</span>
            </div>
        </li>
        <li>
            <div class="row">
                <a class="home-post-link" href="/circulardesign.html"><i class="material-icons">list</i>&nbsp;</a>
                <span> ERO Management</span>
            </div>
        </li>
        <li>
            <div class="row">
                <a class="home-post-link" href="/circulardesign.html"><i class="material-icons">school</i>&nbsp;</a>
                <span> Students Table</span>
            </div>
        </li>
        <li>
            <div class="row">
                <a class="home-post-link" href="/circulardesign.html"><i class="material-icons">palette</i>&nbsp;</a>
                <span> Occupancies</span>
            </div>
        </li>
    </ul>
</nav>

@section('content')
    
@endsection