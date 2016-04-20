<?php
    $currentPage = "buy";
    require('head.php');
    require('info.php');
?>

<div class="container main-content">
    <h1>Buy Some Games!</h1>
    <p>I'm sorry <?php echo $_SESSION["username"]; ?>, but there are no games available!</p>
</div>