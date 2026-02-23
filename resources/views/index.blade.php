<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peace - Making a Difference</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        /* ==================== CSS Variables ==================== */
        :root {
            --primary-red: #bc2a26;
            --teal-green: #37938c;
            --orange: #f2a54d;
            --golden-yellow: #bd9b21;
            --dark-text: #333;
            --light-bg: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-text);
            overflow-x: hidden;
        }

        html {
            scroll-behavior: smooth;
        }

        /* ==================== Enhanced Stylish Navigation ==================== */
        .navbar {
            background: rgba(188, 42, 38, 0.95);
            backdrop-filter: blur(10px);
            padding: 1.2rem 0;
            transition: all 0.4s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .navbar.scrolled {
            padding: 0.8rem 0;
            background: rgba(188, 42, 38, 0.98);
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: white !important;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            color: var(--orange) !important;
        }

        .nav-link {
            color: white !important;
            margin: 0 1.2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--orange);
            transition: width 0.4s ease;
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            width: 100%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--orange) !important;
        }

        .navbar .btn-donate {
            background: var(--orange);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .navbar .btn-donate:hover {
            background: var(--golden-yellow);
            transform: translateY(-3px);
        }

        /* ==================== Hero Carousel Slider ==================== */
        .hero-carousel .carousel-item {
            height: 100vh;
            min-height: 600px;
            background: no-repeat center center/cover;
        }

        .hero-carousel .carousel-caption {
            bottom: auto;
            top: 50%;
            left: 10%;
            right: auto;
            transform: translateY(-50%);
            text-align: left;
            z-index: 10;
        }

        .hero-carousel h1 {
            font-size: 3.5rem;
            font-weight: 700;
            text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.5);
        }

        .hero-carousel p {
            font-size: 1.4rem;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
        }

        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000000a8
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero-carousel h1 {
                font-size: 2.8rem;
            }

            .hero-carousel .carousel-caption {
                left: 5%;
                right: 5%;
            }
        }

        @media (max-width: 768px) {
            .hero-carousel h1 {
                font-size: 2.3rem;
            }

            .hero-carousel p {
                font-size: 1.1rem;
            }

            .hero-carousel .d-flex.gap-3 {
                flex-direction: column;
                align-items: flex-start;
            }

            .hero-carousel .btn-custom {
                width: 100%;
                text-align: center;
            }
        }

        /* Keep your original .btn-custom styles here */
        .btn-custom {
            padding: 12px 35px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            border: none;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .btn-primary-custom {
            background: var(--primary-red);
            color: white;
        }

        .btn-primary-custom:hover {
            background: var(--teal-green);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary-custom {
            background: var(--orange);
            color: white;
        }

        .btn-secondary-custom:hover {
            background: var(--golden-yellow);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* ==================== Section Styles ==================== */

        section:not(#home) {
            padding: 40px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-red);
            margin-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--teal-green);
            margin: 1rem auto;
            border-radius: 2px;
        }

        /* ==================== About Section ==================== */
        .about-section {
            background: var(--light-bg);
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .about-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.1);
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            color: var(--teal-green);
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #666;
            margin-bottom: 1rem;
        }

        /* ==================== Stats Section ==================== */
        .stats-section {
            background: linear-gradient(135deg, var(--primary-red), var(--teal-green));
            color: white;
            padding: 60px 0;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
        }

        .stat-card i {
            font-size: 3rem;
            color: var(--orange);
            margin-bottom: 1rem;
        }

        .stat-card h3 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-card p {
            font-size: 1.2rem;
        }

        /* ==================== Team Section ==================== */
        .team-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 2rem;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .team-image {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, var(--teal-green), var(--orange));
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .team-image i {
            font-size: 8rem;
            color: rgba(255, 255, 255, 0.3);
        }

        .team-info {
            padding: 1.5rem;
            text-align: center;
        }

        .team-info h4 {
            color: var(--primary-red);
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .team-info p {
            color: var(--teal-green);
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .team-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .team-social a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light-bg);
            color: var(--primary-red);
            transition: all 0.3s ease;
        }

        .team-social a:hover {
            background: var(--primary-red);
            color: white;
            transform: scale(1.1);
        }

        /* ==================== Mission & Vision ==================== */
        .mission-vision-section {
            background: var(--light-bg);
        }

        .mission-card {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .mission-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 2.5rem;
        }

        .mission-icon.red {
            background: linear-gradient(135deg, var(--primary-red), var(--orange));
            color: white;
        }

        .mission-icon.teal {
            background: linear-gradient(135deg, var(--teal-green), var(--golden-yellow));
            color: white;
        }

        .mission-card h3 {
            text-align: center;
            color: var(--primary-red);
            margin-bottom: 1.5rem;
        }

        .mission-card ul {
            list-style: none;
            padding: 0;
        }

        .mission-card ul li {
            padding: 0.8rem 0;
            padding-left: 2rem;
            position: relative;
            color: #666;
        }

        .mission-card ul li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--teal-green);
        }

        /* ==================== News Section ==================== */
        .news-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 2rem;
        }

        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .news-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, var(--orange), var(--golden-yellow));
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .news-image i {
            font-size: 5rem;
            color: rgba(255, 255, 255, 0.5);
        }

        .news-content {
            padding: 1.5rem;
        }

        .news-date {
            color: var(--teal-green);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .news-content h4 {
            color: var(--primary-red);
            margin-bottom: 1rem;
        }

        .news-content p {
            color: #666;
            line-height: 1.6;
        }

        .read-more {
            color: var(--teal-green);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .read-more:hover {
            color: var(--orange);
        }

        /* ==================== Contact Section ==================== */
        .contact-section {
            background: var(--light-bg);
        }

        .contact-form {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-form .form-control {
            padding: 12px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .contact-form .form-control:focus {
            border-color: var(--teal-green);
            box-shadow: 0 0 0 0.2rem rgba(55, 147, 140, 0.25);
        }

        .contact-info {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 1.5rem;
        }

        .contact-icon.red {
            background: var(--primary-red);
            color: white;
        }

        .contact-icon.teal {
            background: var(--teal-green);
            color: white;
        }

        .contact-icon.orange {
            background: var(--orange);
            color: white;
        }

        .map-placeholder {
            background: linear-gradient(135deg, var(--teal-green), var(--orange));
            height: 300px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            margin-top: 2rem;
        }

        /* ==================== Footer ==================== */
        footer {
            background: linear-gradient(135deg, var(--primary-red), var(--teal-green));
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h4 {
            margin-bottom: 1.5rem;
            color: var(--orange);
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--orange);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--orange);
            transform: scale(1.1);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* ==================== Animations ==================== */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ==================== Responsive Design ==================== */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }

            .hero-section p {
                font-size: 1.1rem;
            }

            .about-content {
                flex-direction: column;
            }

            .email-input-group {
                flex-direction: column;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- ==================== Navigation ==================== -->
    <!-- Enhanced Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">
                <i class="fas fa-hands-helping"></i> Peace
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#mission">Mission</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-3">
                        <a href="#" class="btn btn-donate">
                            <i class="fas fa-heart"></i> Donate Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Carousel with Fixed Buttons Visibility -->
    <section id="home" class="hero-carousel carousel slide carousel-fade" data-bs-ride="carousel"
        data-bs-interval="5000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target=".hero-carousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target=".hero-carousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target=".hero-carousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active"
                style="background-image: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=1200');">
                <div class="carousel-overlay"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-7">
                            <div class="carousel-caption">
                                <h1>Empowering Communities,<br>Transforming Lives</h1>
                                <p>Join us in making a lasting impact through education, healthcare, and sustainable
                                    development.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="#" class="btn btn-custom btn-primary-custom"><i class="fas fa-heart"></i>
                                        Donate Now</a>
                                    <a href="#" class="btn btn-custom btn-secondary-custom"><i class="fas fa-users"></i>
                                        Join Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item"
                style="background-image: url('https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=1200');">
                <div class="carousel-overlay"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-8">
                            <div class="carousel-caption">
                                <h1>Education for Every Child</h1>
                                <p>Building schools and providing quality education in underserved communities
                                    worldwide.</p>
                                <a href="#" class="btn btn-custom btn-primary-custom">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item"
                style="background-image: url('https://images.unsplash.com/photo-1498837167928-4f0b2a5e5d1f?w=1200');">
                <div class="carousel-overlay"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-8">
                            <div class="carousel-caption">
                                <h1>Healthcare Access for All</h1>
                                <p>Delivering medical services and building resilient health systems in remote areas.
                                </p>
                                <a href="#" class="btn btn-custom btn-primary-custom">Support Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target=".hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target=".hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>

    <!-- ==================== Stats Section ==================== -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card fade-in">
                        <i class="fas fa-users"></i>
                        <h3 class="counter" data-target="15000">0</h3>
                        <p>Lives Impacted</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card fade-in">
                        <i class="fas fa-project-diagram"></i>
                        <h3 class="counter" data-target="250">0</h3>
                        <p>Active Projects</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card fade-in">
                        <i class="fas fa-globe"></i>
                        <h3 class="counter" data-target="45">0</h3>
                        <p>Countries Reached</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card fade-in">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h3 class="counter" data-target="5000">0</h3>
                        <p>Volunteers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== About Section ==================== -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="section-title fade-in">
                <h2>About Peace</h2>
                <p>Building a Better Tomorrow, Today</p>
            </div>
            <div class="about-content">
                <div class="about-image fade-in">
                    <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=600" alt="About Us">
                </div>
                <div class="about-text fade-in">
                    <h3>Our Story</h3>
                    <p>Founded in 2010, Peace began with a simple mission: to create positive change in
                        underserved communities. What started as a small initiative has grown into a global movement,
                        touching lives across 45 countries.</p>
                    <p>We believe that every individual deserves access to quality education, healthcare, and
                        opportunities for growth. Through our dedicated team and passionate volunteers, we work
                        tirelessly to turn this belief into reality.</p>
                    <p>Our approach combines grassroots engagement with sustainable development strategies, ensuring
                        that the communities we serve can thrive independently long after our projects conclude.</p>
                    <button class="btn btn-custom btn-primary-custom mt-3">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== Team Section ==================== -->
    <section id="team">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Our Team</h2>
                <p>Meet the People Making It Happen</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-card fade-in">
                        <div class="team-image">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="team-info">
                            <h4>Sarah Johnson</h4>
                            <p>Executive Director</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card fade-in">
                        <div class="team-image">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="team-info">
                            <h4>Michael Chen</h4>
                            <p>Operations Manager</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card fade-in">
                        <div class="team-image">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="team-info">
                            <h4>Priya Patel</h4>
                            <p>Program Coordinator</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card fade-in">
                        <div class="team-image">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="team-info">
                            <h4>David Martinez</h4>
                            <p>Community Outreach</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== Mission & Vision Section ==================== -->
    <section id="mission" class="mission-vision-section">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Mission & Vision</h2>
                <p>Guiding Our Path Forward</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mission-card fade-in">
                        <div class="mission-icon red">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <ul>
                            <li>Provide quality education to underprivileged children</li>
                            <li>Ensure access to healthcare in remote areas</li>
                            <li>Promote sustainable livelihood programs</li>
                            <li>Empower women through skill development</li>
                            <li>Protect and preserve the environment</li>
                            <li>Build resilient communities worldwide</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-card fade-in">
                        <div class="mission-icon teal">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <ul>
                            <li>A world where every child has access to education</li>
                            <li>Communities with adequate healthcare facilities</li>
                            <li>Economic independence for all families</li>
                            <li>Gender equality in all spheres of life</li>
                            <li>Sustainable development for future generations</li>
                            <li>Global partnerships for lasting change</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== News Section ==================== -->
    <section id="news">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Latest News</h2>
                <p>Stay Updated with Our Recent Activities</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="news-card fade-in">
                        <div class="news-image">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="news-content">
                            <div class="news-date"><i class="far fa-calendar-alt"></i> December 28, 2024</div>
                            <h4>New Education Center Opens in Rural India</h4>
                            <p>We're thrilled to announce the opening of our 50th education center, providing quality
                                learning opportunities to over 500 children in rural Maharashtra.</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-card fade-in">
                        <div class="news-image">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="news-content">
                            <div class="news-date"><i class="far fa-calendar-alt"></i> December 20, 2024</div>
                            <h4>Healthcare Initiative Reaches 10,000 Families</h4>
                            <p>Our mobile healthcare units have successfully provided medical services to 10,000
                                families in underserved regions across Southeast Asia.</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-card fade-in">
                        <div class="news-image">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="news-content">
                            <div class="news-date"><i class="far fa-calendar-alt"></i> December 15, 2024</div>
                            <h4>Annual Fundraiser Exceeds Goals</h4>
                            <p>Thanks to our generous supporters, this year's fundraising campaign raised $2.5 million,
                                surpassing our target and enabling expanded programs.</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== Contact Section ==================== -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Get In Touch</h2>
                <p>We'd Love to Hear From You</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form fade-in">
                        <h3 style="color: var(--primary-red); margin-bottom: 2rem;">Send Us a Message</h3>
                        <form>
                            <input type="text" class="form-control" placeholder="Your Name">
                            <input type="email" class="form-control" placeholder="Your Email">
                            <input type="text" class="form-control" placeholder="Subject">
                            <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                            <button type="button" class="btn btn-custom btn-primary-custom">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info fade-in">
                        <h3 style="color: var(--primary-red); margin-bottom: 2rem;">Contact Information</h3>
                        <div class="contact-item">
                            <div class="contact-icon red">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5>Address</h5>
                                <p>123 Hope Street, Global City<br>New York, NY 10001, USA</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon teal">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h5>Phone</h5>
                                <p>+1 (555) 123-4567<br>+1 (555) 987-6543</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon orange">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <p>info@hopefoundation.org<br>contact@hopefoundation.org</p>
                            </div>
                        </div>
                    </div>
                    <div class="map-placeholder fade-in">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== Footer ==================== -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4><i class="fas fa-hands-helping"></i> Peace</h4>
                    <p>Empowering communities and transforming lives through sustainable development, education, and
                        healthcare initiatives worldwide.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#team">Our Team</a></li>
                        <li><a href="#mission">Mission & Vision</a></li>
                        <li><a href="#news">Latest News</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Our Programs</h4>
                    <ul>
                        <li><a href="#">Education for All</a></li>
                        <li><a href="#">Healthcare Access</a></li>
                        <li><a href="#">Women Empowerment</a></li>
                        <li><a href="#">Sustainable Development</a></li>
                        <li><a href="#">Emergency Relief</a></li>
                        <li><a href="#">Community Building</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Get Involved</h4>
                    <ul>
                        <li><a href="#">Donate Now</a></li>
                        <li><a href="#">Become a Volunteer</a></li>
                        <li><a href="#">Partner With Us</a></li>
                        <li><a href="#">Corporate Sponsorship</a></li>
                        <li><a href="#">Fundraising Events</a></li>
                        <li><a href="#">Newsletter Signup</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Peace. All Rights Reserved. | Designed with <i class="fas fa-heart"
                        style="color: var(--orange);"></i> for a Better World</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        // ==================== Scroll Animations ====================
        $(document).ready(function () {
            // Fade in elements on scroll
            function checkScroll() {
                $('.fade-in').each(function () {
                    const elementTop = $(this).offset().top;
                    const windowBottom = $(window).scrollTop() + $(window).height();
                    if (windowBottom > elementTop + 100) {
                        $(this).addClass('visible');
                    }
                });
            }

            $(window).on('scroll', checkScroll);
            checkScroll(); // Initial check

            // Navbar scroll effect
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.navbar').addClass('scrolled');
                } else {
                    $('.navbar').removeClass('scrolled');
                }
            });

            // Smooth scroll for navigation links
            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                const target = $(this.hash);
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 70
                    }, 800);
                }
            });

            // Counter animation
            function animateCounter() {
                $('.counter').each(function () {
                    const $this = $(this);
                    const target = parseInt($this.attr('data-target'));
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;

                    const timer = setInterval(function () {
                        current += step;
                        if (current >= target) {
                            $this.text(target.toLocaleString());
                            clearInterval(timer);
                        } else {
                            $this.text(Math.floor(current).toLocaleString());
                        }
                    }, 16);
                });
            }

            // Trigger counter animation when stats section is visible
            let counterAnimated = false;
            $(window).on('scroll', function () {
                const statsTop = $('.stats-section').offset().top;
                const windowBottom = $(window).scrollTop() + $(window).height();
                if (windowBottom > statsTop && !counterAnimated) {
                    animateCounter();
                    counterAnimated = true;
                }
            });

            // Button hover effects
            $('.btn-custom').hover(
                function () {
                    $(this).css('transform', 'translateY(-3px)');
                },
                function () {
                    $(this).css('transform', 'translateY(0)');
                }
            );

            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.navbar').addClass('scrolled');
                } else {
                    $('.navbar').removeClass('scrolled');
                }
            });
        });
    </script>

</body>

</html>