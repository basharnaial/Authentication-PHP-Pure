

// $(document).ready(function(){

//     $("p").click(function(){
//         $("h1").show();
//     });

// });
  




$(document).ready(function(){
     $("#login").click(function(){
         var email = document.getElementById("email").value;
         var password = document.getElementById("password").value;
        // ajax start here 
        $.ajax({
            url: "login.php",
            type: "POST",
            data: {
                email: email,
                login: true,
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
  

