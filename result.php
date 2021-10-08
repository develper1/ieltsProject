<?php include 'iflogin.php'; ?>


<?php
$sql_p = "SELECT * FROM tbl_profile where pf_id=$_SESSION[pf_id]";
   $result=mysqli_query($con,$sql_p);
    $profile = mysqli_fetch_assoc($result);
?>
<?php
$sql_r = "SELECT * FROM ielts_result_msg where pf_id=$_SESSION[pf_id]";
   $result_r=mysqli_query($con,$sql_r);
    $message = mysqli_fetch_assoc($result_r);
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
      .results-multiple[_ngcontent-serverApp-c3] .banner_container[_ngcontent-serverApp-c3] {
        min-height: 240px;
        margin: 0
      }

      .results-multiple[_ngcontent-serverApp-c3] .res-logo[_ngcontent-serverApp-c3] {
        float: right;
        padding: 15px
      }

      .results-multiple[_ngcontent-serverApp-c3] .banner_box[_ngcontent-serverApp-c3] {
        position: relative;
        clear: both;
        margin: 0 auto;
        width: 1100px;
        float: none;
        background: #2f3940;
        border-radius: 4px;
        min-height: auto
      }

      .results-multiple[_ngcontent-serverApp-c3] .app_long_desc[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
        font-size: 20px;
        margin: 0
      }

      .results-multiple[_ngcontent-serverApp-c3] .banner[_ngcontent-serverApp-c3] .container[_ngcontent-serverApp-c3] {
        width: 100%
      }

      .results-multiple[_ngcontent-serverApp-c3] .long_desc[_ngcontent-serverApp-c3] {
        margin: 30px 0 0
      }

      .results-multiple[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] {
        width: 100%;
        float: left
      }

      .results-multiple[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
        color: #e31837;
        display: -webkit-box;
        display: flex;
        font-size: 20px;
        font-weight: 600;
        padding: 0 50px;
        line-height: 25px
      }

      .results-multiple[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3]:before {
        content: '';
        background: url(/assets/icons/exclamation-red.svg) no-repeat;
        width: 43px;
        height: 48px;
        padding-right: 30px
      }

      .disclaimer[_ngcontent-serverApp-c3] {
        width: 100%;
        float: left;
        margin: 15px 0 50px
      }

      .disclaimer[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
        font-size: 20px;
        line-height: 25px;
        font-family: proxima-nova-bold, sans-serif;
        color: #000
      }

      .res-multiple[_ngcontent-serverApp-c3] ul[_ngcontent-serverApp-c3] {
        display: block;
        padding: 0 50px
      }

      .res-multiple[_ngcontent-serverApp-c3] ul[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3] {
        height: 100px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        width: 99%;
        float: left;
        border-radius: 4px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, .1);
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        padding: 0 30px;
        border: 1px solid rgba(0, 0, 0, .1);
        margin: 0 20px 15px 0;
        transition: transform .2s, -webkit-transform .2s
      }

      .res-multiple[_ngcontent-serverApp-c3] ul[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3] span.line[_ngcontent-serverApp-c3] {
        display: none;
        background: #e31837;
        width: 7px !important;
        position: absolute;
        left: 0 !important;
        top: 0 !important;
        margin-left: 0;
        height: 100% !important;
        border-radius: 4px;
        float: left;
        -webkit-transform: none;
        transform: none;
        -webkit-transition: none;
        transition: none
      }

      .res-multiple[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3]:hover {
        -webkit-transform: translateX(10px);
        transform: translateX(10px)
      }

      .res-multiple[_ngcontent-serverApp-c3] ul[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3]:hover span.line[_ngcontent-serverApp-c3] {
        display: block
      }

      .res-multiple[_ngcontent-serverApp-c3] ul[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3]:hover span[_ngcontent-serverApp-c3] {
        text-decoration: underline
      }

      .res-multiple[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3] a[_ngcontent-serverApp-c3] {
        display: -webkit-box;
        display: flex;
        height: 100%;
        width: 100%;
        -webkit-box-align: center;
        align-items: center
      }

      .res-multiple[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3] h3[_ngcontent-serverApp-c3] {
        color: #2c2c33;
        width: 75%;
        -webkit-transform: translateY(0);
        transform: translateY(0);
        line-height: 24px;
        font-size: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden
      }

      .res-multiple[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3] .li_arrow[_ngcontent-serverApp-c3] {
        width: 48px;
        height: 48px;
        background: #e31837;
        position: absolute;
        right: 30px;
        border-radius: 50%;
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg)
      }

      .res-multiple[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3]:hover .li_arrow[_ngcontent-serverApp-c3] {
        background: linear-gradient(310.84deg, #e31837 10.75%, #ff8300 100%)
      }

      .res-multiple[_ngcontent-serverApp-c3] span[_ngcontent-serverApp-c3] {
        color: #e31837;
        font-size: 20px;
        line-height: 24px;
        font-weight: 700;
        width: calc(25% - 65px);
        text-align: right
      }

      .results-form[_ngcontent-serverApp-c3] .res-user[_ngcontent-serverApp-c3] {
        float: left;
        width: 100%;
        margin: 42.5px 0
      }

      .res-user[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
        font-weight: 600;
        font-size: 20px;
        line-height: 24px;
        padding-bottom: 7px;
        padding-left: 50px;
        padding-right: 50px
      }

      .res-multiple[_ngcontent-serverApp-c3] span[_ngcontent-serverApp-c3]:hover {
        text-decoration: underline
      }

      .res-logo[_ngcontent-serverApp-c3] {
        max-width: 220px
      }

      .res-logo[_ngcontent-serverApp-c3] a[_ngcontent-serverApp-c3] img[_ngcontent-serverApp-c3] {
        width: 100%
      }

      .bck_bnt_lnk[_ngcontent-serverApp-c3] {
        float: left;
        outline: 0
      }

      @media only screen and (max-width:2000px) and (min-width:1800px) {
        .org-shape[_ngcontent-serverApp-c3] {
          top: -281%
        }
      }

      @media only screen and (min-width:1300px) {
        .bck_bnt_lnk[_ngcontent-serverApp-c3] {
          position: relative;
          left: 50px
        }
      }

      @media only screen and (max-width:900px) {
        .results-multiple[_ngcontent-serverApp-c3] .res-logo[_ngcontent-serverApp-c3] img[_ngcontent-serverApp-c3] {
          width: 113px
        }

        .results-multiple[_ngcontent-serverApp-c3] .banner_box[_ngcontent-serverApp-c3] {
          width: 100%;
          top: 0;
          left: 0;
          float: left;
          max-height: -webkit-fit-content;
          max-height: -moz-fit-content;
          max-height: fit-content
        }

        .results-multiple[_ngcontent-serverApp-c3] .banner[_ngcontent-serverApp-c3] {
          margin: 0
        }

        .results-multiple[_ngcontent-serverApp-c3] .banner_container[_ngcontent-serverApp-c3] {
          margin: 0;
          min-height: auto
        }

        .results-multiple[_ngcontent-serverApp-c3] .app_long_desc[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
          font-size: 15px;
          line-height: 24px
        }

        .results-multiple[_ngcontent-serverApp-c3] .long_desc[_ngcontent-serverApp-c3] .container[_ngcontent-serverApp-c3],
        .results-multiple[_ngcontent-serverApp-c3] .long_desc[_ngcontent-serverApp-c3] .l_desc[_ngcontent-serverApp-c3] {
          padding: 0
        }

        .results-multiple[_ngcontent-serverApp-c3] .long_desc[_ngcontent-serverApp-c3] {
          margin: 20px 0 0
        }

        .results-multiple[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] {
          margin-top: 20px
        }

        .results-multiple[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
          font-size: 15px;
          padding: 0 20px
        }

        .results-multiple[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3]:before {
          width: 35px;
          height: 36px;
          background-size: contain;
          padding-right: 20px
        }

        .results-multiple[_ngcontent-serverApp-c3] .update[_ngcontent-serverApp-c3] span[_ngcontent-serverApp-c3] {
          float: left;
          width: 100%;
          font-size: 15px;
          line-height: 20px
        }

        .res-multiple[_ngcontent-serverApp-c3] span[_ngcontent-serverApp-c3] {
          display: none
        }

        .res-multiple[_ngcontent-serverApp-c3] ul[_ngcontent-serverApp-c3] {
          padding: 0
        }

        .res-multiple[_ngcontent-serverApp-c3] ul[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3] {
          width: 100%;
          height: 80px;
          padding: 0 20px;
          margin: 0 0 15px
        }

        .res-multiple[_ngcontent-serverApp-c3] span.li_arrow[_ngcontent-serverApp-c3] {
          display: block
        }

        .res-multiple[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3] .li_arrow[_ngcontent-serverApp-c3] {
          width: 24px;
          height: 24px;
          background: linear-gradient(310.84deg, #e31837 10.75%, #ff8300 100%)
        }

        .res-multiple[_ngcontent-serverApp-c3] ul[_ngcontent-serverApp-c3] li[_ngcontent-serverApp-c3] h3[_ngcontent-serverApp-c3] {
          font-size: 17px
        }

        .results-form[_ngcontent-serverApp-c3] .res-user[_ngcontent-serverApp-c3] {
          margin: 20px 0
        }

        .results-form[_ngcontent-serverApp-c3] .res-user[_ngcontent-serverApp-c3] p[_ngcontent-serverApp-c3] {
          font-size: 16px;
          line-height: 20px;
          padding: 0 0 10px
        }
      }

      .results-multiple[_ngcontent-serverApp-c3] .return[_ngcontent-serverApp-c3] {
        float: left;
        margin: 30px;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        cursor: pointer
      }

      .results-multiple[_ngcontent-serverApp-c3] .return[_ngcontent-serverApp-c3]:before {
        content: '';
        background: url(img/arrow_white.svg) no-repeat;
        width: 23px;
        display: inline-block;
        height: 23px;
        margin-right: 10px;
        transform: rotate(270deg);
        -webkit-transform: rotate(270deg)
      }

      @media only screen and (max-width:900px) {
        .results-multiple[_ngcontent-serverApp-c3] .return[_ngcontent-serverApp-c3] {
          display: none
        }
      }
    </style>
    <meta name="robots" content="noindex, nofollow">
    <script>
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'websitename': 'Global',
        'pagename': 'Result List  - Results',
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
  </head>
  <body class="results res-mul">
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
      <app-results-listing _nghost-serverapp-c3="">
        <!---->
        <!---->
        <div _ngcontent-serverapp-c3="" class="results-multiple ng-star-inserted">
          <a _ngcontent-serverapp-c3="" class="bck_bnt_lnk" href=<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/logout.php"?>>
            <div _ngcontent-serverapp-c3="" class="return">
              <span _ngcontent-serverapp-c3=""></span>
            </div>
          </a>
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
                      <div _ngcontent-serverapp-c3="" class="container">
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
          </div>
          <div _ngcontent-serverapp-c3="" class="results-form">
            <div _ngcontent-serverapp-c3="" class="container">
              <div _ngcontent-serverapp-c3="" class="res-user">
                <p _ngcontent-serverapp-c3="">Hi <?php echo ($profile['name']); ?>,</p>
                <p _ngcontent-serverapp-c3=""> <?php echo ($profile['message']); ?></p>
              </div>
              <!---->
              <!---->
              <div _ngcontent-serverapp-c3="" class="res-multiple ng-star-inserted">
                <ul _ngcontent-serverapp-c3="">
                  <a href=<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/result-details.php"?>>
                  <li _ngcontent-serverapp-c3="" id="view_results_1">
                    <span _ngcontent-serverapp-c3="" class="line"></span>
                    <h3 _ngcontent-serverapp-c3="" id="view_results_name_1"><?php echo ($profile['test_date']); ?> – <?php echo ($profile['test_type']); ?></h3>
                    <span _ngcontent-serverapp-c3="" id="view_results_link_1">View results</span>
                    <span _ngcontent-serverapp-c3="" class="li_arrow" id="view_results_arrow_1">
                      <img _ngcontent-serverapp-c3="" alt="" src="img/arrow_white.svg">
                    </span>
                  </li>
        </a>
                </ul>
              </div>
              <!---->
              <!---->
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
                    <mat-expansion-panel class="mat-expansion-panel ng-tns-c5-0 mat-expanded mat-expansion-panel-spacing ng-star-inserted" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                      <mat-expansion-panel-header class="mat-expansion-panel-header ng-tns-c6-1 ng-trigger ng-trigger-expansionHeight mat-expanded mat-expansion-toggle-indicator-after ng-star-inserted" role="button" id="mat-expansion-panel-header-0" tabindex="0" aria-controls="cdk-accordion-child-0" aria-expanded="true" aria-disabled="false" style="height: 64px;">
                        <span class="mat-content">
                          <span class="line"></span>
                          <div class="sub-head" itemprop="name" translate=""> When will I get my computer-delivered IELTS results (including IELTS for UKVI)? </div>
                        </span>
                        <!---->
                        <span class="mat-expansion-indicator ng-tns-c6-1 ng-trigger ng-trigger-indicatorRotate ng-star-inserted" style="transform: rotate(180deg);"></span>
                      </mat-expansion-panel-header>
                      <div class="mat-expansion-panel-content ng-trigger ng-trigger-bodyExpansion" role="region" aria-labelledby="mat-expansion-panel-header-0" id="cdk-accordion-child-0" style="visibility: visible;">
                        <div class="mat-expansion-panel-body">
                          <div itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer">
                            <span itemprop="text">
                            <?php echo ($message['computer_based_result']); ?>
                            </span>
                          </div>
                          <!---->
                        </div>
                      </div>
                    </mat-expansion-panel>
                    <!---->
                    <mat-expansion-panel class="mat-expansion-panel ng-tns-c5-2 ng-star-inserted" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                      <mat-expansion-panel-header class="mat-expansion-panel-header ng-tns-c6-3 ng-trigger ng-trigger-expansionHeight mat-expansion-toggle-indicator-after ng-star-inserted" role="button" id="mat-expansion-panel-header-1" tabindex="0" aria-controls="cdk-accordion-child-1" aria-expanded="false" aria-disabled="false" style="height: 48px;">
                        <span class="mat-content">
                          <span class="line"></span>
                          <div class="sub-head" itemprop="name" translate=""> When will I get my paper-based IELTS results (including IELTS for UKVI)? </div>
                        </span>
                        <!---->
                        <span class="mat-expansion-indicator ng-tns-c6-3 ng-trigger ng-trigger-indicatorRotate ng-star-inserted" style="transform: rotate(0deg);"></span>
                      </mat-expansion-panel-header>
                      <div class="mat-expansion-panel-content ng-trigger ng-trigger-bodyExpansion" role="region" aria-labelledby="mat-expansion-panel-header-1" id="cdk-accordion-child-1" style="height: 0px; visibility: hidden;">
                        <div class="mat-expansion-panel-body">
                          <div itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer">
                            <span itemprop="text">
                            <?php echo ($message['paper_based_result']); ?>
                            </span>
                          </div>
                          <!---->
                        </div>
                      </div>
                    </mat-expansion-panel>
                    <!---->
                    <mat-expansion-panel class="mat-expansion-panel ng-tns-c5-4 ng-star-inserted" itemprop="mainEntity" itemscope="" itemtype="https://schema.org/Question">
                      <mat-expansion-panel-header class="mat-expansion-panel-header ng-tns-c6-5 ng-trigger ng-trigger-expansionHeight mat-expansion-toggle-indicator-after ng-star-inserted" role="button" id="mat-expansion-panel-header-2" tabindex="0" aria-controls="cdk-accordion-child-2" aria-expanded="false" aria-disabled="false" style="height: 48px;">
                        <span class="mat-content">
                          <span class="line"></span>
                          <div class="sub-head" itemprop="name" translate=""> When will I get my IELTS Life Skills results? </div>
                        </span>
                        <!---->
                        <span class="mat-expansion-indicator ng-tns-c6-5 ng-trigger ng-trigger-indicatorRotate ng-star-inserted" style="transform: rotate(0deg);"></span>
                      </mat-expansion-panel-header>
                      <div class="mat-expansion-panel-content ng-trigger ng-trigger-bodyExpansion" role="region" aria-labelledby="mat-expansion-panel-header-2" id="cdk-accordion-child-2" style="height: 0px; visibility: hidden;">
                        <div class="mat-expansion-panel-body">
                          <div itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer">
                            <span itemprop="text">
                            <?php echo ($message['skills_based']); ?>
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
        </div>
        <!---->
      </app-results-listing>
      <!---->
      <!---->
      <!---->
      <!---->
      <app-footer _ngcontent-serverapp-c0="">
        <!---->
        <div class="footer_results">
          <div class="footer_b_menu">
            <ul>
              <!---->
              <!---->
              <!---->
              <li>
                <a href="/contact-us">Contact us</a>
              </li>
              <!---->
              <!---->
              <!---->
              <!---->
              <li>
                <a href="/legal-notices">Legal notices </a>
              </li>
              <!---->
              <!---->
              <!---->
              <!---->
              <li>
                <a href="/legal-notices#ielts-australia-privacy-policy-">Privacy policy </a>
              </li>
              <!---->
              <!---->
              <!---->
              <!---->
              <li>
                <a href="/legal-notices#cookie-policy">Cookie policy </a>
              </li>
              <!---->
              <!---->
              <!---->
              <!---->
              <!---->
              <li> Copyright 2021 IDP IELTS </li>
              <!---->
            </ul>
          </div>
          <div class="footer_res_logo">
            <a href="https://www.britishcouncil.org/">
              <img alt="IELTS footer" offset="100" src="img/partners_logo_bc.svg">
            </a>
            <a href="https://www.idp.com/">
              <img alt="IELTS footer" offset="100" src="img/partners_logo_idp.svg">
            </a>
            <a href="https://www.cambridgeenglish.org/">
              <img alt="IELTS footer" offset="100" src="img/partners_logo_ca.svg">
            </a>
          </div>
        </div>
        <footer>
          <div class="container">
            <!---->
            <div class="footer_menu">
              <p>
                <a href="/about" target="_self">
                  <strong>About</strong>
                </a>
                <span class="ftr-sub-menu"></span>
              </p>
              <ul>
                <!---->
                <li>
                  <a href="/about/which-test-do-i-take" target="_self">Which test do I take?</a>
                </li>
                <li>
                  <a href="/about/ielts-test-format" target="_self">IELTS test format</a>
                </li>
                <li>
                  <a href="/about/test-day" target="_self">On test day</a>
                </li>
                <li>
                  <a href="/about/who-accepts-ielts/organisations-that-accept-ielts" target="_self">Who accepts IELTS?</a>
                </li>
                <li>
                  <a href="/about/special-requirements" target="_self">Special requirements</a>
                </li>
                <li>
                  <a href="/about/news-and-articles" target="_self">News and articles</a>
                </li>
                <li>
                  <a href="/about/where-ielts-can-take-me/success-stories" target="_self">IELTS success stories</a>
                </li>
              </ul>
            </div>
            <div class="footer_menu">
              <p>
                <a href="/prepare" target="_blank">
                  <strong>Prepare</strong>
                </a>
                <span class="ftr-sub-menu"></span>
              </p>
              <ul>
                <!---->
                <li>
                  <a href="/prepare/academic-preparation" target="_self">IELTS Academic preparation</a>
                </li>
                <li>
                  <a href="/prepare/ielts-general-training-preparation" target="_self">IELTS General Training preparation</a>
                </li>
                <li>
                  <a href="/prepare/ielts-for-ukvi" target="_self">IELTS for UKVI</a>
                </li>
                <li>
                  <a href="/prepare/masterclass" target="_self">IELTS Masterclass</a>
                </li>
                <li>
                  <a href="/prepare/mock-test" target="_self">IELTS Progress Check</a>
                </li>
                <li>
                  <a href="/prepare/practice-tests" target="_self">IELTS practice tests</a>
                </li>
                <li>
                  <a href="/prepare/exam-resources" target="_self">IELTS exam resources</a>
                </li>
                <li>
                  <a href="/prepare/support-tools" target="_self">IELTS Support tools</a>
                </li>
                <li>
                  <a href="/prepare/test-tips" target="_self">IELTS test tips</a>
                </li>
              </ul>
            </div>
            <div class="footer_menu">
              <p>
                <a href="/results" target="_self">
                  <strong>Results</strong>
                </a>
                <span class="ftr-sub-menu"></span>
              </p>
              <ul>
                <!---->
                <li>
                  <a href="/results/scores" target="_self">IELTS band scores</a>
                </li>
                <li>
                  <a href="/results/how-ielts-is-marked" target="_self">How IELTS is marked</a>
                </li>
                <li>
                  <a href="/results/get-ielts-results" target="_self">Get my IELTS results</a>
                </li>
              </ul>
            </div>
            <div class="footer_menu social">
              <!---->
              <p>
                <strong translate="">IELTS around the world</strong>
              </p>
              <!---->
              <ul class="lang">
                <li>
                  <a>
                    <img alt="Globe" src="/assets/icons/globe.svg">Global </a>
                  <ul name="countryName">
                    <!---->
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/argentina"> Argentina </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.com.au/"> Australia </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/azerbaijan"> Azerbaijan </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/bahrain"> Bahrain </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/bangladesh"> Bangladesh </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/brazil"> Brazil </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/cambodia"> Cambodia </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/canada"> Canada </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/chile"> Chile </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/colombia"> Colombia </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/cyprus"> Cyprus </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/ecuador"> Ecuador </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/egypt"> Egypt </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/greece"> Greece </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/hongkong"> Hong Kong </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.ieltsidpindia.com/"> India </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/indonesia"> Indonesia </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/iran"> Iran </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/ireland"> Ireland </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/italy"> Italy </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.ieltsjp.com/"> Japan </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/jordan"> Jordan </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/kazakhstan"> Kazakhstan </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/kenya"> Kenya </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/kuwait"> Kuwait </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/lebanon"> Lebanon </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/malaysia"> Malaysia </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/mauritius"> Mauritius </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/mexico"> Mexico </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://idpielts.me/"> Middle East </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/moldova"> Moldova </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/nepal"> Nepal </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.co.nz/newzealand"> New Zealand </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/nigeria"> Nigeria </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/oman"> Oman </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.co.nz/pacific/"> Pacific Islands </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/pakistan"> Pakistan </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/peru"> Peru </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/philippines"> Philippines </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/poland"> Poland </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/qatar"> Qatar </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/romania"> Romania </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/russia"> Russia </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/saudiarabia"> Saudi Arabia </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/singapore"> Singapore </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ieltsamericas.com/"> South America </a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.ieltskorea.org/"> South Korea </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/spain"> Spain </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/srilanka"> Sri Lanka </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/switzerland"> Switzerland </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.ieltstaiwan.org"> Taiwan </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/thailand"> Thailand </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/turkey"> Turkey </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/uae"> UAE </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/ukraine"> Ukraine </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/uruguay"> Uruguay </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/uzbekistan"> Uzbekistan </a>
                    </li>
                    <li>
                      <a target="_blank" href="https://ielts.idp.com/vietnam"> Vietnam </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <!---->
              <!---->
              <p>
                <strong>IDP IELTS</strong>
              </p>
              <ul>
                <!---->
                <!---->
                <!---->
                <li id="facebook">
                  <a target="_blank" href="https://www.facebook.com/ieltsessentials/" id="facebook_link_Global">
                    <img src="img/Facebook.svg" alt="Facebook - Global">
                  </a>
                </li>
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
                <li id="instagram">
                  <a target="_blank" href="https://www.instagram.com/ielts.essentials/" id="insta_link_Global">
                    <img src="img/Instagram.svg" alt="Instagram - Global">
                  </a>
                </li>
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
                <li id="youtube">
                  <a target="_blank" href="https://www.youtube.com/user/IELTSEssentials" id="yt_link_Global">
                    <img src="img/Youtube.svg" alt="YouTube - Global">
                  </a>
                </li>
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
                <!---->
                <li id="tiktok">
                  <a target="_blank" href="https://www.tiktok.com/@ielts" id="tiktok_link_Global">
                    <img src="img/tiktok.svg" alt="Tiktok - Global">
                  </a>
                </li>
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
                <!---->
              </ul>
            </div>
          </div>
        </footer>
        <!---->
      </app-footer>
      <!---->
      <!---->
    </app-root>
    <noscript>Please enable JavaScript to continue using this application. </noscript>
    <link id="theme" href="" rel="stylesheet" type="text/css">
    <script src="runtime-es2015.ef6dd0b2ae20659b8b89.js" type="module"></script>
    <script src="runtime-es5.ef6dd0b2ae20659b8b89.js" nomodule="" defer=""></script>
    <script src="polyfills-es5.77b72e4eb6783ea45cf0.js" nomodule="" defer=""></script>
    <script src="polyfills-es2015.ac3aa6ccd3c5a29a777d.js" type="module"></script>
    <script src="main-es2015.499c95d480e274c920e2.js" type="module"></script>
    <script src="main-es5.499c95d480e274c920e2.js" nomodule="" defer=""></script>
    <script id="serverApp-state" type="application/json">
      {}
    </script>
    <script type="text/javascript" id="">
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
    </script>
    <img src="https://www.facebook.com/tr?id=311375572361447&amp;ev=PageView" height="1" width="1" style="display:none">
    <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/box-dfc01efbdc94bb0936d9a35a502b0b64.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
    <div id="shadowMeasureIt"></div>
    <div id="divCoordMeasureIt"></div>
    <div id="divRectangleMeasureIt">
      <div id="divRectangleBGMeasureIt"></div>
    </div>
  </body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

$(document).on("click",".mat-expansion-panel-header",function() {

$(".mat-expansion-panel-header").attr('aria-expanded', 'false'); 
$(".mat-expansion-panel-header").attr('aria-disabled', 'true');
$(".mat-expansion-panel-header").next(".mat-expansion-panel-content").css("height","0px"); 
$(".mat-expansion-panel-header").next(".mat-expansion-panel-content").css('visibility', 'hidden');
$('span:first', '.mat-expansion-panel-header').css('color', 'black');
$('span:first', '.mat-expansion-panel-header').children('.line').css('display', 'none');
$('.mat-expansion-panel-header').parent().removeClass('mat-expanded');


$(this).attr('aria-expanded', 'true'); 
$(this).attr('aria-disabled', 'false'); 
$(this).next(".mat-expansion-panel-content").css("height","50px"); 
$(this).next(".mat-expansion-panel-content").css('visibility', 'visible');
$('span:first', this).css('color', '#e31837');
$('span:first', this).children('.line').css('display', 'block');
$(this).parent().addClass('mat-expanded');



});


</script>