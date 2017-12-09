$(document).ready(function(){
 
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
            url: "./APIs/crud.api.php",
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



});