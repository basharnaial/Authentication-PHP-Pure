$(document).ready(function(){
    $("#add").click(function(){
        // alert("1");
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

       // ajax start here 
       $.ajax({
           url: "index.php",
           type: "POST",
           data: {
               email: email,
               add: true,
               password: password
           },
       
        success: function(data){
       // console.log("data");
           if (data == "1") {
               $("h1").show();
               $(".container").hide();
               
           }
        },
       
       });
               // ajax done here 


   });
});
 
