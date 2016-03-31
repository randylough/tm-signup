<?php 
require('../includes/config.inc.php');
require('../includes/db.php'); 
// Uses sessions to test for duplicate submissions:
session_start();

?><!DOCTYPE html>
<!-- This site was created in taxmarketers. http://www.taxmarketers.com-->
<!-- Last Published: Fri Jan 29 2016 04:15:57 GMT+0000 (UTC) -->
<html data-wf-site="5667a0a9552682d8378a5d8e" data-wf-page="56a9f2b886d180a323b22448">
<head>
  <meta charset="utf-8">
  <title>Acquisition and Retention</title>
  <meta name="description" content="Don't waste money with other companies to only get subpar results. Receive a dedicated marketing department at your disposal - grow your business today!">
  <meta property="og:title" content="starter">
  <meta property="og:description" content="Don't waste money with other companies to only get subpar results. Receive a dedicated marketing department at your disposal - grow your business today!">
  <meta name="twitter:card" content="summary">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="taxmarketers">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/taxmarketers.css">
  <link rel="stylesheet" type="text/css" href="../css/signup.taxmarketers.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["PT Sans:400,400italic,700,700italic","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","PT Serif:400,400italic,700,700italic","Merriweather:300,400,700,900","Varela Round:400"]
      }
    });
  </script>
  <script type="text/javascript" src="../js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../images/tm-logo-fav-blank.png">
  <link rel="apple-touch-icon" href="../images/tm-logo-web.png">
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-71270258-1'], ['_trackPageview']);
    (function() {
      var ga = document.createElement('script');
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <script type="text/javascript">
    window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var n=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(n?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var o=document.getElementsByTagName("script")[0];o.parentNode.insertBefore(a,o);for(var r=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["clearEventProperties","identify","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=r(p[c])};
    heap.load("2194994043");
  </script>
  <script type="text/javascript">
    setTimeout(function(){var a=document.createElement("script");
    var b=document.getElementsByTagName("script")[0];
    a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0044/8877.js?"+Math.floor(new Date().getTime()/3600000);
    a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
  </script>
  <!-- Start of taxmarketers Zendesk Widget script -->
  <script>
    /*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(c){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("https://assets.zendesk.com/embeddable_framework/main.js","taxmarketers.zendesk.com");/*]]>*/
  </script>
  <!-- End of taxmarketers Zendesk Widget script -->
  <meta name="robots" content="noindex">
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</head>
<body>
<?php

  $user_email = strip_tags($_GET['email']);

 
?>
<?php
echo '<script type="text/javascript">Stripe.setPublishableKey("' . STRIPE_PUBLIC_KEY . '");</script>';
?>
  <div class="w-section page-header small">
    <div class="w-container space center">
      <h1 class="hero-heading">Checkout</h1>
      <div class="hero-heading sub-heading">All plans include a 30-day money back guarantee. Cancel at anytime.</div>
    </div>
  </div>
  <div id="order-form" class="w-section order-form" style="background-color: #ffffff;">
    <div class="w-container pricing-wrapper">
      <div class="w-row">
        <div class="w-col w-col-6">
          <h1>Acquisition and retention</h1>
          <p>A powerful package focused on client acquisition and client retention.</p>
        </div>
        <div class="w-col w-col-6 right-justified">
          <div class="medium-text">$197/month</div>
        </div>
      </div>
    </div>
    <div class="w-container">
      <div class="w-form">
        <form method="POST" id="payment-form" action="../signup/confirmation.php">
          <div class="w-row">
            <div class="w-col w-col-6">
              <h3>Billing information</h3>
              <label for="address">Street address</label>
              <input id="address" type="text" placeholder="Enter your billing address" name="address" data-name="address" required="required" class="w-input field half-input card-addressline">
              <label for="city">City</label>
              <input id="city" type="text" placeholder="Enter your billing city" name="city" data-name="city" required="required" class="w-input field half-input card-addresscity">
              <label for="state">State</label>
              <input id="state" type="text" placeholder="Enter your billing state" name="state" data-name="state" required="required" class="w-input field half-input card-addressstate">
              <label for="zip">Zip code</label>
              <input id="zip" type="text" placeholder="Enter your billing zip code" name="zip" data-name="zip" required="required" class="card-addresszip w-input field half-input ">
              <h3>Credit card information</h3>
              <div>All information is passed securely through our 256 bit encrypted servers.</div>
              <label for="node">Name on card</label>
              <input id="node" type="text" placeholder="Name on card" required="required" class="card-nameOnCard w-input field half-input ">
              <label for="node">Credit card number</label>
              <input id="node" type="text" placeholder="Enter your CC number" required="required" class="card-number w-input field half-input ">
              <div>
              <label for="node-2">CVC</label>
              <input id="node-2" type="text" placeholder="1234" required="required" class="card-cvc w-input field half-input ">
              <label for="node-3">Expiration (MM/YYYY)</label>
              <input id="node-3" type="text" placeholder="05" required="required" class="card-expiry-month w-input field half-input ">
              <label for="node-4" class="inline-block">/</label>
              <input id="node-4" type="text" placeholder="2025" required="required" class="card-expiry-year w-input field half-input ">
              </div>
              <input type="hidden" name="email" value="<?php echo ''.$user_email.'' ?>">
              <input type="hidden" name="planId" value="tools">
              <input type="submit" value="PURCHASE" data-wait="Please wait..." class="w-button button large">
              <div class="payment-errors"></div>
            </div>
            <div class="w-col w-col-6 right-justified">
              
            </div>
          </div>
        </form>
      </div>
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