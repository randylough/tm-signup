<?PHP
require('../includes/db.php'); 
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
</head>
<body class="signup">
<?php
  $user_id = strip_tags($_GET['user_id']);
  $user_email = strip_tags($_GET['email']);

  $website = strip_tags($_GET['website']);


  $link = mysqli_connect($host_name, $user_name, $password, $database);
  if (!$link) { 
  die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error()); 
  } 

  $sql = "UPDATE users_data SET website = '$website' WHERE user_id='$user_id'";

  $result = mysqli_query($link, $sql, MYSQLI_USE_RESULT);
  if (!result) 
  { 
  echo 'Error: ', $mysqli->error;
  }

  mysqli_close($link);


 
?>
  <div class="w-section section up">
    <div class="w-container dropshadow-box signup-form">
      <h2>Step 3: Choose your plan</h2>
      <div class="grey-text">All plans include a 30 day risk free trial. You can cancel at anytime.</div>
      <div class="w-row pricing-wrapper">
        <div class="w-col w-col-6">
          <div class="pricing-block">
            <div class="small-title blue-text">a <strong data-new-link="true">GREAT</strong> website</div>
            <div class="price">$47 <span class="length">a month</span>
            </div>
            <div class="grey-text">For firms looking to improve their online presence and credibility</div><a href="../signup/billing.php?plan=web&user_id=<?php echo "$user_id";?>&email=<?php echo "$user_email";?>&fname=<?php echo "$fname";?>&lname=<?php echo "$lname";?>&biz=<?php echo "$biz";?>&phone=<?php echo "$phone";?>" class="w-button button large green pricing">START 30 TRIAL</a>
          </div>
        </div>
        <div class="w-col w-col-6">
          <div class="pricing-block rec">
            <div class="recommendation-block">MOST POPULAR</div>
            <div class="small-title blue-text">a <strong data-new-link="true">GREAT</strong> website + <strong data-new-link="true">GREAT</strong> tools</div>
            <div class="price">$77 <span class="length">a month</span>
            </div>
            <div class="grey-text">For firms to be found online and give their clients reasons to keep coming back</div><a href="../signup/billing.php?plan=tools&user_id=<?php echo "$user_id";?>&email=<?php echo "$user_email";?>&fname=<?php echo "$fname";?>&lname=<?php echo "$lname";?>&biz=<?php echo "$biz";?>&phone=<?php echo "$phone";?>" class="w-button button large green pricing">START 30 TRIAL</a>
          </div>
        </div>
      </div>
      <ul class="w-list-unstyled w-hidden-tiny space">
        <li class="w-clearfix compare-list">
          <div class="_55block">Features</div>
          <div class="w-clearfix _45block">
            <div class="_33block">
              <div>Website</div>
            </div>
            <div class="_33block">
              <div>Website + Tools</div>
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list odd">
          <div class="_55block">Website designed to meet today's requirements</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list">
          <div class="_55block">100% mobile and device friendly</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list odd">
          <div class="_55block">Domain Name (yourbusiness.com)</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list">
          <div class="_55block">Website Optimization</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list odd">
          <div class="_55block">Search Engine Optimization</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list">
          <div class="_55block">Blogging Capabilities</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list odd">
          <div class="_55block">Email Newsletter</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/greyX.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list">
          <div class="_55block">SSL Security (HTTPS) Certificate</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/greyX.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list odd">
          <div class="_55block">Secure Document Portal</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/greyX.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list">
          <div class="_55block">Accept Payments on your website</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/greyX.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list odd">
          <div class="_55block">Referral Networking</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/greyX.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list">
          <div class="_55block">Keyword Research</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/greyX.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list odd">
          <div class="_55block">Google Analytics Optimization</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/greyX.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list">
          <div class="_55block">Google Webmaster Optimization</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/greyX.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list odd">
          <div class="_55block">Setup Social Media Platforms</div>
          <div class="w-clearfix _45block">
            <div class="_33block"><img src="../images/greyX.png" class="checkmark">
            </div>
            <div class="_33block"><img src="../images/checkmarkGreen.png" class="checkmark">
            </div>
          </div>
        </li>
        <li class="w-clearfix compare-list">
          <div class="_55block">Subscription</div>
          <div class="w-clearfix _45block">
            <div class="_33block">
              <div class="price bottom">$47 <span class="length small">a month</span>
              </div><a href="../signup/billing.php?plan=web&user_id=<?php echo "$user_id";?>&email=<?php echo "$user_email";?>&fname=<?php echo "$fname";?>&lname=<?php echo "$lname";?>&biz=<?php echo "$biz";?>&phone=<?php echo "$phone";?>" data-ix="show-payment" class="w-button button small">Sign up</a>
            </div>
            <div class="_33block">
              <div class="price bottom">$77 <span class="length small">a month</span>
              </div><a href="../signup/billing.php?plan=tools&user_id=<?php echo "$user_id";?>&email=<?php echo "$user_email";?>&fname=<?php echo "$fname";?>&lname=<?php echo "$lname";?>&biz=<?php echo "$biz";?>&phone=<?php echo "$phone";?>" data-ix="show-payment" class="w-button button small">Sign up</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="../js/taxmarketers.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>