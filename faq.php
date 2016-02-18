<?php 
$page = 3;
include_once("includes/header.php"); 
?>
        
    <!-- ******others****** -->
    <section id="others" class="others section"> 
        <div class="row text-center">
            <div class="col-md-12 sponsorship">
                <div class="col-md-8 col-md-offset-2">
                      
                     <h2 class="title text-center">
                <img src="images/icons/faq.png" /><br/> FAQ
            </h2>
                </div>            
                <div class="col-md-10 col-md-offset-1 text-left">
                    <br/>
                   <!--  <br/>
                    <h2 class="text-center">FAQ: Frequently Asked Questions</h2>
                    <br/> -->
                    <p>
                        <span><b>Q. How do I upload presentations to the site?</b><br></span>
                        <span>A. We don't support presentation uploads yet. Please upload your presentation to a public site such as SlideShare or Google Docs and use that link in your talk's description.</span>
                    </p>
                    <br/>
                    <p>
                        <span><b>Q. My question is not listed here / I am still unclear about a few things. Whom should I contact?</b><br></span>
                        <span>A. Please send an email to contact@in.pycon.org.</span>
                    </p>
                    <br/>
                    <p>
                        <span><b> Q. Will the Internet and WiFi setup be good enough for a large crowd? Should I get a datacard?</b><br></span>
                        <span>A. We try really hard to arrange good Internet at the venue. Most of the times it is adequate. But the unpredictable amount of usage during the event sometimes causes some problems. So it is fine if you don’t carry a data card, but there is no harm in being prepared for the worst.</span>
                    </p>
                    <br/>
                    <p>
                        <span><b> Q. What are the workshop and conference timings like?</b><br></span>
                        <span>A. Workshop day (Oct 2nd): 08:00 AM - 06:30 PM.<br/></span>
                        <span> Conference day (Oct 3rd and 4th): 08:00 AM - 5.30 PM.</span>
                    </p>
                    <br/>
                    <p>
                        <span><b> Q. What all does the Conference ticket(Oct 3 &amp; 4) include? </b><br></span>
                        <span>A. Full conference pass for two days. <br>Breakfast, Lunch and Hi-Tea.<br>It also includes the PyCon India T-shirt which will be distributed on Oct 4.</span>
                    </p>
                    <br/>
                    <p>
                        <span><b> Q. My talk is not selected for conference, can I opt for OpenSpace? </b><br></span>
                        <span>A. Yes. <a href="https://in.pycon.org/cfp/pycon-india-2015-open-spaces/proposals/">Submit CFP for OpenSpace here.</a></span>
                    </p>
                    <br/>
                    <p>
                        <span><b> Q. What is the screening process of OpenSpace talk? </b><br></span>
                        <span>A. No screening process <br></span>
                        <span> We are trying to be better organized upfront by knowing number of OpenSpace talks. This will help organizing team plan to get all logictis reqired.</span>
                    </p>
                    <br/>
                </div> 
            </div>
        </div>        
    </section>
    <!--//others-->

<?php include_once("includes/footer.php"); ?>

<script>
$(function(){
    $(".overbg").fadeOut('fast','swing');
    // $(".skyline").fadeOut('fast','swing');

    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();         

        if($(window).scrollTop() + $(window).height() == $(document).height()) 
        {
            $(".overbg").fadeIn('fast','swing');
            // $(".skyline").fadeIn('fast','swing');
        }
        else
        {
            $(".overbg").fadeOut('fast','swing');
            // $(".skyline").fadeOut('fast','swing');
        }
    });
});
</script>