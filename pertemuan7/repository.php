<?php
$conn = mysqli_connect("localhost", "root", "password", "kassir_main", "3306");

function runQuery($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}