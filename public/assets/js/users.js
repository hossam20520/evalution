$(document).ready(function(){

$(".rmove").click(function(){
let id = $(this).data('id');
$(".conRm").attr('data-id' , id);


});

$(".conRm").click(function(){

  let id = $(".conRm").attr('data-id');
  
  ajax('user/delete' , {'id':id} , (data)=>{
if(data.statue == "done"){
location.reload(true);
}

  } , (data)=>{

  })
  
  });


    $(".editUser").click(function(event){
        let ed = $(this).data('edit');
  if(ed == "yes"){
     let id = $(this).attr("data-id");
    //  phone , mobile , adress , image , role , org
     ajax("user/get" , {'id':id} , (data)=>{

        SetModel(data.name , data.email  , data.password, data.statue , data.phone , data.mobile , data.address , data.photo , data.role , data.org);
      console.log(data);
      
      
      } , (data)=>{
        console.log(data);
      } );

     $(".save").attr("data-id" , id);

      $("#gridSystemModalLabel").text("Edit User");
      $(".save").text("Save");
      $(".save").attr("data-edit", "yes");

  }else{
    resetModel();
    $("#gridSystemModalLabel").text("Add User");
    $(".save").text("Add");
    $(".save").attr("data-edit", "no");

  }

    });


$(".save").click(function(event){
$('.modal').modal('hide');
$("#myModal3").css("display" , "block");
var name = $("#nameU").val();
let emailU = $("#emailU").val();
let passwordU = $("#passwordU").val();
var stat = $("#statues").attr("data-stat");
let gender  = $(".genderr:checked").val();
let phone = $("#phoneU").val();
let mobileU = $("#mobileU").val();
let adress = $("#addressU").val();
var image = $(".cc").attr('src');
let role = $(".role").val();
var org = $("#orgU").val();
var values = {'name':name , 'email':emailU , 'password':passwordU ,
 'state':stat , 'gender':gender , 'phone':phone , 'mobile':mobileU , 'address':adress , 'image':image , 'role':role , 'org':org }

 let edit = $(".save").attr("data-edit");

 if(edit == "no"  ){

    // console.log("add");
ajax("user/add", values , (data)=>{
    var date = "25/12";
    if(data.statues == "done"){
var temp = template(name , image , date , stat , org , data.id);
        $("#myModal3").css("display" , "none");
    
       $('.father__user').prepend(temp);
       location.reload(true);
   
      }
      
     

}, (data)=>{

});

 }else{
let ide = $(this).attr('data-id');
 values.id = ide;
ajax("user/edit" , values , (data)=>{
if(data.statues == "done"){

location.reload(true);
}

}, (data)=>{

});

 }



});





});

function uploadImage(elm){
       let src = "../public/assets/images/loader2.gif"
    
        $(".cc").attr('src' , src );
       var file_data = $(elm).prop('files')[0];
       var  form_data = new  FormData();
           form_data.append('file' , file_data );
           ajaxFiles("user/upload" ,form_data, (data)=>{
        if(data.statues == "done"){
          let image = "../"+data.location;
          $(".cc").attr('src' , image);
        }
    
  
  
           } , (data)=>{
  
           } )
           
  }



function template(name , image , date , statue , org , id ){
    var tempp = `<tr class="odd" role="row">
    <td><img src="${image}" alt="${name}"></td>
    <td>${name}</td>
    <td>${date}</td>
    <td><i class="fa fa-male"></i></td>
    <td><button class="btn btn-success">${statue}</button></td>
    <td>${org}</td>
    <td class=" text-center">
        <button type="button" data-id="${id}" data-edit="yes" class="edit-button btn btn-success editUser" data-toggle="modal" data-target=".user-add">
        <i class="glyphicon glyphicon-pencil"></i>
        </button>
        <button type="button" class="edit-button btn btn-danger" data-toggle="modal" data-target=".romove-popup">
        <i class="glyphicon glyphicon-trash"></i>
        </button>
    </td>
  </tr>`;

  return tempp;
}



function SetModel(name , email  , password, statue , phone , mobile , adress , image , role , org){

$("#nameU").val(name);
$("#emailU").val(email);
$("#passwordU").val(password);
let st = $("#statues").attr("data-stat", statue);
// console.log(statue)
if(statue == "active"){
    $("#statues").addClass('on');

}else{
    $("#statues").removeClass("on")
//    $("#statues").addClass('off');
}
 //$(".genderr:checked").val();
$("#phoneU").val(phone);
$("#mobileU").val(mobile);
$("#addressU").val(adress);
$(".cc").attr('src' , image);
$(".role").val(role);
$("#orgU").val(org);

}

function resetModel(){
    $("#nameU").val("");
    $("#emailU").val("");
    $("#passwordU").val("");
    let st = $("#statues").attr("data-stat", "disactive");
    $("#statues").removeClass("on")
 
    $("#phoneU").val("");
    $("#mobileU").val("");
    $("#addressU").val("");
    $(".cc").attr('src' , "../public/assets/users/defult.jpg");
    $(".role").val("admin");
    $("#orgU").val("");
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