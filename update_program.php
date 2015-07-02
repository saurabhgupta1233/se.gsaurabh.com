<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15-06-2015
 * Time: 16:40
 */
?>
<html>
<head lang="en">
    <script>
        function cancelAction() {
            var cancel=confirm("Are you sure you want to cancel?")
            if (cancel==true)
            {
                history.back(1);
            }
            else
            {
                <!--  nothing happens-->
            }
        }
    </script>
    <meta charset="UTF-8">
    <title>
        <b>
            Update Program
        </b>
    </title>

</head>
<body id="body-color">
<form method="POST" action="update_Program_db.php">
    <div id="Update a existing program">
        Select the program to be updated
        <td class="dropdown">
            <select class="dropdown-menu" name="dd_program_name">
                <?php
                require "db/db.php";
                $sql = "SELECT program_name FROM program";
                $result = db($sql);
                while ($row = $result->fetch_assoc())
                {
                    $program_name = $row['program_name'];
                    echo '<option name ="'. $program_name .'">'. $program_name .'</option>';
                }
                ?>
            </select>
            <br>

        <td>
            New Program Name <br>
            <input type="text" name="txt_program_name" size="40"><br>
            <input id="add_button" type="submit" name="submit" value="Update">
            <input id="cancel_button" type="submit" name="cancel" value="Cancel" onClick='cancelAction();'>
        </td>
    </div>
</form>
</body>
</html>