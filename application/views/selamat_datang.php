<html>
    <head>
        <title>loginLayout</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/loginStyle.css">
  
        <script src="script/jquery.min.js"></script>
        <script src="script/myScript.js"></script>
        <script src="style/bootstrap/js/bootstrap.min.js"></script>
        <script src="style/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
    </head>
    <div class="cont col-md-12">
        <div class="col-md-4" style="margin: 0px auto;">
                    <h3><strong>Welcome</strong> Akses Warrior</h3>
                </div>
        <div class="main col-md-4">
            <div class="main-head">
                <div class="row">
                    <div class="col-md-6 tabBtn loginTab" id="loginTab" onclick="switchLayout(event, 'loginLayout')">
                        <h5 style="text-align: center; vertical-align: middle">Login</h5>
                    </div>
                    <div class="col-md-6 tabBtn signupTab" id="signupTab" onclick="switchLayout(event, 'signupLayout')">
                        <h5 style="text-align: center; vertical-align: middle">Sign Up</h5>
                    </div>
                </div>
            </div>
            <div class="main-cont">
                <form method="POST" action="<?php echo base_url(); ?>index.php/main/login">
                <div class="kontenLayout" id="loginLayout">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" aria-describedby="basic-addon1">
                    </div>
                    <input type="submit" name="submit" value="LOGIN" class="btn btn-primary col-md-12" href="<?php echo base_url(); ?>index.php/main/get_admin">
                </div>
                </form>
                <form method="POST" action="<?php echo base_url();?>index.php/main/signup" name="form">
                <div class="kontenLayout" id="signupLayout">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-id-badge"></i></span>
                        <input type="text" class="form-control" placeholder="NIK" id="nik" name="nik" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" aria-describedby="basic-addon1">
                    </div>
                    <input type="submit" name="submit" value="SIGN UP" class="btn btn-primary col-md-12">
                    
                </div>
                </form>
            </div>
            <div class="main-foot">

            </div>
        </div>
            <?php
                                if(!empty($notif))
                                {
                                echo '<div class="alert alert-danger col-md-4">';
                                echo $notif;
                                echo '</div>';
                                }
                                ?>
    </div>
    <div class="foot col-md-12">

    </div>
    <script>
        document.getElementById("loginTab").click();

        function switchLayout(evt, layout) {
            var i, kontenLayout, tabBtn;
            kontenLayout = document.getElementsByClassName("kontenLayout");
            for (i = 0; i < kontenLayout.length; i++) {
                kontenLayout[i].style.display = "none";
            }
            tabBtn = document.getElementsByClassName("tabBtn");
            for (i = 0; i < tabBtn.length; i++) {
                tabBtn[i].className = tabBtn[i].className.replace(" active", "");
            }
            document.getElementById(layout).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("tabLogin").click();

    </script>
</body>
    
</html>