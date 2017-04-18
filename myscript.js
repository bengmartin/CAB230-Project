function validateUsername() {
      if( document.myForm.username.value == "" )
       {
         alert( "Please provide a username" );
         document.myForm.username.focus() ;
         return false;
       }
        return true;
}
 
function validateForm()     {
    if( validateUsername()
        && validateEmail()
        && validatePassword()
    ){
        return true;
    }
     
    return false;
}
 
function validatePassword() {
    if((myForm.pass1.value).length < 8)  {
        alert("Password must be a minimum of 8 characters");
        myForm.pass1.focus();
        return false;
    }
     
    if(myForm.pass2.value != myForm.pass1.value)    {
        alert("The passwords do not match");
        return false;
    }
 
    if( document.myForm.pass1.value == "" )
    {
        alert( "Please enter a password" );
        document.myForm.passwordField.focus() ;
        return false;
    }
    if( document.myForm.pass2.value == "" )
    {
        alert( "Please confirm your password" );
        document.myForm.passwordConfirm.focus() ;
        return false;
    }
    return true;
}
 
function validateEmail(){
    var email = document.forms["myForm"]["email"].value;
    var regex = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
 
    if(!regex.test(email)){
     alert("Enter a valid email");
     return false;
    }
     
    if( document.myForm.email.value == "" )
    {
     alert( "Your Email address is required" );
     document.myForm.email.focus() ;
     return false;
    }
    return true;            
}       