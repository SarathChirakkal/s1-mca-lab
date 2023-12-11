<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <center>
        <form action="marksadded.php" method="post">
            <table border="2px" width="600px">
                <tr rowspan="2">
                    <td colspan="2">
                        <h3>
                            <center>MARKS</center>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td>KTU ID</td>
                    <td>
                        <select name="ktuid">
                            <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'login');
                            $q = "SELECT ktuid FROM registration";
                            $p = mysqli_query($conn, $q);
                            if (mysqli_num_rows($p)) {
                                while ($row = mysqli_fetch_assoc($p)) {
                                    echo "<option>" . $row['ktuid'] . "<br></option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>
                        <select name="semester">
                            <option>SELECT</option>
                            <?php
                            for ($i = 1; $i < 7; $i++) {
                                echo "<option>" . $i . "</option>";
                            }
                            ?>
                    </td>
                </tr>

                <tr>
                    <td>Subject</td>
                    <td>
                        <select name="subject">
                            <option value="">Select</option>
                            <?php
                            $q1 = "SELECT subject FROM subjects";
                            $p1 = mysqli_query($conn, $q1);
                            if (mysqli_num_rows($p1)) {
                                while ($row = mysqli_fetch_assoc($p1)) {
                                    echo "<option>" . $row['subject'] . "<br></option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>SCORES</td>
                    <td>
                        FIRST SERIES &nbsp;&nbsp;&nbsp;&nbsp; <input type='text' name='series1'><br>
                        SECOND SERIES <input type='text' name='series2'><br>
                        ASSIGNMENT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='assignment'><br>
                        ATTENDANCE &nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='attendance'><br>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <center>
                            <input type='submit' value='ADD MARK' name='submit'>
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>