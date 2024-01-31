<?php

require 'connect.php';
global $type_section;
global $arch_section;

?>
<style>
    th, td {
        padding: 10px;
    }
    th {
        color: #fff; 
        background: #606060;
    }
    
    td {
        background: #b5b5b5;
    }
</style>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>Architectures</title>
</head>
<body>
    <!-----
    <table>
        <tr>
            <th>ID</th>    
            <th>Name</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>1</td>
            <td>asdf</td>
            <td>asdfasdfasdfa</td>
        </tr>

        

    </table> --->
    <h2>Архитектуры вычислительных систем</h2>
            <?php
                $types = mysqli_query($connect_types, "SELECT * FROM `Types`");
                $types = mysqli_fetch_all($types);
                $type_ids = $types[0];
                $archs = mysqli_query($connect_archs, "SELECT * FROM `Architectures`");
                $archs = mysqli_fetch_all($archs);                
                //print_r($type_ids);
                foreach($types as $type)                
                {
                    ?>
                    <a href="../interface/type_table_view.php?type_section="<?=$type[0]?>><?= $type[1] ?></a><br>


                    <ul>                   
                    <?php
                    
                    $cur_type_id = $type[0];
                    $type_section = $type[0];
                    $all_archs_for_this_type = mysqli_query($connect_archs, "SELECT * FROM `Architectures` WHERE type_id=$cur_type_id");
                    $all_archs_for_this_type = mysqli_fetch_all($all_archs_for_this_type);
                    foreach($all_archs_for_this_type as $arch)
                    {
                        ?>
                        
                            <li><a href="../interface/arch_table_view.php"><?= $arch[1] ?></a><br></li>
                    
                        <?
                    }?></ul><?
                }
                
            ?>
    
    
    <form action = "search.php" method = >
        <input type = "text" name = "name">
        <button type = "submit">Search</button>
    </form>
</body>
</html>