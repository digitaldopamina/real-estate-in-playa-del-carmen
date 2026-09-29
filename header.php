<?php
/**
 * Shared header (multilingual). Expects, set by each page BEFORE include:
 *   $lang (en|es|fr), $pageKey (home|properties|neighborhoods|investment|about|contact|404)
 * Optional: $pageTitle, $pageDescription, $ogImage, $schemaJson, $noindex
 */
require_once __DIR__ . '/lang.php';

$lang = in_array($lang ?? 'en', SUPPORTED_LANGS, true) ? $lang : 'en';
$pageKey = $pageKey ?? 'home';

$siteName = 'Real Estate in Playa del Carmen';
$pageTitle = $pageTitle ?? ui('default_title');
$pageDescription = $pageDescription ?? ui('default_desc');
$ogImage = $ogImage ?? 'https://images.pexels.com/photos/17060218/pexels-photo-17060218.jpeg?auto=compress&cs=tinysrgb&h=650&w=940';
$noindex = $noindex ?? false;
$canonicalUrl = BASE_URL . route_url($pageKey, $lang);

$LANG_FLAGS = ['en' => '🇬🇧', 'es' => '🇲🇽', 'fr' => '🇫🇷'];

function isActive(string \$key, string \$current): string {
    return $key === $current ? 'active' : '';
}
?><!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
<meta charset="UTF-8">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ($noindex): ?>
<meta name="robots" content="noindex, follow">
<?php else: ?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
<?php foreach (SUPPORTED_LANGS as $l): ?>
<link rel="alternate" hreflang="<?php echo $l; ?>" href="<?php echo htmlspecialchars(BASE_URL . route_url($pageKey, $l)); ?>">
<?php endforeach; ?>
<link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars(BASE_URL . route_url($pageKey, 'en')); ?>">
<?php endif; ?>

<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
<meta property="og:locale" content="<?php echo $LANG_META[$lang]['locale']; ?>">
<?php foreach (SUPPORTED_LANGS as $l): if ($l === $lang) continue; ?>
<meta property="og:locale:alternate" content="<?php echo $LANG_META[$l]['locale']; ?>">
<?php endforeach; ?>
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
<?php echo json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'RealEstateAgent',
    'name' => $siteName,
    'url' => BASE_URL . '/' . $lang . '/',
    'description' => ui('schema_desc'),
    'inLanguage' => $lang,
    'areaServed' => ['@type' => 'City', 'name' => 'Playa del Carmen'],
    'image' => $ogImage,
    'telephone' => '+52 984 801 5201',
    'priceRange' => '$100,000 - $2,000,000',
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>

</script>
</head>
<body>
<header class="site-header" id="site-header">
  <div class="container header-inner">
    <a href="<?php echo L('home'); ?>" class="logo" aria-label="<?php echo htmlspecialchars(ui('aria_home')); ?>">
      <svg width="34" height="34" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="100" height="100" rx="20" fill="#0077B6"/>
        <path d="M50 20 L80 45 V80 H62 V60 H38 V80 H20 V45 Z" fill="white"/>
      </svg>
      <span>Real Estate <em>in Playa del Carmen</em></span>
    </a>

    <nav class="main-nav" id="main-nav" aria-label="<?php echo htmlspecialchars(ui('aria_nav')); ?>">
      <a href="<?php echo L('home'); ?>" class="<?php echo isActive('home', $pageKey); ?>"><?php echo ui('nav_home'); ?></a>
      <a href="<?php echo L('properties'); ?>" class="<?php echo isActive('properties', $pageKey); ?>"><?php echo ui('nav_properties'); ?></a>
      <a href="<?php echo L('neighborhoods'); ?>" class="<?php echo isActive('neighborhoods', $pageKey); ?>"><?php echo ui('nav_neighborhoods'); ?></a>
      <a href="<?php echo L('investment'); ?>" class="<?php echo isActive('investment', $pageKey); ?>"><?php echo ui('nav_investment'); ?></a>
      <a href="<?php echo L('about'); ?>" class="<?php echo isActive('about', $pageKey); ?>"><?php echo ui('nav_about'); ?></a>
      <a href="<?php echo L('contact'); ?>" class="<?php echo isActive('contact', $pageKey); ?>"><?php echo ui('nav_contact'); ?></a>
      <a href="https://blog.realestateinplayadelcarmen.com/" class="nav-blog" hreflang="en"><?php echo ui('nav_blog'); ?></a>
    </nav>

    <div class="header-actions">
      <div class="lang-switcher" role="group" aria-label="<?php echo htmlspecialchars(ui('aria_lang')); ?>">
        <i data-lucide="globe" aria-hidden="true"></i>
        <?php foreach (SUPPORTED_LANGS as $l): ?>
          <a href="<?php echo route_url($pageKey === '404' ? 'home' : $pageKey, $l); ?>"
             hreflang="<?php echo $l; ?>" lang="<?php echo $l; ?>"
             title="<?php echo htmlspecialchars($LANG_META[$l]['name']); ?>"
             class="<?php echo $l === $lang ? 'active' : ''; ?>"
             <?php echo $l === $lang ? 'aria-current="true"' : ''; ?>><?php echo $LANG_FLAGS[$l]; ?> <?php echo $LANG_META[$l]['label']; ?></a>
        <?php endforeach; ?>
      </div>

      <button class="menu-toggle" id="menu-toggle" aria-label="<?php echo htmlspecialchars(ui('aria_menu')); ?>" aria-expanded="false" aria-controls="main-nav">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
    </div>
  </div>
</header>
<main>
