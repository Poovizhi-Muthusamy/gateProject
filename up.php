<?php 

include("config.php");

if(isset($_POST['submit_details'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $mobileNumber = mysqli_real_escape_string($db, $_POST['mno']);
    $headcount = mysqli_real_escape_string($db, $_POST['PA']);
    $department = mysqli_real_escape_string($db, $_POST['dep']);
    $staffName = mysqli_real_escape_string($db, $_POST['staff']);
    $reason = mysqli_real_escape_string($db, $_POST['reason']);

    // Image Handling
    $target_dir = "profile/";

    $image_parts = explode(";base64,", $_POST['image']);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = $target_dir . uniqid() . '.'.$image_type;
    file_put_contents($file, $image_base64);

    if(empty($name) || empty($mobileNumber) || empty($headcount) || empty($department) || empty($staffName)) {
        echo json_encode(["status" => "error", "message" => "All fields are mandatory"]);
        exit;
    }
    
    $stmt = $db->prepare("INSERT INTO approval (name, mobileNumber, headcount, department, staffName, picture, reason) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $mobileNumber, $headcount, $department, $staffName, $file, $reason);  // <-- Added the 'reason' at the end

    if($stmt->execute()) {
        $id = $db->insert_id;

        $timeResult = $db->query("SELECT TIME(inTime) AS timeOnly FROM approval WHERE id = $id");
        $timeRow = $timeResult->fetch_assoc();
        $storedTime = $timeRow['timeOnly'];

        echo json_encode(["status" => "success", "message" => "Details Updated Successfully", "id" => $id, "inTime" => $storedTime]);
        exit;
    } else {
        echo json_encode(["status" => "error", "message" => "Details Not Updated. Error: " . $stmt->error]);
        exit;
    }
}
?>
