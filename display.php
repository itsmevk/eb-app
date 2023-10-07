<!-- display.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submitted!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+mv3s5Pq2vL+umfuHR3fSNmKfPPI8jF8Jw6GsoLniyOJbDh" crossorigin="anonymous">
    <style>
        /* Custom CSS for styling */
        body {
            background-color: #f7f7f7;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand {
            font-size: 28px;
            font-weight: bold;
            color: #007bff;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .back{
            margin-top: 1.5rem;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">ABC University</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Your existing HTML content for the header here -->

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h6>Student Details</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Subject 1</th>
                            <th>Subject 2</th>
                            <th>Subject 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['submit'])) {
                            // Retrieve form data
                            $studentName = $_POST['student_name'];
                            $subject1 = intval($_POST['subject1']);
                            $subject2 = intval($_POST['subject2']);
                            $subject3 = intval($_POST['subject3']);

                            // Display the entered data in the table row
                            echo "<tr>";
                            echo "<td>$studentName</td>";
                            echo "<td>$subject1</td>";
                            echo "<td>$subject2</td>";
                            echo "<td>$subject3</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center">
                    <a href="index.php" class="btn btn-primary back">Back to Form</a>
                </div>
    </div>
</body>
</html>
