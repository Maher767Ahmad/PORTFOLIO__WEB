<?php
$data = [
    'name'      => 'Harris Qaisrani',
    'title'     => 'Full Stack Developer',
    'tagline'   => 'I build elegant, high-performance web applications.',
    'email'     => 'hello@harris-qaisrani.tech',
    'domain'    => 'harris-qaisrani.tech',
    'location'  => 'Pakistan',
    'github'    => 'https://github.com/harris-qaisrani',
    'linkedin'  => 'https://linkedin.com/in/harris-qaisrani',
    'twitter'   => 'https://twitter.com/harris_qaisrani',

    'about' => 'I am a passionate Full Stack Developer with expertise in building scalable, modern web applications. I specialize in Laravel, React, and cloud-native architectures. With a strong eye for design and a love for clean code, I craft digital experiences that are fast, accessible, and beautiful.',

    'skills' => [
        ['name' => 'Laravel / PHP',  'level' => 95, 'icon' => '🟠'],
        ['name' => 'React.js',        'level' => 88, 'icon' => '🔵'],
        ['name' => 'Vue.js',          'level' => 80, 'icon' => '🟢'],
        ['name' => 'Node.js',         'level' => 82, 'icon' => '🟩'],
        ['name' => 'MySQL / PostgreSQL', 'level' => 90, 'icon' => '🗄️'],
        ['name' => 'Tailwind CSS',    'level' => 92, 'icon' => '💎'],
        ['name' => 'Docker / DevOps', 'level' => 75, 'icon' => '🐳'],
        ['name' => 'REST APIs',       'level' => 95, 'icon' => '⚡'],
    ],

    'projects' => [
        [
            'title'       => 'SaaS Project Management Platform',
            'description' => 'A multi-tenant project management tool built with Laravel & React, featuring real-time collaboration, Kanban boards, and advanced reporting.',
            'tags'        => ['Laravel', 'React', 'WebSockets', 'MySQL'],
            'github'      => '#',
            'live'        => '#',
            'category'    => 'Web App',
            'image'       => 'project1.png',
        ],
        [
            'title'       => 'E-Commerce API Platform',
            'description' => 'RESTful API platform powering a large-scale e-commerce store with inventory management, payment gateways, and analytics dashboards.',
            'tags'        => ['Laravel', 'Stripe', 'Redis', 'PostgreSQL'],
            'github'      => '#',
            'live'        => '#',
            'category'    => 'API',
            'image'       => 'project2.png',
        ],
        [
            'title'       => 'Real Estate Listing App',
            'description' => 'Full-featured property listing platform with map integration, advanced search, virtual tours, and lead management CRM.',
            'tags'        => ['Vue.js', 'Laravel', 'Maps API', 'Livewire'],
            'github'      => '#',
            'live'        => '#',
            'category'    => 'Web App',
            'image'       => 'project3.png',
        ]
    ],

    'experience' => [
        [
            'role'        => 'Senior Full Stack Developer',
            'company'     => 'TechNova Solutions',
            'period'      => 'Jan 2023 – Present',
            'location'    => 'Remote',
            'description' => 'Leading development of enterprise SaaS products. Architecting microservices, mentoring junior devs, and improving system performance by 40%.',
            'tags'        => ['Laravel', 'React', 'Docker', 'AWS'],
        ],
        [
            'role'        => 'Full Stack Developer',
            'company'     => 'PixelCraft Agency',
            'period'      => 'Mar 2021 – Dec 2022',
            'location'    => 'Lahore, Pakistan',
            'description' => 'Developed 20+ client websites and web applications. Specialized in Laravel APIs and React frontends for international clients.',
            'tags'        => ['Laravel', 'Vue.js', 'MySQL', 'REST API'],
        ],
        [
            'role'        => 'Junior Web Developer',
            'company'     => 'Soft Horizon Pvt Ltd',
            'period'      => 'Jun 2019 – Feb 2021',
            'location'    => 'Islamabad, Pakistan',
            'description' => 'Delivered custom web solutions for SMEs. Worked on CMS platforms, CRM systems, and payment gateway integrations.',
            'tags'        => ['PHP', 'JavaScript', 'Bootstrap', 'MySQL'],
        ]
    ],

    'companies' => [
        ['name' => 'TechNova Solutions'],
        ['name' => 'PixelCraft Agency'],
        ['name' => 'Soft Horizon'],
        ['name' => 'NexGen Digital'],
        ['name' => 'CloudBase Inc'],
        ['name' => 'DataStream Labs']
    ],

    'testimonials' => [
        [
            'name'    => 'Sarah Mitchell',
            'role'    => 'CTO at TechNova Solutions',
            'quote'   => 'Harris is an exceptional developer who consistently delivers outstanding results. His technical depth in Laravel is remarkable.',
            'stars'   => 5,
            'image'   => 'https://randomuser.me/api/portraits/women/44.jpg',
        ],
        [
            'name'    => 'James Thornton',
            'role'    => 'Founder at PixelCraft Agency',
            'quote'   => 'Working with Harris transformed our agency\'s capabilities. He built our platform from scratch and delivered on time.',
            'stars'   => 5,
            'image'   => 'https://randomuser.me/api/portraits/men/32.jpg',
        ]
    ],

    'stats' => [
        ['label' => 'Years of Experience', 'value' => '5+'],
        ['label' => 'Projects Delivered',  'value' => '80+'],
        ['label' => 'Happy Clients',        'value' => '50+'],
        ['label' => 'GitHub Repos',         'value' => '40+'],
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harris Qaisrani — Full Stack Developer</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css?v=1.6">
</head>
<body>

    <!-- NAV -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="nav-brand">
                <span class="brand-dot"></span>
                <span class="brand-text">Harris<span class="brand-accent">.</span></span>
            </a>
            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#experience" class="nav-link">Experience</a></li>
                <li><a href="#companies" class="nav-link">Companies</a></li>
                <li><a href="#testimonials" class="nav-link">Reviews</a></li>
                <li><a href="#contact-cta" class="nav-link">Contact</a></li>
                <li><a href="mailto:hello@harris-qaisrani.tech" class="nav-cta">Hire Me</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO -->
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
                    <span class="badge-dot"></span> Available for new projects
                </div>
                <h1 class="hero-title">Hi, I'm <span class="gradient-text">Harris Qaisrani</span></h1>
                <div class="hero-typed-wrapper">
                    <span class="hero-typed" id="typedText"></span>
                    <span class="typed-cursor">|</span>
                </div>
                <p class="hero-desc"><?php echo $data['about']; ?></p>
                <div class="hero-actions">
                    <a href="#projects" class="btn btn-primary">View My Work</a>
                    <a href="mailto:hello@harris-qaisrani.tech" class="btn btn-outline">Get In Touch</a>
                </div>
                <div class="hero-stats">
                    <?php foreach($data['stats'] as $stat): ?>
                        <div class="stat-item">
                            <span class="stat-value gradient-text"><?php echo $stat['value']; ?></span>
                            <span class="stat-label"><?php echo $stat['label']; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="hero-image-wrap">
                <div class="hero-image-ring hero-ring-1"></div>
                <div class="hero-image-ring hero-ring-2"></div>
                <div class="hero-image-ring hero-ring-3"></div>
                <div class="hero-avatar">
                    <img src="images/hero.png" alt="Harris Qaisrani" id="heroImg" onerror="this.style.display='none'; document.getElementById('heroPlaceholder').style.display='flex';">
                    <div class="hero-placeholder" id="heroPlaceholder"><span>Add Your Photo</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="section about-section" id="about">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">Get to know me</span>
                <h2 class="section-title">About <span class="gradient-text">Me</span></h2>
            </div>
            <div class="about-grid">
                <div class="about-image-col reveal">
                    <div class="about-image-frame">
                        <img src="images/about.png" alt="Harris Qaisrani" class="about-img" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="about-img-placeholder"><span>Your Photo Here</span></div>
                        <div class="about-experience-badge"><strong>5+</strong><span>Years of<br>Experience</span></div>
                    </div>
                </div>
                <div class="about-content-col reveal">
                    <h3 class="about-subtitle">Full Stack Developer based in Pakistan</h3>
                    <p class="about-text"><?php echo $data['about']; ?></p>
                    <div class="about-info-grid">
                        <div class="info-item"><span class="info-label">Location</span><span class="info-value">📍 Pakistan</span></div>
                        <div class="info-item"><span class="info-label">Availability</span><span class="info-value available">🟢 Available</span></div>
                        <div class="info-item"><span class="info-label">Email</span><span class="info-value"><a href="mailto:hello@harris-qaisrani.tech">hello@harris-qaisrani.tech</a></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section class="section skills-section" id="skills">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">What I work with</span>
                <h2 class="section-title">My <span class="gradient-text">Skills</span></h2>
            </div>
            <div class="skills-grid">
                <?php foreach($data['skills'] as $skill): ?>
                    <div class="skill-card reveal">
                        <div class="skill-header">
                            <span class="skill-icon"><?php echo $skill['icon']; ?></span>
                            <div class="skill-info">
                                <span class="skill-name"><?php echo $skill['name']; ?></span>
                                <span class="skill-level-label"><?php echo $skill['level']; ?>%</span>
                            </div>
                        </div>
                        <div class="skill-bar-wrap">
                            <div class="skill-bar" data-level="<?php echo $skill['level']; ?>">
                                <div class="skill-bar-fill"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="section projects-section" id="projects">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">What I've built</span>
                <h2 class="section-title">Featured <span class="gradient-text">Projects</span></h2>
            </div>
            <div class="projects-grid">
                <?php foreach($data['projects'] as $project): ?>
                    <div class="project-card reveal">
                        <div class="project-img-wrap">
                            <?php if(isset($project['image']) && $project['image']): ?>
                                <img src="images/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            <?php else: ?>
                                <div class="project-img-placeholder"><span>Image</span></div>
                            <?php endif; ?>
                        </div>
                        <div class="project-body">
                            <span class="project-category"><?php echo $project['category']; ?></span>
                            <h3 class="project-title"><?php echo $project['title']; ?></h3>
                            <p class="project-desc"><?php echo $project['description']; ?></p>
                            <div class="project-tags">
                                <?php foreach($project['tags'] as $tag): ?>
                                    <span class="tag"><?php echo $tag; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- EXPERIENCE -->
    <section class="section experience-section" id="experience">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">My professional journey</span>
                <h2 class="section-title">Work <span class="gradient-text">Experience</span></h2>
            </div>
            <div class="timeline">
                <?php foreach(array_slice($data['experience'], 0, 3) as $i => $exp): ?>
                    <div class="timeline-item reveal <?php echo $i % 2 == 0 ? 'timeline-left' : 'timeline-right'; ?>">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-role"><?php echo $exp['role']; ?></h3>
                            <div class="timeline-meta">
                                <span class="company"><?php echo $exp['company']; ?></span>
                                <span class="period"><?php echo $exp['period']; ?></span>
                            </div>
                            <p class="timeline-desc"><?php echo $exp['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- COMPANIES -->
    <section class="companies-section" id="companies">
        <div class="container">
            <h3 class="companies-title reveal">Trusted by innovative companies</h3>
            <div class="marquee-wrap reveal">
                <div class="marquee" id="marquee">
                    <div class="marquee-content">
                        <?php foreach($data['companies'] as $company): ?>
                            <div class="company-logo"><?php echo $company['name']; ?></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="marquee-content" aria-hidden="true">
                        <?php foreach($data['companies'] as $company): ?>
                            <div class="company-logo" aria-hidden="true"><?php echo $company['name']; ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="section testimonials-section" id="testimonials">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">What clients say</span>
                <h2 class="section-title">Client <span class="gradient-text">Reviews</span></h2>
            </div>
            
            <div class="testimonials-carousel reveal" id="testimonialsCarousel">
                <div class="carousel-track" id="carouselTrack">
                    <?php foreach($data['testimonials'] as $review): ?>
                        <div class="testimonial-card">
                            <div class="stars">
                                <?php for($i=0; $i<$review['stars']; $i++): ?>★<?php endfor; ?>
                            </div>
                            <p class="quote">"<?php echo $review['quote']; ?>"</p>
                            <div class="testimonial-author">
                                <div class="author-avatar">
                                    <?php if(isset($review['image']) && $review['image']): ?>
                                        <img src="<?php echo $review['image']; ?>" alt="<?php echo $review['name']; ?>" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
                                    <?php else: ?>
                                        <?php echo mb_substr($review["name"], 0, 1, "UTF-8"); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="author-info">
                                    <strong><?php echo $review['name']; ?></strong>
                                    <span><?php echo $review['role']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <div class="carousel-controls reveal">
                <button class="carousel-btn prev" id="carouselPrev" aria-label="Previous Review">←</button>
                <button class="carousel-btn next" id="carouselNext" aria-label="Next Review">→</button>
            </div>
        </div>
    </section>

    <!-- CONTACT CTA -->
    <section class="section contact-cta-section" id="contact-cta">
        <div class="container">
            <div class="cta-box reveal">
                <div class="cta-content">
                    <h2 class="cta-title">Ready to build something amazing?</h2>
                    <p class="cta-desc">I am currently available for new projects or full-time roles. Let's discuss how I can help bring your ideas to life.</p>
                </div>
                <div class="cta-actions">
                    <a href="mailto:<?php echo $data['email']; ?>" class="btn btn-primary">Say Hello</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#" class="nav-brand">
                        <span class="brand-dot"></span>
                        <span class="brand-text">Harris<span class="brand-accent">.</span></span>
                    </a>
                    <p class="footer-tagline"><?php echo $data['tagline']; ?></p>
                </div>
                
                <div class="footer-links-col">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#about">About</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#experience">Experience</a></li>
                    </ul>
                </div>

                <div class="footer-links-col">
                    <h4 class="footer-heading">Let's Connect</h4>
                    <div class="footer-social-icons">
                        <a href="<?php echo $data['github']; ?>" target="_blank" rel="noopener" class="social-icon-box" aria-label="GitHub">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        </a>
                        <a href="<?php echo $data['linkedin']; ?>" target="_blank" rel="noopener" class="social-icon-box" aria-label="LinkedIn">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        <a href="<?php echo $data['twitter']; ?>" target="_blank" rel="noopener" class="social-icon-box" aria-label="Twitter">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Harris Qaisrani. Built with Laravel.</p>
            </div>
        </div>
    </footer>
    <script src="js/app.js?v=1.3"></script>
</body>
</html>
