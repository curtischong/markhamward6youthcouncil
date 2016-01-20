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
        
        <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    </head>
    <script>
    $(document).ready(function(){
        var mobile;
        
        
        
        
        //fade in title
        $(".title").fadeIn(1500,function(){
        });
        
        $("#titlenum").delay(300).fadeOut(200,function(){
                $("#titlenum").html("2");
                $("#titlenum").show();
                $("#titlenum").fadeOut(200,function(){
                    $("#titlenum").html("3");
                    $("#titlenum").show();
                    $("#titlenum").fadeOut(200,function(){
                        $("#titlenum").html("4");
                        $("#titlenum").show();
                        $("#titlenum").fadeOut(200,function(){
                            $("#titlenum").html("5");
                            $("#titlenum").show();
                            $("#titlenum").fadeOut(300,function(){
                                $("#titlenum").html("6");
                                $("#titlenum").fadeIn(1000);
                            });
                        });
                    });
                });
            });
        //menu buttons fade in
        $("#execbtn").fadeIn(600);
        $("#pasteventsbtn").fadeIn(700);
        $("#contactusbtn").fadeIn(800);
        
        //about us fade in
        $("#aboutustitle").fadeIn(1000);
        $("#aboutusp").fadeIn(1500);
        $("#aboutusp").animate({top: "-40"},{duration: 1500, queue: false});
        $(".abouth").fadeIn(600);
        
        
        function jqUpdateSize(){
    // Get the dimensions of the viewport
    var width = $(window).width();

    $('#jqWidth').html(width);      // Display the width
            if(width < 760){
                mobile = true;
            }else{
                mobile = false;
            }
            
};
$(document).ready(jqUpdateSize);    // When the page first loads
$(window).resize(jqUpdateSize);     // When the browser changes size
        
        
        
        
        
        
        $("#execbtn").hover(        
              function() {
                  if(mobile == false){
                $( this ).html("Our Executive Team<hr class='menubtnline'>");
                  var hrwidthtimer = window.setInterval(function () {
                      var hrwidth = $(".menubtnline").width();

                    if(hrwidth< 50){
                        $('.menubtnline').css("width",hrwidth+1);

                    }else{
                        window.clearTimeout(hrwidthtimer);
                    }
                });

                  }
              }, function() {
                $( this ).find( "hr:last" ).fadeOut(200,function(){
                    $('.menubtnline').remove();
                });
              }
        );
        
        $("#pasteventsbtn").hover(
              function() {
                  if(mobile == false){
                $( this ).html("Past Events<hr class='menubtnline'>");
                  var hronewidthtimer = window.setInterval(function () {
                      var hrwidth = $(".menubtnline").width();

                    if(hrwidth< 50){
                        $('.menubtnline').css("width",hrwidth+1);
                    }else{
                        window.clearTimeout(hronewidthtimer);
                    }
                });
                  }

              }, function() {
                $( this ).find( "hr:last" ).fadeOut(200,function(){
                    $('.menubtnline').remove();
                });
              }
        );
        
        $("#contactusbtn").hover(
              function() {
                  if(mobile == false){
                $( this ).html("Contact Us<hr class='menubtnline'>");
                  var hrtwowidthtimer = window.setInterval(function () {
                      var hrwidth = $(".menubtnline").width();

                    if(hrwidth< 50){
                        $('.menubtnline').css("width",hrwidth+1);
                    }else{
                        window.clearTimeout(hrtwowidthtimer);
                    }
                });

                  }
              }, function() {
                $( this ).find( "hr:last" ).fadeOut(200,function(){
                    $('.menubtnline').remove();
                });
              }
        );
        
        
        //menu button item links
        $("#pasteventsbtn").on("click",function(){
            location.href="past_events/past-events.php";
        })
        $("#execbtn").on("click",function(){
            location.href="our_executive_team/our-executive-team.php";
        });
        
        
        
        
        
        
        
        
        //about sub topic buttns
        
        $("#mstitle").on("click",function(){
            $("#msp").fadeToggle();
            if($("#mstitle").children(".down").is(":visible")){
                $("#mstitle").children(".down").hide();
                $("#mstitle").children(".up").show();
            }else{
                $("#mstitle").children(".up").hide();
                $("#mstitle").children(".down").show(); 
            }
        });
        $("#tbtitle").on("click",function(){
            $("#tbp").fadeToggle();
            if($("#tbtitle").children(".down").is(":visible")){
                $("#tbtitle").children(".down").hide();
                $("#tbtitle").children(".up").show();
            }else{
                $("#tbtitle").children(".up").hide();
                $("#tbtitle").children(".down").show(); 
            }
        });
        $("#gtitle").on("click",function(){
            $("#gp").fadeToggle();
            if($("#gtitle").children(".down").is(":visible")){
                $("#gtitle").children(".down").hide();
                $("#gtitle").children(".up").show();
            }else{
                $("#gtitle").children(".up").hide();
                $("#gtitle").children(".down").show(); 
            }
        });
        //about highlight when hover
        $(".abouth").hover(
              function() {
                  $(this).css("color","#6E6E6E");
                  $(this).children(".up").css("border-bottom-color","#00B9F7");
                  $(this).children(".down").css("border-top-color","#00B9F7");
              },function(){
                  $(this).css("color","black");
                  $(this).children(".up").css("border-bottom-color","#0091C2");
                  $(this).children(".down").css("border-top-color","#0091C2");
              }
            );
        
        
        
        
    });
    
    </script>
    <body>
            
    <div class="container-narrow"> 
        <div class="row-fluid">
            <div class="col-sm-12">
                    <h1 class="title" style="padding-top: 35px;">Markham Ward <span id="titlenum">1</span> Youth Council</h1>
            </div>
        </div>
        <div class="row-fluid" style="height: 257px;">
            <div class="col-sm-4">
                  <div id="execbtn" class="homepagemenubuttons">Our Executive Team</div>
            </div>
            <div class="col-sm-4">
                  <div id="pasteventsbtn" class="homepagemenubuttons">Past Events</div>
            </div>
            <div class="col-sm-4">
                  <div id="contactusbtn" class="homepagemenubuttons">Contact Us</div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-12">
                  <h2 id="aboutustitle">About Us</h2>
            </div>
        </div>
        <div class="row-fluid" id="aboutusp">
            <div class="col-sm-12">
                  <p>We are a youth-led non-profit organization which provides various opportunities to youth to create a positive impact in the community.<br><br>
Our organization consists of youth living or attending a high school in the Markham Ward 6 area, hence the name. Our focus is on empowering the youth who will take on leadership roles to manage the council, therefore the decisions coming from the council effectively reflect the voices of the youth.</p>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-4 aboutsub">
                <div class="row-fluid">
                    <h4 id="mstitle" class="abouth">Mission Statement <span class="down"></span><span class="up"></span></h4>
                </div>
                <div class="row-fluid" id="msp">
                <p>Our mission is to empower youth in our community and provide opportunities for them to be involved in the City of Markham.</p>
                </div>
            </div>
            <div class="col-sm-4 aboutsub">
                <div class="row-fluid">
                <h4 id="tbtitle" class="abouth">The Benifits <span class="down"></span><span class="up"></span></h4>
                </div>
                <div class="row-fluid" id="tbp">
                <p>Upon becoming a member of our council, there are numerous chances to develop essential skills needed in other activities or jobs through the planning and participation of community events. Volunteer hours are also rewarded to those who take the initiative to help on the occasion of an event.</p>
                </div>
            </div>
            <div class="col-sm-4 aboutsub">
                <div class="row-fluid">
                <h4 id="gtitle" class="abouth">Goals<span class="down"></span><span class="up"></span></h4>
                </div>
                <div class="row-fluid" id="gp">
                    <ul>
                        <li><i>Community outreach</i> – Bringing the community together and helping the less fortunate</li>
                        <li><i>Youth Advisory</i> – Amplifying the voices of the youth with a strong message</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <?php include 'footer.php';?>
    </body>



</html>