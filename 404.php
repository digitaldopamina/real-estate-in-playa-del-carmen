<?php
http_response_code(404);
$pageTitle = 'Page Not Found | Real Estate in Playa del Carmen';
$pageDescription = 'The page you are looking for does not exist. Explore our properties, neighborhoods and investment guide instead.';
$canonicalPath = '/404';
include 'header.php';
?>
<section class="section" style="min-height:60vh; display:flex; align-items:center;">
  <div class="container text-center">
    <span class="eyebrow">404</span>
    <h1>This page washed away with the tide 🌊</h1>
    <p style="max-width:520px; margin:0 auto var(--space-5);">The page you're looking for doesn't exist anymore, or the URL is incorrect. Let's get you back on track.</p>
    <div class="hero-actions" style="justify-content:center;">
      <a href="/" class="btn btn-primary">Back to Home</a>
      <a href="/properties" class="btn btn-ghost">Browse Properties</a>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>