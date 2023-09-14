
<?php
include_once "config.php";


if (isset($_POST['selectedDate'])) {
    $selectedDate = $_POST['selectedDate'];

    if ($selectedDate === "") {
        $query = "SELECT * FROM approval WHERE DATE(inTime) = CURDATE() ORDER BY id DESC;"; //Need to ask Kalaiarasan Sir,not displaying in desc order
    } else {
        $query = "SELECT * FROM approval WHERE DATE(inTime) = '$selectedDate' ORDER BY id DESC;";
    }

    $query_run = mysqli_query($db, $query);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $student) {
            echo "<tr>";
            echo "<td>" . $student['id'] . "</td>";
            echo "<td>" . $student['department'] . "</td>";
            echo "<td>" . $student['staffName'] . "</td>";
            echo "<td>" . $student['name'] . "</td>";
            echo "<td>" . $student['headcount'] . "</td>";
            echo "<td>" . $student['mobileNumber'] . "</td>";
            echo "<td>" . $student['reason'] . "</td>";
            echo "<td>" . date("h:i A", strtotime($student['inTime'])) . "</td>";
            echo "<td>";
            $outTime = $student['outTime'];
            if ($outTime !== null) {
                echo date("h:i A", strtotime($outTime));
            } else {
                echo "Active";
            }
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='9'>No visitors found for the selected date.</td></tr>";
    }
} else {
    echo "<tr><td colspan='9'>Invalid request.</td></tr>";
}
?>
