  // StoH("A") -> "\x41"
  function StoH(str) {
    var hex = '';
    for(var i=0;i<str.length;i++) {
        hex += '\\x'+str.charCodeAt(i).toString(16);
    }
    return hex;
  }

  // HtoS("\x41") -> "A"
  function HtoS(h) {
    var s = '';
    var hl = h.split('\\x');

    if(hl.length<2) 
       return h;

    for(var i=1; i<hl.length; i++) 
       s += String.fromCharCode(parseInt(hl[i],16));

    return s;
  }

  function HtoHS(h) {
    var hs = "";
    for(var i=0; i<h.length/2-1; i++)
       hs += '\\x'+h[i*2]+h[i*2+1];
    if(h.length % 2 == 1)
       hs += '\\x'+h[h.length - 1];
    else
       hs += '\\x'+h[h.length-2]+h[h.length - 1];
    return hs;
  }

  function result() {
    var input = $('#input').val();

    var hex_encode = StoH(input);
    $('#hex_encode').val(hex_encode);
    try {
       //var hex_decode=String.fromCharCode(parseInt(s.substr(2), 16));
       $('#hex_decode').val(HtoS(input));
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

    var base64_encode_hex = StoH(base64_encode);
    $('#base64_encode_hex').val(base64_encode_hex);

    var sha1_encode = CryptoJS.SHA1(input);
    $('#sha1_encode').val(sha1_encode);

    try {
       var base64_decode = Base64.decode(input);
       $('#base64_decode').val(base64_decode);
       $('#base64_decode_hex').val(StoH(base64_decode));
    }
    catch(err) {
       $('#base64_decode').val("ERROR");
       $('#base64_decode_hex').val("ERROR");
    }

    /*var key = $('aes_key').val();
    var iv = $('aes_iv').val();
    var encrypted = CryptoJS.AES.encrypt(input, key, { iv: iv });
    $('#aes_encode').val(encrypted);*/
  }

  function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
  }

  function d2h(d) { return (+d).toString(16); }
  function d2hu(d) { return (+d).toString(16).toUpperCase(); }
  function h2d(h) {return parseInt(h,16);}

  function calc_result() {
    var input = $('#calc_input').val();

    $('#int_to_hex').val(d2h(input));
    $('#int_to_hexu').val(d2hu(input));
    try {
       $('#hex_to_int').val(h2d(input).toString());
    }
    catch(err) {
       $('#hex_to_int').val('ERROR');
    }
    $('#hex_to_hex_string').val(HtoHS(input));
  }

  $(document).ready(function(){
    $('#input').val('carpedm20');
    $('#calc_input').val('31337');
    result();
    calc_result();

    $('#input').bind('input',function () {
       result();
    });
    $('#calc_input').bind('input',function () {
       calc_result();
    });
  });
