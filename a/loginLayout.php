<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet" href="style/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/headStyle.css">
    <link rel="stylesheet" href="style/contStyle.css">
    <link rel="stylesheet" href="style/loginStyle.css">
    <link rel="stylesheet" href="style/footStyle.css">


    <script src="script/jquery.min.js"></script>
    <script src="script/myScript.js"></script>
    <script src="style/bootstrap/js/bootstrap.min.js"></script>
    <script src="style/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
</head>

<body>
    <div class="head col-md-12">
        TelkomAkses_Solo
    </div>
    <div class="cont col-md-12">
        <div class="col-md-4" style="margin: 0px auto;">
            <h3>TelkomAkses - SOLO</h3>
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
                <div class="kontenLayout" id="loginLayout">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
                        <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                    </div>
                    <button class="btn btn-primary col-md-12">Login <i class="fa fa-sign-in"></i></button>
                </div>
                <div class="kontenLayout" id="signupLayout">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-id-badge"></i></span>
                        <input type="text" class="form-control" placeholder="NIK" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
                        <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                    </div>
                    <button class="btn btn-primary col-md-12"><i class="fa fa-id-card"></i> Sign Up</button>
                </div>
            </div>
            <div class="main-foot">

            </div>
        </div>
        <div class="alert alert-danger col-md-4">
            <strong>Fail!</strong> Please check your Username or Password
        </div>
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
