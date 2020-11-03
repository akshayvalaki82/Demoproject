$(document).ready(function(){
$("#coupon_form_validation").validate({
    rules:{
        code:{
            required:true,
        },
        percent_off:{
            required:true,
            number: true,
        },
        no_of_uses:{
            required:true,
            number: true,
        }
    },
    messages:{
        code:{
            required:"*required",
            
        },
        percent_off:{
            required:"*required",
            number:"*alphabet and special characters are not allowed",
        },
        no_of_uses:{
            required:"*required",
            number:"*alphabet and special characters are not allowed",
        }
    }
})
})