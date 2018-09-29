$(document).ready(function(){

    jQuery("form").submit(function(e){
        console.log("hi");
        var notSuccess= validateForm();   
 
        if(notSuccess){
            e.preventDefault();  
 
        }
     });

     function validateForm(){

        //var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var nameReg = /^\w+$/;

        var name = $('#username').val();
        var pw = $('#password').val();


	    var error= false;

	    $('#nameError').html('');
        $('#pwError').html('');
        
        if(name==""){
            $('#nameError').html('Username cannot be empty.');
            error=true;
        }else if (!nameReg.test(name)){
            $('#nameError').html('Invalid username. Username can only contain letters, numbers and underscores.');
            error=true;
        }
        

        if(pw==""){
            $('#pwError').html('Password cannot be empty.');
            error=true;
        }
        return error;
    }
});