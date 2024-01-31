<?php
require '../init/connect.php';
$type_section = $_GET['type_section'];
print_r($type_section);

$desc_for_this_type = mysqli_query($connect_types, "SELECT * FROM `Types` WHERE term_id=1");
$desc_for_this_type = mysqli_fetch_all($desc_for_this_type);

?>
<p>
    <?php
//print_r($desc_for_this_type[0]);
foreach($desc_for_this_type as $desc)
                    {
                        ?>
                        
                            <p><?= $desc[1] ?></p>
                            <p><?= $desc[2] ?></p>
                            
                        <?
                    }
?>

</p>



<?php
//header('Location: /init/index.php');

?>