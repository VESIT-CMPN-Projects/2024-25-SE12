<script>
    // Form submission handler
    document
      .getElementById("submitDonation")
      .addEventListener("click", function () {
        const form = document.getElementById("donationForm");

        // Check form validity
        if (!form.checkValidity()) {
          form.reportValidity();
          return;
        }
        
        // Here you would normally send the form data to your server
        // using fetch API or another method
        // For example:
        /*
        const formData = new FormData(form);
        fetch('/api/donations', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Handle success
        })
        .catch(error => {
            // Handle error
        });
        */

        // Close the modal
        const modal = bootstrap.Modal.getInstance(
          document.getElementById("donationModal")
        );
        modal.hide();

        // Show thank you message
        document.getElementById("thankYouMessage").style.display =
          "block";

        // Scroll to thank you message
        document.getElementById("thankYouMessage").scrollIntoView({
          behavior: "smooth",
        });

        // Reset the form
        form.reset();
      });
  </script>