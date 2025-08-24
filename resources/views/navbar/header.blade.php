<!-- Header Styles -->
<style>
    .header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background-color: #211E24;
        padding: 1rem 2rem;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }
    
    .header-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: white;
    }
    
    .logo-image {
        height: 40px;
        width: auto;
        display: block;
    }
    
    .nav-links {
        display: flex;
        gap: 2rem;
        list-style: none;
    }
    
    .nav-links a {
        color: white;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
        font-family: 'Montserrat', sans-serif;
    }
    
    .nav-links a:hover {
        color: #9B59B6;
    }
    
    .nav-links a.active {
        color: #9B59B6;
    }
    
    .contact-btn {
        background: transparent;
        border: 1px solid #9B59B6;
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        font-family: 'Montserrat', sans-serif;
        border-radius: 2rem;
    }
    
    .contact-btn:hover {
        background: #9B59B6;
        color: white;
    }
    
    /* Responsive Header */
    @media (max-width: 768px) {
        .header {
            padding: 1rem;
        }
        
        .nav-links {
            display: none;
        }
    }

    html {
      scroll-behavior: smooth;
    }
</style>

<!-- Fixed Header -->
<header class="header">
    <div class="header-content">
        <div class="logo">
            <img src="{{ asset('images/numi_logo_white.png') }}" alt="NUMI Logo" class="logo-image">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#event">Event</a></li>
                <li><a href="#numizens">Our Team</a></li>
                <li><a href="#community">Community</a></li>
            </ul>
        </nav>
        <a href="#" class="contact-btn">Contact</a>
    </div>
</header>

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

