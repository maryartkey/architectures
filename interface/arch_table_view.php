<?php
require '../init/connect.php';

$desc_for_this_arch = mysqli_query($connect_archs, "SELECT * FROM `Architectures` WHERE term_id=3");
$desc_for_this_arch = mysqli_fetch_all($desc_for_this_arch);

?>
<p>
    <?php
//print_r($desc_for_this_type[0]);
foreach($desc_for_this_arch as $desc)
                    {
                        ?>
                        
                            <p><?= $desc[1] ?></p>
                            <p><?= $desc[2] ?></p>
                            <p><?= $desc[3] ?></p>
                            <p><?= $desc[4] ?></p>

                            
                        <?
                    }
?>

</p>



<?php
//header('Location: /init/index.php');

?>