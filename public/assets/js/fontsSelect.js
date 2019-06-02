$(document).ready(function(){
    $('.changeMe').css('font-style', 'italic');
    $('.changeMe').css('font-size', 18);
    

    $("#fonts").change(function() {
        
     if($(this).val() == "none"){
     
   $('.changeMe').css('font-family' , 'Verdana');
     }else{

        $('.changeMe').css('font-family' , $(this).val());
     }
    
    });


    // change fonts
    $(".sizeP").change(function() {
    
       
        let fontSize = $(this).val()+"px";
        $('.changeMe').css('font-size' , fontSize);
       


       });


       //change size;


       

       $(".colorP").change(function() {
    
       
        let color = $(this).val()
        $('.changeMe').css('color' , color);
       


       });


       //itlic 

       
       $(".check-input").change(function() {
        if($(".check-input").is(':checked')){
            $('.changeMe').css('font-style', 'italic');
        }else{
            $(".check-input").val("no");
            $('.changeMe').css('font-style', 'normal'); 
        }

       });


       // weight 
       $(".weightP").change(function() {
    

            $('.changeMe').css('font-weight', $(this).val()); 
       

       });
      
   
       


});