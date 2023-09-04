$(document).ready(function() {
    $('#submit-button').click(function(event) {
        event.preventDefault();
        // Read the value using id "username" from the input
        var inputValue = $('#username').val();

        // Check if the input is empty
        if (inputValue.trim() === '') {
            $('#result-message').html('<p>Key in username and click submit.</p>');
            return;
        }

        // If input is not empty, proceed with the AJAX request
         $.ajax({
                type: 'POST',
                url: 'info.php',
                data: { username: inputValue },
                success: function(response) {
                    // Handle the response from info.php here
                    $('#result-message').html('<p>' + response + '</p>');
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the AJAX request using error message
                    $('#result-message').html('<p>' + xhr.responseText + '</p>');
                }
            });
    });
});