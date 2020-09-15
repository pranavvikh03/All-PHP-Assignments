$(document).ready(function(){
    $(".disa").click(function(){
       if($(this).prop("checked")==true)
       {
          $(".disa1").prop("disabled",true);
       }
       else
       {
          $(".disa1").prop("disabled",false);   
       }
    });
    $(".disa1").click(function(){
       if($(".disa1").prop("checked")==true)
       {
          $(".disa").prop("disabled",true);
       }
       else
       {
          $(".disa").prop("disabled",false);   
       }
    });
 });
 function Submitform(data)
 { let urll=new URL(location.href).origin;
   urll=urll+"/Collage Assignment/PHP2nd assignment/Controller/InsertRequestHandler.php";
    $.ajax({
       url:urll,
       type:'POST',
       data:JSON.stringify(data),
       success:function(success){
          document.getElementById("alert_register").style.display="block";
          $("#registerForm")[0].reset();
       },
       error: function (jqXHR, textStatus, errorThrown)
       {
         alert("Sorry not submitted");
       }
    });
 }
 function showRecords()
 {
   let urll=new URL(location.href).origin;
   urll=urll+"/Collage Assignment/PHP2nd assignment/Controller/ReadRequestHandler.php";
   $.get(urll,function(data,status){
      if(status.localeCompare("success")==0)
      {
         $("#no-data-alert").css("display","none");
         for (key in data.records) {
               $("#data_table").css("display","block");
               $("#list_table_id").append("<tr>"+
               "<td style='text-align:center;'>"+data.records[key].Timestamp+"</td>"+
               "<td style='text-align:center;'>"+data.records[key].Name+"</td>"+
               "<td style='text-align:center;'>"+data.records[key].Gender+"</td>"+
               "<td style='text-align:center;'>"+data.records[key].Department+"</td>"+
               "<td style='text-align:center;'>"+data.records[key].email+"</td>"+
               "<td style='text-align:center;'>"+data.records[key].Mobile+"</td>"+
               "<td style='text-align:center;'>"+data.records[key].Technologies+"</td></tr>");
         }
      } else{ alert("f"); }
   });
 }
