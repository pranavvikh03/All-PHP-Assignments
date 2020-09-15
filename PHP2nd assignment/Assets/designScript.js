function changeSection(id){
    if(id == 1){
        document.getElementById("home").style.display='block';
        document.getElementById("register").style.display='none';
        document.getElementById("list_students").style.display='none';
    }
    if(id == 2){
        document.getElementById("home").style.display='none';
        document.getElementById("register").style.display='block';
        document.getElementById("list_students").style.display='none';
    }
    if(id == 3){
        document.getElementById("home").style.display='none';
        document.getElementById("register").style.display='none';
        document.getElementById("list_students").style.display='block';
        //tableDisp();
    }
}
function mobilenoValid()
{
   var no=document.getElementById("mobileno").value;
   if(no.length<=9)
   {
      return true;
   }
   else
   {
      return false;
   }
}
function isNumberKey(evt)
{
   var charCode = (evt.which) ? evt.which : event.keyCode;
   if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
   else{
      if(mobilenoValid()==true)
         return true;
      else
         return false;
   }
      
}
function validateEmail(emailField){
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

   if (reg.test(emailField) == false) 
   {
       return false;
   }

   return true;

}
function checkValidation(){
     var fname=document.getElementById("fname").value;
     var lname=document.getElementById("lname").value;
     var dept=document.getElementById("dept").value;
     var mobileno=document.getElementById("mobileno").value;
     var email=document.getElementById("email").value;
     let invaliderr=0;
     var gender='';
     var technologies_known="";
     var tech="";
     if(fname=="")
     {
        document.getElementById("fnamealert").innerHTML="<p class='text-danger mt-2' style='text-align:right;'><b>Required*</b></p>";
     invaliderr++;    
     }
     else{
        document.getElementById("fnamealert").innerHTML="";
     }
     if(lname=="")
     {
      invaliderr++; 
        document.getElementById("lnamealert").innerHTML="<p class='text-danger mt-2' style='text-align:right;'><b>Required*</b></p>";
     }
     else{
        document.getElementById("lnamealert").innerHTML="";
     }
     if(dept.localeCompare("invalid")==0)
     {
      invaliderr++; 
        document.getElementById("deptalert").innerHTML="<p class='text-danger mt-2' style='text-align:right;'><b>Required*</b></p>";
     }
     else{
        document.getElementById("deptalert").innerHTML="";
     }
     if(mobileno=="")
     {
      invaliderr++; 
        document.getElementById("mobilenoalert").innerHTML="<p class='text-danger mt-2' style='text-align:right;'><b>Required*</b></p>";
     } else if(mobileno.length<10){
      invaliderr++; 
      document.getElementById("mobilenoalert").innerHTML="<p class='text-danger mt-2' style='text-align:right;'><b>Mobile No.never be less than 10 digits</b></p>";
     }
     else{
        document.getElementById("mobilenoalert").innerHTML="";
     }
     if(email=="")
     {
      invaliderr++; 
      document.getElementById("emailalert").innerHTML="<p class='text-danger mt-2' style='text-align:right;'><b>Required*</b></p>";
     }
     else if(validateEmail(email)!=true)
     {
      document.getElementById("emailalert").innerHTML="<p class='text-danger mt-2' style='text-align:right;'><b>Invalid Email</b></p>";
     }
     else{
      document.getElementById("emailalert").innerHTML="";
     }
     if(document.getElementById("gender1").checked==false && document.getElementById("gender2").checked==false)
     {
      invaliderr++; 
      document.getElementById("genderalert").innerHTML="<p class='text-danger mt-2' style='text-align:right;'><b>One should be selected</b></p>";     
     }
     else{
        if(document.getElementById("gender1").checked==true){gender="Male";}    
        if(document.getElementById("gender2").checked==true){gender="Female";}
      document.getElementById("genderalert").innerHTML="";
     }
     if(document.getElementById("customCheck1").checked==false && document.getElementById("customCheck2").checked==false && document.getElementById("customCheck3").checked==false)
     {
      invaliderr++; 
      document.getElementById("technologiesalert").innerHTML="<p class='text-danger mt-2' style='text-align:right;'><b>At least one should be selected</b></p>";     
     }
     else{
      if(document.getElementById("customCheck1").checked==true){technologies_known=technologies_known+"Prior Knowledge of Programming";}    
      if(document.getElementById("customCheck2").checked==true){technologies_known=technologies_known+"  Statistics & Probability";}
      if(document.getElementById("customCheck3").checked==true){technologies_known=technologies_known+"No Knowledge";}
      document.getElementById("technologiesalert").innerHTML="";
     }    
     if(invaliderr==0){
      data={
         First_Name:fname,
         Last_Name:lname,
         Department:dept,
         Gender:gender,
         Mobile_No:mobileno,
         Email:email,
         Technologies_Known:technologies_known
      };  
      Submitform(data);
     }
     else{
        return false;
     }
}
