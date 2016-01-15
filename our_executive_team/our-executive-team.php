<!DOCTYPE HTML>
<html>
    <head>
        <title>Markham Ward 6 Youth Council | Inspiring Tomorrow</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <link rel="canonical" href="markhamw6yc.org">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Markham Youth" >
        <meta name="description" content="A place for youths to chill">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <!--font css-->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Sans" />
        
        <!--bootstrap-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="../stylesheet.css"/>
    </head>
    <body>
            <?php include '../navbar.php';?>
        <script>
        $(document).ready(function(){
            

            $(".title").fadeIn(600);
            var hrwidthtimer = window.setInterval(function () {
                
                var hrwidth = $("#titlehr").width();
                
                if(hrwidth< 200){
                    $('#titlehr').css("width",hrwidth+1);
                }else{
                    window.clearTimeout(hrwidthtimer);
                }
            });
        });   
        </script>
    <div class="container-narrow">
        <div class="col-sm-12">
            <div class="row-fluid">
                <h1 class="title">Our Executive Team</h1>
            </div>
            <div class="row-fluid">
                <hr id="titlehr">
            </div>
        </div>
    </div>
        <!--include footer .php-->
    </body>
</html>