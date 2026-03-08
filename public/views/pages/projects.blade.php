@extends('layouts.app')

@section('content')

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content reveal">
            <span class="section-tag">Portfolio</span>
            <h1 class="page-title">My <span class="gradient-text">Projects</span></h1>
            <p class="page-desc">A collection of projects I've built — from SaaS platforms and REST APIs to real-time applications and developer tooling.</p>
        </div>
    </div>
    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>
</section>

<section class="section">
    <div class="container">
        {{-- Filter Tabs --}}
        <div class="filter-tabs reveal">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="Web App">Web Apps</button>
            <button class="filter-btn" data-filter="API">APIs</button>
            <button class="filter-btn" data-filter="DevOps">DevOps</button>
        </div>

        <div class="projects-grid" id="projectsGrid">
            @foreach($data['projects'] as $project)
                <div class="project-card reveal" data-category="{{ $project['category'] }}">
                    <div class="project-img-wrap">
                        <div class="project-img-placeholder">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                        </div>
                        <div class="project-overlay">
                            <a href="{{ $project['live'] }}" class="project-btn" aria-label="View Live">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><path d="M15 3h6v6"/><path d="M10 14L21 3"/></svg>
                            </a>
                            <a href="{{ $project['github'] }}" class="project-btn" aria-label="View Source">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.73.083-.73 1.205.085 1.84 1.238 1.84 1.238 1.07 1.835 2.809 1.305 3.495.998.108-.776.418-1.305.762-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.605-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.298 24 12c0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="project-body">
                        <span class="project-category">{{ $project['category'] }}</span>
                        <h2 class="project-title">{{ $project['title'] }}</h2>
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
    </div>
</section>

@endsection
