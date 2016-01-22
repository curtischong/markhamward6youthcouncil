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
        
        <link rel="stylesheet" type="text/css" href="../../stylesheet.css"/>
    </head>
    <body>
            <?php include '../../navbar-folders.php';?>
        <script>
        $(document).ready(function(){
            
            $(".image").fadeIn(800);
            $(".title").fadeIn(600);
            $(".pasteventheader").fadeIn(1000);
            $(".pasteventdescriptionp").fadeIn(600);
            var hrwidthtimer = window.setInterval(function () {
                
                var hrwidth = $("#othertitlehr").width();
                
                if(hrwidth< 200){
                    $('#othertitlehr').css("width",hrwidth+1);
                }else{
                    window.clearTimeout(hrwidthtimer);
                }
            });
        });   
        </script>
    <div class="container-narrow">
        <div class="col-sm-12">
            <div class="row-fluid">
                <h1 class="title othertitle">Caroling With Cans</h1>
            </div>
            <div class="row-fluid">
                <hr id="othertitlehr">
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="imagecon">
                    <div class="image image-december-2015-caroling_for_cans"></div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-12">
                <h3 class="pasteventheader">What It Is</h3>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-12">
                <p class="pasteventdescriptionp">Ho Ho Ho! on December 2015, Markham Youth Council had hosted an event wher ewe go door to door caroling for cans to donate to the Markham Food Drive!</p>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-12">
            <blockquote class="bq1" cite="http://www.hongkiat.com/blog/top-css-editors-reviewed/">
        <p>Every glorious revolution has its dark side, as for CSS is every web browser like IE7 does not support the same effect defined by CSS, so often designer has to squeeze their mind to figure out a trick, hack or fix, that’s when CSS Editor comes in to help.</p>
      </blockquote>
            </div>
        </div>
        <div class="row-fluid">
            <div class="">
            </div>
        </div>
    </div>
       <?php include '../../footer-folders-folders.php'; ?>
    </body>
</html>