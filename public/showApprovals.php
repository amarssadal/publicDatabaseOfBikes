<?php
    require_once('../private/initialise.php');

    $bikeApproval = listAllApprovalBikes();

    $title = 'The public Database of Bikes - List all bikes for approval';
    include(SHARED_PATH . '/header.php');
?>
<body>
    <div class="wrapper">
        <?php include(SHARED_PATH . '/logoBox.php'); ?>
        <div class = "searchBox">
            <?php include(SHARED_PATH . '/searchBox.php'); ?>
        </div>
        <div class = "contentContainer">
            <?php   while ($bikeCur = mysqli_fetch_assoc($bikeApproval)) { ?>
            <?php       echo h($bikeCur['manufacturer']); ?>
            <?php   } ?>
        </div>
<?php include(SHARED_PATH . '/footer.php'); ?>