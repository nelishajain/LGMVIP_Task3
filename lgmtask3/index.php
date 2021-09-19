<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href='./style.css'/>
    <title>Student Result</title>
</head>
<body>
    <div>
    <h1>Students Result Management System</h1>
    <form action="action_page.php" method="post">
        <div>
            <label for="rollno">Roll Number:</label><br>
            <input type="text" id="rollno" name="rollno"><br><br>    
            <label for="fname">Full Name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="rollno">Mathematics:</label><br>
            <input type="number" id="rollno" name="math"><br><br>
            <label for="rollno">English:</label><br>
            <input type="number" id="rollno" name="english"><br><br>
            <label for="rollno">Science:</label><br>
            <input type="number" id="rollno" name="science"><br><br>
            <label for="rollno">Social Science:</label><br>
            <input type="number" id="rollno" name="social_science"><br><br>
            <label for="rollno">Hindi:</label><br>
            <input type="number" id="rollno" name="hindi"><br><br>
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
            <button class="btn"><a href="http://localhost/lgmtask3/fetch_data.php">Show Results</a></button>
        </div>
    </form>
    </div>
</body>
</html>