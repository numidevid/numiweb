<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NUMI - Gaming Community</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&family=Bebas+Neue&display=swap" rel="stylesheet">
        
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                font-family: 'Inter', sans-serif;
                background-color: #211E24;
                color: white;
                line-height: 1.6;
                overflow-x: hidden;
            }
            
            /* Main Content Styles */
            .main-content {
                padding-top: 100px;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #141216;
                width: 100%;
                position: relative;
            }
            
            .content-wrapper {
                width: 100%;
                max-width: none;
                margin: 0;
                padding: 0 4rem;
                text-align: center;
                position: relative;
                z-index: 2;
            }
            
            .headline {
                font-size: clamp(6.5rem, 8vw, 4rem);
                font-weight: 700;
                line-height: 1.1;
                margin-bottom: 2rem;
                width: 100%;
                font-family: 'Bebas Neue', sans-serif;
                font-weight: 400;
                letter-spacing: 0.5px;
                text-align: center;
            }
            
            .headline .highlight {
                color: #9B59B6;
            }
            
            .description {
                font-size: clamp(1rem, 2.5vw, 1.25rem);
                color: #E0E0E0;
                margin-bottom: 3rem;
                width: 100%;
                max-width: none;
                margin-left: 0;
                margin-right: 0;
                line-height: 1.7;
                font-family: 'Montserrat', sans-serif;
                text-align: center;
            }
            
            .cta-buttons {
                display: flex;
                gap: 1.5rem;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }

            .cta-community-buttons {
                display: flex;
                gap: 1.5rem;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }
            
            .btn {
                padding: 1rem 2.5rem;
                border-radius: 8px;
                text-decoration: none;
                font-weight: 600;
                font-size: 1.1rem;
                transition: all 0.3s ease;
                display: inline-block;
                white-space: nowrap;
            }
            
            .btn-primary {
                background: #9B59B6;
                color: white;
                border: none;
                font-family: 'Montserrat', sans-serif;
                border-radius: 2rem;
            }
            
            .btn-primary:hover {
                background: #8E44AD;
                transform: translateY(-2px);
            }
            
            .btn-secondary {
                background: transparent;
                color: white;
                border: 2px solid #666;
                border-radius: 2rem;
            }
            
            .btn-secondary:hover {
                border-color: #9B59B6;
                color: #9B59B6;
                transform: translateY(-2px);
            }
            
            /* Section Styles */
            .section {
                padding: 6rem 2rem;
                width: 100%;
                margin: 0;
                box-sizing: border-box;
                position: relative;
            }
            
            /* Specific section backgrounds to ensure proper alternation */
            .about-section {
                background-color: #1c1a1f;
            }
            
            .event-section {
                background-color: #141216;
            }
            
            .numizens-section {
                background-color: #1c1a1f;
            }
            
            .community-section {
                background-color: #141216;
            }
            
            .section-content {
                width: 100%;
                max-width: none;
                margin: 0;
                display: flex;
                gap: 4rem;
                align-items: flex-start;
                position: relative;
            }
            
            .section-title {
                display: flex;
                align-items: flex-start;
                gap: 2rem;
                margin-bottom: 3rem;
                width: 100%;
                max-width: none;
                margin-left: 0;
                margin-right: 0;
                position: relative;
            }
            
            .section-number {
                font-size: 1rem;
                color: #9B59B6;
                font-weight: 400;
                writing-mode: vertical-rl;
                text-orientation: mixed;
                transform: rotate(180deg);
                flex-shrink: 0;
                margin-top: 0.5rem;
            }
            
            .section-heading {
                font-size: clamp(2.5rem, 6vw, 3.5rem);
                font-weight: 700;
                color: white;
                line-height: 1.1;
                font-family: 'Bebas Neue', sans-serif;
            }
            
            .section-text {
                flex: 1;
                font-size: clamp(1rem, 2vw, 1.1rem);
                color: #E0E0E0;
                line-height: 1.7;
                max-width: 600px;
                font-family: 'Montserrat', sans-serif;
            }
            
            /* About Section Specific */
            .about-section .section-content {
                justify-content: space-between;
                align-items: flex-start;
                gap: 4rem;
            }
            
            .about-title-section {
                display: flex;
                align-items: flex-start;
                gap: 2rem;
                flex-shrink: 0;
            }
            
            .about-heading {
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .about-heading .headline {
                margin-bottom: 0;
                margin-left: 4rem;
                text-align: left;
                font-size: clamp(6rem, 6vw, 3.5rem);
            }
            
            .about-section .section-text {
                flex: 1;
                max-width: 800px;
                margin-right: 4rem;
            }
            
            /* Event Section Specific Styles */
            .event-section {
                text-align: center;
            }
            
            .event-section .section-title {
                justify-content: center;
                margin-bottom: 2rem;
            }
            
            .event-subtitle {
                font-size: clamp(1rem, 2.5vw, 1.2rem);
                color: #B0B0B0;
                margin-bottom: 3rem;
                font-style: italic;
                font-family: 'Montserrat', sans-serif;
                width: 100%;
                max-width: none;
                margin-left: 0;
                margin-right: 0;
                text-align: center;
            }
            
            .image-carousel {
                position: relative;
                margin: 3rem auto;
                max-width: 1200px;
                width: 100%;
                border-radius: 12px;
                overflow: hidden;
            }
            
            .carousel-image {
                width: 100%;
                height: 450px;
                object-fit: cover;
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            }
            
            .carousel-navigation {
                position: relative;
                max-width: 1200px;
                width: 100%;
                margin: 0 auto;
                height: 0;
            }
            
            .carousel-nav {
                position: absolute;
                top: -325px;
                background: #9B59B6;
                border: none;
                color: white;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.3s ease;
                z-index: 10;
                font-size: 1.5rem;
                font-weight: bold;
            }
            
            .carousel-nav:hover {
                background: #8E44AD;
                transform: scale(1.1);
            }
            
            .carousel-nav.prev {
                left: -60px;
            }
            
            .carousel-nav.next {
                right: -60px;
            }
            
            .event-title {
                font-size: clamp(2rem, 5vw, 2.5rem);
                font-weight: 400;
                color: white;
                margin: 2rem 0 1.5rem 0;
                font-family: 'Bebas Neue', sans-serif;
                letter-spacing: 0.5px;
                width: 100%;
                max-width: 1200px;
                margin-left: 0;
                margin-right: auto;
                text-align: left;
            }
            
            .event-description {
                font-size: clamp(1rem, 2vw, 1.1rem);
                color: #E0E0E0;
                line-height: 1.7;
                max-width: 1200px;
                width: 100%;
                margin: 0;
                margin-right: auto;
                font-family: 'Montserrat', sans-serif;
                text-align: left;
            }
            
            /* Event Details Container */
            .event-details-container {
                max-width: 1200px;
                width: 100%;
                margin: 0 auto;
                text-align: left;
            }
            
            /* NUMIZENS Section Styles */
            .numizens-section .section-content {
                justify-content: space-between;
                align-items: flex-start;
                gap: 2rem;
            }
            
            .numizens-image {
                flex: 1;
                max-width: 500px;
                margin-right: 2rem;
                margin-left: 10rem;
            }
            
            .community-image {
                width: 100%;
                height: 450px;
                object-fit: cover;
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            }
            
            .numizens-content {
                flex: 1;
                max-width: 1000px;
            }
            
            .numizens-heading {
                font-size: clamp(2.5rem, 6vw, 3.5rem);
                font-weight: 400;
                color: white;
                margin-bottom: 2rem;
                font-family: 'Bebas Neue', sans-serif;
                letter-spacing: 0.5px;
                text-align: left;
                line-height: 1.1;
            }
            
            .numizens-description {
                font-size: clamp(1rem, 2vw, 1.1rem);
                color: #E0E0E0;
                line-height: 1.7;
                margin-bottom: 2rem;
                font-family: 'Montserrat', sans-serif;
                text-align: left;
            }
            
            .numizens-section .cta-buttons {
                justify-content: flex-start;
                margin-top: 2rem;
            }
            
            /* Community Section Specific */
            .community-section .section-title {
                justify-content: center;
                margin-bottom: 2rem;
            }
            
            .community-section .event-subtitle {
                text-align: center;
                margin-bottom: 2rem;
            }
            
            .community-section .cta-community-buttons {
                margin-top: 2rem;
            }
            
            /* Footer Styles */
            .footer {
                background: #9B59B6;
                padding: 1rem 0;
                margin-top: 0;
                width: 100%;
            }
            
            .footer-content {
                width: 100%;
                max-width: none;
                margin: 0;
                text-align: center;
                padding: 0 2rem;
                font-family: 'Montserrat', sans-serif;
            }
            
            .footer-content p {
                color: white;
                font-size: 1.1rem;
                font-weight: 500;
            }
            
            /* Responsive Design */
            @media (max-width: 768px) {
                .content-wrapper {
                    padding: 0 2rem;
                }
                
                .section {
                    padding: 4rem 1rem;
                }
                
                .section-content {
                    flex-direction: column;
                    gap: 2rem;
                }
                
                .about-section .section-text {
                    margin-left: 0;
                    margin-top: 1rem;
                }
                
                .numizens-image {
                    margin-right: 0;
                    margin-bottom: 1rem;
                }
                
                .numizens-section .cta-buttons {
                    justify-content: center;
                }
                
                .cta-buttons {
                    flex-direction: column;
                    align-items: center;
                }
                
                .btn {
                    text-align: center;
                    width: 100%;
                    max-width: 300px;
                }
                
                .carousel-nav {
                    width: 40px;
                    height: 40px;
                }
                
                .carousel-nav.prev {
                    left: -20px;
                }
                
                .carousel-nav.next {
                    right: -20px;
                }
            }
            
            @media (max-width: 480px) {
                .content-wrapper {
                    padding: 0 1rem;
                }
                
                .section {
                    padding: 3rem 1rem;
                }
                
                .section-title {
                    gap: 1rem;
                }
                
                .section-number {
                    font-size: 0.9rem;
                }
            }
            
            /* Zoom-friendly adjustments */
            @media (min-resolution: 2dppx) {
                .section-number {
                    font-size: 0.9rem;
                }
                
                .carousel-nav {
                    width: 45px;
                    height: 45px;
                }
            }
            
            @media (min-resolution: 3dppx) {
                .section-number {
                    font-size: 0.8rem;
                }
                
                .carousel-nav {
                    width: 40px;
                    height: 40px;
                }
            }

            html {
              scroll-behavior: smooth;
            }
        </style>
    </head>
    <body>
        <!-- Fixed Header -->
        @include('navbar.header')

        <!-- Hero Section -->
        @include('sections.hero')

        <!-- About Us Section -->
        <section id="about" class="section about-section">
            @include('sections.about')
        </section>

        <!-- Event Section -->
        <section id="event" class="section event-section">
            @include('sections.event')
        </section>

        <!-- Meet Our NUMIZENS Section -->
        <section id="numizens" class="section numizens-section">
            @include('sections.numizens')
        </section>

        <!-- Enter The Community Section -->
        <section id="community" class="section community-section">
            @include('sections.community')
        </section>

        <!-- Footer -->
        @include('sections.footer')

        <!-- Carousel Script -->
        @include('sections.carousel-script')

        <script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            const headerOffset = document.querySelector('.header')?.offsetHeight || 0;
            const elementPosition = target.getBoundingClientRect().top + window.pageYOffset;
            const offsetPosition = elementPosition - headerOffset;
            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
        }
    });
});
</script>
    </body>
</html>
