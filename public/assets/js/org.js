$(document).ready(function(){

$(".delete").click(function(event){
let id = $(this).data('id');
$("#deleteOrg").attr("data-id", id);


});

$("#deleteOrg").click(function(event){
 let id  =  $("#deleteOrg").attr("data-id");
console.log(id);

ajax("organization/delete",{'id':id} , (data)=>{

  if(data.statues == "done"){
   location.reload(true);
  }
}, (data)=>{

})

});




$(".which").click(function(event){
  
let which = $(this).data('edit');

if(which == "yes"){
  
$("#saveOrg").text("save changes");
$("#saveOrg").attr("data-edit", "yes");

let id = $(this).data('id');
$("#saveOrg").attr("data-id" , id);
ajax("organization/get" , {'id':id} , (data)=>{

  SetModel(data.name , data.address , data.identity_color , data.font_name, data.font_color , data.size_font  ,data.weight , data.italic , data.img_org );

console.log(data);


} , (data)=>{
  console.log(data);
} );


}else{
  resetModel();
$("#saveOrg").text("Submit");
$("#saveOrg").attr("data-edit", "no");
}
});



$("#saveOrg").click(function(event){



  $('.modal').modal('hide');
  $("#myModal3").css("display" , "block");

  $('.loaderModel').modal('show');
let name = $("#nameOrg").val();
let address = $("#addressOrg").val();
let idColor = $("#idColor").val();
let fontName = $("#fonts").val();
if(fontName == "none"){
fontName = "Verdana";
}
let colorFont = $("#colorFont").val();
let Size = $(".sizeP").val();
let weight = $(".weightP").val();
let italic = $(".check-input").val();
let logo = $(".uplogo").attr('src');

var values = {'name':name , 'address':address, 'identityColor':idColor , 
               'fontName':fontName , 'color':colorFont , 'size':Size , 
               'weight':weight , 'italic':italic , 'logo':logo  };
               console.log(values);

 if($(this).data('edit') == "no"){

ajax("organization/add" ,values , (data)=>{
  let temp = tempOrg(name , address , logo , data.id);
  if(data.statues == "done"){
    $("#myModal3").css("display" , "none");

   $('.father__org').prepend(temp);
   resetModel();
  }
console.log(data);


} , (data)=>{

console.log(data)
});



}else{
 let ide =   $("#saveOrg").attr("data-id");
 values.id = ide;
console.log(values)
ajax("organization/update" ,values , (data)=>{

// console.log(data);
if(data.statues == "done"){
  $("#myModal3").css("display" , "none");
  resetModel();
  location.reload(true);
}

}, (data)=>{


});

}

});


$('.modal').on('hide.bs.modal', function (e) {
  // resetModel();
});



});


function uploadLogo(elm){
  let src = "../public/assets/images/loader2.gif"
  
      $(".uplogo").attr('src' , src );
     var file_data = $(elm).prop('files')[0];
     var  form_data = new  FormData();
         form_data.append('file' , file_data );
         ajaxFiles("organization/upload" ,form_data, (data)=>{
      if(data.statues == "done"){
        let image = "../"+data.location;
        $(".uplogo").attr('src' , image);
      }
  // console.log(data);


         } , (data)=>{

         } )
         
}



function resetModel(){
$("#nameOrg").val("");
$("#addressOrg").val("");
$("#idColor").val("#000000");
$("#fonts").val("none");

 $("#colorFont").val("#000000");
$(".sizeP").val(18);
  $(".weightP").val("normal");
 $(".check-input").val();
 $(".uplogo").attr('src' , '../public/assets/images/defimg.png');
 $(".changeMe").attr('style' , '');
}

function SetModel(name , address , idcolor , fonts, color , size , weight , italic , logo ){
$("#nameOrg").val(name);
$("#addressOrg").val(address);
$("#idColor").val(idcolor);
$("#fonts").val(fonts);

 $("#colorFont").val(color);
$(".sizeP").val(size);
  $(".weightP").val(weight);
 $(".check-input").val(italic);
if(italic == "yes"){
  italic = "italic";
}
 $(".uplogo").attr('src' , logo);

 $(".changeMe").css('font-style',italic);
 $(".changeMe").css('font-size',size);
 $(".changeMe").css('font-family',fonts);
 $(".changeMe").css('color',color);
 $(".changeMe").css('font-weight',weight);
}

function tempOrg(name , adress , logo , id){
  
  var temp = `<tr role="row" class="even">
  <td><img src="${logo}" alt="${name}"></td>
  <td>${name}
  </td>
  <td>${adress}</td>
  <td class=" text-center">
      <button type="button" data-id="${id}"  class="edit-button btn btn-success which"  data-edit="yes" data-toggle="modal" data-target=".organize-add">
      <i class="glyphicon glyphicon-pencil"></i>
      </button>
      <button type="button" data-id="${id}" class="remove-button btn btn-danger" data-toggle="modal" data-target=".romove-popup">
      <i class="glyphicon glyphicon-trash"></i>
      </button>                       
     </td>
</tr>`;
return temp;
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