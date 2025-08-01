<?php
require_once __DIR__ . '/include/configweb.php';
require_once __DIR__ . '/contact-handler.php';

// Set page-specific SEO variables
$pageTitle = "Contact Edge 2 Edge | Eco-Friendly Cleaning Services in Toorak, Melbourne";
$pageDescription = "Contact Edge 2 Edge Cleaning in Toorak for eco-friendly cleaning services. Call ☎ 048-1992-891 or message us for residential & commercial cleaning quotes across Melbourne.";
$pageKeywords = "cleaning service Toorak, contact cleaners Melbourne, eco cleaning company Victoria, house cleaning Toorak, commercial cleaners South Yarra, window cleaning contact, end of lease cleaning service, builders cleaning quote, domestic cleaners near me";
$canonicalUrl = "https://www.edge2edgecleaning.com.au/contact-us.php";
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
                            <h1>Contact Us</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="cleaning-breadcumb">
                                <a href="<?=$webRoot;?>">Home</a> / Contact Us
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contact Section -->
    <section class="cleaning-content-block">
        <div class="container">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-lg-4 col-md-5">
                    <div class="address-area">
                        <ul>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h3>Phone</h3>
                                <p><a href="tel:+61481992891">048-1992-891</a></p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <h3>E-mail</h3>
                                <p><a href="mailto:info@edge2edgecleaning.com.au">info@edge2edgecleaning.com.au</a></p>	
                            </li>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h3>Address</h3>
                                <p>5/789 Malvern Road<br>Toorak VIC 3142<br>Australia</p>	
                            </li>
                            <li>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h3>Business Hours</h3>
                                <p>Monday - Friday: 8:00 AM - 5:00 PM<br>
                                Saturday: 9:00 AM - 3:00 PM<br>
                                Sunday: Closed</p>
                            </li>
                        </ul>
                        
                        <!-- Social Media Links -->
                        <div class="social-contact">
                            <h3>Follow Us</h3>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/edge2edgecleaning" target="_blank" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.instagram.com/edge2edgecleaning/" target="_blank" aria-label="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://wa.me/61481992891" target="_blank" aria-label="WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="https://www.google.com/search?q=edge2edgecleaning" target="_blank" aria-label="Google">
                                    <i class="fab fa-google"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form-area">
                        <div class="contact-info text-center">
                            <h2>Let's Talk About Your Project</h2>
                            <p>We are always ready to listen to you first</p>
                        </div>
                        
                        <?php if(isset($msg)){ echo $msg; } ?>
                        
                        <form method="POST" action="" name="contactForm" id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="contact_name" placeholder="Full Name*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="contact_email" placeholder="Email Address*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" name="phone" id="contact_phone" placeholder="Phone Number*" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="services" id="contact_services" required>
                                            <option value="">Select Service*</option>
                                            <option value="House Cleaning">House Cleaning</option>
                                            <option value="Commercial Cleaning">Commercial Cleaning</option>
                                            <option value="Builders Cleaning">Builders Cleaning</option>
                                            <option value="End of Lease Cleaning">End of Lease Cleaning</option>
                                            <option value="Window Cleaning">Window Cleaning</option>
                                            <option value="Pressure Washing">Pressure Washing</option>
                                            <option value="Spring Cleaning">Spring Cleaning</option>
                                            <option value="COVID-19 Deep Cleaning">COVID-19 Deep Cleaning</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="location" id="contact_location" placeholder="Property Location/Suburb*" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group mb-18">
                                <textarea name="message" id="contact_message" rows="6" placeholder="Tell us about your cleaning requirements*" required></textarea>
                            </div>
                            
                            <!-- Honeypot field for spam protection -->
                            <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">
                            
                            <div class="text-center">
                                <div id="contact_send_status"></div>
                                <input type="submit" class="sbmt-btn" name="submit" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Map Section -->
    <div id="map">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.4407841545435!2d145.0177899146826!3d-37.849975579745795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642763b4adc0b%3A0xdc46edd5b649933b!2s5%2F789%20Malvern%20Rd%2C%20Toorak%20VIC%203142%2C%20Australia!5e0!3m2!1sen!2sin!4v1660455342758!5m2!1sen!2sin"
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Edge 2 Edge Cleaning Location">
        </iframe>
    </div>
    
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
    
    .address-area ul {
        list-style: none;
        padding: 0;
    }
    
    .address-area li {
        margin-bottom: 30px;
        display: flex;
        align-items: flex-start;
    }
    
    .address-area i {
        color: #E8760C;
        font-size: 24px;
        margin-right: 15px;
        margin-top: 5px;
    }
    
    .address-area h3 {
        color: #333;
        font-size: 18px;
        margin-bottom: 5px;
    }
    
    .address-area p {
        color: #666;
        margin: 0;
        line-height: 1.6;
    }
    
    .address-area a {
        color: #E8760C;
        text-decoration: none;
    }
    
    .address-area a:hover {
        text-decoration: underline;
    }
    
    .social-contact {
        margin-top: 30px;
    }
    
    .social-contact h3 {
        color: #333;
        margin-bottom: 15px;
    }
    
    .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background: #E8760C;
        color: white;
        text-align: center;
        line-height: 40px;
        margin-right: 10px;
        border-radius: 50%;
        transition: background 0.3s ease;
    }
    
    .social-icons a:hover {
        background: #d66a0b;
        color: white;
        text-decoration: none;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }
    
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #E8760C;
    }
    
    .sbmt-btn {
        background: #E8760C;
        color: white;
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease;
    }
    
    .sbmt-btn:hover {
        background: #d66a0b;
    }
    
    #map {
        margin-top: 50px;
    }
    
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
    
    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
    }
    
    .alert-warning {
        background-color: #fff3cd;
        border-color: #ffeaa7;
        color: #856404;
    }
    </style>
</body>
</html>