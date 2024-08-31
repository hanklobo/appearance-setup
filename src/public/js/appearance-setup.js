document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const inputs = document.querySelectorAll('input, select, textarea');
    const previewButton = document.querySelector('.preview-button');

    inputs.forEach(input => {
        input.addEventListener('change', updatePreview);
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        saveSettings();
    });

    previewButton.addEventListener('click', showPreview);

    function updatePreview() {
        // Update preview elements based on input values
    }

    function saveSettings() {
        const formData = new FormData(form);
        fetch('/setup', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.errors) {
                // Display errors
            } else {
                // Show success message
            }
        });
    }

    function showPreview() {
        // Open a new window or modal with the preview
    }
});