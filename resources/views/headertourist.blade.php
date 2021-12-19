
<header>
    <h1>NTT Market</h1>
    <div id='search-container'>
        <input type="text"name="search" id="searchbar">
        <i class="fas fa-search"></i>
    </div>
    @auth
        <div id='widget-container'>
            <a href=""><i class="far fa-comments"></i></a>
            <a href=""><i class="far fa-bell"></i></a>
            <a href=""><i class="far fa-user-circle"></i></a>
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