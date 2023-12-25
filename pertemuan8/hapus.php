<?php

require "repository.php";
global $conn;
$id = $_GET["id"];

$result = runQuery("delete from kassir_branches where id=".$id);
if ($result || mysqli_affected_rows($conn)>0){
    echo "           
            <script>
                alert('data berasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
}