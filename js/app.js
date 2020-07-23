function validation(){


    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var conpass = document.getElementById("conpass").value;
    var MobileNumber = document.getElementById("MobileNumber").value;
    var email = document.getElementById("email").value;
    var Lname = document.getElementById("Lname").value;
    var checkedYes = document.getElementById('like').checked;
    var checkedNo = document.getElementById('dislike').checked;
   
    
    
    

   
    
    
    

    if(user == ""){
      
        alert("plz fill the first  name ");

         return false;

    }

    

  else  if(user.length <=2  || (user.length > 20)){


        alert("first name length must be between 2 and 20");
        return false;
    } 
 else   if(!isNaN(user)){
      
        alert("only character are allowed");

         return false;

    }

 else   if(Lname == ""){
      
        alert("plz fill the  last name filed");

         return false;

    }
  else  if(Lname.length <=2  || (Lname.length > 20)){


        alert("last name length must be between 2 and 20");
        return false;
    } 
  else  if(!isNaN(Lname)){
      
        alert("only character are allowed");

         return false;

    }




    
   else if(pass == ""){
      
        alert("plz fill the password");

         return false;

    }


  else  if(pass.length <=5  || (pass.length > 20)){


        alert("password length must be between 2 and 20");
        return false;
    } 

   

    else  if(conpass == ""){
      
        alert("plz fill the confirm password field");

         return false;

    }

 else   if(pass!=conpass){
         
        alert("password  are not matching");
        return false;

    }
    
  else  if(MobileNumber == ""){
      
        alert("plz fill the mobile number");

         return false;

    }

  else  if(isNaN(MobileNumber)){
 

        alert("must write digit only not a charcter");

         return false;

    }
  else  if(MobileNumber.length!=11){

        alert("mobile number must be write 11 digit");

         return false;

    }
    
   else if(email == ""){
      
        alert("plz fill the email");

         return false;

    }

  else  if(email.indexOf('@') <= 0  ){

        alert("@ invalid position");

        return false;
    }
  else  if((email.charAt(email.length-4)!='.')  &&  (email.charAt(email.length-3)!='.'))  {

        alert(". invalid position");

        return false;     

    }
    
    else{

       alert("you form submitted sucfuly");

    }

   

    
    
//  else   if(checkedYes == false && checkedNo == false){
//     alert('You need to select an gender!');
//     return false;
//     }


//     else{


//         alert("thanks");
//     }
    

    
    
    

}







    