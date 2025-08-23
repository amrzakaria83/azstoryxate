<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        }
    </style>
</head>
<body>
   
  <main class="container">
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
            display: block !important; /* التأكد من ظهور النموذج */
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
          <div class="stat-number" id="totalReviews">
            @if($data->count())
              {{$data->count()}}
              @else
              0
            @endif
          </div>
          <div class="stat-label">إجمالي التقييمات</div>
        </div>
        <div class="stat-card">
          <div class="stat-number" id="averageRating">
          @if(isset($data))
                @if(($data->sum('rating') / $data->count()) > 3)
                  {{number_format($data->sum('rating') / $data->count(), 1)}}
                @else
              4.4
              @endif
            @endif
          </div>
          <div class="stat-label">متوسط التقييم</div>
        </div>
        <div class="stat-card">
          <div class="stat-number" id="fiveStarCount">
            @if(isset($data))
              {{$data->where('rating', 5)->count()}}
            @endif
          </div>
          <div class="stat-label">5 نجوم</div>
        </div>
      </div>
      @if(isset($data))
      <h1>أحدث 5 تقييمات</h1>
      @foreach($data->slice(0, 5) as $index => $review)
      <div class="review-item" style="animation-delay: ${index * 0.1}s">
              <div class="review-header">
                <div class="reviewer-info">
                  <div class="reviewer-avatar">
                    {{ substr($review->reviewer, 0, 2) }}
                  </div>
                  <div class="reviewer-details">
                    <h4>{{ $review->reviewer }}</h4>
                    <div class="review-date">{{ $review->created_at->format('Y-m-d') }}</div>
                  </div>
                </div>
                <div class="rating-display">
                    @for($i = 1; $i <= 5; $i++)
                        <span class="star {{ $i <= $review->rating ? 'filled' : '' }}">
                            @if($i <= $review->rating)
                                ⭐
                            @else
                                ☆
                            @endif
                        </span>
                    @endfor
                </div>
              </div>
              <div class="review-text">
                {{ $review->comment }}
              </div>
            </div>
            @endforeach
          @endif
    
        <div class="mt-4">
          <a href="{{ route('reviewall') }}" id="viewAllReviews" class="btn btn-success px-4 py-2">
              <i class="fas fa-star me-2"></i>عرض جميع التقييمات
          </a>
      </div>
      <!-- نموذج إضافة تقييم -->
      <div>
        <form id="reviewForm" class="form-container" enctype="multipart/form-data" method="POST" action="{{route('storereview')}}">
          @csrf
          <h3>أضف تقييمك</h3>
          
          <div class="form-group">
            <label for="reviewer">الاسم</label>
            <input type="text" id="reviewer" name="reviewer" placeholder="اكتب اسمك..." required>
          </div>

          <div class="form-group">
            <label for="rating">التقييم</label>
            <select id="rating" name="rating" required>
              <option value="">اختر التقييم</option>
              <option value="5">⭐⭐⭐⭐⭐ ممتاز</option>
              <option value="4">⭐⭐⭐⭐ جيد جداً</option>
              <option value="3">⭐⭐⭐ جيد</option>
              <option value="2">⭐⭐ مقبول</option>
              <option value="1">⭐ ضعيف</option>
            </select>
          </div>

          <div class="form-group">
            <label for="comment">التعليق</label>
            <textarea id="comment" name="comment" rows="4" placeholder="شاركنا رأيك..." required></textarea>
          </div>

          <button type="submit">إرسال التقييم</button>
        </form>
      </div>
      
    </section>
  </main>
  <script>
        // مصفوفة لحفظ التقييمات
        let reviews = [];

        // عناصر DOM
        const reviewsList = document.getElementById('reviewsList');
        const reviewForm = document.getElementById('reviewForm');


        // دالة لإنشاء نجوم التقييم
        function createStars(rating) {
          let stars = '';
          for (let i = 1; i <= 5; i++) {
            stars += `<span class="star ${i <= rating ? 'filled' : ''}">⭐</span>`;
          }
          return stars;
        }

        // دالة لإنشاء الأحرف الأولى للاسم
        function getInitials(name) {
          return name.split(' ').map(word => word.charAt(0)).join('').toUpperCase().substring(0, 2);
        }

        // دالة لتحديث الإحصائيات
        // function updateStats() {
        //   const total = reviews.length;
        //   const average = total > 0 ? (reviews.reduce((sum, review) => sum + review.rating, 0) / total).toFixed(1) : '0.0';
        //   const fiveStars = reviews.filter(review => review.rating === 5).length;

        // }

      </script>
  <script>
    $(document).ready(function() {
      const viewAllReviews = document.getElementById('viewAllReviews');
      viewAllReviews.addEventListener('click', function(e) {
         e.preventDefault();
         
          window.location.href='{{ route('reviewall') }}'
        // هنا يمكنك إضافة أي تأثيرات أو تغييرات عند النقر على زر "عرض جميع التقييمات"
      });
    });
  </script>
</body>
</html>