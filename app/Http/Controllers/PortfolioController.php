<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private function getData(): array
    {
        return [
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
                    'image'       => 'project-1.jpg',
                ],
                [
                    'title'       => 'E-Commerce API Platform',
                    'description' => 'RESTful API platform powering a large-scale e-commerce store with inventory management, payment gateways, and analytics dashboards.',
                    'tags'        => ['Laravel', 'Stripe', 'Redis', 'PostgreSQL'],
                    'github'      => '#',
                    'live'        => '#',
                    'category'    => 'API',
                    'image'       => 'project-2.jpg',
                ],
                [
                    'title'       => 'Real Estate Listing App',
                    'description' => 'Full-featured property listing platform with map integration, advanced search, virtual tours, and lead management CRM.',
                    'tags'        => ['Vue.js', 'Laravel', 'Maps API', 'Livewire'],
                    'github'      => '#',
                    'live'        => '#',
                    'category'    => 'Web App',
                    'image'       => 'project-3.jpg',
                ],
                [
                    'title'       => 'Healthcare Appointment System',
                    'description' => 'Doctor-patient booking system with video consultations, EHR records, prescription generator, and notification system.',
                    'tags'        => ['Laravel', 'React', 'Twilio', 'MySQL'],
                    'github'      => '#',
                    'live'        => '#',
                    'category'    => 'Web App',
                    'image'       => 'project-4.jpg',
                ],
                [
                    'title'       => 'DevOps CI/CD Dashboard',
                    'description' => 'Internal deployment dashboard integrating GitHub Actions, Docker, and server monitoring with role-based access control.',
                    'tags'        => ['Docker', 'GitHub Actions', 'Node.js', 'React'],
                    'github'      => '#',
                    'live'        => '#',
                    'category'    => 'DevOps',
                    'image'       => 'project-5.jpg',
                ],
                [
                    'title'       => 'Learning Management System',
                    'description' => 'Feature-rich LMS with course builder, video streaming, quizzes, certificates, and student analytics built for EdTech startups.',
                    'tags'        => ['Laravel', 'Vue.js', 'FFmpeg', 'AWS S3'],
                    'github'      => '#',
                    'live'        => '#',
                    'category'    => 'Web App',
                    'image'       => 'project-6.jpg',
                ],
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
                ],
                [
                    'role'        => 'Computer Science',
                    'company'     => 'COMSATS University',
                    'period'      => '2015 – 2019',
                    'location'    => 'Islamabad, Pakistan',
                    'description' => 'Bachelor\'s degree in Computer Science. Graduated with distinction, final year project in AI-based web systems.',
                    'tags'        => ['Education'],
                ],
            ],

            'companies' => [
                ['name' => 'TechNova Solutions',  'logo' => null],
                ['name' => 'PixelCraft Agency',   'logo' => null],
                ['name' => 'Soft Horizon',        'logo' => null],
                ['name' => 'NexGen Digital',      'logo' => null],
                ['name' => 'CloudBase Inc',       'logo' => null],
                ['name' => 'DataStream Labs',     'logo' => null],
                ['name' => 'AppWorks Studio',     'logo' => null],
                ['name' => 'Orbit Media',         'logo' => null],
            ],

            'testimonials' => [
                [
                    'name'    => 'Sarah Mitchell',
                    'role'    => 'CTO at TechNova Solutions',
                    'avatar'  => null,
                    'quote'   => 'Harris is an exceptional developer who consistently delivers outstanding results. His technical depth in Laravel is remarkable, and he communicates clearly with both technical and non-technical stakeholders.',
                    'stars'   => 5,
                ],
                [
                    'name'    => 'James Thornton',
                    'role'    => 'Founder at PixelCraft Agency',
                    'avatar'  => null,
                    'quote'   => 'Working with Harris transformed our agency\'s capabilities. He built our platform from scratch and delivered on time with exceptional quality. A true professional.',
                    'stars'   => 5,
                ],
                [
                    'name'    => 'Ayesha Raza',
                    'role'    => 'Product Manager at CloudBase Inc',
                    'avatar'  => null,
                    'quote'   => 'Harris brought our vision to life with precision and creativity. His attention to detail and proactive attitude made the entire development process smooth and enjoyable.',
                    'stars'   => 5,
                ],
                [
                    'name'    => 'Michael Chen',
                    'role'    => 'CEO at DataStream Labs',
                    'avatar'  => null,
                    'quote'   => 'Incredible work ethic and technical skills. Harris rewrote our legacy system into a modern Laravel microservices architecture, cutting load time by 60%.',
                    'stars'   => 5,
                ],
            ],

            'stats' => [
                ['label' => 'Years of Experience', 'value' => '5+'],
                ['label' => 'Projects Delivered',  'value' => '80+'],
                ['label' => 'Happy Clients',        'value' => '50+'],
                ['label' => 'GitHub Repos',         'value' => '40+'],
            ],
        ];
    }

    public function home()
    {
        $data = $this->getData();
        $seo = [
            'title'       => 'Harris Qaisrani — Full Stack Developer | Laravel & React Expert',
            'description' => 'Harris Qaisrani is a Full Stack Developer specializing in Laravel, React, and scalable web applications. Based in Pakistan, available worldwide. Email: hello@harris-qaisrani.tech',
            'keywords'    => 'Harris Qaisrani, Full Stack Developer, Laravel Developer, React Developer, Web Developer Pakistan, hire developer, portfolio',
            'canonical'   => 'https://harris-qaisrani.tech/',
            'og_image'    => 'https://harris-qaisrani.tech/images/og-image.jpg',
        ];
        return view('home', compact('data', 'seo'));
    }

    public function projects()
    {
        $data = $this->getData();
        $seo = [
            'title'       => 'Projects — Harris Qaisrani | Full Stack Developer',
            'description' => 'Explore Harris Qaisrani\'s portfolio of web development projects including SaaS platforms, APIs, e-commerce systems, and more.',
            'keywords'    => 'Harris Qaisrani projects, portfolio, Laravel projects, React projects, web development',
            'canonical'   => 'https://harris-qaisrani.tech/projects',
            'og_image'    => 'https://harris-qaisrani.tech/images/og-image.jpg',
        ];
        return view('pages.projects', compact('data', 'seo'));
    }

    public function experience()
    {
        $data = $this->getData();
        $seo = [
            'title'       => 'Experience — Harris Qaisrani | Full Stack Developer',
            'description' => 'Harris Qaisrani\'s professional experience and education timeline — from junior developer to senior full stack engineer.',
            'keywords'    => 'Harris Qaisrani experience, work history, developer career, Laravel developer career',
            'canonical'   => 'https://harris-qaisrani.tech/experience',
            'og_image'    => 'https://harris-qaisrani.tech/images/og-image.jpg',
        ];
        return view('pages.experience', compact('data', 'seo'));
    }

    public function contact()
    {
        $data = $this->getData();
        $seo = [
            'title'       => 'Contact — Harris Qaisrani | Full Stack Developer',
            'description' => 'Get in touch with Harris Qaisrani for freelance projects, collaborations, or full-time opportunities. Email: hello@harris-qaisrani.tech',
            'keywords'    => 'contact Harris Qaisrani, hire developer, freelance Laravel developer',
            'canonical'   => 'https://harris-qaisrani.tech/contact',
            'og_image'    => 'https://harris-qaisrani.tech/images/og-image.jpg',
        ];
        return view('pages.contact', compact('data', 'seo'));
    }

    public function sitemap()
    {
        $urls = [
            ['loc' => 'https://harris-qaisrani.tech/',            'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => 'https://harris-qaisrani.tech/projects',    'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => 'https://harris-qaisrani.tech/experience',  'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => 'https://harris-qaisrani.tech/contact',     'priority' => '0.7', 'changefreq' => 'yearly'],
        ];
        return response(view('sitemap', compact('urls')), 200)
               ->header('Content-Type', 'application/xml');
    }
}
