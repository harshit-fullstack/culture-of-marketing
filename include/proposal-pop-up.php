<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CULTURE OF MARKETING</title>
    <link rel="stylesheet" href="mycss/style-v6.css">
    <link rel="stylesheet" href="mycss/utility-v6.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <div class="proposal-overlay" id="proposalOverlay">
        <div class="proposal-popup" id="proposalPopup">
            <div class="proposal-header">
                <h2>Get in Touch</h2>
               
                <div class="social-icons">
                <a href=" https://www.facebook.com/profile.php?id=61575455829135" target="_blank" aria-label="facebook" ><i class="fa-brands fa-facebook-f"></i></a>
            <a href=" https://x.com/cultureofMarket" target="_blank" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
            <a href=" https://www.linkedin.com/company/culture-of-marketing/" target="_blank" aria-label="linkedin"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://github.com/cultureofmarketing " target="_blank" aria-label="github"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.reddit.com/r/CultureOfMarketing/" target="_blank" aria-label="reddit"><i class="fa-brands fa-reddit"></i>
            </a>
            <a href=" https://www.behance.net/CultureOfMarketing" target="_blank" aria-label="behance"><i class="fa-brands fa-behance"></i>
              </i></a>
            <a href="https://www.instagram.com/cultureof_marketing/" target="_blank" aria-label="instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            <div class="proposal-form-content">
                <button class="proposal-close-btn" onclick="proposalClose()">×</button>
                <form id="proposalForm" onsubmit="proposalHandleSubmit(event)">
                    <input type="hidden" name="access_key" value="9fda5f42-a836-44dd-b6a4-01b16919c2da">
                    <input type="email" name="email" placeholder="Work Email Address *" aria-label="Email" required />
                    <input type="text" name="name" placeholder="First and Last Name *" aria-label="Name" required />

                    <select name="service" aria-label="service" required>
                        <option value="" disabled selected>Choose a Service</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Website Design & Development">Website Design & Development</option>
                        <option value="Graphic Designing">Graphic Designing</option>
                        <option value="Video Editing">Video Editing</option>
                    </select>

                    <select name="budget" aria-label="budget" required>
                        <option value="" disabled selected>Select Project Budget</option>
                        <option>$0-$500</option>
                        <option>$500–$1,000</option>
                        <option>$1,000–$5,000</option>
                        <option>$5,000-$10,000</option>
                    </select>

                    <textarea name="message" placeholder="Describe your project..." aria-label="textarea"></textarea>
                    <button type="submit" class="submit-proposal-btn">Get My Free Proposal</button>
                </form>
            </div>
        </div>
    </div>

    <script src="my_js\enquiry-v6.js"></script>


</body>


</html>