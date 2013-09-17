<div class="post">

  <script src="<?echo config('site.url')?>assets/js/md5.min.js"></script>
  <script src="<?echo config('site.url')?>assets/js/base64.min.js"></script>
  <script src="<?echo config('site.url')?>assets/js/sha1.js"></script>
  <script type="text/javascript">
  function toHex(str) {
    var hex = '';
    for(var i=0;i<str.length;i++) {
        hex += '\\x'+str.charCodeAt(i).toString(16);
    }
    return hex;
  }

  function result() {
    var input = $('#input').val();

    var hex_encode = toHex(input);
    $('#hex_encode').val(hex_encode);
    try {
       //var hex_decode=String.fromCharCode(parseInt(s.substr(2), 16));
       $('#hex_decode').val($('#input').val().toString());
    }
    catch(err) {
       $('#hex_decode').val('ERROR');
    }

    var url_encode1 = encodeURI(input);
    $('#url_encode1').val(url_encode1);
    /*var url_encode2 = escape(input);
    $('#url_encode2').val(url_encode2);
    var url_encode3 = encodeURIComponent(input);
    $('#url_encode3').val(url_encode3);*/
    
    var url_decode = decodeURI(input);
    $('#url_decode').val(url_decode);

    var md5_encode = window.md5(input);
    $('#md5_encode').val(md5_encode);

    var base64_encode = Base64.encode(input);
    $('#base64_encode').val(base64_encode);

    var base64_encode_hex = toHex(base64_encode);
    $('#base64_encode_hex').val(base64_encode_hex);

    var sha1_encode = CryptoJS.SHA1(input);
    $('#sha1_encode').val(sha1_encode);

    try {
       var base64_decode = Base64.decode(input);
       $('#base64_decode').val(base64_decode);
       $('#base64_decode_hex').val(toHex(base64_decode));
    }
    catch(err) {
       $('#base64_decode').val("ERROR");
       $('#base64_decode_hex').val("ERROR");
    }
  }

  $(document).ready(function(){
    $('#input').val('carpedm20');
    result();

    $('#input').bind('input',function () {
       result();
    });
  });
  </script>
  
  <div class="tools">
	<h1 align=center>Tools</h1>
  <h2>Web</h2>
  <h3>Input</h3>
  <input id="input" type=text> 
  <br>
  <div class="hex">
    <div class="result">
    <div class="encode">
       <h3>hex Encode</h3>
       <input id="hex_encode" class="result" type=text>
    </div>
    <div class="decode">
       <h3>hex Decode</h3>
       <input id="hex_decode" class="result" type=text>
    </div>
    </div>
  </div>
  <div class="url">
    <div>
      <h3>url Encode</h3>
      <input class="result" id="url_encode1" type=text>
      <!--<input class="result" id="url_encode2" type=text>
      <input class="result" id="url_encode3" type=text>-->
    </div>
    <div>
       <h3>url Decode</h3>
       <input class="result" id="url_decode" type=text>
    </div>
  </div>
  <div class="md5">
    <div class="result">
    <div class="encode">
       <h3>md5 Encode</h3>
       <input id="md5_encode" type=text>
    </div>
    <div class="decode">
       <h3>md5 Decode</h3>
       <input id="md5_decode" type=text value="http://md5.darkbyte.ru/" readonly>
    </div>
    </div>
  </div>
  <div class="base64">
    <div class="result">
    <div class="encode">
      <h3>Base64 Encode</h3>
      <input class="result" id="base64_encode" type=text>
      <input class="result" id="base64_encode_hex" type=text>
    </div>
    <div class="decode">
      <h3>Base64 Decode</h3>
      <input class="result" id="base64_decode" type=text>
      <input class="result" id="base64_decode_hex" type=text>
    </div>
    </div>
  </div>
  <div class="sha1">
    <div class="result">
    <div class="encode">
      <h3>sha1 Encode</h3>
      <input class="result" id="sha1_encode" type=text>
    </div>
    <div class="decode">
       <h3>sha1 Decode</h3>
       <input id="sha1_decode" type=text value="http://www.md5decrypter.co.uk/sha1-decrypt.aspx" readonly>
    </div>
    </div>
  </div>
	<h2>Python</h2>
  </div>

</div>

