
<!DOCTYPE html>
<html>
<body>

    <head>
       
    </head>

    <form action="CertContent.php" onsubmit="return onSubmit(this)" method="post"> 


        <div> 
            <canvas id="signature" width="300" height="100" style="border:2px solid #000000;"></canvas>
        </div>

        <div>
            <input type="hidden" name="signature" />
        </div>

        <button type="submit">Send</button>

    </form> 


</body>




<script>
    <?php require_once("../assets/js/script.js");?>
</script>
</html>

