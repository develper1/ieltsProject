

<?php include 'iflogin.php'; ?>

<?php
$sql = "SELECT * FROM tbl_setting ";
   $result=mysqli_query($con,$sql);
    $setting = mysqli_fetch_assoc($result);
?>
<?php
$sql_p = "SELECT * FROM tbl_profile where pf_id=$_SESSION[pf_id]";
   $result=mysqli_query($con,$sql_p);
    $profile = mysqli_fetch_assoc($result);
?>



<?php include 'include/header1.php'; ?>




<body>
<ul id="wb-tphp">
 <li class="wb-slc"><a class="wb-sl" href="#wb-cont">Skip to main content</a></li>
 <li class="wb-slc visible-md visible-lg"><a class="wb-sl" href="#wb-info">Skip to footer</a></li>
 <li class="wb-slc visible-md visible-lg"><a class="wb-sl" href="#wb-sec-h">Skip to secondary menu</a></li>
</ul>
<header role="banner">


<div id="wb-bnr" class="container">
 <div id="wb-lng" class="visible-md visible-lg text-right">
  <h2 class="wb-inv">Language selection</h2>
  <div class="row">
   <div class="col-md-12">
    <ul class="list-inline margin-bottom-none">
     <li><a lang="fr" href='/j/fra/we?execution=e1s1&amp;_eventId=changeLang'>Fran&ccedil;ais</a></li>
    </ul>
   </div>
  </div>
 </div>
 <div class="row">
  <div class="brand col-xs-7 col-sm-9">
   <a href="http://canada.ca/en/index.html" target="_blank" title="Welcome to Canada.ca (opens in a new window)">
    <object id="gcwu-sig" type="image/svg+xml" tabindex="-1" role="img" data="images/logo.svg" aria-label="Government of Canada"></object>
   </a>
  </div>
  <div class="wb-mb-links col-xs-5 col-sm-3 visible-sm visible-xs" id="wb-glb-mn">
   <h2 class="wb-inv">Menu</h2>
   <ul class="list-inline text-right chvrn">
    <li><a href="#mb-pnl" title="Menu" aria-controls="mb-pnl" class="overlay-lnk" role="button">
     <span class="glyphicon glyphicon-th-list">
      <span class="wb-inv">Menu</span>
     </span>
    </a></li>
   </ul>
   <div id="mb-pnl"></div>
  </div>
 </div>
</div>

<nav role="navigation" id="wb-sm" class="wb-menu visible-md visible-lg" data-trgt="mb-pnl" typeof="SiteNavigationElement">
 <h2 class="wb-inv">Site menu</h2>
 <div class="container visible-md visible-lg nvbar">
  <div class="row">
   <ul class="list-inline menu">
    <li><a href="DE-01?ReqID=s2da7a6182f220519dffa6a77c110b342184094b75" target="_blank" title="Definitions (opens in a new window)">Definitions</a></li>
    <li><a href="FQ-01?ReqID=s2da7a6182f220519dffa6a77c110b342184094b75" target="_blank" title="Frequently Asked Questions (FAQs) (opens in a new window)">Frequently Asked Questions (FAQ)</a></li>
    <li class="last"><a href="HP-01?ReqID=s2da7a6182f220519dffa6a77c110b342184094b75" target="_blank" title="Help (opens in a new window)">Help</a></li>
   </ul>
  </div>
 </div>
</nav>
<nav role="navigation" id="wb-bc" property="breadcrumb">
 <h2 class="wb-inv">You are here:</h2>
 <div class="container">
  <div class="row">
   <ol class="breadcrumb">
<li><a href="/j/eng/we?execution=e1s1">Home</a></li>
<li>Welcome <?php echo ($profile['username']); ?></li>
</ol>
</div>
</div>
</nav>
</header>
<div class="container">
 <div class="row">
  <div class="col-xs-12">
   <main role="main" property="mainContentOfPage">
    <h1 id="wb-cont">Welcome <?php echo ($profile['username']); ?></h1>
    <div class="row">
     <div class="col-md-9">
      <p>You last signed in with your GCKey on <span id="utctime">Friday, February 26, 2021 at 08:26:18</span> ET.</p>
      <p>From this page you can <a href="/j/eng/we?execution=e1s1&amp;_eventId=changePassword">Change Your Password</a>, <a href="/j/eng/we?execution=e1s1&amp;_eventId=changeRecovery">Change Your Recovery Questions</a> or <a href="/j/eng/we?execution=e1s1&amp;_eventId=revokeUser">Revoke Your GCKey</a>.</p>
      <p>To help protect your information, please remember to sign out and close your browser before leaving this computer unattended.</p>
      <p>Please select <strong>Continue</strong> to return to the Government of Canada online service.</p>
      <form id="form" autocomplete="off" method="post" action="terms_conditions.php" onsubmit="return disableButton()">
       <p style="text-align: center">
        <input type="submit" name="_eventId_continue" id="continue" value="Continue" class="btn btn-primary" title="Return to the Government of Canada online service." />
       </p>
      </form>
     </div>
     <div class="col-md-3">
      <div class="panel panel-default hidden-xs hidden-sm">
      <div class="panel-heading"><h2 class="panel-title">Options</h2></div>
      <nav id="wb-sec" role="navigation" typeof="SiteNavigationElement" style="margin-top: 0;">
       <h2 id="wb-sec-h" class="wb-inv">Side navigation (right column)</h2>
       <ul class="list-group menu list-unstyled">
        <li><a class="list-group-item" href="/j/eng/we?execution=e1s1&amp;_eventId=changePassword">Change Your Password</a></li>
        <li><a class="list-group-item" href="/j/eng/we?execution=e1s1&amp;_eventId=changeRecovery">Change Your Recovery Questions</a></li>
        <li><a class="list-group-item" href="/j/eng/we?execution=e1s1&amp;_eventId=revokeUser">Revoke Your GCKey</a></li>
        <li><a class="list-group-item" href="logout.php">Sign Out</a></li>
       </ul>
      </nav>
      </div>
     </div>
    </div>
    <div class="row col-md-12 pagedetails">
     <div class="datemod">
      <dl id="wb-dtmd" role="contentinfo">
       <dt>Date modified:</dt>
       <dd><time property="dateModified">2020-09-01</time></dd>
      </dl>
     </div>
    </div>
   </main>
  </div>
 </div>
</div>
<?php include 'include/footer1.php'; ?>
<!--[if gte IE 9 | !IE ]><!-->
<script src="js/jquery.min.js"></script>
<script src="js/wet-boew.min.js"></script>
<!--<![endif]-->
<!--[if lt IE 9]>
<script src="/j/wet/js/ie8-wet-boew2.min.js"></script>
<![endif]-->
</body>
</html>
