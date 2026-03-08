@extends('layouts.app')

@section('content')

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content reveal">
            <span class="section-tag">Let's Talk</span>
            <h1 class="page-title">Get In <span class="gradient-text">Touch</span></h1>
            <p class="page-desc">Have a project idea or want to collaborate? I'm always open to discussing new opportunities and challenges.</p>
        </div>
    </div>
    <div class="hero-orb hero-orb-1"></div>
    <div class="hero-orb hero-orb-2"></div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-grid">
            {{-- Contact Info --}}
            <div class="contact-info reveal">
                <h2 class="contact-subtitle">Let's work together</h2>
                <p class="contact-text">I'm a Full Stack Developer with 5+ years of experience building scalable web applications. Whether you need a complete web app, API development, or code review — let's talk!</p>

                <div class="contact-methods">
                    <a href="mailto:hello@harris-qaisrani.tech" class="contact-method-card glass-card">
                        <div class="contact-method-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <span class="method-label">Email</span>
                            <span class="method-value">hello@harris-qaisrani.tech</span>
                        </div>
                    </a>

                    <a href="https://linkedin.com/in/harris-qaisrani" target="_blank" class="contact-method-card glass-card">
                        <div class="contact-method-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </div>
                        <div>
                            <span class="method-label">LinkedIn</span>
                            <span class="method-value">in/harris-qaisrani</span>
                        </div>
                    </a>

                    <a href="https://github.com/harris-qaisrani" target="_blank" class="contact-method-card glass-card">
                        <div class="contact-method-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 0C5.37 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.73.083-.73 1.205.085 1.84 1.238 1.84 1.238 1.07 1.835 2.809 1.305 3.495.998.108-.776.418-1.305.762-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.605-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.298 24 12c0-6.627-5.373-12-12-12z"/></svg>
                        </div>
                        <div>
                            <span class="method-label">GitHub</span>
                            <span class="method-value">github.com/harris-qaisrani</span>
                        </div>
                    </a>

                    <div class="contact-method-card glass-card">
                        <div class="contact-method-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <span class="method-label">Location</span>
                            <span class="method-value">Pakistan (Remote Worldwide)</span>
                        </div>
                    </div>
                </div>

                <div class="contact-availability">
                    <span class="avail-dot"></span>
                    <span>Currently available for <strong>freelance & full-time</strong> opportunities</span>
                </div>
            </div>

            {{-- Contact Form (mailto based) --}}
            <div class="contact-form-wrap reveal">
                <div class="glass-card contact-form-card">
                    <h3>Send a Message</h3>
                    <form class="contact-form" id="contactForm" action="mailto:hello@harris-qaisrani.tech" method="get" enctype="text/plain">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" placeholder="John Smith" required>
                        </div>
                        <div class="form-group">
                            <label for="email-field">Your Email</label>
                            <input type="email" id="email-field" name="email" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="Project Inquiry" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="body" rows="5" placeholder="Tell me about your project..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
