<?php
require_once __DIR__ . '/include/configweb.php';

// Set page-specific SEO variables
$pageTitle = "Professional Cleaning Services Melbourne | Edge 2 Edge Cleaning";
$pageDescription = "Edge 2 Edge offers premium cleaning services across Melbourne - from domestic cleaning to commercial pressure washing. Eco-friendly solutions since 2018. Book online today!";
$pageKeywords = "cleaning services Melbourne, house cleaners, commercial cleaning, end of lease cleaning, window cleaning, pressure washing, eco-friendly cleaners, office cleaning, professional cleaners";
$canonicalUrl = "https://www.edge2edgecleaning.com.au/services.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/seo-meta.php'); ?>
    
    <!-- Services Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Edge 2 Edge Cleaning",
      "description": "Comprehensive cleaning services provider in Melbourne",
      "serviceArea": {
        "@type": "AdministrativeArea",
        "name": "Melbourne, VIC"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Cleaning Services",
        "itemListElement": [
          {
            "@type": "OfferCatalog",
            "name": "Residential Cleaning",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Regular House Cleaning"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "End of Lease Cleaning"
                }
              }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "Commercial Cleaning",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Office Cleaning"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Pressure Washing"
                }
              }
            ]
          }
        ]
      }
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
                            <h1>Our Services</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="cleaning-breadcumb">
                                <a href="<?=$webRoot;?>">Home</a> / Services
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Services Section -->
    <section class="services-provide pt-100 pb-70 gray-bg">
        <div class="container">
            <div class="section-title2">
                <h4>Our Services</h4>
                <h2>Bringing Joy with Exquisite Professional Cleaning Services</h2>
            </div>
            
            <div class="row">
                <!-- Builders Cleaning -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-pro-service">
                        <div class="pro-img">
                            <img src="<?=$webRoot;?>assets/img/builder-cleaning.jpg" alt="Builders Cleaning Melbourne">
                        </div>
                        <div class="p-serv-caption">
                            <h3>Builders Cleaning</h3>
                            <p>A builders clean encompasses a thorough cleaning of all project areas, including kitchens, bathrooms, bedrooms, joinery, floors, walls, skirtings, windows, and frames, essential for all builders.</p>
                            <a href="<?=$webRoot;?>builders-cleaning.php" class="pro-serv-btn">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- Window Cleaning -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-pro-service">
                        <div class="pro-img">
                            <img src="<?=$webRoot;?>assets/img/windowcleaning.jpg" alt="Window Cleaning Melbourne">
                        </div>
                        <div class="p-serv-caption">
                            <h3>Window Cleaning</h3>
                            <p>Window cleaning involves cleaning architectural glass for structural, lighting, or decorative purposes, utilizing manual tools, access equipment, and automation.</p>
                            <a href="<?=$webRoot;?>window-cleaning.php" class="pro-serv-btn">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- House Cleaning -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-pro-service">
                        <div class="pro-img">
                            <img src="<?=$webRoot;?>assets/img/cleaning-home.jpg" alt="House Cleaning Melbourne">
                        </div>
                        <div class="p-serv-caption">
                            <h3>House Cleaning</h3>
                            <p>House cleaning is a comprehensive service encompassing tasks like kitchen, lounge, bathroom, and bedroom cleaning, including mopping, vacuuming, dusting, polishing, and sweeping.</p>
                            <a href="<?=$webRoot;?>house-cleaning.php" class="pro-serv-btn">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- Domestic Cleaning -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-pro-service">
                        <div class="pro-img">
                            <img src="<?=$webRoot;?>assets/img/domestic.jpg" alt="Domestic Cleaning Melbourne">
                        </div>
                        <div class="p-serv-caption">
                            <h3>Domestic Cleaning</h3>
                            <p>Domestic cleaning involves performing cleaning tasks within a private residential home, typically encompassing activities like dusting, vacuuming, mopping, and cleaning bathrooms and kitchens.</p>
                            <a href="<?=$webRoot;?>domestic-cleaning.php" class="pro-serv-btn">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- Spring Cleaning -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-pro-service">
                        <div class="pro-img">
                            <img src="<?=$webRoot;?>assets/img/service08.jpg" alt="Spring Cleaning Melbourne">
                        </div>
                        <div class="p-serv-caption">
                            <h3>Spring Cleaning</h3>
                            <p>Spring cleaning, typically undertaken in colder climates after winter, involves a thorough house cleaning during spring, but in some cultures, annual cleaning occurs at year-end.</p>
                            <a href="<?=$webRoot;?>spring-cleaning.php" class="pro-serv-btn">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- Pressure Washing -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-pro-service">
                        <div class="pro-img">
                            <img src="<?=$webRoot;?>assets/img/pressure-washing.jpg" alt="Pressure Washing Melbourne">
                        </div>
                        <div class="p-serv-caption">
                            <h3>Pressure Washing</h3>
                            <p>Pressure washing is a cleaning technique that uses high-pressure water spray to remove dirt and grime from surfaces.</p>
                            <a href="<?=$webRoot;?>pressure-washing.php" class="pro-serv-btn">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- End of Lease Cleaning -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-pro-service">
                        <div class="pro-img">
                            <img src="<?=$webRoot;?>assets/img/end-of-lease.jpg" alt="End of Lease Cleaning Melbourne">
                        </div>
                        <div class="p-serv-caption">
                            <h3>End of Lease Cleaning</h3>
                            <p>Professional end of lease cleaning to ensure you get your bond back. Comprehensive cleaning of all areas to meet real estate standards.</p>
                            <a href="<?=$webRoot;?>end-of-lease-cleaning.php" class="pro-serv-btn">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- Commercial Cleaning -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-pro-service">
                        <div class="pro-img">
                            <img src="<?=$webRoot;?>assets/img/commercial-cleaning.jpg" alt="Commercial Cleaning Melbourne">
                        </div>
                        <div class="p-serv-caption">
                            <h3>Commercial Cleaning</h3>
                            <p>Professional commercial cleaning services for offices, retail spaces, and business premises. Maintaining a clean, healthy work environment.</p>
                            <a href="<?=$webRoot;?>commercial-cleaning.php" class="pro-serv-btn">View Details</a>
                        </div>
                    </div>
                </div>
                
                <!-- COVID-19 Deep Cleaning -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-pro-service">
                        <div class="pro-img">
                            <img src="<?=$webRoot;?>assets/img/covid-cleaning.jpg" alt="COVID-19 Deep Cleaning Melbourne">
                        </div>
                        <div class="p-serv-caption">
                            <h3>COVID-19 Deep Cleaning</h3>
                            <p>Specialized sanitization and deep cleaning services to ensure your space is safe and hygienic. Using hospital-grade disinfectants.</p>
                            <a href="<?=$webRoot;?>covid-cleaning.php" class="pro-serv-btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include('footer.php'); ?>
    
    <style>
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
    
    .section-title2 h2 {
        color: #333;
        font-size: 32px;
        margin-bottom: 30px;
    }
    
    .section-title2 h4 {
        color: #E8760C;
        font-size: 18px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }
    
    .pro-serv-btn {
        background: #E8760C;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
        margin-top: 15px;
        transition: background 0.3s ease;
    }
    
    .pro-serv-btn:hover {
        background: #d66a0b;
        color: white;
        text-decoration: none;
    }
    </style>
</body>
</html>