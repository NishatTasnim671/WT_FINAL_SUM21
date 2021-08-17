<?php

include 'admin_header.php';
require_once 'controllers/StudentController.php';
require_once 'controllers/CategoryController.php';
$categories = getAllCategories();
$students = getStudents();



?>
<html>

<head></head>
<h3>All Student</h3>
<table>
    <thead>
        <th>Sl#</th>
        <th>Name</th>
		<th>Category</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($students as $s) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>" . $s["name"] . "</td>";
			 echo "<td>" . $s["ca_name"] . "</td>";
            echo '<td><a href="edit_student.php?id=' . $s["id"] . '">Edit</a></td>';
            echo "<td>Delete</td>";
            echo "</tr>";
            $i++;
        }

        ?>
    </tbody>
</table>
</body>

</html>