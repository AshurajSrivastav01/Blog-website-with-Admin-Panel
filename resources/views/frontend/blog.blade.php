<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Blog</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #4e54c8;
            --secondary-color: #8f94fb;
            --dark-color: #212529;
            --light-color: #f8f9fa;
            --accent-color: #ff6b6b;
            --text-color: #333333;
            --text-light: #6c757d;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        /* Navbar styling */
        .navbar {
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .nav-link {
            font-weight: 500;
            margin: 0 0.5rem;
            position: relative;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover:after {
            width: 100%;
        }

        /* Search functionality */
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-icon {
            font-size: 1.2rem;
            color: var(--dark-color);
            cursor: pointer;
            padding: 0.5rem;
            transition: all 0.3s ease;
            z-index: 101;
        }

        .search-icon:hover {
            color: var(--primary-color);
        }

        .search-form {
            position: absolute;
            right: 0;
            width: 0;
            overflow: hidden;
            transition: width 0.3s ease;
            z-index: 100;
        }

        .search-form.expanded {
            width: 250px;
        }

        .search-input {
            border: 2px solid var(--primary-color);
            border-radius: 50px;
            padding: 0.5rem 1rem;
            width: 100%;
            outline: none;
            box-shadow: 0 2px 10px rgba(78, 84, 200, 0.2);
        }

        /* Hero section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 5rem 0;
            margin-bottom: 3rem;
            border-radius: 0 0 30px 30px;
        }

        /* Featured post card */
        .featured-post {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin-bottom: 2rem;
        }

        .featured-post:hover {
            transform: translateY(-5px);
        }

        .post-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
            height: 100%;
        }

        .post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .post-card img {
            height: 200px;
            object-fit: cover;
        }

        .post-card .card-title {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
        }

        .post-card .card-text {
            color: var(--text-light);
        }

        .category-badge {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 30px;
            font-size: 0.75rem;
            font-weight: 500;
            text-transform: uppercase;
        }

        /* Sidebar */
        .sidebar-widget {
            background-color: var(--light-color);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .sidebar-widget h4 {
            position: relative;
            padding-bottom: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .sidebar-widget h4:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 3px;
        }

        .popular-post {
            display: flex;
            margin-bottom: 1rem;
        }

        .popular-post img {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
        }

        .popular-post-content {
            padding-left: 1rem;
        }

        .popular-post-content h6 {
            font-size: 0.9rem;
            margin-bottom: 0.3rem;
        }

        .popular-post-content span {
            font-size: 0.75rem;
            color: var(--text-light);
        }

        .tag-cloud a {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            background-color: white;
            border-radius: 30px;
            margin: 0.3rem;
            font-size: 0.85rem;
            color: var(--text-color);
            text-decoration: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .tag-cloud a:hover {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
        }

        /* Newsletter */
        .newsletter-form {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border-radius: 15px;
            padding: 2rem;
            color: white;
            margin: 3rem 0;
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer-links h5 {
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.75rem;
        }

        .footer-links h5:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(to right, var(--accent-color), #ff8e8e);
            border-radius: 3px;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 0.5rem;
            color: white;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-section {
                padding: 3rem 0;
                border-radius: 0 0 20px 20px;
            }

            .navbar {
                padding: 1rem;
            }

            .search-form.expanded {
                width: 200px;
            }

            .popular-post {
                flex-direction: column;
            }

            .popular-post img {
                width: 100%;
                height: auto;
                margin-bottom: 0.5rem;
            }

            .popular-post-content {
                padding-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Blogosphere</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="search-container ms-3">
                    <div class="search-icon" id="searchIcon">
                        <i class="bi bi-search"></i>
                    </div>
                    <form class="search-form" id="searchForm">
                        <input type="search" class="search-input" placeholder="Search..." aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Discover Stories, Ideas, and Inspiration</h1>
            <p class="lead mb-4">Explore a world of captivating articles on technology, lifestyle, travel, and more.</p>
            <button class="btn btn-light btn-lg px-4 py-2">Start Reading</button>
        </div>
    </section>

    <!-- Featured Post -->
    <section class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-post bg-white">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="img-fluid h-100" alt="Featured Post" style="object-fit: cover;">
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 p-md-5">
                                <span class="category-badge">Technology</span>
                                <h2 class="mt-3">The Future of Artificial Intelligence in Everyday Life</h2>
                                <p class="text-muted">How AI is transforming our daily routines and what to expect in the coming years as technology continues to evolve at a rapid pace.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1160&q=80" alt="Author" class="rounded-circle me-2" width="40" height="40">
                                    <div>
                                        <h6 class="mb-0">Sarah Johnson</h6>
                                        <small class="text-muted">May 15, 2023 · 8 min read</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts & Sidebar -->
    <section class="container mb-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="post-card card h-100">
                            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <span class="category-badge">Travel</span>
                                <h5 class="card-title mt-2">10 Hidden Gems in Europe You Need to Visit</h5>
                                <p class="card-text">Discover breathtaking locations off the beaten path that will make your European adventure unforgettable.</p>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <small class="text-muted"><i class="bi bi-clock me-1"></i> 6 min read</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card card h-100">
                            <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1153&q=80" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <span class="category-badge">Health</span>
                                <h5 class="card-title mt-2">Morning Routines of Highly Successful People</h5>
                                <p class="card-text">Learn how starting your day with intention can dramatically improve your productivity and overall wellbeing.</p>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <small class="text-muted"><i class="bi bi-clock me-1"></i> 5 min read</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card card h-100">
                            <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <span class="category-badge">Food</span>
                                <h5 class="card-title mt-2">Easy Gourmet Recipes for Busy Weeknights</h5>
                                <p class="card-text">Impress your family with these delicious meals that take 30 minutes or less to prepare.</p>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <small class="text-muted"><i class="bi bi-clock me-1"></i> 7 min read</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="post-card card h-100">
                            <img src="https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <span class="category-badge">Technology</span>
                                <h5 class="card-title mt-2">How 5G Technology Will Change Our World</h5>
                                <p class="card-text">Explore the potential applications of 5G beyond faster smartphones, from smart cities to remote surgery.</p>
                            </div>
                            <div class="card-footer bg-white border-0 pt-0">
                                <small class="text-muted"><i class="bi bi-clock me-1"></i> 10 min read</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- About Widget -->
                <div class="sidebar-widget">
                    <h4>About Blog</h4>
                    <p>Welcome to our blog where we explore the latest trends in technology, travel, lifestyle, and more. Our mission is to inspire and inform.</p>
                    <div class="social-icons d-flex mt-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-pinterest"></i></a>
                    </div>
                </div>

                <!-- Popular Posts -->
                <div class="sidebar-widget">
                    <h4>Popular Posts</h4>
                    <div class="popular-post">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Popular Post">
                        <div class="popular-post-content">
                            <h6>The Best Tech Gadgets of 2023</h6>
                            <span><i class="bi bi-clock me-1"></i> Apr 28, 2023</span>
                        </div>
                    </div>
                    <div class="popular-post">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Popular Post">
                        <div class="popular-post-content">
                            <h6>10 Delicious Smoothie Recipes for Summer</h6>
                            <span><i class="bi bi-clock me-1"></i> May 5, 2023</span>
                        </div>
                    </div>
                    <div class="popular-post">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Popular Post">
                        <div class="popular-post-content">
                            <h6>How to Shop Sustainably on a Budget</h6>
                            <span><i class="bi bi-clock me-1"></i> May 12, 2023</span>
                        </div>
                    </div>
                </div>

                <!-- Categories -->
                <div class="sidebar-widget">
                    <h4>Categories</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Technology
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Travel
                            <span class="badge bg-primary rounded-pill">9</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Food
                            <span class="badge bg-primary rounded-pill">17</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Health
                            <span class="badge bg-primary rounded-pill">12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Lifestyle
                            <span class="badge bg-primary rounded-pill">10</span>
                        </li>
                    </ul>
                </div>

                <!-- Tags -->
                <div class="sidebar-widget">
                    <h4>Tags</h4>
                    <div class="tag-cloud">
                        <a href="#">Tech</a>
                        <a href="#">Travel</a>
                        <a href="#">Recipes</a>
                        <a href="#">Health</a>
                        <a href="#">Fitness</a>
                        <a href="#">Finance</a>
                        <a href="#">Design</a>
                        <a href="#">Art</a>
                        <a href="#">Music</a>
                        <a href="#">Books</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="container">
        <div class="newsletter-form text-center">
            <h2 class="mb-3">Subscribe to Our Newsletter</h2>
            <p class="mb-4">Get the latest posts delivered straight to your inbox.</p>
            <form class="row g-3 justify-content-center">
                <div class="col-md-6">
                    <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-light btn-lg w-100">Subscribe</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="text-white mb-4">Blogosphere</h3>
                    <p>A platform for sharing ideas, inspiration, and knowledge across various topics from around the world.</p>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Categories</h5>
                        <ul>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-links">
                        <h5>Contact Info</h5>
                        <ul>
                            <li><i class="bi bi-geo-alt me-2"></i> 123 Blog Street, New York, NY</li>
                            <li><i class="bi bi-envelope me-2"></i> info@blogosphere.com</li>
                            <li><i class="bi bi-phone me-2"></i> +1 (234) 567-8900</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1)">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 Blogosphere. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Service</a></li>
                        <li class="list-inline-item"><a href="#">Site Map</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchIcon = document.getElementById('searchIcon');
            const searchForm = document.getElementById('searchForm');

            // Toggle search form on icon click
            searchIcon.addEventListener('click', function() {
                searchForm.classList.toggle('expanded');

                // Focus on input when expanded
                if (searchForm.classList.contains('expanded')) {
                    setTimeout(function() {
                        searchForm.querySelector('input').focus();
                    }, 300);
                }
            });

            // Close search when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideSearch = searchIcon.contains(event.target) || searchForm.contains(event.target);

                if (!isClickInsideSearch && searchForm.classList.contains('expanded')) {
                    searchForm.classList.remove('expanded');
                }
            });

            // Prevent search form click from closing the form
            searchForm.addEventListener('click', function(event) {
                event.stopPropagation();
            });
        });
    </script>
</body>
</html>
