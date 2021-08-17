<?php

include 'admin_header.php';
require_once 'controllers/InstructorController.php';

$instructors = getInstructors();



?>
<html>

<head></head>
<h3>All Instructors</h3>
<table>
    <thead>
        <th>Sl#</th>
        <th>Name</th>
		 <th>Email</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($instructors as $i) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>" . $i["name"] . "</td>";
			 echo "<td>" . $i["email"] . "</td>";
            echo '<td><a href="edit_student.php?id=' . $i["id"] . '">Edit</a></td>';
            echo "<td>Delete</td>";
            echo "</tr>";
            $i++;
        }

        ?>
    </tbody>
</table>
</body>

</html>