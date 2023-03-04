<?php
session_start()
?>
<html>

<body>
    <table border="1px solid black">
        <thead>
            <tr>MaSP</tr>
            <tr>Ten</tr>
            <tr>Gia</tr>
            <tr>file</tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($_SESSION['array']); $i++) {

            ?>
                <tr>

                    <td><?php echo $_SESSION['array'][$i]['MaSP'] ?></td>
                    <td><?php echo $_SESSION['array'][$i]['Ten'] ?></td>
                    <td><?php echo $_SESSION['array'][$i]['Gia'] ?></td>
                    <td><?php echo $_SESSION['array'][$i]['file'] ?></td>
                    <td>
                        <img src=" <?php echo $_SESSION['array'][$i]['file'] ?>" alt="" width="50px" height="50px">
                    </td>
                </tr>
            <?php

            }
            ?>

        </tbody>
    </table>
</body>

</html>