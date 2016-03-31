<?PHP
require('includes/db.php'); 
// Uses sessions to test for duplicate submissions:
session_start();
?>
<!DOCTYPE html><!-- Last Published: Fri Mar 11 2016 19:03:46 GMT+0000 (UTC) --><html data-wf-site="56d75605a06b686f163e5329" data-wf-page="56d75605a06b686f163e5321" lang="en"><head><meta charset="utf-8"><title>Tax Marketing for Tax Businesses | TaxMarketers.com Grows Businesses</title><meta name="description" content="When businesses want to grow their business they come to TaxMarketers.com for exceptional results. Learn more now!"><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/taxmarketers.css">
  <link rel="stylesheet" type="text/css" href="css/signup.taxmarketers.css">
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
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '244793735860026');
fbq('track', "PageView");
fbq('track', 'InitiateCheckout');</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=244793735860026&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    <meta name="robots" content="noindex, nofollow">
</head>
<body class="signup">
<?php
  $user_email = strip_tags($_GET['email']);
    if (empty($user_email)) {

    } else {
      if (!empty($user_email)) {
        $link = mysqli_connect($host_name, $user_name, $password, $database);
        if (!$link) { 
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); 
        } 

        $sql = "INSERT INTO users_data (user_id, email) VALUES (NULL,'$user_email')";

       if ($link->query($sql) === TRUE) {

         $sqlFetch = "SELECT user_id FROM users_data WHERE email='$user_email' LIMIT 1";
         $sqlresult = mysqli_query($link, $sqlFetch);

         if (mysqli_num_rows($sqlresult) > 0) {
                 // output data of each row
           while($row = mysqli_fetch_assoc($sqlresult)) {
             $user_id = $row["user_id"];
           }
         }

       } else {
         echo "Error: " . $sql . "<br>" . $link->error;
       }

        mysqli_close($link);
      }else {}
    }

 
?>
  <div class="w-section section up">
    <div class="w-container dropshadow-box signup-form">
      <h2>Sign up for TaxMarketers.com</h2>
      <div class="grey-text">Fill out your information below to have us create a website for you</div>
      <div class="w-form">
        <form id="wf-form-signup" name="wf-form-signup" data-name="signup" method="post" action="/signup/choose-website.php" class="form-wrapper" enctype="multipart/form-data">
          <div class="w-row form-row">
            <div class="w-col w-col-6 w-clearfix">
              <label for="name" class="field-label">First name:</label>
              <div class="help-text">Your first name</div>
              <input id="name" type="text" name="fname" data-name="Name" class="w-input field half-input">
            </div>
            <div class="w-col w-col-6 w-clearfix">
              <label for="name" class="field-label">Last name:</label>
              <div class="help-text">Your last name</div>
              <input id="name" type="text" name="lname" data-name="Name" class="w-input field half-input">
            </div>
          </div>
          <div class="w-row form-row">
            <div class="w-col w-col-6 w-clearfix">
              <label for="name" class="field-label">Phone number:</label>
              <div class="help-text">Where clients can reach you</div>
              <input id="name" type="text" name="phone" data-name="Name" class="w-input field half-input">
            </div>
            <div class="w-col w-col-6 w-clearfix">
              <label for="name" class="field-label">Email Address:</label>
              <div class="help-text">Where clients can reach you</div>
              <input id="name" type="text" name="email" data-name="Name" class="w-input field half-input" <?php if (!empty($user_email)) {
                echo 'value="'.$user_email.'"';
              } ?> >
            </div>
          </div>
          <div class="w-row form-row">
            <div class="w-col w-col-6 w-clearfix">
              <label for="name" class="field-label">Business Name:</label>
              <div class="help-text">Your business name</div>
              <input id="name" type="text" name="biz" data-name="Name" class="w-input field half-input">
            </div>
            <div class="w-col w-col-6"></div>
          </div>
          <h4>Business address</h4>
          <div class="help-text">If you do not have an office address please provide your home address (we need it to know where to market your business)</div>
          <div class="w-row form-row">
            <div class="w-col w-col-6 w-clearfix">
              <label for="address" class="field-label">Street Address:</label>
              <input id="address" type="text" name="address" data-name="address" required="required" class="w-input field half-input">
            </div>
            <div class="w-col w-col-6 w-clearfix">
              <label for="city" class="field-label">City:</label>
              <input id="city" type="text" name="city" data-name="city" required="required" class="w-input field half-input">
            </div>
          </div>
          <div class="w-row form-row">
            <div class="w-col w-col-6 w-clearfix">
              <label for="state" class="field-label">State:</label>
              <input id="state" type="text" name="state" data-name="state" required="required" class="w-input field half-input">
            </div>
            <div class="w-col w-col-6 w-clearfix">
              <label for="zip" class="field-label">Zip code:</label>
              <input id="zip" type="text" name="zip" data-name="zip" required="required" class="w-input field half-input">
            </div>
          </div>
          <div class="w-checkbox w-clearfix">
            <input id="checkbox" type="checkbox" name="subscribe" value="sub" data-name="Checkbox" checked="checked" class="w-checkbox-input checkbox">
            <label for="checkbox" class="w-form-label">Allow us to send you important information regarding your website and updates. We will <strong data-new-link="true" class="red-text">NEVER</strong> spam you.</label>
          </div>
          <?php
            if (!empty($user_id)) {
               echo '<input type="hidden" name="user_id" value="'.$user_id.'">';
             } 
          ?>
          <input type="submit" value="Submit" data-wait="Please wait..." class="w-button button large">
        </form>
      </div>
      <div>By submitting you are agreeing to our <a href="http://taxmarketers.com/privacy-policy" target="_blank">privacy policy</a> and <a href="http://taxmarketers.com/terms-and-conditions" target="_blank">terms and conditions</a>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/taxmarketers.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>