<!DOCTYPE html>
<html>
	<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>কৃষি তথ্য ও প্রযুক্তি</title>
		
		
	<link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

  <link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap.css">
	 <link rel="stylesheet"  href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	 <link rel="stylesheet"  href="font-awesome-4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="Rstyle.css">
	</head>



	<body>

<header >
     <nav class="navbar navbar-default" data-spy="affix" data-offset-top="197"  id="b">
  		<div class="container" id="bar" >


        <!--collapse navbar button--> 
        <button type="button" class="navbar-toggle"data-toggle="collapse" data-target="#navi">

          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </button>
        <!--end collapse navbar button--> 




    <div class="navbar-header">
      <a class="navbar-brand" href="Representor.php" id="A">কৃষি তথ্য ও প্রযুক্তি </a></h1>
    </div>


    <div class="collapse navbar-collapse" id="navi">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php#aboutus">আমাদের সম্পর্কে</a></li>
	  <li><a href="#">বিশেষজ্ঞকে জিজ্ঞাসা করুন</a></li>
		
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">কৃষি তথ্য বিভাগ<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">কৃষি তথ্য </a>
              <ul>
                <li><a href="Crops.php">শস্যদানা</a></li>
                <li><a href="Vegetable.php">শাকসবজি</a></li>
                <li><a href="Flower.php">ফুল</a></li>
                <li><a href="Fruit.php">ফল</a></li>

             </ul>
            </li>
            
          <li><a href="AGTUBE.php">কৃষিটিউব</a>
          
            </li>
          <li><a href="Comment.php">অন্যান্য</a></li>
        

        </ul>
      </li>
      
      
      
      <li><a href="#">ফোরাম</a></li>
		  
      <!--login signup -->
      
	  <li><button class="glyphicon glyphicon-user btn btn-default login_btn" data-toggle="modal" data-target="#myModal">
    </button></li>
	
	<li><button  class="btn btn-default glyphicon glyphicon-search search_btn" data-toggle="modal" data-target="#search"></button></li>
    
    <li><button  class="btn btn-default glyphicon glyphicon-list user_btn" data-toggle="modal" data-target="#online"></button></li>

      	
      
    </ul>
    </div>
    
  
  <!-- Large modal -->

  <div class="modal fade" id="search" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal_content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal_title">Search</h4>
        </div>
        <div class="modal-body">
          <form id="searchForm" method="post">
          		<fieldset>
          			<input id="s" type="text" />
          			<input type="submit" value="Submit" id="submitButton" />
          		</fieldset>

          </form>

          <div id="resultsDiv"></div>
        
        </div>
      </div>
    </div>
  </div>
    
         
<div class="modal fade" id="online" role="dialog">
    <div class="modal_content">
    <div class="modal-header">
    <div class="modal-background">
        <a href="videochat.html">Make A Video Call</a>
    </div>  
 </div>  
 </div>  
</div>
  


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration - 
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            Save & Continue</button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="https://www.facebook.com/" class="btn btn-primary">Facebook</a> <a href="https://mail.google.com/" class="btn btn-danger">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <!--end modal-->

	
	
</nav>
        <div class="head">
          <h1 img src="img/logo.png" class="heading">উন্নত তথ্য ও প্রযুক্ততিে <br>সবুজ বাংলা হবে সোনার বাংলা।</h1>
         </div>

</header>


<!-- About section -->
        <section class="About ">
            <h2 class="text-center" id="About_h3">কৃষি তথ্য ও প্রযুক্তি সম্পর্কে</h2>
            <p class="Peragraph">কৃষি তথ্য ও প্রযুক্তিতে আপনাকে স্বাগতম |উন্নত প্রযুক্তি ও  কৃষি বিষয়ক যাবতীয়  সব ধরনের তথ্য নিয়ে  এই ওয়েবসাইট তৈরী করা হয়েছে ।এই  সাইটটি  গণমাধ্যম  ও  ইন্টারনেটের   সাহায্যে  উন্নত কৃষি  তথ্য  ও  প্রযোক্তি  নিয়ে  গঠিত |এই  ওয়েবসাইটটি   উচ্চপদস্থ  কৃষি  কর্মকর্তাদের  নিজেস্ব  গবেষণা  ও  তাদের পরামর্শ  নিয়ে  গঠিত| <br>(লক্ষ  ও  উদ্দেশ ):
বিভিন্ন  উৎস  থেকে  প্রাপ্ত  আধুনিক  কৃষি  তথ্য  ও  প্রযুক্তি  সহজ  সরল  সাবলীলভাবে  কৃষকদের  কাছে  বৈদ্যম  আকারে  পিছানোর  ব্যবস্থা  করা | কৃষকদের  নানারকম  সমস্যার  সমাধানের  জন্য  এক্সপার্টদের  উপদেশ  দেয়া  এবং  এক্সপার্টদের  সাথে  সরাসরি  যোগাযোগ  ও  কথা  বলার  সুযোগ  করে  দেয়া |
আমাদের  ওয়েবসাইটটি  কৃষকদের  এলাকায়  কোনো  নতুন  রোগ  বা  আবহাওয়া   ও  জলবায়ু  পরিবর্তনের  আগাম  বার্তা পাঠাবে  কৃষককে  সচেতন  করতে|
      </p>
        </section>


        <!-- catagorey-->
<section class="catagorey">
<h2 class="text-center">ফসলের জাতসমূহ</h2>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <img src="img/cereales.jpg">
      <h3>শস্য</h3>
      <p><i class="fa fa-cog"></i>
        চাষ পদ্ধতি<p>
        <p><i class="fa fa-cog"></i>
        পরিচর্যা ও সংরক্ষণ<p>
        <p><i class="fa fa-cog"></i>
        মাটি ও জলবায়ু<p>
        <p><i class="fa fa-cog"></i>
      রোগ শনাক্ত প্রতরিোধ ও সাবধানতা <p>
        


    </div>
    <div class="col-md-3">
      <img src="img/vegetable.jpg">
      <h3>শাকসবজি</h3>
      <p><i class="fa fa-cog"></i>
        চাষ পদ্ধতি<p>
        <p><i class="fa fa-cog"></i>
        পরিচর্যা ও সংরক্ষণ<p>
        <p><i class="fa fa-cog"></i>
        মাটি ও জলবায়ু<p>
        <p><i class="fa fa-cog"></i>
      রোগ শনাক্ত প্রতরিোধ ও সাবধানতা <p>


    </div>
    <div class="col-md-3">
      <img src="img/fruits.jpg">
      <h3>ফল</h3>
      <p><i class="fa fa-cog"></i>
        চাষ পদ্ধতি<p>
        <p><i class="fa fa-cog"></i>
        পরিচর্যা ও সংরক্ষণ<p>
        <p><i class="fa fa-cog"></i>
        মাটি ও জলবায়ু<p>
        <p><i class="fa fa-cog"></i>
      রোগ শনাক্ত প্রতরিোধ ও সাবধানতা <p>


    </div>
    <div class="col-md-3">
      <img src="img/flower.jpg">
      <h3>ফুল</h3>
      <p><i class="fa fa-cog"></i>
        চাষ পদ্ধতি<p>
        <p><i class="fa fa-cog"></i>
        পরিচর্যা ও সংরক্ষণ<p>
        <p><i class="fa fa-cog"></i>
        মাটি ও জলবায়ু<p>
        <p><i class="fa fa-cog"></i>
      রোগ শনাক্ত প্রতরিোধ ও সাবধানতা <p>


    </div>
  </div>



</div><!--end container-->

</section>






<!--gallery-->
<section class="Another">

<h2 class="text-center"> Gallery </h2>

<ul class="Gallery clearfix">
       
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    </figure>
  <p>ছত্রাক আক্রমণ</p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    </figure>
  <p>টমেটো বালাই</p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    
    </figure>
  <p>বিহঙ্গম দাগ</p>

 </li>
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    </figure>
  <p>ছত্রাক আক্রমণ</p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    </figure>
  <p>টমেটো বালাই</p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    
    </figure>
  <p>বিহঙ্গম দাগ</p>

 </li>
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    </figure>
  <p>ছত্রাক আক্রমণ</p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    </figure>
  <p>টমেটো বালাই</p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    
    </figure>
  <p>বিহঙ্গম দাগ</p>

 </li>
 

  <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    </figure>
  <p>ছত্রাক আক্রমণ</p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    </figure>
  <p>টমেটো বালাই</p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/vegetable.jpg">
    
    </figure>
  <p>বিহঙ্গম দাগ</p>

 </li>
 
 
 
</ul>

</section>
<!-- End Gallery -->




<!--testimonial -->
<section class="testimonial">
<h2 class="text-center">আমাদের সম্পর্কে </h2>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            
                <p>
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                </p>
                <cite><img src="img/bigstock-Father-s-and-son-s-hands-holdi-49881893.jpg">Deepita Saha</cite>
            
        </div>
        <div class="col-md-4">
            
                <p>
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                </p>
                <cite><img src="img/bigstock-Father-s-and-son-s-hands-holdi-49881893.jpg">Meher Afroj</cite>
            
        </div>
        <div class="col-md-4">
            
                <p>
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                </p>
                <cite><img src="img/bigstock-Father-s-and-son-s-hands-holdi-49881893.jpg">mozzammel hoque</cite>
            
        </div>
    </div>

     <div class="row">
        <div class="col-md-4">
            
                <p>
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                </p>
                <cite><img src="img/bigstock-Father-s-and-son-s-hands-holdi-49881893.jpg">Deepita Saha</cite>
            
        </div>
        <div class="col-md-4">
            
                <p>
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                    we build the website website hooo oo koo foioif kkokfo
                </p>
                <cite><img src="img/bigstock-Father-s-and-son-s-hands-holdi-49881893.jpg">Meher Afroj</cite>
            
        </div>
       
    </div>

</div>

</section>

<!--end testimonial -->




<!--footer1-->
<section class="foot1">
    <!--Grid System -->
    <div class="footer1">
      <div clas="container">
        <div class="row" > 
         <div class="col-md-3" id="ROW">
          <i class="fa fa-phone"> </i> <!-- icons -->
          <h3>এক্সপার্টদের  সাথে  কথা  বলুন</h3>
          <p class="style_grid"><br>আমাদের  এই  ওয়েবসাইট  এ  লগইন  করে  সহজেই  আমাদের  কৃষি  এক্সপার্টদেড়  সাথে  কথা  বলতে  পারেন|
          </p>

        </div>
        
         <div class="col-md-3" id="ROW">


          <i class="fa fa-envelope"> </i> <!-- icons -->



          <h3>অনলাইন  কৃষি  বিষয়ক  সমস্যা সমাধান</h3>
          <p class="style_grid">আমাদের  এই  ওয়েবসাইট  আপনি  লগইন  না  করেও  সমস্যা  পোস্ট  করতে  পারেন| 
          </p>

        </div>
         <div class="col-md-3" id="ROW">

          <i class="fa fa-vcard"> </i> <!-- icons -->

          <h3>পরিচালক </h3>
          <p class="style_grid"><br>আমাদের  ওয়েবসাইটের  কিছু  কর্মী  আছেন  যারা  এলাকাভিত্তিক  কৃষকদের  আবহাওয়া ,জলবায়ু  এবং  নতুন  প্রযুক্তি  ও  উদ্ভাবন  সম্পর্কে  জানাবেন  এবং  কোনো  নতুন  রোগ  সম্পর্কে  সচেতন  করবেন|
          </p>

        </div>

         <div class="col-md-3" id="ROW">

          <i class="fa fa-play-circle-o"> </i> <!-- icons -->
                    <h3>কৃষিটিউব</h3>
          <p class="style_grid"><br>কৃষি  সংক্রান্ত  যাবতীয়  ছবি  এবং  ভিডিও  এই  ওয়েবসাইট  স্বয়ং  সমৃদ্ধ|
          </p>

        </div>



      </div>
    </div><!-- end container-->
  </div><!-- end grid system -->
</section>


<section class="footer2">
    <footer class="footer-bs">
        <div class="row">
            <div class="col-md-3 footer-brand animated fadeInLeft">
                <h2>Logo</h2>
                <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                <p>© 2017 All rights reserved</p>
            </div>
            <div class="col-md-4 footer-nav animated fadeInUp">
                <h4>Menu —</h4>
                <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Explores</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Advice</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 footer-social animated fadeInDown">
                <h4>Follow Us</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">RSS</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-ns animated fadeInRight">
                <h4>Newsletter</h4>
                <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
                <p>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div>   
				<!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>

</section>







 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>