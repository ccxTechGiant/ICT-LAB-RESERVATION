
jQuery(document).ready(function() {

    /*
        Background slideshow
    */
    $.backstretch([
      "assets/img/backgrounds/1.jpg"
    , "assets/img/backgrounds/2.jpg"
    , "assets/img/backgrounds/3.jpg"
    ], {duration: 10000, fade: 750});

    /*
        Tooltips
    */
    $('.links a.home').tooltip();
    $('.links a.blog').tooltip();

    /*
        Form validation
    */
    $('.register form').submit(function(){
	$(this).find("label[for='identity']").html('School Code');
        $(this).find("label[for='first_name']").html('First Name');
        $(this).find("label[for='last_name']").html('Last Name');
        $(this).find("label[for='username']").html('Username');
        $(this).find("label[for='email']").html('Email');
		$(this).find("label[for='phone']").html('Phone');
		$(this).find("label[for='service']").html('Service');
		$(this).find("label[for='organization']").html('Organization');
        $(this).find("label[for='password']").html('Password');
		$(this).find("label[for='confirm_password']").html('Confirm password');
        ////
		var identity = $(this).find('input#identity').val();
        var first_name = $(this).find('input#first_name').val();
        var last_name = $(this).find('input#last_name').val();
        var username = $(this).find('input#username').val();
        var email = $(this).find('input#email').val();
		var phone = $(this).find('input#phone').val();
		var service = $(this).find('select#services').val();
		var organization = $(this).find('input#organization').val();
        var password = $(this).find('input#password').val();
		var confirm_password = $(this).find('input#confirm_password').val();
		
		
		if(identity == '') {
            $(this).find("label[for='identity']").append("<span style='display:none' class='red'> - Please enter your school code or pin.</span>");
            $(this).find("label[for='identity'] span").fadeIn('medium');
            return false;
        }
        if(first_name == '') {
            $(this).find("label[for='first_name']").append("<span style='display:none' class='red'> - Please enter your first name.</span>");
            $(this).find("label[for='first_name'] span").fadeIn('medium');
            return false;
        }
        if(last_name == '') {
            $(this).find("label[for='last_name']").append("<span style='display:none' class='red'> - Please enter your last name.</span>");
            $(this).find("label[for='last_name'] span").fadeIn('medium');
            return false;
        }
        if(username == '') {
            $(this).find("label[for='username']").append("<span style='display:none' class='red'> - Please enter a valid username.</span>");
            $(this).find("label[for='username'] span").fadeIn('medium');
            return false;
        }
        if(email == '') {
            $(this).find("label[for='email']").append("<span style='display:none' class='red'> - Please enter a valid email.</span>");
            $(this).find("label[for='email'] span").fadeIn('medium');
            return false;
        }
		if(phone == '') {
            $(this).find("label[for='phone']").append("<span style='display:none' class='red'> - Please enter a valid phone number.</span>");
            $(this).find("label[for='phone'] span").fadeIn('medium');
            return false;
        }
		if(service == '' || service == 'Select Service Type') {
            $(this).find("label[for='service']").append("<span style='display:none' class='red'> - Please select a valid service type.</span>");
            $(this).find("label[for='service'] span").fadeIn('medium');
            return false;
        }
		if(organization == '') {
            $(this).find("label[for='organization']").append("<span style='display:none' class='red'> - Please enter a valid organization name.</span>");
            $(this).find("label[for='organization'] span").fadeIn('medium');
            return false;
        }
        if(password == '') {
            $(this).find("label[for='password']").append("<span style='display:none' class='red'> - Please enter a valid password.</span>");
            $(this).find("label[for='password'] span").fadeIn('medium');
            return false;
        }
		if(confirm_password == '') {
            $(this).find("label[for='confirm_password']").append("<span style='display:none' class='red'> - Please repeat your password...</span>");
            $(this).find("label[for='confirm_password'] span").fadeIn('medium');
            return false;
        }
		if(confirm_password.val() !== password.val()) {
            $(this).find("label[for='confirm_password']").append("<span style='display:none' class='red'> - Password doesn`t match...</span>");
            $(this).find("label[for='confirm_password'] span").fadeIn('medium');
            return false;
        }
    });


});


