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


	 <link rel="stylesheet" type="text/css" href="style.css">
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      height: 300px;
      position: center;
      margin: auto;
  }
  .jumbotron h3
  {
    color: green;
    background-color:rgba(233,223,32,0.7); 
  }
  .jumbotron p
  {
    color: orange;
    background-color:rgba(233,223,221,0.7); 
  }
  #rh h4
  {
    margin-top: 40px;
    margin-bottom: 60px;
  }
  </style>
	</head>



	<body>

        
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
      <a class="navbar-brand" href="index.php" id="A">কৃষি তথ্য ও প্রযুক্তি </a></h1>
    </div>


    <div class="collapse navbar-collapse" id="navi">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">আমাদের সম্পর্কে</a></li>
	  <li><a href="#">বিশেষজ্ঞকে জিজ্ঞাসা করুন</a></li>
		
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">কৃষি তথ্য বিভাগ<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">কৃষি তথ্য </a>
              <ul class-"dropdown-menu">
                
                <li><a href="Crops.php">শস্যদানা</a></li>
                <li><a href="Vegetable.php">শাকসবজি</a></li>
                <li><a href="Flower.php">ফুল</a></li>
                <li><a href="Fruit.php">ফল</a></li>

             </ul>
            </li>
            <li><a href="AGTUBE.html">কৃষিটিউব</a>
          
            
              
            </li>
          <li><a href="#">অন্যান্য</a></li>
        

        </ul>
      </li>
      
      
      
      <li><a href="Comment.php">ফোরাম</a></li>
		  
      <!--login signup -->
      
	  <li><button class="glyphicon glyphicon-user btn btn-default login_btn" data-toggle="modal" data-target="#myModal">
    </button></li>
	
	<li><button  class="btn btn-default glyphicon glyphicon-search search_btn" data-toggle="modal" data-target="#search"></button></li>

      	
      
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
          <form action="search.php" id="searchForm"  method="post">
          		<fieldset>
          			<input id="s" type="text" name="search" placeholder="  Search For Crops"/>
          			<input type="submit" value="Submit" id="submitButton" />
          		</fieldset>

          </form>

          <div id="resultsDiv"></div>
        
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
                                <form action="login.php" method="post" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" placeholder="Email" name="email" required='required'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required='required'/>
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
                                <form action="regestration.php" method="post" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    
                                    <div class="col-sm-10">
                                        <div class="row">
                                            
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="name" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" required='required' placeholder="email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="" class="form-control" id="mobile" name="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password" required='required' placeholder="Password" />
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <a href="">cancel</a>
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
        




<!-- catagorey -->

<section class="veg">

<div class="container text-center">    
  <div class="row">

    <div class="jumbotron">
        
      
        <!--slider-->
             
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/fruit4.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/fruit4.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/fruit4.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/fruit4.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   <!--end slider-->

      
      
    </div> 
    <!--end jumbotron-->


    <div class="container text-center">
  <div class="row" id="rh">
    <h2>কৃষিটিউব</h2>
        <div class="col-sm-3">
          <div class="well">
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
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h3>বাংলাদেশে পেঁপে কৃষিকাজ</h3>
            <object width="100%" height="100%"data="https://www.youtube.com/v/toLcX4LBOBo">
              
          </object>

          </div>
        </div>

        <div class="col-sm-3">
          <div class="well">
            <h3>বাংলাদেশে পেঁপে কৃষিকাজ</h3>
            <object width="100%" height="100%"data="https://www.youtube.com/v/toLcX4LBOBo">
              
          </object>

          </div>
        </div>


         <div class="col-sm-3">
          <div class="well">
            <h3>পেয়ারা উদ্যোক্তাদের সাফল্য</h3>
          <object width="100%" height="100%"data="https://www.youtube.com/v/ONK3ZIx1n6Q">
          </object>
          </div>
        </div>
       <h4><a href="#">অন্যান্য ভিডিও</a></h4>
      </div>


      <div class="row" id="rh">
    
        <div class="col-sm-3">
          <div class="well">
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
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h3>বাংলাদেশে পেঁপে কৃষিকাজ</h3>
            <object width="100%" height="100%"data="https://www.youtube.com/v/toLcX4LBOBo">
              
          </object>

          </div>
        </div>

        <div class="col-sm-3">
          <div class="well">
            <h3>বাংলাদেশে পেঁপে কৃষিকাজ</h3>
            <object width="100%" height="100%"data="https://www.youtube.com/v/toLcX4LBOBo">
              
          </object>

          </div>
        </div>


         <div class="col-sm-3">
          <div class="well">
            <h3>পেয়ারা উদ্যোক্তাদের সাফল্য</h3>
          <object width="100%" height="100%"data="https://www.youtube.com/v/ONK3ZIx1n6Q">
          </object>
          </div>
        </div>
       <h4><a href="#">অন্যান্য ভিডিও</a></h4>
      </div>


            <div class="row" id="rh">
    
        <div class="col-sm-3">
          <div class="well">
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
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h3>বাংলাদেশে পেঁপে কৃষিকাজ</h3>
            <object width="100%" height="100%"data="https://www.youtube.com/v/toLcX4LBOBo">
              
          </object>

          </div>
        </div>

        <div class="col-sm-3">
          <div class="well">
            <h3>বাংলাদেশে পেঁপে কৃষিকাজ</h3>
            <object width="100%" height="100%"data="https://www.youtube.com/v/toLcX4LBOBo">
              
          </object>

          </div>
        </div>


         <div class="col-sm-3">
          <div class="well">
            <h3>পেয়ারা উদ্যোক্তাদের সাফল্য</h3>
          <object width="100%" height="100%"data="https://www.youtube.com/v/ONK3ZIx1n6Q">
          </object>
          </div>
        </div>
       <h4><a href="#">অন্যান্য ভিডিও</a></h4>
      </div>



            <div class="row" id="rh">
    
        <div class="col-sm-3">
          <div class="well">
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
        <div class="col-sm-3">
          <div class="well">
            <h3>বাংলাদেশে পেঁপে কৃষিকাজ</h3>
            <object width="100%" height="100%"data="https://www.youtube.com/v/toLcX4LBOBo">
              
          </object>

          </div>
        </div>

        <div class="col-sm-3">
          <div class="well">
            <h3>বাংলাদেশে পেঁপে কৃষিকাজ</h3>
            <object width="100%" height="100%"data="https://www.youtube.com/v/toLcX4LBOBo">
              
          </object>

          </div>
        </div>


         <div class="col-sm-3">
          <div class="well">
            <h3>পেয়ারা উদ্যোক্তাদের সাফল্য</h3>
          <object width="100%" height="100%"data="https://www.youtube.com/v/ONK3ZIx1n6Q">
          </object>
          </div>
        </div>
       <h4><a href="#">অন্যান্য ভিডিও</a></h4>
      </div>




</div>

    
    
        

  </div>


  
</div>

</section>




  <!--end catagorey-->






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