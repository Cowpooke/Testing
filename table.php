<?php
    include "connection.php";
    $sql = "SELECT * FROM Music ";
    $result = mysqli_query($con,$sql);
?>
    <table class='table'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Title</th>
                <th>Artist</th>
                <th>Album</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $num = 1;
            while ($td = mysqli_fetch_assoc($result)){
                echo "      <tr>
                            <th>{$num}</th>
                            <td>{$td['Title']}</td>
                            <td>{$td['Artist']}</td>
                            <td>{$td['Album']}</td>
                            </tr>";
                $num++;
            }        
        ?>
        </tbody>
    </table>