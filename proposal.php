<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request a Proposal | Culture of Marketing</title>
<meta name="description" content="Fill out our proposal form to get a custom quote tailored to your business goals. Culture of Marketing offers personalized digital marketing, web design, and social media solutions.">
<meta name="keywords" content="digital marketing proposal, request a quote, custom marketing plan, web design proposal, social media strategy">


  <link rel=" icon" href="img/main-logo/culture-of-marketing-C.png" type="image/x-icon">
  <link rel="stylesheet" href="mycss/style-v6.css">
  <link rel="stylesheet" href="mycss/utility-v6.css">

        <link rel="canonical" href="https://cultureofmarketing.com/proposal">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Request a Proposal | Culture of Marketing">
    <meta property="og:description" content="Fill out our proposal form to get a custom quote tailored to your business goals. Culture of Marketing offers personalized digital marketing, web design, and social media solutions.">
    <meta property="og:image" content="https://cultureofmarketing.com/img/main-logo/culture-of-marketing-C.png">
    <meta property="og:url" content="https://cultureofmarketing.com/proposal">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Culture of Marketing">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Request a Proposal | Culture of Marketing">
    <meta name="twitter:description" content="Fill out our proposal form to get a custom quote tailored to your business goals. Culture of Marketing offers personalized digital marketing, web design, and social media solutions.">
    <meta name="twitter:image" content="https://cultureofmarketing.com/img/main-logo/culture-of-marketing-C.png">
    <meta name="twitter:site" content="@cultureofMarket">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Services",
            "name": "Request a Proposal | Culture of Marketing",
            "description": "Fill out our proposal form to get a custom quote tailored to your business goals. Culture of Marketing offers personalized digital marketing, web design, and social media solutions.",
            "provider": {
                "@type": "Organization",
                "name": "Culture of Marketing",
                "url": "https://cultureofmarketing.com"
            }
        }
    </script>



  <script src="https://code.jquery.com/jquery-3.7.1.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <?php include 'include/header.php'
  ?>

  <div class="enquiry-container">
    <!-- Form Section -->
    <div class="form-section">
      <h2 class="form-heading">Request a FREE Proposal Now!</h2>
      <form class="form-grid" id="proposalForm2">
        <input type="hidden" name="access_key" value="9fda5f42-a836-44dd-b6a4-01b16919c2da" >
        <input name="email" type="email" class="form-field" aria-label="email" placeholder="Work Email Address *" required />
        <input name="name" type="text" class="form-field" aria-label="text" placeholder="First and Last Name *" required />
        <select name="service" class="form-field" aria-label="services" required>
          <option value="" disabled selected>Choose a Service</option>
          <option value="Digital Marketing">Digital Marketing</option>
          <option value="Website Design & Development">Website Design & Development</option>
          <option value="Graphic Designing">Graphic Designing</option>
          <option value="Video Editing">Video Editing</option>
        </select>

        <select name="budget" class="form-field" aria-label="budgets" required>
          <option value="" disabled selected>Select Project Budget</option>
          <option>$0-$500</option>
          <option>$500–$1,000</option>
          <option>$1,000–$5,000</option>
          <option>$5,000-$10,000</option>
        </select>

        <textarea name="message" class="form-fullwidth" rows="4" placeholder="Comments or Questions" aria-label="messages"  required></textarea>

        <button type="submit" class="form-submit">Get My Free Proposal</button>
      </form>
    </div>

    <!-- Image Section -->
    <div class="image-section">
      <img src="img/testimonial-img/test-1-info.png" alt="Background" class="image-full" loading="lazy">
    </div>
  </div>


  <?php include 'include/footer.php'
  ?>
  <script src="my_js\enquiry-page-v6.js"></script>

</body>

</html>