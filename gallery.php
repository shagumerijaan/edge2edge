<?php
require_once __DIR__ . '/include/configweb.php';

// Set page-specific SEO variables
$pageTitle = "Domestic Cleaning Gallery | Before & After Photos | Edge 2 Edge Toorak";
$pageDescription = "See our domestic cleaning transformation gallery. Edge 2 Edge showcases real before/after photos of our eco-friendly house cleaning services in Melbourne and Toorak.";
$pageKeywords = "cleaning before after photos, domestic cleaning gallery, house cleaning results Toorak, eco cleaning transformations, Melbourne cleaning portfolio, visual cleaning proof, residential cleaning examples, trusted cleaners gallery";
$canonicalUrl = "https://www.edge2edgecleaning.com.au/gallery.php";
$ogImage = "https://www.edge2edgecleaning.com.au/assets/img/gallery/domestic-cleaning-before-after.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/seo-meta.php'); ?>
    
    <!-- Gallery Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "Domestic Cleaning Gallery",
      "description": "Visual portfolio of our residential cleaning services",
      "publisher": {
        "@type": "ProfessionalService",
        "name": "Edge 2 Edge Cleaning",
        "image": "https://www.edge2edgecleaning.com.au/assets/img/logo.png",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Toorak",
          "addressRegion": "VIC",
          "postalCode": "3142"
        }
      },
      "hasPart": [
        {
          "@type": "ImageGallery",
          "name": "Kitchen Cleaning Transformations",
          "description": "Before and after photos of our deep kitchen cleaning"
        },
        {
          "@type": "ImageGallery",
          "name": "Bathroom Sanitization Results",
          "description": "Gallery of bathroom cleaning and sanitization"
        },
        {
          "@type": "ImageGallery",
          "name": "Living Room Cleaning",
          "description": "Professional house cleaning results"
        }
      ]
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
                            <h1>Our Work Gallery</h1>
                        </div>
                        <div class="col-md-6">
                            <div class="cleaning-breadcumb">
                                <a href="<?=$webRoot;?>">Home</a> / Gallery
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Gallery Introduction -->
    <section class="gallery-intro pt-100 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2>See Our Cleaning Transformations</h2>
                    <p>Take a look at our professional cleaning work. These before and after photos showcase the quality and attention to detail that Edge 2 Edge Cleaning brings to every project. From residential homes to commercial spaces, we deliver exceptional results using eco-friendly products.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section class="gallery-section pb-100">
        <div class="container">
            <!-- Gallery Filter -->
            <div class="row">
                <div class="col-lg-12 text-center mb-50">
                    <div class="gallery-filter">
                        <button class="filter-btn active" data-filter="all">All Projects</button>
                        <button class="filter-btn" data-filter="residential">Residential</button>
                        <button class="filter-btn" data-filter="commercial">Commercial</button>
                        <button class="filter-btn" data-filter="builders">Builders Clean</button>
                        <button class="filter-btn" data-filter="windows">Window Cleaning</button>
                    </div>
                </div>
            </div>
            
            <!-- Gallery Grid -->
            <div class="row gallery-grid">
                <!-- Residential Cleaning -->
                <div class="col-lg-4 col-md-6 mb-30 gallery-item residential">
                    <div class="gallery-block-item">
                        <a href="<?=$webRoot;?>assets/img/gallery-item-1.jpg" class="gallery-link">
                            <img src="<?=$webRoot;?>assets/img/gallery-item-1.jpg" alt="Kitchen Deep Cleaning Before After - Toorak">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Kitchen Deep Clean</h4>
                                    <p>Toorak Residence</p>
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-30 gallery-item residential">
                    <div class="gallery-block-item">
                        <a href="<?=$webRoot;?>assets/img/gallery-item-2.jpg" class="gallery-link">
                            <img src="<?=$webRoot;?>assets/img/gallery-item-2.jpg" alt="Bathroom Sanitization Results - Melbourne">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Bathroom Sanitization</h4>
                                    <p>South Yarra Home</p>
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-30 gallery-item residential">
                    <div class="gallery-block-item">
                        <a href="<?=$webRoot;?>assets/img/gallery-item-3.jpg" class="gallery-link">
                            <img src="<?=$webRoot;?>assets/img/gallery-item-3.jpg" alt="Living Room Cleaning Transformation">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Living Room Clean</h4>
                                    <p>Prahran Apartment</p>
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Commercial Cleaning -->
                <div class="col-lg-4 col-md-6 mb-30 gallery-item commercial">
                    <div class="gallery-block-item">
                        <a href="<?=$webRoot;?>assets/img/gallery-item-4.jpg" class="gallery-link">
                            <img src="<?=$webRoot;?>assets/img/gallery-item-4.jpg" alt="Office Cleaning Melbourne CBD">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Office Deep Clean</h4>
                                    <p>Melbourne CBD</p>
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-30 gallery-item commercial">
                    <div class="gallery-block-item">
                        <a href="<?=$webRoot;?>assets/img/gallery-item-5.jpg" class="gallery-link">
                            <img src="<?=$webRoot;?>assets/img/gallery-item-5.jpg" alt="Retail Space Cleaning Results">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Retail Space Clean</h4>
                                    <p>Chapel Street</p>
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Builders Cleaning -->
                <div class="col-lg-4 col-md-6 mb-30 gallery-item builders">
                    <div class="gallery-block-item">
                        <a href="<?=$webRoot;?>assets/img/gallery-item-6.jpg" class="gallery-link">
                            <img src="<?=$webRoot;?>assets/img/gallery-item-6.jpg" alt="Post Construction Cleaning Melbourne">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Post Construction</h4>
                                    <p>New Build - Armadale</p>
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-30 gallery-item builders">
                    <div class="gallery-block-item">
                        <a href="<?=$webRoot;?>assets/img/gallery-item-7.jpg" class="gallery-link">
                            <img src="<?=$webRoot;?>assets/img/gallery-item-7.jpg" alt="Renovation Cleanup Results">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Renovation Cleanup</h4>
                                    <p>Richmond Townhouse</p>
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Window Cleaning -->
                <div class="col-lg-4 col-md-6 mb-30 gallery-item windows">
                    <div class="gallery-block-item">
                        <a href="<?=$webRoot;?>assets/img/gallery-item-8.jpg" class="gallery-link">
                            <img src="<?=$webRoot;?>assets/img/gallery-item-8.jpg" alt="Professional Window Cleaning Melbourne">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Window Cleaning</h4>
                                    <p>High-rise Building</p>
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-30 gallery-item residential">
                    <div class="gallery-block-item">
                        <a href="<?=$webRoot;?>assets/img/gallery-item-9.jpg" class="gallery-link">
                            <img src="<?=$webRoot;?>assets/img/gallery-item-9.jpg" alt="End of Lease Cleaning Results">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>End of Lease Clean</h4>
                                    <p>Bond Back Guarantee</p>
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="gallery-cta py-100" style="background: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h3>Ready for Your Own Transformation?</h3>
                    <p>Let us bring the same level of excellence to your space. Contact Edge 2 Edge Cleaning today for a free quote.</p>
                    <div class="cta-buttons">
                        <a href="<?=$webRoot;?>get-a-quote.php" class="btn btn-primary">Get Free Quote</a>
                        <a href="tel:+61481992891" class="btn btn-outline">Call Now: 048-1992-891</a>
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
    
    .gallery-intro h2 {
        color: #333;
        font-size: 32px;
        margin-bottom: 20px;
    }
    
    .gallery-intro p {
        color: #666;
        font-size: 16px;
        line-height: 1.6;
    }
    
    .gallery-filter {
        margin-bottom: 30px;
    }
    
    .filter-btn {
        background: transparent;
        border: 2px solid #E8760C;
        color: #E8760C;
        padding: 10px 20px;
        margin: 0 5px;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .filter-btn:hover,
    .filter-btn.active {
        background: #E8760C;
        color: white;
    }
    
    .gallery-block-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .gallery-block-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(232, 118, 12, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .gallery-block-item:hover .gallery-overlay {
        opacity: 1;
    }
    
    .gallery-block-item:hover img {
        transform: scale(1.1);
    }
    
    .gallery-content {
        text-align: center;
        color: white;
    }
    
    .gallery-content h4 {
        font-size: 18px;
        margin-bottom: 5px;
    }
    
    .gallery-content p {
        font-size: 14px;
        margin-bottom: 15px;
    }
    
    .gallery-content i {
        font-size: 24px;
    }
    
    .gallery-link {
        display: block;
        text-decoration: none;
    }
    
    .gallery-cta h3 {
        color: #333;
        font-size: 28px;
        margin-bottom: 15px;
    }
    
    .gallery-cta p {
        color: #666;
        font-size: 16px;
        margin-bottom: 30px;
    }
    
    .cta-buttons .btn {
        display: inline-block;
        padding: 15px 30px;
        margin: 0 10px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
    }
    
    .btn-primary {
        background: #E8760C;
        color: white;
        border: 2px solid #E8760C;
    }
    
    .btn-primary:hover {
        background: #d66a0b;
        border-color: #d66a0b;
        color: white;
        text-decoration: none;
    }
    
    .btn-outline {
        background: transparent;
        color: #E8760C;
        border: 2px solid #E8760C;
    }
    
    .btn-outline:hover {
        background: #E8760C;
        color: white;
        text-decoration: none;
    }
    
    @media (max-width: 768px) {
        .cta-buttons .btn {
            display: block;
            margin: 10px 0;
        }
        
        .filter-btn {
            margin: 5px;
            font-size: 14px;
            padding: 8px 15px;
        }
    }
    </style>
    
    <script>
    // Gallery Filter Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                
                galleryItems.forEach(item => {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
    </script>
</body>
</html>