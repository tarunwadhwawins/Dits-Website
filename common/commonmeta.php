<?php
  $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $current_page = str_replace($url, "", $current_url); 
  if($current_page == ""){
    $current_page = "/";
  }
  $res = mysqli_query($conn, "select * from meta_tags where slug='$current_page'");
  $check = mysqli_num_rows($res);
  if ($check > 0) {
      $row = mysqli_fetch_assoc($res);
      $title = $row['title'];
      $keyword = $row['keyword'];
      $description = $row['description'];
?>
      <title><?php echo $title; ?></title>
      <meta name="description" content="<?php echo $description; ?>"/>
      <meta name="keywords" content="<?php echo $keyword; ?>"/>
<?php
  } else {
?>
    <title></title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
<?php
  }
?>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msvalidate.01" content="3F416B44A7EE2BB4BCE8BF552AAEE8E4" />
    <meta name="robots" content="follow, index"/>
    <link rel="canonical" href="<?php echo $current_url; ?>"/>
    <meta name="author" content="Dits"/>

    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@ditstek"/>
    <meta name="twitter:title" content="<?php echo $title; ?>"/>
    <meta name="twitter:description" content="<?php echo $description; ?>"/>
    <meta name="twitter:image" content="https://ditstek.com/assets/images/logo.png"/>

    <meta property="og:title" content="<?php echo $title; ?>"/> 
    <meta property="og:url" content="<?php echo $current_url; ?>"/> 
    <meta property="og:site_name" content="DITSTEK"/> 
    <meta property="og:image" content="<?php echo $url; ?>assets/images/logo.png"/> 
    <meta property="og:type" content="website"/> 
    <meta property="og:description" content="<?php echo $description; ?>"/></code>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PQ79CWD68G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

// gtag('config', 'UA-129154793-3');

  gtag('config', 'G-PQ79CWD68G');
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "DITSTEK Innovations",
  "url": "https://ditstek.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://ditstek.com/about.php{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "DITSTEK Innovations",
  "url": "https://ditstek.com/",
  "logo": "https://ditstek.com/assets/images/logo.png",
"description": "DITSTEK is a Top Rated IT Outsourcing company delivering custom software solutions  We are providers of outsourcing, offshore software development offering custom web app and software services along with full stack remote development to global clients with flexible engagement models",
  "sameAs": [
    "https://www.facebook.com/Ditstek",
    "https://twitter.com/DitsTek",
    "https://www.instagram.com/ditstek_innovations/",
    "https://www.youtube.com/c/ditstek",
    "https://www.linkedin.com/company/ditstek-innovations"],
"address": {"@type": "PostalAddress","streetAddress": "SCO - 365, Second Floor, Sector 44 D","addressRegion": "Chandigarh","postalCode": "160047","addressCountry": "India","telephone": "+91-6239421395"}
}
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '177861686526833');
  fbq('track', 'PageView');
</script>
<noscript><img alt="image" height="1" width="1" class="fbPixel"
  src="https://www.facebook.com/tr?id=177861686526833&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WNB5R2R');</script>
<!-- End Google Tag Manager -->
      