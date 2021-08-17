<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: white;
            background-color: black;
            text-align: center;
            padding: 10px;
            margin-left: 50px;
            margin-right: 50px;
        }

        #dashboard {
            margin-left: 190px;
        }


        .button {
            background-color: skyblue;
            border-radius: 20px;
            padding: 5px 7px;
            text-align: center;
        }

        a {
            padding: 10px;

        }
    </style>
</head>

<body>
    <h1>Learn Panda</h1>
    <h1>Admin Panel</h1>

    <table id="dashboard">

        <tr>
            <td>
                <a href="dashboard.php"><input class="button" type="submit" name="submit" value="Dashboard"></a> <br>
            </td>
            <td>
                <a href="allproducts.php"><input class="button" type="submit" name="submit" value="All Instructor"> </a>
            </td>
            <td>
                <a href="addproducts.php"><input class="button" type="submit" name="submit" value="All Student"> </a>
            </td>
            <td>
                <a href="allcourses.php"><input class="button" type="submit" name="submit" value="All Courses"> </a>
            </td>


            <td>
                <a href="add_student.php"><input class="button" type="submit" name="submit" value="Add Student"> </a>
            </td>
            <td>
            <td>
                <a href="add_instructor.php"><input class="button" type="submit" name="submit" value="Add Instructor"> </a>
            </td>
            <td>
                <a href="add_course.php"><input class="button" type="submit" name="submit" value="Add Course"> </a>
            </td>
            <td>
                <a href="refund.php"><input class="button" type="submit" name="submit" value="Refund"> </a>
            </td>
            <td>
                <a href="report.php"><input class=" button" type="submit" name="submit" value="Report"> </a>
            </td>
            <td>
                <a href="feedback.php"><input class="button" type="submit" name="submit" value="Feedback"> </a>
            </td>
            <td>
                <a href="login.php"><input class="button" type="submit" name="submit" value="Log out"> </a>
            </td>

        </tr>


    </table>




</body>

</html>