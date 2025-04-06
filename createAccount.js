document.getElementById('create-account-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Collect form data
    const formData = new FormData(event.target);

    // Convert form data into an object
    const accountData = {};
    formData.forEach((value, key) => {
        accountData[key] = value;
    });

    // Send data to PHP (example using fetch API)
    fetch('create.php', {
        method: 'POST',
        body: JSON.stringify(accountData),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Account created successfully!');
            window.location.href = 'login.html';  // Redirect to login page
        } else {
            alert('Error creating account!');
        }
    })
    .catch(error => {
        console.error('Error creating account:', error);
    });
});
