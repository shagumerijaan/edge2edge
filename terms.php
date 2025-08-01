<?php
require_once __DIR__ . '/include/configweb.php';

// Set page-specific SEO variables
$pageTitle = "Terms & Conditions | Edge 2 Edge Cleaning Services Melbourne";
$pageDescription = "Edge 2 Edge Cleaning's terms and conditions for service agreements, cancellations, and liabilities. Serving Melbourne homes and businesses since 2018.";
$pageKeywords = "terms conditions cleaning service, Edge 2 Edge policies, cleaning service agreement, Melbourne cleaning terms, professional cleaning contract";
$canonicalUrl = "https://www.edge2edgecleaning.com.au/terms.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/seo-meta.php'); ?>
    
    <!-- Legal Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Terms and Conditions",
      "description": "Service agreement terms for Edge 2 Edge Cleaning",
      "publisher": {
        "@type": "ProfessionalService",
        "name": "Edge 2 Edge Cleaning",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Toorak",
          "addressRegion": "VIC"
        }
      }
    }
    </script>

    <!-- Override robots meta for terms page -->
    <meta name="robots" content="noindex, follow">

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
                            <h1>Terms & Conditions</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="cleaning-breadcumb">
                                <a href="<?=$webRoot;?>">Home</a> / Terms & Conditions
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Terms Content -->
    <section class="terms-content pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="terms-wrapper">
                        <div class="terms-intro">
                            <p><strong>Last Updated:</strong> January 2025</p>
                            <p>These Terms and Conditions ("Terms") govern your use of Edge 2 Edge Cleaning services. By engaging our services, you agree to be bound by these terms.</p>
                        </div>
                        
                        <div class="terms-section">
                            <h2>1. Service Agreement</h2>
                            <p>Edge 2 Edge Cleaning ("Company", "we", "us") provides professional cleaning services to residential and commercial clients in Melbourne, Victoria. All services are subject to these terms and conditions.</p>
                            
                            <h3>1.1 Service Scope</h3>
                            <ul>
                                <li>Services include but are not limited to: house cleaning, commercial cleaning, builders cleaning, window cleaning, pressure washing, and end-of-lease cleaning</li>
                                <li>All services use eco-friendly, Australian-made cleaning products</li>
                                <li>Specific service details will be outlined in your service agreement or quote</li>
                            </ul>
                        </div>
                        
                        <div class="terms-section">
                            <h2>2. Booking and Scheduling</h2>
                            
                            <h3>2.1 Booking Process</h3>
                            <ul>
                                <li>Services can be booked via phone, email, or our online booking system</li>
                                <li>All bookings are subject to availability</li>
                                <li>We will confirm your booking within 24 hours</li>
                            </ul>
                            
                            <h3>2.2 Cancellation Policy</h3>
                            <ul>
                                <li>Cancellations must be made at least 24 hours before the scheduled service</li>
                                <li>Cancellations made less than 24 hours may incur a cancellation fee</li>
                                <li>No-shows will be charged the full service fee</li>
                            </ul>
                        </div>
                        
                        <div class="terms-section">
                            <h2>3. Pricing and Payment</h2>
                            
                            <h3>3.1 Pricing</h3>
                            <ul>
                                <li>All prices are quoted in Australian Dollars (AUD) and include GST</li>
                                <li>Prices may vary based on property size, condition, and specific requirements</li>
                                <li>Additional services may incur extra charges</li>
                            </ul>
                            
                            <h3>3.2 Payment Terms</h3>
                            <ul>
                                <li>Payment is due upon completion of service unless otherwise agreed</li>
                                <li>We accept cash, bank transfer, and electronic payments</li>
                                <li>Overdue accounts may incur interest charges</li>
                            </ul>
                        </div>
                        
                        <div class="terms-section">
                            <h2>4. Client Responsibilities</h2>
                            
                            <h3>4.1 Property Access</h3>
                            <ul>
                                <li>Clients must provide safe and reasonable access to the property</li>
                                <li>Any access issues must be communicated in advance</li>
                                <li>Clients are responsible for securing valuable items</li>
                            </ul>
                            
                            <h3>4.2 Property Condition</h3>
                            <ul>
                                <li>Clients must disclose any hazardous materials or conditions</li>
                                <li>Properties must be reasonably accessible for cleaning</li>
                                <li>Excessive clutter may result in additional charges</li>
                            </ul>
                        </div>
                        
                        <div class="terms-section">
                            <h2>5. Service Guarantee</h2>
                            
                            <h3>5.1 Quality Guarantee</h3>
                            <ul>
                                <li>We guarantee satisfaction with our cleaning services</li>
                                <li>Any issues must be reported within 24 hours of service completion</li>
                                <li>We will return to address any legitimate concerns at no extra cost</li>
                            </ul>
                            
                            <h3>5.2 Limitations</h3>
                            <ul>
                                <li>Some stains and damage may be permanent and beyond our cleaning capabilities</li>
                                <li>We cannot guarantee removal of all stains or odors</li>
                                <li>Pre-existing damage will be noted and not addressed unless specifically requested</li>
                            </ul>
                        </div>
                        
                        <div class="terms-section">
                            <h2>6. Insurance and Liability</h2>
                            
                            <h3>6.1 Insurance Coverage</h3>
                            <ul>
                                <li>Edge 2 Edge Cleaning carries public liability insurance</li>
                                <li>All staff are covered under workers' compensation insurance</li>
                                <li>Insurance details available upon request</li>
                            </ul>
                            
                            <h3>6.2 Liability Limitations</h3>
                            <ul>
                                <li>Our liability is limited to the cost of the service provided</li>
                                <li>We are not liable for pre-existing damage or wear</li>
                                <li>Clients must report any damage within 24 hours</li>
                            </ul>
                        </div>
                        
                        <div class="terms-section">
                            <h2>7. Privacy and Confidentiality</h2>
                            <ul>
                                <li>We respect client privacy and maintain confidentiality</li>
                                <li>Personal information is handled in accordance with Australian Privacy Laws</li>
                                <li>We do not share client information with third parties without consent</li>
                            </ul>
                        </div>
                        
                        <div class="terms-section">
                            <h2>8. Dispute Resolution</h2>
                            <ul>
                                <li>We aim to resolve all disputes amicably and promptly</li>
                                <li>Complaints should be directed to our management team</li>
                                <li>Unresolved disputes may be referred to appropriate consumer protection agencies</li>
                            </ul>
                        </div>
                        
                        <div class="terms-section">
                            <h2>9. Changes to Terms</h2>
                            <ul>
                                <li>These terms may be updated from time to time</li>
                                <li>Changes will be posted on our website</li>
                                <li>Continued use of our services constitutes acceptance of updated terms</li>
                            </ul>
                        </div>
                        
                        <div class="terms-section">
                            <h2>10. Contact Information</h2>
                            <p>For questions about these terms or our services, please contact us:</p>
                            <ul>
                                <li><strong>Phone:</strong> <a href="tel:+61481992891">048-1992-891</a></li>
                                <li><strong>Email:</strong> <a href="mailto:info@edge2edgecleaning.com.au">info@edge2edgecleaning.com.au</a></li>
                                <li><strong>Address:</strong> 5/789 Malvern Road, Toorak VIC 3142</li>
                            </ul>
                        </div>
                        
                        <div class="terms-footer">
                            <p><em>These terms and conditions are governed by the laws of Victoria, Australia. By using our services, you agree to the jurisdiction of Victorian courts.</em></p>
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
    
    .terms-wrapper {
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .terms-intro {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 30px;
        border-left: 4px solid #E8760C;
    }
    
    .terms-section {
        margin-bottom: 40px;
    }
    
    .terms-section h2 {
        color: #E8760C;
        font-size: 24px;
        margin-bottom: 20px;
        border-bottom: 2px solid #E8760C;
        padding-bottom: 10px;
    }
    
    .terms-section h3 {
        color: #333;
        font-size: 18px;
        margin: 20px 0 10px 0;
    }
    
    .terms-section p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    
    .terms-section ul {
        margin-left: 20px;
        margin-bottom: 20px;
    }
    
    .terms-section li {
        color: #666;
        line-height: 1.6;
        margin-bottom: 8px;
    }
    
    .terms-section a {
        color: #E8760C;
        text-decoration: none;
    }
    
    .terms-section a:hover {
        text-decoration: underline;
    }
    
    .terms-footer {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
        margin-top: 40px;
        text-align: center;
        border: 1px solid #dee2e6;
    }
    
    .terms-footer p {
        margin: 0;
        font-style: italic;
        color: #666;
    }
    
    @media (max-width: 768px) {
        .terms-wrapper {
            padding: 20px;
        }
        
        .terms-section h2 {
            font-size: 20px;
        }
        
        .terms-section h3 {
            font-size: 16px;
        }
    }
    </style>
</body>
</html>