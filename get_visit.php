<?php
if(isset($_GET['nid'])){
    $nid=$_GET['nid'];
    $sql = "SELECT post_views FROM post_details WHERE post_id = '$nid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["post_views"];
            $sql = "UPDATE post_details SET post_views = $visits+1 WHERE post_id ='$nid'";
    $conn->query($sql);

        }
    } else {
        echo "no results";
    }
    
   }?>