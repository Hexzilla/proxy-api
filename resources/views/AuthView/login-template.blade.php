<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!------ Include the above in your HEAD tag ---------->

        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="techie/css/login.css" rel="stylesheet">
    </head>


    <body>
        <div class="container">
            @yield('content')
        </div>   
    </body>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script>
         $(function() {
            $("form[name='login']").validate({
                rules: {
                
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    
                }
                },
                messages: {
                email: "Please enter a valid email address",
                
                password: {
                    required: "Please enter password",
                    
                }
                
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        })

        $(function() {
            $("form[name='registration']").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    }
                },
                
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address"
                },
            
                submitHandler: function(form) {
                form.submit();
                }
            });
        })
    </script>
</html>