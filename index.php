<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zana Hassan | Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --primary: #2F5848;
            --secondary: #79C0BC;
            --accent: #FF6B6B;
            --dark: #0a0a0a;
            --light: #F1FFFF;
            --gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --glow: 0 0 30px rgba(121, 192, 188, 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--dark);
            color: var(--light);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Enhanced Navigation */
        .navbar {
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(20px);
            padding: 1.5rem 0;
            border-bottom: 1px solid rgba(121, 192, 188, 0.2);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 2rem;
            font-weight: 700;
            color: var(--light);
            text-shadow: var(--glow);
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            color: var(--secondary);
            transform: scale(1.05);
        }

        .nav-link {
            color: var(--light);
            margin-left: 2rem;
            font-size: 1.1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: var(--secondary);
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Giant Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            width: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.4);
            transition: all 0.5s ease;
        }

        .hero:hover .hero-image {
            transform: scale(1.05);
            filter: brightness(0.6);
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(47, 88, 72, 0.7), rgba(121, 192, 188, 0.5));
        }

        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            padding: 3rem;
            max-width: 1000px;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-title {
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 800;
            margin-bottom: 2rem;
            color: var(--light);
            text-shadow: 0 0 40px rgba(255, 255, 255, 0.5);
            font-family: 'Playfair Display', serif;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-size: clamp(1.5rem, 4vw, 2.5rem);
            font-weight: 400;
            color: var(--secondary);
            margin-bottom: 3rem;
            text-shadow: 0 0 20px rgba(121, 192, 188, 0.5);
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .social-links {
            display: flex;
            gap: 2rem;
            margin: 3rem 0;
            justify-content: center;
            flex-wrap: wrap;
        }

        .social-link {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            color: var(--light);
            border-radius: 50%;
            transition: all 0.4s ease;
            text-decoration: none;
            font-size: 2rem;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(121, 192, 188, 0.3);
        }

        .social-link:hover {
            background: var(--secondary);
            color: var(--dark);
            transform: translateY(-10px) rotate(10deg);
            box-shadow: var(--glow);
            border-color: var(--secondary);
        }

        .cta-button {
            font-size: 1.3rem;
            padding: 1rem 3rem;
            background: transparent;
            border: 3px solid var(--secondary);
            color: var(--secondary);
            border-radius: 50px;
            transition: all 0.4s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            margin-top: 2rem;
        }

        .cta-button:hover {
            background: var(--secondary);
            color: var(--dark);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(121, 192, 188, 0.4);
        }

        /* Enhanced Gallery Section */
        .gallery-section {
            background: linear-gradient(180deg, var(--dark) 0%, #1a1a1a 100%);
            padding: 8rem 0;
            position: relative;
        }

        .section-title {
            text-align: center;
            font-size: clamp(2.5rem, 6vw, 4rem);
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--light);
            font-family: 'Playfair Display', serif;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: var(--secondary);
            margin-bottom: 5rem;
            opacity: 0.8;
        }

        .card-item {
            position: relative;
            border-radius: 25px;
            overflow: hidden;
            margin-bottom: 2rem;
            aspect-ratio: 3/4;
            transition: all 0.5s ease;
            background: linear-gradient(45deg, #667eea, #764ba2);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .card-item:hover {
            transform: translateY(-15px) rotate(2deg);
            box-shadow: 0 25px 60px rgba(121, 192, 188, 0.3);
        }

        .card-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .card-item:hover img {
            transform: scale(1.1);
            filter: brightness(1.2);
        }

        .card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2.5rem;
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0) 100%);
            color: var(--light);
            transform: translateY(20px);
            transition: all 0.4s ease;
        }

        .card-item:hover .card-overlay {
            transform: translateY(0);
        }

        .card-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--light);
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            font-family: 'Playfair Display', serif;
        }

        .card-description {
            font-size: 1rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        .upload-btn {
            background: linear-gradient(45deg, var(--secondary), var(--accent));
            color: var(--dark);
            padding: 0.8rem 2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(121, 192, 188, 0.3);
        }

        .upload-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(121, 192, 188, 0.5);
            color: var(--dark);
        }

        /* Floating Animation */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero-content {
                padding: 2rem 1rem;
            }
            
            .social-links {
                gap: 1.5rem;
            }
            
            .social-link {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .card-item {
                aspect-ratio: 1/1;
            }
            
            .gallery-section {
                padding: 5rem 0;
            }
        }

        /* Scroll Animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Enhanced Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand floating" href="#">Zana.Zahir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Giant Hero Section -->
    <section class="hero">
        <img src="images\IMG_4703.JPG" alt="Profile Background" class="hero-image">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Zana Hassan Janger</h1>
                <p class="hero-subtitle">Welcome to My Creative World</p>
                <div class="social-links">
                    <a href="https://instagram.com/zana.zahiir" target="_blank" class="social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://tiktok.com/@zaanaa_hassan" target="_blank" class="social-link">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://threads.net/@zana.zahiir" target="_blank" class="social-link">
                        <i class="fab fa-at"></i>
                    </a>
                </div>
                <a href="#gallery" class="cta-button">Explore Gallery</a>
            </div>
        </div>
    </section>

    <!-- Enhanced Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="text-center mb-5 animate-on-scroll">
                <h2 class="section-title">My Portfolio</h2>
                <p class="section-subtitle">Discover my passion through photography</p>
            </div>
            
            <div class="row g-4">
                <!-- My Photos Card -->
                <div class="col-md-6 col-lg-3 animate-on-scroll">
                    <div class="card-item">
                        <a href="photos.php" class="text-decoration-none">
                            <img src="images\IMG_4703.JPG" alt="Personal Photos" class="img-fluid">
                            <div class="card-overlay">
                                <h3 class="card-title">My Photos</h3>
                                <p class="card-description">Personal moments and memories captured in time</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Car Collection Card -->
                <div class="col-md-6 col-lg-3 animate-on-scroll">
                    <div class="card-item">
                        <a href="cars.php" class="text-decoration-none">
                            <img src="images/IMG_5626.JPG" alt="Car Collection" class="img-fluid">
                            <div class="card-overlay">
                                <h3 class="card-title">Car Collection</h3>
                                <p class="card-description">Automotive photography and my passion for cars</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Animals Card -->
                <div class="col-md-6 col-lg-3 animate-on-scroll">
                    <div class="card-item">
                        <a href="animals.php" class="text-decoration-none">
                            <img src="images/animals/animal.jpg" alt="Animal Photos" class="img-fluid">
                            <div class="card-overlay">
                                <h3 class="card-title">Animal Kingdom</h3>
                                <p class="card-description">Wildlife and pets through my lens</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Nature Card -->
                <div class="col-md-6 col-lg-3 animate-on-scroll">
                    <div class="card-item">
                        <a href="nature.php" class="text-decoration-none">
                            <img src="images/IMG_5685.JPG" alt="Nature Photos" class="img-fluid">
                            <div class="card-overlay">
                                <h3 class="card-title">Nature Views</h3>
                                <p class="card-description">The beauty of natural landscapes and scenery</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript for Animations -->
    <script>
        // Scroll animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe all elements with animate-on-scroll class
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.animate-on-scroll');
            animateElements.forEach(el => observer.observe(el));
        });

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

        // Dynamic navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(10, 10, 10, 0.98)';
            } else {
                navbar.style.background = 'rgba(10, 10, 10, 0.95)';
            }
        });
    </script>
</body>
</html>