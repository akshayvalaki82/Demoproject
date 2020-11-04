// function status(){
//     var x =$("input[]")
// }

$(document).ready(function(){
    // $.validator.addMethod("productattributevalue",function(value){
    //     return value != "select";
    //   },"**requried ");

    $("#product_form_validation").validate({
        rules:{
            name:{
                required:true
            },
            product_image_name:{
                required:true,
                // extension: "jpeg|jpg"
            },
            productattributevalue:{
                valueNotEquals:"select",
            },
            sku:{
                required:true,
                minlength:10,
            },
            short_description:{
                required:true,
                minlength:10,
                maxlength:20,
            },
            long_description:{
                required:true,
                minlength:10,
            },
            price:{
                required:true,
                number: true
            },
            special_price:{
                required:true,
                number: true
            },
            special_price_from:{
                required:true,
                date:true,
            },
            special_price_to:{
                required:true,
                date:true,
            },
            quanity:{
                required:true,
                number: true
            },
            meta_title:{
                required:true,
                minlength:10,
            },
            meta_description:{
                required:true,
                minlength:10,
            },
            meta_keywords:{
                required:true
            },
            status:{
                required:true
            },
        },
        messages:{
            name:{
                required:"*Required"
            },
            product_image_name:{
                required:"*Required",
                // extension:"jpeg and jpg file are allowed"
            },
            productattributevalue:{
                valueNotEquals:"*Required",
            },
            sku:{
                required:"*Required",
                minlength:"**minimume 10 character"
            },
            short_description:{
                required:"*Required",
                minlength:"**Enter minimume 10 character",
                maxlength:"**Enter maximum 20 character"
            },
            long_description:{
                required:"*Required",
                minlength:"**minimume 10 character"
            },
            price:{
                required:"*Required",
                number:"**alphabatic and special characters are not allowed",
            },
            special_price:{
                required:"*Required",
                number:"**alphabatic and special characters are not allowed",
            },
            special_price_from:{
                required:"*Required",
                date:"**Enter Valide Date"
            },
            special_price_to:{
                required:"*Required",
                date:"**Enter Valide Date"
            },
            quanity:{
                required:"*Required",
                number:"**alphabatic and special characters are not allowed",
            },
            meta_title:{
                required:"*Required",
                minlength:"**minimume 10 character"
            },
            meta_description:{
                required:"*Required",
                minlength:"**minimume 10 character"
            },
            meta_keywords:{
                required:"*Required",
                minlength:"**minimume 10 character"
            },
            status:{
                required:"*Required"
            },
            

        }
    });
    // for image validation requrried
    $("#createsubmit").click(function(){
        let yw = $('product_image_name');
        console.log(yw.length);
        if(yw.length == 0)
        {
            $("#errorforimage").css('visibility','visible');
        }

    });  
    // for image validation size
    $('#product_image_name').on('change', function() { 
    let yw = $('product_image_name');
      
    const size = (this.files[0].size);
    // console.log (this.files[0].size); 
    // console.log (size); 
    
    if (size > 4000 || size < 2000) { 
        document.getElementById('product_image_name').value= null;
        alert("File must be between the size of 2-4 "); 
    } else{ 
        $("#output").html('<b>' + 
            'This file size is: ' + size + " MB" + '</b>'); 
        $("#errorforimage").css('visibility','hidden');    
    } 
    }); 
});