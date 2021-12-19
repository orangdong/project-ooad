
<header>
    @auth
        <a href='/dashboard' class='home-anchor'><h1>NTT Market</h1></a>  
    @endauth
    @guest
        <a href='/' class='home-anchor'><h1>NTT Market</h1></a>
    @endguest
    <div id='search-container'>
        <input type="text"name="search" id="searchbar">
        <i class="fas fa-search"></i>
    </div>
    @auth
        <div id='widget-container'>
            <div id='user-dropdown'>
                <h2>Profile</h2>
                <p id='user-name'>{{Auth::user()->name}}</p>
                <p id="user-email">{{Auth::user()->email}}</p>
                <button id='profile-btn'>Edit Profile</button>
                <form action="/logout" method="POST">
                    @csrf
                    <button id="logout-btn" type='submit'>Logout</button>
                </form>
            </div>
            <a href="/dashboard/forum"><i class="far fa-comments"></i></a>
            <a href=""><i class="far fa-bell"></i></a>
            <a><i id='user-btn' class="far fa-user-circle"></i></a>
            <a href=""><i class="fas fa-cog"></i></a>
        </div>
    @endauth
    @guest
    <div id="button-container" style="margin-left: 30px; margin-right: 15px">
        <a class="button" href={{route('login')}}>Sign In</a>
        <a class="button" href={{route('register')}}>Sign Up</a>
    </div>
    @endguest
</header>