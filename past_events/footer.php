<div class="row-fluid">
    <script>
    $(document).ready(function(){
        $(document).keypress(function(e) {
            if(e.which == 13){
               if($("#newssub").is(":focus")){
                   if(!$.trim($("#newssub").val())){
                        //alert("sorry, you can't leave your title blank");
                       $("#newssub").css("background-color","#D10000");
                       setTimeout(function() {
                            $("#newssub").css("background-color","black");
                        }, 50);
                       setTimeout(function() {
                            $("#newssub").css("background-color","#D10000");
                        }, 100);
                       setTimeout(function() {
                            $("#newssub").css("background-color","black");
                        }, 150);
                       
                       $("#newssub").attr("placeholder","Please give us your email!");
                       
                       
                    }
                }
            }
         });
    });
    </script>
            <div class="col-sm-12">
                <div class="footerdiv">
                    <div class="row-fluid" id="footerrow">
                        <div class="col-sm-4">
                            <input id="newssub" type="text" placeholder="Subcribe to our emails here!"/>
                        </div>
                        <div class="col-sm-4">
                            <a id="joinuslink" href="https://docs.google.com/a/gapps.yrdsb.ca/forms/d/1gsaRADIE13jMRuqH3RJobpfK13ks6Tvxg9Lrgr2nNNs/viewform?c=0&w=1" target="_blank">Join us</a>
                        </div>
                        <div class="col-sm-4">
                            <a id="twitter-icon" href="https://twitter.com/MW6YouthCouncil?ref_src=twsrc%5Etfw" target="_blank" class="socialmedialink"><img src="twitter-button.png" width="28px" height="28px"/>@MW6YouthCouncil</a>
                            <br>
                            <a id="facebook-icon" href="https://www.facebook.com/w6ycmkm/?fref=ts" target="_blank" class="socialmedialink"><img src="facebook-button.png" width="28px" height="28px"/> Markham W6YC</a>
                        </div>
                    </div>
                </div>
            </div>
</div>