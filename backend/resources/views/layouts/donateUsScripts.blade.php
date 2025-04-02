<script>
    // Form submission handler
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("submitDonation").addEventListener("click", function () {
            const form = document.getElementById("donationForm");

            // Check form validity
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }
            
            // Submit the form to the controller
            form.submit();
        });

        // If there's a success message, display the thank you container
        @if(session('success'))
            document.getElementById("thankYouMessage").style.display = "block";
            document.getElementById("thankYouMessage").scrollIntoView({
                behavior: "smooth",
            });
        @endif
    });
</script>
