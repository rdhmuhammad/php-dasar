<!DOCTYPE html>
<html>
<head>
    <title>latihan 1</title>
    <style>
        .warna-baris {
            background-color: antiquewhite;
        }
    </style>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>1,1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td>1,4</td>
        <td>1,5</td>
        <td>1,6</td>
    </tr>
    <tr>
        <td>2,1</td>
        <td>2,2</td>
        <td>2,3</td>
        <td>2,4</td>
        <td>2,5</td>
        <td>2,6</td>
    </tr>
</table>
<table border="1" cellpadding="10" cellspacing="0">
    <?php
    for ($i = 3; $i <= 4; $i++) {
        print_r("<tr>");
        for ($j = 1; $j <= 6; $j++) {
            print_r("<td>$i.$j</td>");
        }
        print_r("</tr>");
    }
    ?>
    <!--    templating / to separate the presentation layer from the logic layer-->
    <?php for ($k = 1; $k < 10; $k++) { ?>
        <tr>
            <?php for ($l = 1; $l <= 6; $l++) { ?>
                <td><?php echo "$k,$l" ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<table border="1" cellpadding="10" cellspacing="0">
    <!--    templating -->
    <?php for ($k = 1; $k < 10; $k++) : ?>
        <tr>
            <?php for ($l = 1; $l <= 6; $l++) : ?>
                <?php if ($k % 2 == 1) : ?>
                    <td class="warna-baris"><?php echo "$k,$l"; ?></td>
                <? else: ?>
                    <td><?php echo "$k,$l"; ?></td>
                <?php endif; ?>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<?php print_r($k > 0) ? "yes" : "no" ?>
</body>
</html>