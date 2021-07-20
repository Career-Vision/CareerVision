
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="HandheldFriendly" content="true" />
    <title>Thank You</title>
    <script type="text/javascript" src="https://cdn.jotfor.ms//js/prototype.js"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms//css/thankyou.css" />
    <style type="text/css">
      body {
        background:  #ecedf3;
        font-family: Inter, sans-serif;
        font-size: 16px;
        color: #2C3345;
      }
      .form-all {
        background:  #fff;
        max-width: 752px;
      }
      .wrapper .col-2 {
        background: #fff;
      }
      .thankyou-sub-text {
        color: #2C3345;
      }
      #footer {
        max-width: 752px;
      }

      .thankYouDownloadPDFWrapper {
        border-top: 1px solid  #ecedf3;
      }
      .ty-buttons.thankYouEditSubmission, .ty-buttons.thankYouDownloadPDF { 
        color: #2C3345;
        background-color: #fff;
        border-color: #2C3345;
      }
      .ty-buttons.thankYouFillAgain { 
        color: #2C3345;
        background-color: #fff;
        border-color: #2C3345;
      }
      @media print {
       .form-all {
        width: 752px;
       } 

      }
    </style>
    <style type="text/css">
    
    </style>
  </head>
  <body class="thankyou">
    <div id="stage" class="form-all">
      <p style="text-align:center;"><img src="https://cdn.jotfor.ms/img/check-icon.png" alt="" width="128" height="128" /></p><div style="text-align:center;"><h1 style="text-align:center;">Thank You!</h1><p style="text-align:center;">Your submission has been received.</p></div>
</div>
    </div>
  </body>
  <script type="text/javascript">
    if (window.parent !== window) {
      var stageMarginTop = ($('stage')) ? parseInt($('stage').getStyle('marginTop')) : 0;
      var height = $$('body').first().getHeight() + (stageMarginTop * 2);
      window.parent.postMessage('setHeight:' + height + ':211802342751144', '*');
      window.parent.postMessage({ action: 'submission-completed' }, '*');
    }

    // Prevent duplicate submission on mobile safari, #2391271
    var isMobileSafari = (/.*(iphone|ipad|ipod).*1[1-9]_.*(version).*(safari)/i).test(window.navigator.userAgent);
    if (isMobileSafari) {
      var origin = 'https://submit.jotform.com/';
      var url = origin + '211802342751144';
      // be sure of being same origin before using referrer
      if (document.referrer && document.referrer.indexOf(origin) !== -1) {
        url = document.referrer;
      }
      window.history.replaceState("", "", url);
    }
    window.newThankYouPage = true;
    window.submissionID = '';
    window.formID = '211802342751144';
  </script>
  <script src='https://submit.jotform.com//js/includes/thankYouPageScripts.js' ></script>
  
</html>
