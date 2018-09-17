@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">OrderDinner</a>
        @else
            <a href="{{ route('login') }}">Logowanie</a>
            <a href="{{ route('register') }}">Rejestracja</a>
        @endauth
    </div>
@endif
