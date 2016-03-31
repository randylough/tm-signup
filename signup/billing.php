<?php 
require('../includes/config.inc.php');
require('../includes/db.php');
// Uses sessions to test for duplicate submissions:
session_start();

?><!DOCTYPE html><!-- Last Published: Fri Mar 11 2016 19:03:46 GMT+0000 (UTC) --><html data-wf-site="56d75605a06b686f163e5329" data-wf-page="56d75605a06b686f163e5321" lang="en"><head><meta charset="utf-8"><title>Tax Marketing for Tax Businesses | TaxMarketers.com Grows Businesses</title><meta name="description" content="When businesses want to grow their business they come to TaxMarketers.com for exceptional results. Learn more now!"><meta name="viewport" content="width=device-width, initial-scale=1">
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
    <meta name="robots" content="noindex, nofollow">
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</head>
<body class="signup">
<?php
  $user_id = strip_tags($_GET['user_id']);
  $user_email = strip_tags($_GET['email']);
  $plan = strip_tags($_GET['plan']);
  $fname = strip_tags($_GET['fname']);
  $lname = strip_tags($_GET['lname']);
  $biz = strip_tags($_GET['biz']);
  $phone = strip_tags($_GET['phone']);

  if (!empty($user_id)) {
    $link = mysqli_connect($host_name, $user_name, $password, $database);
    if (!$link) { 
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); 
    } 

    $sql = "UPDATE users_data SET plan = '$plan' WHERE user_id='$user_id'";

    $result = mysqli_query($link, $sql, MYSQLI_USE_RESULT);
    if (!result) 
    { 
    echo 'Error: ', $mysqli->error;
    }

    mysqli_close($link);

    if ($plan == 'web') {
      $price = '$47';
    }elseif ($plan == 'tools') {
      $price = '$77';
    } else {
      $price = '$297';
    }
  }
 
?>
<?php
echo '<script type="text/javascript">Stripe.setPublishableKey("' . STRIPE_PUBLIC_KEY . '");</script>';
?>
  <div class="w-section section up">
    <div class="w-container dropshadow-box signup-form">
      <h2>Final Step: Payment Information</h2>
      <div class="grey-text">You will not be charged until your 30-day trial is over
        <br>Your information is protected against our 256 bit AES security</div>
      <div class="w-row space">
        <div class="w-col w-col-7">
          <h3>Enter billing information</h3>
          <div class="grey-text">We accept all major credit cards</div>
          <div class="w-form space small">
            <form method="POST" id="payment-form" action="../signup/confirmation.php">
              <label for="node">Name on card</label>
              <input id="node" type="text" placeholder="Name on card" required="required" class="card-nameOnCard w-input field half-input ">
              <label for="node">Credit card number</label>
              <input id="node" type="text" placeholder="Enter your CC number" required="required" class="card-number w-input field half-input ">
              <label for="node-3">Expiration (MM/YYYY)</label>
              <div class="w-row form-row">
                <div class="w-col w-col-6 w-clearfix">
                  <input id="node-3" type="text" placeholder="05" required="required" class="card-expiry-month w-input field half-input ">
                </div>
                <div class="w-col w-col-6 w-clearfix">
                  <input id="node-4" type="text" placeholder="2025" required="required" class="card-expiry-year w-input field half-input ">
                </div>
              </div>
              <div class="w-row form-row">
                <div class="w-col w-col-6 w-clearfix">
                  <label for="node-2">CVC</label>
                  <input id="node-2" type="text" placeholder="1234" required="required" class="card-cvc w-input field half-input ">
                </div>
                <div class="w-col w-col-6 w-clearfix">
                <label for="node-2">Zip Code</label>
                  <input id="node-2" type="text" placeholder="92109" required="required" class="card-addresszip w-input field half-input ">
                </div>
              </div>
              <input type="hidden" name="user_id" value="<?php echo ''.$user_id.'' ?>">
              <input type="hidden" name="email" value="<?php echo ''.$user_email.'' ?>">
              <input type="hidden" name="planId" value="<?php echo ''.$plan.'' ?>">
              <input type="hidden" name="fname" value="<?php echo ''.$fname.'' ?>">
              <input type="hidden" name="lname" value="<?php echo ''.$lname.'' ?>">
              <input type="hidden" name="biz" value="<?php echo ''.$biz.'' ?>">
              <input type="hidden" name="phone" value="<?php echo ''.$phone.'' ?>">
              <input type="submit" value="START FREE TRIAL" data-wait="Please wait..." class="w-button button large">
              <div class="payment-errors"></div>
              </form>
          </div>
        </div>
        <div class="w-col w-col-1 center"></div>
        <div class="w-col w-col-4 w-hidden-small w-hidden-tiny">
          <div class="center">
            <h4>Order Summary</h4>
            <div class="price"><?php echo ''.$price.''?><span class="smatt-text">/mo</span>
            </div>
          </div>
          <div class="w-clearfix _80block"><img src="../images/checkmarkGreen.png" class="checkmark float">
            <div class="grey-text">Unique Website</div>
          </div>
          <div class="w-clearfix _80block"><img src="../images/checkmarkGreen.png" class="checkmark float">
            <div class="grey-text">Security monitoring</div>
          </div>
          <div class="w-clearfix _80block"><img src="../images/checkmarkGreen.png" class="checkmark float">
            <div class="grey-text">24/7 email support</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="../js/taxmarketers.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  <script type="text/javascript" src="../js/buy.js"></script>
</body>
</html>