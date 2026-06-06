document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('proposalForm2');
    const submitButton = form.querySelector('button[type="submit"]'); // Get the submit button
    const thankYouMessage = document.createElement('p'); // Create a new paragraph element for the thank you message

    // Optionally, style the thank you message (you can adjust the styles as needed)
    thankYouMessage.style.gridcolumn = '1 / -1';
    thankYouMessage.style.width = '470px';
    thankYouMessage.style.fontSize = '16px';
    thankYouMessage.style.fontWeight = 'bold';
    thankYouMessage.style.color = 'rgb(0 0 0)'; // black color for the thank you message
    thankYouMessage.style.marginTop = '10px';

    form.addEventListener('submit', function (event) {
        // Prevent the default form submission
        event.preventDefault();

        // Get the form data
        const formData = new FormData(form);

        // Convert FormData to a plain object
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });

        // Add the access key to the data object (make sure it's correct)
        data.access_key = '9fda5f42-a836-44dd-b6a4-01b16919c2da';

        // Change the submit button text to "Submitting..." while the request is being processed
        submitButton.disabled = true; // Disable the button to prevent multiple submissions
        submitButton.innerText = 'Submitting...';

        // Send the data to the Web3Forms API via Fetch
        fetch('https://api.web3forms.com/submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json', // Ensure the server expects JSON
            },
            body: JSON.stringify(data),
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json(); // Assuming the backend returns JSON
            })
            .then(data => {
                // On success, change the submit button text to "Submitted"
                submitButton.innerText = 'Submitted';

                // Add the "Thank You" message below the button
                thankYouMessage.innerText = 'Thank you for your submission! We will get back to you shortly.';
                form.appendChild(thankYouMessage); // Append the message to the form

                // Optionally, clear the form
                form.reset();

                setTimeout(() => {
                    submitButton.disabled = false;
                    submitButton.innerText = 'Get My Free Proposal';
                    if (thankYouMessage.parentNode) {
                        thankYouMessage.remove();
                    }
                }, 5000); // 5 seconds
            })
            .catch(error => {
                // Handle errors
                console.error('There was a problem with the fetch operation:', error);

                // If there's an error, re-enable the button and reset the text
                submitButton.disabled = false;
                submitButton.innerText = 'Get My Free Proposal';
            });
    });
});
