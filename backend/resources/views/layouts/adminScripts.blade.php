
<script>
document.addEventListener("DOMContentLoaded", function () {
    fetch(window.location.pathname + '/chart-data')
        .then(response => response.json())
        .then(data => {
            if (!data.length) {
                console.warn('No chart data received');
                return;
            }
            
            const labels = data.map(item => item.month);
            const values = data.map(item => item.total);

            const ctx = document.getElementById('donationsChart');
            if (ctx) {
                new Chart(ctx.getContext('2d'), {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Donations ($)',
                            data: values,
                            backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            } else {
                console.error('Chart element not found');
            }
        })
        .catch(error => console.error('Error fetching chart data:', error));

    // Event Form Validation
    const eventForm = document.querySelector('#addEventModal form');
    if (eventForm) {
        eventForm.addEventListener('submit', function (e) {
            const inputs = eventForm.querySelectorAll('input[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Please fill in all required fields');
            }
        });
    }
});
</script>
