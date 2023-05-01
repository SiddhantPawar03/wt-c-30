<!DOCTYPE html>
<html>
<head>
    <title>Student Results</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>
    <h1>Student Results</h1>
    <form id="resultForm">
        <label for="student_id">PR Number ID:</label>
        <input type="text" id="student_id" name="student_id"><br><br>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        
        
        
        <label for="mse_marks">Compiler Design MSE Marks:</label>
        <input type="text" id="mse_marks1" name="mse_marks1"><br><br>

        <label for="mse_marks">Web Technology MSE Marks:</label>
        <input type="text" id="mse_marks2" name="mse_marks2"><br><br>

        <label for="mse_marks">Design and Analysis of Algorithms MSE Marks:</label>
        <input type="text" id="mse_marks3" name="mse_marks3"><br><br>

        <label for="mse_marks">Cloud Coumputing MSE Marks:</label>
        <input type="text" id="mse_marks4" name="mse_marks4"><br><br>
        
        <label for="mse_marks">Compiler Design ESE Marks:</label>
        <input type="text" id="ese_marks1" name="ese_marks1"><br><br>

        <label for="mse_marks">Web Technology ESE Marks:</label>
        <input type="text" id="ese_marks2" name="ese_marks2"><br><br>

        <label for="mse_marks">Design and Analysis of Algorithms ESE Marks:</label>
        <input type="text" id="ese_marks3" name="ese_marks3"><br><br>

        <label for="mse_marks">Cloud Coumputing ESE Marks:</label>
        <input type="text" id="ese_marks4" name="ese_marks4"><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $('#resultForm').submit(function(event) {
                // Stop the form from submitting normally
                event.preventDefault();

                // Get the form data
                var formData = $(this).serialize();

                // Send the data to the server using AJAX
                $.ajax({
                    type: 'POST',
                    url: 'postResults.php',
                    data: formData,
                    success: function(response) {
                        alert(response);
                    },
                    error: function() {
                        alert('Error: Unable to submit results.');
                    }
                });
            });
        });
    </script>
</body>
</html>
