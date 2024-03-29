$(document).ready(function(){
  //Global Variables
  var DOMAIN = "http://localhost/php_ims/public_html";
 
  //Callback function for on submit
  $("#register_form").on("submit",function(){
      var status = false;
      var name  = $("#username");
      var email = $("#email");
      var pass1 = $("#password1");
      var pass2 = $("#password2");
      var type  = $("#usertype");

      var n_patt = new RegExp(/^[A-Za-z ,.]+$/);
      var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
      
      //Validate Name: Should not be blank. Length of name should be greater than 6
      if (name.val() == "" || name.val().length < 6 ) {
        name.addClass("border-danger");
        $("#u_error").html("<span class='text-danger'>Please Enter Name. Name should be more than 6 chars</span>");
        status = false;
      } else {
        name.removeClass("border-danger");
        $("#u_error").html("");
        status = true ;
      }

      //Validate Email: Email should be as per pattern
      if(!e_patt.test(email.val())){
        email.addClass("border-danger");
        $("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address</span>");
        status = false;
      }else{
        email.removeClass("border-danger");
        $("#e_error").html("");
        status = true;
      }

      //Validate Password 1: Should not be blank. Length should be greater than 9
      if(pass1.val() == "" || pass1.val().length < 9){
        pass1.addClass("border-danger");
        $("#p1_error").html("<span class='text-danger'>Password should be more than 9 chars</span>");
        status = false;
      }else{
        pass1.removeClass("border-danger");
        $("#p1_error").html("");
        status = true;
      }

      //Validate Password 2: Should not be blank. Length should be greater than 9. Should be same as Password 1
      if(pass2.val() == "" || pass2.val().length < 9){
        pass2.addClass("border-danger");
        $("#p2_error").html("<span class='text-danger'>Password should be more than 9 chars</span>");
        status = false;
      } else if (pass1.val() != pass2.val()) {
        pass2.addClass("border-danger");
        $("#p2_error").html("<span class='text-danger'>Passwords do not match</span>");
        status = true;
      } else{
        pass2.removeClass("border-danger");
        $("#p2_error").html("");
        status = true;
      }

      //Validate User Type: Should noy be blank
      if(type.val() == ""){
        type.addClass("border-danger");
        $("#t_error").html("<span class='text-danger'>Select User Type</span>");
        status = false;
      }else{
        type.removeClass("border-danger");
        $("#t_error").html("");
        status = true;
      }

      // Status should be true to Submit
      if (status == true) {
        $(".overlay").show();
        $.ajax({
          url : DOMAIN+"/includes/process.php",
          method : "POST",
          data : $("#register_form").serialize(),
          success : function(data){
            if (data == "EMAIL_ALREADY_EXISTS") {
              $(".overlay").hide();
              alert("Email already used");
            } else if(data == "SOME_ERROR"){
              $(".overlay").hide();
              alert("Something wrong");
            } else {
              $(".overlay").hide();
              window.location.href = encodeURI(DOMAIN + "/index.php?msg=You are registered. Now you can login");
            }
          }
        })
      }
    })

    //Callback function for Login part
    $("#form_login").on("submit",function(){
        var email = $("#log_email");
        var pass = $("#log_password");
        var status = false; 

        //Validate email address: Should not be blank
        if (email.val() == "") {
          email.addClass("border-danger");
          $("#e_error").html("<span class='text-danger'>Please Enter email address</span>");
          status = false;
        } else {
          email.removeClass("border-danger");
          $("#e_error").html("");
          status = true;
        }

        //Validate password: Should not be blank
        if (pass.val() == "") {
          pass.addClass("border-danger");
          $("#p_error").html("<span class='text-danger'>Please enter password</span>");
          status = false;
        } else {
          pass.removeClass("border-danger");
          $("#p_error").html("");
          status = true;
        }

        if (status) {
          $.ajax({
            url : DOMAIN+"/includes/process.php",
            method : "POST",
            data : $("#form_login").serialize(),
            success : function(data){
              if (data == "NOT_REGISTERD") {
                $(".overlay").hide();
                email.addClass("border-danger");
                $("#e_error").html("<span class='text-danger'>Your email is not registered</span>");
                status = false;
              } else if(data == "PASSWORD_NOT_MATCHED"){
                $(".overlay").hide();
                pass.addClass("border-danger");
                $("#p_error").html("<span class='text-danger'>Please enter correct password</span>");
                status = false;
              } else {                			
                console.log(data);
				        //alert(status);
                window.location.href = DOMAIN+"/dashboard.php";
              }
            }
          })
        }
    })

    //Fetch category
    fetch_category();
    function fetch_category(){
      $.ajax({
        url : DOMAIN+"/includes/process.php",
        method : "POST",
        data : {getCategory:1},
        success : function(data){
          var root = "<option value='0'>Root</option>";
          var choose = "<option value=''>Choose Category</option>";
          $("#parent_cat").html(root+data);
          $("#select_cat").html(choose+data);
        }
      })
    }  
})