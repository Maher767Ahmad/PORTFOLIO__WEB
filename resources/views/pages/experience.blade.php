@extends('layouts.app')

@section('content')

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content reveal">
            <span class="section-tag">Career</span>
            <h1 class="page-title">My <span class="gradient-text">Experience</span></h1>
            <p class="page-desc">My professional journey — from junior developer to senior full stack engineer, building products that matter.</p>
        </div>
    </div>
    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header reveal">
            <span class="section-tag">Work History</span>
            <h2 class="section-title">Professional <span class="gradient-text">Timeline</span></h2>
        </div>

        <div class="timeline timeline-full">
            @foreach($data['experience'] as $index => $exp)
                <div class="timeline-item reveal {{ $index % 2 === 0 ? 'left' : 'right' }}">
                    <div class="timeline-dot">
                        <div class="dot-inner"></div>
                    </div>
                    <div class="timeline-card glass-card">
                        <div class="timeline-header">
                            <div>
                                <h2 class="timeline-role">{{ $exp['role'] }}</h2>
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
                                <span class="tag {{ $tag === 'Education' ? 'tag-edu' : '' }}">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Stats Strip --}}
<section class="section stats-section">
    <div class="container">
        <div class="stats-grid reveal">
            @foreach($data['stats'] as $stat)
                <div class="stat-card glass-card">
                    <span class="stat-value gradient-text">{{ $stat['value'] }}</span>
                    <span class="stat-label">{{ $stat['label'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
