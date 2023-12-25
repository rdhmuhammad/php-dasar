<?php
/*
 * File handling
 * using <input type="file"/>
 * attribute form which is enctype ( encoding type )
 * superglobals ( $_FILES)
 * move_uploaded_file ( which move file on computer to server )
 * BLOP (Binary large object ) datatype
 */

function uploadFile($files)
{
    if (count($files) < 6) {
        // using echo script alert will wipe out entire html
        echo "
            <script>
            alert('tipe data tidak mendukung');
            </script>
        ";
        return false;
    }
    if ($files["error"] == 4) {
        echo "
            <script>
            alert('pilih gambar terlebih dahulu');
            </script>
        ";
        return false;
    }
    $fileInfo = explode(".", $files["name"]);

    $newPath = "./resource/".$fileInfo[0].time().".".$fileInfo[1];
    // move_uploaded_file had behavior that it will replace the file if its already exist on destination.
    if (!move_uploaded_file($files["tmp_name"], $newPath)){
        echo "
            <script>
            alert('terdapat error dalam upload gambar');
            </script>
        ";
        return false;
    }
    return $newPath;
}

/*
 * Session
 * - mekanisme penyimpanan informasi ke variable agar bisa digunakan diseluruh system.
 */
// Using $_SESSION
/*
 * to add data to session, run session_start() and begin of logic.
 * session act like cache, that store data to disk memory of server.
 */

function getUserSession(){
    session_start();
    if (isset($_COOKIE["login"])){
        $_SESSION["user"] = ["active"=>true];
    }

    $userSession = $_SESSION["user"];
    if (!$userSession["active"]){
        header("Location: login.php");
        exit;
    }
}

/*
 * Cookie
 * informasi yang di simpan di client/browser;
 * - setCookie();
 * then data will store to $_COOKIE
 */

/*
 * AJAX (Asynchronous Javascript And XML)
 * request using XMLHttpRequest();
 */