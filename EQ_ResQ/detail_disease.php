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
     <link rel="stylesheet" type="text/css" href="style1.css">
	</head>



	<body>

        
     <nav class="navbar navbar-default" data-spy="affix" data-offset-top="197"  id="b">
  		<div class="container" id="bar">


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
      <li><a href="index.php#aboutus">আমাদের সম্পর্কে</a></li>
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
            
          <li><a href="AGTUBE.php">কৃষিটিউব</a>
          
            </li>
          <li><a href="#">অন্যান্য</a></li>
        

        </ul>
      </li>
      
      
      
      <li><a href="#">ফোরাম</a></li>
		  
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
                                   
                                            
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="Name" />
                                            
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
                                <div class="form-group">
                                    <label for="Area" class="col-sm-2 control-label">
                                        Area</label>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <select class="form-control">
                                                    <option>Dhaka</option>
                                                    <option>Chittagong</option>
                                                    <option>Barishal</option>
                                                </select>
                                            </div>
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
        




<!-- catagorey -->

<!--head-->
<section class="veg">

<div class="container text-center">    
  <div class="row">
    <div class="jumbotron">
        
      <div >
             
        <img src="img/tomato_blight.jpg" class="img-responsive" >
      </div>
      
    </div> 
<div class="col-md-12">
     <div class="row">
        
        
        <div class="col-md-12">
          <div class="well">
          <h3>প্রাথমিক সমস্যা</h3>
            <p>টমেটো ফলাইট প্রাথমিকভাবে টমেটো গাছপালা এর পাতা প্রদর্শিত কিন্তু তারপর ডালপালা এবং ফল প্রভাবিত করতে যায় এটি গ্রীনহাউজ উদ্ভিদের তুলনায় উন্মুক্ত টমেটো উদ্ভিদের সাথে একটি সমস্যা। এই রোগটি সাধারণত লাইট ব্লাইট নামে পরিচিত
এটি একই ভাইরাস দ্বারা সৃষ্ট হয় যার ফলে আলু ফুটো হয়ে ওঠে বা এটির মতো হয় বা না হয়, কারণ এটি যুক্তরাজ্যের প্রায় প্রতিটি একক অ্যালোটমেন্টে উপস্থিত থাকে।</p>
</div>
        </div>
        </div>



      

      
     <div class="row">
        
        
        <div class="col-md-8">
          <div class="well">
          <h3>টোমাটো লাইটের সম্ভাব্য লক্ষণ </h3>
            <p> ১. ছোট বাদামি চিহ্নগুলি পাতার উপর প্রদর্শিত হয় যা ঝলকানি ধরে রাখে।<br>
     
২. গাছপালা নীচের অংশে পাতা তলদেশে ফাঙ্গা সংক্রমণের হালকা রঙিন প্যাচ থাকতে পারে।<br>
     
 ৩. ব্রাউন স্পট তারপর ডাল এবং শাখা প্রদর্শিত হবে, দ্রুত গভীর বাদামী কালো বাঁক। এই চিহ্ন প্রসারিত হবে এবং এই পর্যায়ে গাছপালা সাধারণ স্বাস্থ্য ব্যর্থ হতে শুরু করবে, ডালপালা এবং শাখা প্রশ্বাস এবং সম্ভবত পতিত হতে চালু করতে শুরু হবে। <br>
     
৪. শেষ পর্যন্ত ফল, উভয় সবুজ এবং পাকা, তাদের উপর বাদামী চিহ্ন দেখানো হবে। ক্ষতিগ্রস্ত পাতার শুকিয়ে শুকিয়ে ও শুকিয়ে যায়।।</p>
</div>
        </div>

        <div class="col-md-4">
          <div class="well" id="im">
           <img src="img/tomato-blight-leaf.jpg" class="img-responsive" >
        </div>
        </div>
        </div>


        <div class="row">
        
        
        <div class="col-md-12">
          <div class="well">
          <h3>টমেটো ব্লাইট চিকিৎসা</h3>
            <p>আপনার টমেটো গাছের টমেটোর টমেটোর ঝলকায় আক্রান্ত হচ্ছে এমন কোন প্রতিকার নেই, এমন কিশোর যারা শক্তিশালী কীটনাশক ব্যবহার করতে পারে, তারা একবার রোগের আঘাত হানার পরে অসহায়। যাইহোক, আপনি আবারও ঘটছে রোগের সম্ভাবনা হ্রাস করার জন্য আগামী বছর গ্রহণ করতে পারে এমন ব্যবস্থা আছে। কোনও ফসলে ফলক দ্বারা প্রভাবিত গাছগুলি খনন ও পোড়াতে হবে, কোনও অবস্থায় কম্পোস্ট হ্যাপে তাদের কোনও কারণ নেই।<br>

১. টমেটো ফুটো প্রতিরোধ করার জন্য আপনি অনেক কিছু করতে পারেন এবং এইগুলি নীচে তালিকাভুক্ত করা হয়েছে:<br>

  ২. সমগ্র ক্রমবর্ধমান ঋতু জুড়ে ভাল স্বাস্থ্যবিধি অনুশীলন উদ্ভিদ এবং পার্শ্ববর্তী মাটি থেকে ক্ষয়প্রাপ্ত পাতা সরান<br>
     
    ৩. প্রতি বছর ফসল আবর্তন অনুশীলন। দুই বছর চলমান একই মাটিতে টমেটোর চাষ করা উচিত নয়। ঝোপঝাড়, বিশেষ করে, শীতকালে মাটি ধরে থাকে এবং একই বছরে একই মাটিতে বর্ধিত টমেটো উদ্ভিদ পুনরায় সংক্রমিত হবে।<br>
     
    ৪. সংক্রামিত গাছপালা সব অংশে পুড়িয়ে, তাদের কম্পোস্ট গাদা না করা এবং মাটিতে তাদের খনন না।<br>
     
   ৫. নীচের পাতা এবং পার্শ্ব উপরিভাগগুলি অপসারণ করুন যাতে কেউ স্থলভাগে আঘাত না করে এবং স্থায়ীভাবে কমপক্ষে 5 সেমি / 2 ইঞ্চি হয়। এটিকে সংক্রমণ রোধ করার জন্য এটি একটি দীর্ঘ পথ হয়ে যাবে যা বৃষ্টিকে মাটির উপর ছিটিয়ে দেয় এবং মাটির নীচের পাতাগুলিতে স্থানান্তর করে।<br>
     
   ৬. স্পেস উদ্ভিদ সঠিকভাবে। এটি ভাল বায়ু চলাচল বন্ধ পাতা শুকিয়ে এবং ফাঙ্গা সংক্রমণ ঝুঁকি কমাতে অনুমতি দেবে। বীজ প্যাকেট নির্দেশাবলী অনুসরণ করুন কিন্তু একটি সাধারণ নিয়ম হিসাবে 60cm থেকে 60cm (18in থেকে 24in) গাছের মধ্যে যথেষ্ট হতে হবে।<br>
     
   ৭. মাটি জল এবং না পাতা গাছপালা মধ্যে ঠান্ডা অবস্থার টমেটো তুষারপাত জন্য আদর্শ অবস্থার প্রদান।
     
    তুষার প্রতিরোধক টমেটো বাড়ান বর্তমানে টমেটো এক ধরনের টমেটো বৈচিত্র রয়েছে যা টমেটো ফুটোকে অসাধারণ প্রতিবিম্ব দেখায়, এটি ক্রিমসন ক্রশ নামে পরিচিত এবং এটি 2014/15 এর মধ্যে সর্বজনীনভাবে পাওয়া যায়। এখানে এই বৈচিত্র্যের পূর্ণ পর্যালোচনাটি পড়ুন।<br>

  ৮.  টমেটোর মতো বিভিন্ন জাতের টমেটোর মতো ফ্লোটিলের দাবিকে দোষারোপ করা হয় কিন্তু বাস্তবে এটি শুধু মাত্র ন্যূনতম। মুহূর্তে, Crimson ক্রাশ উল্লেখযোগ্য প্রতিরোধের সঙ্গে একমাত্র বৈচিত্র্য।<br>
     
    টমেটো ফল্ট জন্য স্প্রে যুক্তরাজ্যে টমেটোর টুকরোগুলো চিকিত্সা করার জন্য অপেশাদার মায়েদের জন্য কোন কার্যকর স্প্রে বা রাসায়নিক চিকিত্সা পাওয়া যায় না। কপার ভিত্তিক স্প্রেতে সাহায্য করা হয়েছিল বলে মনে করা হলেও এইগুলি ২014 সালে প্রত্যাহার করা হয়েছিল।।</p>
</div>
        </div>
        </div>







      </div>


    </div>



</div>
</div>

<!--otherdisease-->
<section class="dis">
      <div class="container text-center">
        <h2>অন্যান্য রোগ:</h2>
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
  <p>
          টমেটো ব্লাইট 
          
        </p>
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
        <img src="img/tomato_blight.jpg">
    </figure>
  <p>
          টমেটো ব্লাইট 
          
        </p>
 </li>
</ul>
      </div>
</section>

<section>
<div class="container text-center">
  <div class="row" id="rh">
    <h2>অন্যান্য রোগর ভিডিও</h2>
        <div class="col-sm-4">
          <div class="well">
            <h3>টমেটো পাতা রোগ</h3>
             <object width="100%" height="100%"data="https://www.youtube.com/watch?v=2dSBDLB1Cf0">
          </object>
        </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <h3>টমেটো রোগ এবং সমস্যা</h3>
            <object width="100%" height="100%"data="https://www.youtube.com/watch?v=vKWcKMCXuqY">
              
          </object>

          </div>
        </div>


         <div class="col-sm-4">
          <div class="well">
            <h3>প্রচলিত টমেটো সমস্যা</h3>
          <object width="100%" height="100%"data="https://www.youtube.com/watch?v=EDFvw15WwoY">
          </object>
          </div>
        </div>
       <h4><a href="#">অন্যান্য ভিডিও</a></h4>
      </div>




</div>

<!--end video section-->
</section>




      
<section class="mapsp">
   <div class="container text-center">

    <div class="row">
      <h2>কৃষি মানচিত্র</h2>
        <div class="col-md-6">
          <div class="well">
          <div id="map"style="height:200px;background:yellow"></div>
    <script>

      function initMap() {
          var i=0;
          var marker;
          var coo_name=new Array();
          var myLatLng =new Array();
          myLatLng[0]={lat: 23.777176, lng: 90.399452};
          coo_name[0]='Dhaka,Bangladesh';
          myLatLng[1]={lat: 25.744860, lng: 89.275589};
          coo_name[1]='Rangpur,Bangladesh';

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: myLatLng[0]
        });

        for(i=0;i<myLatLng.length;i++)
        {
          marker = new google.maps.Marker({
          position: myLatLng[i],
          map: map,
          title: coo_name[i]
        });
        }
      }
    </script>
        </div>
        </div>
        <div class="col-md-6" id="map_pera">
          <div class="well">
          <h3>আম বাগান</h3>
            <p>মানসম্পন্ন আম ফলাতে জমি নির্বাচন, রোপণ দূরত্ব, গর্ত তৈরি ও সার প্রয়োগ, রোপণ প্রণালী, রোপণের সময়, জাত নির্বাচন, চারা নির্বাচন, চারা রোপণ ও চারার পরিচর্যা বিস্তারিত তথ্য জানুন</p>
          </div>
        </div>
      </div>

   </div>

</section>
         
<section>
<div class="container text-center">
  <div class="row" id="rh">
    <h2>সম্পর্কিত ভিডিও</h2>
        <div class="col-sm-4">
          <div class="well">
            <h3>মাল্টা চাষ করে অর্থ উপার্জন</h3>
             <object width="100%" height="100%"data="https://www.youtube.com/v/H7Ey4lAp3yg">
          </object>
        </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <h3>বাংলাদেশে পেঁপে কৃষিকাজ</h3>
            <object width="100%" height="100%"data="https://www.youtube.com/v/toLcX4LBOBo">
              
          </object>

          </div>
        </div>


         <div class="col-sm-4">
          <div class="well">
            <h3>পেয়ারা উদ্যোক্তাদের সাফল্য</h3>
          <object width="100%" height="100%"data="https://www.youtube.com/v/ONK3ZIx1n6Q">
          </object>
          </div>
        </div>
       <h4><a href="#">অন্যান্য ভিডিও</a></h4>
      </div>




</div>

<!--end video section-->
</section>
</section>



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


<!--map-->


 <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBxRRZY0e8a7o-vQTQpCCbOoVF_IzyMuM&callback=initMap">
    </script>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>