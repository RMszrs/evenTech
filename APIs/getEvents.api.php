<?php 
session_start();
require "db.php";


if(isset($_POST["key"])){



    //   GET EVENT DATA ///
  if($_POST["key"] == "getEventData"){
  

      $data = $conn->prepare("SELECT events.name, events.date, events.signups, events.views, events.price, locations.locationName
                                FROM events 
                                INNER JOIN eventLocation ON events.id = eventLocation.event_id
                                INNER JOIN locations ON locations.id = eventLocation.location_id
                              ORDER BY events.date LIMIT 0, 50");
      $data->execute();
      $result = $data->fetchAll();
     
      if(count($result) > 0){
          $tableData = "";
        
         foreach($result as $tableEntry) {
             $tableData .= '
             <tr class="table-event-row" data-showThisPage="pageEvent1">
             <td data-th="Name">'.$tableEntry["name"].'</td>
             <td data-th="Date">'.$tableEntry["date"].'</td>
             <td data-th="Location">'.$tableEntry["locationName"].'</td>
             <td data-th="Signups">'.$tableEntry["signups"].'</td>
             <td data-th="Views">'.$tableEntry["views"].'</td>
             <td data-th="Price">'.$tableEntry["price"].'</td>
             <td>
                 <button class="button btn-table btn-open" data-showThisPage="pageEvent1">Open</button>
                 <button class="button btn-table btn-edit">Edit</button>
                 <button class="button btn-table btn-delete">Delete</button>
             </td>
         </tr>
             
             
             ';
         }
        exit($tableData);
      } else {
          exit('reachedMax');
      }
  }
}