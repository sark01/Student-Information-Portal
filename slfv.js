function formValidation()
{ 
var uname=document.registration.user_name;
  var passid=document.registration.user_password;
 
 if(username_validation(uname))
{if(passid_validation(passid,8,12))
return true;
}
return false;
}
function username_validation(uname){
var letters=/^[A-Za-z]+$/;
if(uname.value=="")
 {  alert("Name should not be empty");
   uname.focus();
   return false;
}
if(uname.value.match(letters))
{
return true;
}
else {
alert('Name must only have alphabets');
uname.focus();
return false;
}
}
function passid_validation(passid,mx,my){
var pass_len=passid.value.length;
if(pass_len==0||pass_len>my||pass_len<mx)
   {
   alert("Password should not be empty/length be between "+mx+" to "+my);
   passid.focus();
   return false;
  }
return true;
}



