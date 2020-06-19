<?php

    function addBikeToApprove($bikeNew) {
        global $db;

        $sql = "INSERT INTO bikeApproval ";
        $sql .= "(manufacturer, model, year, country, frameSystem, frameMaterial, ";
        $sql .= "forkMaterial, weight, weightUnits, frontDerailleur, rearDerailleur, ";
        $sql .= "gears, shifterType, shifter, chainset, chain, cassette, bottomBracket, stem, ";
        $sql .= "headSet, handleBar, barTape, brakeSystem, brakeLevers, brakes, wheels, ";
        $sql .= "frontHub, rearHub, tyres, tube, saddle, seatPost, lights, tubelessTyres, ";
        $sql .= "internalCabling, frontRack, rearRack, kickStand, mudGuards, dynamo, ";
        $sql .= "tyreClearance, bottleHolder, manualInfo) ";
        $sql .= "VALUES (";
        $sql .= "'" . db_escape($db, $bikeNew['manufacturer']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['model']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['year']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['country']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['frameSystem']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['frameMaterial']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['forkMaterial']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['weight']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['weightUnits']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['frontDerailleur']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['rearDerailleur']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['gears']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['shifterType']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['shifter']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['chainSet']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['chain']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['cassette']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['bottomBracket']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['stem']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['headSet']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['handleBar']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['barTape']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['brakeSystem']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['brakeLevers']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['brakes']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['wheels']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['frontHub']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['rearHub']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['tyres']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['tube']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['saddle']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['seatPost']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['lights']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['tubelessTyres']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['internalCabling']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['frontRack']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['rearRack']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['kickStand']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['mudGuards']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['dynamo']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['tyreClearance']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['bottleHolders']) . "',";
        $sql .= "'" . db_escape($db, $bikeNew['manualInfo']) . "'";
        $sql .= ")";
        
        echo $sql;
        $result = mysqli_query($db, $sql);

        if ($result) {
            return true;
        } else {
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
    }

    function listAllApprovalBikes() {
        global $db;

        $sql = "SELECT * FROM bikeApproval ";
        $sql .= "ORDER BY manufacturer";

        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        return $result;
    }

?>