$(document).ready(function(){


    $(".rmove").click(function(){
        let id = $(this).data('id');
        $(".conRm").attr('data-id' , id);
        
        
        });
        
        $(".conRm").click(function(){
        
          let id = $(".conRm").attr('data-id');
          
          ajax('ads/delete' , {'id':id} , (data)=>{
        if(data.statue == "done"){
        location.reload(true);
        }
        
          } , (data)=>{
        
          })
          
          });

    $(".which").click(function(event){
      let  ed = $(this).data('edit');
      if(ed == "no"){
        $(".save").attr('data-edit' , 'no');
        $("#gridSystemModalLabel").text("Add Ads");
      }else{
          let id  = $(this).data('id');
          $(".save").attr('data-id' , id);
          ajax('ads/get' , {"id":id} , (data)=>{
            SetModel(data.title, data.note_ads , data.org  ,data.statues , data.url_ads, data.img_url );
            
              } , (data)=>{
            
              })
          
          $(".save").attr('data-edit' , 'yes');
          $(".save").attr('data-id' , id );
          $("#gridSystemModalLabel").text("Edit Ads");

      }
    })

$(".save").click(function(event){
    $('.modal').modal('hide');
    $("#myModal3").css("display" , "block");
    var title = $("#titleAds").val();
    let notAds = $("#notAds").val();
    let orgAds = $(".orgAds").val();
    var stat = $("#statues").attr("data-stat");
  
    let extUrlADS = $("#extUrlADS").val();
    let img = $(".cc").attr('src');
    var values = {'title':title , 'notes':notAds , 'orgAds':orgAds, 'stat':stat , 'external':extUrlADS , 'img':img};
   let whic = $(this).attr('data-edit');
    if( whic == "no"){
    ajax('ads/add', values , (data)=>{
     if(data.statues == "done"){
        $("#myModal3").css("display" , "none");
     location.reload(true);
     }
    }, (data)=>{

    })
    console.log("add");

}else{
  
    let ide = $(this).attr('data-id');

    values.id = ide;
    ajax('ads/update' , values , (data)=>{
   if(data.statues == "done"){
    $('.modal').modal('hide');
    $("#myModal3").css("display" , "none");
    
location.reload(true);
   }
    }, (data)=>{

    })

    console.log("edit");
}


});

});












function uploadImage(elm){
    let src = "../public/assets/images/loader2.gif"
 
     $(".cc").attr('src' , src );
    var file_data = $(elm).prop('files')[0];
    var  form_data = new  FormData();
        form_data.append('file' , file_data );
        ajaxFiles("ads/upload" ,form_data, (data)=>{
     if(data.statues == "done"){
       let image = "../"+data.location;
       $(".cc").attr('src' , image);
     }
 


        } , (data)=>{

        } )
        
}










function  SetModel(title , note  , org , state , ext , img ){
   $("#titleAds").val(title);
    $("#notAds").val(note);
   $(".orgAds").val(org);
    $("#statues").attr("data-stat" , state );
  
    $("#extUrlADS").val(ext);
    if(state == "active"){
        $("#statues").addClass('on');
    
    }else{
        $("#statues").removeClass("on")
    //    $("#statues").addClass('off');
    }
  $(".cc").attr('src' ,img );
}









function ajax( url , args  , callback , error){
    jQuery.ajax({
         url: url,
        data: args,	
        type: "POST",
        dataType:"json",
        success:function(data){
          callback(data);
        
        },
        error:function (er){
        error(er);
        }
        });
    }











  function ajaxFiles( url , args  , callback , error){
    jQuery.ajax({
         url: url,
        data: args,	
        type: "POST",
        contentType:false,
       processData:false,
        dataType:"json",
        success:function(data){
          callback(data);
        
        },
        error:function (er){
        error(er);
        }
        });
    }