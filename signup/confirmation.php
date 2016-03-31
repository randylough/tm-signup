<?php 
require('../includes/config.inc.php');
require('../includes/db.php');
// Uses sessions to test for duplicate submissions:
session_start();

?><<!DOCTYPE html><!-- Last Published: Fri Mar 11 2016 19:03:46 GMT+0000 (UTC) --><html data-wf-site="56d75605a06b686f163e5329" data-wf-page="56d75605a06b686f163e5321" lang="en"><head><meta charset="utf-8"><title>Tax Marketing for Tax Businesses | TaxMarketers.com Grows Businesses</title><meta name="description" content="When businesses want to grow their business they come to TaxMarketers.com for exceptional results. Learn more now!"><meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '244793735860026');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=244793735860026&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  <meta name="robots" content="noindex, nofollow">
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</head>
<body>
<div class="w-section lotta-space center">
    <div class="center">Processing your order...</div>
  </div>
<?php
$user_id = strip_tags($_POST['user_id']);
// Check for a form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $user_email = strip_tags($_POST['email']);

  // Stores errors:
    $errors = array();


    $planId = strip_tags($_POST['planId']);
  // Need a payment token:
    if (isset($_POST['stripeToken'])) {

      $token = $_POST['stripeToken'];

    // Check for a duplicate submission, just in case:
    // Uses sessions, you could use a cookie instead.
      if (isset($_SESSION['token']) && ($_SESSION['token'] == $token)) {
        $errors['token'] = 'You have apparently resubmitted the form. Please do not do that.';
    } else { // New submission.
      $_SESSION['token'] = $token;
    }

  } else {
    $errors['token'] = 'The order cannot be processed. Please make sure you have JavaScript enabled and try again.';
  }

  // Validate other form data!

  // If no errors, process the order:
  if (empty($errors)) {

    // create the charge on Stripe's servers - this will charge the user's card
    try {

      require_once('../stripe-php-3.5.0/init.php');


          //MONTHLY SUBSCRIPTION 

        \Stripe\Stripe::setApiKey(STRIPE_PRIVATE_KEY);

          // Create the customer
        $stripe_customer = \Stripe\Customer::create(array(
          'source'     => $token,
          'email'    => $user_email,
          'plan'     => $planId,
          'metadata' => array(
            'first_name'=> "$fname",
            'last_name' => "$lname",
            'company_name' => "$company",
            'phone' => "$phone",
            ),
          'description' => "$fname $lname at $user_email",
          ));

      // OUTSIDE OF IF STATEMENTS
      $stripe_id = $stripe_customer->id;  // Keep this! We'll use it again!
      $stripe_sub = $stripe_customer->subscriptions->data[0]->id;

      // Check that it was paid:
      if ($stripe_customer->created == true) {

        if (!empty($planDiscount)) {
          \Stripe\Stripe::setApiKey(STRIPE_PRIVATE_KEY);

          $customer = \Stripe\Customer::retrieve("$stripe_id");
          $subscription = $customer->subscriptions->retrieve("$stripe_sub");
          $subscription->coupon = "$planDiscount";
          $subscription->save();
        } else {
        }
        $link = mysqli_connect($host_name, $user_name, $password, $database);
        if (!$link) { 
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); 
        } 

       $sqlUpdate = "UPDATE users_data SET plan = '$planId', stripe_id = '$stripe_id', stripe_sub = '$stripe_sub' WHERE user_id='$user_id' LIMIT 1";
       $result = mysqli_query($link, $sqlUpdate, MYSQLI_USE_RESULT);
       if (!result) 
       { 
       echo 'Error: ', $link->error;
       }

       $success=TRUE;

      } else { // Charge was not paid!
        echo '<div class="alert alert-error"><h4>Payment System Error!</h4>Your payment could NOT be processed (i.e., you have not been charged) because the payment system rejected the transaction. You can try again or use another card.</div>';
      }

    } catch (\Stripe\Error\Card $e) {
        // Card was declined.
      $e_json = $e->getJsonBody();
      $err = $e_json['error'];
      $errors['stripe'] = $err['message'];
    } catch (\Stripe\Error\ApiConnection $e) {
        // Network problem, perhaps try again.
    } catch (\Stripe\Error\InvalidRequest $e) {
        // You screwed up in your programming. Shouldn't happen!
    } catch (\Stripe\Error\Api $e) {
        // Stripe's servers are down!
    } catch (\Stripe\Error\Base $e) {
        // Something else that's not the customer's fault.
    }

  } // A user form submission error occurred, handled below.

} // Form submission.
mysqli_close($link);
// Set the Stripe key:
// Uses STRIPE_PUBLIC_KEY from the config file.
echo '<script type="text/javascript">Stripe.setPublishableKey("' . STRIPE_PUBLIC_KEY . '");</script>';

?>


<?php if ($success == true) {

  echo '
  <script type="text/javascript">
   window.location.replace("https://join.TaxMarketers.com/signup/success.php?id='.$user_id.'");     
   </script>';


} else {
  echo
  '
  <script type="text/javascript">
   window.location.replace("https://join.TaxMarketers.com/signup/error.html");     
   </script>';
      }?>
    </div>
  </div>


  <div class="w-section main-section footer">
    <div class="center">Tax Marketers LLC, 2015 all rights reserved</div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/taxmarketers.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  <script type="text/javascript" src="../js/buy.js"></script>
</body>
</html>