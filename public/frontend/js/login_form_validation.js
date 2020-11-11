$(document).ready(function () {
  $("#login_form_validation").validate({
    rules: {
      firstname: {
        required: true,
        
      },
      lastname: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
      password_confirmation: {
        required: true,
        equalTo: "#password"
      },

    },
    messages: {
      firstname: {
        required: "*Required",
      },
      lastname: {
        required: "*Required",
      },
      email: {
        required: "*Required",
        email: "*Enter Valide Email",
      },
      password: {
        required: "*Required",
      },
      password_confirmation: {
        required: "*Required",
        equalTo:"**Password does not match"
      },
    },
  });
  $('#login').validate({
    rules:{
      email:{
        required: true,
        email: true,
      },
      password: {
        required: true,
      },

    },
    messages:{
      email:{
        required: "*Required",
        email: "*enter valide email",
      },
      password: {
        required: "*Required",
      },
    },
  })
});