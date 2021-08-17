<?php
include 'admin_header.php';

include 'controllers/InstructorController.php';
$id = $_GET["id"];
$c = getInstructor($id);
?>
<html>

<head></head>
<h5><?php echo $err_db; ?></h5>

<body>
    <form method="post" action="">
        <fieldset>
            <table>
                <td> <b>Edit Instructor </b></td>
                <tr>
                    <td>Name</td>
                    <td>: <input type="text" name="name" value="<?php echo $c["name"]; ?>"> </td>
                    <td><span> <?php echo $err_name; ?> </span></td>
                </tr>


                <tr>
                    <td colspan="2" align="right"> <input type="submit" name="edit_category" value="Edit instructor"> </td>

                </tr>
            </table>



        </fieldset>
    </form>
</body>

</html>