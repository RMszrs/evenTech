$(document).ready(function (){

    // Click event on the login button
   $("#login").on('click', function(){
    // Getting the values from the form and storing them in variables   
      var sEmail = $("#email").val();
      var sPassword = $("#password").val();
    //   console.log(sEmail +" "+sPassword);

    // Checking if the values are empty
     if(sEmail == "" || sPassword == "") {
         alert("please check your inputs!");
     } else { // If not, we do the ajax call
         $.ajax(
             {
                 url:"./APIs/login.api.php",
                 dataType: "text",
                 method: "POST",
                 data: {
                     login: 1,
                     email: sEmail,
                     password: sPassword
                 },
                 success: function(response){
                    console.log(response);
                    $("#loginResponse").html(response);

                    if(response.indexOf('success') >= 0){
                        window.location = "./index.php";
                    }
                 }
             }
         )
     }

   });
});