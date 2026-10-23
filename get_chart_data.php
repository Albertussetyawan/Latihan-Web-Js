
<?php
require_once "db.php";

header("Content-Type: application/json; charset=UTF-8");

$sql = "SELECT label_data, nilai FROM chart_data ORDER BY id ASC";
$result = $conn->query($sql);

$data = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            "label" => $row["label_data"],
            "nilai" => (float) $row["nilai"]
        ];
    }
}

echo json_encode($data);

$conn->close();
?>
