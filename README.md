# Innova Crysta on Rent

Website: https://innovacrystarent.com

Plain PHP site (no database, no build step).

## Run locally

```
php -S localhost:8002
```

Open http://localhost:8002

## Deploy

Copy all files to the web root of a PHP 8+ server (Apache or Nginx + PHP-FPM).

## Blogs

- Blog list and article text: `blog.php` (`$blogs`), opened as `blog.php?slug=<slug>`
- Day plan, stops, tips and FAQs per blog: `blog_extras.php`
- Cover images: `images/blogs/`
- Sitemap: `sitemap.xml`
