<?php 
session_start();
require "db.php";


if(isset($_POST["key"])){

   
    // $sEventImage = $_POST['image'];

    
   


// ADD EVENTS ///
    if($_POST["key"] == 'addNew') {

        $sEventName = $_POST['txtEventName'];
        $sEventDate = $_POST['txtEventDate'];
        $sEventPrice = $_POST['txtEventPrice'];
        $sEventDesc = $_POST['txtEventDesc'];
        $sEventLocation = $_POST['txtEventLocation'];
        $sEventCategory = $_POST['txtEventCategory'];
        // $sFileName = $_FILES["eventImage"]["name"];

        $data = $conn->prepare("SELECT id FROM events WHERE name = :name");
        $data->bindParam(':name', $sEventName);
        $data->execute();
        $result = $data->fetchAll();

        if(count($result) > 0){
            exit("This event name already exists in the database!");
        } else {

            try {  
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    $conn ->beginTransaction();
                    $data = $conn->exec("INSERT INTO events (name, description, price, date) VALUES ('$sEventName', '$sEventDesc', '$sEventPrice', '$sEventDate')"); // image is out for now
                    $data = $conn->exec("INSERT INTO eventLocation (event_id, location_id) VALUES (LAST_INSERT_ID(),(SELECT id FROM locations WHERE locationName= '$sEventLocation'))");
                    $data = $conn->exec("INSERT INTO eventCategory (event_id, category_id) VALUES (LAST_INSERT_ID(),(SELECT id FROM categories WHERE name= '$sEventCategory'))");
                    $data = $conn->commit();
                    echo "Event added";
            } catch (Exception $e) {
                    $conn->rollBack();
                    echo "Failed: " . $e->getMessage();
              }

              
              //save the file to the pictures folder
            //   $sFolder = "./img/events";
            //   $sSaveFileTo = $sFolder.$sFileName; // pictures/photoname.jpeg
            //  // save by using a php function
            //   move_uploaded_file( $_FILES["eventImage"]["tmp_name"], $sSaveFileTo );
        }
    }
}


