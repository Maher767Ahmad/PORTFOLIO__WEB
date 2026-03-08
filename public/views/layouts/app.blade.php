<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Primary SEO --}}
    <title>{{ $seo['title'] ?? 'Harris Qaisrani — Full Stack Developer' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Harris Qaisrani is a Full Stack Developer specializing in Laravel, React, and scalable web applications.' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? 'Harris Qaisrani, Full Stack Developer, Laravel, React' }}">
    <meta name="author" content="Harris Qaisrani">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ $seo['canonical'] ?? 'https://harris-qaisrani.tech/' }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $seo['canonical'] ?? 'https://harris-qaisrani.tech/' }}">
    <meta property="og:title" content="{{ $seo['title'] ?? 'Harris Qaisrani — Full Stack Developer' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
    <meta property="og:image" content="{{ $seo['og_image'] ?? 'https://harris-qaisrani.tech/images/og-image.jpg' }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Harris Qaisrani Portfolio">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@harris_qaisrani">
    <meta name="twitter:creator" content="@harris_qaisrani">
    <meta name="twitter:title" content="{{ $seo['title'] ?? 'Harris Qaisrani — Full Stack Developer' }}">
    <meta name="twitter:description" content="{{ $seo['description'] ?? '' }}">
    <meta name="twitter:image" content="{{ $seo['og_image'] ?? 'https://harris-qaisrani.tech/images/og-image.jpg' }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- JSON-LD Structured Data --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Harris Qaisrani",
        "url": "https://harris-qaisrani.tech",
        "email": "hello@harris-qaisrani.tech",
        "jobTitle": "Full Stack Developer",
        "description": "Full Stack Developer specializing in Laravel, React, and scalable web applications.",
        "sameAs": [
            "https://github.com/harris-qaisrani",
            "https://linkedin.com/in/harris-qaisrani",
            "https://twitter.com/harris_qaisrani"
        ],
        "knowsAbout": ["Laravel", "PHP", "React.js", "Vue.js", "Node.js", "MySQL", "REST APIs", "Docker"],
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "PK"
        }
    }
    </script>
</head>
<body>

    {{-- Navigation --}}
    @include('partials.nav')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
