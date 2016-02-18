<?php 
$page = 1;
include_once("includes/header.php"); 
?>
        
    <!-- ******home****** -->
    <section id="home" class="home section">
        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2">
                <center> 
                    <img src="images/logolg.png" class="img-responsive" width="70%"/>
                </center>
            </div>            
            <div class="col-md-10 col-md-offset-1">
                <br/>
                <h4 class="text-center">                        
                    PyCon India, the premier conference in India on using and developing the Python programming language is conducted annually by the Python developer community. It attracts the best Python programmers from across the country and abroad.
                </h4>                    
                <div class="items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
                    <div class="col-md-2" style="padding-top:15px">
                        <img src="images/gear3.png" class=""/>
                    </div>
                    <div class="col-md-8">
                        <h2 class="name"> Workshops </h2>
                        <h4 class="date">                                
                            October 2, 2016 [Saturday]
                        </h4>
                    </div>                       
                </div>
                <div class="items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
                    <div class="col-md-2" style="padding-top:15px">
                        <img src="images/mic.png" class=""/>
                    </div>
                    <div class="col-md-8">
                        <h2 class="name"> Conference </h2>
                        <h4 class="date">                                
                            October 3, 2016 [Sunday]
                        </h4>
                    </div>                       
                </div>  
                <div class="clearfix"></div>
                <div style="margin-top:30px;">            
                    <button id="js-ripple-btn" class="pymatbtn">
                        <i class="fa fa-ticket"></i> Buy Ticket
                        <svg class="ripple-obj" id="js-ripple">
                            <use width="4" height="4" xlink:href="#ripply-scott" class="js-ripple"></use>
                        </svg>
                    </button>           
                </div>
            </div>
        </div>
    </section>
    <!--//home-->


    <!-- ******speakers****** -->
    <section id="speakers" class="speakers section">
        <div class="row text-center">
            <h2 class="title text-center">
                <img src="images/icons/team.png" /><br/> SPEAKERS
            </h2>
            <div class="col-md-8 col-md-offset-2">
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="pybox">
                        <div class="icon-holder text-center">
                            <center>
                                <img src="images/ajith.jpg" class="img-responsive"/>
                            </center>
                        </div>
                        <div class="content">
                            <h4>Dr Ajith Kumar B.P</h4>                            
                            <a href="#">
                                <i class="social fa fa-github-square fa-2x social-fb"></i>
                            </a>
                            <a href="#">
                                <i class="social fa fa-twitter-square fa-2x social-tw"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="pybox">
                        <div class="icon-holder text-center">
                            <center>
                                <img src="images/ntoll.jpg" class="img-responsive"/>
                            </center>
                        </div>
                        <div class="content">
                            <h4>Nicholas H.Tollervey</h4>                           
                            <a href="#">
                                <i class="social fa fa-github-square fa-2x social-fb"></i>
                            </a>
                            <a href="#">
                                <i class="social fa fa-twitter-square fa-2x social-tw"></i>
                            </a>
                        </div>
                    </div>
                </div>              
            </div>
        </div>        
    </section>
    <!--//speakers-->


    <!-- ******schedule****** -->
    <section id="schedule" class="schedule section">
        <div class="row text-center">           
             <h2 class="title text-center">
                <img src="images/icons/schedule.png" /><br/> SCHEDULE
            </h2>
            <div class="tabbable-panel">
                <div class="tabbable-line">
                    <ul class="nav nav-tabs nav-justified responsive">
                        <li class="col-md-4 active">
                            <a href="#tab_default_1" data-toggle="tab">                                   
                                <h4 class="date">
                                    <i class="fa fa-rocket"></i>&nbsp;&nbsp;02 October 2015, Friday
                                </h4>                                    
                            </a>
                        </li>
                        <li class="col-md-4">
                            <a href="#tab_default_2" data-toggle="tab">                                   
                                <h4 class="date">
                                    <i class="fa fa-microphone"></i>&nbsp;&nbsp;03 October 2015, Saturday
                                </h4>                                    
                            </a>
                        </li>
                        <li class="col-md-4">
                            <a href="#tab_default_3" data-toggle="tab">                                  
                                <h4 class="date">
                                    <i class="fa fa-microphone"></i>&nbsp;&nbsp;04 October 2015, Sunday
                                </h4>                                    
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content responsive">
                        <div class="tab-pane active" id="tab_default_1">
                            <h6>
                                Workshops are two and a half hour long hands-on sessions. Each workshop is limited to 25 participants and a <br/>separate ticket is required to attend each workshop.
                            </h6>                                
                            <div class="table-responsive text-left">
                                <div class="col-md-10 col-md-offset-1 custyle">
                                    <table id="tableDiv" class="table custab">
                                        <thead>
                                            <tr>
                                                <th style="width:13%;" class="text-center pyred">TIME</th>
                                                <th style="width:50%;" class="text-center pyred">TITLE</th>
                                                <th style="width:20%;" class="text-center pyred">SPEAKER</th>
                                                <th style="width:18%;" class="text-center pyred">LOCATION</th>
                                            </tr> 
                                        </thead> 
                                        <tbody> 
                                            <tr>
                                                <td class="pyred">08.30 AM</td>
                                                <td>Registration & Breakfast</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="pyred">09.00 AM</td>
                                                <td>Introductions</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="pyred">09.30 AM</td>
                                                <td>Learn Python in Minutes</td>
                                                <td class="pytablefont">Kracekumar Ramaraju</td>
                                                <td class="pytablefont">Auditorium 01</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Security Toolsmithing: Writing security tools in Python</td>
                                                <td class="pytablefont">Yashin Mehaboobe</td>
                                                <td class="pytablefont">Auditorium 02</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Scrape Anything - Even the most difficult sites</td>
                                                <td class="pytablefont">Shashank Shekhar</td>
                                                <td class="pytablefont">Auditorium 03</td>
                                            </tr> 
                                            <tr>
                                                <td class="pyred">01.00 PM</td>
                                                <td>Learn Python in Minutes</td>
                                                <td class="pytablefont">Kracekumar Ramaraju</td>
                                                <td class="pytablefont">Auditorium 01</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Getting Started with Django</td>
                                                <td class="pytablefont">Yashin Mehaboobe</td>
                                                <td class="pytablefont">Auditorium 02</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Mobile Application development with python(kivy)</td>
                                                <td class="pytablefont">Shashank Shekhar</td>
                                                <td class="pytablefont">Auditorium 03</td>
                                            </tr>
                                            <tr>
                                                <td class="pyred">04.30 PM</td>
                                                <td>Decorators demystified</td>
                                                <td class="pytablefont">Kracekumar Ramaraju</td>
                                                <td class="pytablefont">Auditorium 01</td>
                                            </tr>  
                                            <tr>
                                                <td></td>
                                                <td>Test your web app with Selenium</td>
                                                <td class="pytablefont">Yashin Mehaboobe</td>
                                                <td class="pytablefont">Auditorium 02</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>ExpEYES : Python Powered Open Source Portable Science Lab</td>
                                                <td class="pytablefont">Shashank Shekhar</td>
                                                <td class="pytablefont">Auditorium 03</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_default_2">
                            <h6>
                                See what's going on in the Python world, meet your fellow Pythonistas, share your knowledge and experience, <br/>make contacts, brainstorm projects, discuss prospects.
                            </h6>
                            <div class="table-responsive text-left">
                                <div class="col-md-10 col-md-offset-1 custyle">
                                         <table id="tableDiv" class="table custab">
                                        <thead>
                                            <tr>
                                                <th style="width:13%;" class="text-center pyred">TIME</th>
                                                <th style="width:50%;" class="text-center pyred">TITLE</th>
                                                <th style="width:20%;" class="text-center pyred">SPEAKER</th>
                                                <th style="width:18%;" class="text-center pyred">LOCATION</th>
                                            </tr>
                                        </thead> 
                                        <tbody> 
                                            <tr>
                                                <td class="pyred">08.30 AM</td>
                                                <td>Registration & Breakfast</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="pyred">09.00 AM</td>
                                                <td>Introductions</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="pyred">09.30 AM</td>
                                                <td>Learn Python in Minutes</td>
                                                <td class="pytablefont">Kracekumar Ramaraju</td>
                                                <td class="pytablefont">Auditorium 01</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Security Toolsmithing: Writing security tools in Python</td>
                                                <td class="pytablefont">Yashin Mehaboobe</td>
                                                <td class="pytablefont">Auditorium 02</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Scrape Anything - Even the most difficult sites</td>
                                                <td class="pytablefont">Shashank Shekhar</td>
                                                <td class="pytablefont">Auditorium 03</td>
                                            </tr> 
                                            <tr>
                                                <td class="pyred">01.00 PM</td>
                                                <td>Learn Python in Minutes</td>
                                                <td class="pytablefont">Kracekumar Ramaraju</td>
                                                <td class="pytablefont">Auditorium 01</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Getting Started with Django</td>
                                                <td class="pytablefont">Yashin Mehaboobe</td>
                                                <td class="pytablefont">Auditorium 02</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Mobile Application development with python(kivy)</td>
                                                <td class="pytablefont">Shashank Shekhar</td>
                                                <td class="pytablefont">Auditorium 03</td>
                                            </tr>
                                            <tr>
                                                <td class="pyred">04.30 PM</td>
                                                <td>Decorators demystified</td>
                                                <td class="pytablefont">Kracekumar Ramaraju</td>
                                                <td class="pytablefont">Auditorium 01</td>
                                            </tr>  
                                            <tr>
                                                <td></td>
                                                <td>Test your web app with Selenium</td>
                                                <td class="pytablefont">Yashin Mehaboobe</td>
                                                <td class="pytablefont">Auditorium 02</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>ExpEYES : Python Powered Open Source Portable Science Lab</td>
                                                <td class="pytablefont">Shashank Shekhar</td>
                                                <td class="pytablefont">Auditorium 03</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab_default_3">
                            <h6>
                                Workshops are two and a half hour long hands-on sessions. Each workshop is limited to 25 participants <br/>and a separate ticket is required to attend each workshop.
                            </h6>
                            <div class="table-responsive text-left">
                                <div class="col-md-10 col-md-offset-1 custyle">
                                          <table id="tableDiv" class="table custab">
                                        <thead>
                                           <tr>
                                                <th style="width:13%;" class="text-center pyred">TIME</th>
                                                <th style="width:50%;" class="text-center pyred">TITLE</th>
                                                <th style="width:20%;" class="text-center pyred">SPEAKER</th>
                                                <th style="width:18%;" class="text-center pyred">LOCATION</th>
                                            </tr>
                                        </thead> 
                                        <tbody> 
                                            <tr>
                                                <td class="pyred">08.30 AM</td>
                                                <td>Registration & Breakfast</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="pyred">09.00 AM</td>
                                                <td>Introductions</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="pyred">09.30 AM</td>
                                                <td>Learn Python in Minutes</td>
                                                <td class="pytablefont">Kracekumar Ramaraju</td>
                                                <td class="pytablefont">Auditorium 01</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Security Toolsmithing: Writing security tools in Python</td>
                                                <td class="pytablefont">Yashin Mehaboobe</td>
                                                <td class="pytablefont">Auditorium 02</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Scrape Anything - Even the most difficult sites</td>
                                                <td class="pytablefont">Shashank Shekhar</td>
                                                <td class="pytablefont">Auditorium 03</td>
                                            </tr> 
                                            <tr>
                                                <td class="pyred">01.00 PM</td>
                                                <td>Learn Python in Minutes</td>
                                                <td class="pytablefont">Kracekumar Ramaraju</td>
                                                <td class="pytablefont">Auditorium 01</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Getting Started with Django</td>
                                                <td class="pytablefont">Yashin Mehaboobe</td>
                                                <td class="pytablefont">Auditorium 02</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Mobile Application development with python(kivy)</td>
                                                <td class="pytablefont">Shashank Shekhar</td>
                                                <td class="pytablefont">Auditorium 03</td>
                                            </tr>
                                            <tr>
                                                <td class="pyred">04.30 PM</td>
                                                <td>Decorators demystified</td>
                                                <td class="pytablefont">Kracekumar Ramaraju</td>
                                                <td class="pytablefont">Auditorium 01</td>
                                            </tr>  
                                            <tr>
                                                <td></td>
                                                <td>Test your web app with Selenium</td>
                                                <td class="pytablefont">Yashin Mehaboobe</td>
                                                <td class="pytablefont">Auditorium 02</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>ExpEYES : Python Powered Open Source Portable Science Lab</td>
                                                <td class="pytablefont">Shashank Shekhar</td>
                                                <td class="pytablefont">Auditorium 03</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//schedule-->


    <!-- ******venue****** -->
    <section id="venue" class="venue section">
        <div class="row text-center">          
             <h2 class="title text-center">
                <img src="images/icons/venue.png" /><br/> VENUE
            </h2>             
            <div class="col-md-6 col-md-offset-3">
                <div class="pybox">
                    <center>
                        <img src="images/delhi.jpg" class="img-responsive"/>
                    </center>
                    <div class="content text-center">
                        <h3 style="text-align:center;">
                            <a href="#">
                                NIMHANS Convention Center, Bangalore
                            </a>
                        </h3>
                        <span class="help-block">
                            NIMHANS Hospital Premises,
                            <br/>
                            Hosur Road, Bangalore- 560029
                            <br/>
                            Landmark: Near Dairy Circle
                            <br/>
                        </span>
                        <a href="#" target="_blank" class="btn btn-pycon">
                            <i class="fa fa-location-arrow"></i> Find Directions
                        </a>
                        <a href="#" target="_blank" class="btn btn-pycon">
                            <i class="fa fa-cab"></i> Book a Cab
                        </a>
                        <a href="#" target="_blank" class="btn btn-pycon">
                            <i class="fa fa-building"></i> Book Hotel
                        </a>
                    </div>
                </div>
            </div>                    
        </div>
    </section>
    <!--//venue-->


    <!-- ******sponsors****** -->
    <section id="sponsors" class="sponsors section">
        <div class="row text-center">           
             <h2 class="title text-center">
                <img src="images/icons/sponsors.png" /><br/> SPONSORS
            </h2>
            <div class="col-md-12">
                <h3 class="date text-center">Platinum</h3>
                <br/>
                <div class="col-md-4">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo1.jpg" />
                            </center>
                        </a>
                        <p>Zopper is India's largest hyper local mobile marketplace featuring over 5,00,000 offline retailers. Founded by serial entrepreneurs Surjendu Kulia and Neeraj Jain, Zopper taps on the benefits of shopping at a retail store and marries them with the convenience of shopping via mobile phones.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo1.jpg" />
                            </center>
                        </a>
                        <p>Zopper is India's largest hyper local mobile marketplace featuring over 5,00,000 offline retailers. Founded by serial entrepreneurs Surjendu Kulia and Neeraj Jain, Zopper taps on the benefits of shopping at a retail store and marries them with the convenience of shopping via mobile phones.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo1.jpg" />
                            </center>
                        </a>
                        <p>Zopper is India's largest hyper local mobile marketplace featuring over 5,00,000 offline retailers. Founded by serial entrepreneurs Surjendu Kulia and Neeraj Jain, Zopper taps on the benefits of shopping at a retail store and marries them with the convenience of shopping via mobile phones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h3 class="date text-center">Gold</h3>
                <br/>
                <div class="col-md-6">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo5.png" />
                            </center>
                        </a>
                        <p>Red Hat is the world's leading provider of open source software solutions, using a community-powered approach to reliable and high-performing cloud, Linux, middleware, storage and virtualization technologies.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo2.png" />
                            </center>
                        </a>
                        <p>Goibibo.com is a leading online travel aggregator. Founded in late 2009, Goibibo has created a significant mind and market share, driven by its core tenant of seamless, fastest and trusted user experience - be it in terms of quickest search and checkout flow;</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h3 class="date text-center">Silver</h3>
                <br/>
                <div class="col-md-6">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo1.jpg" />
                            </center>
                        </a>
                        <p>Zopper is India's largest hyper local mobile marketplace featuring over 5,00,000 offline retailers. Founded by serial entrepreneurs Surjendu Kulia and Neeraj Jain, Zopper taps on the benefits of shopping at a retail store and marries them with the convenience of shopping via mobile phones.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo1.jpg" />
                            </center>
                        </a>
                        <p>Zopper is India's largest hyper local mobile marketplace featuring over 5,00,000 offline retailers. Founded by serial entrepreneurs Surjendu Kulia and Neeraj Jain, Zopper taps on the benefits of shopping at a retail store and marries them with the convenience of shopping via mobile phones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h3 class="date text-center">Associate</h3>
                <br/>
                <div class="col-md-6">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo1.jpg" />
                            </center>
                        </a>
                        <p>Zopper is India's largest hyper local mobile marketplace featuring over 5,00,000 offline retailers. Founded by serial entrepreneurs Surjendu Kulia and Neeraj Jain, Zopper taps on the benefits of shopping at a retail store and marries them with the convenience of shopping via mobile phones.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo1.jpg" />
                            </center>
                        </a>
                        <p>Zopper is India's largest hyper local mobile marketplace featuring over 5,00,000 offline retailers. Founded by serial entrepreneurs Surjendu Kulia and Neeraj Jain, Zopper taps on the benefits of shopping at a retail store and marries them with the convenience of shopping via mobile phones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h3 class="date text-center">Accomodation</h3>
                <br/>
                <div class="col-md-6">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo1.jpg" />
                            </center>
                        </a>
                        <p>Zopper is India's largest hyper local mobile marketplace featuring over 5,00,000 offline retailers. Founded by serial entrepreneurs Surjendu Kulia and Neeraj Jain, Zopper taps on the benefits of shopping at a retail store and marries them with the convenience of shopping via mobile phones.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pybox">
                        <a href="#">
                            <center>
                                <img class="img-responsive" src="images/spo1.jpg" />
                            </center>
                        </a>
                        <p>Zopper is India's largest hyper local mobile marketplace featuring over 5,00,000 offline retailers. Founded by serial entrepreneurs Surjendu Kulia and Neeraj Jain, Zopper taps on the benefits of shopping at a retail store and marries them with the convenience of shopping via mobile phones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//sponsors-->


    <!-- ******blog****** -->
    <section id="blog" class="blog section" style="margin-bottom:60px;">
        <div class="row text-center">
            <h2 class="title text-center">
                <img src="images/icons/blog.png" /><br/> WHAT'S HAPPENING?
            </h2>
            <div class="col-md-6">
                <div class="twitter-wrapper pybox">
                    <div class="tweetline">
                        <!-- start sw-rss-feed code -->
                        <!-- start feedwind code -->
                        <script type="text/javascript">document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');</script>
                        <script type="text/javascript">(function() {var params = {rssmikle_url: "https://in.pycon.org/blog/feeds/all.atom.xml",rssmikle_frame_width: "100%",rssmikle_frame_height: "406",frame_height_by_article: "0",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "off",rssmikle_title_sentence: "PyCon India Blog",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0E98C5",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",item_description_style: "text+tn",item_thumbnail: "full",item_thumbnail_selection: "auto",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; "><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.--></div><!-- end feedwind code -->
                        </script>
                        <script type="text/javascript" src="js/rss-feed.js"></script>
                        <!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. -->
                        <div style="text-align:right; width:180px;">
                        </div>
                        <!-- end sw-rss-feed code -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="twitter-wrapper pybox">
                    <div class="tweetline">
                        <a class="twitter-timeline" data-dnt="true" data-chrome="nofooter transparent noborders" href="https://twitter.com/pyconindia" data-widget-id="413600400701272065">Tweets by @pyconindia</a>
                        <script>
                        ! function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0],
                                p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//blog-->
        

<?php include_once("includes/footer.php"); ?>

<script>
$(function(){
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();           

        if($(window).scrollTop() + $(window).height() == $(document).height() || scroll == 0) 
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