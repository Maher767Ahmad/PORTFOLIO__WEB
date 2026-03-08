@extends('layouts.app')

@section('content')

{{-- ==================== HERO SECTION ==================== --}}
<section class="hero" id="hero">
    <div class="hero-bg">
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="hero-grid"></div>
    </div>

    <div class="container hero-container">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="badge-dot"></span>
                Available for new projects
            </div>

            <h1 class="hero-title">
                Hi, I'm <span class="gradient-text">Harris Qaisrani</span>
            </h1>

            <div class="hero-typed-wrapper">
                <span class="hero-typed" id="typedText"></span>
                <span class="typed-cursor">|</span>
            </div>

            <p class="hero-desc">
                {{ $data['about'] }}
            </p>

            <div class="hero-actions">
                <a href="{{ route('projects') }}" class="btn btn-primary">
                    View My Work
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="mailto:hello@harris-qaisrani.tech" class="btn btn-outline">
                    Get In Touch
                </a>
            </div>

            <div class="hero-stats">
                @foreach($data['stats'] as $stat)
                    <div class="stat-item">
                        <span class="stat-value gradient-text">{{ $stat['value'] }}</span>
                        <span class="stat-label">{{ $stat['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="hero-image-wrap">
            <div class="hero-image-ring hero-ring-1"></div>
            <div class="hero-image-ring hero-ring-2"></div>
            <div class="hero-image-ring hero-ring-3"></div>
            <div class="hero-avatar">
                <img src="{{ asset('images/profile.jpg') }}" alt="Harris Qaisrani — Full Stack Developer" id="heroImg"
                     onerror="this.style.display='none'; document.getElementById('heroPlaceholder').style.display='flex';">
                <div class="hero-placeholder" id="heroPlaceholder">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/></svg>
                    <span>Add Your Photo</span>
                </div>
            </div>
            <div class="hero-floating-card card-1">
                <span class="card-icon">⚡</span>
                <div>
                    <strong>5+ Years</strong>
                    <small>Experience</small>
                </div>
            </div>
            <div class="hero-floating-card card-2">
                <span class="card-icon">🚀</span>
                <div>
                    <strong>80+</strong>
                    <small>Projects Done</small>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-indicator">
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
        <span>Scroll Down</span>
    </div>
</section>

{{-- ==================== ABOUT SECTION ==================== --}}
<section class="section about-section" id="about">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">Get to know me</span>
            <h2 class="section-title">About <span class="gradient-text">Me</span></h2>
        </div>

        <div class="about-grid">
            <div class="about-image-col reveal">
                <div class="about-image-frame">
                    <img src="{{ asset('images/about.jpg') }}" alt="Harris Qaisrani" class="about-img"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="about-img-placeholder">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/></svg>
                        <span>Your Photo Here</span>
                    </div>
                    <div class="about-experience-badge">
                        <strong>5+</strong>
                        <span>Years of<br>Experience</span>
                    </div>
                </div>
            </div>

            <div class="about-content-col reveal">
                <h3 class="about-subtitle">Full Stack Developer based in Pakistan, building for the world.</h3>
                <p class="about-text">{{ $data['about'] }}</p>
                <p class="about-text">I love solving complex problems and translating business requirements into elegant technical solutions. Whether it's a startup MVP or scaling an enterprise system, I bring the same energy and craftsmanship to every project.</p>

                <div class="about-info-grid">
                    <div class="info-item">
                        <span class="info-label">Location</span>
                        <span class="info-value">📍 Pakistan</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Availability</span>
                        <span class="info-value available">🟢 Available</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Email</span>
                        <span class="info-value"><a href="mailto:hello@harris-qaisrani.tech">hello@harris-qaisrani.tech</a></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Work Type</span>
                        <span class="info-value">Remote / Hybrid</span>
                    </div>
                </div>

                <div class="about-actions">
                    <a href="mailto:hello@harris-qaisrani.tech" class="btn btn-primary">Hire Me</a>
                    <a href="#" class="btn btn-outline">Download CV</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== SKILLS SECTION ==================== --}}
<section class="section skills-section" id="skills">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">What I work with</span>
            <h2 class="section-title">My <span class="gradient-text">Skills</span></h2>
        </div>

        <div class="skills-grid">
            @foreach($data['skills'] as $skill)
                <div class="skill-card reveal">
                    <div class="skill-header">
                        <span class="skill-icon">{{ $skill['icon'] }}</span>
                        <div class="skill-info">
                            <span class="skill-name">{{ $skill['name'] }}</span>
                            <span class="skill-level-label">{{ $skill['level'] }}%</span>
                        </div>
                    </div>
                    <div class="skill-bar-wrap">
                        <div class="skill-bar" data-level="{{ $skill['level'] }}">
                            <div class="skill-bar-fill"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ==================== PROJECTS PREVIEW ==================== --}}
<section class="section projects-section" id="projects">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">What I've built</span>
            <h2 class="section-title">Featured <span class="gradient-text">Projects</span></h2>
        </div>

        <div class="projects-grid">
            @foreach(array_slice($data['projects'], 0, 3) as $project)
                <div class="project-card reveal">
                    <div class="project-img-wrap">
                        <div class="project-img-placeholder">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                        </div>
                        <div class="project-overlay">
                            <a href="{{ $project['live'] }}" class="project-btn" aria-label="View Live">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><path d="M15 3h6v6"/><path d="M10 14L21 3"/></svg>
                            </a>
                            <a href="{{ $project['github'] }}" class="project-btn" aria-label="View Code">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.73.083-.73 1.205.085 1.84 1.238 1.84 1.238 1.07 1.835 2.809 1.305 3.495.998.108-.776.418-1.305.762-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.605-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.298 24 12c0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="project-body">
                        <span class="project-category">{{ $project['category'] }}</span>
                        <h3 class="project-title">{{ $project['title'] }}</h3>
                        <p class="project-desc">{{ $project['description'] }}</p>
                        <div class="project-tags">
                            @foreach($project['tags'] as $tag)
                                <span class="tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="section-cta reveal">
            <a href="{{ route('projects') }}" class="btn btn-primary">
                View All Projects
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ==================== COMPANIES / CLIENTS ==================== --}}
<section class="section companies-section" id="companies">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">Trusted by</span>
            <h2 class="section-title">Companies I've <span class="gradient-text">Worked With</span></h2>
        </div>

        <div class="companies-marquee-wrap reveal">
            <div class="companies-marquee">
                <div class="marquee-track">
                    @foreach(array_merge($data['companies'], $data['companies']) as $company)
                        <div class="company-logo-card">
                            <div class="company-logo-placeholder">
                                <span>{{ strtoupper(substr($company['name'], 0, 2)) }}</span>
                            </div>
                            <span class="company-name">{{ $company['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== EXPERIENCE PREVIEW ==================== --}}
<section class="section exp-preview-section" id="experience-preview">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">My journey</span>
            <h2 class="section-title">Work <span class="gradient-text">Experience</span></h2>
        </div>

        <div class="timeline">
            @foreach(array_slice($data['experience'], 0, 3) as $index => $exp)
                <div class="timeline-item reveal {{ $index % 2 === 0 ? 'left' : 'right' }}">
                    <div class="timeline-dot">
                        <div class="dot-inner"></div>
                    </div>
                    <div class="timeline-card glass-card">
                        <div class="timeline-header">
                            <div>
                                <h3 class="timeline-role">{{ $exp['role'] }}</h3>
                                <p class="timeline-company gradient-text">{{ $exp['company'] }}</p>
                            </div>
                            <div class="timeline-meta">
                                <span class="timeline-period">{{ $exp['period'] }}</span>
                                <span class="timeline-location">📍 {{ $exp['location'] }}</span>
                            </div>
                        </div>
                        <p class="timeline-desc">{{ $exp['description'] }}</p>
                        <div class="timeline-tags">
                            @foreach($exp['tags'] as $tag)
                                <span class="tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="section-cta reveal">
            <a href="{{ route('experience') }}" class="btn btn-outline">Full Experience →</a>
        </div>
    </div>
</section>

{{-- ==================== TESTIMONIALS ==================== --}}
<section class="section testimonials-section" id="testimonials">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">What clients say</span>
            <h2 class="section-title">Client <span class="gradient-text">Reviews</span></h2>
        </div>

        <div class="testimonials-carousel" id="testimonialsCarousel">
            <div class="testimonials-track" id="testimonialsTrack">
                @foreach($data['testimonials'] as $index => $t)
                    <div class="testimonial-card glass-card {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}">
                        <div class="testimonial-stars">
                            @for($s = 0; $s < $t['stars']; $s++)
                                <span class="star">★</span>
                            @endfor
                        </div>
                        <blockquote class="testimonial-quote">"{{ $t['quote'] }}"</blockquote>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <span>{{ strtoupper(substr($t['name'], 0, 1)) }}</span>
                            </div>
                            <div class="author-info">
                                <strong>{{ $t['name'] }}</strong>
                                <span>{{ $t['role'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="carousel-controls">
                <button class="carousel-btn prev" id="prevBtn" aria-label="Previous testimonial">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <div class="carousel-dots" id="carouselDots">
                    @foreach($data['testimonials'] as $index => $t)
                        <button class="dot {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}" aria-label="Testimonial {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                <button class="carousel-btn next" id="nextBtn" aria-label="Next testimonial">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18l6-6-6-6"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- ==================== CONTACT CTA ==================== --}}
<section class="section contact-cta-section" id="contact-cta">
    <div class="container">
        <div class="contact-cta-card glass-card reveal">
            <div class="contact-cta-orb"></div>
            <h2 class="contact-cta-title">Let's Build Something<br><span class="gradient-text">Amazing Together</span></h2>
            <p class="contact-cta-desc">Have a project in mind? I'd love to hear about it. Send me a message and let's discuss how we can bring your vision to life.</p>
            <div class="contact-cta-actions">
                <a href="mailto:hello@harris-qaisrani.tech" class="btn btn-primary btn-lg">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    hello@harris-qaisrani.tech
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline btn-lg">View Contact Page</a>
            </div>
        </div>
    </div>
</section>

@endsection
