<?php
require_once __DIR__.'/includes/auth.php';
startSession();
?>
<!doctype html>
<html lang="en">

<head>
    <title>ChachuKiBiryani - Authentic Indian Biryani Experience</title>
    <?php include 'includes/head.php'; ?>
    
    <!-- Additional Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        /* Reset and Base Styles */
        body {
            font-family: 'Poppins', sans-serif !important;
            line-height: 1.6;
            color: #333;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif !important;
            font-weight: 700;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 100vh;
            /* background: linear-gradient(135deg, rgba(44, 24, 16, 0.8) 0%, rgba(255, 107, 53, 0.6) 100%); */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('images/background.png') center/cover;
            z-index: -1;
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            opacity: 0.9;
            color:#F7931E;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 30px;
            line-height: 1.1;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-description {
            font-size: 1.0rem;
            font-weight:700;
            margin-bottom: 40px;
            opacity: 100%;
            color:#F7931E;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-hero-primary {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            color: white !important;
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-decoration: none;
            display: inline-block;
        }

        .btn-hero-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            color: white !important;
            text-decoration: none;
        }

        .btn-hero-secondary {
            background: transparent;
            border: 2px solid white;
            padding: 15px 40px;
            border-radius: 50px;
            color: white !important;
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-hero-secondary:hover {
            background: white;
            color: #2C1810 !important;
            transform: translateY(-3px);
            text-decoration: none;
        }

        /* Floating Elements */
        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .floating-element {
            position: absolute;
            opacity: 0.1;
            font-size: 3rem;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* Banner Section */
.banner-modern {
    background:rgb(232, 111, 46);
    padding: 15px 0;
    color: white;
}

.banner-content {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    gap: 60px;
}

.banner-item {
    text-align: center;
    display: flex;
    align-items: center;
    gap: 12px;
}

.banner-icon {
    font-size: 1.25rem;
    width: 20px;
    height: 20px;
    border: 2px solid white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.banner-text h4 {
    margin: 0;
    font-weight: 600;
    font-size: 15px;
    margin-bottom: 2px;
}

.banner-text p {
    margin: 0;
    font-size: 13px;
    font-weight: 400;
}

/* Enhanced Call Us Section - Third banner-item */
.banner-item:nth-child(3) {
    background: rgba(0, 0, 0, 0.8);
    padding: 18px 30px;
    border-radius: 50px;
    transition: all 0.3s ease;
    cursor: pointer;
    border: 2px solid transparent;
    position: relative;
    overflow: hidden;
}

.banner-item:nth-child(3)::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    transition: left 0.5s ease;
}

.banner-item:nth-child(3):hover {
    background: rgba(0, 0, 0, 0.9);
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    border-color: rgba(255, 255, 255, 0.3);
}

.banner-item:nth-child(3):hover::before {
    left: 100%;
}

.banner-item:nth-child(3):active {
    transform: translateY(-1px);
}

.banner-item:nth-child(3) .banner-icon {
    width: 28px;
    height: 28px;
    background: #FF6B35;
    border: none;
    font-size: 14px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 107, 53, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(255, 107, 53, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(255, 107, 53, 0);
    }
}

.banner-item:nth-child(3) .banner-text {
    text-align: left;
}

.banner-item:nth-child(3) .banner-text h4 {
    color: white;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 0.5px;
    margin-bottom: 3px;
}

.banner-item:nth-child(3) .banner-text p {
    color: #FF6B35;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 0.5px;
    transition: color 0.3s ease;
}

.banner-item:nth-child(3):hover .banner-text p {
    color: #FF8F65;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .banner-content {
        flex-direction: column;
        gap: 20px;
        padding: 0 15px;
    }

    .banner-item:nth-child(3) {
        padding: 15px 25px;
    }

    .banner-item:nth-child(3) .banner-text h4 {
        font-size: 14px;
    }

    .banner-item:nth-child(3) .banner-text p {
        font-size: 16px;
    }
}
     /* About Section */
.about-modern {
    padding: 100px 0;
    background: #FFF8F0;
}

.about-content {
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.about-text h2 {
    font-size: 3rem;
    margin-bottom: 30px;
    color: #2C1810;
}

.about-text p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #6B7280;
    margin-bottom: 30px;
}

.about-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 40px;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color:rgb(226, 7, 7);
    display: block;
}

.stat-label {
    font-size: 0.9rem;
    color: #6B7280;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.about-image {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.about-image img {
    width: 80%;
    max-width: 500px;
    height: auto;
    aspect-ratio: 1;
    object-fit: cover; 
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    height: 600px;
}

/* Tablet Styles */
@media (max-width: 992px) {
    .about-modern {
        padding: 80px 0;
    }
    
    .about-content {
        gap: 40px;
        padding: 0 40px;
    }
    
    .about-text h2 {
        font-size: 2.5rem;
    }
    
    .about-image img {
        width: 90%;
        max-width: 400px;
    }
    
    .stat-number {
        font-size: 2rem;
    }
}

/* Mobile Styles */
@media (max-width: 768px) {
    .about-modern {
        padding: 60px 0;
    }
    
    .about-content {
        grid-template-columns: 1fr;
        gap: 40px;
        padding: 0 20px;
        text-align: center;
    }
    
    .about-text {
        order: 2;
    }
    
    .about-image {
        order: 1;
        margin-bottom: 20px;
    }
    
    .about-text h2 {
        font-size: 2rem;
        margin-bottom: 20px;
    }
    
    .about-text p {
        font-size: 1rem;
        margin-bottom: 20px;
    }
    
    .about-stats {
        gap: 20px;
        margin-top: 30px;
    }
    
    .stat-number {
        font-size: 1.8rem;
    }
    
    .stat-label {
        font-size: 0.8rem;
    }
    
    .about-image img {
        width: 280px;
        height: 280px;
        max-width: none;
    }
}

/* Small Mobile Styles */
@media (max-width: 480px) {
    .about-modern {
        padding: 40px 0;
    }
    
    .about-content {
        padding: 0 15px;
        gap: 30px;
    }
    
    .about-text h2 {
        font-size: 1.8rem;
    }
    
    .about-stats {
        grid-template-columns: 1fr;
        gap: 15px;
        margin-top: 25px;
    }
    
    .stat-item {
        padding: 15px;
        background: rgba(198, 72, 37, 0.1);
        border-radius: 10px;
    }
    
    .about-image img {
        width: 250px;
        height: 250px;
    }
}
    /* Services Section */
.services-modern {
   padding: 100px 0;
   background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
   position: relative;
   overflow: hidden;
}

.services-modern::before {
   content: '';
   position: absolute;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23FF6B35" fill-opacity="0.02"><circle cx="30" cy="30" r="1.5"/></g></g></svg>');
   pointer-events: none;
}

.page-heading {
   font-size: 3rem;
   font-weight: 800;
   background: linear-gradient(135deg, #FF0000 0%, #F7931E 100%);
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
   background-clip: text;
   margin-bottom: 1rem;
   position: relative;
}

.page-heading-line {
   width: 100px;
   height: 4px;
   background: linear-gradient(135deg, #FF0000 0%, #F7931E 100%);
   margin: 0 auto;
   border-radius: 2px;
   position: relative;
}

.page-heading-line::after {
   content: '';
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   width: 12px;
   height: 12px;
   background: #FF6B35;
   border-radius: 50%;
   box-shadow: 0 0 20px rgba(255, 107, 53, 0.4);
}

.service-card {
   background: rgba(255, 255, 255, 0.95);
   backdrop-filter: blur(10px);
   padding: 40px 30px;
   border-radius: 20px;
   text-align: center;
   box-shadow: 0 10px 30px rgba(0,0,0,0.08);
   transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
   height: 100%;
   position: relative;
   overflow: hidden;
   border: 1px solid rgba(255, 107, 53, 0.1);
}

.service-card::before {
   content: '';
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 4px;
   background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
   transform: scaleX(0);
   transition: transform 0.4s ease;
   transform-origin: left;
}

.service-card::after {
   content: '';
   position: absolute;
   top: 0;
   left: -100%;
   width: 100%;
   height: 100%;
   background: linear-gradient(90deg, transparent, rgba(255, 107, 53, 0.05), transparent);
   transition: left 0.6s ease;
}

.service-card:hover::before {
   transform: scaleX(1);
}

.service-card:hover::after {
   left: 100%;
}

.service-card:hover {
   transform: translateY(-15px) scale(1.02);
   box-shadow: 0 25px 50px rgba(255, 107, 53, 0.15);
   border-color: rgba(255, 107, 53, 0.2);
}

.service-icon {
   width: 80px;
   height: 80px;
   background: linear-gradient(135deg, #FF0000 0%,rgb(232, 97, 97) 100%);
   border-radius: 50%;
   display: flex;
   align-items: center;
   justify-content: center;
   margin: 0 auto 25px;
   font-size: 2rem;
   color: white;
   position: relative;
   transition: all 0.4s ease;
   box-shadow: 0 8px 25px rgba(255, 107, 53, 0.3);
}

.service-icon::before {
   content: '';
   position: absolute;
   top: -5px;
   left: -5px;
   right: -5px;
   bottom: -5px;
   border-radius: 50%;
   background: linear-gradient(135deg, #FF6B35, #F7931E);
   opacity: 0;
   transition: opacity 0.3s ease;
   z-index: -1;
}

.service-card:hover .service-icon {
   transform: scale(1.1) rotate(10deg);
   box-shadow: 0 15px 35px rgba(255, 107, 53, 0.4);
}

.service-card:hover .service-icon::before {
   opacity: 0.2;
}

.service-icon i {
   transition: transform 0.3s ease;
}

.service-card:hover .service-icon i {
   transform: scale(1.1);
}

.service-card h4 {
   font-size: 1.5rem;
   margin-bottom: 15px;
   color: #2C1810;
   font-weight: 700;
   transition: color 0.3s ease;
}

.service-card:hover h4 {
   color: #FF6B35;
}

.service-card p {
   color: #6B7280;
   line-height: 1.6;
   transition: color 0.3s ease;
}

.service-card:hover p {
   color: #4B5563;
}

/* Add floating animation */
@keyframes float {
   0%, 100% { transform: translateY(0px); }
   50% { transform: translateY(-5px); }
}

.service-card:nth-child(1) .service-icon { animation: float 6s ease-in-out infinite; animation-delay: 0s; }
.service-card:nth-child(2) .service-icon { animation: float 6s ease-in-out infinite; animation-delay: 1.5s; }
.service-card:nth-child(3) .service-icon { animation: float 6s ease-in-out infinite; animation-delay: 3s; }
.service-card:nth-child(4) .service-icon { animation: float 6s ease-in-out infinite; animation-delay: 4.5s; }

/* Add pulse effect to icons */
@keyframes pulse {
   0% { box-shadow: 0 8px 25px rgba(255, 107, 53, 0.3); }
   50% { box-shadow: 0 8px 25px rgba(255, 107, 53, 0.5), 0 0 0 10px rgba(255, 107, 53, 0.1); }
   100% { box-shadow: 0 8px 25px rgba(255, 107, 53, 0.3); }
}

.service-icon:hover {
   animation: pulse 2s infinite;
}

/* Responsive adjustments */
@media (max-width: 768px) {
   .page-heading {
       font-size: 2.5rem;
   }
   
   .service-card {
       padding: 30px 20px;
   }
   
   .service-icon {
       width: 70px;
       height: 70px;
       font-size: 1.8rem;
   }
}

        /* Menu Section */
        .menu-modern {
            padding: 100px 0;
            background: #FFF8F0;
        }

        .menu-tabs-modern {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .menu-tab-modern {
            background: white;
            border: 2px solid transparent;
            padding: 12px 30px;
            border-radius: 50px;
            color: #6B7280;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .menu-tab-modern.active,
        .menu-tab-modern:hover {
            background: linear-gradient(135deg, #FF0000 0%, #F7931E 100%);
            color: white;
            border-color: #FF6B35;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .menu-item-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .menu-item-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .menu-item-image {
            height: 200px;
            background: linear-gradient(135deg, #FFD23F 0%, #FF6B35 100%);
            position: relative;
            overflow: hidden;
        }

        .menu-item-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .menu-item-content {
            padding: 25px;
        }

        .menu-item-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #2C1810;
        }

        .menu-item-description {
            color: #6B7280;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .menu-item-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #FF0000;
            margin-bottom: 15px;
        }

        .menu-item-button {
            background: linear-gradient(135deg, #FF0000 0%, #F7931E 100%);
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .menu-item-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            color: white;
            text-decoration: none;
        }
        .lead{
        font-size: 1.2rem;
        font-weight: 500;
        color: black;
        }
/* Testimonials Section */
.testimonials-modern {
    padding: 100px 0;
    background: linear-gradient(135deg, #FF6B35 0%, #FF4500 50%, #DC143C 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

/* Add floating background elements */
.testimonials-modern::before {
    content: '🌶️';
    position: absolute;
    top: 10%;
    left: 5%;
    font-size: 30px;
    opacity: 0.15;
    animation: float 6s ease-in-out infinite;
}

.testimonials-modern::after {
    content: '🍚';
    position: absolute;
    bottom: 15%;
    right: 8%;
    font-size: 25px;
    opacity: 0.15;
    animation: float 6s ease-in-out infinite;
    animation-delay: 3s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

.testimonial-card {
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(10px);
    padding: 40px 30px;
    border-radius: 20px;
    text-align: center;
    margin: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 15px 35px rgba(220, 20, 60, 0.15);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    color: #333;
    overflow: hidden;
}

/* Enhanced gradient border top */
.testimonial-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 5px;
    background: linear-gradient(90deg, #FF6B35, #FF4500, #DC143C);
}

/* Enhanced quote icon */
.testimonial-card::after {
    content: '"';
    position: absolute;
    top: 15px;
    right: 25px;
    font-size: 48px;
    color: #FF6B35;
    opacity: 0.3;
    font-family: serif;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
}

.testimonial-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 25px 50px rgba(220, 20, 60, 0.2);
    background: rgba(255, 255, 255, 1);
}

/* Card variations with orange-red-white theme */
.owl-carousel .item:nth-child(2) .testimonial-card {
    background: linear-gradient(135deg, #fff5f0 0%, #ffffff 100%);
    transform: translateY(20px);
    border: 2px solid rgba(255, 107, 53, 0.2);
}

.owl-carousel .item:nth-child(2) .testimonial-card::after {
    color: #FF4500;
}

.owl-carousel .item:nth-child(2) .testimonial-card:hover {
    transform: translateY(8px);
    border-color: rgba(255, 107, 53, 0.4);
}

.owl-carousel .item:nth-child(3) .testimonial-card {
    background: linear-gradient(135deg, #DC143C 0%, #8B0000 100%);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.2);
}

.owl-carousel .item:nth-child(3) .testimonial-card::after {
    color: rgba(255, 255, 255, 0.4);
}

.owl-carousel .item:nth-child(3) .testimonial-card .testimonial-info p {
    color: #FFB6C1;
    opacity: 1;
}

.testimonial-stars {
    color: #FFD700;
    font-size: 1.4rem;
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    gap: 5px;
}

.testimonial-stars i {
    filter: drop-shadow(0 2px 4px rgba(255,215,0,0.4));
    animation: sparkle 2s ease-in-out infinite;
    animation-delay: calc(var(--i) * 0.1s);
    transition: all 0.3s ease;
}

.testimonial-card:hover .testimonial-stars i {
    color: #FFA500;
    transform: scale(1.1);
}

.testimonial-stars i:nth-child(1) { --i: 0; }
.testimonial-stars i:nth-child(2) { --i: 1; }
.testimonial-stars i:nth-child(3) { --i: 2; }
.testimonial-stars i:nth-child(4) { --i: 3; }
.testimonial-stars i:nth-child(5) { --i: 4; }

@keyframes sparkle {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.15); }
}

.testimonial-text {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 30px;
    font-style: italic;
    color: #555;
    position: relative;
    z-index: 2;
}

/* White text for dark red card */
.owl-carousel .item:nth-child(3) .testimonial-card .testimonial-text {
    color: #f0f0f0;
}

.testimonial-author {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

.testimonial-avatar {
    width: 65px;
    height: 65px;
    border-radius: 50%;
    border: 3px solid #FF6B35;
    box-shadow: 0 4px 12px rgba(255,107,53,0.4);
    transition: all 0.3s ease;
}

.owl-carousel .item:nth-child(2) .testimonial-card .testimonial-avatar {
    border-color: #FF4500;
}

.owl-carousel .item:nth-child(3) .testimonial-card .testimonial-avatar {
    border-color: white;
    box-shadow: 0 4px 12px rgba(255,255,255,0.3);
}

.testimonial-card:hover .testimonial-avatar {
    transform: scale(1.1);
    border-width: 4px;
}

.owl-carousel .item:nth-child(1) .testimonial-card:hover .testimonial-avatar {
    border-color: #DC143C;
}

.owl-carousel .item:nth-child(2) .testimonial-card:hover .testimonial-avatar {
    border-color: #DC143C;
}

.owl-carousel .item:nth-child(3) .testimonial-card:hover .testimonial-avatar {
    border-color: #FFB6C1;
}

.testimonial-info h5 {
    margin: 0;
    font-weight: 600;
    color: #333;
    font-size: 1.1rem;
    transition: color 0.3s ease;
}

.owl-carousel .item:nth-child(3) .testimonial-card .testimonial-info h5 {
    color: white;
}

.testimonial-card:hover .testimonial-info h5 {
    color: #FF6B35;
}

.owl-carousel .item:nth-child(3) .testimonial-card:hover .testimonial-info h5 {
    color: #FFB6C1;
}

.testimonial-info p {
    margin: 5px 0 0 0;
    opacity: 0.7;
    font-size: 0.9rem;
    color: #888;
    transition: all 0.3s ease;
}

.testimonial-card:hover .testimonial-info p {
    opacity: 1;
    color: #FF4500;
}

.owl-carousel .item:nth-child(3) .testimonial-card:hover .testimonial-info p {
    color: #FFB6C1;
}

/* Enhanced heading styles */
.page-heading.white-heading {
    font-size: 3.5rem;
    font-weight: 300;
    text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    margin-bottom: 20px;
    letter-spacing: 2px;
}

.page-heading-line.white-line {
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, white, rgba(255,255,255,0.8));
    color: white;
    margin: 0 auto 40px auto;
    border-radius: 2px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

/* Add subtle animations */
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

.testimonial-card {
    animation: fadeInUp 0.6s ease forwards;
}

.owl-carousel .item:nth-child(1) .testimonial-card {
    animation-delay: 0s;
}

.owl-carousel .item:nth-child(2) .testimonial-card {
    animation-delay: 0.2s;
}

.owl-carousel .item:nth-child(3) .testimonial-card {
    animation-delay: 0.4s;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .page-heading.white-heading {
        font-size: 2.5rem;
        letter-spacing: 1px;
    }
    
    .testimonial-card {
        margin: 10px;
        padding: 30px 20px;
    }
    
    .owl-carousel .item:nth-child(2) .testimonial-card {
        transform: translateY(0);
    }
    
    .owl-carousel .item:nth-child(2) .testimonial-card:hover {
        transform: translateY(-10px);
    }
    
    .testimonials-modern::before,
    .testimonials-modern::after {
        font-size: 20px;
        opacity: 0.1;
    }
}
        /* Page Headings */
        .page-heading {
            font-family: 'Playfair Display', serif !important;
            font-weight: 700;
            font-size: 3.5rem;
            background: linear-gradient(135deg, #FF0000 0%,rgb(207, 189, 54) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
            margin-bottom: 20px;
        }

        .page-heading-line {
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #FF0000 0%, #F7931E 100%);
            border-radius: 2px;
            margin: 20px auto 40px;
        }

        .page-heading.white-heading {
            color: white !important;
            -webkit-text-fill-color: white;
        }

        .page-heading-line.white-line {
            background: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .page-heading {
                font-size: 2.5rem;
            }
            
            .about-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .banner-content {
                flex-direction: column;
                gap: 30px;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .about-stats {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Override existing styles */
        .section-padding {
            padding: 40px 0;
        }

        .container-fluid {
            padding-left: 15px;
            padding-right: 15px;
        }

        /* Fix for existing menu system */
        .menu .nav-tabs {
            display: none;
        }

        .menu .tab-content {
            display: none;
        }
    </style>
</head>

<body class="page-body">

    <!--====== LOADER =====-->
    <div class="loader"></div>

    <!--============ SIDE-NAV =============-->
    <?php include 'includes/side_nav.php'; ?>

    <!--============ SIDE-NAV-2 =============-->
    <?php include 'includes/side_nav2.php'; ?>

    <!--=============== FULLSCR-NAV ==============-->
    <?php include 'includes/fullscreen_nav.php'; ?>

    <!--================ SHOPPING-CART ==============-->
    <?php include 'includes/shopping_cart.php'; ?>

    <!--============== USER-PROFILE-SIDEBAR =============-->
    <?php include 'includes/user_profile_sidebar.php'; ?>

    <div class="canvas">
        <div class="overlay-black"></div>

        <!--========= HEADER =========-->
        <?php 
        include 'includes/header.php';
        include 'includes/menu_functions.php';
        ?>

        <!--=========== HERO SECTION ==========-->
        <section class="hero-section">
            <div class="hero-bg"></div>
            <div class="floating-elements">
                <div class="floating-element">🍛</div>
                <div class="floating-element">🌶️</div>
                <div class="floating-element">🍚</div>
            </div>
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <p class="hero-subtitle">Authentic Indian Cuisine</p>
                <h1 class="hero-title">Experience </br>the Magic of</br> ChachuKiBiryani</h1>
                <p class="hero-description">Discover the perfect blend of aromatic spices,</br> tender meat, and fragrant basmati rice.</p>
                <div class="hero-buttons">
                    <a href="#menu" class="btn-hero-primary">Explore Menu</a>
                    <a href="#about" class="btn-hero-secondary">Our Story</a>
                </div>
            </div>
        </section>

        <!--======= MODERN BANNER ========-->
        <section class="banner-modern">
            <div class="container-fluid">
                <div class="banner-content">
                    <div class="banner-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="banner-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="banner-text">
                            <h4>Mon - Fri</h4>
                            <p>10:00 AM - 11:00 PM</p>
                        </div>
                    </div>
                    <div class="banner-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="banner-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="banner-text">
                            <h4>Sat - Sun</h4>
                            <p>11:00 AM - 08:00 PM</p>
                        </div>
                    </div>
                    <div class="banner-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="banner-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="banner-text">
                            <h4>Call Us</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== ABOUT US ===============-->
        <section id="about" class="about-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Our Story</h2>
                        <div class="page-heading-line"></div>
                    </div>
                </div>
                <div class="about-content">
                    <div class="about-text" data-aos="fade-right">
                        <h2>A Legacy of Flavor</h2>
                        <p>For over three generations, ChachuKiBiryani has been crafting the most authentic and delicious biryani dishes. Our secret recipes, passed down through family traditions, combine the finest ingredients with time-honored cooking techniques.</p>
                        <p>Every dish is prepared with love, using traditional spices and methods that have been perfected over decades. We take pride in serving not just food, but an experience that connects you to the rich culinary heritage of India.</p>
                        <div class="about-stats">
                            <div class="stat-item">
                                <span class="stat-number">25+</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">15+</span>
                                <span class="stat-label">Unique Dishes</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">1000+</span>
                                <span class="stat-label">Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="about-image" data-aos="fade-left">
                        <img src="images/chac.png" alt="ChachuKiBiryani Chef">
                    </div>
                </div>
            </div>
        </section>

        <!--=============== SERVICES ===============-->
        <section class="services-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Why Choose Us</h2>
                        <div class="page-heading-line"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <h4>Premium Quality</h4>
                            <p>We use only the finest ingredients, carefully selected to ensure every dish meets our high standards of quality and taste.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <h4>Expert Chefs</h4>
                            <p>Our master chefs bring decades of experience and passion to create authentic flavors that transport you to Pakistan.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h4>Fast Delivery</h4>
                            <p>Enjoy our delicious biryani at your doorstep with our quick and reliable delivery service across the city.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fa fa-building"></i>
                            </div>
                            <h4>Clean Environment</h4>
                            <p>Dine in our hygienic and welcoming atmosphere where cleanliness and comfort are our top priorities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--============= MENU ============-->
        <section id="menu" class="menu-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading">Our Delicious Menu</h2>
                        <div class="page-heading-line"></div>
                        <p class="lead">Explore our carefully curated selection of authentic Pakistani dishes</p>
                    </div>
                </div>
                
                            <div class="menu-tabs-modern" data-aos="fade-up">
                <div class="menu-tab-modern active" data-category="all">All Dishes</div>
                <?php 
                $categories = getMenuCategories();
                foreach ($categories as $category): 
                ?>
                <div class="menu-tab-modern" data-category="<?php echo $category; ?>"><?php echo ucfirst($category); ?></div>
                <?php endforeach; ?>
            </div>

            <div class="menu-grid">
                <?php 
                $featuredItems = getFeaturedMenuItems(8);
                foreach ($featuredItems as $index => $item): 
                    $delay = ($index + 1) * 100;
                ?>
                <div class="menu-item-card" data-category="<?php echo $item['category']; ?>" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                    <div class="menu-item-image">
                        <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                        <?php if ($item['is_featured']): ?>
                        <div class="featured-badge"><i class="fa fa-star"></i> Featured</div>
                        <?php endif; ?>
                    </div>
                    <div class="menu-item-content">
                        <h4 class="menu-item-title"><?php echo htmlspecialchars($item['name']); ?></h4>
                        <p class="menu-item-description"><?php echo htmlspecialchars($item['description']); ?></p>
                        <div class="menu-item-price">$<?php echo number_format($item['price'], 2); ?></div>
                        <a href="shopping-cart.php?id=<?php echo $item['id']; ?>" class="menu-item-button">Add to Cart</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            </div>
        </section>

        <!--=============== TESTIMONIAL ===============-->
        <section class="testimonials-modern">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up">
                        <h2 class="page-heading white-heading">What Our Customers Say</h2>
                        <div class="page-heading-line white-line"></div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" id="owl-testimonial">
                    <div class="item" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-text">"The best biryani I've ever tasted! The flavors are perfectly balanced and the rice is cooked to perfection. A must-try for all biryani lovers!"</p>
                            <div class="testimonial-author">
                                <img src="images/reviewer-1.jpg" alt="Sarah Johnson" class="testimonial-avatar">
                                <div class="testimonial-info">
                                    <h5>Sarah Johnson</h5>
                                    <p>Food Blogger</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Authentic taste that reminds me of home. The spices are just right and the portion sizes are generous. Highly recommended!"</p>
                            <div class="testimonial-author">
                                <img src="images/reviewer-2.jpg" alt="Michael Chen" class="testimonial-avatar">
                                <div class="testimonial-info">
                                    <h5>Michael Chen</h5>
                                    <p>Regular Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-card">
                            <div class="testimonial-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Outstanding service and incredible food quality. The delivery was prompt and the food was still piping hot. Will definitely order again!"</p>
                            <div class="testimonial-author">
                                <img src="images/reviewer-3.jpg" alt="Emily Rodriguez" class="testimonial-avatar">
                                <div class="testimonial-info">
                                    <h5>Emily Rodriguez</h5>
                                    <p>Food Enthusiast</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== FOOTER ===============-->
        <?php include 'includes/footer.php'; ?>

    </div><!-- end canvas -->

    <!-- Page Scripts Starts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom-navigation.js"></script>
    <script src="js/custom-flex.js"></script>
    <script src="js/custom-owl.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Modern Menu Tabs
        $(document).ready(function() {
            $('.menu-tab-modern').click(function() {
                $('.menu-tab-modern').removeClass('active');
                $(this).addClass('active');
                
                const category = $(this).data('category');
                if (category === 'all') {
                    $('.menu-item-card').show();
                } else {
                    $('.menu-item-card').hide();
                    $('.menu-item-card[data-category="' + category + '"]').show();
                }
            });

            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                }
            });
        });
    </script>
    <!-- Page Scripts Ends -->

</body>

</html>