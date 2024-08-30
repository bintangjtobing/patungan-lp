<!DOCTYPE html>
<html dir="ltr" lang="">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9D7F8ZS');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9D7F8ZS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
        function generateToken() {
      return (
        Math.random().toString(36).substring(2, 8) +
        Math.random().toString(36).substring(2, 8)
      );
    }
    const token = generateToken();
    document.addEventListener('DOMContentLoaded', () => {
      const cssLinks = document.querySelectorAll('link[rel="stylesheet"][href$=".css"]');
      cssLinks.forEach((link) => {
        link.href = `${link.href}?v=${token}`;
      });
      const scripts = document.querySelectorAll('script[src$=".js"]');
      scripts.forEach((script) => {
        script.src = `${script.src}?v=${token}`;
      });
    });
    </script>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="PatunganYuk">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800;900&family=Cookie&display=swap"
        rel="stylesheet">
    <link rel="canonical" href="https://patunganyuk.com">

    <!-- Core Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Icons -->
    <link rel="stylesheet" href="css/font-icons.css">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="css/swiper.css">

    <!-- Saas Page Module Specific Stylesheet -->
    <link rel="stylesheet" href="demos/saas-2/saas-2.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords"
        content="PatunganYuk, layanan streaming, berbagi biaya, Netflix, Spotify, Disney+, platform online, hemat uang">
    <title data-i18n="metaTitle">@yield('title')</title>
    <meta name="author" content="Bintang Tobing">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/q_65/v1723832781/cover_wa_tsgukx.png">
    <meta property="og:url" content="https://patunganyuk.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image"
        content="https://res.cloudinary.com/boxity-id/image/upload/q_65/v1723832781/cover_wa_tsgukx.png">
    <link rel="alternate" href="https://patunganyuk.com/?lang=en" hreflang="en">
    <meta name="twitter:site" content="@patunganyukidn">


    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "PatunganYuk!",
      "url": "https://patunganyuk.com",
      "logo": "https://res.cloudinary.com/boxity-id/image/upload/q_65/v1720974567/4_ligzdg.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+62 819 1588 1569",
        "contactType": "customer service"
      }
    }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7WDXGYH5NZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-7WDXGYH5NZ');
    </script>
    <!-- Clarity Microsoft Project -->
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "np2tvu67ll");
    </script>
    <script>
        window.onload = function () {
      document.getElementById("loader").style.display = "none";
      document.getElementById("wrapper").style.display = "block";
    };
    </script>
</head>

<body class="stretched">
    <div id="loader">
        <img src="json/loading.gif" alt="Loading...">
    </div>

    <!-- Document Wrapper
        ============================================= -->
    <div id="wrapper" style="display: none;">

        <!-- Header
            ============================================= -->
        <header id="header">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
                            ============================================= -->
                        <div id="logo" class="col-lg-2 me-lg-auto">
                            <a href="/" class="w-auto">
                                <img class="logo-default"
                                    srcset="https://res.cloudinary.com/boxity-id/image/upload/q_65/v1720974567/4_ligzdg.png, https://res.cloudinary.com/boxity-id/image/upload/q_65/v1720974567/4_ligzdg.png 2x"
                                    src="https://res.cloudinary.com/boxity-id/image/upload/q_65/v1720974567/4_ligzdg.png"
                                    alt="PatunganYuk Identity Logo" title="PatunganYuk Identity Logo"
                                    style="margin-top: 10px; margin-bottom:10px;">
                                <img class="logo-dark"
                                    srcset="https://res.cloudinary.com/boxity-id/image/upload/q_65/v1720974567/2_copy_z3a91z.png, https://res.cloudinary.com/boxity-id/image/upload/q_65/v1720974567/2_copy_z3a91z.png 2x"
                                    src="https://res.cloudinary.com/boxity-id/image/upload/q_65/v1720974567/2_copy_z3a91z.png"
                                    alt="PatunganYuk Identity Logo" title="PatunganYuk Identity Logo"
                                    style="margin-top: 10px; margin-bottom:10px;">
                            </a>
                        </div>

                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <!-- Primary Navigation
                            ============================================= -->
                        <nav class="primary-menu with-arrows">

                            <ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250"
                                data-offset="65">
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-services">
                                        <div>How to</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#services-product">
                                        <div>Products</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-pricing">
                                        <div>Pricing</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-faqs">
                                        <div>FAQs</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/?lang=id" class="menu-link">
                                        <div>ID</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="/?lang=en" class="menu-link">
                                        <div>EN</div>
                                    </a>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>
        @yield('content')
        <footer id="footer" class="bg-white border-0">
            <div class="container">

                <!-- Footer Widgets
                      ============================================= -->
                <div class="footer-widgets-wrap">
                    <div class="row gx-4 gy-5">

                        <div class="col-lg-3 col-6">
                            <div class="widget widget_links widget-li-noicon">
                                <h4 class="fw-bolder text-contrast-1000 text-smaller text-uppercase mb-4">Help & Support
                                </h4>
                                <ul>
                                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/cookies">Cookie Policy</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="widget widget_links widget-li-noicon">
                                <h4 class="fw-bolder text-contrast-1000 text-smaller text-uppercase mb-4">Get Started
                                </h4>
                                <ul>
                                    <li><a
                                            href="https://app.patunganyuk.com/user/register?utm_medium=social&utm_source=website&utm_campaign=promotion&utm_term=getstarted-patunganyuk">Sign
                                            Up</a></li>
                                    <li><a
                                            href="https://app.patunganyuk.com/user/login?utm_medium=social&utm_source=website&utm_campaign=promotion&utm_term=getstarted-patunganyuk">Log
                                            In</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-12 col-12">
                            <div class="widget">
                                <h4 class="fw-bolder text-contrast-1000 text-smaller text-uppercase mb-4">Need Help?
                                </h4>
                                <ul class="list-unstyled">
                                    <li class="mb-3"><a class="text-dark"
                                            href="https://wa.me/6281915881569?utm_medium=social&utm_source=website&utm_campaign=patunganyuk-contact-us&utm_term=contact-patunganyuk"><i
                                                class="me-3 color bi-telephone-fill"></i>+62 819
                                            1588 1569</a></li>
                                    <li class="mb-3"><a class="text-dark" href="mailto:help@patunganyuk.com"><i
                                                class="me-3 color bi-envelope-fill"></i>help@patunganyuk.com</a></li>
                                    <li class="mb-3"><i class="me-3 color bi-calendar-week-fill"></i>Mon - Sat | 08:00 -
                                        23:00</li>
                                    <li><i class="me-3 color bi-calendar-x-fill"></i>Holiday Closed</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- .footer-widgets-wrap end -->
            </div>

            <!-- Copyrights
                  ============================================= -->
            <div id="copyrights" class="bg-transparent border-top op-08">
                <div class="container text-center">

                    Copyrights &copy; 2024 All Rights Reserved by PatunganYuk IDN. Supported by PT. Boxity Central
                    Indonesia.
                    <div class="copyright-links">
                        <a href="https://www.instagram.com/patunganyukidn" target="_blank">
                            <i class="fab fa-instagram"></i> Instagram
                        </a> /
                        <a href="https://www.facebook.com/patunganyukidn" target="_blank">
                            <i class="fab fa-facebook"></i> Facebook
                        </a>
                    </div>


                </div>
            </div>
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
          ============================================= -->
    <div id="gotoTop" class="uil uil-angle-up rounded-circle bg-color h-bg-dark"></div>

    <!-- JavaScripts
          ============================================= -->
    <script src="js/plugins.min.js"></script>
    <script src="js/functions.bundle.js"></script>
    <script>
        window.addEventListener('load', function () {
            var swiperParent = new Swiper('.swiper-testimonial', {
              slidesPerView: 3,
              spaceBetween: 30,
              navigation: {
                prevEl: '.slider-arrow-left',
                nextEl: '.slider-arrow-right'
              },
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
              },
              breakpoints: {
                1: {
                  slidesPerView: 1
                },
                576: {
                  slidesPerView: 1
                },
                768: {
                  slidesPerView: 2
                },
                1200: {
                  slidesPerView: 3
                }
              }
            });

            var SwiperTabsContainer = new Swiper('.swiper-tab-container', {
              loop: true,
              slidesPerView: 1,
              autoHeight: true,
              autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                autoplayDisableOnInteraction: false
              },
              effect: 'fade',
              fadeEffect: {
                crossFade: true
              },
              longSwipes: true,
              autoplayDisableOnInteraction: true,
              on: {
                activeIndexChange: function (swiper) {
                  var index = swiper.realIndex;
                  jQuery('.swiper-tab-link').removeClass('active');
                  jQuery('.swiper-tab-link').eq(index).addClass('active');
                }
              }
            });

            jQuery('.swiper-tab-link').on('click', function () {
              var index = jQuery(this).index();
              SwiperTabsContainer.slideToLoop(index);
              jQuery('.swiper-tab-link').removeClass('active');
              jQuery(this).addClass('active');
            });
          });
    </script>
</body>

</html>