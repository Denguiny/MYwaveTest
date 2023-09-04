<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submit Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                margin: 0;
                padding: 0;
            }
            #submit-button {
                background-color: green;
                color: white;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
                float: left;
                margin-left: 160px;
            }

            #result-message {
                color: green;
                float: left;
                margin-left: 20px;
            }
        </style>
    </head>
    <body>
        <h1>Submit Form</h1>
        <form method="POST" action="html.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <br><br>
            <button type="submit" id="submit-button">Submit</button>
            <br><br>
            <div id="result-message"></div>

        </form>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="verify_ajax.js"></script>
    </body>
</html>