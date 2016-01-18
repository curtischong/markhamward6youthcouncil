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
            
            //replace all function
            function replaceAll(str, find, replace){
                return str.replace(new RegExp(find, 'g'), replace);
            };
            
            //animations
            $(".title").fadeIn(600);
            var hrwidthtimer = window.setInterval(function () {
                
                var hrwidth = $("#titlehr").width();
                
                if(hrwidth< 200){
                    $('#titlehr').css("width",hrwidth+1);
                }else{
                    window.clearTimeout(hrwidthtimer);
                }
            });
            
                //get the php code to run
                 $.ajax({
                    type:'POST',
                     data:{ 
                         "email": "hi"
                    },
                    url: "retrieve-past-events.php",
                    success: function(docinfo){
                        infoparsed = JSON.parse(docinfo)
                        var arraylength = infoparsed.length;
                        var numofrows = arraylength/3;
                        numofrows = Math.ceil(numofrows);
                        //append the retrieved file names onto the page
                        var currentevent = 0;
                        for(var a=0;a < numofrows; a++){
                            //place rows
                            $("#past-events-container").append('<div class="row-fluid"></div>');
                            //alert(a);
                            //place colums
                            for(currenteventnum = 0;currenteventnum < 3; currenteventnum++){
                                if(infoparsed[currentevent] !== undefined){
                                    
                                    //replace the _ in the titles with spaces 
                                    var eventname = replaceAll(infoparsed[currentevent],"_"," ");
                                    var eventarray = eventname.split("-");
                                    var photolink = infoparsed[currentevent].split("-");
                                    var photourl = infoparsed[currentevent].substring(5,infoparsed[currentevent].length);
                                    
                                    //append the html elements
                                    $("#past-events-container").children().last().append('<div class="col-sm-4"><div class="row-fluid thumbnailphoto"><div class="thumbnailcon"><div class="thumbnail"></div></div></div><div class="row-fluid thumbnailtitle"><a href="'+infoparsed[currentevent]+'/'+photourl+'.php"><h4></h4></a></div></div>');
                                    //add the photo
                                    $("#past-events-container").children().last().children().last().children(".thumbnailphoto").children().children().css("background-image","url(/markhamward6youthcouncil/past_events/"+infoparsed[currentevent]+'/'+photourl+"-title.jpg)");
                                    //add the date of the event
                                    $("#past-events-container").children().last().children().last().children(".thumbnailtitle").children().children().html(eventarray[3]+" <br><h6>("+eventarray[2] + " "+eventarray[1]+")</h6>");
                                    currentevent = currentevent+1;
                                }
                            }
                        }
                        
                        //fade in the event container
                        $("#past-events-container").fadeIn(1300);
                    }
                });
            });
            
        </script>
    <div class="container-narrow" id="past-events-containter">
        <div class="col-sm-12">
            <div class="row-fluid">
                <h1 class="title">Past Events</h1>
            </div>
            <div class="row-fluid">
                <hr id="titlehr">
            </div>
        </div>
        <div id="past-events-container">
        
        
        
        
        
        </div>
    </div>
        <?php include '../footer-folders.php';?>
    </body>
</html>