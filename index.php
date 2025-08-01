<?php
require_once __DIR__ . '/include/configweb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Essential Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Eco Cleaning Melbourne | Edge 2 Edge – Safe & Organic Professional Cleaning</title>
    <meta name="description" content="Professional eco-friendly cleaning services in Melbourne. Residential, commercial & end-of-lease cleaning using non-toxic, Australian-made products. Book Edge 2 Edge Cleaning today!">
    <meta name="keywords" content="Eco-friendly cleaning Melbourne, Organic cleaner Australia, Builders clean Toorak, Domestic cleaning Melbourne, Edge 2 Edge cleaning services, Commercial cleaning Victoria, End of lease cleaning, Professional cleaners Melbourne">
    <meta name="author" content="Edge 2 Edge Cleaning">
    <meta name="robots" content="index, follow">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.edge2edgecleaning.com.au/">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Eco-Friendly Professional Cleaning Services Melbourne | Edge 2 Edge Cleaning">
    <meta property="og:description" content="Book eco-friendly, non-toxic home, office & commercial cleaning using Australian-made products. Professional cleaning services across Melbourne.">
    <meta property="og:image" content="https://www.edge2edgecleaning.com.au/assets/img/builder-cleaning.jpg">
    <meta property="og:url" content="https://www.edge2edgecleaning.com.au/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Edge 2 Edge Cleaning">
    <meta property="og:locale" content="en_AU">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Eco-Friendly Professional Cleaning Services Melbourne">
    <meta name="twitter:description" content="Professional eco-friendly cleaning services using non-toxic, Australian-made products across Melbourne.">
    <meta name="twitter:image" content="https://www.edge2edgecleaning.com.au/assets/img/builder-cleaning.jpg">
    
    <!-- Geo-Targeting Meta Tags -->
    <meta name="geo.region" content="AU-VIC">
    <meta name="geo.placename" content="Melbourne, Toorak">
    <meta name="geo.position" content="-37.8417;145.0167">
    <meta name="ICBM" content="-37.8417, 145.0167">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?=$webRoot;?>assets/img/favicon.png">
    
    <!-- Stylesheets -->
    <?php include('style.php'); ?>
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?=$webRoot;?>assets/css/custom-home.css">
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TWEKM35J8Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-TWEKM35J8Z');
    </script>
    
    <!-- Structured Data - Local Business -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Edge 2 Edge Cleaning",
        "image": "https://www.edge2edgecleaning.com.au/assets/img/logo.png",
        "description": "Professional eco-friendly cleaning services in Melbourne using non-toxic, Australian-made products for residential, commercial, and end-of-lease cleaning.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Serving Melbourne Metro Area",
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
        "telephone": "+61481992891",
        "email": "info@edge2edgecleaning.com.au",
        "openingHours": [
            "Mo-Fr 08:00-17:00"
        ],
        "priceRange": "$$",
        "serviceArea": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": "-37.8417",
                "longitude": "145.0167"
            },
            "geoRadius": "80000"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Cleaning Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Residential Cleaning",
                        "description": "Professional house cleaning services"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Commercial Cleaning",
                        "description": "Office and commercial space cleaning"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "End of Lease Cleaning",
                        "description": "Bond cleaning services"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Builder's Cleaning",
                        "description": "Post-construction cleaning services"
                    }
                }
            ]
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "127"
        }
    }
    </script>
    
    <!-- Structured Data - Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Edge 2 Edge Cleaning",
        "url": "https://www.edge2edgecleaning.com.au/",
        "logo": "https://www.edge2edgecleaning.com.au/assets/img/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+61481992891",
            "contactType": "customer service",
            "availableLanguage": "English"
        },
        "sameAs": [
            "https://www.facebook.com/edge2edgecleaning",
            "https://www.instagram.com/edge2edgecleaning"
        ]
    }
    </script>
</head>

<body>
    <!-- Header/Navigation -->
    <?php include('topbar.php'); ?>
    
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <video id="bgVideo" autoplay muted loop playsinline class="background-video" aria-label="Background video showing professional cleaning services">
            <source src="<?=$webRoot;?>assets/img/slide-bg-1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="slide-content">
            <h1>Expert Professional Cleaners | Residential & Commercial Cleaning Melbourne</h1>
            <p>From debris removal to fine detailing — we ensure your space is clean, safe, and move-in ready using eco-friendly, non-toxic products.</p>
            <div class="button-group">
                <a href="tel:+61481992891" class="btn btn-call" aria-label="Call Edge 2 Edge Cleaning">
                    <i class="fas fa-phone" aria-hidden="true"></i> Call Us: +61 481 992 891
                </a>
                <a href="<?=$webRoot;?>get-a-quote.php" class="btn btn-quote" aria-label="Get a free cleaning quote">
                    <i class="fas fa-calculator" aria-hidden="true"></i> Get Free Quote
                </a>
            </div>
        </div>
        
        <!-- Mute/Unmute Button -->
        <button class="mute-toggle" onclick="toggleMute()" aria-label="Toggle video sound">
            <i class="fas fa-volume-mute" aria-hidden="true"></i> Unmute
        </button>
    </section>
    
    <!-- Why Choose Us Section -->
    <section class="why-choose-us-section" id="about">
        <div class="container">
            <div class="section-title text-center">
                <h2>Why Choose Edge 2 Edge Cleaning?</h2>
                <p class="section-subtitle">Your trusted local cleaning experts serving Melbourne and surrounding areas</p>
            </div>
            
            <div class="row align-items-center">
                <!-- Video Section -->
                <div class="col-lg-5">
                    <div class="video-container">
                        <video autoplay muted loop playsinline class="styled-video" aria-label="Edge 2 Edge Cleaning services showcase">
                            <source src="<?=$webRoot;?>assets/img/Edgevideo.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                
                <!-- Features Section -->
                <div class="col-lg-7">
                    <div class="features-list">
                        <div class="feature-item">
                            <img src="<?=$webRoot;?>assets/img/check.png" alt="Checkmark icon" class="check-icon">
                            <p>We are your local cleaning experts, serving 80 KM area from Toorak and surrounding Melbourne areas.</p>
                        </div>
                        <div class="feature-item">
                            <img src="<?=$webRoot;?>assets/img/check.png" alt="Checkmark icon" class="check-icon">
                            <p>Our team is highly trained, experienced, and dedicated to delivering exceptional results every time.</p>
                        </div>
                        <div class="feature-item">
                            <img src="<?=$webRoot;?>assets/img/check.png" alt="Checkmark icon" class="check-icon">
                            <p>We offer competitive cleaning rates and flexible scheduling to meet your specific needs.</p>
                        </div>
                        <div class="feature-item">
                            <img src="<?=$webRoot;?>assets/img/check.png" alt="Checkmark icon" class="check-icon">
                            <p>At Edge 2 Edge Cleaning, we believe that a clean space leads to a healthier and happier life.</p>
                        </div>
                    </div>
                    
                    <div class="cta-content">
                        <h3>Achieve cleanliness and hygiene like never before</h3>
                        <p>Choose Edge 2 Edge Cleaning for all your residential and commercial cleaning needs!</p>
                        <p><strong>Contact us today at <a href="tel:+61481992891">+61 481 992 891</a></strong> to schedule your cleaning service and experience the difference with Edge 2 Edge Cleaning.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Professional Cleaning Services</h2>
                <p class="section-subtitle">Comprehensive eco-friendly cleaning solutions for every need</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-home" aria-hidden="true"></i>
                        </div>
                        <h3>Residential Cleaning</h3>
                        <p>Professional house cleaning services using eco-friendly products for a healthy home environment.</p>
                        <a href="<?=$webRoot;?>house-cleaning.php" class="service-link">Learn More</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-building" aria-hidden="true"></i>
                        </div>
                        <h3>Commercial Cleaning</h3>
                        <p>Office and commercial space cleaning services to maintain a professional work environment.</p>
                        <a href="<?=$webRoot;?>services.php" class="service-link">Learn More</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-key" aria-hidden="true"></i>
                        </div>
                        <h3>End of Lease Cleaning</h3>
                        <p>Bond cleaning services to ensure you get your full deposit back with our thorough cleaning.</p>
                        <a href="<?=$webRoot;?>services.php" class="service-link">Learn More</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-hard-hat" aria-hidden="true"></i>
                        </div>
                        <h3>Builder's Cleaning</h3>
                        <p>Post-construction cleaning services to make your new space move-in ready.</p>
                        <a href="<?=$webRoot;?>builders-cleaning.php" class="service-link">Learn More</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-window-maximize" aria-hidden="true"></i>
                        </div>
                        <h3>Window Cleaning</h3>
                        <p>Professional window cleaning services for crystal clear views and enhanced natural light.</p>
                        <a href="<?=$webRoot;?>window-cleaning.php" class="service-link">Learn More</a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-spray-can" aria-hidden="true"></i>
                        </div>
                        <h3>Pressure Washing</h3>
                        <p>High-pressure cleaning for driveways, patios, and exterior surfaces to restore their original appearance.</p>
                        <a href="<?=$webRoot;?>pressure-washing.php" class="service-link">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="section-title text-center">
                <h2>Get Your Free Cleaning Quote Today</h2>
                <p class="section-subtitle">Ready to experience the Edge 2 Edge difference? Contact us now!</p>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="contact-info text-center">
                        <div class="contact-item">
                            <i class="fas fa-phone-alt" aria-hidden="true"></i>
                            <h3>Call Us Now</h3>
                            <p><a href="tel:+61481992891">+61 481 992 891</a></p>
                        </div>
                        
                        <div class="contact-item">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <h3>Email Us</h3>
                            <p><a href="mailto:info@edge2edgecleaning.com.au">info@edge2edgecleaning.com.au</a></p>
                        </div>
                        
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <h3>Service Area</h3>
                            <p>Melbourne Metro Area (80km radius from Toorak)</p>
                        </div>
                    </div>
                    
                    <div class="cta-buttons text-center">
                        <a href="<?=$webRoot;?>get-a-quote.php" class="btn btn-primary btn-lg">Get Free Quote</a>
                        <a href="<?=$webRoot;?>contact-us.php" class="btn btn-secondary btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include('footer.php'); ?>
    
    <!-- JavaScript -->
    <script src="<?=$webRoot;?>assets/js/jquery.min.js"></script>
    <script src="<?=$webRoot;?>assets/js/bootstrap.min.js"></script>
    <script src="<?=$webRoot;?>assets/js/owl.carousel.min.js"></script>
    <script src="<?=$webRoot;?>assets/js/magnific-popup.min.js"></script>
    <script src="<?=$webRoot;?>assets/js/slicknav.min.js"></script>
    <script src="<?=$webRoot;?>assets/js/wow.min.js"></script>
    <script src="<?=$webRoot;?>assets/js/main.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Video mute/unmute functionality
        function toggleMute() {
            const video = document.getElementById('bgVideo');
            const btn = document.querySelector('.mute-toggle');
            const icon = btn.querySelector('i');
            
            if (video && btn && icon) {
                video.muted = !video.muted;
                if (video.muted) {
                    icon.className = 'fas fa-volume-mute';
                    btn.innerHTML = '<i class="fas fa-volume-mute" aria-hidden="true"></i> Unmute';
                } else {
                    icon.className = 'fas fa-volume-up';
                    btn.innerHTML = '<i class="fas fa-volume-up" aria-hidden="true"></i> Mute';
                }
            }
        }
        
        // Form validation function (if needed for contact forms)
        function validateForm() {
            const form = document.forms["contactForm"];
            if (!form) return true;
            
            const name = form["name"]?.value.trim() || '';
            const email = form["email"]?.value.trim() || '';
            const phone = form["phone"]?.value.trim() || '';
            const message = form["message"]?.value.trim() || '';
            const honeypot = form["website"]?.value || '';
            
            // Honeypot spam protection
            if (honeypot !== "") {
                alert("Spam detected.");
                return false;
            }
            
            // Validation patterns
            const nameRegex = /^[a-zA-Z\s]{2,50}$/;
            const phoneRegex = /^[0-9+\-\s()]{8,20}$/;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            // Validate fields
            if (!nameRegex.test(name)) {
                alert("Please enter a valid name (2-50 characters, letters only).");
                return false;
            }
            
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }
            
            if (!phoneRegex.test(phone)) {
                alert("Please enter a valid phone number.");
                return false;
            }
            
            if (message.length < 10) {
                alert("Please enter a message with at least 10 characters.");
                return false;
            }
            
            return true;
        }
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Initialize WOW.js for animations
        if (typeof WOW !== 'undefined') {
            new WOW().init();
        }
    </script>
</body>
</html>