<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SWAYAMSEVAK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <style>
        /**
* Template Name: Eterna - v4.10.0
* Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

        /*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }

        a {
            color: #e96b56;
            text-decoration: none;
        }

        a:hover {
            color: #e6573f;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif;
        }

        /*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
        .back-to-top {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            right: 15px;
            bottom: 15px;
            z-index: 996;
            background: #e96b56;
            width: 40px;
            height: 40px;
            border-radius: 4px;
            transition: all 0.4s;
        }

        .back-to-top i {
            font-size: 28px;
            color: #fff;
            line-height: 0;
        }

        .back-to-top:hover {
            background: #ee8b7a;
            color: #fff;
        }

        .back-to-top.active {
            visibility: visible;
            opacity: 1;
        }

        /*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/
        #topbar {
            background: #545454;
            padding: 10px 0;
            font-size: 14px;
        }

        #topbar .contact-info i {
            font-style: normal;
            color: #e96b56;
        }

        #topbar .contact-info i a,
        #topbar .contact-info i span {
            padding-left: 5px;
            color: #fff;
        }

        #topbar .contact-info i a {
            line-height: 0;
            transition: 0.3s;
        }

        #topbar .contact-info i a:hover {
            color: #e96b56;
        }

        #topbar .social-links a {
            color: #bababa;
            line-height: 0;
            transition: 0.3s;
            margin-left: 10px;
        }

        #topbar .social-links a:hover {
            color: white;
        }

        /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
        #header {
            height: 70px;
            transition: all 0.5s;
            z-index: 997;
            transition: all 0.5s;
            background: #fff;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
        }

        #header .logo h1 {
            font-size: 26px;
            padding: 0 0 0 8px;
            margin: 15px 0;
            line-height: 1;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-family: "Poppins", sans-serif;
            border-left: 7px solid orange;
        }

        #header .logo h1 a,
        #header .logo h1 a:hover {
            color: #545454;
            text-decoration: none;
        }

        #header .logo img {
            padding: 0;
            margin: 0;
            max-height: 40px;
        }

        .scrolled-offset {
            margin-top: 70px;
        }

        /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
        /**
* Desktop Navigation
*/
        .navbar {
            padding: 0;
        }

        .navbar ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
            align-items: center;
        }

        .navbar li {
            position: relative;
        }

        .navbar a,
        .navbar a:focus {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0 10px 30px;
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            color: #545454;
            white-space: nowrap;
            transition: 0.3s;
        }

        .navbar a i,
        .navbar a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
        }

        .navbar a:hover,
        .navbar .active,
        .navbar .active:focus,
        .navbar li:hover>a {
            color: #e96b56;
        }

        .navbar .getstarted,
        .navbar .getstarted:focus {
            background: #e96b56;
            padding: 8px 20px;
            margin-left: 30px;
            border-radius: 4px;
            color: #fff;
        }

        .navbar .getstarted:hover,
        .navbar .getstarted:focus:hover {
            color: #fff;
            background: #ec7f6d;
        }

        .navbar .dropdown ul {
            display: block;
            position: absolute;
            left: 24px;
            top: calc(100% + 30px);
            margin: 0;
            padding: 10px 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            background: #fff;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
            transition: 0.3s;
        }

        .navbar .dropdown ul li {
            min-width: 200px;
        }

        .navbar .dropdown ul a {
            padding: 10px 20px;
            font-size: 14px;
            text-transform: none;
            color: #545454;
        }

        .navbar .dropdown ul a i {
            font-size: 12px;
        }

        .navbar .dropdown ul a:hover,
        .navbar .dropdown ul .active:hover,
        .navbar .dropdown ul li:hover>a {
            color: #e96b56;
        }

        .navbar .dropdown:hover>ul {
            opacity: 1;
            top: 100%;
            visibility: visible;
        }

        .navbar .dropdown .dropdown ul {
            top: 0;
            left: calc(100% - 30px);
            visibility: hidden;
        }

        .navbar .dropdown .dropdown:hover>ul {
            opacity: 1;
            top: 0;
            left: 100%;
            visibility: visible;
        }

        @media (max-width: 1366px) {
            .navbar .dropdown .dropdown ul {
                left: -90%;
            }

            .navbar .dropdown .dropdown:hover>ul {
                left: -100%;
            }
        }

        /**
* Mobile Navigation
*/
        .mobile-nav-toggle {
            color: #545454;
            font-size: 28px;
            cursor: pointer;
            display: none;
            line-height: 0;
            transition: 0.5s;
        }

        .mobile-nav-toggle.bi-x {
            color: #fff;
        }

        @media (max-width: 991px) {
            .mobile-nav-toggle {
                display: block;
            }

            .navbar ul {
                display: none;
            }
        }

        .navbar-mobile {
            position: fixed;
            overflow: hidden;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: rgba(59, 59, 59, 0.9);
            transition: 0.3s;
            z-index: 999;
        }

        .navbar-mobile .mobile-nav-toggle {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .navbar-mobile ul {
            display: block;
            position: absolute;
            top: 55px;
            right: 15px;
            bottom: 15px;
            left: 15px;
            padding: 10px 0;
            background-color: #fff;
            overflow-y: auto;
            transition: 0.3s;
        }

        .navbar-mobile a,
        .navbar-mobile a:focus {
            padding: 10px 20px;
            font-size: 15px;
            color: #545454;
        }

        .navbar-mobile a:hover,
        .navbar-mobile .active,
        .navbar-mobile li:hover>a {
            color: #e96b56;
        }

        .navbar-mobile .getstarted,
        .navbar-mobile .getstarted:focus {
            margin: 15px;
        }

        .navbar-mobile .dropdown ul {
            position: static;
            display: none;
            margin: 10px 20px;
            padding: 10px 0;
            z-index: 99;
            opacity: 1;
            visibility: visible;
            background: #fff;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        }

        .navbar-mobile .dropdown ul li {
            min-width: 200px;
        }

        .navbar-mobile .dropdown ul a {
            padding: 10px 20px;
        }

        .navbar-mobile .dropdown ul a i {
            font-size: 12px;
        }

        .navbar-mobile .dropdown ul a:hover,
        .navbar-mobile .dropdown ul .active:hover,
        .navbar-mobile .dropdown ul li:hover>a {
            color: #e96b56;
        }

        .navbar-mobile .dropdown>.dropdown-active {
            display: block;
        }

        /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
        #hero {
            width: 100%;
            height: 70vh;
            background-color: rgba(59, 59, 59, 0.8);
            overflow: hidden;
            padding: 0;
            margin-bottom: -120px;
            position: relative;
            z-index: 1;
        }

        #hero .carousel-item {
            width: 100%;
            height: 70vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-position: center center;
        }

        #hero .carousel-item::before {
            content: "";
            background-color: rgba(255, 255, 255, 0.6);
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
        }

        #hero .carousel-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            padding-bottom: 120px;
        }

        #hero .carousel-content {
            text-align: center;
        }

        #hero h2 {
            color: #2e2e2e;
            margin-bottom: 30px;
            font-size: 48px;
            font-weight: 700;
        }

        #hero h2 span {
            color: #e96b56;
        }

        #hero p {
            width: 80%;
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
            margin: 0 auto 30px auto;
            color: arken(#545454, 15);
        }

        #hero .carousel-inner .carousel-item {
            transition-property: opacity;
            background-position: center top;
        }

        #hero .carousel-inner .carousel-item,
        #hero .carousel-inner .active.carousel-item-start,
        #hero .carousel-inner .active.carousel-item-end {
            opacity: 0;
        }

        #hero .carousel-inner .active,
        #hero .carousel-inner .carousel-item-next.carousel-item-start,
        #hero .carousel-inner .carousel-item-prev.carousel-item-end {
            opacity: 1;
            transition: 0.5s;
        }

        #hero .carousel-inner .carousel-item-next,
        #hero .carousel-inner .carousel-item-prev,
        #hero .carousel-inner .active.carousel-item-start,
        #hero .carousel-inner .active.carousel-item-end {
            left: 0;
            transform: translate3d(0, 0, 0);
        }

        #hero .carousel-control-prev,
        #hero .carousel-control-next {
            width: 10%;
        }

        #hero .carousel-control-next-icon,
        #hero .carousel-control-prev-icon {
            background: none;
            font-size: 48px;
            line-height: 1;
            width: auto;
            height: auto;
            color: #545454;
        }

        #hero .carousel-indicators li {
            cursor: pointer;
            background: #e96b56;
            overflow: hidden;
            border: 0;
            width: 12px;
            height: 12px;
            border-radius: 50px;
            margin-bottom: 180px;
            opacity: 0.2;
        }

        #hero .carousel-indicators li.active {
            opacity: 1;
        }

        #hero .btn-get-started {
            font-family: "Raleway", sans-serif;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 32px;
            border-radius: 50px;
            transition: 0.5s;
            line-height: 1;
            margin: 10px;
            color: #fff;
            -webkit-animation-delay: 0.8s;
            animation-delay: 0.8s;
            border: 2px solid #e96b56;
            background: #e96b56;
        }

        #hero .btn-get-started:hover {
            background: transparent;
            color: #e96b56;
            text-decoration: none;
        }

        @media (max-height: 768px),
        (max-width: 1200px) {
            #hero {
                margin-bottom: 60px;
            }

            #hero .carousel-container {
                padding-bottom: 0;
            }

            #hero .carousel-indicators li {
                margin-bottom: 0;
            }
        }

        @media (max-width: 768px) {
            #hero {
                height: 90vh;
            }

            #hero .carousel-item {
                height: 90vh;
            }
        }

        @media (min-width: 1024px) {
            #hero p {
                width: 50%;
            }

            #hero .carousel-control-prev,
            #hero .carousel-control-next {
                width: 5%;
            }
        }

        /*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
        section {
            padding: 0 0 80px 0;
        }

        .section-bg {
            background-color: white;
        }

        .section-title {
            text-align: center;
            padding-bottom: 30px;
        }

        .section-title h2 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
            font-family: "Poppins", sans-serif;
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            display: block;
            width: 50px;
            height: 5px;
            background: orange;
            bottom: 0;
            left: calc(50% - 25px);
        }

        .section-title p {
            margin-bottom: 0;
        }

        /*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
        .breadcrumbs {
            padding: 20px 0 20px 0;
            background: #f7f7f7;
            border-bottom: 1px solid #ededed;
            margin-bottom: 40px;
        }

        .breadcrumbs h2 {
            font-size: 28px;
            font-weight: 700;
            color: #545454;
        }

        .breadcrumbs ol {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0 0 5px 0;
            margin: 0;
            font-size: 14px;
        }

        .breadcrumbs ol li+li {
            padding-left: 10px;
        }

        .breadcrumbs ol li+li::before {
            display: inline-block;
            padding-right: 10px;
            color: #6e6e6e;
            content: "/";
        }

        /*--------------------------------------------------------------
# Featured
--------------------------------------------------------------*/
        .featured {
            position: relative;
            z-index: 2;
        }

        .featured .icon-box {
            padding: 40px 30px;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            background: #fff;
            transition: all ease-in-out 0.3s;
            height: 100%;
        }

        .featured .icon-box i {
            color: #e96b56;
            font-size: 42px;
            margin-bottom: 15px;
            display: block;
            line-height: 0;
        }

        .featured .icon-box h3 {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 20px;
        }

        .featured .icon-box h3 a {
            color: #545454;
            transition: 0.3s;
        }

        .featured .icon-box p {
            color: #545454;
            line-height: 24px;
            font-size: 14px;
            margin-bottom: 0;
        }

        .featured .icon-box:hover {
            background: #e96b56;
        }

        .featured .icon-box:hover i,
        .featured .icon-box:hover h3 a,
        .featured .icon-box:hover p {
            color: #fff;
        }

        /*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
        .about .content h3 {
            font-weight: 600;
            font-size: 26px;
            color: #545454;
        }

        .about .content ul {
            list-style: none;
            padding: 0;
        }

        .about .content ul li {
            padding-bottom: 10px;
        }

        .about .content ul i {
            font-size: 20px;
            padding-right: 4px;
            color: #e96b56;
        }

        .about .content p:last-child {
            margin-bottom: 0;
        }

        /*--------------------------------------------------------------
# Our Services
--------------------------------------------------------------*/
        .services .icon-box {
            text-align: center;
            border: 1px solid #ededed;
            padding: 80px 20px;
            transition: all ease-in-out 0.3s;
        }

        .services .icon-box .icon {
            margin: 0 auto;
            width: 64px;
            height: 64px;
            background: #e96b56;
            border-radius: 5px;
            transition: all 0.3s ease-out 0s;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            transform-style: preserve-3d;
        }

        .services .icon-box .icon i {
            color: #fff;
            font-size: 28px;
        }

        .services .icon-box .icon::before {
            position: absolute;
            content: "";
            left: -8px;
            top: -8px;
            height: 100%;
            width: 100%;
            background: #fbe2dd;
            border-radius: 5px;
            transition: all 0.3s ease-out 0s;
            transform: translateZ(-1px);
        }

        .services .icon-box h4 {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 24px;
        }

        .services .icon-box h4 a {
            color: #545454;
        }

        .services .icon-box p {
            line-height: 24px;
            font-size: 14px;
            margin-bottom: 0;
        }

        .services .icon-box:hover {
            background: #e96b56;
            border-color: #e96b56;
        }

        .services .icon-box:hover .icon {
            background: #fff;
        }

        .services .icon-box:hover .icon i {
            color: #e96b56;
        }

        .services .icon-box:hover .icon::before {
            background: #ef9383;
        }

        .services .icon-box:hover h4 a,
        .services .icon-box:hover p {
            color: #fff;
        }

        /*--------------------------------------------------------------
# Our Clients
--------------------------------------------------------------*/
        .clients .swiper-pagination {
            margin-top: 20px;
            position: relative;
        }

        .clients .swiper-pagination .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: #fff;
            opacity: 1;
            border: 1px solid #e96b56;
        }

        .clients .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #e96b56;
        }

        .clients .swiper-slide img {
            opacity: 0.5;
            transition: 0.3s;
            filter: grayscale(100);
        }

        .clients .swiper-slide img:hover {
            filter: none;
            opacity: 1;
        }

        /*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/
        .counts .count-box {
            box-shadow: -10px -5px 40px 0 rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
        }

        .counts .count-box i {
            display: block;
            font-size: 30px;
            color: #e96b56;
            float: left;
            line-height: 0;
        }

        .counts .count-box span {
            font-size: 42px;
            line-height: 24px;
            display: block;
            font-weight: 700;
            color: #545454;
            margin-left: 50px;
        }

        .counts .count-box p {
            padding: 30px 0 0 0;
            margin: 0;
            font-family: "Raleway", sans-serif;
            font-size: 14px;
        }

        .counts .count-box a {
            font-weight: 600;
            display: block;
            margin-top: 20px;
            color: #7a7a7a;
            font-size: 15px;
            font-family: "Poppins", sans-serif;
            transition: ease-in-out 0.3s;
        }

        .counts .count-box a:hover {
            color: #a1a1a1;
        }

        /*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
        .testimonials .testimonials-carousel,
        .testimonials .testimonials-slider {
            overflow: hidden;
        }

        .testimonials .testimonial-item {
            box-sizing: content-box;
            padding: 40px;
            box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
            position: relative;
            background: #fff;
        }

        .testimonials .testimonial-item .testimonial-img {
            width: 90px;
            border-radius: 50px;
            border: 6px solid #fff;
            float: left;
            margin: 0 10px 0 0;
        }

        .testimonials .testimonial-item h3 {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0 5px 0;
            color: #111;
        }

        .testimonials .testimonial-item h4 {
            font-size: 14px;
            color: #999;
            margin: 0;
        }

        .testimonials .testimonial-item .quote-icon-left,
        .testimonials .testimonial-item .quote-icon-right {
            color: white;
            font-size: 26px;
        }

        .testimonials .testimonial-item .quote-icon-left {
            display: inline-block;
            left: -5px;
            position: relative;
        }

        .testimonials .testimonial-item .quote-icon-right {
            display: inline-block;
            right: -5px;
            position: relative;
            top: 10px;
        }

        .testimonials .testimonial-item p {
            font-style: italic;
            margin: 15px 0 0 0;
            padding: 0;
        }

        /*--------------------------------------------------------------
# Our Skills
--------------------------------------------------------------*/
        .skills .content h3 {
            font-weight: 700;
            font-size: 26px;
            color: #545454;
            font-family: "Poppins", sans-serif;
            margin-bottom: 20px;
        }

        .skills .content ul {
            list-style: none;
            padding: 0;
        }

        .skills .content ul li {
            padding-bottom: 10px;
        }

        .skills .content ul i {
            font-size: 20px;
            padding-right: 4px;
            color: #e96b56;
        }

        .skills .content p:last-child {
            margin-bottom: 0;
        }

        .skills .progress {
            height: 62px;
            display: block;
            background: none;
            border-radius: 0;
        }

        .skills .progress .skill {
            padding: 0;
            margin: 0 0 6px 0;
            text-transform: uppercase;
            display: block;
            font-weight: 600;
            font-family: "Poppins", sans-serif;
            color: #545454;
        }

        .skills .progress .skill .val {
            float: right;
            font-style: normal;
        }

        .skills .progress-bar-wrap {
            background: #e0e0e0;
        }

        .skills .progress-bar {
            width: 1px;
            height: 10px;
            transition: 0.9s;
            background-color: #e96b56;
        }

        /*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
        .portfolio .portfolio-item {
            margin-bottom: 30px;
        }

        .portfolio #portfolio-flters {
            padding: 0;
            margin: 0 auto 25px auto;
            list-style: none;
            text-align: center;
            background: white;
            border-radius: 50px;
            padding: 2px 15px;
        }

        .portfolio #portfolio-flters li {
            cursor: pointer;
            display: inline-block;
            padding: 8px 20px 12px 20px;
            font-size: 15px;
            font-weight: 500;
            line-height: 1;
            color: #444444;
            margin: 0 4px 8px 4px;
            transition: all ease-in-out 0.3s;
            border-radius: 50px;
            background: #f2f2f2;
        }

        .portfolio #portfolio-flters li:hover,
        .portfolio #portfolio-flters li.filter-active {
            background: #e96b56;
            color: #fff;
        }

        .portfolio #portfolio-flters li:last-child {
            margin-right: 0;
        }

        .portfolio .portfolio-wrap {
            transition: 0.3s;
            position: relative;
            overflow: hidden;
            z-index: 1;
            background: rgba(84, 84, 84, 0.6);
        }

        .portfolio .portfolio-wrap::before {
            content: "";
            background: rgba(84, 84, 84, 0.6);
            position: absolute;
            left: 30px;
            right: 30px;
            top: 30px;
            bottom: 30px;
            transition: all ease-in-out 0.3s;
            z-index: 2;
            opacity: 0;
        }

        .portfolio .portfolio-wrap .portfolio-info {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            text-align: center;
            z-index: 3;
            transition: all ease-in-out 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .portfolio .portfolio-wrap .portfolio-info::before {
            display: block;
            content: "";
            width: 48px;
            height: 48px;
            position: absolute;
            top: 35px;
            left: 35px;
            border-top: 3px solid #fff;
            border-left: 3px solid #fff;
            transition: all 0.5s ease 0s;
            z-index: 9994;
        }

        .portfolio .portfolio-wrap .portfolio-info::after {
            display: block;
            content: "";
            width: 48px;
            height: 48px;
            position: absolute;
            bottom: 35px;
            right: 35px;
            border-bottom: 3px solid #fff;
            border-right: 3px solid #fff;
            transition: all 0.5s ease 0s;
            z-index: 9994;
        }

        .portfolio .portfolio-wrap .portfolio-info h4 {
            font-size: 20px;
            color: #fff;
            font-weight: 600;
        }

        .portfolio .portfolio-wrap .portfolio-info p {
            color: #ffffff;
            font-size: 14px;
            text-transform: uppercase;
            padding: 0;
            margin: 0;
        }

        .portfolio .portfolio-wrap .portfolio-links {
            text-align: center;
            z-index: 4;
        }

        .portfolio .portfolio-wrap .portfolio-links a {
            color: #fff;
            margin: 0 2px;
            font-size: 28px;
            display: inline-block;
            transition: 0.3s;
        }

        .portfolio .portfolio-wrap .portfolio-links a:hover {
            color: #e96b56;
        }

        .portfolio .portfolio-wrap:hover::before {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 1;
        }

        .portfolio .portfolio-wrap:hover .portfolio-info {
            opacity: 1;
        }

        .portfolio .portfolio-wrap:hover .portfolio-info::before {
            top: 15px;
            left: 15px;
        }

        .portfolio .portfolio-wrap:hover .portfolio-info::after {
            bottom: 15px;
            right: 15px;
        }

        /*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
        .portfolio-details {
            padding-top: 40px;
        }

        .portfolio-details .portfolio-details-slider img {
            width: 100%;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination {
            margin-top: 20px;
            position: relative;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: #fff;
            opacity: 1;
            border: 1px solid #e96b56;
        }

        .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #e96b56;
        }

        .portfolio-details .portfolio-info {
            padding: 30px;
            box-shadow: 0px 0 30px rgba(84, 84, 84, 0.08);
        }

        .portfolio-details .portfolio-info h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .portfolio-details .portfolio-info ul {
            list-style: none;
            padding: 0;
            font-size: 15px;
        }

        .portfolio-details .portfolio-info ul li+li {
            margin-top: 10px;
        }

        .portfolio-details .portfolio-description {
            padding-top: 30px;
        }

        .portfolio-details .portfolio-description h2 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .portfolio-details .portfolio-description p {
            padding: 0;
        }

        /*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
        .pricing .row {
            padding-top: 40px;
        }

        .pricing .box {
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0px 0px 30px rgba(73, 78, 92, 0.15);
            background: #fff;
            text-align: center;
        }

        .pricing h3 {
            font-weight: 300;
            margin-bottom: 15px;
            font-size: 28px;
        }

        .pricing h4 {
            font-size: 46px;
            color: #e96b56;
            font-weight: 400;
            font-family: "Open Sans", sans-serif;
            margin-bottom: 25px;
        }

        .pricing h4 span {
            color: #bababa;
            font-size: 18px;
            display: block;
        }

        .pricing ul {
            padding: 0;
            list-style: none;
            color: #999;
            text-align: left;
            line-height: 20px;
        }

        .pricing ul li {
            padding-bottom: 12px;
        }

        .pricing ul i {
            color: #e96b56;
            font-size: 18px;
            padding-right: 4px;
        }

        .pricing ul .na {
            color: #ccc;
        }

        .pricing ul .na i {
            color: #ccc;
        }

        .pricing ul .na span {
            text-decoration: line-through;
        }

        .pricing .buy-btn {
            background: #545454;
            display: inline-block;
            padding: 8px 30px;
            border-radius: 20px;
            color: #fff;
            transition: none;
            font-size: 14px;
            font-weight: 400;
            font-family: "Raleway", sans-serif;
            transition: 0.3s;
        }

        .pricing .buy-btn:hover {
            background: #e96b56;
        }

        .pricing .featured {
            z-index: 10;
            margin: -30px -5px 0 -5px;
        }

        .pricing .featured .buy-btn {
            background: #e96b56;
        }

        .pricing .featured .buy-btn:hover {
            background: #ee8b7a;
        }

        @media (max-width: 992px) {
            .pricing .box {
                max-width: 60%;
                margin: 0 auto 30px auto;
            }
        }

        @media (max-width: 767px) {
            .pricing .box {
                max-width: 80%;
                margin: 0 auto 30px auto;
            }
        }

        @media (max-width: 420px) {
            .pricing .box {
                max-width: 100%;
                margin: 0 auto 30px auto;
            }
        }

        /*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
        .team .member {
            text-align: center;
            margin-bottom: 20px;
            box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
            padding: 30px 20px;
            background: #fff;
        }

        .team .member img {
            max-width: 60%;
            border-radius: 50%;
            margin: 0 0 30px 0;
        }

        .team .member h4 {
            font-weight: 700;
            margin-bottom: 2px;
            font-size: 18px;
        }

        .team .member span {
            font-style: italic;
            display: block;
            font-size: 13px;
        }

        .team .member p {
            padding-top: 10px;
            font-size: 14px;
            font-style: italic;
            color: #aaaaaa;
        }

        .team .member .social {
            margin-top: 15px;
        }

        .team .member .social a {
            color: #919191;
            transition: 0.3s;
        }

        .team .member .social a:hover {
            color: #e96b56;
        }

        .team .member .social i {
            font-size: 18px;
            margin: 0 2px;
        }

        /*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
        .contact .info-box {
            color: #444444;
            text-align: center;
            box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
            padding: 20px 0 30px 0;
        }

        .contact .info-box i {
            font-size: 32px;
            color: #e96b56;
            border-radius: 50%;
            padding: 8px;
            border: 2px dotted #fef5f4;
        }

        .contact .info-box h3 {
            font-size: 20px;
            color: #777777;
            font-weight: 700;
            margin: 10px 0;
        }

        .contact .info-box p {
            padding: 0;
            line-height: 24px;
            font-size: 14px;
            margin-bottom: 0;
        }

        .contact .php-email-form {
            box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
            padding: 30px;
        }

        .contact .php-email-form .validate {
            display: none;
            color: red;
            margin: 0 0 15px 0;
            font-weight: 400;
            font-size: 13px;
        }

        .contact .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #ed3c0d;
            text-align: left;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .error-message br+br {
            margin-top: 25px;
        }

        .contact .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #18d26e;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
        }

        .contact .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #18d26e;
            border-top-color: #eee;
            -webkit-animation: animate-loading 1s linear infinite;
            animation: animate-loading 1s linear infinite;
        }

        .contact .php-email-form input,
        .contact .php-email-form textarea {
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
        }

        .contact .php-email-form input:focus,
        .contact .php-email-form textarea:focus {
            border-color: #e96b56;
        }

        .contact .php-email-form input {
            padding: 10px 15px;
        }

        .contact .php-email-form textarea {
            padding: 12px 15px;
        }

        .contact .php-email-form button[type=submit] {
            background: #e96b56;
            border: 0;
            border-radius: 50px;
            padding: 10px 24px;
            color: #fff;
            transition: 0.4s;
        }

        .contact .php-email-form button[type=submit]:hover {
            background: #e6573f;
        }

        @-webkit-keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
        .blog {
            padding: 40px 0 20px 0;
        }

        .blog .entry {
            padding: 30px;
            margin-bottom: 60px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .blog .entry .entry-img {
            max-height: 440px;
            margin: -30px -30px 20px -30px;
            overflow: hidden;
        }

        .blog .entry .entry-title {
            font-size: 28px;
            font-weight: bold;
            padding: 0;
            margin: 0 0 20px 0;
        }

        .blog .entry .entry-title a {
            color: #545454;
            transition: 0.3s;
        }

        .blog .entry .entry-title a:hover {
            color: #e96b56;
        }

        .blog .entry .entry-meta {
            margin-bottom: 15px;
            color: #bababa;
        }

        .blog .entry .entry-meta ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            align-items: center;
            padding: 0;
            margin: 0;
        }

        .blog .entry .entry-meta ul li+li {
            padding-left: 20px;
        }

        .blog .entry .entry-meta i {
            font-size: 16px;
            margin-right: 8px;
            line-height: 0;
        }

        .blog .entry .entry-meta a {
            color: #777777;
            font-size: 14px;
            display: inline-block;
            line-height: 1;
        }

        .blog .entry .entry-content p {
            line-height: 24px;
        }

        .blog .entry .entry-content .read-more {
            -moz-text-align-last: right;
            text-align-last: right;
        }

        .blog .entry .entry-content .read-more a {
            display: inline-block;
            background: #e96b56;
            color: #fff;
            padding: 6px 20px;
            transition: 0.3s;
            font-size: 14px;
            border-radius: 4px;
        }

        .blog .entry .entry-content .read-more a:hover {
            background: #ec7f6d;
        }

        .blog .entry .entry-content h3 {
            font-size: 22px;
            margin-top: 30px;
            font-weight: bold;
        }

        .blog .entry .entry-content blockquote {
            overflow: hidden;
            background-color: #fafafa;
            padding: 60px;
            position: relative;
            text-align: center;
            margin: 20px 0;
        }

        .blog .entry .entry-content blockquote p {
            color: #444444;
            line-height: 1.6;
            margin-bottom: 0;
            font-style: italic;
            font-weight: 500;
            font-size: 22px;
        }

        .blog .entry .entry-content blockquote::after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background-color: #545454;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .blog .entry .entry-footer {
            padding-top: 10px;
            border-top: 1px solid #e6e6e6;
        }

        .blog .entry .entry-footer i {
            color: #a1a1a1;
            display: inline;
        }

        .blog .entry .entry-footer a {
            color: #616161;
            transition: 0.3s;
        }

        .blog .entry .entry-footer a:hover {
            color: #e96b56;
        }

        .blog .entry .entry-footer .cats {
            list-style: none;
            display: inline;
            padding: 0 20px 0 0;
            font-size: 14px;
        }

        .blog .entry .entry-footer .cats li {
            display: inline-block;
        }

        .blog .entry .entry-footer .tags {
            list-style: none;
            display: inline;
            padding: 0;
            font-size: 14px;
        }

        .blog .entry .entry-footer .tags li {
            display: inline-block;
        }

        .blog .entry .entry-footer .tags li+li::before {
            padding-right: 6px;
            color: #6c757d;
            content: ",";
        }

        .blog .entry .entry-footer .share {
            font-size: 16px;
        }

        .blog .entry .entry-footer .share i {
            padding-left: 5px;
        }

        .blog .entry-single {
            margin-bottom: 30px;
        }

        .blog .blog-author {
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .blog .blog-author img {
            width: 120px;
            margin-right: 20px;
        }

        .blog .blog-author h4 {
            font-weight: 600;
            font-size: 22px;
            margin-bottom: 0px;
            padding: 0;
            color: #545454;
        }

        .blog .blog-author .social-links {
            margin: 0 10px 10px 0;
        }

        .blog .blog-author .social-links a {
            color: rgba(84, 84, 84, 0.5);
            margin-right: 5px;
        }

        .blog .blog-author p {
            font-style: italic;
            color: #b7b7b7;
        }

        .blog .blog-comments {
            margin-bottom: 30px;
        }

        .blog .blog-comments .comments-count {
            font-weight: bold;
        }

        .blog .blog-comments .comment {
            margin-top: 30px;
            position: relative;
        }

        .blog .blog-comments .comment .comment-img {
            margin-right: 14px;
        }

        .blog .blog-comments .comment .comment-img img {
            width: 60px;
        }

        .blog .blog-comments .comment h5 {
            font-size: 16px;
            margin-bottom: 2px;
        }

        .blog .blog-comments .comment h5 a {
            font-weight: bold;
            color: #444444;
            transition: 0.3s;
        }

        .blog .blog-comments .comment h5 a:hover {
            color: #e96b56;
        }

        .blog .blog-comments .comment h5 .reply {
            padding-left: 10px;
            color: #545454;
        }

        .blog .blog-comments .comment h5 .reply i {
            font-size: 20px;
        }

        .blog .blog-comments .comment time {
            display: block;
            font-size: 14px;
            color: #6e6e6e;
            margin-bottom: 5px;
        }

        .blog .blog-comments .comment.comment-reply {
            padding-left: 40px;
        }

        .blog .blog-comments .reply-form {
            margin-top: 30px;
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .blog .blog-comments .reply-form h4 {
            font-weight: bold;
            font-size: 22px;
        }

        .blog .blog-comments .reply-form p {
            font-size: 14px;
        }

        .blog .blog-comments .reply-form input {
            border-radius: 4px;
            padding: 10px 10px;
            font-size: 14px;
        }

        .blog .blog-comments .reply-form input:focus {
            box-shadow: none;
            border-color: #f5bab0;
        }

        .blog .blog-comments .reply-form textarea {
            border-radius: 4px;
            padding: 10px 10px;
            font-size: 14px;
        }

        .blog .blog-comments .reply-form textarea:focus {
            box-shadow: none;
            border-color: #f5bab0;
        }

        .blog .blog-comments .reply-form .form-group {
            margin-bottom: 25px;
        }

        .blog .blog-comments .reply-form .btn-primary {
            border-radius: 4px;
            padding: 10px 20px;
            border: 0;
            background-color: #545454;
        }

        .blog .blog-comments .reply-form .btn-primary:hover {
            background-color: #616161;
        }

        .blog .blog-pagination {
            color: #878787;
        }

        .blog .blog-pagination ul {
            display: flex;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .blog .blog-pagination li {
            margin: 0 5px;
            transition: 0.3s;
        }

        .blog .blog-pagination li a {
            color: #545454;
            padding: 7px 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .blog .blog-pagination li.active,
        .blog .blog-pagination li:hover {
            background: #e96b56;
        }

        .blog .blog-pagination li.active a,
        .blog .blog-pagination li:hover a {
            color: #fff;
        }

        .blog .sidebar {
            padding: 30px;
            margin: 0 0 60px 20px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
        }

        .blog .sidebar .sidebar-title {
            font-size: 20px;
            font-weight: 700;
            padding: 0 0 0 0;
            margin: 0 0 15px 0;
            color: #545454;
            position: relative;
        }

        .blog .sidebar .sidebar-item {
            margin-bottom: 30px;
        }

        .blog .sidebar .search-form form {
            background: #fff;
            border: 1px solid #ddd;
            padding: 3px 10px;
            position: relative;
        }

        .blog .sidebar .search-form form input[type=text] {
            border: 0;
            padding: 4px;
            border-radius: 4px;
            width: calc(100% - 40px);
        }

        .blog .sidebar .search-form form button {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 15px;
            margin: -1px;
            background: #e96b56;
            color: #fff;
            transition: 0.3s;
            border-radius: 0 4px 4px 0;
            line-height: 0;
        }

        .blog .sidebar .search-form form button i {
            line-height: 0;
        }

        .blog .sidebar .search-form form button:hover {
            background: #eb7b68;
        }

        .blog .sidebar .categories ul {
            list-style: none;
            padding: 0;
        }

        .blog .sidebar .categories ul li+li {
            padding-top: 10px;
        }

        .blog .sidebar .categories ul a {
            color: #545454;
            transition: 0.3s;
        }

        .blog .sidebar .categories ul a:hover {
            color: #e96b56;
        }

        .blog .sidebar .categories ul a span {
            padding-left: 5px;
            color: #aaaaaa;
            font-size: 14px;
        }

        .blog .sidebar .recent-posts .post-item+.post-item {
            margin-top: 15px;
        }

        .blog .sidebar .recent-posts img {
            width: 80px;
            float: left;
        }

        .blog .sidebar .recent-posts h4 {
            font-size: 15px;
            margin-left: 95px;
            font-weight: bold;
        }

        .blog .sidebar .recent-posts h4 a {
            color: #545454;
            transition: 0.3s;
        }

        .blog .sidebar .recent-posts h4 a:hover {
            color: #e96b56;
        }

        .blog .sidebar .recent-posts time {
            display: block;
            margin-left: 95px;
            font-style: italic;
            font-size: 14px;
            color: #aaaaaa;
        }

        .blog .sidebar .tags {
            margin-bottom: -10px;
        }

        .blog .sidebar .tags ul {
            list-style: none;
            padding: 0;
        }

        .blog .sidebar .tags ul li {
            display: inline-block;
        }

        .blog .sidebar .tags ul a {
            color: #949494;
            font-size: 14px;
            padding: 6px 14px;
            margin: 0 6px 8px 0;
            border: 1px solid white;
            display: inline-block;
            transition: 0.3s;
        }

        .blog .sidebar .tags ul a:hover {
            color: #fff;
            border: 1px solid #e96b56;
            background: #e96b56;
        }

        .blog .sidebar .tags ul a span {
            padding-left: 5px;
            color: #ededed;
            font-size: 14px;
        }

        /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
        #footer {
            background: #404040;
            padding: 0 0 30px 0;
            color: #fff;
            font-size: 14px;
        }

        #footer .footer-newsletter {
            padding: 50px 0;
            background: #404040;
        }

        #footer .footer-newsletter h4 {
            font-size: 24px;
            margin: 0 0 20px 0;
            padding: 0;
            line-height: 1;
            font-weight: 600;
        }

        #footer .footer-newsletter form {
            margin-top: 30px;
            background: #fff;
            padding: 6px 10px;
            position: relative;
            border-radius: 50px;
        }

        #footer .footer-newsletter form input[type=email] {
            border: 0;
            padding: 8px;
            width: calc(100% - 140px);
        }

        #footer .footer-newsletter form input[type=submit] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 30px;
            margin: 3px;
            background: #e96b56;
            color: #fff;
            transition: 0.3s;
            border-radius: 50px;
        }

        #footer .footer-newsletter form input[type=submit]:hover {
            background: #e6573f;
        }

        #footer .footer-top {
            background: #3b3b3b;
            border-top: 1px solid #474747;
            border-bottom: 1px solid #474747;
            padding: 60px 0 30px 0;
        }

        #footer .footer-top .footer-info {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-info h3 {
            font-size: 18px;
            margin: 0 0 20px 0;
            padding: 2px 0 2px 0;
            line-height: 1;
            font-weight: 700;
        }

        #footer .footer-top .footer-info p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Raleway", sans-serif;
            color: #fff;
        }

        #footer .footer-top .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #545454;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }

        #footer .footer-top .social-links a:hover {
            background: #e96b56;
            color: #fff;
            text-decoration: none;
        }

        #footer .footer-top h4 {
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 12px;
        }

        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #footer .footer-top .footer-links ul i {
            padding-right: 2px;
            color: #ec7f6d;
            font-size: 18px;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        #footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }

        #footer .footer-top .footer-links ul a {
            color: #fff;
            transition: 0.3s;
            display: inline-block;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul a:hover {
            color: #e96b56;
        }

        #footer .footer-top .footer-contact {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-contact p {
            line-height: 26px;
        }

        #footer .copyright {
            text-align: center;
            padding-top: 30px;
        }

        #footer .credits {
            padding-top: 10px;
            text-align: center;
            font-size: 13px;
            color: #fff;
        }
    </style>

    <!-- Favicons -->
    <!-- <link href="assets/img/logo_bg.png" rel="icon"> -->
    <!-- <link href="assets/img/logo_bg.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">



    <link href="{{ asset('js/main.js') }}" rel="stylesheet">

    <!-- Template Main CSS File -->



    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <script src="jQuery-3.6.3.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#swayam").click(function() {
                $("p").slideToggle("slow");
            });
        });





        $(document).ready(function() {
            $("#highlights").click(function() {
                $("p").slideToggle("slow");
            });
        });


        $(document).ready(function() {
            $("#hide").click(function() {
                $("p").hide();
            });
            $("#show").click(function() {
                $("p").show();
            });
        });
    </script>

    </script>
    <style>
        #form {
            background-color: rgb(184, 177, 177);
            width: 33%;
            height: 75%;
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        #input {
            all: unset;
            font: 16px system-ui;
            color: #fff;
            height: 100%;
            width: 100%;
            padding: 6px 10px;
        }

        ::placeholder {
            color: #fff;
            opacity: 0.7;
        }

        #btn_1 {
            background-color: gray;
            display: flex;
            border: none;
        }
    </style>

</head>

<body>


    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center" style="background-color: #545454;">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">

                <a href="#" class="linkedin"><i class="bi bi-youtube fs-5"></i></i></a>&emsp;&emsp;
                <a href="#" class="twitter"><i class="bi bi-twitter fs-6"></i></a> &emsp;&emsp;
                <a href="#" class="facebook"><i class="bi bi-facebook fs-6"></i></a>&emsp;&emsp;
                <a href="#" class="instagram"><i class="bi bi-linkedin fs-6"></i></a>&emsp;&emsp;
            </div>
            <div class="d-none d-md-flex align-items-center">
                <div class="dropdown text-secondary">
                </div>

                <a class="btn" href="/contact" role="button" aria-expanded="false">
                    Contact
                </a>
                <a class="btn" href="/profile" role="button" aria-expanded="false">
                    profile <i class="bi bi-person"></i>
                </a>&emsp;
                <form id="form" role="search">
                    <input type="search" id="input" name="q" placeholder="Search..."
                        aria-label="Search through site content">
                    <button id="btn_1"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1>swayamsewak</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <!--  <li><a class="active" href="index.html">Home</a></li>   -->
                    <li><a href="After_home"><span class="fw-bold fs-6">Home</span></a>


                    <li class="dropdown"><a href="/swayam"><span class="fw-bold fs-6">WHO WE ARE</span></a>
                        <!-- <ul style="background-color: aliceblue;">
          <li><a href="#">About The SWAYAMSEVAK</a></li>
            <li><a href="#">Our History & Archives </a></li>
          </ul> -->
                    </li>

                    <li class="dropdown"><a href="/what_we_do"><span class="fw-bold fs-6">WHAT WE DO</span></a>
                        <!-- <ul style="background-color: aliceblue;">
          <li><a href="what_we_do.html#education">Access to Education</a></li>
            <li><a href="what_we_do.html#education">National Society Development</a></li>
          </ul> -->
                    </li>

                    <!-- <li class="dropdown"><a href="/promises"><span class="fw-bold fs-6">STORE</span></a> -->
                    <!-- <ul style="background-color: aliceblue;">
            <li><a href="promises.html">Adhyayan</a></li>
            <li><a href="promises.html">Jagran</a></li>
          </ul> -->
                    </li>

                    <!--
              <li><a href="about.html" class="fw-bold fs-6">WHO WE ARE</a></li>
              <li><a href="services.html" class="fw-bold fs-6">WHAT WE DO</a></li>
              <li><a href="portfolio.html" class="fw-bold fs-6">OUR PROMISE</a></li>
              -->
                    <li><a href="/programs" class="fw-bold fs-6">PROGRAMS</a></li>
                    <!--
        <li><a href="#" class="fw-bold fs-6">VOLUNTEER</a></li>
        -->
                    <li><a href="/donate"><button type="button" id="donate"
                                class="btn btn-danger fw-bold fs-6">DONATE</button></a></li>


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header -->

    @if(session('change_pass'))
    <div class="alert alert-primary" role="alert">
        {{ session('change_pass') }}
    </div>
@endif


    <center>
        <div class="container mt-4">
            @if (session('status3'))
                <div class="alert alert-success">
                    {{ session('status3') }}
                </div>
            @endif
            <div class="card" style="width: 70%;">
                <div class="card-header text-center font-weight-bold">
                    <h2 style="color: gold; text-shadow: 0 0 5px #FFD700; font-size:xx-large;">Change your password
                    </h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('login-form') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="color: blue; text-shadow: 0 0 5px #FFD700; ">Enter
                                old     password</label>
                            <input type="password"  name="old_password"
                                class="@error('password') is-invalid @enderror form-control">
                            @error('old_password')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1" style="color: blue; text-shadow: 0 0 5px #FFD700; ">New
                                Password</label>
                            <input type="password" id="new_password" name="new_password"
                                class="@error('new_password') is-invalid @enderror form-control">
                            @error('new_password')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="color: blue; text-shadow: 0 0 5px #FFD700; ">Confirm New
                                Password</label>
                            <input type="password" id="new_password" name="confirmnew_password"
                                class="@error('confirmnew_password') is-invalid @enderror form-control">
                            @error('confirmnew_password')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary text-center">Submit</button><br><br>



                    </form>


                </div>
            </div>
        </div>
    </center>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">SWAYAMSEVAK</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Global Plan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Donation</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Press Realese</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Get Involved</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Access to Education</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">National Society Development</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Health & Care</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Disasters, Climate and
                                    Crises</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Young Engagement</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            RK University <br>
                            Rajkot, Gujarat 360020<br>
                            India <br><br>
                            <strong>Phone:</strong> +91 91919 19191<br>
                            <strong>Email:</strong> info@swayamsewak.org<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About Swayamsevak</h3>
                        <p>Swayamsevaks are the volunteers of the Rashtriya Swayamsevak Sangh, a right-wing organisation
                            in India.
                            They are expected to dedicate their time and energy to the organisation and its activities,
                            such as
                            attending weekly shakhas (meetings) and participating in social service activities.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                Copyright &copy; 2023 - <strong><span>SWAYAMSEVAK</span></strong>|| All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </footer><!-- End Footer -->
</body>

</html>
