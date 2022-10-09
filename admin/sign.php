<!DOCTYPE html>
<html>
<head> 
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>The Signature</title>
   <link rel="stylesheet" href="../libs/css/bootstrap.v3.3.6.css">
   <script type="text/javascript" src="../assets/js/script.js"></script>
</head>

<body>
<h1>SIGN HERE</h1>
<form method="post" action="process.php" enctype="multipart/form-data">
   <div id="signature-pad">
     <div style="border:solid 1px teal; width:360px;height:110px;padding:3px;position:relative;">
        <div id="note" onmouseover="my_function();">The signature should be inside box</div>
        <canvas id="the_canvas" width="350px" height="100px"></canvas>
     </div>
     <div style="margin:10px;">
        <input type="hidden" id="signature" name="signature">
        <button type="button" id="clear_btn" data-action="clear"> Clear</button>
        <button type="submit" id="save_btn" data-action="save-png"> Save</button>
     </div>
   </div>
<form>
   

</body>
<script>
    <?php require_once("../assets/js/sign.js");?>
</script>


</html>