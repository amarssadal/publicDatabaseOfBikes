<?php

    require_once('../private/initialise.php');
    if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
        redirect_to(url_for('/index.php'));
    } else {
         // collect value of input field
        $bikeData['manufacturer'] = $_POST['manufacturer'];
        $bikeData['model'] = $_POST['model'];
        $bikeData['year'] = $_POST['year'];
        $bikeData['country'] = $_POST['country'];
        $bikeData['frameSystem'] = $_POST['frameSystem'];
        $bikeData['frameMaterial'] = $_POST['frameMaterial'];
        $bikeData['forkMaterial'] = $_POST['forkMaterial'];
        $bikeData['weight'] = $_POST['weight'];
        $bikeData['weightUnits'] = $_POST['weightUnits'];
        $bikeData['frameSize'] = $_POST['frameSize'];
        $bikeData['frontDerailleur'] = $_POST['frontDerailleur'];
        $bikeData['rearDerailleur'] = $_POST['rearDerailleur'];
        $bikeData['gears'] = $_POST['gears'];
        $bikeData['shifterType'] = $_POST['shifterType'];
        $bikeData['shifter'] = $_POST['shifter'];
        $bikeData['chainSet'] = $_POST['chainSet'];
        $bikeData['chain'] = $_POST['chain'];
        $bikeData['cassette'] = $_POST['cassette'];
        $bikeData['bottomBracket'] = $_POST['bottomBracket'];
        $bikeData['stem'] = $_POST['stem'];
        $bikeData['headSet'] = $_POST['headSet'];
        $bikeData['handleBar'] = $_POST['handleBar'];
        $bikeData['barTape'] = $_POST['barTape'];
        $bikeData['brakeSystem'] = $_POST['brakeSystem'];
        $bikeData['brakeLevers'] = $_POST['brakeLevers'];
        $bikeData['brakes'] = $_POST['brakes'];
        $bikeData['wheels'] = $_POST['wheels'];
        $bikeData['frontHub'] = $_POST['frontHub'];
        $bikeData['rearHub'] = $_POST['rearHub'];
        $bikeData['tyres'] = $_POST['tyres'];
        $bikeData['tube'] = $_POST['tube'];
        $bikeData['saddle'] = $_POST['saddle'];
        $bikeData['seatPost'] = $_POST['seatPost'];
        $bikeData['lights'] = $_POST['lights'] ?? '';
        $bikeData['tubelessTyres'] = $_POST['tubelessTyres'] ?? '';
        $bikeData['internalCabling'] = $_POST['internalCabling'] ?? '';
        $bikeData['frontRack'] = $_POST['frontRack'] ?? '';
        $bikeData['rearRack'] = $_POST['rearRack'] ?? '';
        $bikeData['kickStand'] = $_POST['kickStand'] ?? '';
        $bikeData['mudGuards'] = $_POST['mudGuards'] ?? '';
        $bikeData['dynamo'] = $_POST['dynamo'] ?? '';
        $bikeData['tyreClearance'] = $_POST['tyreClearance'] ?? '';
        $bikeData['bottleHolders'] = $_POST['bottleHolders'];
        $bikeData['manualInfo'] = $_POST['manualInfo'];
    }

    $result = addBikeToApprove($bikeData);
    if ($result === true) {
        echo "entry sucessful";
    } else {
        $error = $result;
    }

    $title = 'The public Database of Bikes - Add new Bike';
    $css = SHARED_PATH . '/css/main.css';
    include(SHARED_PATH . '/header.php');
?>

<body>
    <div class="wrapper">
        <?php include(SHARED_PATH . '/logoBox.php'); ?>
        <div class = "searchBox">
            <?php include(SHARED_PATH . '/searchBox.php'); ?>
        </div>
        <div class = "contentContainer">
            <div class = "addNewBox">
                <div class ="pageTitle">
                    ADD YOUR BIKE
                </div>
                <div class = "part titleText">
                    <?php
                        foreach ($bikeData as $bikeSpec => $newBike) {
                            echo "$bikeSpec = $newBike<br />";
                        }
                    ?>
                </div>
            </div>
        </div>
<?php include(SHARED_PATH . '/footer.php'); ?>