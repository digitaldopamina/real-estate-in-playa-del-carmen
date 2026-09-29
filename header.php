<?php
/**
 * Shared header. Expects (optional) variables set before include:
 * $pageTitle, $pageDescription, $canonicalPath, $ogImage, $schemaJson
 */
$siteName = 'Real Estate in Playa del Carmen';
$baseUrl  = 'https://realestateinplayadelcarmen.com';
$pageTitle = $pageTitle ?? "$siteName | Condos, Villas & Investment Properties in Mexico";
$pageDescription = $pageDescription ?? "Buy your dream property in Playa del Carmen with a local, English-speaking real estate team. Condos, villas and investment properties in the Riviera Maya.";
$canonicalPath = $canonicalPath ?? '/';
$ogImage = $ogImage ?? 'https://images.pexels.com/photos/17060218/pexels-photo-17060218.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
$canonicalUrl = rtrim($baseUrl, '/') . $canonicalPath;
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$currentPath = $currentPath === '' ? '/' : $currentPath;

function isActive(string $path, string $current): string {
    if ($path === '/' ) {
        return $current === '/' ? 'active' : '';
    }
    return str_starts_with($current, $path) ? 'active' : '';
}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">

<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%230077B6'/><path d='M50 20 L80 45 V80 H62 V60 H38 V80 H20 V45 Z' fill='white'/></svg>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/lucide@latest" defer></script>
<link rel="stylesheet" href="/styles.css">

<?php if (!empty($schemaJson)): ?>
<script type="application/ld+json"><?php echo $schemaJson; ?></script>
<?php endif; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "RealEstateAgent",
  "name": "Real Estate in Playa del Carmen",
  "url": "https://realestateinplayadelcarmen.com",
  "areaServed": {
    "@type": "City",
    "name": "Playa del Carmen"
  },
  "image": "<?php echo htmlspecialchars($ogImage); ?>",
  "priceRange": "$100,000 - $2,000,000"
}
</script>
</head>
<body>
<header class="site-header" id="site-header">
  <div class="container header-inner">
    <a href="/" class="logo" aria-label="Real Estate in Playa del Carmen - Home">
      <svg width="34" height="34" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="100" height="100" rx="20" fill="#0077B6"/>
        <path d="M50 20 L80 45 V80 H62 V60 H38 V80 H20 V45 Z" fill="white"/>
      </svg>
      <span>Real Estate <em>in Playa del Carmen</em></span>
    </a>

    <nav class="main-nav" id="main-nav" aria-label="Main navigation">
      <a href="/" class="<?php echo isActive('/', $currentPath); ?>">Home</a>
      <a href="/properties" class="<?php echo isActive('/properties', $currentPath); ?>">Properties</a>
      <a href="/neighborhoods" class="<?php echo isActive('/neighborhoods', $currentPath); ?>">Neighborhoods</a>
      <a href="/investment-guide" class="<?php echo isActive('/investment-guide', $currentPath); ?>">Investment Guide</a>
      <a href="/about" class="<?php echo isActive('/about', $currentPath); ?>">About</a>
      <a href="/contact" class="<?php echo isActive('/contact', $currentPath); ?>">Contact</a>
      <a href="https://blog.realestateinplayadelcarmen.com/" class="nav-blog">Blog</a>
    </nav>

    <div class="header-actions">
      <a href="/contact" class="btn btn-primary btn-sm">Get in Touch</a>
      <button class="menu-toggle" id="menu-toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="main-nav">
        <i data-lucide="menu" aria-hidden="true"></i>
      </button>
    </div>
  </div>
</header>
<main>