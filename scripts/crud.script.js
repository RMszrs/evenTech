$(document).ready(function(){

    /// ADD NEW EVENT ////
$("#btnAddEvent").on("click", function(){
    var sEventName = $("#txtEventName"); 
    var sEventDate = $("#txtEventDate");    
    var sEventPrice = $("#txtEventPrice");    
    var sEventDesc = $("#txtEventDesc");       
    var sEventLocation = $("#txtEventLocation");    
    var sEventCategory = $("#txtEventCategory");  
    var sEventImage = $("#fileEventImage");
    var formData = $("#addEventForm").serialize();
    console.log(formData);

    if(isNotEmpty(sEventName) && isNotEmpty(sEventDate) && isNotEmpty(sEventPrice) && isNotEmpty(sEventDesc) && isNotEmpty(sEventLocation) && isNotEmpty(sEventCategory) && isNotEmpty(sEventImage)){
       
        $.ajax({
            url: "./APIs/addEvent.api.php",
            method: "POST",
            data: formData,
            processData:false, 
            success: function (response){
                 alert(response);
            }
        })
      }
  })
      
    

    function isNotEmpty(caller){
        if( caller.val() == ""){
            caller.css("border", "1px solid red");
            return false;
        } else {
            caller.css("border", "");
        }

        return true;
    }

/// ADD NEW EVENT ////


getEventData();

});


/// GET EVENT LIST ////
function getEventData(){
    $.ajax({
        url: "./APIs/getEvents.api.php",
        method: "POST",
        dataType: "text",
        data: {
            key: "getEventData",
        }, success: function(response){
           
            if(response != "reachedMax"){
                $("#eventTable").append(response);
                
                
            }
        }
    })
}

/// GET EVENT LIST ////