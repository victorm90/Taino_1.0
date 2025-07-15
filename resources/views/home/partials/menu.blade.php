<nav>
    <div class="container nav-container">
        <button class="mobile-toggle">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="{{ route('inicio') }}" class="nav-link"><i class="fas fa-home"></i> Inicio</a>
            </li>
            <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link"><i class="fas fa-newspaper"></i> Blog</a>
            </li>

            {{-- <li class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-landmark"></i> Cultura</a>
                <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item"><i class="fas fa-book"></i> Historia Taína</a></li>                    
                </ul>
            </li> --}}
        </ul>
    </div>
</nav>
