<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
          <style>
              @import url('https://fonts.googleapis.com/css2?family=Rubik+Vinyl&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Rubik+Vinyl&display=swap');

    </style>
    <!-- Favicons -->
    <link href="{{asset('assets/media/img/logo.png')}}" rel="icon">
    <link href="{{asset('assets/media/img/logo.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">


    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link href="{{asset('assets/source/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/source/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/source/bootstrap-icons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/source/aos.css" rel="stylesheet')}}">
    <link href="{{asset('assets/source/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/source/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/source/plugins.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dash/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Main CSS File -->
    <link href="{{asset('assets/source/main.css')}}" rel="stylesheet">

    <title>سامح مختار - استشارات نفسية ودعم إرشادي</title>
    <style>

        * {
            margin: 1px;
            padding: 1px;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

     .nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo-image {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 2px;
            margin: 2px;
        }
        .social-icon.tiktok {
            background: linear-gradient(45deg, #ff0050, #000);
            color: white;
        }

        .social-icon.instagram {
            background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
            color: white;
        }

        .social-icon.facebook {
            background: #1877F2;
            color: white;
        }

        .social-icon.youtube {
            background: #FF0000;
            color: white;
        }

        .social-icon i {
            font-size: 1.8em;
        }
        .logo {
            font-size: 2rem;
            font-weight: bold;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
            margin: 10px 0;
            transition: all 0.3s ease;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 25px;
        }
        .service-icon i {
            font-size: 3.5em;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: block;
            margin-bottom: 20px;
        }

        .service-card:hover .service-icon i {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }
        .nav-links a:hover {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            transform: translateY(-2px);
        }

        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .menu-toggle:hover {
            background: rgba(102, 126, 234, 0.1);
        }

        .menu-toggle span {
            width: 25px;
            height: 3px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            margin: 3px 0;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .menu-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }

        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }

        /* Mobile Menu Styles */
        .nav-links.mobile-menu {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            flex-direction: column;
            padding: 1rem 0;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border-radius: 0 0 15px 15px;
            margin: 0;
            gap: 0;
            transform: translateY(-10px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .nav-links.mobile-menu.show {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .nav-links.mobile-menu li {
            padding: 0.5rem 1rem;
        }

        .nav-links.mobile-menu a {
            display: block;
            padding: 1rem;
            margin: 0.2rem 0;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s ease;
        }
        section {
            padding: 50px 20px;
            text-align: center;
            background: #f5f7fa;
            margin: 40px 0;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            }
            section h2 {
              color: #4e54c8;
              margin-bottom: 25px;
              font-size: 26px;
            }
            form {
              max-width: 500px;
              margin: auto;
              display: flex;
              flex-direction: column;
              gap: 15px;
            }
            input, textarea, select {
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 8px;
              font-size: 16px;
            }
            button {
              padding: 14px;
              border: none;
              border-radius: 8px;
              background: #4e54c8;
              color: #fff;
              font-size: 18px;
              cursor: pointer;
              transition: 0.3s;
            }
            button:hover {
              background: #363bcf;
            }
            #reviewsList {
              margin-bottom: 30px;
              text-align: right;
            }
            .review {
              background: #fff;
              padding: 15px;
              margin-bottom: 15px;
              border-radius: 10px;
              box-shadow: 0 3px 8px rgba(0,0,0,0.1);
            }
            .review h4 {
              margin: 0;
              color: #4e54c8;
            }
            .review .stars {
              color: #ff9800;
              margin: 5px 0;
            }
                /* Hero Section */
                .hero {
                    background: rgba(255, 255, 255, 0.1);
                    backdrop-filter: blur(15px);
                    border-radius: 20px;
                    margin: 2rem 0;
                    padding: 4rem 2rem;
                    text-align: center;
                    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
                }
            
                .hero h1 {
                    font-size: 3rem;
                    color: white;
                    margin-bottom: 1rem;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                }
            
                .hero p {
                    font-size: 1.2rem;
                    color: rgba(255, 255, 255, 0.9);
                    margin-bottom: 2rem;
                    max-width: 600px;
                    margin-left: auto;
                    margin-right: auto;
                }
            
                .cta-button {
                    display: inline-block;
                    background: linear-gradient(45deg, #ff6b6b, #feca57);
                    color: white;
                    padding: 1rem 2rem;
                    border-radius: 50px;
                    text-decoration: none;
                    font-weight: bold;
                    font-size: 1.1rem;
                    transition: all 0.3s ease;
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                    margin: 0.5rem;
                }
            
                .cta-button:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
                }
            
                .booking-button {
                    background: linear-gradient(45deg, #4ecdc4, #44a08d);
                    display: inline-block;
                    color: white;
                    padding: 1rem 2rem;
                    border-radius: 50px;
                    text-decoration: none;
                    font-weight: bold;
                    font-size: 1.1rem;
                    transition: all 0.3s ease;
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                    margin: 0.5rem;
                }
            
                .booking-button:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
                    background: linear-gradient(45deg, #44a08d, #4ecdc4);
                }
            
                /* Services Section */
                .services {
                    margin: 4rem 0;
                }
            
                .services h2 {
                    text-align: center;
                    font-size: 2.5rem;
                    color: white;
                    margin-bottom: 3rem;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                }
            
                .services-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 2rem;
                }
            
                .service-card {
                    background: rgba(255, 255, 255, 0.95);
                    border-radius: 15px;
                    padding: 2rem;
                    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
                    transition: all 0.3s ease;
                    backdrop-filter: blur(10px);
                }
            
                .service-card:hover {
                    transform: translateY(-10px);
                    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
                }
            
                .service-icon {
                    font-size: 3rem;
                    text-align: center;
                    margin-bottom: 1rem;
                }
            
                .service-card h3 {
                    color: #333;
                    margin-bottom: 1rem;
                    font-size: 1.5rem;
                    text-align: center;
                }
            
                .service-card p {
                    color: #666;
                    text-align: center;
                    line-height: 1.6;
                }
            
                /* Videos Section */
                .videos {
                    margin: 4rem 0;
                }
            
                .videos h2 {
                    text-align: center;
                    font-size: 2.5rem;
                    color: white;
                    margin-bottom: 3rem;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                }
            
                .videos-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
                    gap: 2rem;
                }
            
                .video-card {
                    background: rgba(255, 255, 255, 0.95);
                    border-radius: 15px;
                    overflow: hidden;
                    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
                    transition: all 0.3s ease;
                    backdrop-filter: blur(10px);
                    cursor: pointer;
                    text-decoration: none;
                    color: inherit;
                }
            
                .video-card:hover {
                    transform: translateY(-8px);
                    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
                }
            
                .video-thumbnail {
                    border-radius: 50px;
                    position: relative;
                    width: 100%;
                    height: 180px;
                    background: linear-gradient(45deg, #667eea, #764ba2);
                    display:table-row;
                    align-items: center;
                    justify-content: center;
                    overflow: hidden;
                }
            
                .video-thumbnail::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: rgba(0, 0, 0, 0.3);
                    z-index: 1;
                }
            
                .video-thumbnail img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            
                .play-button {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    z-index: 2;
                    background: rgba(255, 255, 255, 0.9);
                    border-radius: 50%;
                    width: 60px;
                    height: 60px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.5rem;
                    color: #667eea;
                    transition: all 0.3s ease;
                }
            
                .video-card:hover .play-button {
                    background: white;
                    transform: translate(-50%, -50%) scale(1.1);
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
                }
            
                .video-info {
                    padding: 1.5rem;
                }
            
                .video-info h3 {
                    color: #333;
                    margin-bottom: 0.5rem;
                    font-size: 1.2rem;
                    line-height: 1.4;
                }
            
                .video-description {
                    color: #666;
                    line-height: 1.6;
                    margin-bottom: 1rem;
                    font-size: 0.95rem;
                }
            
                .video-meta {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    color: #888;
                    font-size: 0.85rem;
                }
            
                .video-duration {
                    background: #667eea;
                    color: white;
                    padding: 0.2rem 0.5rem;
                    border-radius: 15px;
                    font-size: 0.8rem;
                }
            
                .video-platform {
                    display: flex;
                    align-items: center;
                    gap: 0.5rem;
                }
            
                /* Booking Section */
                .booking-section {
                    background: rgba(255, 255, 255, 0.1);
                    backdrop-filter: blur(15px);
                    border-radius: 20px;
                    margin: 4rem 0;
                    padding: 3rem 2rem;
                    text-align: center;
                    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
                }
            
                .booking-section h2 {
                    color: white;
                    margin-bottom: 1rem;
                    font-size: 2.5rem;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                }
            
                .booking-section p {
                    color: rgba(255, 255, 255, 0.9);
                    font-size: 1.2rem;
                    margin-bottom: 2rem;
                    max-width: 600px;
                    margin-left: auto;
                    margin-right: auto;
                }
            
                .booking-options {
                    display: flex;
                    justify-content: center;
                    gap: 2rem;
                    flex-wrap: wrap;
                    margin-top: 2rem;
                }
            
                .service-card .booking-button {
                    margin-top: 1rem;
                    font-size: 1rem;
                    padding: 0.8rem 1.5rem;
                }
                .articles {
                    margin: 4rem 0;
                }
            
                .articles h2 {
                    text-align: center;
                    font-size: 2.5rem;
                    color: white;
                    margin-bottom: 3rem;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                }
            
                .articles-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                    gap: 2rem;
                }
            
                .article-card {
                    background: rgba(255, 255, 255, 0.95);
                    border-radius: 15px;
                    overflow: hidden;
                    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
                    transition: all 0.3s ease;
                    backdrop-filter: blur(10px);
                    cursor: pointer;
                }
            
                .article-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
                }
            
                .article-image {
                    width: 100%;
                    height: 200px;
                    background: linear-gradient(45deg, #667eea, #764ba2);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: 3rem;
                }
            
                .article-content {
                    padding: 1.5rem;
                }
            
                .article-content h3 {
                    color: #333;
                    margin-bottom: 0.5rem;
                    font-size: 1.3rem;
                }
            
                .article-content .article-excerpt {
                    color: #666;
                    line-height: 1.6;
                    margin-bottom: 1rem;
                }
            
                .article-meta {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    color: #888;
                    font-size: 0.9rem;
                }
            
                .read-more {
                    color: #667eea;
                    text-decoration: none;
                    font-weight: 500;
                    transition: color 0.3s ease;
                }
            
                .read-more:hover {
                    color: #764ba2;
                }
            
                /* Article Modal */
                .modal {
                    display: none;
                    position: fixed;
                    z-index: 2000;
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.8);
                    backdrop-filter: blur(5px);
                }
            
                .modal-content {
                    background: white;
                    margin: 2% auto;
                    padding: 0;
                    border-radius: 15px;
                    width: 90%;
                    max-width: 800px;
                    max-height: 90vh;
                    overflow-y: auto;
                    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
                    animation: modalSlideIn 0.3s ease-out;
                }
            
                @keyframes modalSlideIn {
                    from { transform: translateY(-50px); opacity: 0; }
                    to { transform: translateY(0); opacity: 1; }
                }
            
                .modal-header {
                    background: linear-gradient(45deg, #667eea, #764ba2);
                    color: white;
                    padding: 1.5rem;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
            
                .modal-header h2 {
                    margin: 0;
                    font-size: 1.5rem;
                }
            
                .close {
                    color: white;
                    font-size: 2rem;
                    font-weight: bold;
                    cursor: pointer;
                    border: none;
                    background: none;
                    padding: 0;
                    line-height: 1;
                }
            
                .close:hover {
                    opacity: 0.7;
                }
            
                .modal-body {
                    padding: 2rem;
                    line-height: 1.8;
                    color: #333;
                }
            
                .modal-body h3 {
                    color: #667eea;
                    margin: 1.5rem 0 1rem 0;
                    font-size: 1.3rem;
                }
                .hero {
            padding: 80px 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }       
            
            .hero-content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 60px;
                align-items: center;
                max-width: 1200px;
                margin: 0 auto;
            }
            
            .hero-text {
                color: white;
            }
            
            .hero-text h1 {
                font-size: 3.5em;
                margin-bottom: 30px;
                line-height: 1.2;
            }
            
            .hero-text p {
                font-size: 1.3em;
                line-height: 1.8;
                margin-bottom: 40px;
                opacity: 0.95;
            }
            
            .hero-buttons {
                display: flex;
                gap: 20px;
                flex-wrap: wrap;
            }
            
            .hero-image {
                position: relative;
                text-align: center;
            }
            
            .hero-image img {
                width: 350px;
                height: 350px;
                border-radius: 50%;
                object-fit: cover;
                border: 8px solid rgba(255, 255, 255, 0.2);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
                transition: transform 0.3s ease;
            }
            
            .hero-image img:hover {
                transform: scale(1.05);
            }
            
            .image-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                pointer-events: none;
            }
            
            .floating-icon {
                position: absolute;
                width: 60px;
                height: 60px;
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(10px);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 1.5em;
                animation: float 3s ease-in-out infinite;
            }
            
            .floating-icon:nth-child(1) {
                top: 20%;
                right: 10%;
                animation-delay: 0s;
            }
            
            .floating-icon:nth-child(2) {
                top: 60%;
                left: 5%;
                animation-delay: 1s;
            }
            
            .floating-icon:nth-child(3) {
                bottom: 20%;
                right: 15%;
                animation-delay: 2s;
            }
            
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }
            
            @media (max-width: 768px) {
                .hero-content {
                    grid-template-columns: 1fr;
                    text-align: center;
                }
                
                .hero-image img {
                    width: 300px;
                    height: 300px;
                }
            }
                    .modal-body p {
                        margin-bottom: 1rem;
                        text-align: justify;
                    }
                
                    /* Social Links */
                    .social-links {
                        background: rgba(255, 255, 255, 0.1);
                        backdrop-filter: blur(15px);
                        border-radius: 20px;
                        margin: 3rem 0;
                        padding: 2rem;
                        text-align: center;
                    }
                
                    .social-links h3 {
                        color: white;
                        margin-bottom: 1.5rem;
                        font-size: 1.8rem;
                    }
                
                    .social-icons {
                        display: flex;
                        justify-content: center;
                        gap: 2rem;
                        flex-wrap: wrap;
                    }
                
                    .social-icon {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        width: 60px;
                        height: 60px;
                        background: rgba(255, 255, 255, 0.2);
                        border-radius: 50%;
                        color: white;
                        font-size: 1.5rem;
                        text-decoration: none;
                        transition: all 0.3s ease;
                    }
                
                    .social-icon:hover {
                        transform: translateY(-5px) scale(1.1);
                        background: rgba(255, 255, 255, 0.3);
                    }
                
                    /* Footer */
                    .footer {
                        background: rgba(0, 0, 0, 0.8);
                        color: white;
                        text-align: center;
                        padding: 2rem 0;
                        margin-top: 3rem;
                    }
                
                    /* Responsive Design */
                    @media (max-width: 768px) {
                        .hero h1 {
                            font-size: 2rem;
                        }
                    
                        .menu-toggle {
                            display: flex;
                        }
                    
                        .nav-links:not(.mobile-menu) {
                            display: none;
                        }
                    
                        .logo {
                            font-size: 1.5rem;
                        }
                    
                        .logo-image {
                            width: 40px;
                            height: 40px;
                            font-size: 1.2rem;
                        }
                    
                        .articles-grid, .services-grid, .videos-grid {
                            grid-template-columns: 1fr;
                        }
                    
                        .booking-options {
                            flex-direction: column;
                            align-items: center;
                        }
                    
                        .booking-button, .cta-button {
                            width: 90%;
                            max-width: 300px;
                            text-align: center;
                            margin: 0.5rem 0;
                        }
                    
                        .modal-content {
                            width: 95%;
                            margin: 5% auto;
                        }
                        /* Add these styles to fix form issues */
                .form-container {
                    padding: 20px;
                    background: white;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1);
                }
                
                .form-input, .form-select {
                    width: 100%;
                    padding: 10px;
                    margin: 8px 0;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                    box-sizing: border-box;
                }
                
                .alert-message {
                    display: none;
                    padding: 15px;
                    margin: 10px 0;
                    border-radius: 5px;
                    text-align: center;
                }
                
                .alert-success {
                    background-color: #d4edda;
                    color: #155724;
                    border: 1px solid #c3e6cb;
                }
                
                .alert-error {
                    background-color: #f8d7da;
                    color: #721c24;
                    border: 1px solid #f5c6cb;
                }
                
                .btn-loading {
                    position: relative;
                    color: transparent !important;
                }
                
                .btn-loading:after {
                    content: '';
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    width: 20px;
                    height: 20px;
                    margin: -10px 0 0 -10px;
                    border: 3px solid #f3f3f3;
                    border-top: 3px solid #3498db;
                    border-radius: 50%;
                    animation: spin 1s linear infinite;
                }
                .header.scrolled {
                    background: rgba(255, 255, 255, 0.98);
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
                }
                
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo-container">
                    <div class="logo-image"><img src="{{asset('assets/media/img/logo.png')}}" style="height: 100px; ;"></div>
                </div>
                
                <div class="menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
                <ul class="nav-links" id="navLinks">
                    <li><a href="#home">الرئيسية</a></li>
                    <li><a href="#services">الخدمات</a></li>
                    <li><a href="#videos">الفيديوهات</a></li>
                    <li><a href="#articles">المقالات</a></li>
                    <li><a href="#booking">حجز جلسة</a></li>
                    <li><a href="{{route('reviews')}}">اضافه تقييم</a></li>
                    <li><a href="#contact">تواصل معنا</a></li>
                </ul>
                
                
                <ul class="nav-links mobile-menu" id="mobileNavLinks">
                    <li><a href="#home">الرئيسية</a></li>
                    <li><a href="#services">الخدمات</a></li>
                    <li><a href="#videos">الفيديوهات</a></li>
                    <li><a href="#articles">المقالات</a></li>
                    <li><a href="#booking">حجز جلسة</a></li>
                    <li><a href="#reviews">اضافه تقييم</a></li>

                    <li><a href="#contact">تواصل معنا</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <section id="home" class="hero">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>في البداية كنت دكتور صيدلي</h1>
                    <p> لكن حبي لعلم النفس خلاني أبدأ رحلة دراسية طويلة ومستمرة. حصلت على عدة دبلومات في علم النفس من جامعات محترمة، وأقدر أساعدك تكتشف نفسك وأقدم لك نصايح عملية وعلمية. معظم الناس اللي قابلتهم قالوا إن حديثهم معايا غير حياتهم للأفضل.</p>
                    <div class="hero-buttons">
                        <a href="#services" class="cta-button">استكشف خدماتنا</a>
                        <a href="#booking" class="booking-button">احجز جلسة الآن</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="{{asset('assets/media/img/IMG-20241214-WA0013.jpg')}}" alt="د. سامح مختار - أخصائي الدعم النفسي" />
                    <div class="image-overlay">
                        <div class="floating-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="floating-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="floating-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <section id="videos" class="videos">
            <h2>أحدث الفيديوهات</h2>
            <div class="videos-grid">
                <a href="https://www.tiktok.com/@storyxat/video/7492010185502772487" target="_blank" class="video-card">
                    <div class="video-thumbnail">
                        <img src="{{asset('assets/media/img/IMG-20241214-WA0000.jpg')}}">
                    </div>
                    <div class="video-info">
                        <h3>النسيان</h3>
                        <p class="video-description">النسيان  </p>
                        <div class="video-meta">
                            <div class="video-platform">
                                <span>📱</span>
                                <span>TikTok</span>
                            </div>
                            <span class="video-duration">2:51</span>
                        </div>
                    </div>
                </a>

                <a href="https://www.tiktok.com/@storyxat/video/7428222374866128135" target="_blank" class="video-card">
                    <div class="video-thumbnail">
                        <img src="{{asset('assets/media/img/IMG-20241214-WA0001.jpg')}}">
                    </div>
                    <div class="video-info">
                        <h3>الحب</h3>
                        <p class="video-description">الحب</p>
                        <div class="video-meta">
                            <div class="video-platform">
                                <span>📱</span>
                                <span>TikTok</span>
                            </div>
                            <span class="video-duration">2:45</span>
                        </div>
                    </div>
                </a>

                <a href="https://www.tiktok.com/@storyxat/video/7534787806598663431" target="_blank" class="video-card">
                    <div class="video-thumbnail">
                        <img src="{{asset('assets/media/img/IMG-20241214-WA0009.jpg')}}">
                    </div>
                    <div class="video-info">
                        <h3>الفجوه بين العلم والعمل</h3>
                        <p class="video-description">الفجوه بين العلم والعمل</p>
                        <div class="video-meta">
                            <div class="video-platform">
                                <span>📱</span>
                                <span>TikTok</span>
                            </div>
                            <span class="video-duration">5:12</span>
                        </div>
                    </div>
                </a>

                <a href="https://www.youtube.com/embed/mIhSbEPa5-c?si=RHRcEDzTY5ttxGqq" autoplay target="_blank" class="video-card">
                    <div class="video-thumbnail">
                        <img src="{{asset('assets/media/img/IMG-20241214-WA0007.jpg')}}">
                    </div>
                    <div class="video-info">
                        <h3>فهم القلق وطرق العلاج</h3>
                        <p class="video-description">شرح مفصل عن اضطرابات القلق وأحدث طرق العلاج النفسي المتاحة</p>
                        <div class="video-meta">
                            <div class="video-platform">
                                <span>📺</span>
                                <span>YouTube</span>
                            </div>
                            <span class="video-duration">12:30</span>
                        </div>
                    </div>
                </a>

                <a href="https://www.youtube.com/embed/RawrGUNx3nc?si=JjCkBv0liTk7DQ7B" target="_blank" class="video-card">
                    <div class="video-thumbnail">
                        <img src="{{asset('assets/media/img/IMG-20241214-WA0004.jpg')}}">
                    </div>
                    <div class="video-info">
                        <h3>تحسين العلاقات الاجتماعية</h3>
                        <p class="video-description">مهارات التواصل الفعال وكيفية بناء علاقات صحية ومتوازنة مع الآخرين</p>
                        <div class="video-meta">
                            <div class="video-platform">
                                <span>📺</span>
                                <span>YouTube</span>
                            </div>
                            <span class="video-duration">4:15</span>
                        </div>
                    </div>
                </a>

                <a href="https://www.instagram.com/sameh_mokhtar_psy" target="_blank" class="video-card">
                    <div class="video-thumbnail">
                        <img src="{{asset('assets/media/img/IMG-20241214-WA0005.jpg')}}">
                    </div>
                    <div class="video-info">
                        <h3>التعافي من الصدمات النفسية</h3>
                        <p class="video-description">دليل شامل للتعامل مع آثار الصدمات وخطوات التعافي الصحيحة</p>
                        <div class="video-meta">
                            <div class="video-platform">
                                <span>📷</span>
                                <span>Instagram</span>
                            </div>
                            <span class="video-duration">6:40</span>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section id="articles" class="articles">
            <h2>المقالات الإرشادية</h2>
            <div class="articles-grid">
                <article class="article-card" onclick="openModal('article1')">
                    <div class="hero-image"><img src="{{asset('assets/media/img/art1.jpeg')}}"></div>
                    <div class="article-content">
                        <h3>هل أنا في علاقة مع شخصية نرجسية؟
                        </h3>
                        <p class="article-excerpt">7 علامات نفسية وسلوكية تُجيبك بدقة
                        </p>
                        <div class="article-meta">
                            <span>5 دقائق قراءة</span>
                            <a href="#" class="read-more">اقرأ المزيد</a>
                        </div>
                    </div>
                </article>

                <article class="article-card" onclick="openModal('article2')">
                    <div class="hero-image"><img src="{{asset('assets/media/img/art2.jpeg')}}"></div>
                    <div class="article-content">
                        <h3>الفرق بين النرجسي والسيكوباتي: لماذا يصعب الانفصال عنهم؟
                        </h3>
                        <p class="article-excerpt">ما هو الفرق بين الشخصية النرجسية والشخصية السيكوباتية؟
                        </p>
                        <div class="article-meta">
                            <span>7 دقائق قراءة</span>
                            <a href="#" class="read-more">اقرأ المزيد</a>
                        </div>
                    </div>
                </article>

                <article class="article-card" onclick="openModal('article3')">
                    <div class="article-image">🌱</div>
                    <div class="article-content">
                        <h3>التعافي من الصدمات النفسية</h3>
                        <p class="article-excerpt">دليل شامل للتعامل مع الصدمات النفسية وطرق التعافي الصحيحة مع الدعم المهني المناسب...</p>
                        <div class="article-meta">
                            <span>10 دقائق قراءة</span>
                            <a href="#" class="read-more">اقرأ المزيد</a>
                        </div>
                    </div>
                </article>

                <article class="article-card" onclick="openModal('article4')">
                    <div class="article-image">🧘</div>
                    <div class="article-content">
                        <h3>تقنيات الاسترخاء والتأمل</h3>
                        <p class="article-excerpt">تعلم تقنيات الاسترخاء والتأمل البسيطة التي يمكن ممارستها يومياً لتحسين الصحة النفسية...</p>
                        <div class="article-meta">
                            <span>6 دقائق قراءة</span>
                            <a href="#" class="read-more">اقرأ المزيد</a>
                        </div>
                    </div>
                </article>

                <article class="article-card" onclick="openModal('article5')">
                    <div class="article-image">👥</div>
                    <div class="article-content">
                        <h3>تحسين العلاقات الاجتماعية</h3>
                        <p class="article-excerpt">نصائح عملية لبناء علاقات صحية ومتينة مع الآخرين وتطوير مهارات التواصل الفعال...</p>
                        <div class="article-meta">
                            <span>8 دقائق قراءة</span>
                            <a href="#" class="read-more">اقرأ المزيد</a>
                        </div>
                    </div>
                </article>

                <article class="article-card" onclick="openModal('article6')">
                    <div class="article-image">🎯</div>
                    <div class="article-content">
                        <h3>تحديد الأهداف وتحقيق النجاح</h3>
                        <p class="article-excerpt">استراتيجيات نفسية لتحديد أهداف واقعية وقابلة للتحقيق والحفاظ على الدافعية لإنجازها...</p>
                        <div class="article-meta">
                            <span>9 دقائق قراءة</span>
                            <a href="#" class="read-more">اقرأ المزيد</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
<section id="services" class="services">
            <h2>خدماتنا</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>الاستشارات النفسية</h3>
                    <p>جلسات استشارية متخصصة لمساعدتك في التعامل مع التحديات النفسية والعاطفية بطريقة علمية وموثوقة.</p>
                    <a href="#booking" class="booking-button">احجز استشارة</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>الدعم الإرشادي</h3>
                    <p>برامج إرشادية شاملة تهدف إلى تطوير المهارات الشخصية وتعزيز الثقة بالنفس والنمو الإيجابي.</p>
                    <a href="#booking" class="booking-button">احجز جلسة إرشاد</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>المحتوى التفاعلي</h3>
                    <p>محتوى تعليمي وإرشادي متنوع عبر منصات التواصل الاجتماعي لنشر الوعي بالصحة النفسية.</p>
                    <a href="#videos" class="booking-button">شاهد الفيديوهات</a>
                </div>
            </div>
        </section>
    <div id="formSuccess" class="alert-message alert-success"></div>
    <div id="formError" class="alert-message alert-error"></div>
      <!-- سيكشن الحجز -->
<section id="booking" class="articles">
    <h2>احجز جلسة</h2>
    <form id="contactForm" class="form-container" enctype="multipart/form-data" method="POST" action="{{route('store')}}">
        @csrf
        <div class="col-md-12 fv-row">
            <label class="text-dark">{{trans('lang.day_choose')}}</label>
            <input class="form-input text-center text-success col-md-2" placeholder="Select day" id="kt_datepicker_1" name="from_time" required type="date"/>
            </div>
            <div class="col-md-12 fv-row">
            <label class="text-dark">{{trans('lang.hour_choose')}}</label>
                <input class="form-input text-center text-success col-md-2" placeholder="Select Hour"  id="hour_time" name="hour_time" required type="time"/>
            </div>
            </div>
            <label class="text-dark">{{trans('lang.duration')}}</label>
                <select name="time" id="time" placeholder=""  data-placeholder="{{trans('lang.select')}} {{trans('lang.duration')}}" data-hide-search="true" class="form-select form-select-solid fw-bold text-center">
                    <option   >{{trans('lang.select')}} {{trans('lang.duration')}}</option>
                    <option value="0"  > 1  {{trans('lang.hour')}}</option>
                    <option value="1"  > 2  {{trans('lang.hour')}}</option>
                    <option value="2"  > 3  {{trans('lang.hour')}}</option>
                    <option value="3"  > 4  {{trans('lang.hour')}}</option>
                </select>
            <label class="text-dark">{{trans('lang.name')}} :</label>
            <input class="form-input" type="text" placeholder="{{trans('lang.enter_your_yourname')}}" id="name_en" name="name_en" required>
            <label class="text-dark">{{trans('lang.age')}} <span>{{trans('lang.not_less_than_21_years')}}</span> :</label>
            <input class="form-input" type="number" placeholder="{{trans('lang.age')}} {{trans('lang.not_less_than_21_years')}}" min="21" id="age" name="age" >
            <label class="text-dark">{{trans('lang.qualification')}} :</label>
            <input class="form-input" type="text" placeholder="{{trans('lang.qualification')}}" id="qualification" name="qualification" required>
            <label class="text-dark">{{trans('lang.job')}} :</label>
            <input class="form-input" type="text" placeholder="{{trans('lang.job')}}" id="job" name="job" required>
            <label class="text-dark">{{trans('lang.marital_status')}} :</label>
            <input class="form-input" type="text" placeholder="{{trans('lang.marital_status')}}" id="marital_status" name="marital_status" >
            <label class="text-dark">{{trans('lang.email')}} :</label>
            <input class="form-input" type="email" placeholder="{{trans('lang.email')}}" id="email" name="email" >
            <label class="text-dark">{{trans('lang.phone')}} :</label>
            <input class="form-input" type="phone" placeholder="{{trans('lang.phone')}}" id="phone" name="phone" required>
            <label class="text-dark">{{trans('lang.message')}} :</label>
            <textarea  class="container fs-3 message-box" id="message"  placeholder="اختيارية"  rows="2" col="500" name="message" ></textarea>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">إلغاء</button>
                <button type="submit" id="submit" class="btn btn-success" >حفظ</button>
            </div>                             
        </div>                             
                                    
    </form>
@if(session('success'))
<div class="modal fade show" tabindex="-1" id="successModal" style="display: block; padding-right: 17px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h3 class="modal-title text-white">تم بنجاح</h3>
                <button type="button" class="btn-close" onclick="closeModal()" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <i class="ki-duotone ki-check-circle fs-1 text-success">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <h4 class="mt-3">شكرا 
                    <span class="text-info">{{ session('name_en') ?? 'لك' }}</span>
                     وصلتنا رسالتك وسيتم الرد على طلبك</h4>
                <a href="{{ session('whatsapp_link') }}" target="_blank" class="btn btn-success mt-3">
                    <i class="fab fa-whatsapp me-2"></i> التواصل عبر الواتساب
                </a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" onclick="closeModal()">إغلاق</button>
            </div>
        </div>
    </div>
</div>
<script>
function closeModal() {
    document.getElementById('successModal').style.display = 'none';
    location.reload();
}
</script>
@endif

  </section>
  
  <!-- سيكشن التقييمات -->
  <section id="reviews" class="articles">
  <style>
    #reviews {
      max-width: 1200px;
      margin: 40px auto;
      padding: 40px;
      background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      position: relative;
      overflow: hidden;
    }

    #reviews::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(102, 126, 234, 0.05) 0%, transparent 70%);
      animation: rotate 20s linear infinite;
    }

    #reviews h2 {
      text-align: center;
      color: #2c3e50;
      font-size: 2.5rem;
      margin-bottom: 40px;
      position: relative;
      z-index: 2;
    }

    #reviews h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: linear-gradient(45deg, #667eea, #764ba2);
      border-radius: 2px;
    }

    .stats-overview {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 20px;
      margin-bottom: 40px;
      position: relative;
      z-index: 2;
    }

    .stat-card {
      background: white;
      padding: 25px;
      border-radius: 15px;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 1px solid #e3e8ff;
    }

    .stat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(102, 126, 234, 0.2);
    }

    .stat-number {
      font-size: 2rem;
      font-weight: bold;
      color: #667eea;
      margin-bottom: 8px;
    }

    .stat-label {
      color: #6b7280;
      font-size: 0.9rem;
    }

    #reviewsList {
      margin-bottom: 40px;
      position: relative;
      z-index: 2;
    }

    .review-item {
      background: white;
      border-radius: 15px;
      padding: 25px;
      margin-bottom: 20px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
      border: 1px solid #e3e8ff;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.6s ease forwards;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .review-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, #667eea, #764ba2);
    }

    .review-item:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(102, 126, 234, 0.15);
    }

    .review-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .reviewer-info {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .reviewer-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: linear-gradient(135deg, #667eea, #764ba2);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: bold;
      font-size: 1.2rem;
    }

    .reviewer-details h4 {
      color: #2c3e50;
      margin-bottom: 5px;
      font-size: 1.1rem;
    }

    .review-date {
      color: #6b7280;
      font-size: 0.85rem;
    }

    .rating-display {
      display: flex;
      gap: 2px;
    }

    .star {
      color: #fbbf24;
      font-size: 1.2rem;
      transition: transform 0.2s ease;
    }

    .star.filled:hover {
      transform: scale(1.2);
    }

    .review-text {
      color: #4b5563;
      line-height: 1.6;
      margin-top: 15px;
      padding: 15px;
      background: #f8fafc;
      border-radius: 10px;
      border-left: 4px solid #667eea;
    }

    .no-reviews {
      text-align: center;
      padding: 60px 20px;
      color: #6b7280;
      font-size: 1.1rem;
    }

    .no-reviews-icon {
      font-size: 4rem;
      margin-bottom: 20px;
      opacity: 0.3;
    }

    #reviewForm {
      background: white;
      padding: 35px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      border: 1px solid #e3e8ff;
      position: relative;
      z-index: 2;
    }

    #reviewForm h3 {
      color: #2c3e50;
      margin-bottom: 25px;
      font-size: 1.5rem;
      text-align: center;
    }

    .form-group {
      margin-bottom: 25px;
    }

    .form-group label {
      display: block;
      color: #374151;
      margin-bottom: 8px;
      font-weight: 500;
    }

    #reviewForm input,
    #reviewForm select,
    #reviewForm textarea {
      width: 100%;
      padding: 15px;
      border: 2px solid #e5e7eb;
      border-radius: 10px;
      font-size: 1rem;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      background: white;
    }

    #reviewForm input:focus,
    #reviewForm select:focus,
    #reviewForm textarea:focus {
      outline: none;
      border-color: #667eea;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    #reviewForm button {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      padding: 15px 40px;
      border-radius: 50px;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: block;
      margin: 0 auto;
      position: relative;
      overflow: hidden;
    }

    #reviewForm button:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
    }

    #reviewForm button:active {
      transform: translateY(0);
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes rotate {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }

    .new-review {
      animation: pulse 0.6s ease;
    }

    /* تحسين للشاشات الصغيرة */
    @media (max-width: 768px) {
      #reviews {
        padding: 20px;
        margin: 20px;
      }

      #reviews h2 {
        font-size: 2rem;
      }

      .stats-overview {
        grid-template-columns: repeat(2, 1fr);
      }

      .reviewer-info {
        flex-direction: column;
        text-align: center;
        gap: 10px;
      }

      .review-header {
        flex-direction: column;
        gap: 15px;
      }
    }
  </style>

  <h2>التقييمات</h2>

  <!-- إحصائيات التقييمات -->
  <div class="stats-overview">
    <div class="stat-card">
      <div class="stat-number" id="totalReviews">0</div>
      <div class="stat-label">إجمالي التقييمات</div>
    </div>
    <div class="stat-card">
      <div class="stat-number" id="averageRating">0.0</div>
      <div class="stat-label">متوسط التقييم</div>
    </div>
    <div class="stat-card">
      <div class="stat-number" id="fiveStarCount">0</div>
      <div class="stat-label">5 نجوم</div>
    </div>
  </div>

</section>

        <section id="contact" class="social-links">
            <h3>تابعنا على مواقع التواصل الاجتماعي</h3>
            <div class="social-icons">
                <a href="https://www.tiktok.com/@storyxat?_t=ZS-8yjskljQb3P&_r=1" target="_blank" class="social-icon tiktok" title="تيك توك">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://www.instagram.com/sameh_mokhtar_psy" target="_blank" class="social-icon instagram" title="انستغرام">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/storyxat" target="_blank" class="social-icon facebook" title="فيسبوك">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.youtube.com/@DrStoryxat" target="_blank" class="social-icon youtube" title="يوتيوب">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 سامح مختار - جميع الحقوق محفوظة | استشارات نفسية ودعم إرشادي</p>
        </div>
    </footer>

    <!-- Article Modals -->
    <div id="article1" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>كيفية التعامل مع القلق والتوتر</h2>
                <button class="close" onclick="closeModal('article1')">&times;</button>
            </div>
            <div class="modal-body">
                <p>
        <strong style="color: #667eea; font-size: 1.3em; display: block; margin-bottom: 20px;">مقدمة:</strong>
        العلاقات العاطفية قد تكون مليئة بالتحديات، لكن في بعض الأحيان تجد نفسك في علاقة تُشعرك بالاستنزاف، والتشويش، وفقدان الثقة بالنفس. إذا شعرت بهذه الأعراض، فربما تكون في علاقة مع شخصية نرجسية. هذا المقال يُسلّط الضوء على 7 علامات نفسية وسلوكية تشير إلى ذلك، مع توضيح الفرق بين التعلّق الطبيعي والتعلّق المرضي بشخص نرجسي، ونستعرض إشارات مبكرة يصعب ملاحظتها في البداية.
        <br><br>
        
        <strong style="color: #667eea; font-size: 1.3em; display: block; margin: 30px 0 20px;">أولاً: ما هي الشخصية النرجسية؟</strong>
        اضطراب الشخصية النرجسية (Narcissistic Personality Disorder - NPD) هو اضطراب نفسي مُعترف به في الدليل التشخيصي والإحصائي الخامس (DSM-5)، ويتميز بشعور مبالغ فيه بالأهمية الذاتية، والحاجة المستمرة للإعجاب، وقلة التعاطف مع الآخرين. المسمى مأخوذ من قصة نرسيس الاغريقية، <a href="#" style="color: #667eea; text-decoration: underline;">شاهد القصه من هنا قصة نارسيس</a>
        <br><br>
        <span style="background: #fff3cd; color: #856404; padding: 15px; border-radius: 8px; display: block; border-right: 4px solid #ffc107;"><i class="fas fa-exclamation-triangle"></i> <strong>تنويه هام:</strong> تغيير الشخصية النرجسية غالبًا ما يكون صعبًا للغاية، ويتطلب علاجًا نفسيًا مكثفًا ومتابعة طويلة الأمد.</span>
        <br><br>
        
        <strong style="color: #667eea; font-size: 1.3em; display: block; margin: 30px 0 20px;">ثانياً: 7 علامات نفسية وسلوكية تُشير إلى أنك في علاقة مع نرجسي</strong>
        <a href="#" style="color: #667eea; text-decoration: underline;">علامات النرجسي: الفيديو من هنا النرجسية</a>
        <br><br>
        
        <span style="display: block; margin: 15px 0; padding: 12px; background: #e8f4fd; border-right: 4px solid #667eea;"><strong>1. اللوم المستمر والتقليل من الذات:</strong> النرجسي يجعلك تشعر أنك دائمًا مخطئ، حتى في أبسط الأمور، مما يؤدي إلى تآكل ثقتك بنفسك.</span>
        
        <span style="display: block; margin: 15px 0; padding: 12px; background: #e8f4fd; border-right: 4px solid #667eea;"><strong>2. التحكم غير المباشر (Gaslighting):</strong> من خلال التلاعب العاطفي يجعلك تشك في نفسك وواقعك.</span>
        
        <span style="display: block; margin: 15px 0; padding: 12px; background: #e8f4fd; border-right: 4px solid #667eea;"><strong>3. عدم الاعتراف بمشاعرك:</strong> تجاهل مشاعرك أو السخرية منها بحجة أنها "مبالغ فيها".</span>
        
        <span style="display: block; margin: 15px 0; padding: 12px; background: #e8f4fd; border-right: 4px solid #667eea;"><strong>4. العطاء المشروط:</strong> الحب والاهتمام يأتيان فقط عندما تتصرف بطريقة تروق له.</span>
        
        <span style="display: block; margin: 15px 0; padding: 12px; background: #e8f4fd; border-right: 4px solid #667eea;"><strong>5. عزلك عن الآخرين:</strong> تقليل من شأن أصدقائك أو عائلتك تدريجيًا، ليجعلك تعتمد عليه عاطفيًا بالكامل.</span>
        
        <span style="display: block; margin: 15px 0; padding: 12px; background: #e8f4fd; border-right: 4px solid #667eea;"><strong>6. احتكار الحديث:</strong> الحديث دائمًا يدور حوله، وقلّما يظهر اهتمامًا حقيقيًا بك أو بتجاربك.</span>
        
        <span style="display: block; margin: 15px 0; padding: 12px; background: #e8f4fd; border-right: 4px solid #667eea;"><strong>7. عدم تحمّل المسؤولية:</strong> عند حدوث خلاف، يُلقي باللوم عليك أو على الآخرين، دون أي نوع من الاعتراف بخطئه.</span>
        
        <br>
        <em style="color: #6c757d; font-style: italic;">اقرأ أيضًا: <a href="#" style="color: #667eea;">الفرق بين النرجسي والسيكوباتي… مقالة</a></em>
        <br><br>
   
   <strong style="color: #667eea; font-size: 1.3em; display: block; margin: 30px 0 20px;">ثالثاً: الفرق بين التعلّق الطبيعي والتعلّق المرضي بشخص نرجسي</strong>
   
   <div style="background: #f8f9fa; padding: 25px; border-radius: 10px; margin: 20px 0;">
       <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
           <div style="text-align: center; padding: 15px; background: #d4edda; border-radius: 8px;">
               <strong style="color: #155724;">التعلّق الطبيعي</strong>
           </div>
           <div style="text-align: center; padding: 15px; background: #f8d7da; border-radius: 8px;">
               <strong style="color: #721c24;">التعلّق المرضي</strong>
           </div>
       </div>
       
       <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
           <div style="padding: 10px; background: white; border-radius: 5px;">مبني على التقدير المتبادل</div>
           <div style="padding: 10px; background: white; border-radius: 5px;">مبني على الخوف من الفقد والرفض</div>
       </div>
       
       <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
           <div style="padding: 10px; background: white; border-radius: 5px;">يمكن الانفصال مع مرور الوقت دون أزمة نفسية كبيرة</div>
           <div style="padding: 10px; background: white; border-radius: 5px;">الانفصال يُسبب انهيارًا نفسيًا وقلقًا دائمًا</div>
       </div>
       
       <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
           <div style="padding: 10px; background: white; border-radius: 5px;">لا يُشوّه صورة الذات</div>
           <div style="padding: 10px; background: white; border-radius: 5px;">يؤدي إلى انخفاض احترام الذات</div>
       </div>
       
       <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
           <div style="padding: 10px; background: white; border-radius: 5px;">لا يرتبط بعلاقات استغلالية</div>
           <div style="padding: 10px; background: white; border-radius: 5px;">غالبًا يكون مصحوبًا بالتلاعب أو الابتزاز العاطفي</div>
       </div>
   </div>
   
   <strong>أسباب التعلق المرضي:</strong> غالبًا ما ينشأ عن تجارب صادمة في الطفولة، مثل الإهمال العاطفي أو غياب الشعور بالأمان، مما يجعل الشخص يتشبث بعلاقة غير صحية خوفًا من الهجر.
   <br><br>
   
   <strong style="color: #667eea; font-size: 1.3em; display: block; margin: 30px 0 20px;">رابعاً: إشارات نفسية مبكرة لا تُقال بصوت عالٍ</strong>
   <a href="#" style="color: #667eea; text-decoration: underline;">من اليأس الي السلام</a>
   <br><br>
   
   <ul style="list-style: none; padding: 0;">
       <li style="margin: 10px 0; padding: 10px 15px; background: #fff3cd; border-right: 4px solid #ffc107; border-radius: 5px;"><i class="fas fa-circle" style="color: #ffc107; margin-left: 10px;"></i>الشعور الدائم بالذنب دون سبب واضح</li>
       <li style="margin: 10px 0; padding: 10px 15px; background: #fff3cd; border-right: 4px solid #ffc107; border-radius: 5px;"><i class="fas fa-circle" style="color: #ffc107; margin-left: 10px;"></i>الإرهاق العاطفي رغم قِصر العلاقة</li>
       <li style="margin: 10px 0; padding: 10px 15px; background: #fff3cd; border-right: 4px solid #ffc107; border-radius: 5px;"><i class="fas fa-circle" style="color: #ffc107; margin-left: 10px;"></i>الشعور بأنك تمشي على قشر بيض خوفًا من ردود أفعاله</li>
       <li style="margin: 10px 0; padding: 10px 15px; background: #fff3cd; border-right: 4px solid #ffc107; border-radius: 5px;"><i class="fas fa-circle" style="color: #ffc107; margin-left: 10px;"></i>غياب الإحساس بالأمان العاطفي رغم التواصل اليومي</li>
       <li style="margin: 10px 0; padding: 10px 15px; background: #fff3cd; border-right: 4px solid #ffc107; border-radius: 5px;"><i class="fas fa-circle" style="color: #ffc107; margin-left: 10px;"></i>ملاحظة تعليقات سامة مبطّنة على هيئة "مزاح"</li>
   </ul>
   <br>
   
   <strong style="color: #667eea; font-size: 1.3em; display: block; margin: 30px 0 20px;">خامسًا: المضاعفات النفسية للعلاقات النرجسية</strong>
   
   <ul style="list-style: none; padding: 0;">
       <li style="margin: 10px 0; padding: 12px 15px; background: #f8d7da; border-right: 4px solid #dc3545; border-radius: 5px;"><i class="fas fa-exclamation-circle" style="color: #dc3545; margin-left: 10px;"></i>انخفاض حاد في احترام الذات</li>
       <li style="margin: 10px 0; padding: 12px 15px; background: #f8d7da; border-right: 4px solid #dc3545; border-radius: 5px;"><i class="fas fa-exclamation-circle" style="color: #dc3545; margin-left: 10px;"></i>أعراض الاكتئاب والقلق المزمن</li>
       <li style="margin: 10px 0; padding: 12px 15px; background: #f8d7da; border-right: 4px solid #dc3545; border-radius: 5px;"><i class="fas fa-exclamation-circle" style="color: #dc3545; margin-left: 10px;"></i>اضطرابات الأكل أو النوم</li>
       <li style="margin: 10px 0; padding: 12px 15px; background: #f8d7da; border-right: 4px solid #dc3545; border-radius: 5px;"><i class="fas fa-exclamation-circle" style="color: #dc3545; margin-left: 10px;"></i>أفكار انتحارية أو ميول انسحابية</li>
   </ul>
   
   <br>
   <div style="background: #d1ecf1; padding: 15px; border-radius: 8px; border-right: 4px solid #17a2b8;">
       <i class="fas fa-chart-bar" style="color: #17a2b8; margin-left: 10px;"></i><strong>إحصائية:</strong> تشير الدراسات إلى أن 70% من المصابين باضطراب الشخصية النرجسية هم رجال، لكن النساء قد يُصبن به أيضًا.
   </div>
   <br><br>
   
   <strong style="color: #667eea; font-size: 1.3em; display: block; margin: 30px 0 20px;">سادسًا: كيف تتعامل مع الشخصية النرجسية؟</strong>
   
   <div style="background: #d4edda; padding: 20px; border-radius: 10px; margin: 20px 0;">
       <div style="margin: 15px 0;"><strong style="color: #155724;"><i class="fas fa-shield-alt"></i> استراتيجية "الحجر الرمادي":</strong> تقليل التفاعل العاطفي وتقديم ردود محايدة دون إثارة درامية.</div>
       
       <div style="margin: 15px 0;"><strong style="color: #155724;"><i class="fas fa-heart"></i> تعزيز الثقة بالنفس:</strong> من خلال العلاج النفسي والدعم الذاتي.</div>
       
       <div style="margin: 15px 0;"><strong style="color: #155724;"><i class="fas fa-border-all"></i> بناء حدود واضحة:</strong> ووضع قواعد للسلوك المقبول في العلاقة.</div>
       
       <div style="margin: 15px 0;"><strong style="color: #155724;"><i class="fas fa-hands-helping"></i> طلب الدعم:</strong> سواء من مختصين نفسيين أو مجموعات دعم.</div>
   </div>
   
   <em style="color: #6c757d; font-style: italic;">اقرأ أيضًا: <a href="#" style="color: #667eea;">خطوات التعافي من العلاقات السامة لينك مقالة (خطوات عملية للخروج الأمن من علاقة مؤذية نفسيًا)</a> <a href="#" style="color: #667eea;">مابعد الإنفصال لينك مقالة (6 مراحل من الحزن حتى التعافي)</a></em>
   <br><br>
   
   <strong style="color: #667eea; font-size: 1.3em; display: block; margin: 30px 0 20px;">خاتمة:</strong>
   العلاقة النرجسية ليست مجرد علاقة غير مريحة، بل قد تكون مدمرة نفسيًا. لا تنتظر حتى تنهار، ابدأ بمراقبة العلامات، وفهم الأنماط، وطلب المساعدة.
   <br><br>
   
   <div style="background: #f8d7da; padding: 20px; border-radius: 10px; border-right: 4px solid #dc3545; margin: 20px 0;">
       <i class="fas fa-quote-right" style="color: #dc3545; font-size: 1.5em; float: right; margin-right: 10px;"></i>
       <strong style="color: #721c24;">"العلاقة النرجسية قد تؤدي لمضاعفات خطيرة مثل القلق أو الأفكار الانتحارية. طلب الدعم المتخصص (طبيب نفسي، معالج) ليس ضعفًا، بل خطوة للتحرر".</strong>
   </div>
   
   <div style="background: #667eea; color: white; padding: 20px; border-radius: 10px; text-align: center; margin: 20px 0;">
       <i class="fas fa-calendar-check" style="font-size: 1.5em; margin-bottom: 10px; display: block;"></i>
       إذا شعرت بأنك بحاجة لدعم نفسي أو جلسة كوتشنج، لا تتردد في التواصل معنا من خلال <a href="#" style="color: #fff; text-decoration: underline; font-weight: bold;">صفحة احجز جلسة</a>.
   </div>
</p>
            </div>
        </div>
    </div>

    <div id="article2" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>ما هو الفرق بين الشخصية النرجسية والشخصية السيكوباتية؟
                </h2>
                <button class="close" onclick="closeModal('article2')">&times;</button>
            </div>
            <div class="modal-body">
                <p>الشخصية النرجسية (Narcissistic Personality Disorder - NPD): هي شخصية مضطربة نفسيًا، تُظهر غرورًا زائدًا، احتياج دائم للإعجاب، وضعف في التعاطف. النرجسي يرى نفسه محور الكون، ويستخدم الآخرين لتضخيم صورته الذاتية.</p>

                <p>✅ تشخيصه يتم عند توفر 5 من 9 سمات في DSM-5.</p>
                
                <p>الشخصية السيكوباتية (Antisocial Personality Disorder - ASPD): سيكوباتية تعني "انعدام الضمير". صاحب هذه الشخصية لا يشعر بالذنب، يخرق القوانين، ويُظهر سلوك عدواني وبارد.</p>
                
                <p>✅ يُشخص باستخدام مقياس Hare PCL-R، وغالبًا يرتبط بسلوك إجرامي.</p>
                
                <p>مصادر خارجية:</p>
                <p>- كليفلاند كلينك - اضطراب الشخصية المعادية للمجتمع</p>
                <p>https://my.clevelandclinic.org/health/diseases/9657-antisocial-personality-disorder</p>
                
                <p>- مايو كلينك - اضطراب الشخصية النرجسية</p>
                <p>https://www.mayoclinic.org/ar/diseases-conditions/narcissistic-personality-disorder/symptoms-causes/syc-20366662</p>
                
                <p>أوجه التشابه بين النرجسي والسيكوباتي: خداع البداية</p>
                
                <p>كلاهما قد يظهر في البداية كشخص جذاب وواثق. لكن سرعان ما ينكشف الجانب المظلم.</p>
                
                <p>أبرز أوجه الشبه:</p>
                <p>التلاعب النفسي والعاطفي (Manipulation, Gaslighting).</p>
                <p>الافتقار للتعاطف الحقيقي.</p>
                <p>علاقات سطحية قائمة على المنفعة فقط.</p>
                
                <p>- دراسة عن التلاعب النفسي في ASPD وNPD (NCBI)</p>
                <p>https://pmc.ncbi.nlm.nih.gov/articles/PMC5807491/</p>
                
                <p>الفرق الحقيقي بين السيكوباتي والنرجسي في العلاقات</p>
                
                <p>المقارنة</p>
                <p>النرجسي</p>
                <p>السيكوباتي</p>
                <p>الدافع</p>
                <p>احتياج دائم للإعجاب</p>
                <p>السيطرة، التدمير، المصلحة المادية</p>
                <p>ردود الفعل</p>
                <p>ينفعل، يُشوه سمعتك</p>
                <p>بارد، ينتقم بصمت أو عنف</p>
                <p>التعاطف</p>
                <p>تمثيل للتعاطف عند الحاجة</p>
                <p>انعدام تام للتعاطف</p>
                <p>الخطر</p>
                <p>أذى نفسي</p>
                <p>أذى نفسي + جسدي + قانوني محتمل</p>
                <p>نهاية العلاقة</p>
                <p>يحاول إرجاعك بالتلاعب أو اللوم</p>
                <p>قد يتحول إلى تهديد مباشر أو تدمير متعمد</p>
                
                <p>لماذا السيكوباتي يبدو أهدأ في البداية لكنه أكثر خطورة لاحقًا؟</p>
                
                <p>🔹 مرحلة الحب الزائف (Love Bombing): السيكوباتي يعرف كيف يُغويك بكلام محسوب، حب شديد، ووعود كبيرة.</p>
                
                <p>🔹 مرحلة السقوط: بمجرد أن يتعلق به الضحية: يبدأ بكسر حدودك تدريجيًا. يتحول إلى مصدر ألم وخوف. يظهر سلوك تدميري أو عنيف عند أول محاولة رفض.</p>
                
                <p>> دراسة: 70% من السيكوباتيين يمارسون عنفًا جسديًا في علاقاتهم.</p>
                
                <p>مصادر خارجية:</p>
                <p>- الفروقات بين NPD وASPD (APA)</p>
                <p>https://www.apa.org/topics/personality-disorders/narcissistic-vs-antisocial</p>
                
                <p>- مخاطر العنف في العلاقات السيكوباتية (Cleveland Clinic)</p>
                <p>https://my.clevelandclinic.org/health/diseases/9657-antisocial-personality-disorder#symptoms-and-causes</p>
                
                <p>- دراسة عن العنف في ASPD (National Institutes of Health)</p>
                <p>https://pmc.ncbi.nlm.nih.gov/articles/PMC4649950/</p>
                
                <p>لماذا يصعب الانفصال عن السيكوباتي أو النرجسي؟</p>
                
                <p>التعلق الصدمي (Trauma Bond): يتناوب بين العقاب والمكافأة، فيخلق تشويشًا عاطفيًا. يجعل الضحية تتساءل: "هل المشكلة فيّ؟".</p>
                
                <p>العزلة والسيطرة: يقطع صلاتك بأهلك وأصدقائك. تعتمد عليه عاطفيًا، مما يصعّب الخروج.</p>
                
                <p>🔸 الانتقام بعد الانفصال: النرجسي: قد يُطلق حملة تشويه ضدك. السيكوباتي: تهديدات، تخويف، وربما عنف فعلي.</p>
                
                <p>- تأثير العزلة في العلاقات السامة (APA)</p>
                <p>https://www.apa.org/topics/domestic-violence</p>
                
                <p>أخطر نوع: النرجسي السيكوباتي (NPD + ASPD) هو مزيج مدمر من الغطرسة والسادية وانعدام الضمير.</p>
                
                <p>سماته: سادي: يستمتع بإيذاء الآخرين. بارانويدي: دائم الشك. لا يشعر بالندم مهما كانت الأفعال.</p>
                
                <p>> د. جين مان: "الهروب من هذه الشخصية ضرورة، لأن البقاء قد يُدمرك نفسيًا وجسديًا."</p>
                
                <p>كيفية الانفصال الآمن والتعافي من العلاقة</p>
                
                <p>✅ خطوات عملية:</p>
                <p>1. Grey Rock Technique – كن مملًا في ردودك، لا تمنحه طاقة.</p>
                <p>2. توثيق كل شيء – رسائل، تهديدات، مكالمات.</p>
                <p>3. الدعم الخارجي – من مستشار نفسي، أو مركز حماية الأسرة.</p>
                
                <p>✅ خطة للتعافي:</p>
                <p>علاج DBT – لإعادة بناء احترامك لذاتك.</p>
                <p>تدريب على قول "لا" – بدون خوف أو تأنيب.</p>
                <p>استعادة الروابط الآمنة – مع الأصدقاء أو المعالجين.</p>
                
                <p>مصادر خارجية:</p>
                <p>> - بناء الحدود الصحية (Mayo Clinic)</p>
                <p>https://www.mayoclinic.org/healthy-lifestyle/adult-health/in-depth/assertive/art-20044644</p>
                
                <p>الخلاصة: الحب لا يكفي مع شخص مؤذي</p>
                
                <p>العلاقة مع نرجسي أو سيكوباتي ليست تحديًا… بل خطر.</p>
                <p>الانفصال قرار شجاع وليس ضعفًا.</p>
                <p>إذا شعرت بالخوف أو الانكسار… فأنت لست وحدك. الدعم موجود، والشفاء ممكن.</p>
                
                <p>"إذا نجوت من علاقة مع نرجسي أو سيكوباتي… فأنت محارب حقيقي." – د. جون ماير</p>
            </div>
        </div>
    </div>

    <div id="article3" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>التعافي من الصدمات النفسية</h2>
                <button class="close" onclick="closeModal('article3')">&times;</button>
            </div>
            <div class="modal-body">
                <p>الصدمات النفسية يمكن أن تترك تأثيراً عميقاً على حياتنا النفسية والعاطفية. فهم عملية التعافي والحصول على الدعم المناسب خطوة مهمة نحو الشفاء.</p>
                
                <h3>ما هي الصدمة النفسية؟</h3>
                <p>الصدمة النفسية هي استجابة عاطفية لحدث مؤلم أو مخيف مثل الحوادث، فقدان شخص عزيز، العنف، أو أي تجربة تهدد الشعور بالأمان والاستقرار.</p>
                
                <h3>أعراض الصدمة النفسية</h3>
                <p>تختلف أعراض الصدمة من شخص لآخر وتشمل: الكوابيس أو ذكريات متكررة، تجنب الأماكن أو الأشخاص المرتبطة بالحدث، تقلبات مزاجية شديدة، صعوبة في التركيز، والشعور بالخدر العاطفي.</p>
                
                <h3>مراحل التعافي</h3>
                <p><strong>1. مرحلة الإنكار والصدمة:</strong> عدم تصديق ما حدث والشعور بالخدر العاطفي.</p>
                <p><strong>2. مرحلة المواجهة:</strong> بداية إدراك الواقع والتعامل مع المشاعر الصعبة.</p>
                <p><strong>3. مرحلة التكيف:</strong> تعلم استراتيجيات جديدة للتعامل مع التحديات.</p>
                <p><strong>4. مرحلة النمو:</strong> اكتساب قوة ومرونة جديدة من التجربة.</p>
                
                <h3>استراتيجيات التعافي</h3>
                <p><strong>العلاج النفسي:</strong> خاصة العلاج السلوكي المعرفي وعلاج معالجة الصدمات يمكن أن يكونا فعالين جداً.</p>
                <p><strong>الدعم الاجتماعي:</strong> التواصل مع الأصدقاء والعائلة أو مجموعات الدعم.</p>
                <p><strong>الرعاية الذاتية:</strong> ممارسة الأنشطة التي تجلب الراحة والاسترخاء.</p>
                
                <h3>التعامل مع نوبات الذعر</h3>
                <p>عند حدوث نوبة ذعر أو ذكريات مؤلمة، استخدم تقنيات التأريض مثل تحديد 5 أشياء تراها، 4 أشياء تسمعها، 3 أشياء تلمسها، شيئين تشمهما، وشيء واحد تتذوقه.</p>
                
                <p>تذكر أن التعافي من الصدمة عملية تدريجية وتتطلب وقتاً وصبراً. لا تتردد في طلب المساعدة المهنية عندما تحتاجها.</p>
            </div>
        </div>
    </div>

    <div id="article4" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>تقنيات الاسترخاء والتأمل</h2>
                <button class="close" onclick="closeModal('article4')">&times;</button>
            </div>
            <div class="modal-body">
                <p>تقنيات الاسترخاء والتأمل هي أدوات قوية لتحسين الصحة النفسية والجسدية. يمكن ممارستها في أي مكان وزمان لتقليل التوتر وزيادة الشعور بالهدوء والراحة.</p>
                
                <h3>فوائد الاسترخاء والتأمل</h3>
                <p>الممارسة المنتظمة لتقنيات الاسترخاء تساعد في: تقليل مستويات التوتر والقلق، تحسين جودة النوم، تعزيز التركيز والوضوح الذهني، تقوية جهاز المناعة، وخفض ضغط الدم.</p>
                
                <h3>تقنية التنفس العميق</h3>
                <p><strong>الخطوات:</strong></p>
                <p>1. اجلس في وضعية مريحة وأغلق عينيك</p>
                <p>2. ضع يد على صدرك والأخرى على بطنك</p>
                <p>3. تنفس ببطء من الأنف لمدة 4 ثوانٍ</p>
                <p>4. احبس النفس لمدة 4 ثوانٍ</p>
                <p>5. اخرج الهواء من الفم لمدة 6 ثوانٍ</p>
                <p>6. كرر لمدة 5-10 دقائق</p>
                
                <h3>تأمل اليقظة الذهنية</h3>
                <p>ركز على اللحظة الحاضرة دون إصدار أحكام. لاحظ أفكارك ومشاعرك دون محاولة تغييرها. ابدأ بـ 5 دقائق يومياً وزد تدريجياً.</p>
                
                <h3>تقنية استرخاء العضلات التدريجي</h3>
                <p>قم بشد مجموعات العضلات المختلفة لمدة 5 ثوانٍ ثم أرخها لمدة 10 ثوانٍ. ابدأ من أصابع القدم وانتقل تدريجياً إلى الرأس.</p>
                
                <h3>التصور الإيجابي</h3>
                <p>تخيل مكاناً هادئاً وجميلاً واستخدم جميع حواسك لتجعل الصورة أكثر واقعية. يمكن أن يكون شاطئ، غابة، أو أي مكان يجلب لك السلام.</p>
                
                <h3>نصائح للممارسة الفعالة</h3>
                <p>اختر وقتاً ثابتاً للممارسة، ابدأ بفترات قصيرة، اختر مكاناً هادئاً، ولا تتوقع نتائج فورية. الاستمرارية أهم من الكمال.</p>
                
                <p>تذكر أن الاسترخاء والتأمل مهارات تتطور مع الوقت والممارسة. كن صبوراً مع نفسك واستمتع بالرحلة نحو الهدوء الداخلي.</p>
            </div>
        </div>
    </div>

    <div id="article5" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>تحسين العلاقات الاجتماعية</h2>
                <button class="close" onclick="closeModal('article5')">&times;</button>
            </div>
            <div class="modal-body">
                <p>العلاقات الاجتماعية الصحية هي أحد أهم عوامل السعادة والرفاهية النفسية. تعلم كيفية بناء وتطوير علاقات قوية ومتينة مع الآخرين يمكن أن يحسن من جودة حياتك بشكل كبير.</p>
                
                <h3>أهمية العلاقات الاجتماعية</h3>
                <p>العلاقات الجيدة توفر الدعم العاطفي، تقلل من الشعور بالوحدة، تعزز الثقة بالنفس، وتساعد في التعامل مع الضغوط الحياتية. الأشخاص الذين لديهم علاقات قوية يتمتعون بصحة نفسية وجسدية أفضل.</p>
                
                <h3>مهارات التواصل الفعال</h3>
                <p><strong>الاستماع النشط:</strong> أعطِ انتباهك الكامل للشخص الآخر، تجنب المقاطعة، واطرح أسئلة توضيحية لتظهر اهتمامك.</p>
                <p><strong>التعبير الواضح:</strong> عبر عن مشاعرك وأفكارك بوضوح وصدق، واستخدم "أنا أشعر" بدلاً من "أنت تفعل".</p>
                <p><strong>لغة الجسد:</strong> انتبه لتعبيرات وجهك وحركاتك، حافظ على التواصل البصري، واستخدم الإيماءات الإيجابية.</p>
                
                <h3>بناء الثقة في العلاقات</h3>
                <p>الثقة تُبنى من خلال: الوفاء بالوعود، الصدق في التعامل، احترام الحدود الشخصية، والتسامح مع الأخطاء البسيطة.</p>
                
                <h3>التعامل مع الصراعات</h3>
                <p><strong>1. اختر الوقت المناسب:</strong> تجنب النقاش أثناء الغضب أو التوتر.</p>
                <p><strong>2. ركز على المشكلة:</strong> تجنب الهجمات الشخصية وركز على الموضوع المحدد.</p>
                <p><strong>3. ابحث عن حلول مشتركة:</strong> حاول إيجاد حلول تناسب جميع الأطراف.</p>
                <p><strong>4. اعتذر عند الخطأ:</strong> تحمل المسؤولية عن أخطائك واعتذر بصدق.</p>
                
                <h3>تطوير الذكاء العاطفي</h3>
                <p>تعلم كيفية التعرف على مشاعرك وإدارتها، وكذلك فهم مشاعر الآخرين والاستجابة لها بطريقة مناسبة. هذا يساعد في بناء علاقات أكثر عمقاً وتفهماً.</p>
                
                <h3>الحفاظ على العلاقات</h3>
                <p>العلاقات تحتاج إلى استثمار مستمر. خصص وقتاً للأشخاص المهمين في حياتك، تذكر المناسبات المهمة، وأظهر التقدير والامتنان بانتظام.</p>
                
                <p>تذكر أن بناء العلاقات الجيدة يتطلب وقتاً وجهداً، لكن الاستثمار في العلاقات الإنسانية هو من أفضل الاستثمارات التي يمكنك القيام بها.</p>
            </div>
        </div>
    </div>

    <div id="article6" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>تحديد الأهداف وتحقيق النجاح</h2>
                <button class="close" onclick="closeModal('article6')">&times;</button>
            </div>
            <div class="modal-body">
                <p>تحديد أهداف واضحة ووضع خطة لتحقيقها هو المفتاح للنجاح في أي مجال من مجالات الحياة. الأهداف تعطي معنى وإتجاهاً لحياتنا وتساعدنا في التركيز على ما هو مهم فعلاً.</p>
                
                <h3>أهمية وضع الأهداف</h3>
                <p>الأهداف الواضحة تساعد في: تحديد الأولويات، زيادة الدافعية والإنتاجية، قياس التقدم، وتحسين الثقة بالنفس عند تحقيقها.</p>
                
                <h3>معايير SMART للأهداف</h3>
                <p><strong>Specific (محدد):</strong> الهدف واضح ومحدد بدقة</p>
                <p><strong>Measurable (قابل للقياس):</strong> يمكن قياس التقدم نحو تحقيقه</p>
                <p><strong>Achievable (قابل للتحقيق):</strong> واقعي ويمكن الوصول إليه</p>
                <p><strong>Relevant (ذو صلة):</strong> مرتبط بقيمك وأولوياتك</p>
                <p><strong>Time-bound (محدد بوقت):</strong> له موعد نهائي واضح</p>
                
                <h3>أنواع الأهداف</h3>
                <p><strong>أهداف قصيرة المدى:</strong> من أسابيع إلى أشهر قليلة</p>
                <p><strong>أهداف متوسطة المدى:</strong> من سنة إلى ثلاث سنوات</p>
                <p><strong>أهداف طويلة المدى:</strong> أكثر من ثلاث سنوات</p>
                
                <h3>خطوات تحقيق الأهداف</h3>
                <p><strong>1. كتابة الأهداف:</strong> اكتب أهدافك بوضوح وتفصيل</p>
                <p><strong>2. تقسيم الأهداف:</strong> قسم الأهداف الكبيرة إلى خطوات صغيرة قابلة للتنفيذ</p>
                <p><strong>3. وضع خطة عمل:</strong> حدد الخطوات المطلوبة والجدول الزمني</p>
                <p><strong>4. المتابعة والتقييم:</strong> راجع تقدمك بانتظام وعدل الخطة حسب الحاجة</p>
                
                <h3>التغلب على العقبات</h3>
                <p><strong>التسويف:</strong> قسم المهام إلى أجزاء صغيرة وابدأ بالأسهل</p>
                <p><strong>فقدان الدافعية:</strong> تذكر لماذا وضعت هذا الهدف وتصور النتيجة النهائية</p>
                <p><strong>الخوف من الفشل:</strong> اعتبر الفشل جزءاً من التعلم وليس النهاية</p>
                
                <h3>الاحتفال بالإنجازات</h3>
                <p>لا تنس الاحتفال بكل إنجاز، مهما كان صغيراً. هذا يعزز الدافعية ويبني زخماً إيجابياً للمضي قدماً.</p>
                
                <h3>إعادة تقييم الأهداف</h3>
                <p>من الطبيعي أن تتغير ظروف الحياة وأولوياتك. لا تتردد في إعادة تقييم أهدافك وتعديلها حسب الحاجة.</p>
                
                <p>تذكر أن النجاح ليس مجرد وصول إلى الهدف، بل هو أيضاً الرحلة والتعلم والنمو الذي تحققه في الطريق.</p>
            </div>
        </div>
    </div>
    <!-- JavaScript files -->
    <script src="{{asset('assets/source/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/source/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/source/plugins.bundle.js')}}"></script>
    <script src="{{asset('dash/assets/plugins/global/plugins.bundle.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('assets/source/main.js')}}"></script>

    <!-- Fixed JavaScript code with proper error handling -->
    <script>
    $(document).ready(function() {
        const contactForm = document.getElementById('contactForm');
        const submitButton = document.getElementById('submit');
        const formSuccess = document.getElementById('formSuccess');
        const formError = document.getElementById('formError');
        
        if (contactForm) {
            // Use the form submit event
            $(contactForm).submit(function(e) {
                e.preventDefault();
                
                // Show loading state
                if (submitButton) {
                    submitButton.classList.add('btn-loading');
                    submitButton.disabled = true;
                }
                
                // Hide any previous messages
                if (formSuccess) formSuccess.style.display = 'none';
                if (formError) formError.style.display = 'none';
                
                // Get form data
                var formData = {
                    kt_datepicker_1: $('#kt_datepicker_1').val(),
                    hour_time: $('#hour_time').val(),
                    time: $('#time').val(),
                    name_en: $('#name_en').val(),
                    age: $('#age').val(),
                    qualification: $('#qualification').val(),
                    job: $('#job').val(),
                    marital_status: $('#marital_status').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    message: $('#message').val()
                };
                
                $.ajax({
                    url: "{{ route('store') }}",
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    data: formData,
                    success: function(response) {
                        // Handle the success response from the server
                        console.log(response);
                        
                        if (formSuccess) {
                            formSuccess.textContent = response.message || 'تم إرسال الطلب بنجاح!';
                            formSuccess.style.display = 'block';
                            formSuccess.scrollIntoView({behavior: 'smooth'});
                        }
                        
                        // Reset form
                        contactForm.reset();
                    },
                    error: function(xhr, status, error) {
                        // Handle the error response from the server
                        console.log(xhr.responseText);
                        
                        if (formError) {
                            formError.textContent = 'حدث خطأ أثناء إرسال الطلب. يرجى المحاولة مرة أخرى.';
                            formError.style.display = 'block';
                            formError.scrollIntoView({behavior: 'smooth'});
                        }
                    },
                    complete: function() {
                        // Remove loading state
                        if (submitButton) {
                            submitButton.classList.remove('btn-loading');
                            submitButton.disabled = false;
                        }
                    }
                });
            });
        } else {
            console.error('Contact form not found');
        }
    });
</script>
    <script>
        // Fixed JavaScript code with proper error handling
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM fully loaded and parsed');
            
            // Mobile menu functionality with safety checks
            const menuToggle = document.getElementById('menuToggle');
            const mobileNavLinks = document.getElementById('mobileNavLinks');
            const navLinks = document.getElementById('navLinks');
            
            if (menuToggle && mobileNavLinks) {
                console.log('Mobile menu elements found');
                menuToggle.addEventListener('click', function() {
                    this.classList.toggle('active');
                    mobileNavLinks.classList.toggle('show');
                });
            } else {
                console.log('Mobile menu elements not found');
            }
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (menuToggle && mobileNavLinks && 
                    !e.target.closest('.nav') && 
                    mobileNavLinks.classList.contains('show')) {
                    menuToggle.classList.remove('active');
                    mobileNavLinks.classList.remove('show');
                }
            });
            
            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    
                    if (targetId === '#') return;
                    
                    const target = document.querySelector(targetId);
                    
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        
                        // Close mobile menu if open
                        if (menuToggle && mobileNavLinks && mobileNavLinks.classList.contains('show')) {
                            menuToggle.classList.remove('active');
                            mobileNavLinks.classList.remove('show');
                        }
                    }
                });
            });
            
            // Toggle scrolled class for header - only if header exists
            const header = document.querySelector('.header');
            if (header) {
                function toggleScrolled() {
                    if (window.scrollY > 50) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                }
                
                window.addEventListener('scroll', toggleScrolled);
                toggleScrolled(); // Initialize
            }
            
            // Modal functionality
            window.openModal = function(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.style.display = 'block';
                }
            };
            
            window.closeModal = function(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.style.display = 'none';
                }
            };
            
            // Close modal when clicking outside
            window.addEventListener('click', function(event) {
                document.querySelectorAll('.modal').forEach(modal => {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                    }
                });
            });
            
        //     // Form submission handling
        //     // const contactForm = document.getElementById('contactForm');
        //     const submitButton = document.getElementById('submit');
        //     const formSuccess = document.getElementById('formSuccess');
        //     const formError = document.getElementById('formError');
        //     // console.log('Form elements:', { contactForm, submitButton, formSuccess, formError });
        //     if (contactForm) {
        //         contactForm.addEventListener('submit', function(event) {
        //             event.preventDefault();
                    
        //             // Show loading state
        //             if (submitButton) {
        //                 submitButton.classList.add('btn-loading');
        //                 submitButton.disabled = true;
        //             }
                    
        //             // Hide any previous messages
        //             if (formSuccess) formSuccess.style.display = 'none';
        //             if (formError) formError.style.display = 'none';
                    
        //             // Get form data
        //             // const formData = new FormData(this);
        //             var kt_datepicker_1 = $('#kt_datepicker_1').val();
        //             var kt_datepicker_2 = $('#kt_datepicker_2').val();
        //             var time = $('#time').val();
        //             var name_en = $('#name_en').val();
        //             var age = $('#age').val();
        //             var qualification = $('#qualification').val();
        //             var job = $('#job').val();
        //             var marital_status = $('#marital_status').val();
        //             var email = $('#email').val();
        //             var phone = $('#phone').val();
        //             var message = $('#message').val();
        //             var formData = {
        //             kt_datepicker_1: kt_datepicker_1,
        //             kt_datepicker_2: kt_datepicker_2,
        //             time: time,
        //             name_en: name_en,
        //             age: age,
        //             qualification: qualification,
        //             job: job,
        //             marital_status: marital_status,
        //             email: email,
        //             phone: phone,
        //             message: message
        //             };

        //             // console.log(formData);
        //             // Submit form data via AJAX
        //             fetch(this.action, {
        //                 method: 'POST',
        //                 headers: {
        //                     'X-CSRF-TOKEN': '{{ csrf_token() }}',
        //                     'X-Requested-With': 'XMLHttpRequest'
        //                 },
        //                 body: formData,
                        
        //             })
        //             .then(response => {
        //                 if (!response.ok) {
        //                     throw new Error('Network response was not ok');
        //                 }
        //                 return response.json();
        //             })
        //             .then(data => {
        //                 // Handle success
        //                 if (formSuccess) {
        //                     formSuccess.textContent = data.message || 'تم إرسال الطلب بنجاح!';
        //                     formSuccess.style.display = 'block';
        //                 }
                        
        //                 // Reset form
        //                 contactForm.reset();
                        
        //                 // Scroll to success message
        //                 if (formSuccess) {
        //                     formSuccess.scrollIntoView({behavior: 'smooth'});
        //                 }
        //             })
        //             .catch(error => {
        //                 // Handle error
        //                 console.error('Error:', error);
        //                 if (formError) {
        //                     formError.textContent = 'حدث خطأ أثناء إرسال الطلب. يرجى المحاولة مرة أخرى.';
        //                     formError.style.display = 'block';
        //                     formError.scrollIntoView({behavior: 'smooth'});
        //                 }
        //             })
        //             .finally(() => {
        //                 // Remove loading state
        //                 if (submitButton) {
        //                     submitButton.classList.remove('btn-loading');
        //                     submitButton.disabled = false;
        //                 }
        //             });
        //         });
        //     }
        });

        // Function to close success modal
        function closeModal() {
            const successModal = document.getElementById('successModal');
            if (successModal) {
                successModal.style.display = 'none';
                location.reload();
            }
        }
    </script>
    <script>
     $("#kt_datepicker_1").flatpickr({
        locale: "ar",
        minDate: new Date(),
        maxDate: new Date().fp_incr(90), // 90 days from today
        
        // enableTime: true ,
        dateFormat: "Y-m-d",
        weekNumbers: false,

        onOpen: function(selectedDates, dateStr, instance) {
            // Apply green background to the calendar container
            instance.calendarContainer.style.backgroundColor = '#FFFFFFFF';
            instance.calendarContainer.style.color = '#030303FF';
            
        },
        onDayCreate: function(dObj, dStr, fp, dayElem) {
            const today = new Date();
            today.setHours(0, 0, 0, 0);

            if (dayElem.dateObj < today) {
                
                dayElem.innerHTML = `<s style="text-decoration-thickness: 2px; text-decoration-color: #EE5363FF">${dayElem.innerHTML}</s>`;
                dayElem.style.color = 'rgb(204, 166, 62)'; // Red for past dates
            } else {
                dayElem.style.color = '#319C6AFF'; // Green for future dates
                
                // dayElem.style.borderRadius = '50%';
            }
        },
        "locale": {
            "firstDayOfWeek": 6 // start week on satarday
        },
        
        onClose: function(selectedDates, dateStr, instance){
            $("#hour_time").val('13:00');
            $("#hour_time").focus();
        }
    });
    


</script>
</body>
</html>