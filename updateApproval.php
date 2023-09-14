<?php
include "config.php";

if (isset($_POST['yeah'])) {
    $id = $_POST["id"];
    $query = "UPDATE approval SET exitApproval = 1 WHERE id = '$id'";
    $result = mysqli_query($db, $query);
    if ($result) {
        $res = [
            'status' => 200,
            'message' => 'Hope you had a nice meeting 😃'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Details Not updated, Give relevant input'
        ];
        echo json_encode($res);
        return;
    }
} else {
    $res = [
        'status' => 500,
        'message' => 'If not even entered'
    ];
    echo json_encode($res);
    return;
}
