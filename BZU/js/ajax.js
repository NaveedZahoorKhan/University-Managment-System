$(document).ready(function() {  
         //when button is clicked  
        $('#sign_in').click(function(){  
		
		
            //run the character number check  
          
                //else show the cheking_text and run the function to check  
             //   $('#username_availability_result').html(checking_html); 
			  
                check_availability();  
              
        });
		
		
	
  
  });  
  
  
  var myRedirect = function(redirectUrl, arg, value) {
  var form = '<form action="' + redirectUrl + '" method="post">';
	   for(var i=0; i< arg.length; i++){
	   form=form+'<input type="hidden" name="'+ arg[i] +'" value="' + value[i] + '"></input>' ;
	   }
	   form=form  + '</form>';
	   form=$(form);
	  $('body').append(form);
	  $(form).submit();
	};  
  
//function to check username availability  
function check_availability(){  
  
        //get the username  
        var signin_email = $('#signin_email').val();  
  		var password=$('#signin_password').val();
		
        //use ajax to run the check  
        $.post("check_user_from_db.php", { 'signin_email': signin_email,
											'password':password },  
            function(result){  
                //if the result is 1 
				 
                if(result == 1){  
                    //show that the username is available  
					
					var arg=['loggedin_signin_email','loggedin_password'];
					var val=[signin_email,password];
					myRedirect("welcome.php",arg,val);
				
					
					
                }else{  
                    //show that the username is NOT available  
					
					
					document.getElementById('result_message').style.color="red";
					 $('#result_message').html('<strong>' + signin_email + ' is not found'+'</strong>').fadeIn();
                      
				   
                }  
        });  
  
}  // JavaScript Document