# Harris Qaisrani Portfolio — Setup Guide

## Quick Start (Local)

### Prerequisites
- PHP 8.2+
- Composer
- Laravel 11

### Install & Run

```bash
# 1. Install dependencies
composer install

# 2. Copy env file (already configured for harris-qaisrani.tech)
cp .env.example .env

# 3. Generate application key
php artisan key:generate

# 4. Start local server
php artisan serve
```

Open: **http://127.0.0.1:8000**

---

## Deploy to Shared Hosting (harris-qaisrani.tech)

1. Upload **all files** to your server (e.g., via FTP or Git)
2. Point the domain's **Document Root** to `public/` — OR use the included `.htaccess` at root
3. Set file permissions: `storage/` and `bootstrap/cache/` → `775`
4. Update `.env` with your actual `APP_KEY` (run `php artisan key:generate`)
5. Set `APP_ENV=production` and `APP_DEBUG=false`

---

## Adding Your Content

### Profile Photo
- Add `profile.jpg` to `public/images/` — will show in hero
- Add `about.jpg` to `public/images/` — will show in about section
- Add `og-image.jpg` to `public/images/` — used for social sharing (1200×630px recommended)

### Editing Data
All content is in one file:
```
app/Http/Controllers/PortfolioController.php → getData()
```
Edit the arrays for: name, bio, skills, projects, experience, companies, testimonials, stats.

### CV Download
In `home.blade.php`, update the CV button href:
```html
<a href="{{ asset('files/harris-qaisrani-cv.pdf') }}" class="btn btn-outline">Download CV</a>
```
Place your CV at `public/files/harris-qaisrani-cv.pdf`.

---

## Pages & Routes

| URL | Route | View |
|---|---|---|
| `/` | `home` | `resources/views/home.blade.php` |
| `/projects` | `projects` | `resources/views/pages/projects.blade.php` |
| `/experience` | `experience` | `resources/views/pages/experience.blade.php` |
| `/contact` | `contact` | `resources/views/pages/contact.blade.php` |
| `/sitemap.xml` | `sitemap` | `resources/views/sitemap.blade.php` |
| `/robots.txt` | static | `public/robots.txt` |

---

## SEO Checklist

- ✅ `<title>` tags (unique per page)
- ✅ `<meta name="description">` (unique per page)
- ✅ `<meta name="keywords">`
- ✅ Open Graph tags (og:title, og:description, og:image, og:url)
- ✅ Twitter Card tags
- ✅ Canonical URLs
- ✅ JSON-LD structured data (Schema.org Person)
- ✅ `robots.txt`
- ✅ `sitemap.xml`
- ⬜ Add real `og-image.jpg` (1200×630px)
- ⬜ Submit sitemap to Google Search Console

---

## Project Structure

```
PORTFOLIO/
├── app/Http/Controllers/
│   └── PortfolioController.php    ← All data & page logic
├── resources/views/
│   ├── layouts/app.blade.php      ← Master layout (SEO, nav, footer)
│   ├── partials/
│   │   ├── nav.blade.php
│   │   └── footer.blade.php
│   ├── home.blade.php             ← Home (all 8 sections)
│   ├── pages/
│   │   ├── projects.blade.php
│   │   ├── experience.blade.php
│   │   └── contact.blade.php
│   └── sitemap.blade.php
├── public/
│   ├── css/app.css                ← All styles
│   ├── js/app.js                  ← All interactions
│   ├── images/                    ← Add your photos here
│   ├── .htaccess
│   └── robots.txt
├── routes/web.php
├── .env
└── composer.json
```
