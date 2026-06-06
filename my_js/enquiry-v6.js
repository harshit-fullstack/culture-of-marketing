document.getElementById("enquiryForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let subject = document.getElementById("subject").value;
    let message = document.getElementById("message").value.trim();

    // Regular expressions for validation
    let namePattern = /^[a-zA-Z\s]{3,}$/; // Only letters, spaces, min 3 characters
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Email format

    // Name validation
    if (!namePattern.test(name)) {
        alert("Please enter a valid name (only letters & at least 3 characters).");
        return;
    }

    // Email validation
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address (e.g., example@domain.com).");
        return;
    }

    // Subject validation
    if (subject === "") {
        alert("Please select a topic.");
        return;
    }

    // Message validation
    if (message.length < 10) {
        alert("Your message should be at least 10 characters long.");
        return;
    }

    // If everything is valid
    alert("Form submitted successfully!");
    document.getElementById("enquiryForm").reset(); // Clear form after submission
});

function proposalOpen() {
    document.getElementById("proposalOverlay").style.display = "flex";
}

function proposalClose() {
    document.getElementById("proposalOverlay").style.display = "none";
}

async function proposalHandleSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const popup = document.getElementById("proposalPopup");

    while (popup.firstChild) popup.removeChild(popup.firstChild);

    const container = document.createElement("div");
    container.style.textAlign = "center";
    container.style.padding = "40px";
    container.innerHTML = `
      <button class="proposal-close-btn" onclick="proposalClose()">×</button>

      <div class="checkmark-circle">
        <div class="checkmark draw"></div>
      </div>
      <div style="font-size: 16px; color: #28a745; margin-top: 20px;">
        ✅ Thank you! We'll be in touch soon.
      </div>
    `;
    popup.appendChild(container);

    const formData = new FormData(form);

    try {
        const response = await fetch('https://api.web3forms.com/submit', {
            method: 'POST',
            body: formData
        });

        if (!response.ok) {
            container.innerHTML = `<div style="font-size:16px; color:#dc3545;">❌ There was an error submitting the form</div>`;
            return;
        }
    } catch (error) {
        container.innerHTML = `<div style="font-size:16px; color:#dc3545;">❌ Something went wrong. Please try again later.</div>`;
    }

    setTimeout(() => {
        proposalClose();
    }, 3000);
}
