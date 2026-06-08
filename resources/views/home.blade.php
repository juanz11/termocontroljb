<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TERMOCONTROLJB - Soluciones en Control de Temperatura</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f8ff;
            color: #003366;
        }
        
        /* Header */
        .header {
            background-color: #003366;
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo img {
            height: 60px;
        }
        
        .nav-menu {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        
        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-menu a:hover {
            color: #4A90E2;
        }
        
        .nav-menu a.active {
            color: #4A90E2;
        }

        /* Mobile Menu Button */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
        }

        /* Mobile Nav */
        .mobile-nav {
            display: none;
            background-color: #003366;
            padding: 1rem 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
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
            color: white;
            text-decoration: none;
            font-weight: 500;
            display: block;
            padding: 0.5rem 0;
        }

        .mobile-nav a:hover,
        .mobile-nav a.active {
            color: #4A90E2;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #003366 0%, #0056b3 100%);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            word-wrap: break-word;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
        }
        
        .cta-button {
            background-color: #4A90E2;
            color: #ffffff;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 144, 226, 0.4);
        }
        
        /* About Section */
        .about {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
        }
        
        .about h2 {
            font-size: 2.5rem;
            color: #003366;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        
        .about-text p {
            line-height: 1.8;
            margin-bottom: 1rem;
        }
        
        .about-image {
            background-color: #4A90E2;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
        }
        
        /* Services Section */
        .services {
            background-color: white;
            padding: 4rem 2rem;
        }
        
        .services h2 {
            font-size: 2.5rem;
            color: #003366;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .services-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .service-card {
            background-color: #e6f2ff;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .service-card h3 {
            color: #003366;
            margin-bottom: 1rem;
        }
        
        /* Contact Section */
        .contact {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
        }
        
        .contact h2 {
            font-size: 2.5rem;
            color: #003366;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .contact-item {
            text-align: center;
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
        }
        
        .contact-item h3 {
            color: #003366;
            margin-bottom: 1rem;
        }
        
        /* Footer */
        .footer {
            background-color: #003366;
            color: white;
            padding: 2rem;
            text-align: center;
        }
        
        .footer a {
            color: #4A90E2;
            text-decoration: none;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header {
                padding: 1rem;
            }
            
            .logo img {
                height: 45px;
            }
            
            .nav-menu {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero {
                padding: 3rem 1rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
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
                padding: 1.5rem;
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
                padding: 1.5rem;
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
                padding: 1.5rem;
            }
            
            .footer {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.5rem;
            }
            
            .hero p {
                font-size: 0.9rem;
            }
            
            .about h2,
            .services h2,
            .contact h2 {
                font-size: 1.5rem;
            }
            
            .logo img {
                height: 35px;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .contact-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <img src="{{ asset('logo.svg') }}" alt="TERMOCONTROLJB Logo">
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#" class="active">Inicio</a></li>
                    <li><a href="#about">Quiénes Somos</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">☰</button>
        </div>
    </header>

    <!-- Mobile Navigation -->
    <nav class="mobile-nav" id="mobileNav">
        <ul>
            <li><a href="#" class="active" onclick="toggleMobileMenu()">Inicio</a></li>
            <li><a href="#about" onclick="toggleMobileMenu()">Quiénes Somos</a></li>
            <li><a href="#services" onclick="toggleMobileMenu()">Servicios</a></li>
            <li><a href="#contact" onclick="toggleMobileMenu()">Contacto</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>TERMOCONTROLJB</h1>
        <p>Soluciones expertas en control de temperatura y sistemas térmicos industriales</p>
        <a href="#contact" class="cta-button">Contáctanos</a>
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
                <div style="font-size: 5rem;">🌡️</div>
                <p style="margin-top: 1rem; color: #003366;">Control Preciso</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <h2>Nuestros Servicios</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🔧</div>
                <h3>Instalación</h3>
                <p>Instalación profesional de sistemas de control térmico</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🔬</div>
                <h3>Mantenimiento</h3>
                <p>Servicios de mantenimiento preventivo y correctivo</p>
            </div>
            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Consultoría</h3>
                <p>Asesoría técnica especializada en procesos térmicos</p>
            </div>
            <div class="service-card">
                <div class="service-icon">⚡</div>
                <h3>Eficiencia</h3>
                <p>Optimización del consumo energético en procesos industriales</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2>Contáctanos</h2>
        <div class="contact-grid">
            <div class="contact-item">
                <h3>Teléfono</h3>
                <p>+58 424 400 8639</p>
            </div>
            <div class="contact-item">
                <h3>Email</h3>
                <p>info@termocontroljb.com</p>
            </div>
            <div class="contact-item">
                <h3>Ubicación</h3>
                <p>Venezuela</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 TERMOCONTROLJB. Todos los derechos reservados.</p>
    </footer>

    <script>
        function toggleMobileMenu() {
            const mobileNav = document.getElementById('mobileNav');
            mobileNav.classList.toggle('active');
        }
    </script>
</body>
</html>
