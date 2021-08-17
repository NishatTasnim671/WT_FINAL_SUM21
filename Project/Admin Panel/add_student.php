<?php
include 'admin_header.php';
require_once 'controllers/StudentController.php';
require_once 'controllers/CategoryController.php';
$categories = getAllCategories();
?>
<html>

<head>



    <script src="js/courses.js"></script>

</head>
<h5><?php echo $err_db; ?></h5>

<body>
    <form action="" onsubmit="return coursevalidate()" method="post">

        <table>
            <td> <b>Add Student </b></td>
            <tr>
                <td>Student's Name:</td>
                <td>: <input type="text" id="name" name="name" value="<?php echo $name; ?>"> </td>
                <td><span id="err_name"> <?php echo $err_name; ?> </span></td>


            </tr>
            <tr>
                <td>Email:</td>
                <td>: <input type="text" id="email" name="email" value="<?php echo $email; ?>"> </td>
                <td><span id="err_email"> <?php echo $err_email; ?> </span></td>
            </tr>
            <tr>
                <td>Course Name:</td>
                <td><select id="ca_id" name="ca_id" value="<?php echo $ca_id; ?>">
                        <option selected disabled>Choose Course</option>
                        <?php
                        foreach ($categories as $ca) {
                            echo "<option value='" . $ca["id"] . "'>" . $ca["name"] . "</option>";
                        }
                        ?>
                    </select>
                </td>
                <td><span id="err_ca_id"> <?php echo $err_ca_id; ?> </span></td>
            </tr>
            <tr>
                <td>Price</td>
                <td>: <input type="text" id="price" name="price" value="<?php echo $price; ?>"> </td>
                <td><span id="err_price"> <?php echo $err_price; ?> </span></td>
            </tr>

            <tr>
                <td colspan="2" align="right"> <input type="submit" name="add_student" value="Add Student"> </td>

            </tr>

        </table>




    </form>
</body>

</html>