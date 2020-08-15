<?php
echo "<!DOCTYPE html>";
echo "<html>
    <head>
        <title>Animated heart in pure CSS</title>
        <style>
        
        
        </style>
        <script>
        // Created by Tristan McCullen



window.onload=function() {

(function() {

  var openComment, styles, time, writeStyleChar, writeStyles;



  styles = "/* \n * \"Friendshit - XerXez7\"\n * &copy; XerXez 2020 \n */\n\nbody {\n  background-color: #1a1c24; color: #fff;\n width: 100%;\n height: 100vh;\n margin: 0;\n padding: 0;\n color:black;\n background: url('https://esportgamw77.000webhostapp.com/zayn-picsay.jpg');\n color:white;\n background-size: cover;\n background-repeat: no-repeat;\n background-position: center;\n font-size: 20px; line-height: 1,4;\n  -webkit-font-smoothing: subpixel-antialiased;\n}\n\n /*\n * Halo nama saya XerXez7\n *\n * Saya ingin mengenalkan team Fr13ndSh!T \n * Dan kebetulan sekali team kami sedang open member.\n *\n * Mungkin anda berminat pada team kami\n * sebagian dari kami (programer & defacher) anggap saja <style> kami.\n * jika anda berminat pada team kami (+62)85-71613-9508 \n */ \n\n pre { \n  position: fixed; width: 60%;\n }\n /* 4R1N0T54F3 - (Leader)\n *    XerXez7 - (Founder)\n *    Terabites - (Founder)\n *    Dollong - (Member)\n *    ./ZryTect -(Member) \n    JustMile.\n * XerXez7 Neverdie - Fr13ndS!T\n */\n\n";


  openComment = false;


  writeStyleChar = function(which) {

    if (which === '/' && openComment === false) {

      openComment = true;

      styles = $('#style-text').html() + which;

    } else if (which === '/' && openComment === true) {

      openComment = false;

      styles = $('#style-text').html().replace(/(\/[^\/]*\*)$/, '<em class="comment">$1/</em>');

    } else if (which === ':') {

      styles = $('#style-text').html().replace(/([a-zA-Z- ^\n]*)$/, '<em class="key">$1</em>:');

    } else if (which === ';') {

      styles = $('#style-text').html().replace(/([^:]*)$/, '<em class="value">$1</em>;');

    } else if (which === '{') {

      styles = $('#style-text').html().replace(/(.*)$/, '<em class="selector">$1</em>{');

    } else {

      styles = $('#style-text').html() + which;

    }

    $('#style-text').html(styles);

    return $('#style-tag').append(which);

  };



  writeStyles = function(message, index, interval) {

    var pre;

    if (index < message.length) {

      pre = document.getElementById('style-text');

      pre.scrollTop = pre.scrollHeight;

      writeStyleChar(message[index++]);

      return setTimeout((function() {

        return writeStyles(message, index, interval);

      }), interval);

    }

  };



  $('body').append("  <style id=\"style-tag\"></style>\n<span id=\"echo\"></span>\n<span id=\"heart\"><i></i></span>\n<pre id=\"style-text\"></pre>");



  time = window.innerWidth <= 578 ? 64 : 64;



  writeStyles(styles, 0, time);



}).call(this);

};

/* header {\n top: 0;\n width: 100%;\n display: -webkit-box;\n display: -ms-flexbox;\m display: flex;\n position: fixed;\n -webkit-box-pack: center;\n -ms-flex-pack: center;\n justify-content: center;\n }"; */
        </script>
        
        
    </head>
    <body>
    
    <!--Simple bugfix to run via browser and app:-->
    
        <!--App jQuery initiated-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!--Browser jQuery initiated-->  
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </body>
</html>";
<?
