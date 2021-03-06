<!doctype html>
<html itemscope itemtype="http://schema.org/Product">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=Utf-8">
  <script type="text/javascript" src="js/qrcode.js"></script>
  <script type="text/javascript" src="js/qrcode_SJIS.js"></script>
  <script type="text/javascript" src="js/sample.js"></script>
  <script type="text/javascript" src="js/plusone.js"></script>
  <link rel="stylesheet" href="assets/style.css" type="text/css" />
  <title itemprop="name">QR Code Generator</title>
</head>

<body onload="update_qrcode()" >

<a href="http://www.d-project.com/">home</a>

<a href="https://github.com/kazuhikoarase/qrcode-generator"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
<img itemprop="image" src="assets/qrcode.png" style="display:none;"/>

<h1>QR Code Generator</h1>

<div itemprop="description">QR Code Generator implementation in ActionScript3, Java, JavaScript and more.</div>

<div class="section" style="vertical-layout:middle;">
    <g:plusone></g:plusone>
    <br/>
    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<div class="section">

  <form name="qrForm">
    <span>TypeNumber:</span>
    <select name="t"></select>
    <span>ErrorCorrectLevel:</span>
    <select name="e">
      <option value="L">L(7%)</option>
      <option value="M" selected="selected">M(15%)</option>
      <option value="Q">Q(25%)</option>
      <option value="H">H(30%)</option>
    </select>
    <br/>
    <textarea name="msg" rows="10" cols="40">here comes qr!</textarea>
    <br/>
    <input type="button" value="update" onclick="update_qrcode()"/>
    <div id="qr"></div>
  </form>

</div>

<div class="section">
  <ul>
    <li>
      <span>The word 'QR Code' is registered trademark of DENSO WAVE INCORPORATED</span>
      <br/>
      <a href="http://www.denso-wave.com/qrcode/faqpatent-e.html">http://www.denso-wave.com/qrcode/faqpatent-e.html</a>  
    </li>
  </ul>
</div>

<hr/>

<div class="page-footer">
Contents Copyright &copy; Kazuhiko Arase
</div>

<script type="text/javascript">
!function() {
  var t = document.forms['qrForm'].elements['t'];
  for (var i = 1; i <= 40; i += 1) {
    var opt = document.createElement('option');
    opt.appendChild(document.createTextNode(''+ i) );
    opt.value = '' + i;
    t.appendChild(opt);
  }
  t.value = '4';
}();
</script>

</body>

</html>