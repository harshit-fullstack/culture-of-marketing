<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Portfolio & Website Design Services | Creative & Responsive Web Design | Culture of Marketing</title>
  <meta name="description" content="Show your work with stunning portfolio and website design services. We create visually appealing, mobile-friendly websites that highlight your brand and engage your audience.">
  <meta name="keywords" content="portfolio website design, web design services, responsive website design">

  <link rel="canonical" href="https://cultureofmarketing.com/Portfolio-and-Personal-website-design">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta property="og:title" content="Portfolio & Website Design Services | Creative & Responsive Web Design | Culture of Marketing">
  <meta property="og:description" content="Show your work with stunning portfolio and website design services. We create visually appealing, mobile-friendly websites that highlight your brand and engage your audience.">
  <meta property="og:url" content="https://cultureofmarketing.com/Portfolio-and-Personal-website-design">
  <meta property="og:site_name" content="Culture of Marketing">
  <meta property="og:image" content="https://cultureofmarketing.com/img/main-logo/culture-of-marketing-C.png">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Portfolio & Website Design Services | Creative & Responsive Web Design | Culture of Marketing">
  <meta name="twitter:description" content="Show your work with stunning portfolio and website design services. We create visually appealing, mobile-friendly websites that highlight your brand and engage your audience.">
  <meta name="twitter:image" content="https://cultureofmarketing.com/img/main-logo/culture-of-marketing-C.png">
  <meta name="twitter:site" content="@cultureofMarket">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="mycss/landingpage-v6.css">
  <link rel="stylesheet" href="mycss/style-v6.css">
  <link rel="stylesheet" href="mycss/utility-v6.css">

  <!-- Favicon -->
  <link rel="icon" href="img/main-logo/culture-of-marketing-C.png" type="image/x-icon">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Services",
            "name": "Portfolio & Website Design Services",
            "description": "Show your work with stunning portfolio and website design services. We create visually appealing, mobile-friendly websites that highlight your brand and engage your audience.",
            "provider": {
                "@type": "Organization",
                "name": "Culture of Marketing",
                "url": "https://cultureofmarketing.com"
            }
        }
    </script>

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" defer></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- AOS Init -->
  <script>
    AOS.init({
      duration: 1000
    });
  </script>
</head>


<body>
  <?php include 'include/header.php'
  ?>
  <?php include 'include/proposal-pop-up.php'?>
  <main class="main">
    <div class="landing-container">
      <div class="landing-content">

        <!-- Left Content -->
        <div class="landing-left">
          <h1 class="landing-heading">Showcase Your Story with a Stunning Personal or Portfolio Website</h1>

          <p class="landing-subtext">
            Whether you're a creative professional, freelancer, or entrepreneur, we build custom websites that highlight your work, personality, and potential.
          </p>

          <ul class="landing-features">
            <li class="landing-feature-item">Unique, Modern Designs Tailored to You</li>
            <li class="landing-feature-item">Mobile-Optimized and Lightning Fast</li>
            <li class="landing-feature-item">Easy-to-Update and Fully SEO-Ready</li>
          </ul>

          <button class="landing-button" onclick="proposalOpen()">REQUEST A QUOTE →</button>

          <div class="landing-awards">
            <div class="landing-award-section">
              <p class="landing-award-title">5-Star Rated by Creative Professionals</p>
              <p class="landing-stars" aria-label="5 out of 5 stars">★★★★★</p>
            </div>

            <div class="landing-divider"></div>

            <div class="landing-award-section">
              <p class="landing-award-title">Award-Winning Personal Website Designers</p>
              <img src="img/company-log0-2/industry-right-logo-left-side-120x18.png.webp"
                alt="Award-Winning Website Design Agency Logo"
                class="landing-award-img">
            </div>
          </div>
        </div>

        <!-- Right Content -->
        <div class="landing-right">
          <img src="img\Website Development\Portfolio & Personal Website Design\7690686_3735546.png" alt="SEO Chart" class="landing-image" />

        </div>

      </div>
    </div>

        <!-- Baner -->
        <div class="com-tech-section">
      <div class="com-tech-inner">
        <h2>Tech Stack That Powers Our E-Commerce Development</h2>
        <p>We leverage the best technologies to create high-performance, scalable e-commerce platforms tailored to your unique business needs and growth goals.</p>

        <div class="com-tabs">
          <div class="com-tab active" data-tab="com-frontend">Frontend</div>
          <div class="com-tab" data-tab="com-backend">Backend</div>
          <div class="com-tab" data-tab="com-database">Database</div>
          <div class="com-tab" data-tab="com-cloud">Cloud</div>
          <div class="com-tab" data-tab="com-osd">Open Sources Development</div>
          <div class="com-tab" data-tab="com-mern">MERN</div>
          <div class="com-tab" data-tab="com-mean">MEAN</div>
          <div class="com-tab" data-tab="com-lamp">LAMP</div>
        </div>

        <div class="com-tab-content active" id="com-frontend">
          <div class="com-icon-item">
            <img src="img\tech-logo\frontend\html.png" alt="html5" loading="lazy">
            <span>HTML5</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\frontend\css.png" alt="css3" loading="lazy">
            <span>CSS3</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\frontend\js.png" alt="javascript" loading="lazy">
            <span>Javascript</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\frontend\angular.png" alt="angular" loading="lazy">
            <span>Angular</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\frontend\react.png" alt="react" loading="lazy">
            <span>React</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\frontend\vue.png" alt="vuej" loading="lazy">
            <span>Vue.js</span>
          </div>
        </div>

        <div class="com-tab-content" id="com-backend">
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\node-js.png" alt="Node.js" loading="lazy"> 
            <span>Node.js</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\express-js.png" alt="Express" loading="lazy">
            <span>Express</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\python.png" alt="python" loading="lazy">
            <span>Python</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\php.png" alt="php" loading="lazy">
            <span>PHP</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\django.png" alt="Django" loading="lazy">
            <span>Django</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\ruby.png" alt="Ruby" loading="lazy">
            <span>Ruby</span>
          </div>
        </div>

        <div class="com-tab-content" id="com-database">
          <div class="com-icon-item">
            <img src="img\tech-logo\database\mongo-db.png" alt="MongoDB" loading="lazy">
            <span>MongoDB</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\database\postgre.png" alt="PostgreSQL" loading="lazy">
            <span>PostgreSQL</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\database\firebase.png" alt="firebase" loading="lazy">
            <span>Firebase</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\database\mysql.png" alt="mySQL" loading="lazy">
            <span>MySQL</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\database\oracle.png" alt="oracle" loading="lazy">
            <span>Oracle</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\database\redis.png" alt="redis" loading="lazy">
            <span>Redis</span>
          </div>
        </div>

        <div class="com-tab-content" id="com-cloud">
          <div class="com-icon-item">
            <img src="img\tech-logo\cloud\aws.png" alt="AWS" loading="lazy">
            <span>AWS</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\cloud\azure.png" alt="Azure" loading="lazy">
            <span>Azure</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\cloud\google-cloud.png" alt="Google Cloud" loading="lazy">
            <span>Google Cloud</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\cloud\kubernets.png" alt="Kubernetes" loading="lazy">
            <span>Kubernetes</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\cloud\ibm-cloud.png" alt="ibm" loading="lazy">
            <span>IBM Cloud</span>
          </div>
        </div>

        <div class="com-tab-content " id="com-osd">
          <div class="com-icon-item">
            <a href="wordpress-website-design-service.php"><img src="img\tech-logo\open-source-dev\wordpress.png" alt="wordpress" loading="lazy">
              <span>Wordpress</span></a>
          </div>
          <div class="com-icon-item">
            <a href="shopify-website-design-service.php"><img src="img\tech-logo\open-source-dev\shopify.png" alt="shopify" loading="lazy">
              <span>Shopify</span></a>
          </div>
          <div class="com-icon-item">
            <a href="joomla-website-design-service.php"><img src="img\tech-logo\open-source-dev\joomla.png" alt="joomla" loading="lazy" >
              <span>Joomla</span></a>
          </div>
          <div class="com-icon-item">
            <a href="drupal-website-design-service.php"><img src="img\tech-logo\open-source-dev\drupal.png" alt="drupal" loading="lazy">
              <span>Drupal</span></a>
          </div>

        </div>

        <div class="com-tab-content " id="com-mern">
          <div class="com-icon-item">
            <img src="img\tech-logo\database\mongo-db.png" alt="MongoDB" loading="lazy">
            <span>MongoDB</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\express-js.png" alt="Express" loading="lazy">
            <span>Express</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\frontend\react.png" alt="react" loading="lazy">
            <span>React</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\node-js.png" alt="Node.js" loading="lazy">
            <span>Node.js</span>
          </div>

        </div>

        <div class="com-tab-content " id="com-mean">
          <div class="com-icon-item">
            <img src="img\tech-logo\database\mongo-db.png" alt="MongoDB" loading="lazy">
            <span>MongoDB</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\express-js.png" alt="Express" loading="lazy">
            <span>Express</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\frontend\angular.png" alt="CSS3" loading="lazy">
            <span>Angular</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\node-js.png" alt="Node.js" loading="lazy"> 
            <span>Node.js</span>
          </div>

        </div>

        <div class="com-tab-content " id="com-lamp">
          <div class="com-icon-item">
            <img src="img\tech-logo\linux.png" alt="linux" loading="lazy">
            <span>Linux</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\apache.png" alt="apache" loading="lazy">
            <span>Apache</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\database\mysql.png" alt="mySQL" loading="lazy">
            <span>MySQL</span>
          </div>
          <div class="com-icon-item">
            <img src="img\tech-logo\backend\php.png" alt="php" loading="lazy"> 
            <span>PHP</span>
          </div>

        </div>
      </div>
    </div>




    <div class="hero-2-container">

      <!-- Left Content -->
      <div class="hero-2-content">
        <div class="hero-2-title">Your personal website in<br><span>5 Steps</span></div>

        <div class="hero-2-step">
          <div class="hero-2-step-number" style="background: #34b3f1;">1</div>
          <div>
            <h3>Plan your presence</h3>
            <p>Define your purpose and pick a style that reflects your personal brand or creative identity.</p>
          </div>
        </div>

        <div class="hero-2-step">
          <div class="hero-2-step-number" style="background: #f88aa4;">2</div>
          <div>
            <h3>Add your work and story</h3>
            <p>Upload your bio, resume, portfolio pieces, or testimonials to highlight your experience and passion.</p>
          </div>
        </div>

        <div class="hero-2-step">
          <div class="hero-2-step-number" style="background: #63c1ff;">3</div>
          <div>
            <h3>Customize with ease</h3>
            <p>Use drag-and-drop tools or work with our designers to make it uniquely yours—no coding needed.</p>
          </div>
        </div>

        <div class="hero-2-step">
          <div class="hero-2-step-number" style="background: #57d59f;">4</div>
          <div>
            <h3>Make it mobile-ready</h3>
            <p>Your website will look great on every device, with fast load times and responsive design.</p>
          </div>
        </div>

        <div class="hero-2-step">
          <div class="hero-2-step-number" style="background: #b174f5;">5</div>
          <div>
            <h3>Launch and share</h3>
            <p>Go live, connect your domain, and start building your personal brand online.</p>
          </div>
        </div>
      </div>

      <!-- Right Image Section -->
      <div class="hero-2-image-section">
        <img src="shopify_mockups.png" alt="Ecommerce Visual"  loading="lazy">
      </div>

    </div>

    <div class="revenue-text-1 fixed-1">
      <h2 class="fixed-font">Build Your Presence With <span class="span-heading">Stunning</span> Personal & Portfolio Websites</h2>
      <p>Showcase your skills, achievements, and brand with a beautifully designed personal or portfolio website. We craft custom, SEO-optimized websites tailored to reflect your identity and goals.</p>
    </div>

    <div class="seo-wrapper">
      <aside class="seo-sidebar">
        <ul id="menu">
          <li class="menu-item-active" data-target="overview">Overview</li>
          <li data-target="audit">Personal Brand Discovery</li>
          <li data-target="keyword">Content Strategy</li>
          <li data-target="link">Social & Media Integration</li>
          <li data-target="onpage">User Experience (UX)</li>
          <li data-target="offpage">Performance Optimization</li>
          <li data-target="technical">Technical Development</li>
          <li data-target="content">Content Management</li>
          <li data-target="e-commerce">Design Customization</li>
          <li data-target="local">Ongoing Support</li>
        </ul>
      </aside>

      <main class="seo-main">
        <section id="overview" class="seo-section section-active">
          <h2><span class="icon">🌐</span> Overview</h2>
          <p>Your personal or portfolio website is your digital home. We design clean, responsive, and fast-loading sites that reflect your professional or creative identity and help you stand out online.</p>
          <div class="video-box">
            <img src="img\Website Development\Portfolio & Personal Website Design\Overview.png" alt="Video Thumbnail" loading="lazy" />
            <!-- <button class="video-play-btn">▶</button> -->
          </div>
          <div class="buttons">
            <button onclick="proposalOpen()" class="button contact-us">Send me Proposal</button>
          </div>
        </section>

        <section id="audit" class="seo-section">
          <h2>Personal Brand Discovery</h2>
          <div class="inner with-img">
            <p>We work closely with you to define your brand voice, tone, and style. Whether you're a designer, consultant, artist, or entrepreneur, we help position your site for impact.</p>
            <ul>
              <li>Personal goal alignment</li>
              <li>Visual identity exploration</li>
              <li>Audience and tone refinement</li>
            </ul>
            <p>We turn your vision into a professional online identity that speaks volumes.</p>
            <div class="buttons">
              <button onclick="proposalOpen()" class="button contact-us">Send me Proposal</button>
            </div>
            <img src="img\Website Development\Portfolio & Personal Website Design\Personal Brand Discovery.jpg" alt="personal brand" class="inner-img" loading="lazy">
          </div>
        </section>

        <section id="keyword" class="seo-section">
          <h2>Content Strategy</h2>
          <div class="inner with-img">
            <p>We craft content that communicates your story effectively. From bios to case studies, your words will work hard to impress and connect.</p>
            <ul>
              <li>Professional bios & storytelling</li>
              <li>Portfolio project presentation</li>
              <li>SEO copywriting support</li>
            </ul>
            <p>Clear, compelling messaging builds trust and authority with your audience.</p>
            <div class="buttons">
              <button onclick="proposalOpen()" class="button contact-us">Send me Proposal </button>
            </div>
            <img src="img\Website Development\Portfolio & Personal Website Design\Content Strategy.jpg" alt="content startegy" class="inner-img" loading="lazy">
          </div>
        </section>

        <section id="link" class="seo-section">
          <h2>Social & Media Integration</h2>
          <div class="inner with-img">
            <p>We seamlessly connect your site to your online presence—social media, blogs, YouTube, Behance, and more.</p>
            <ul>
              <li>Live social media feeds</li>
              <li>Media embeds (video, podcast, etc.)</li>
              <li>Contact & scheduling integrations</li>
            </ul>
            <p>Your audience is everywhere—make it easy for them to find and follow you.</p>
            <div class="buttons">
              <button onclick="proposalOpen()" class="button contact-us">Send me Proposal </button>
            </div>
            <img src="img\Website Development\Portfolio & Personal Website Design\Social & Media Integration.jpg" alt="social media" class="inner-img" loading="lazy">
          </div>
        </section>

        <section id="onpage" class="seo-section">
          <h2>User Experience (UX)</h2>
          <div class="inner with-img">
            <p>We create user-focused designs that are intuitive and elegant. Navigation, structure, and flow are all optimized for clarity and ease.</p>
            <ul>
              <li>Clean, distraction-free layouts</li>
              <li>Responsive mobile design</li>
              <li>Streamlined user journeys</li>
            </ul>
            <p>Visitors should enjoy browsing your website just as much as your work.</p>
            <div class="buttons">
              <button onclick="proposalOpen()" class="button contact-us">Send me Proposal </button>
            </div>
            <img src="img\Website Development\Portfolio & Personal Website Design\User Experience (UX).jpg" alt="ux" class="inner-img" loading="lazy">
          </div>
        </section>

        <section id="offpage" class="seo-section">
          <h2>Performance Optimization</h2>
          <div class="inner with-img">
            <p>No one likes a slow website. We optimize speed and performance to ensure a seamless experience across all devices.</p>
            <ul>
              <li>Fast page load times</li>
              <li>Image optimization & lazy loading</li>
              <li>Core Web Vitals improvements</li>
            </ul>
            <p>Keep users engaged with a site that performs as well as it looks.</p>
            <div class="buttons">
              <button onclick="proposalOpen()" class="button contact-us">Send me Proposal </button>
            </div>
            <img src="img\Website Development\Portfolio & Personal Website Design\Performance Optimization.jpg" alt="" class="inner-img">
          </div>
        </section>

        <section id="technical" class="seo-section">
          <h2>Technical Development</h2>
          <div class="inner with-img">
            <p>From custom builds to CMS setups, we handle the technical side so your site runs smoothly and securely.</p>
            <ul>
              <li>WordPress, Webflow, or custom-coded sites</li>
              <li>Hosting and domain setup</li>
              <li>Secure architecture & SSL configuration</li>
            </ul>
            <p>Focus on your content—we’ll handle the code.</p>
            <div class="buttons">
              <button onclick="proposalOpen()" class="button contact-us">Send me Proposal</button>
            </div>
            <img src="img\Website Development\Portfolio & Personal Website Design\Technical Development.jpg" alt="" class="inner-img" loading="lazy">
          </div>
        </section>

        <section id="content" class="seo-section">
          <h2>Content Management</h2>
          <div class="inner with-img">
            <p>Keep your site fresh and relevant. We implement easy-to-use CMS solutions so you can update content as needed—no coding required.</p>
            <ul>
              <li>CMS training and setup</li>
              <li>Editable blog and portfolio sections</li>
              <li>Content analytics and performance tips</li>
            </ul>
            <p>You're in control of your content—easily and efficiently.</p>
            <div class="buttons">
              <button onclick="proposalOpen()" class="button contact-us">Send me Proposal</button>
            </div>
            <img src="img\Website Development\Portfolio & Personal Website Design\Content Management.jpg" alt="" class="inner-img" loading="lazy">
          </div>
        </section>

        <section id="e-commerce" class="seo-section">
          <h2>Design Customization</h2>
          <div class="inner with-img">
            <p>Your website should reflect your personality and goals. We tailor every design detail to suit your aesthetic and functional needs.</p>
            <ul>
              <li>Color palettes, typography & layout</li>
              <li>Interactive project galleries</li>
              <li>Branded visuals and iconography</li>
            </ul>
            <p>Let your website look and feel like you.</p>
            <div class="buttons">
              <button onclick="proposalOpen()" class="button contact-us">Send me Proposal </button>
            </div>
            <img src="img\Website Development\Portfolio & Personal Website Design\Design Customization.jpg" alt="" class="inner-img" loading="lazy">
          </div>
        </section>

        <section id="local" class="seo-section">
          <h2>Ongoing Support</h2>
          <div class="inner with-img">
            <p>We offer ongoing support and maintenance to keep your site secure, updated, and performing at its best long after launch.</p>
            <ul>
              <li>Technical support and updates</li>
              <li>Content refresh assistance</li>
              <li>Feature enhancements as you grow</li>
            </ul>
            <p>Your website grows with you—and we’re here every step of the way.</p>
            <div class="buttons">
              <button onclick="proposalOpen()" class="button contact-us">Send me Proposal</button>
            </div>
            <img src="img\Website Development\Portfolio & Personal Website Design\Ongoing Support.jpg" alt="" class="inner-img" loading="lazy">
          </div>
        </section>

      </main>
    </div>


    <section class="ecSlider-portfolio">
      <div class="revenue-text-1 fixed-1">
        <h2 class="fixed-font"> <span class="span-heading">Portfolio</span> Development Recent Works</h2>

      </div>

      <div class="ecSlider-container">
        <button class="ecSlider-btn left" onclick="ecSliderMoveSlide(-1)" aria-label="Previous slide">&#10094;</button>

        <div class="ecSlider-wrapper" id="ecSliderSlider">
          <!-- Duplicate last slide for infinite loop -->
          <div class="ecSlider-slide">
            <img src="pngegg.png" alt="Site 3" loading="lazy">
          </div>

          <!-- Original slides -->
          <div class="ecSlider-slide">
            <img src="pngegg.png" alt="eCommerce Website Example" loading="lazy">
          </div>
          <div class="ecSlider-slide">
            <img src="pngegg.png" alt="Site 2" loading="lazy">
          </div>
          <div class="ecSlider-slide">
            <img src="pngegg.png" alt="Site 3" loading="lazy">
          </div>

          <!-- Duplicate first slide for infinite loop -->
          <div class="ecSlider-slide">
            <img src="pngegg.png" alt="eCommerce Website Example" loading="lazy">
          </div>
        </div>

        <button class="ecSlider-btn right" onclick="ecSliderMoveSlide(1)" aria-label="Next slide">&#10095;</button>
      </div>
    </section>
    <!-- technol;ogy -->
    <section class="bg-white py-16 px-4 lg:px-5">
      <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center relative justify-between">
        <!-- Left Content -->
        <div class="p-6">
          <h2 class="text-5xl font-extrabold text-black leading-tight">
            Data-Driven Web Design: <br />
            Creating Impactful Digital Experiences
          </h2>
          <p class="mt-6" style="font-size: 17px; font-weight: 300; color: black;">
            <span class="text-blue-600 font-medium">Culture of Marketing</span> brings a blend of creative design and data insights to craft websites that deliver results, from personal branding to interactive portfolios.
          </p>
          <p class="mt-6" style="font-size: 17px; font-weight: 300; color: black;">
            Our approach ensures that every design decision is guided by user behavior, engagement metrics, and business objectives, resulting in visually stunning and high-performing websites.
          </p>

          <!-- Stats -->
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-8 text-center">
            <div>
              <p class="text-teal-400 text-2xl font-bold">+30%</p>
              <p class="text-sm text-gray-700">INCREASE IN USER ENGAGEMENT</p>
            </div>
            <div>
              <p class="text-teal-400 text-2xl font-bold">100%</p>
              <p class="text-sm text-gray-700">RESPONSIVE DESIGNS ACROSS DEVICES</p>
            </div>
            <div>
              <p class="text-teal-400 text-2xl font-bold">20+</p>
              <p class="text-sm text-gray-700">PORTFOLIOS CREATED</p>
            </div>
          </div>
        </div>

        <!-- Right Card with Arrow -->
        <div class="relative w-full overflow-hidden">
          <div id="cardSlider" class="flex transition-transform duration-500 ease-in-out">

            <!-- Card 1 -->
            <div class="bg-[#03406e] rounded-[2rem] text-white relative shadow-lg min-w-full" style="padding: 4rem;">
              <img src="img\Website Development\Portfolio & Personal Website Design\Performance Optimization.jpg" alt="Personal Website Design" class="rounded-xl w-full h-auto mb-4 border border-white shadow-md" loading="lazy" />
              <h3 class="text-xl font-bold mb-3">Personal Branding Websites</h3>
              <ul class="list-disc ml-5 space-y-2 text-sm text-white/90">
                <li>Custom designs that reflect your unique identity</li>
                <li>Seamless integration of portfolio and blog</li>
                <li>Mobile-friendly layouts that look great everywhere</li>
              </ul>
            </div>

            <!-- Card 2 -->
            <div class="bg-[#03406e] rounded-[2rem] text-white relative shadow-lg min-w-full" style="padding: 4rem;">
              <img src="img\Website Development\Portfolio & Personal Website Design\Technical Development.jpg" alt="UI Design" class="rounded-xl w-full h-auto mb-4 border border-white shadow-md" loading="lazy" />
              <h3 class="text-xl font-bold mb-3">UI/UX Design Optimization</h3>
              <ul class="list-disc ml-5 space-y-2 text-sm text-white/90">
                <li>Intuitive navigation for better user experience</li>
                <li>Visually engaging design to capture attention</li>
                <li>Optimized layouts for increased conversion</li>
              </ul>
            </div>

            <!-- Card 3 -->
            <div class="bg-[#03406e] rounded-[2rem] text-white relative shadow-lg min-w-full" style="padding: 4rem;">
              <img src="img\Website Development\Portfolio & Personal Website Design\Content Management.jpg" alt="SEO-Optimized Designs" class="rounded-xl w-full h-auto mb-4 border border-white shadow-md" loading="lazy" />
              <h3 class="text-xl font-bold mb-3">SEO-Optimized Web Designs</h3>
              <ul class="list-disc ml-5 space-y-2 text-sm text-white/90">
                <li>Search engine-friendly designs for better rankings</li>
                <li>Content structuring and metadata integration</li>
                <li>Speed optimization for improved user experience</li>
              </ul>
            </div>

          </div>

          <!-- Desktop Left Arrow (Single Arrow) -->
          <div class="hidden lg:flex absolute left-0 top-1/2 -translate-y-1/2 z-10">
            <div id="leftArrow" class="w-12 h-12 rounded-full bg-white flex items-center justify-center shadow-lg cursor-pointer m-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#03406e] font-bold rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </div>
        </div>

        <!-- Mobile Arrows -->
        <div class="lg:hidden flex justify-between items-center w-full mt-10 px-10">
          <div id="mobileLeftArrow" class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </div>
          <div id="mobileRightArrow" class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>

      </div>
    </section>





    <section class="global-companies-section ">
      <div class="container">
        <h2 class="fixed-font">Real<span class="span-heading"> Revenue </span> Impact For<span class="span-heading"> Our </span>Clients</h2>
        <div class="testimonial-wrapper" id="testimonial-wrapper">
          <div class="testimonial-track" id="slider">

            <div class="testimonial-item">
              <img src="img/testimonial-img/test-1-info.png" alt="Testimonial 1 Info" class="img" loading="lazy">
              <div class="testimonial-content">
                <div class="testimonial-content-heading">
                  <img src="img/testimonial-img/test-1.jpg" alt="Sarah Johnson" loading="lazy">
                  <h2>Sarah Johnson – <em>Vice President, Marketing at FiComm Partners</em></h2>
                </div>
                <p>"Culture of Marketing completely transformed our online presence. Their team helped us design a comprehensive digital marketing strategy that included SEO optimization, social media management, and targeted ads. I saw a 72% increase in website traffic and a 55% boost in leads within just three months!"</p>
              </div>
            </div>

            <div class="testimonial-item">
              <img src="img/testimonial-img/test-2-info.png" alt="Testimonial 2 Info" class="img" loading="lazy">
              <div class="testimonial-content">
                <div class="testimonial-content-heading">
                  <img src="img/testimonial-img/test-2.jpg" alt="Katherin Cabrera" loading="lazy">
                  <h2>Katherin Cabrera – <em>Realtor</em></h2>
                </div>
                <p>"Culture of Marketing helped me revamp my social media strategy and launch paid advertising campaigns that have brought in more customers than we ever anticipated. Their creative approach helped me gain 85,000+ followers on Instagram."</p>
              </div>
            </div>

            <div class="testimonial-item">
              <img src="img/testimonial-img/test-3-info.png" alt="Testimonial 3 Info" class="img" loading="lazy">
              <div class="testimonial-content">
                <div class="testimonial-content-heading">
                  <img src="img/testimonial-img/test-3.jpg" alt="Kara Goldin" loading="lazy">
                  <h2>Kara Goldin – <em>Founder, CEO, Author of 'Undaunted'</em></h2>
                </div>
                <p>"Working with Culture of Marketing has been a game-changer for my social media presence, particularly on LinkedIn. Their strategic approach helped me grow to 190,000 followers—boosting my brand impact immensely."</p>
              </div>
            </div>

          </div>

          <div class="testimonial-controls">
            <button onclick="prevSlide()" aria-label="Previous Slide">&#10094;</button>
            <button onclick="nextSlide()" aria-label="Next Slide">&#10095;</button>
          </div>
        </div>
        <div class="logos-slider">
        <div class="logos-track">
          <div class="logo-box">
            <img src="img\company-logos\1200px-Wrangler_Logo.webp" alt="Company 1 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\1280px-Northrop_Grumman.webp" alt="Company 2 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\arrowquip_logo_black_vertical.webp" alt="Company 3 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\auntie-annes.webp" alt="Company 4 Logo" loading="lazy"> 
          </div>
          <div class="logo-box">
            <img src="img\company-logos\bars-leaks-logo_03.webp" alt="Company 5 Logo" loading="lazy">
          </div>
          <!-- Repeat logos for smooth scrolling -->
          <div class="logo-box">
            <img src="img\company-logos\Fujifilm_logo.webp" alt="fujifilm" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Hannaford_Brothers_Company-Logo.webp" alt="hannaford" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Hilton-logo.webp" alt="hilton" loading="lazy">
          </div>

          <div class="logo-box">
            <img src="img\company-logos\O_Reilly_Auto_Parts_Logo.webp" alt="Company 5 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Subway-1.webp" alt="Company 1 Logo" loading="lazy"> 
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Verizon_2015_logo_-vector.webp" alt="Company 2 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\YMCA_logo_logotype.webp" alt="Company 3 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\1200px-Wrangler_Logo.webp" alt="Company 1 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\1280px-Northrop_Grumman.webp" alt="Company 2 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\arrowquip_logo_black_vertical.webp" alt="Company 3 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\auntie-annes.webp" alt="Company 4 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\bars-leaks-logo_03.webp" alt="Company 5 Logo" loading="lazy">
          </div>
          <!-- Repeat logos for smooth scrolling -->
          <div class="logo-box">
            <img src="img\company-logos\Fujifilm_logo.webp" alt="fujifilm" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Hannaford_Brothers_Company-Logo.webp" alt="hannaford" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Hilton-logo.webp" alt="hilton" loading="lazy">
          </div>

          <div class="logo-box">
            <img src="img\company-logos\O_Reilly_Auto_Parts_Logo.webp" alt="Company 5 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Subway-1.webp" alt="Company 1 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Verizon_2015_logo_-vector.webp" alt="Company 2 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\YMCA_logo_logotype.webp" alt="Company 3 Logo" loading="lazy" >
          </div>
          <div class="logo-box">
            <img src="img\company-logos\1200px-Wrangler_Logo.webp" alt="Company 1 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\1280px-Northrop_Grumman.webp" alt="Company 2 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\arrowquip_logo_black_vertical.webp" alt="Company 3 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\auntie-annes.webp" alt="Company 4 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\bars-leaks-logo_03.webp" alt="Company 5 Logo" loading="lazy">
          </div>
          <!-- Repeat logos for smooth scrolling -->
          <div class="logo-box">
            <img src="img\company-logos\Fujifilm_logo.webp" alt="fujifilm" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Hannaford_Brothers_Company-Logo.webp" alt="hannaford" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Hilton-logo.webp" alt="hilton" loading="lazy">
          </div>

          <div class="logo-box">
            <img src="img\company-logos\O_Reilly_Auto_Parts_Logo.webp" alt="Company 5 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Subway-1.webp" alt="Company 1 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Verizon_2015_logo_-vector.webp" alt="Company 2 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\YMCA_logo_logotype.webp" alt="Company 3 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\1200px-Wrangler_Logo.webp" alt="Company 1 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\1280px-Northrop_Grumman.webp" alt="Company 2 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\arrowquip_logo_black_vertical.webp" alt="Company 3 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\auntie-annes.webp" alt="Company 4 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\bars-leaks-logo_03.webp" alt="Company 5 Logo" loading="lazy">
          </div>
          <!-- Repeat logos for smooth scrolling -->
          <div class="logo-box">
            <img src="img\company-logos\Fujifilm_logo.webp" alt="fujifilm" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Hannaford_Brothers_Company-Logo.webp" alt="hannaford" loading="lazy" >
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Hilton-logo.webp" alt="Hiltonlogo" loading="lazy">
          </div>

          <div class="logo-box">
            <img src="img\company-logos\O_Reilly_Auto_Parts_Logo.webp" alt="Company 5 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Subway-1.webp" alt="Company 1 Logo" loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\Verizon_2015_logo_-vector.webp" alt="Company 2 Logo"loading="lazy">
          </div>
          <div class="logo-box">
            <img src="img\company-logos\YMCA_logo_logotype.webp" alt="Company 3 Logo" loading="lazy">
          </div>

        </div>
        </div>
      </div>

      <h2 class="fixed-font">Personal Website Design Pricing <br> <span class="span-heading">Tailored</span>
        to your Personal Brand
      </h2>
      <div class="pricing-container">
        <div class="pricing-card">
          <div class="pricing-card-bg">
            <h3>CUSTOM WEBSITE PLANS</h3>
            <p class="price">Starting at <br><span>$1,000</span> /project</p>
          </div>
          <h4>How we determine pricing</h4>
          <div class="pricing-section">
            <div class="icon">🌐</div>
            <div class="text">
              <strong>Platform & Site Complexity</strong>
              <p>Whether you're using WordPress, Squarespace, Wix, or a custom design, we offer solutions tailored to your website’s goals and scalability needs.</p>
            </div>
          </div>
          <div class="pricing-section">
            <div class="icon">🎨</div>
            <div class="text">
              <strong>Custom Design & Features</strong>
              <p>The level of customization — from unique UI/UX design to custom features — impacts overall development cost and timelines.</p>
            </div>
          </div>
          <div class="pricing-section">
            <div class="icon">🚀</div>
            <div class="text">
              <strong>Integration & Launch Support</strong>
              <p>From social media integrations to SEO-ready launches, we ensure your personal website is built for a strong online presence.</p>
            </div>
          </div>
        </div>

        <div class="features-card">
          <h4>INCLUDED IN ALL PLANS:</h4>
          <ul class="features-list">
            <li>✅ Custom mobile-first website design</li>
            <li>✅ Fast, scalable site architecture</li>
            <li>✅ Conversion-optimized contact forms</li>
            <li>✅ Built-in SEO best practices</li>
            <li>✅ Social media integration</li>
            <li>✅ Full platform setup (WordPress, Squarespace, Wix)</li>
            <li>✅ Performance tracking setup</li>
            <li>✅ Ongoing maintenance options available</li>
            <li>✅ Dedicated project manager</li>
            <li>✅ Post-launch training and support</li>
          </ul>
          <div class="buttons">
            <button onclick="proposalOpen()" class="button contact-us">Send me Proposal </button>
          </div>
        </div>
      </div>





    </section>


    <section class="bg-white py-20 overflow-x-hidden">
      <div class="max-w-[800px] mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up" data-aos-delay="200">
          <span class="text-[#349dea]">Got</span> Questions About Web Design & Development?
        </h2>

        <div class="space-y-6">
          <!-- FAQ Item 1 -->
          <div class="faq-item border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
            <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-gray-800 group hover:text-[#0b89e6]">
              <span>What is web design & development?</span>
              <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="faq-content max-h-0 overflow-hidden px-6 text-gray-600 transition-all duration-500 ease-in-out">
              <p class="py-4">
                Web design & development involves the creation and optimization of websites, ensuring they are visually appealing, functional, and user-friendly. This includes designing layouts, integrating interactive elements, and developing the technical components such as coding, hosting, and ensuring mobile responsiveness.
              </p>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="faq-item border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
            <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-gray-800 group hover:text-[#0b89e6]">
              <span>Why should I invest in a personal website?</span>
              <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="faq-content max-h-0 overflow-hidden px-6 text-gray-600 transition-all duration-500 ease-in-out">
              <p class="py-4">
                A personal website allows you to showcase your work, portfolio, skills, and professional accomplishments in a centralized, accessible format. It also enhances your online presence and can serve as a valuable tool for personal branding, networking, and job opportunities.
              </p>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="faq-item border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
            <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-gray-800 group hover:text-[#0b89e6]">
              <span>How do you optimize my personal website for better user experience?</span>
              <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="faq-content max-h-0 overflow-hidden px-6 text-gray-600 transition-all duration-500 ease-in-out">
              <p class="py-4">
                We optimize your website by focusing on the following factors:
                <br><br>
                User Experience (UX): Ensuring intuitive navigation and fast load times.
                <br>
                Responsive Design: Ensuring the site looks great and functions well on all devices.
                <br>
                SEO Best Practices: Helping your site rank better on search engines so it's discoverable.
                <br>
                Personal Branding: Tailoring the design and content to reflect your unique identity.
              </p>
            </div>
          </div>

          <!--FAQ Item 4 -->
          <div class="faq-item border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
            <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-gray-800 group hover:text-[#0b89e6]">
              <span>What platforms do you use for building websites?</span>
              <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="faq-content max-h-0 overflow-hidden px-6 text-gray-600 transition-all duration-500 ease-in-out">
              <p class="py-4">
                We work with various platforms depending on your needs, including:
                <br><br>
                WordPress: A flexible and highly customizable platform for blogs and portfolios.
                <br>
                Squarespace: Ideal for users who want ease of use with beautiful templates.
                <br>
                Wix: A simple platform for small personal sites and portfolios.
                <br>
                -Webflow: Great for custom designs and highly interactive websites.
                <br><br>
                We’ll help you choose the best platform based on your goals, design preferences, and ease of use.
              </p>
            </div>
          </div>

          <!--FAQ Item 5 -->
          <div class="faq-item border border-gray-200 rounded-xl overflow-hidden transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
            <button class="faq-toggle w-full flex justify-between items-center px-6 py-5 text-lg font-medium text-gray-800 group hover:text-[#0b89e6]">
              <span>How long does it take to build a personal website?</span>
              <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="faq-content max-h-0 overflow-hidden px-6 text-gray-600 transition-all duration-500 ease-in-out">
              <p class="py-4">
                The timeline for building a personal website typically ranges from 4 to 8 weeks, depending on the complexity of the design, features, and content you want to include. We'll work with you to define the scope and create a website that truly reflects your personal brand.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>



  </main>




  <?php include 'include/footer.php'
  ?>

  <!-- <script src="my_js\script.js"></script> -->
  <!-- tailwind css -->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
  <script>
    AOS.init();
  </script>
    <script src="my_js\enquiry-v6.js"></script>
    <script src="my_js/digital-marketing-v6.js"></script>


    <script src="my_js\seo-v6.js"></script>


</body>

</html>