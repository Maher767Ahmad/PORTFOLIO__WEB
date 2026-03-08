<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="{{ route('home') }}" class="nav-brand">
            <span class="brand-dot"></span>
            <span class="brand-text">Harris<span class="brand-accent">.</span></span>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="nav-links" id="navLinks">
            <li><a href="{{ route('home') }}#about" class="nav-link">About</a></li>
            <li><a href="{{ route('home') }}#skills" class="nav-link">Skills</a></li>
            <li><a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a></li>
            <li><a href="{{ route('experience') }}" class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}">Experience</a></li>
            <li><a href="{{ route('home') }}#companies" class="nav-link">Companies</a></li>
            <li><a href="{{ route('home') }}#testimonials" class="nav-link">Reviews</a></li>
            <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            <li>
                <a href="mailto:hello@harris-qaisrani.tech" class="nav-cta">
                    Hire Me
                </a>
            </li>
        </ul>
    </div>
</nav>
