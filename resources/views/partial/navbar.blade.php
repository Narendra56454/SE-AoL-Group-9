<nav>
    <div class="nav-container">
        <a href="/"><img class="logo" src="{{ asset('img/logo.png') }}" alt="logo"></a>

        <div class="con1">
            <form action="{{ route('search') }}" method="get" id="searchForm">
                <div class="search-bar">
                    <img class="search-icon" src="{{ asset('img/search_icon.png') }}" alt="search-icon">
                    <input type="text" name="query" id="searchInput" placeholder="Tempat Makan Favoritmu">
                </div>
            </form>            
            
            <a href="/favorite"><img class="map-icon" src="{{ asset('img/favorited_icon.svg') }}" alt="favorite icon"></a>
        </div>

        <div class="con2">
            @auth
                <p id="paragraph" class="user-name">{{ auth()->user()->name }}</p>
                <img id="profile-img" src="{{ asset('img/default_profile_image.png') }}" alt="profile image" class="profile-img">
                <div class="menu">
                    <ul>
                        <li><a href="/profile">Profile</a></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="/login" class="login-btn">Login</a>
            @endauth
        </div>

                
    </div>
</nav>

@section('script')
    <script>
        var profileImg = document.getElementById('profile-img');
        var menu = document.querySelector('.menu');

        profileImg.addEventListener('click', function() {
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        });

        // Close the menu when clicking outside
        document.addEventListener('click', function(event) {
            var isClickInside = profileImg.contains(event.target) || menu.contains(event.target);
            if (!isClickInside) {
                menu.style.display = 'none';
            }
        });
    </script>
@endsection