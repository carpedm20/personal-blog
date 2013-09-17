<div class="post">

  <script src="<?echo config('site.url')?>assets/js/md5.min.js"></script>
  <script src="<?echo config('site.url')?>assets/js/base64.min.js"></script>
  <script src="<?echo config('site.url')?>assets/js/sha1.js"></script>
  <script src="<?echo config('site.url')?>assets/js/aes.js"></script>
  <script src="<?echo config('site.url')?>assets/js/carpedm20_tools.js"></script>
  
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
       <input id="hex_encode" class="result" type=text readonly>
    </div>
    <div class="decode">
       <h3>hex Decode</h3>
       <input id="hex_decode" class="result" type=text readonly>
    </div>
    </div>
  </div>
  <div class="url">
    <div>
      <h3>url Encode</h3>
      <input class="result" id="url_encode1" type=text readonly>
      <!--<input class="result" id="url_encode2" type=text>
      <input class="result" id="url_encode3" type=text>-->
    </div>
    <div>
       <h3>url Decode</h3>
       <input class="result" id="url_decode" type=text readonly>
    </div>
  </div>
  <div class="md5">
    <div class="result">
    <div class="encode">
       <h3>md5 Encode</h3>
       <input id="md5_encode" type=text readonly>
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
      <input class="result" id="base64_encode" type=text readonly>
      <input class="result" id="base64_encode_hex" type=text readonly>
    </div>
    <div class="decode">
      <h3>Base64 Decode</h3>
      <input class="result" id="base64_decode" type=text readonly>
      <input class="result" id="base64_decode_hex" type=text readonly>
    </div>
    </div>
  </div>
  <div class="sha1">
    <div class="result">
    <div class="encode">
      <h3>sha1 Encode</h3>
      <input class="result" id="sha1_encode" type=text readonly>
    </div>
    <div class="decode">
      <h3>sha1 Decode</h3>
      <input id="sha1_decode" type=text value="http://www.md5decrypter.co.uk/sha1-decrypt.aspx" readonly>
    </div>
    </div>
  </div>
  <div class="aes">
    <div class="result">
    <div class="encode">
      <h3>AES key (decimal)</h3>
      <input class="result" id="aes_key" type=text value="">
    </div>
    <div class="decode">
      <h3>AES iv</h3>
      <input class="result" id="aes_iv" type=text value="locoforever     ">
    </div>
    </div>
      <h3>AES encrypted message</h3>
      <input class="result" id="aes_encode" type=text>
  </div>
  <br>
	<h2>Calculator</h2>
  <h3>Input</h3>
  <input id="calc_input" type="text">
  <br>
  <div class="calculator">
    <div class="result">
    <div class="encode">
      <h3>int to hex</h3>
      <input class="result" id="int_to_hex" type=text readonly>
      <input class="result" id="int_to_hexu" type=text readonly>
    </div>
    <div class="decode">
      <h3>hex to int</h3>
      <input class="result" id="hex_to_int" type=text readonly>
    </div>
    </div>
  </div>
  <div class="hex_string">
    <div class="result">
    <div class="encode">
      <h3>hex to hex string</h3>
      <input class="result" id="hex_to_hex_string" type=text readonly>
    </div>
    <div class="decode">
      <h3>hex string to hex</h3>
      <input class="result" id="hex_string_to_hex" type=text readonly>
    </div>
    </div>
  </div>
  <br>
	<h2>Python</h2>
  </div>

</div>

