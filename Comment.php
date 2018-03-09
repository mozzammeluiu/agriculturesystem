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
              .border{
             width: 60%;height:55%; border-radius: 10px;
             background: url(image.jpg) repeat;
             margin-left: 20%;
             margin-right: 30%;
             margin-top: 5%;
             
         }
         .pr{
           background: url(image.jpg) repeat;   
         }
         .border label{
             margin-left: 15%;
         }
         .Submit{
             border-radius: 2px;
         }
     </style>
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
      <a class="navbar-brand" href="index.php" id="A">কৃষি তথ্য ও প্রযুক্তি </a></h1>
    </div>


    <div class="collapse navbar-collapse" id="navi">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#aboutus">আমাদের সম্পর্কে</a></li>
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
                </h4>
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
        <div class="head">
          <h5 img src="img/logo.png" class="heading">উন্নত তথ্য ও প্রযুক্ততিে <br>সবুজ বাংলা হবে সোনার বাংলা।</h5>
         </div>

</header>


<!-- About section -->
        
              <div class="border">

  <form action="Comment.php" method="POST">

   <label> Name:<br> 
    <input type="text" name="Name" class="Input" style="width:225%;height:30px; border-radius: 5px; margin-left:15%;" required>
   </label>
   <br><br>
   <label> Comment: <br>
    <textarea name="Comment" class="Input" style="width:250%;height:200px; border-radius: 5px; margin-left:15%;" required></textarea>
   </label>
   <br><br>
   <input type="submit" name="Submit" value="PostComment" class="Submit" style="margin-left:74%;margin-top:-3.2%;">
  </form>   
 </div>
     
  
<?php
 if(isset($_POST['Submit'])){
  echo"<script>window.alert(\"Comment Uploaded\");</script>";

  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<b>Name:".$Name."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 
 fclose($read);
?>


        <!-- catagorey-->
<section class="catagorey">
<h2 class="text-center">ফসলের জাতসমূহ</h2>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <a href="Crops.php"><img src="img/cereales.jpg"></a>
      <a href="Crops.php"><h3>শস্য</h3></a>
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
      <a href="Vegetable.php"><img src="img/vegetable.jpg"></a>
      <a href="Vegetable.php"><h3>শাকসবজি</h3></a>
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
      <a href="Fruit.php"><img src="img/fruit.jpg"></a>
      <a href=""><h3>ফল</h3></a>
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
      <a href="Flower.php"><img src="img/flower.jpg"></a>
      <a href="Flower.php"><h3>ফুল</h3></a>
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
        <img src="img/tomato_endrot.jpg">
    </figure>
  <p>
                       টমেটো এন্ড  রোট
         
   </p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/tomato_blight.jpg">
    </figure>
 
       <a href="detail_disease.php">    <p>টমেটো ব্লাইট 
          
        </p></a>
 </li>
 <li>
    <figure class="photo">
        <img src="img/pith_necrosis.jpg">
    
    </figure>
  <p>
          পিত্ত  নেক্রোসিস
          
        </p>

 </li>
 <li>
    <figure class="photo">
        <img src="img/potato_blight.jpg">
    </figure>
  <p>
          পটেটো ব্লাইট
          
        </p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/potato_wart.jpg">
    </figure>
  <p>
          পটেটো ওয়ার্ট 
         
        </p>
 </li>
 <li>
    <figure class="photo">
        <img src="img/BotrytisDiseaseinMarigolds.jpg">
    </figure>
  <p>
         বটরিটিস ডিসিস ইন মেরিগোল্ড
          
  </p>
 </li>


  <li>
    <figure class="photo">
        <img src="img/CamelliaFlowerBlight.jpg">
    </figure>
  <p>
         ক্যামেলিয়া ফ্লাওয়ার ব্লাইট 
          
  </p>
 </li>
 

  <li>
    <figure class="photo">
        <img src="img/AlternariaLeafSpotonZinniaflower.jpg">
    </figure>
  <p>
          অল্টারনারিয়া লিফ স্পট অন জিনিয়া ফ্লাওয়ার 
          
  </p>
 </li>
 
 
 
</ul>

</section>
<!-- End Gallery -->


<!--testimonial -->
<section class="testimonial" id="aboutus">
<h2 class="text-center">আমাদের সম্পর্কে </h2>
<div class="container">
    <div class="row">
      
        <div class="col-md-12">
            <cite id="sir"><img src="profile/sir.jpg"></cite>
            <h4>মেন্টর সুমন আহমেদ</h4>
            
                <p>ছাত্র বিষয়ক প্রধান<br>
                ইউনাইটেড ইন্টারন্যাশনাল ইউনিভার্সিটি<br>
                </p>
            
        </div>

        

        <h4> টীম মেম্বার</h4>
      
        <div class="col-md-4">
            
                <p>
                     বিএসসি কম্পিউটার বিজ্ঞান |<br>
                     ইউনাইটেড ইন্টারন্যাশনাল ইউনিভার্সিটি |<br>
                     আইডি: ০১১১৪১০৯৪ |
                </p>
                <cite><img src="img/bigstock-Father-s-and-son-s-hands-holdi-49881893.jpg">দীপিতা সাহা</cite>
            
        </div>
        <div class="col-md-4">
            
                <p>
                     বিএসসি কম্পিউটার বিজ্ঞান |<br>
                     ইউনাইটেড ইন্টারন্যাশনাল ইউনিভার্সিটি |<br>
                     আইডি: ০১১১৪১০৯৪ |

                </p>
                <cite><img src="img/bigstock-Father-s-and-son-s-hands-holdi-49881893.jpg">মেহের আফরোজ মিশি</cite>
            
        </div>
        <div class="col-md-4">
            
                <p>
                     বিএসসি কম্পিউটার বিজ্ঞান |<br>
                     ইউনাইটেড ইন্টারন্যাশনাল ইউনিভার্সিটি |<br>
                     আইডি: ০১১১৪১০৯৫ |
                </p>
                <cite><img src="img/bigstock-Father-s-and-son-s-hands-holdi-49881893.jpg"> মোহাম্মদ মোজাম্মেল হক</cite>
            
        </div>
    </div>

     <div class="row">
        <div class="col-md-4">
            
                <p>
                     বিএসসি কম্পিউটার বিজ্ঞান |<br>
                     ইউনাইটেড ইন্টারন্যাশনাল ইউনিভার্সিটি |<br>
                     আইডি: ০১১১৪১০৯৪ |
                </p>
                <cite><img src="img/bigstock-Father-s-and-son-s-hands-holdi-49881893.jpg">Deepita Saha</cite>
            
        </div>
        <div class="col-md-4">
            
                <p>
                     বিএসসি কম্পিউটার বিজ্ঞান |<br>
                     ইউনাইটেড ইন্টারন্যাশনাল ইউনিভার্সিটি |<br>
                     আইডি: ০১১১৪১০৯৪ |
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
                    <a href="AGTUBE.html"><h3>কৃষিটিউব</h3></a>

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
                
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div>  
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