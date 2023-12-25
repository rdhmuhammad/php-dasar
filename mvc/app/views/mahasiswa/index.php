<?php
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach ($data["mhs"] as $msh) : ?>
                <ul>
                    <li><?= $msh["nama"] ?> </li>
                    <li><?= $msh["npm"] ?> </li>
                    <li><?= $msh["email"] ?> </li>
                    <li><?= $msh["jurusan"] ?> </li>
                </ul>
            <?php endforeach; ?>

        </div>
    </div>
</div>
