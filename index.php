<?php
include "header.php";
?>
    <div class="container">
        <div class="jumbotron">
            <div align="center" class="head">
                <div class="btn1">
                    <input type="submit" onclick="enc()" class="enc btn btn-outline-info" value="Encrypter"><input type="submit" onclick="dec()" class="dec btn btn-outline-danger" value="Decrypter">
                    <div id="enc">
                        <?php include "enc.php";?>
                    </div>
                    <div id="dec">
                        <?php include "dec.php"; ?>
                    </div>
                </div>
                <div>
                    <?php
                    if(isset($_GET['esuccess']))
                    {
                        include_once "success_enc.php";
                    }
                    if(isset($_GET['dsuccess']))
                    {
                        include_once "success_dec.php";
                    }
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
    function enc()
    {
        document.getElementById('enc').style.display = "block";
        document.getElementById('dec').style.display = "none";
    }
    function dec()
    {
        document.getElementById('dec').style.display = "block";
        document.getElementById('enc').style.display = "none";
    }
    </script>
</body>
</html>