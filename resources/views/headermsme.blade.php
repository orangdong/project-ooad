<header>
    <h1>NTT Market</h1>
    <div id='search-container'>
        <input type="text"name="search" id="searchbar">
        <i class="fas fa-search"></i>
    </div>
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
        <a href="/dashboard/seller/forum"><i class="far fa-comments"></i></a>
        <a href=""><i class="fas fa-receipt"></i></a>
        <a href="/dashboard/seller/storepage"><i class="fas fa-store-alt"></i></a>
        <a><i id='user-btn' class="far fa-user-circle"></i></a>
        <a href=""><i class="fas fa-cog"></i></a>
    </div>
</header>