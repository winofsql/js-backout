<?php 
$view_div_width = 500

?>
<!DOCTYPE html>
<html>
<head>
<title>HTML Input Test</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<style>
.target {
  position: relative;
}

.example {
  background-color:#ffffff;
  border: 1px solid black;
  cursor: pointer;
  margin: 5px;
  padding: 20px;
  width:  <?= $view_div_width ?>px;
  height: 100px;
}

#overlay {
  background: rgba(0,0,0,0.3);
  display: none;
  position: absolute;
  top:0;
  left:0;
  z-index: 99998;
}
</style>
<script>
  $(function(){
    $( '<div id="overlay"></div>' ).appendTo( 'body' );

    $('.target').click(function(e){
      $(this).css('z-index','99999');
      $('#overlay').fadeIn(300);
    });

    $('#overlay').click(function(e){
      $('#overlay').fadeOut(300, function(){
        $('.target').css('z-index','1');
      });
    });

    if ( document.documentElement.clientWidth < Math.max(document.documentElement.scrollWidth,document.body.scrollWidth) ) {
      $('#overlay').css("width", Math.max(document.documentElement.scrollWidth,document.body.scrollWidth) +'px');
    }
    else {
      $('#overlay').css("width", "100%");
    }
    if ( document.documentElement.clientHeight < Math.max(document.documentElement.scrollHeight,document.body.scrollHeight) ) {
      $('#overlay').css("height", Math.max(document.documentElement.scrollHeight,document.body.scrollHeight)+'px');
    }
    else {
      $('#overlay').css("height", "100%");
    }

  });
</script>
</head>
<body>
<h1 class="alert alert-primary">クリックした要素以外を暗転</h1>

<div id="main" class="m-4">

  <div class="target example">クリックしてください</div>

  <div class="example">
    <textarea class="target">入力できます</textarea>
  </div>

  <div class="example">
    <input type="text" class="target" value="入力できます">
  </div>

  <div class="target example">
    クリックしてください
  </div>

</div>

</body>
</html>

<?//php phpinfo() ?>
