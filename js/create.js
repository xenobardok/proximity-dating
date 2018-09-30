$(document).ready(function(){

    jQuery("form").submit(function(e){
        var notSuccess= validateForm();   
 
        if(notSuccess){
            e.preventDefault();  
 
        }
     });

     function validateForm(){

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var nameReg = /^\w+$/;

        var name = $('#name').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var phone = $('#phone_number').val();
        var day = $('#day').val();
        var month = $('#month').val();
        var year = $('#year').val();
        var gender = $('#gender').val();
        var password = $('#password').val();
        var conf = $('#confirm_password').val();




	    var error= false;

        $('#nameError').html('');
        $('#usernameError').html('');
        $('#emailError').html('');
        $('#phoneError').html('');
        $('#dayError').html('');
        $('#monthError').html('');
        $('#yearError').html('');
        $('#genderError').html('');
        $('#pwError').html('');
        
        if(name==""){
            $('#nameError').html('Name cannot be empty');
            error=true;
        }

        if(username==""){
            $('#usernameError').html('Username cannot be empty');
            error=true;
        }
        else if (!nameReg.test(username)){
            $('#nameError').html('Username can only contain letters, numbers and underscores.');
            error=true;
        }
        
        if(email==""){
            $('#emailError').html('Email cannot be empty');
            error=true;
        }
        else if (!emailReg.test(email)){
            $('#emailError').html('Invalid email address');
            error=true;
        }

        if(isNaN(phone)){
            $('#phoneError').html('Phone number can only be digits');
            error=true;
        }

        if(year>2000){
            $('#yearError').html('You must be born before 2000');
            error=true;
        }

        if(password==""){
            $('#pwError').html('Password cannot be empty');
            error=true;
        }
        if(gender!="Male" && gender!="Female"){
            $('#genderError').html('Male or Female');
            error=true;
        }

        if(password!=conf){
            $('#pwError').html('Password must match');
            error=true;
        }
        
        return error;
    }
});