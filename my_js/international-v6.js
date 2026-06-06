  
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('proposalForm3');
                if (!form) return;

                const submitButton = form.querySelector('button[type="submit"]');
                const thankYouMessage = document.createElement('p');
                const checkboxes = form.querySelectorAll('.service-checkbox');
                const budgetField = form.querySelector('#budget-field-3');

                // Style the thank-you message
                thankYouMessage.style.gridColumn = '1 / -1';
                thankYouMessage.style.width = '470px';
                thankYouMessage.style.fontSize = '16px';
                thankYouMessage.style.fontWeight = 'bold';
                thankYouMessage.style.color = 'rgb(0 0 0)';
                thankYouMessage.style.marginTop = '10px';

                // Show/hide budget field if any service is checked
                checkboxes.forEach(cb => {
                    cb.addEventListener('change', () => {
                        const anyChecked = Array.from(checkboxes).some(c => c.checked);
                        budgetField.classList.toggle('hidden', !anyChecked);
                    });
                });

                // On load: check if any box is checked
                if (Array.from(checkboxes).some(c => c.checked)) {
                    budgetField.classList.remove('hidden');
                }

                // Handle form submission
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    const formData = new FormData(form);
                    const data = {};
                    formData.forEach((value, key) => {
                        if (key.endsWith('[]')) {
                            const cleanKey = key.replace('[]', '');
                            if (!data[cleanKey]) data[cleanKey] = [];
                            data[cleanKey].push(value);
                        } else {
                            data[key] = value;
                        }
                    });

                    data.access_key = '9fda5f42-a836-44dd-b6a4-01b16919c2da';

                    submitButton.disabled = true;
                    submitButton.innerText = 'Submitting...';

                    fetch('https://api.web3forms.com/submit', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify(data),
                        })
                        .then(response => {
                            if (!response.ok) throw new Error('Network error');
                            return response.json();
                        })
                        .then(() => {
                            submitButton.innerText = 'Submitted';
                            thankYouMessage.innerText = 'Thank you for your submission! We will get back to you shortly.';
                            form.appendChild(thankYouMessage);
                            form.reset();
                            budgetField.classList.add('hidden');

                            // Reset the form UI after a delay (e.g., 5 seconds)
                            setTimeout(() => {
                                submitButton.disabled = false;
                                submitButton.innerText = 'Get My Free Proposal';
                                if (thankYouMessage.parentNode) {
                                    thankYouMessage.remove();
                                }
                            }, 5000); // 5 seconds
                        })

                        .catch(error => {
                            console.error('Submission failed:', error);
                            submitButton.disabled = false;
                            submitButton.innerText = 'Get My Free Proposal';
                        });
                });
            });
        

            
        function toggleReadMore() {
            const moreText = document.getElementById('info-more-text');
            const btn = document.getElementById('read-toggle');
            const isHidden = moreText.style.display === 'none' || moreText.style.display === '';
            moreText.style.display = isHidden ? 'block' : 'none';
            btn.textContent = isHidden ? 'Read Less' : 'Read More';
        }
    
    
        document.addEventListener("DOMContentLoaded", () => {
            const modal = document.getElementById('global-video-modal');
            const iframe = document.getElementById('global-video-iframe');
            const closeBtn = document.getElementById('global-video-close');

            // Open modal
            document.querySelectorAll('.video-trigger').forEach(trigger => {
                trigger.addEventListener('click', () => {
                    const videoUrl = trigger.dataset.video;
                    if (videoUrl) {
                        iframe.src = videoUrl;
                        modal.style.display = 'flex';
                    }
                });
            });

            // Close modal logic
            function closeModal() {
                modal.style.display = 'none';
                iframe.src = '';
            }

            closeBtn.addEventListener('click', closeModal);

            modal.addEventListener('click', e => {
                if (e.target === modal) closeModal();
            });

            document.addEventListener('keydown', e => {
                if (e.key === 'Escape') closeModal();
            });
        });
    
