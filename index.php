<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information - LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+mv3s5Pq2vL+umfuHR3fSNmKfPPI8jF8Jw6GsoLniyOJbDh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Poppins:wght@500&display=swap" rel="stylesheet"></head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
       <img src="academiq.png" alt="" width="200px" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h6>Enter Student Information</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="display.php">
                            <div class="mb-3">
                                <label for="student_name" class="form-label">Student Name:</label>
                                <input type="text" class="form-control" id="student_name" name="student_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject1" class="form-label">Subject 1:</label>
                                <input type="number" class="form-control" id="subject1" name="subject1" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject2" class="form-label">Subject 2:</label>
                                <input type="number" class="form-control" id="subject2" name="subject2" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject3" class="form-label">Subject 3:</label>
                                <input type="number" class="form-control" id="subject3" name="subject3" required>
                            </div>
                            <button type="submit" class="btn btn-primary submit" name="submit">Submit</button>
                        </form>
                        <?php
                        $showTable = false;
    if (isset($_POST['submit'])) {
        require 'config.php';

        $showTable = true;

        $student_name = $_POST['student_name'];
        $subject1 = $_POST['subject1'];
        $subject2 = $_POST['subject2'];
        $subject3 = $_POST['subject3'];

        // Create a database connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into the database
        $sql = "INSERT INTO students (student_name, subject1, subject2, subject3) VALUES ('$student_name', $subject1, $subject2, $subject3)";

        if ($conn->query($sql) === TRUE) {
            // echo "Record added successfully!";
            echo "<p class='mt-3 text-success'>Data submitted successfully!</p>";

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
