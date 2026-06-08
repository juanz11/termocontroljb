<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TERMOCONTROLJB - Soluciones en Control de Temperatura</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            overflow-x: hidden;
        }
        
        /* Top Bar */
        .top-bar {
            background-color: #1a1a1a;
            color: #fff;
            padding: 0.5rem 2rem;
            font-size: 0.85rem;
        }
        
        .top-bar-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .top-bar-left {
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        
        .top-bar-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .top-bar-item i {
            color: #fd7800;
        }
        
        .top-bar-item a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .top-bar-item a:hover {
            color: #fd7800;
        }
        
        .top-bar-right {
            display: flex;
            gap: 1rem;
        }
        
        .social-link {
            color: #fff;
            font-size: 1rem;
            transition: color 0.3s, transform 0.3s;
        }
        
        .social-link:hover {
            color: #fd7800;
            transform: translateY(-2px);
        }
        
        /* Header */
        .header {
            background-color: #fff;
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        
        .header.scrolled {
            padding: 0.5rem 2rem;
        }
        
        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo img {
            height: 70px;
            transition: height 0.3s;
        }
        
        .header.scrolled .logo img {
            height: 50px;
        }
        
        .nav-menu {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        
        .nav-menu a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #fd7800;
            transition: width 0.3s;
        }
        
        .nav-menu a:hover::after {
            width: 100%;
        }
        
        .nav-menu a:hover {
            color: #fd7800;
        }
        
        .nav-menu a.active {
            color: #fd7800;
        }
        
        .nav-menu a.active::after {
            width: 100%;
        }

        /* Mobile Menu Button */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: #333;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
        }

        /* Mobile Nav */
        .mobile-nav {
            display: none;
            background-color: #fff;
            padding: 1rem 2rem;
            border-top: 1px solid #eee;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .mobile-nav.active {
            display: block;
        }

        .mobile-nav ul {
            list-style: none;
            padding: 0;
        }

        .mobile-nav li {
            margin-bottom: 1rem;
        }

        .mobile-nav a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            display: block;
            padding: 0.5rem 0;
            transition: color 0.3s;
        }

        .mobile-nav a:hover,
        .mobile-nav a.active {
            color: #fd7800;
        }
        
        /* Hero Section with Slider */
        .hero {
            position: relative;
            height: 600px;
            overflow: hidden;
        }
        
        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        
        .hero-slide.active {
            opacity: 1;
        }
        
        .hero-slide-1 {
            background: linear-gradient(135deg, #003366 0%, #0056b3 100%);
        }
        
        .hero-slide-2 {
            background: linear-gradient(135deg, #fd7800 0%, #ff9500 100%);
        }
        
        .hero-slide-3 {
            background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);
        }
        
        .hero-content {
            text-align: center;
            color: white;
            padding: 2rem;
            max-width: 800px;
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            word-wrap: break-word;
            animation: fadeInUp 1s ease-out;
        }
        
        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.3s backwards;
        }
        
        .cta-button {
            background-color: #fd7800;
            color: #ffffff;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            animation: fadeInUp 1s ease-out 0.6s backwards;
        }
        
        .cta-button:hover {
            background-color: #e66a00;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(253, 120, 0, 0.4);
        }
        
        .hero-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }
        
        .hero-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .hero-dot.active {
            background-color: #fff;
            transform: scale(1.2);
        }
        
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
        
        /* About Section */
        .about {
            max-width: 1400px;
            margin: 5rem auto;
            padding: 0 2rem;
        }
        
        .about h2 {
            font-size: 2.5rem;
            color: #003366;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }
        
        .about h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: #fd7800;
            margin: 1rem auto;
            border-radius: 2px;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }
        
        .about-text p {
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #555;
            font-size: 1.05rem;
        }
        
        .about-image {
            background: linear-gradient(135deg, #003366 0%, #0056b3 100%);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0,51,102,0.2);
            transition: transform 0.3s;
        }
        
        .about-image:hover {
            transform: translateY(-10px);
        }
        
        .about-image-icon {
            font-size: 5rem;
            margin-bottom: 1rem;
        }
        
        /* Statistics Section */
        .stats {
            background: linear-gradient(135deg, #003366 0%, #0056b3 100%);
            padding: 5rem 2rem;
            color: white;
        }
        
        .stats-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
        }
        
        .stat-item {
            padding: 2rem;
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            color: #fd7800;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* Brands Section */
        .brands {
            background-color: #fff;
            padding: 4rem 2rem;
        }
        
        .brands h2 {
            font-size: 2.5rem;
            color: #003366;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }
        
        .brands h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: #fd7800;
            margin: 1rem auto;
            border-radius: 2px;
        }
        
        .brands-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 2rem;
        }
        
        .brand-item {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
            border: 2px solid transparent;
        }
        
        .brand-item:hover {
            border-color: #fd7800;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .brand-icon {
            font-size: 3rem;
            color: #003366;
            margin-bottom: 1rem;
        }
        
        .brand-name {
            font-weight: 600;
            color: #333;
        }
        
        /* Services Section */
        .services {
            background-color: #f8f9fa;
            padding: 5rem 2rem;
        }
        
        .services h2 {
            font-size: 2.5rem;
            color: #003366;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }
        
        .services h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: #fd7800;
            margin: 1rem auto;
            border-radius: 2px;
        }
        
        .services-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
        }
        
        .service-card {
            background-color: #fff;
            padding: 2.5rem;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #fd7800, #ff9500);
            transform: scaleX(0);
            transition: transform 0.3s;
        }
        
        .service-card:hover::before {
            transform: scaleX(1);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .service-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: #fd7800;
            transition: transform 0.3s;
        }
        
        .service-card:hover .service-icon {
            transform: scale(1.1);
        }
        
        .service-card h3 {
            color: #003366;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .service-card p {
            color: #666;
            line-height: 1.6;
        }
        
        /* Testimonials Section */
        .testimonials {
            background: linear-gradient(135deg, #003366 0%, #0056b3 100%);
            padding: 5rem 2rem;
            color: white;
        }
        
        .testimonials h2 {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }
        
        .testimonials h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: #fd7800;
            margin: 1rem auto;
            border-radius: 2px;
        }
        
        .testimonials-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }
        
        .testimonial-card {
            background-color: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .testimonial-text {
            font-style: italic;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .testimonial-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fd7800;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .testimonial-name {
            font-weight: 600;
        }
        
        .testimonial-role {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        /* Contact Section */
        .contact {
            max-width: 1400px;
            margin: 5rem auto;
            padding: 0 2rem;
        }
        
        .contact h2 {
            font-size: 2.5rem;
            color: #003366;
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
        }
        
        .contact h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: #fd7800;
            margin: 1rem auto;
            border-radius: 2px;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
        }
        
        .contact-item {
            text-align: center;
            padding: 2.5rem;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s;
        }
        
        .contact-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .contact-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #fd7800, #ff9500);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.8rem;
            color: white;
        }
        
        .contact-item h3 {
            color: #003366;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .contact-item p {
            color: #666;
            line-height: 1.6;
        }
        
        /* Footer */
        .footer {
            background-color: #1a1a1a;
            color: #fff;
            padding: 4rem 2rem 2rem;
        }
        
        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }
        
        .footer-section h3 {
            color: #fd7800;
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
        }
        
        .footer-section p {
            color: #aaa;
            line-height: 1.8;
            margin-bottom: 1rem;
        }
        
        .footer-section ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-section li {
            margin-bottom: 0.8rem;
        }
        
        .footer-section a {
            color: #aaa;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-section a:hover {
            color: #fd7800;
        }
        
        .footer-social {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .footer-social a {
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        
        .footer-social a:hover {
            background-color: #fd7800;
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            max-width: 1400px;
            margin: 0 auto;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            color: #aaa;
        }
        
        /* WhatsApp Widget */
        .whatsapp-widget {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }
        
        .whatsapp-button {
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
            transition: all 0.3s;
            cursor: pointer;
            border: none;
        }
        
        .whatsapp-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
        }
        
        .whatsapp-tooltip {
            position: absolute;
            bottom: 70px;
            right: 0;
            background-color: #fff;
            color: #333;
            padding: 0.8rem 1.2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            font-size: 0.9rem;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
        }
        
        .whatsapp-widget:hover .whatsapp-tooltip {
            opacity: 1;
            visibility: visible;
        }
        
        /* Cookie Consent */
        .cookie-consent {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #1a1a1a;
            color: #fff;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
            z-index: 999;
            transform: translateY(100%);
            transition: transform 0.5s;
        }
        
        .cookie-consent.show {
            transform: translateY(0);
        }
        
        .cookie-text {
            flex: 1;
            font-size: 0.95rem;
        }
        
        .cookie-text a {
            color: #fd7800;
            text-decoration: none;
        }
        
        .cookie-buttons {
            display: flex;
            gap: 1rem;
        }
        
        .cookie-btn {
            padding: 0.6rem 1.5rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .cookie-accept {
            background-color: #fd7800;
            color: white;
        }
        
        .cookie-accept:hover {
            background-color: #e66a00;
        }
        
        .cookie-decline {
            background-color: transparent;
            color: #aaa;
            border: 1px solid #aaa;
        }
        
        .cookie-decline:hover {
            border-color: #fff;
            color: #fff;
        }
        
        /* Scroll to Top */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            left: 30px;
            width: 50px;
            height: 50px;
            background-color: #003366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 999;
            box-shadow: 0 5px 15px rgba(0,51,102,0.3);
        }
        
        .scroll-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .scroll-top:hover {
            background-color: #fd7800;
            transform: translateY(-3px);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .top-bar {
                display: none;
            }
            
            .header {
                padding: 1rem;
            }
            
            .logo img {
                height: 50px;
            }
            
            .header.scrolled .logo img {
                height: 40px;
            }
            
            .nav-menu {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero {
                height: 500px;
            }
            
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .cta-button {
                padding: 0.8rem 1.5rem;
                font-size: 1rem;
            }
            
            .about {
                margin: 3rem auto;
                padding: 0 1rem;
            }
            
            .about h2 {
                font-size: 2rem;
            }
            
            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .about-image {
                padding: 2rem;
            }
            
            .stats {
                padding: 3rem 1rem;
            }
            
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
            
            .brands {
                padding: 3rem 1rem;
            }
            
            .brands h2 {
                font-size: 2rem;
            }
            
            .brands-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
            
            .services {
                padding: 3rem 1rem;
            }
            
            .services h2 {
                font-size: 2rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .service-card {
                padding: 2rem;
            }
            
            .testimonials {
                padding: 3rem 1rem;
            }
            
            .testimonials h2 {
                font-size: 2rem;
            }
            
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
            
            .contact {
                margin: 3rem auto;
                padding: 0 1rem;
            }
            
            .contact h2 {
                font-size: 2rem;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .contact-item {
                padding: 2rem;
            }
            
            .footer {
                padding: 3rem 1rem 1.5rem;
            }
            
            .footer-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .whatsapp-widget {
                bottom: 20px;
                right: 20px;
            }
            
            .whatsapp-button {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }
            
            .scroll-top {
                bottom: 20px;
                left: 20px;
                width: 45px;
                height: 45px;
            }
            
            .cookie-consent {
                flex-direction: column;
                text-align: center;
            }
            
            .cookie-buttons {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 1.5rem;
            }
            
            .hero-content p {
                font-size: 0.9rem;
            }
            
            .about h2,
            .services h2,
            .contact h2,
            .testimonials h2,
            .brands h2 {
                font-size: 1.5rem;
            }
            
            .logo img {
                height: 40px;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .brands-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .contact-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .brands-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-container">
            <div class="top-bar-left">
                <div class="top-bar-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@termocontroljb.com">info@termocontroljb.com</a>
                </div>
                <div class="top-bar-item">
                    <i class="fas fa-phone"></i>
                    <span>+58 424 400 8639</span>
                </div>
                <div class="top-bar-item">
                    <i class="fas fa-clock"></i>
                    <span>Lun - Vie: 8:00am - 5:00pm</span>
                </div>
            </div>
            <div class="top-bar-right">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header" id="header">
        <div class="header-container">
            <div class="logo">
                <img src="{{ asset('logo.svg') }}" alt="TERMOCONTROLJB Logo">
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#" class="active">Inicio</a></li>
                    <li><a href="#about">Quiénes Somos</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#brands">Marcas</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav" id="mobileNav">
        <ul>
            <li><a href="#" class="active" onclick="toggleMobileMenu()">Inicio</a></li>
            <li><a href="#about" onclick="toggleMobileMenu()">Quiénes Somos</a></li>
            <li><a href="#services" onclick="toggleMobileMenu()">Servicios</a></li>
            <li><a href="#brands" onclick="toggleMobileMenu()">Marcas</a></li>
            <li><a href="#contact" onclick="toggleMobileMenu()">Contacto</a></li>
        </ul>
    </nav>

    <!-- Hero Section with Slider -->
    <section class="hero">
        <div class="hero-slide hero-slide-1 active">
            <div class="hero-content">
                <h1>TERMOCONTROLJB</h1>
                <p>Soluciones expertas en control de temperatura y sistemas térmicos industriales</p>
                <a href="#contact" class="cta-button">Contáctanos</a>
            </div>
        </div>
        <div class="hero-slide hero-slide-2">
            <div class="hero-content">
                <h1>Excelencia en Control Térmico</h1>
                <p>Más de 25 años de experiencia brindando soluciones integrales a la industria</p>
                <a href="#services" class="cta-button">Nuestros Servicios</a>
            </div>
        </div>
        <div class="hero-slide hero-slide-3">
            <div class="hero-content">
                <h1>Innovación y Tecnología</h1>
                <p>Implementamos las últimas tecnologías en control de temperatura para maximizar su eficiencia</p>
                <a href="#about" class="cta-button">Conócenos</a>
            </div>
        </div>
        <div class="hero-dots">
            <div class="hero-dot active" onclick="goToSlide(0)"></div>
            <div class="hero-dot" onclick="goToSlide(1)"></div>
            <div class="hero-dot" onclick="goToSlide(2)"></div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <h2>Quiénes Somos</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Somos una empresa dedicada a la optimización de procesos industriales a través de soluciones avanzadas en control de temperatura.</p>
                <p>Nos especializamos en implementar sistemas que mejoran la eficiencia operativa, garantizando el uso eficiente de energía y la protección de equipos.</p>
                <p>Con años de experiencia en el mercado, ofrecemos soluciones personalizadas adaptadas a las necesidades específicas de cada cliente.</p>
            </div>
            <div class="about-image">
                <div class="about-image-icon">🌡️</div>
                <p style="margin-top: 1rem; color: #fff;">Control Preciso</p>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-number" data-target="25">0</div>
                <div class="stat-label">Años de Experiencia</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="500">0</div>
                <div class="stat-label">Proyectos Completados</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="150">0</div>
                <div class="stat-label">Clientes Satisfechos</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="50">0</div>
                <div class="stat-label">Marcas Representadas</div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="brands" id="brands">
        <h2>Marcas que Representamos</h2>
        <div class="brands-grid">
            <div class="brand-item">
                <div class="brand-icon"><i class="fas fa-industry"></i></div>
                <div class="brand-name">Brand 1</div>
            </div>
            <div class="brand-item">
                <div class="brand-icon"><i class="fas fa-cogs"></i></div>
                <div class="brand-name">Brand 2</div>
            </div>
            <div class="brand-item">
                <div class="brand-icon"><i class="fas fa-thermometer-half"></i></div>
                <div class="brand-name">Brand 3</div>
            </div>
            <div class="brand-item">
                <div class="brand-icon"><i class="fas fa-fire"></i></div>
                <div class="brand-name">Brand 4</div>
            </div>
            <div class="brand-item">
                <div class="brand-icon"><i class="fas fa-tools"></i></div>
                <div class="brand-name">Brand 5</div>
            </div>
            <div class="brand-item">
                <div class="brand-icon"><i class="fas fa-wrench"></i></div>
                <div class="brand-name">Brand 6</div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <h2>Nuestros Servicios</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-tools"></i></div>
                <h3>Instalación</h3>
                <p>Instalación profesional de sistemas de control térmico</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-wrench"></i></div>
                <h3>Mantenimiento</h3>
                <p>Servicios de mantenimiento preventivo y correctivo</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                <h3>Consultoría</h3>
                <p>Asesoría técnica especializada en procesos térmicos</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-bolt"></i></div>
                <h3>Eficiencia</h3>
                <p>Optimización del consumo energético en procesos industriales</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-microchip"></i></div>
                <h3>Automatización</h3>
                <p>Sistemas de control automático de temperatura</p>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-clipboard-check"></i></div>
                <h3>Calibración</h3>
                <p>Servicios de calibración de instrumentos de medición</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>Lo Que Dicen Nuestros Clientes</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-text">"Excelente servicio y profesionalismo. Han optimizado nuestros procesos térmicos de manera notable."</div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">JM</div>
                    <div>
                        <div class="testimonial-name">Juan Martínez</div>
                        <div class="testimonial-role">Gerente de Operaciones</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-text">"Más de 10 años trabajando con ellos y siempre cumplen con los más altos estándares de calidad."</div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">MR</div>
                    <div>
                        <div class="testimonial-name">María Rodríguez</div>
                        <div class="testimonial-role">Directora Técnica</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-text">"Soluciones innovadoras que nos han permitido reducir costos significativamente."</div>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">CP</div>
                    <div>
                        <div class="testimonial-name">Carlos Pérez</div>
                        <div class="testimonial-role">Ingeniero Jefe</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2>Contáctanos</h2>
        <div class="contact-grid">
            <div class="contact-item">
                <div class="contact-icon"><i class="fas fa-phone"></i></div>
                <h3>Teléfono</h3>
                <p>+58 424 400 8639</p>
            </div>
            <div class="contact-item">
                <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                <h3>Email</h3>
                <p>info@termocontroljb.com</p>
            </div>
            <div class="contact-item">
                <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                <h3>Ubicación</h3>
                <p>Venezuela</p>
            </div>
            <div class="contact-item">
                <div class="contact-icon"><i class="fas fa-clock"></i></div>
                <h3>Horario</h3>
                <p>Lun - Vie: 8:00am - 5:00pm</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>TERMOCONTROLJB</h3>
                <p>Soluciones expertas en control de temperatura y sistemas térmicos industriales con más de 25 años de experiencia.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#about">Quiénes Somos</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#brands">Marcas</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Servicios</h3>
                <ul>
                    <li><a href="#">Instalación</a></li>
                    <li><a href="#">Mantenimiento</a></li>
                    <li><a href="#">Consultoría</a></li>
                    <li><a href="#">Eficiencia Energética</a></li>
                    <li><a href="#">Automatización</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contacto</h3>
                <p><i class="fas fa-phone"></i> +58 424 400 8639</p>
                <p><i class="fas fa-envelope"></i> info@termocontroljb.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Venezuela</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 TERMOCONTROLJB. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- WhatsApp Widget -->
    <div class="whatsapp-widget">
        <a href="https://wa.me/584244008639" target="_blank" class="whatsapp-button">
            <i class="fab fa-whatsapp"></i>
        </a>
        <div class="whatsapp-tooltip">¿Necesitas ayuda? Chatea con nosotros</div>
    </div>

    <!-- Cookie Consent -->
    <div class="cookie-consent" id="cookieConsent">
        <div class="cookie-text">
            Al navegar por este sitio web, acepta nuestra <a href="#">política de privacidad</a>.
        </div>
        <div class="cookie-buttons">
            <button class="cookie-btn cookie-accept" onclick="acceptCookies()">Aceptar</button>
            <button class="cookie-btn cookie-decline" onclick="declineCookies()">Cerrar</button>
        </div>
    </div>

    <!-- Scroll to Top -->
    <div class="scroll-top" id="scrollTop" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const mobileNav = document.getElementById('mobileNav');
            mobileNav.classList.toggle('active');
        }

        // Header Scroll Effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Hero Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.hero-dot');
        const totalSlides = slides.length;

        function goToSlide(index) {
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');
            currentSlide = index;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        function nextSlide() {
            goToSlide((currentSlide + 1) % totalSlides);
        }

        setInterval(nextSlide, 5000);

        // Statistics Counter Animation
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000;
                const step = target / (duration / 16);
                let current = 0;

                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };

                updateCounter();
            });
        }

        // Intersection Observer for Stats
        const statsSection = document.querySelector('.stats');
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        statsObserver.observe(statsSection);

        // Scroll to Top Button
        const scrollTopBtn = document.getElementById('scrollTop');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Cookie Consent
        function acceptCookies() {
            document.getElementById('cookieConsent').classList.remove('show');
            localStorage.setItem('cookiesAccepted', 'true');
        }

        function declineCookies() {
            document.getElementById('cookieConsent').classList.remove('show');
        }

        // Show cookie consent on first visit
        if (!localStorage.getItem('cookiesAccepted')) {
            setTimeout(() => {
                document.getElementById('cookieConsent').classList.add('show');
            }, 2000);
        }

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
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
    </script>
</body>
</html>
