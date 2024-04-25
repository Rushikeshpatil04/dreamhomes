//java script me
function validate()
{
  if(document.contact.fname.value=="")
    {
	alert("Plese provide your First Name!");

	document.contact.fname.focus();
	 return false;
	 }

	 if(document.contact.lname.value=="")
    {
	alert("Plese provide your Last Name!");

	document.contact.lname.focus();
	 return false;
	 }
	 
	 	 var email = document.contact.email.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.contact.email.focus() ;
     return false;
 }
  

	 	
		if(document.contact.subject.value=="")
    {
	alert("Plese provide Subject!");
	
	document.contact.subject.focus();
	 return false;
	 }

	 if(document.contact.message.value=="")
    {
	alert("Plese provide Message!");
	
	document.contact.message.focus();
	 return false;
	 }
  	 
 

	 return(true);
	 }      
	
	
