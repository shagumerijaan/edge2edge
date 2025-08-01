<?php
require_once __DIR__ . '/include/configweb.php';

// Set page-specific SEO variables
$pageTitle = "About Us – Melbourne's Eco‑Friendly Cleaning Experts | Edge 2 Edge";
$pageDescription = "Learn how Edge 2 Edge Cleaning, based in Toorak, Victoria, uses Australian-made eco products and 5+ years' experience to deliver safe & sustainable cleaning across Melbourne.";
$pageKeywords = "Edge 2 Edge Cleaning, eco-friendly cleaning Melbourne, organic cleaning Toorak, builders cleaning Melbourne, domestic cleaning Toorak, commercial cleaning South Yarra, house cleaning Toorak, end of lease cleaning Victoria, window cleaning Melbourne, spring cleaning Toorak, deep cleaning, sanitising services, pressure washing";
$canonicalUrl = "https://www.edge2edgecleaning.com.au/about-us.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/seo-meta.php'); ?>
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Edge 2 Edge Cleaning",
      "image": "https://www.edge2edgecleaning.com.au/assets/img/logo.png",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "5/789 Malvern Road",
        "addressLocality": "Toorak",
        "addressRegion": "VIC",
        "postalCode": "3142",
        "addressCountry": "AU"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-37.8417",
        "longitude": "145.0167"
      },
      "url": "https://www.edge2edgecleaning.com.au/",
      "telephone": "+61-481-992-891",
      "openingHours": "Mo,Tu,We,Th,Fr 08:00-17:00",
      "priceRange": "$$"
    }
    </script>
    
    <?php include('style.php'); ?>
</head>

<body>
    <?php include('topbar.php'); ?>
    
    <!-- Breadcrumb Section -->
    <div class="cleaning-mini-banner">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>About Us</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="cleaning-breadcumb">
                                <a href="<?=$webRoot;?>">Home</a> / About Us
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- About Us Content -->
    <section class="cleaning-content-block about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>About Edge 2 Edge Cleaning</h2>                            
                    </div>
                </div>
            </div>                
            <div class="row">
                <div class="col-lg-7">
                    <div class="who-we-info">
                        <div class="single-info">
                            <p>Edge 2 Edge Cleaning is Melbourne's premier eco-friendly cleaning company, dedicated to providing exceptional cleaning services using only Australian-made, non-toxic products. Based in Toorak, Victoria, we have been serving residential and commercial clients across Melbourne for over 5 years.</p>
                            
                            <p>Our commitment to environmental responsibility sets us apart. We use accredited microbiology and chemistry laboratories to ensure the highest scientific standards, providing our clients with accurate and reliable results. As an independent company, we guarantee unbiased assessments and services.</p>
                            
                            <p>With more than 15 years of combined experience in environmental protection and cleaning services, we provide diverse solutions for all sizes and types of commercial and residential buildings. Our experienced staff undergo extensive training and certification, ensuring they stay current with the latest industry standards in environmental safety practices.</p>
                            
                            <p>Whether you need regular house cleaning, commercial maintenance, or specialized services like builders cleaning or end-of-lease cleaning, our dedicated professionals transform your space into a spotless environment while protecting your health and the planet.</p>
                        </div>    
                    </div> 
                </div>
                
                <div class="col-lg-5">
                    <div class="promo-video">
                        <img src="<?=$webRoot;?>assets/img/about2.jpg" alt="Edge 2 Edge Cleaning Team" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us Section -->
    <section class="cleaning-content-block about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Why Choose Edge 2 Edge?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="promo-video">
                        <img src="<?=$webRoot;?>assets/img/about-us.jpg" alt="Eco-friendly cleaning products" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="who-we-info">
                        <h3>🌿 ECO-FRIENDLY CLEANING</h3>
                        <p>We use only eco-friendly, organic products created in Australia. Our approach protects both the environment and your health by eliminating exposure to dangerous chemicals that could harm your wellbeing.</p>
                        
                        <h3>🚫 NON-TOXIC PRODUCTS</h3>
                        <p>Many conventional cleaning agents have been linked to serious health issues including cancer, ADHD, and allergies. That's why we exclusively use natural materials combined with good old-fashioned hard work. No harsh, unpleasant, or hazardous products - ever.</p>
                        
                        <h3>✅ EDGE 2 EDGE GUARANTEE</h3>
                        <p>Our work is 100% guaranteed, as are the cleaning materials and procedures we employ. If you're not entirely satisfied, we'll rectify the situation at no additional cost. No prerequisites, ifs, or buts. Still not happy? You get a free week of cleaning.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Overview -->
    <section class="cleaning-content-block about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Our Professional Cleaning Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="who-we-info">
                        <p>Don't believe anyone who tells you that professional cleaning services are a waste of money. We'll prove them wrong with cost-effective services that deliver the most exceptional cleaning experience in Australia.</p>
                        
                        <p>While you spend quality time with your family, our expert team provides top-notch services without any hassles. We're not just another cleaning company - we're your partners in maintaining a healthy, beautiful environment.</p>
                        
                        <ul class="service-list">
                            <li>✓ Residential House Cleaning</li>
                            <li>✓ Commercial Office Cleaning</li>
                            <li>✓ Builders & Construction Cleaning</li>
                            <li>✓ End of Lease Cleaning</li>
                            <li>✓ Window Cleaning</li>
                            <li>✓ Pressure Washing</li>
                            <li>✓ COVID-19 Deep Sanitizing</li>
                            <li>✓ Spring Cleaning</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="promo-video">
                        <img src="<?=$webRoot;?>assets/img/service-team.jpg" alt="Professional cleaning services" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include('footer.php'); ?>
    
    <style>
    .service-list {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }
    
    .service-list li {
        padding: 8px 0;
        font-size: 16px;
        color: #333;
    }
    
    .who-we-info h3 {
        color: #E8760C;
        margin: 20px 0 10px 0;
        font-size: 18px;
    }
    
    .cleaning-mini-banner {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('<?=$webRoot;?>assets/img/bread-cumb-bg.jpg');
        background-size: cover;
        background-position: center;
        padding: 80px 0;
        color: white;
    }
    
    .cleaning-mini-banner h1 {
        color: white;
        font-size: 36px;
        margin: 0;
    }
    
    .cleaning-breadcumb {
        text-align: right;
        font-size: 16px;
    }
    
    .cleaning-breadcumb a {
        color: #E8760C;
        text-decoration: none;
    }
    
    .cleaning-breadcumb a:hover {
        text-decoration: underline;
    }
    </style>
</body>
</html>