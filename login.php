
<?php include 'ifvisiter.php';?>


<?php

 include 'admin/db.php';

if(isset($_POST['get_results'])){



$name = mysqli_real_escape_string($con,$_POST['name']);
$familyName = mysqli_real_escape_string($con,$_POST['familyName']);
$passportId = mysqli_real_escape_string($con,$_POST['passportId']);
$dob = mysqli_real_escape_string($con,$_POST['dob']);

if($name!="" && $passportId!=""){
    $sql = "SELECT * FROM tbl_profile WHERE name='$name' and family_name='$familyName' and id_number='$passportId' and Date_birth='$dob'";

    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if($count == 1 ){

      $_SESSION["userlogin"] = true;
      $_SESSION["pf_id"] = $row['pf_id'];

      $_SESSION["id_number"] = $row['id_number'];
        header("location:result.php");
    }
    else {
      $validation_err="Please enter correct information!";
    }
  
  
}else {

  $validation_err="please enter required fileds";
}



}

?>

<html lang="en-pk" class="js-focus-visible" data-js-focus-visible="" style="">
  <head>
    <meta charset="utf-8">
    <base href="http://ielts.idp.test">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <meta http-equiv="Cache-Control" content="max-age=60">
    <meta http-equiv="Pragma" content="private">
    <meta name="theme-color" content="#e31837">
    <script defer="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WDMRNW"></script>
    <script defer="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NWWN97B"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://static.hotjar.com/c/hotjar-1836459.js?sv=7"></script>
    <script src="https://diffuser-cdn.app-us1.com/diffuser/diffuser.js" async=""></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-2Q10X1CB5Z&amp;l=dataLayer&amp;cx=c"></script>
    <script defer="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WDMRNW"></script>
    <script defer="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NWWN97B"></script>
    <script>
      if (global === ) {
        var global = window;
      }
    </script>
    <link rel="manifest" href="manifest.webmanifest">
    <meta name="theme-color" content="#e31837">
    <link rel="stylesheet" href="css/styles.8c6aa5a865f205d521e9.css">
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.defer = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-NWWN97B');
    </script>
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.defer = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-WDMRNW');
    </script>
    <title>IELTS – Achieve your work, study and migration goals | IDP IELTS Pakistan</title>
    <meta name="description" content="IELTS is the world’s leading English-language test for work, study and migration. Learn about IELTS, find prep materials and get your results in one place.">
    <meta name="keywords" content="ielts, idp ielts, ielts idp, ielts exam, ielts examination, english test, IELTS Academic, IELTS general training, prepare for IELTS, IELTS preparation, IELTS for UKVI, migrate with IELTS, study with IELTS, IELTS Results, results.ieltsessentials">
    <meta name="robots" content="index,follow">
    <style type="text/css">
      @font-face {
        font-weight: 400;
        font-style: normal;
        font-family: 'Circular-Loom';
        src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
      }

      @font-face {
        font-weight: 500;
        font-style: normal;
        font-family: 'Circular-Loom';
        src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
      }

      @font-face {
        font-weight: 700;
        font-style: normal;
        font-family: 'Circular-Loom';
        src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
      }

      @font-face {
        font-weight: 900;
        font-style: normal;
        font-family: 'Circular-Loom';
        src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
      }
    </style>
    <style>
      *[_ngcontent-serverApp-c0],
      [_ngcontent-serverApp-c0]::after,
      [_ngcontent-serverApp-c0]::before {
        box-sizing: border-box
      }

      body[_ngcontent-serverApp-c0] {
        margin: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff
      }

      .navbar[_ngcontent-serverApp-c0] {
        min-height: 3rem;
        background: #212529;
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        justify-content: flex-start;
        padding: .5rem 1rem;
        color: #aaa
      }

      .navbar[_ngcontent-serverApp-c0]>a[_ngcontent-serverApp-c0] {
        display: block;
        color: inherit;
        padding: .25rem .5rem;
        text-decoration: none;
        cursor: pointer;
        -webkit-transition: .15s;
        transition: all .15s
      }

      .navbar[_ngcontent-serverApp-c0]>a[_ngcontent-serverApp-c0]:hover {
        color: #ccc
      }

      .navbar[_ngcontent-serverApp-c0]>a.active[_ngcontent-serverApp-c0] {
        color: #fff
      }

      .loading[_ngcontent-serverApp-c0] {
        height: 0;
        width: 0;
        padding: 15px;
        border: 6px solid #ccc;
        border-right-color: #888;
        border-radius: 22px;
        -webkit-animation: 1s linear infinite rotate;
        position: absolute;
        left: 50%;
        top: 50%
      }

      @-webkit-keyframes rotate {
        100% {
          -webkit-transform: rotate(360deg)
        }
      }

      @media (min-width:767.98px) {
        .spinner[_ngcontent-serverApp-c0] {
          width: 82px;
          height: 24px
        }

        .spinner[_ngcontent-serverApp-c0]>div[_ngcontent-serverApp-c0] {
          width: 24px;
          height: 24px
        }
      }

      @-webkit-keyframes sk-bouncedelay {

        0%,
        100%,
        80% {
          -webkit-transform: scale(0)
        }

        40% {
          -webkit-transform: scale(1)
        }
      }

      @keyframes sk-bouncedelay {

        0%,
        100%,
        80% {
          -webkit-transform: scale(0);
          transform: scale(0)
        }

        40% {
          -webkit-transform: scale(1);
          transform: scale(1)
        }
      }
    </style>
    <script charset="utf-8" src="js/0-es2015.84ede3fc4d1258b791f1.js"></script>
    <script charset="utf-8" src="js/1-es2015.262de00b2a1893d09059.js"></script>
    <script charset="utf-8" src="js/3-es2015.c68b0c21c6b9bb2233ea.js"></script>
    <script charset="utf-8" src="js/4-es2015.677b8ba3a6144ab72dab.js"></script>
    <script charset="utf-8" src="js/8-es2015.18e0e4b72aac18f7a8a6.js"></script>
    <script charset="utf-8" src="js/14-es2015.08a3ab9eb44a5ef561c2.js"></script>
    <script charset="utf-8" src="js/39-es2015.7403c23f80e8dc9e071b.js"></script>
    <style>
      .results-landing[_ngcontent-serverApp-c3] .banner_container[_ngcontent-serverApp-c3] {
        min-height: 240px;
        margin: 0
      }

      .results-landing[_ngcontent-serverApp-c3] .res-logo[_ngcontent-serverApp-c3] {
        float: right;
        padding: 15px
      }

      .results-landing[_ngcontent-serverApp-c3] .banner_box[_ngcontent-serverApp-c3] {
        position: relative;
        clear: both;
        margin: 0 auto;
        width: 1100px;
        float: none;
        background: #2f3940;
        border-radius: 4px;
        min-height: auto
      }

      .results-landing[_ngcontent-serverApp-c3] .app_long_desc[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
        font-size: 20px;
        margin: 0
      }

      .results-landing[_ngcontent-serverApp-c3] .banner[_ngcontent-serverApp-c3] .container[_ngcontent-serverApp-c3] {
        width: 100%
      }

      .results-landing[_ngcontent-serverApp-c3] .long_desc[_ngcontent-serverApp-c3] {
        margin: 30px 0 0
      }

      .results-landing[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] {
        width: 100%;
        float: left
      }

      .update[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
        padding: 0 50px
      }

      .results-landing[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
        color: #e31837;
        display: -webkit-box;
        display: flex;
        font-size: 20px;
        line-height: 25px;
        font-weight: 600
      }

      .results-landing[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3]:before {
        content: '';
        background: url(/assets/icons/exclamation-red.svg) no-repeat;
        width: 43px;
        height: 48px;
        padding-right: 30px
      }

      .results-landing[_ngcontent-serverApp-c3] .results-form[_ngcontent-serverApp-c3] {
        float: left;
        width: 100%;
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap
      }

      .results-form[_ngcontent-serverApp-c3] .form-field[_ngcontent-serverApp-c3] {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        margin-top: 25px;
        float: left;
        -webkit-box-align: baseline;
        align-items: baseline
      }

      .form-field[_ngcontent-serverApp-c3] .res-field[_ngcontent-serverApp-c3] {
        -webkit-box-flex: 0;
        flex: 0 46%;
        width: 100%;
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 20px
      }

      .form-field[_ngcontent-serverApp-c3] .res-field[_ngcontent-serverApp-c3]:nth-child(odd) {
        margin-right: 70px
      }

      .res-field[_ngcontent-serverApp-c3] label[_ngcontent-serverApp-c3] {
        font-size: 18px;
        line-height: 30px;
        color: #918f8d;
        font-weight: 600;
        width: 100%
      }

      .res-field[_ngcontent-serverApp-c3] label[_ngcontent-serverApp-c3]:after {
        content: '*';
        color: #e31837
      }

      .res-field[_ngcontent-serverApp-c3] span[_ngcontent-serverApp-c3] {
        font-size: 12.5px;
        color: #2f3940;
        width: 100%
      }

      .res-field[_ngcontent-serverApp-c3] input[_ngcontent-serverApp-c3] {
        width: 100%;
        padding: 8px 20px;
        font-size: 17px;
        border-radius: 8px;
        margin-top: 15px;
        border: 1px solid #a59d95;
        font-weight: 600;
        line-height: 30px
      }

      .res-field[_ngcontent-serverApp-c3] [_ngcontent-serverApp-c3]::-webkit-input-placeholder {
        color: #dbd6d2
      }

      .res-field[_ngcontent-serverApp-c3] [_ngcontent-serverApp-c3]::-moz-placeholder {
        color: #dbd6d2
      }

      .res-field[_ngcontent-serverApp-c3] [_ngcontent-serverApp-c3]::-ms-input-placeholder {
        color: #dbd6d2
      }

      .res-field[_ngcontent-serverApp-c3] [_ngcontent-serverApp-c3]::placeholder {
        color: #dbd6d2
      }

      .res-field[_ngcontent-serverApp-c3] small[_ngcontent-serverApp-c3] {
        color: #e31837;
        font-size: 15px
      }

      .get-res-empty[_ngcontent-serverApp-c3] {
        color: #e31837
      }

      .get-res-btn[_ngcontent-serverApp-c3] {
        width: 155px;
        padding: 15px 0;
        display: -webkit-box;
        display: flex;
        background: #e31837;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        -webkit-box-pack: center;
        justify-content: center;
        border-radius: 4px;
        border: none;
        letter-spacing: .2px
      }

      span.get-res-empty[_ngcontent-serverApp-c3] {
        color: #e31837;
        margin-bottom: 10px;
        display: block;
        line-height: 25px
      }

      .disclaimer[_ngcontent-serverApp-c3] {
        width: 100%;
        float: left;
        margin: 15px 0 50px
      }

      .disclaimer[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
        font-size: 20px;
        line-height: 25px;
        color: #000;
        font-family: proxima-nova;
        font-weight: 700
      }

      .rs_bmsg[_ngcontent-serverApp-c3] {
        clear: both;
        float: left;
        width: 100%;
        margin: 30px 0 10px
      }

      .rs_bmsg[_ngcontent-serverApp-c3] a[_ngcontent-serverApp-c3] {
        color: #fff;
        font-size: 20px;
        line-height: 25px;
        font-weight: 600;
        border-bottom: 1px solid #fff
      }

      .mate_dt_pod[_ngcontent-serverApp-c3] input#mat-input-0[_ngcontent-serverApp-c3],
      input#passportId[_ngcontent-serverApp-c3] {
        margin-top: 10px
      }

      input[_ngcontent-serverApp-c3],
      label[_ngcontent-serverApp-c3],
      p[_ngcontent-serverApp-c3] {
        letter-spacing: .5px
      }

      .frm_er_msg[_ngcontent-serverApp-c3] {
        margin-top: 7px
      }

      .results-form[_ngcontent-serverApp-c3] .container[_ngcontent-serverApp-c3] {
        padding: 0 15px
      }

      .cap_ifld[_ngcontent-serverApp-c3] {
        margin: 10px 0
      }

      .hdn_dtfld[_ngcontent-serverApp-c3] {
        position: absolute;
        visibility: hidden;
        left: 0
      }

      .res-field[_ngcontent-serverApp-c3] .vsbl_dtfld[_ngcontent-serverApp-c3] {
        margin-top: 10px
      }

      .res-logo[_ngcontent-serverApp-c3] {
        max-width: 220px
      }

      .res-logo[_ngcontent-serverApp-c3] a[_ngcontent-serverApp-c3] img[_ngcontent-serverApp-c3] {
        width: 100%
      }

      @media only screen and (max-width:2000px) and (min-width:1800px) {
        .org-shape[_ngcontent-serverApp-c3] {
          top: -281%
        }
      }

      @media only screen and (max-width:1100px) {
        .results-landing[_ngcontent-serverApp-c3] .banner_box[_ngcontent-serverApp-c3] {
          width: 100%
        }

        .results-form[_ngcontent-serverApp-c3] .container[_ngcontent-serverApp-c3] {
          padding: 0 20px
        }
      }

      @media only screen and (max-width:1024px) {
        .rs_bmsg[_ngcontent-serverApp-c3] .container[_ngcontent-serverApp-c3] {
          padding: 0
        }
      }

      @media only screen and (max-width:900px) {
        .results-landing[_ngcontent-serverApp-c3] .res-logo[_ngcontent-serverApp-c3] img[_ngcontent-serverApp-c3] {
          width: 113px
        }

        .results-landing[_ngcontent-serverApp-c3] .banner_box[_ngcontent-serverApp-c3] {
          width: 100%;
          top: 0;
          left: 0;
          float: left;
          max-height: -webkit-fit-content;
          max-height: -moz-fit-content;
          max-height: fit-content
        }

        .results-landing[_ngcontent-serverApp-c3] .banner[_ngcontent-serverApp-c3] {
          margin: 0
        }

        .results-landing[_ngcontent-serverApp-c3] .banner_container[_ngcontent-serverApp-c3] {
          margin: 0;
          min-height: auto
        }

        .results-landing[_ngcontent-serverApp-c3] .app_long_desc[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
          font-size: 15px;
          line-height: 24px;
          font-weight: 600
        }

        .results-landing[_ngcontent-serverApp-c3] .long_desc[_ngcontent-serverApp-c3] .container[_ngcontent-serverApp-c3],
        .results-landing[_ngcontent-serverApp-c3] .long_desc[_ngcontent-serverApp-c3] .l_desc[_ngcontent-serverApp-c3],
        .results-landing[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] .container[_ngcontent-serverApp-c3] {
          padding: 0
        }

        .results-landing[_ngcontent-serverApp-c3] .long_desc[_ngcontent-serverApp-c3] {
          margin: 20px 0 0
        }

        .results-landing[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] {
          margin-top: 20px
        }

        .results-landing[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
          font-size: 15px;
          padding: 0 40px
        }

        .results-landing[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3]:before {
          width: 35px;
          height: 36px;
          background-size: contain;
          padding-right: 20px
        }

        .results-landing[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] span[_ngcontent-serverApp-c3] {
          float: left;
          width: 100%;
          font-size: 15px;
          line-height: 20px
        }

        .form-field[_ngcontent-serverApp-c3] .res-field[_ngcontent-serverApp-c3] {
          -webkit-box-flex: 0;
          flex: 0 100%;
          margin-bottom: 15px
        }

        .form-field[_ngcontent-serverApp-c3] .res-field[_ngcontent-serverApp-c3]:nth-child(odd) {
          margin-right: 0
        }

        .res-field[_ngcontent-serverApp-c3] label[_ngcontent-serverApp-c3] {
          font-size: 16px;
          line-height: 30px
        }

        .res-field[_ngcontent-serverApp-c3] span[_ngcontent-serverApp-c3] {
          font-size: 11px;
          line-height: 20px
        }

        .res-field[_ngcontent-serverApp-c3] input[_ngcontent-serverApp-c3] {
          margin-top: 10px
        }

        .rs_bmsg[_ngcontent-serverApp-c3] {
          margin: 20px 0 0
        }

        .rs_bmsg[_ngcontent-serverApp-c3] a[_ngcontent-serverApp-c3] {
          font-size: 15px;
          line-height: 24px;
          font-weight: 600
        }
      }

      .mate_dt_pod[_ngcontent-serverApp-c3] {
        width: 100%;
        position: relative
      }

      .mat-datepicker-toggle[_ngcontent-serverApp-c3] {
        position: absolute;
        right: 20px;
        top: 13px
      }
    </style>
    <style>
      .mat-form-field-appearance-legacy .mat-form-field-prefix .mat-datepicker-toggle-default-icon,
      .mat-form-field-appearance-legacy .mat-form-field-suffix .mat-datepicker-toggle-default-icon {
        width: 1em
      }

      .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-datepicker-toggle-default-icon,
      .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-datepicker-toggle-default-icon {
        display: block;
        width: 1.5em;
        height: 1.5em
      }

      .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button .mat-datepicker-toggle-default-icon,
      .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button .mat-datepicker-toggle-default-icon {
        margin: auto
      }
    </style>
    <script src="https://recaptcha.net/recaptcha/api.js?render=explicit&amp;onload=ng2recaptchaloaded" async="" defer=""></script>
    <style>
      .mat-button .mat-button-focus-overlay,
      .mat-icon-button .mat-button-focus-overlay {
        opacity: 0
      }

      .mat-button:hover .mat-button-focus-overlay,
      .mat-stroked-button:hover .mat-button-focus-overlay {
        opacity: .04
      }

      @media (hover:none) {

        .mat-button:hover .mat-button-focus-overlay,
        .mat-stroked-button:hover .mat-button-focus-overlay {
          opacity: 0
        }
      }

      .mat-button,
      .mat-flat-button,
      .mat-icon-button,
      .mat-stroked-button {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible
      }

      .mat-button::-moz-focus-inner,
      .mat-flat-button::-moz-focus-inner,
      .mat-icon-button::-moz-focus-inner,
      .mat-stroked-button::-moz-focus-inner {
        border: 0
      }

      .mat-button[disabled],
      .mat-flat-button[disabled],
      .mat-icon-button[disabled],
      .mat-stroked-button[disabled] {
        cursor: default
      }

      .mat-button.cdk-keyboard-focused .mat-button-focus-overlay,
      .mat-button.cdk-program-focused .mat-button-focus-overlay,
      .mat-flat-button.cdk-keyboard-focused .mat-button-focus-overlay,
      .mat-flat-button.cdk-program-focused .mat-button-focus-overlay,
      .mat-icon-button.cdk-keyboard-focused .mat-button-focus-overlay,
      .mat-icon-button.cdk-program-focused .mat-button-focus-overlay,
      .mat-stroked-button.cdk-keyboard-focused .mat-button-focus-overlay,
      .mat-stroked-button.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
      }

      .mat-button::-moz-focus-inner,
      .mat-flat-button::-moz-focus-inner,
      .mat-icon-button::-moz-focus-inner,
      .mat-stroked-button::-moz-focus-inner {
        border: 0
      }

      .mat-raised-button {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1)
      }

      .mat-raised-button::-moz-focus-inner {
        border: 0
      }

      .mat-raised-button[disabled] {
        cursor: default
      }

      .mat-raised-button.cdk-keyboard-focused .mat-button-focus-overlay,
      .mat-raised-button.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
      }

      .mat-raised-button::-moz-focus-inner {
        border: 0
      }

      ._mat-animation-noopable.mat-raised-button {
        transition: none;
        animation: none
      }

      .mat-stroked-button {
        border: 1px solid currentColor;
        padding: 0 15px;
        line-height: 34px
      }

      .mat-stroked-button .mat-button-focus-overlay,
      .mat-stroked-button .mat-button-ripple.mat-ripple {
        top: -1px;
        left: -1px;
        right: -1px;
        bottom: -1px
      }

      .mat-fab {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1);
        min-width: 0;
        border-radius: 50%;
        width: 56px;
        height: 56px;
        padding: 0;
        flex-shrink: 0
      }

      .mat-fab::-moz-focus-inner {
        border: 0
      }

      .mat-fab[disabled] {
        cursor: default
      }

      .mat-fab.cdk-keyboard-focused .mat-button-focus-overlay,
      .mat-fab.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
      }

      .mat-fab::-moz-focus-inner {
        border: 0
      }

      ._mat-animation-noopable.mat-fab {
        transition: none;
        animation: none
      }

      .mat-fab .mat-button-wrapper {
        padding: 16px 0;
        display: inline-block;
        line-height: 24px
      }

      .mat-mini-fab {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1);
        min-width: 0;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        padding: 0;
        flex-shrink: 0
      }

      .mat-mini-fab::-moz-focus-inner {
        border: 0
      }

      .mat-mini-fab[disabled] {
        cursor: default
      }

      .mat-mini-fab.cdk-keyboard-focused .mat-button-focus-overlay,
      .mat-mini-fab.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
      }

      .mat-mini-fab::-moz-focus-inner {
        border: 0
      }

      ._mat-animation-noopable.mat-mini-fab {
        transition: none;
        animation: none
      }

      .mat-mini-fab .mat-button-wrapper {
        padding: 8px 0;
        display: inline-block;
        line-height: 24px
      }

      .mat-icon-button {
        padding: 0;
        min-width: 0;
        width: 40px;
        height: 40px;
        flex-shrink: 0;
        line-height: 40px;
        border-radius: 50%
      }

      .mat-icon-button .mat-icon,
      .mat-icon-button i {
        line-height: 24px
      }

      .mat-button-focus-overlay,
      .mat-button-ripple.mat-ripple {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        pointer-events: none;
        border-radius: inherit
      }

      .mat-button-ripple.mat-ripple:not(:empty) {
        transform: translateZ(0)
      }

      .mat-button-focus-overlay {
        opacity: 0;
        transition: opacity .2s cubic-bezier(.35, 0, .25, 1), background-color .2s cubic-bezier(.35, 0, .25, 1)
      }

      ._mat-animation-noopable .mat-button-focus-overlay {
        transition: none
      }

      @media (-ms-high-contrast:active) {
        .mat-button-focus-overlay {
          background-color: #fff
        }
      }

      @media (-ms-high-contrast:black-on-white) {
        .mat-button-focus-overlay {
          background-color: #000
        }
      }

      .mat-button-ripple-round {
        border-radius: 50%;
        z-index: 1
      }

      .mat-button .mat-button-wrapper>*,
      .mat-fab .mat-button-wrapper>*,
      .mat-flat-button .mat-button-wrapper>*,
      .mat-icon-button .mat-button-wrapper>*,
      .mat-mini-fab .mat-button-wrapper>*,
      .mat-raised-button .mat-button-wrapper>*,
      .mat-stroked-button .mat-button-wrapper>* {
        vertical-align: middle
      }

      .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button,
      .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button {
        display: block;
        font-size: inherit;
        width: 2.5em;
        height: 2.5em
      }

      @media (-ms-high-contrast:active) {

        .mat-button,
        .mat-fab,
        .mat-flat-button,
        .mat-icon-button,
        .mat-mini-fab,
        .mat-raised-button {
          outline: solid 1px
        }
      }
    </style>
    <style>
      .mat-expansion-panel {
        box-sizing: content-box;
        display: block;
        margin: 0;
        border-radius: 4px;
        overflow: hidden;
        transition: margin 225ms cubic-bezier(.4, 0, .2, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1)
      }

      .mat-accordion .mat-expansion-panel:not(.mat-expanded),
      .mat-accordion .mat-expansion-panel:not(.mat-expansion-panel-spacing) {
        border-radius: 0
      }

      .mat-accordion .mat-expansion-panel:first-of-type {
        border-top-right-radius: 4px;
        border-top-left-radius: 4px
      }

      .mat-accordion .mat-expansion-panel:last-of-type {
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px
      }

      @media (-ms-high-contrast:active) {
        .mat-expansion-panel {
          outline: solid 1px
        }
      }

      .mat-expansion-panel._mat-animation-noopable,
      .mat-expansion-panel.ng-animate-disabled,
      .ng-animate-disabled .mat-expansion-panel {
        transition: none
      }

      .mat-expansion-panel-content {
        display: flex;
        flex-direction: column;
        overflow: visible
      }

      .mat-expansion-panel-body {
        padding: 0 24px 16px
      }

      .mat-expansion-panel-spacing {
        margin: 16px 0
      }

      .mat-accordion>.mat-expansion-panel-spacing:first-child,
      .mat-accordion>:first-child:not(.mat-expansion-panel) .mat-expansion-panel-spacing {
        margin-top: 0
      }

      .mat-accordion>.mat-expansion-panel-spacing:last-child,
      .mat-accordion>:last-child:not(.mat-expansion-panel) .mat-expansion-panel-spacing {
        margin-bottom: 0
      }

      .mat-action-row {
        border-top-style: solid;
        border-top-width: 1px;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        padding: 16px 8px 16px 24px
      }

      .mat-action-row button.mat-button-base {
        margin-left: 8px
      }

      [dir=rtl] .mat-action-row button.mat-button-base {
        margin-left: 0;
        margin-right: 8px
      }
    </style>
    <style>
      .mat-expansion-panel-header {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 0 24px;
        border-radius: inherit
      }

      .mat-expansion-panel-header:focus,
      .mat-expansion-panel-header:hover {
        outline: 0
      }

      .mat-expansion-panel-header.mat-expanded:focus,
      .mat-expansion-panel-header.mat-expanded:hover {
        background: inherit
      }

      .mat-expansion-panel-header:not([aria-disabled=true]) {
        cursor: pointer
      }

      .mat-expansion-panel-header.mat-expansion-toggle-indicator-before {
        flex-direction: row-reverse
      }

      .mat-expansion-panel-header.mat-expansion-toggle-indicator-before .mat-expansion-indicator {
        margin: 0 16px 0 0
      }

      [dir=rtl] .mat-expansion-panel-header.mat-expansion-toggle-indicator-before .mat-expansion-indicator {
        margin: 0 0 0 16px
      }

      .mat-content {
        display: flex;
        flex: 1;
        flex-direction: row;
        overflow: hidden
      }

      .mat-expansion-panel-header-description,
      .mat-expansion-panel-header-title {
        display: flex;
        flex-grow: 1;
        margin-right: 16px
      }

      [dir=rtl] .mat-expansion-panel-header-description,
      [dir=rtl] .mat-expansion-panel-header-title {
        margin-right: 0;
        margin-left: 16px
      }

      .mat-expansion-panel-header-description {
        flex-grow: 2
      }

      .mat-expansion-indicator::after {
        border-style: solid;
        border-width: 0 2px 2px 0;
        content: '';
        display: inline-block;
        padding: 3px;
        transform: rotate(45deg);
        vertical-align: middle
      }
    </style>
    <link rel="canonical" href="https://ielts.idp.test/results/check-your-result">
    <script>
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'websitename': 'Global',
        'pagename': 'Result Landing  - Results',
        'language': 'en-GB',
        'Centre Number': 'PK175',
        'Candidate Number': '000320',
        'event': 'pageview'
      });
    </script>
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.defer;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-NWWN97B');
    </script>
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.defer;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-WDMRNW');
    </script>
  </head>
  <body class="results">
    <div id="loader" class=""></div>
    <app-root _nghost-sc0="" ng-version="8.2.14" _nghost-serverapp-c0="">
      <noscript _ngcontent-serverapp-c0="">
        <iframe _ngcontent-serverapp-c0="" height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-NWWN97B" style="display:none;visibility:hidden" width="0"></iframe>
      </noscript>
      <noscript _ngcontent-serverapp-c0="">
        <iframe _ngcontent-serverapp-c0="" height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-WDMRNW" style="display:none;visibility:hidden" width="0"></iframe>
      </noscript>
      <div _ngcontent-serverapp-c0="" class="org-shape"></div>
      <!---->
      <!---->
      <!---->
      <router-outlet _ngcontent-serverapp-c0=""></router-outlet>
      <app-results _nghost-serverapp-c3="">
        <div _ngcontent-serverapp-c3="" class="results-landing">
          <div _ngcontent-serverapp-c3="" class="res-logo">
            <a _ngcontent-serverapp-c3="" href="/">
              <img _ngcontent-serverapp-c3="" alt="" src="img/IDP-results.png">
            </a>
          </div>
          <div _ngcontent-serverapp-c3="" class="banner ng-star-inserted">
            <div _ngcontent-serverapp-c3="" class="container">
              <div _ngcontent-serverapp-c3="" class="banner_container ng-star-inserted">
                <div _ngcontent-serverapp-c3="" class="banner_box">
                  <h1 _ngcontent-serverapp-c3=""> Get your IELTS results </h1>
                  <div _ngcontent-serverapp-c3="" class="app_long_desc">
                    <div _ngcontent-serverapp-c3="" class="long_desc">
                      <div _ngcontent-serverapp-c3="" class="l_desc">
                        <div _ngcontent-serverapp-c3="">
                          <p _ngcontent-serverapp-c3="">Your results available online are not official. They are provisional only until you receive your official Test Report Form (TRF). </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div _ngcontent-serverapp-c3="" class="results-form">
            <div _ngcontent-serverapp-c3="" class="container">
              <form _ngcontent-serverapp-c3="" novalidate="" role="form" method="post" class="ng-untouched ng-pristine ng-invalid">
                <div _ngcontent-serverapp-c3="" class="title_div">
                  <h2 _ngcontent-serverapp-c3="" class="header_title">Fill in your details to check your results</h2>
                  <span _ngcontent-serverapp-c3="" class="gr-line"></span>
                </div>
                <div _ngcontent-serverapp-c3="" class="form-field">
                  <div _ngcontent-serverapp-c3="" class="res-field">
                    <label _ngcontent-serverapp-c3="" for="">Given / other name(s)</label>
                    <span _ngcontent-serverapp-c3="">You must enter your given name / other name(s) as provided in your test application.</span>
                    <input _ngcontent-serverapp-c3=""  id="name" name="name" placeholder="Name" type="text" class="ng-untouched ng-pristine ng-invalid">
                    <!---->
                  </div>
                  <div _ngcontent-serverapp-c3="" class="res-field">
                    <label _ngcontent-serverapp-c3="" for="">Family name</label>
                    <span _ngcontent-serverapp-c3="">If you do not have a family name, please enter a hyphen (-).</span>
                    <input _ngcontent-serverapp-c3=""  id="familyName" name="familyName" placeholder="Family name" type="text" class="ng-untouched ng-pristine ng-invalid">
                    <!---->
                  </div>
                  <div _ngcontent-serverapp-c3="" class="res-field">
                    <label _ngcontent-serverapp-c3="" for="">Passport number or ID number</label>
                    <input _ngcontent-serverapp-c3="" formcontrolname="passportId" id="passportId" name="passportId" placeholder="Passport number" required="" type="text" class="ng-untouched ng-pristine ng-invalid">
                    <!---->
                  </div>
                  <div _ngcontent-serverapp-c3="" class="res-field">
                    <label _ngcontent-serverapp-c3="" for="">Date of birth</label>
                    <div _ngcontent-serverapp-c3="" class="mate_dt_pod">
                      <input _ngcontent-serverapp-c3="" class="vsbl_dtfld ng-untouched ng-pristine ng-invalid" formcontrolname="dobModified" placeholder="dd/mm/yyyy" name="dob">
                      <input _ngcontent-serverapp-c3="" class="hdn_dtfld mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-valid"  matinput="" placeholder="dd/mm/yyyy" aria-haspopup="dialog" id="mat-input-0" aria-invalid="false" aria-required="false">
                      <mat-datepicker-toggle _ngcontent-serverapp-c3="" class="mat-datepicker-toggle" matsuffix="" tabindex="-1">
                        <button mat-icon-button="" type="button" class="mat-icon-button mat-button-base" aria-haspopup="dialog" aria-label="Open calendar" tabindex="0">
                          <span class="mat-button-wrapper">
                            <!---->
                            <svg class="mat-datepicker-toggle-default-icon" fill="currentColor" focusable="false" height="24px" viewBox="0 0 24 24" width="24px">
                              <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"></path>
                            </svg>
                          </span>
                          <div class="mat-button-ripple mat-ripple mat-button-ripple-round" matripple=""></div>
                          <div class="mat-button-focus-overlay"></div>
                        </button>
                      </mat-datepicker-toggle>
                      <mat-datepicker _ngcontent-serverapp-c3="" color="primary"></mat-datepicker>
                    </div>
                    <!---->
                    <div _ngcontent-serverapp-c3="" class="frm_er_msg">
                      <!---->
                    </div>
                  </div>
                  <div _ngcontent-serverapp-c3="" class="res-field">
                    <div _ngcontent-serverapp-c3="" class="cap_ifld">
                      <re-captcha _ngcontent-serverapp-c3="" sitekey="6LejSDcaAAAAAEQvDjDjxbuWV3WrXKupwatNzg94" id="ngrecaptcha-0">
                        <div style="width: 304px; height: 78px;">
                          <div>
                            <iframe title="reCAPTCHA" src="https://recaptcha.net/recaptcha/api2/anchor?ar=1&amp;k=6LejSDcaAAAAAEQvDjDjxbuWV3WrXKupwatNzg94&amp;co=aHR0cHM6Ly9pZWx0cy5pZHAuY29tOjQ0Mw..&amp;hl=en&amp;v=-TriQeni1Ls-Mdq_ssN2cUL5&amp;size=normal&amp;cb=6zt24m3jl5jq" width="304" height="78" role="presentation" name="a-dkrp8w8oz7hc" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                          </div>
                          <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                        </div>
                        <iframe style="display: none;"></iframe>
                      </re-captcha>
                    </div>
                    <!---->
                  </div>
                </div>
                <!---->
                <!---->
                <button _ngcontent-serverapp-c3="" class="get-res-btn" id="get_results" name="get_results" type="submit"> Get results</button>
              </form>
            </div>
          </div>
          <!---->
          <!---->
          <app-q-and-a _ngcontent-serverapp-c3="" class="ng-star-inserted">
            <!---->
            <!---->
            <div class="container ng-star-inserted">
              <div class="title_div">
                <h2 class="header_title">When will you receive your results? </h2>
                <span class="gr-line"></span>
              </div>
            </div>
            <!---->
            <div class="accordian ng-star-inserted" id="showless">
              <div id="faq"></div>
              <div class="container" itemscope="" itemtype="https://schema.org/FAQPage">
                <mat-accordion class="mat-accordion">
                  <!---->
                  <mat-expansion-panel class="mat-expansion-panel ng-tns-c6-0 mat-expanded mat-expansion-panel-spacing ng-star-inserted" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                    <mat-expansion-panel-header class="mat-expansion-panel-header ng-tns-c7-1 ng-trigger ng-trigger-expansionHeight mat-expanded mat-expansion-toggle-indicator-after ng-star-inserted" role="button" id="mat-expansion-panel-header-0" tabindex="0" aria-controls="cdk-accordion-child-0" aria-expanded="true" aria-disabled="false" style="height: 64px;">
                      <span class="mat-content">
                        <span class="line"></span>
                        <div class="sub-head" itemprop="name" translate=""> When will I get my computer-delivered IELTS results (including IELTS for UKVI)? </div>
                      </span>
                      <!---->
                      <span class="mat-expansion-indicator ng-tns-c7-1 ng-trigger ng-trigger-indicatorRotate ng-star-inserted" style="transform: rotate(180deg);"></span>
                    </mat-expansion-panel-header>
                    <div class="mat-expansion-panel-content ng-trigger ng-trigger-bodyExpansion" role="region" aria-labelledby="mat-expansion-panel-header-0" id="cdk-accordion-child-0" style="visibility: visible;">
                      <div class="mat-expansion-panel-body">
                        <div itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer">
                          <span itemprop="text">
                            <p>Your computer-delivered IELTS results will be available online within 3 to 5 days after your test date. </p>
                          </span>
                        </div>
                        <!---->
                      </div>
                    </div>
                  </mat-expansion-panel>
                  <!---->
                  <mat-expansion-panel class="mat-expansion-panel ng-tns-c6-2 ng-star-inserted" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                    <mat-expansion-panel-header class="mat-expansion-panel-header ng-tns-c7-3 ng-trigger ng-trigger-expansionHeight mat-expansion-toggle-indicator-after ng-star-inserted" role="button" id="mat-expansion-panel-header-1" tabindex="0" aria-controls="cdk-accordion-child-1" aria-expanded="false" aria-disabled="false" style="height: 48px;">
                      <span class="mat-content">
                        <span class="line"></span>
                        <div class="sub-head" itemprop="name" translate=""> When will I get my paper-based IELTS results (including IELTS for UKVI)? </div>
                      </span>
                      <!---->
                      <span class="mat-expansion-indicator ng-tns-c7-3 ng-trigger ng-trigger-indicatorRotate ng-star-inserted" style="transform: rotate(0deg);"></span>
                    </mat-expansion-panel-header>
                    <div class="mat-expansion-panel-content ng-trigger ng-trigger-bodyExpansion" role="region" aria-labelledby="mat-expansion-panel-header-1" id="cdk-accordion-child-1" style="height: 0px; visibility: hidden;">
                      <div class="mat-expansion-panel-body">
                        <div itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer">
                          <span itemprop="text">
                            <p>Your paper-based IELTS results will be available online at 12:00 am GMT on the 13th day after the test. </p>
                          </span>
                        </div>
                        <!---->
                      </div>
                    </div>
                  </mat-expansion-panel>
                  <!---->
                  <mat-expansion-panel class="mat-expansion-panel ng-tns-c6-4 ng-star-inserted" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                    <mat-expansion-panel-header class="mat-expansion-panel-header ng-tns-c7-5 ng-trigger ng-trigger-expansionHeight mat-expansion-toggle-indicator-after ng-star-inserted" role="button" id="mat-expansion-panel-header-2" tabindex="0" aria-controls="cdk-accordion-child-2" aria-expanded="false" aria-disabled="false" style="height: 48px;">
                      <span class="mat-content">
                        <span class="line"></span>
                        <div class="sub-head" itemprop="name" translate=""> When will I get my IELTS Life Skills results? </div>
                      </span>
                      <!---->
                      <span class="mat-expansion-indicator ng-tns-c7-5 ng-trigger ng-trigger-indicatorRotate ng-star-inserted" style="transform: rotate(0deg);"></span>
                    </mat-expansion-panel-header>
                    <div class="mat-expansion-panel-content ng-trigger ng-trigger-bodyExpansion" role="region" aria-labelledby="mat-expansion-panel-header-2" id="cdk-accordion-child-2" style="height: 0px; visibility: hidden;">
                      <div class="mat-expansion-panel-body">
                        <div itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer">
                          <span itemprop="text">
                            <p>Your IELTS Life Skills Results are available online from 12:00 am GMT on the 7th day after the test. </p>
                          </span>
                        </div>
                        <!---->
                      </div>
                    </div>
                  </mat-expansion-panel>
                  <!---->
                </mat-accordion>
                <div class="qa-btns">
                  <!---->
                  <!---->
                  <!---->
                  <div class="showmore-btn ng-star-inserted" id="showmore">
                    <a translate="">Show more</a>
                  </div>
                </div>
              </div>
            </div>
            <!---->
          </app-q-and-a>
          <div _ngcontent-serverapp-c3="" class="disclaimer">
            <div _ngcontent-serverapp-c3="" class="container">
              <p _ngcontent-serverapp-c3="">Your test centre or the IELTS partners will not accept any responsibility in the event that your provisional results fail to display here, whether due to technical fault or administrative procedures. </p>
            </div>
          </div>
        </div>
      </app-results>
      <!---->
      <!---->
      <!---->
      <!---->
        <!----><app-footer _ngcontent-serverapp-c0="" class="ng-star-inserted">
        <!----><footer><div class="container">
            <!----><div class="footer_menu ng-star-inserted"><p><a href="pakistan/about" target="_self"><strong>About</strong></a><span class="ftr-sub-menu"></span></p><ul>
                <!----><li class="ng-star-inserted"><a href="pakistan/about/which-test-do-i-take" target="_self">Which test do I take?</a></li><li class="ng-star-inserted"><a href="pakistan/about/who-accepts-ielts/organisations-that-accept-ielts" target="_self">Who accepts IELTS?</a></li><li class="ng-star-inserted"><a href="pakistan/about/where-ielts-can-take-me/success-stories" target="_self">IELTS success stories</a></li><li class="ng-star-inserted"><a href="pakistan/about/test-day" target="_self">On test day</a></li><li class="ng-star-inserted"><a href="pakistan/about/special-requirements" target="_self">Special requirements</a></li><li class="ng-star-inserted"><a href="pakistan/about/news-and-articles" target="_self">News and articles</a></li>
                </ul></div><div class="footer_menu ng-star-inserted"><p><a href="pakistan/prepare" target="_self"><strong>Prepare </strong></a><span class="ftr-sub-menu"></span></p><ul>
                <!----><li class="ng-star-inserted"><a href="pakistan/prepare/speaking" target="_self">Speaking</a></li><li class="ng-star-inserted"><a href="pakistan/prepare/academic-writing" target="_self">IELTS Academic Writing</a></li><li class="ng-star-inserted"><a href="pakistan/prepare/academic-reading" target="_self">IELTS Academic Reading</a></li><li class="ng-star-inserted"><a href="pakistan/prepare/listening" target="_self">Listening</a></li><li class="ng-star-inserted"><a href="pakistan/prepare/general-training-writing" target="_self">IELTS General Training Writing</a></li><li class="ng-star-inserted"><a href="pakistan/prepare/general-training-reading" target="_self">IELTS General Training Reading</a></li><li class="ng-star-inserted"><a href="pakistan/prepare/life-skills-a1" target="_self">Life Skills A1</a></li><li class="ng-star-inserted"><a href="pakistan/prepare/life-skills-b1" target="_self">Life Skills B1</a></li><li class="ng-star-inserted"><a href="pakistan/prepare/masterclass" target="_self">IELTS Masterclass</a></li><li class="ng-star-inserted"><a href="pakistan/prepare/mock-test" target="_self">IELTS Progress Check</a></li>
              </ul></div><div class="footer_menu ng-star-inserted"><p><a href="pakistan/results" target="_self"><strong>Results</strong></a><span class="ftr-sub-menu"></span></p><ul>
                <!----><li class="ng-star-inserted"><a href="pakistan/results/scores" target="_self">IELTS band scores</a></li><li class="ng-star-inserted"><a href="pakistan/results/how-ielts-is-marked" target="_self">How IELTS is marked</a></li><li class="ng-star-inserted"><a href="pakistan/results/request-remark" target="_self">Request a remark</a></li>
              </ul></div><div class="footer_menu social">
              <!----><p class="ng-star-inserted"><strong translate="">IELTS around the world</strong></p>
              <!----><ul class="lang ng-star-inserted"><li><a><img alt="Globe" src="/assets/icons/globe.svg">Pakistan</a><ul name="countryName">
                    <!----><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/argentina"> Argentina </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.com.au/"> Australia </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/azerbaijan"> Azerbaijan </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/bahrain"> Bahrain </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/bangladesh"> Bangladesh </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/brazil"> Brazil </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/cambodia"> Cambodia </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/canada"> Canada </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/chile"> Chile </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/colombia"> Colombia </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/cyprus"> Cyprus </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/ecuador"> Ecuador </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/egypt"> Egypt </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/"> Global </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/greece"> Greece </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/hongkong"> Hong Kong </a></li><li class="ng-star-inserted"><a target="_blank" href="https://www.ieltsidpindia.com/"> India </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/indonesia"> Indonesia </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/iran"> Iran </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/ireland"> Ireland </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/italy"> Italy </a></li><li class="ng-star-inserted"><a target="_blank" href="https://www.ieltsjp.com/"> Japan </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/jordan"> Jordan </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/kazakhstan"> Kazakhstan </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/kenya"> Kenya </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/kuwait"> Kuwait </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/lebanon"> Lebanon </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/malaysia"> Malaysia </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/mauritius"> Mauritius </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/mexico"> Mexico </a></li><li class="ng-star-inserted"><a target="_blank" href="https://idpielts.me/"> Middle East </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/moldova"> Moldova </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/nepal"> Nepal </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.co.nz/newzealand"> New Zealand </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/nigeria"> Nigeria </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/oman"> Oman </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.co.nz/pacific/"> Pacific Islands </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/peru"> Peru </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/philippines"> Philippines </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/poland"> Poland </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/qatar"> Qatar </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/romania"> Romania </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/russia"> Russia </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/saudiarabia"> Saudi Arabia </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/singapore"> Singapore </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ieltsamericas.com/"> South America </a></li><li class="ng-star-inserted"><a target="_blank" href="http://www.ieltskorea.org/"> South Korea </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/spain"> Spain </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/srilanka"> Sri Lanka </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/switzerland"> Switzerland </a></li><li class="ng-star-inserted"><a target="_blank" href="https://www.ieltstaiwan.org"> Taiwan </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/thailand"> Thailand </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/turkey"> Turkey </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/uae"> UAE </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/ukraine"> Ukraine </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/uruguay"> Uruguay </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/uzbekistan"> Uzbekistan </a></li><li class="ng-star-inserted"><a target="_blank" href="https://ielts.idp.com/vietnam"> Vietnam </a></li>
                  </ul></li></ul>
              <!---->
              <!----><p class="ng-star-inserted"><strong>IDP IELTS</strong></p><ul class="ng-star-inserted">
                <!---->
                <!---->
                <!----><li id="facebook" class="ng-star-inserted"><a target="_blank" href="https://www.facebook.com/ieltsessentials/" id="facebook_link_Global"><img src="img/Facebook.svg" alt="Facebook - Global"></a></li>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!----><li id="instagram" class="ng-star-inserted"><a target="_blank" href="https://www.instagram.com/ielts.essentials/" id="insta_link_Global"><img src="img/Instagram.svg" alt="Instagram - Global"></a></li>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!----><li id="youtube" class="ng-star-inserted"><a target="_blank" href="https://www.youtube.com/user/IELTSEssentials" id="yt_link_Global"><img src="img/Youtube.svg" alt="YouTube - Global"></a></li>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!----><li id="tiktok" class="ng-star-inserted"><a target="_blank" href="https://www.tiktok.com/@ielts" id="tiktok_link_Global"><img src="img/tiktok.svg" alt="Tiktok - Global"></a></li>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
              </ul>
              <!----><p class="ng-star-inserted"><strong>IDP IELTS Pakistan</strong></p><ul class="ng-star-inserted">
                <!---->
                <!---->
                <!----><li id="facebook" class="ng-star-inserted"><a target="_blank" href="https://www.facebook.com/idpieltspk/" id="facebook_link_Pakistan"><img src="img/Facebook.svg" alt="Facebook - Pakistan"></a></li>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!----><li id="instagram" class="ng-star-inserted"><a target="_blank" href="https://www.instagram.com/idpieltspk/" id="insta_link_Pakistan"><img src="img/Instagram.svg" alt="Instagram - Pakistan"></a></li>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!----><li id="twitter" class="ng-star-inserted"><a target="_blank" href="https://twitter.com/idpIELTSPK" id="twitter_link_Pakistan"><img src="img/twit.svg" alt="Twitter - Pakistan"></a></li>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
              </ul>
            </div>
          </div></footer>
        <!----><div class="footer_bottom ng-star-inserted"><div class="container"><div class="footer_logo">
              <!----><a href="/pakistan" class="ng-star-inserted"><img offset="100" src="img/IDp.svg" class="  ng-failed-lazyloaded ng-lazyloaded" alt="IDP logo footer"></a><a href="/pakistan" class="ng-star-inserted"><img offset="100" src="img/IETLS_white.svg" class="  ng-failed-lazyloaded ng-lazyloaded" alt="IELTS footer"></a>
            </div><div class="footer_b_menu"><ul>
                <!---->
                <!---->
                <!----><li class="ng-star-inserted"><a target="_self" href="pakistan/legal-notices">Legal notices </a></li>
                <!---->
                <!---->
                <!---->
                <!----><li class="ng-star-inserted"><a target="_self" href="pakistan/legal-notices#ielts-australia-privacy-policy-">Privacy policy </a></li>
                <!---->
                <!---->
                <!---->
                <!----><li class="ng-star-inserted"><a target="_self" href="pakistan/legal-notices#cookie-policy">Cookie policy </a></li>
                <!---->
                <!---->
                <!---->
                <!----><li class="ng-star-inserted"><a target="_self" href="pakistan">Copyright 2021 IDP IELTS</a></li>
                <!---->
                <!---->
              </ul></div></div></div>
      </app-footer>
      <!----><span _ngcontent-serverapp-c0="" class="back-to-top ng-star-inserted"></span>
      <!---->
    </app-root><noscript>Please enable JavaScript to continue using this application. </noscript>
    <link id="theme" href="" rel="stylesheet" type="text/css"><script src="runtime-es2015.ef6dd0b2ae20659b8b89.js" type="module"></script><script src="runtime-es5.ef6dd0b2ae20659b8b89.js" nomodule="" defer=""></script><script src="polyfills-es5.77b72e4eb6783ea45cf0.js" nomodule="" defer=""></script><script src="polyfills-es2015.ac3aa6ccd3c5a29a777d.js" type="module"></script><script src="main-es2015.499c95d480e274c920e2.js" type="module"></script><script src="main-es5.499c95d480e274c920e2.js" nomodule="" defer=""></script><script id="serverApp-state" type="application/json" data-init-timestamp="1632945826703">
      {}
    </script><script type="text/javascript" id="">
      (function(a, d, e, f, g, b, c) {
        a.visitorGlobalObjectAlias = f;
        a[a.visitorGlobalObjectAlias] = a[a.visitorGlobalObjectAlias] || function() {
          (a[a.visitorGlobalObjectAlias].q = a[a.visitorGlobalObjectAlias].q || []).push(arguments)
        };
        a[a.visitorGlobalObjectAlias].l = (new Date).getTime();
        b = d.createElement("script");
        b.src = e;
        b.async = !0;
        c = d.getElementsByTagName("script")[0];
        c.parentNode.insertBefore(b, c)
      })(window, document, "https://diffuser-cdn.app-us1.com/diffuser/diffuser.js", "vgo");
      vgo("setAccount", "89469794");
      vgo("setTrackByDefault", !0);
      vgo("process");
    </script><img src="https://www.facebook.com/tr?id=311375572361447&amp;ev=PageView" height="1" width="1" style="display:none"><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/box-dfc01efbdc94bb0936d9a35a502b0b64.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe><div class="cdk-overlay-container"></div>
  </body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration><loom-container id="lo-engage-ext-container"><loom-shadow classname="resolved"></loom-shadow></loom-container>
</html>