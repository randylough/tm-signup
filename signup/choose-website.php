<?PHP
require('../includes/db.php'); 
// Uses sessions to test for duplicate submissions:
session_start();
?>
<!DOCTYPE html><!-- Last Published: Fri Mar 11 2016 19:03:46 GMT+0000 (UTC) --><html data-wf-site="56d75605a06b686f163e5329" data-wf-page="56d75605a06b686f163e5321" lang="en"><head><meta charset="utf-8"><title>Tax Marketing for Tax Businesses | TaxMarketers.com Grows Businesses</title><meta name="description" content="When businesses want to grow their business they come to TaxMarketers.com for exceptional results. Learn more now!"><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/taxmarketers.css">
  <link rel="stylesheet" type="text/css" href="../css/signup.taxmarketers.css">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script><script>WebFont.load({
  google: {
    families: ["Montserrat:400,700","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Cardo:regular,700"]
  }
});</script><script type="text/javascript" src="https://daks2k3a4ib2z.cloudfront.net/0globals/modernizr-2.7.1.js"></script><link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/56d75605a06b686f163e5329/56d75634a06b686f163e538a_logo32.png"><link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/56d75605a06b686f163e5329/56d75638a06b686f163e538b_web256.png"><script type="text/javascript">var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-71270258-1'], ['_trackPageview']);

(function() {
  var ga = document.createElement('script');
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script><style type="text/css">
      @media screen and (min-width: 1200px) {
        .w-container {
          max-width: 1170px;
        }
      }
    </style>
<script type="text/javascript">
    window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var n=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(n?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var o=document.getElementsByTagName("script")[0];o.parentNode.insertBefore(a,o);for(var r=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["clearEventProperties","identify","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=r(p[c])};
    heap.load("2968038114");
  </script>
  <!-- Google Code for Signed Up Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 936497617;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "LN4OCJao12QQ0aPHvgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/936497617/?label=LN4OCJao12QQ0aPHvgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '244793735860026');
fbq('track', "PageView");
fbq('track', 'CompleteRegistration');</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=244793735860026&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

    <meta name="robots" content="noindex, nofollow">
</head>
<?php
  $user_id = strip_tags($_POST['user_id']);
  $fname = strip_tags($_POST['fname']);
  $lname = strip_tags($_POST['lname']);
  $phone = strip_tags($_POST['phone']);
  $biz = strip_tags($_POST['biz']);
  $user_email = strip_tags($_POST['email']);
  $street = strip_tags($_POST['address']);
  $city = strip_tags($_POST['city']);
  $state = strip_tags($_POST['state']);
  $zip = strip_tags($_POST['zip']);
  $sub = strip_tags($_POST['subscribe']);




  

  if (!empty($user_id)) {
    $link = mysqli_connect($host_name, $user_name, $password, $database);
    if (!$link) { 
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); 
    }
    $sqlUpdate = "UPDATE users_data SET first='$fname', last='$lname', email='$user_email', phone='$phone', company='$biz', address1='$street', city='$city', state='$state', zip_code='$zip', subscribe = '$sub' WHERE user_id='$user_id'";
    
    if ($link->query($sqlUpdate) === TRUE) {
    }

      mysqli_close($link);

  } elseif (empty($user_id)) {

    $link = mysqli_connect($host_name, $user_name, $password, $database);
    if (!$link) { 
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); 
    } 
    $sql = "INSERT INTO users_data (user_id, first, last, phone, company, email, address1, city, state, zip_code, subscribe) VALUES (NULL, '$fname', '$lname', '$phone', '$biz', '$user_email', '$street', '$city', '$state', '$zip', '$sub')";

      if ($link->query($sql) === TRUE) {

      $sqlFetch = "SELECT user_id FROM users_data WHERE email='$user_email' LIMIT 1";
      $sqlresult = mysqli_query($link, $sqlFetch);

      if (mysqli_num_rows($sqlresult) > 0) {
              // output data of each row
        while($row = mysqli_fetch_assoc($sqlresult)) {
          $user_id = $row["user_id"];
        }
      }

      mysqli_close($link);
    } else {
      echo "Error: " . $sql . "<br>" . $link->error;
    }

  } else {}

  // Initialize curl
      $curl = curl_init();

      // Configure curl options
      $data = array(
        'first' => $fname, 
        'last' => $lname, 
        'email' => $user_email, 
        'phone' => $phone,
        'company' => $biz,
        'user_id' => $user_id,
        'street' => $street,
        'city' => $city,
        'state' => $state,
        'zip' => $zip,
        'sub' => $sub,

        );
      $jsonEncodedData = json_encode($data);
      $opts = array(
          CURLOPT_URL             => 'https://zapier.com/hooks/catch/2q3eof/',
          CURLOPT_RETURNTRANSFER  => true,
          CURLOPT_CUSTOMREQUEST   => 'POST',
          CURLOPT_POST            => 1,
          CURLOPT_POSTFIELDS      => $jsonEncodedData,
          CURLOPT_HTTPHEADER  => array('Content-Type: application/json','Content-Length: ' . strlen($jsonEncodedData))                                                                       
      );

      // Set curl options
      curl_setopt_array($curl, $opts);

      // Get the results
      $result = curl_exec($curl);

      // Close resource
      curl_close($curl);



 
?>
<body class="signup">
  <div class="w-section section up">
    <div class="w-container dropshadow-box signup-form">
      <h2>Step 2: Choose your website</h2>
      <div class="grey-text">All of these websites are 100% customizable. It just gives us a good starting point on what YOU like.</div>
      <div class="w-row center space">
        <div class="w-col w-col-4 w-col-small-4">
          <div class="website-title">
            <h3 class="red-text">TaxMarketers.com</h3>
            <div class="grey-text">Yup - you can have our website!</div>
          </div>
          <a href="#" class="w-lightbox w-inline-block"><img width="671" src="../images/taxMarketers-home.jpg" class="img-choose-website">
            <div>(click image to see more)</div>
            <script type="application/json" class="w-json">
              { "items": [{
                "_id": "56dfa222b824537365c238b4",
                "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/56d4affc5f2df5105ceda505/56dfa222b824537365c238b4_taxMarketers-home.jpg",
                "fileName": "taxMarketers-home.jpg",
                "origFileName": "taxMarketers-home.jpg",
                "width": 1252,
                "height": 800,
                "fileSize": 162390,
                "type": "image",
                "url": "../images/taxMarketers-home.jpg"
              }, {
                "_id": "56dfa2229d680ef15bbfc979",
                "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/56d4affc5f2df5105ceda505/56dfa2229d680ef15bbfc979_taxMarketers-webDesign.jpg",
                "fileName": "taxMarketers-webDesign.jpg",
                "origFileName": "taxMarketers-webDesign.jpg",
                "width": 1248,
                "height": 800,
                "fileSize": 137093,
                "type": "image",
                "url": "../images/taxMarketers-webDesign.jpg"
              }, {
                "_id": "56dfa2221da9f56e65e19a0e",
                "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/56d4affc5f2df5105ceda505/56dfa2221da9f56e65e19a0e_taxMarketers-features.jpg",
                "fileName": "taxMarketers-features.jpg",
                "origFileName": "taxMarketers-features.jpg",
                "width": 1250,
                "height": 800,
                "fileSize": 133744,
                "type": "image",
                "url": "../images/taxMarketers-features.jpg"
              }] }
            </script>
          </a><a href="../signup/choose-plan.php?website=tm&user_id=<?php echo "$user_id";?>&email=<?php echo "$user_email";?>&fname=<?php echo "$fname";?>&lname=<?php echo "$lname";?>&biz=<?php echo "$biz";?>&phone=<?php echo "$phone";?>" class="w-button button large green">Choose this website</a>
        </div>
        <div class="w-col w-col-4 w-col-small-4">
          <div class="website-title">
            <h3 class="red-text">The Professonal</h3>
            <div class="grey-text">A classy but modern design</div>
          </div>
          <a href="#" class="w-lightbox w-inline-block"><img width="671" src="../images/sinatra-home.jpg" class="img-choose-website">
            <div>(click image to see more)</div>
            <script type="application/json" class="w-json">
              { "items": [{
                "_id": "56dfa222b824537365c238b2",
                "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/56d4affc5f2df5105ceda505/56dfa222b824537365c238b2_sinatra-home.jpg",
                "fileName": "56dfa222b824537365c238b2_sinatra-home.jpg",
                "origFileName": "sinatra-home.jpg",
                "width": 1250,
                "height": 800,
                "fileSize": 225160,
                "type": "image",
                "url": "../images/sinatra-home.jpg"
              }, {
                "_id": "56dfa2229d680ef15bbfc978",
                "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/56d4affc5f2df5105ceda505/56dfa2229d680ef15bbfc978_sinatra-home2.jpg",
                "fileName": "56dfa2229d680ef15bbfc978_sinatra-home2.jpg",
                "origFileName": "sinatra-home2.jpg",
                "width": 1250,
                "height": 800,
                "fileSize": 313202,
                "type": "image",
                "url": "../images/sinatra-home2.jpg"
              }, {
                "_id": "56dfa222b824537365c238b3",
                "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/56d4affc5f2df5105ceda505/56dfa222b824537365c238b3_sinatra-services.jpg",
                "fileName": "56dfa222b824537365c238b3_sinatra-services.jpg",
                "origFileName": "sinatra-services.jpg",
                "width": 1250,
                "height": 800,
                "fileSize": 215876,
                "type": "image",
                "url": "../images/sinatra-services.jpg"
              }] }
            </script>
          </a><a href="../signup/choose-plan.php?website=sinatra&user_id=<?php echo "$user_id";?>&email=<?php echo "$user_email";?>&fname=<?php echo "$fname";?>&lname=<?php echo "$lname";?>&biz=<?php echo "$biz";?>&phone=<?php echo "$phone";?>" class="w-button button large green">CHOOSE THIS WEBSITE</a>
        </div>
        <div class="w-col w-col-4 w-col-small-4">
          <div class="website-title">
            <h3 class="red-text">Modern</h3>
            <div class="grey-text">Trendy layout with a fun design</div>
          </div>
          <a href="#" class="w-lightbox w-inline-block"><img width="671" src="../images/modern-home.jpg" class="img-choose-website">
            <div>(click image to see more)</div>
            <script type="application/json" class="w-json">
              { "items": [{
                "_id": "56dfa222710abd69053b57ba",
                "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/56d4affc5f2df5105ceda505/56dfa222710abd69053b57ba_modern-home.jpg",
                "fileName": "modern-home.jpg",
                "origFileName": "modern-home.jpg",
                "width": 1248,
                "height": 800,
                "fileSize": 204950,
                "type": "image",
                "url": "../images/modern-home.jpg"
              }, {
                "_id": "56dfa2229d680ef15bbfc977",
                "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/56d4affc5f2df5105ceda505/56dfa2229d680ef15bbfc977_modern-home2.jpg",
                "fileName": "modern-home2.jpg",
                "origFileName": "modern-home2.jpg",
                "width": 1242,
                "height": 800,
                "fileSize": 82937,
                "type": "image",
                "url": "../images/modern-home2.jpg"
              }, {
                "_id": "56dfa222710abd69053b57bb",
                "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/56d4affc5f2df5105ceda505/56dfa222710abd69053b57bb_modern-services.jpg",
                "fileName": "modern-services.jpg",
                "origFileName": "modern-services.jpg",
                "width": 1246,
                "height": 800,
                "fileSize": 242975,
                "type": "image",
                "url": "../images/modern-services.jpg"
              }] }
            </script>
          </a><a href="../signup/choose-plan.php?website=modern&user_id=<?php echo "$user_id";?>&email=<?php echo "$user_email";?>&fname=<?php echo "$fname";?>&lname=<?php echo "$lname";?>&biz=<?php echo "$biz";?>&phone=<?php echo "$phone";?>" class="w-button button large green">CHOOSE THIS WEBSITE</a>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="../js/taxmarketers.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>