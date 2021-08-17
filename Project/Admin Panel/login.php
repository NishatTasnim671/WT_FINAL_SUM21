<?php
require_once 'controllers/UserController.php';

?>
<html>

<head>
    <style>
        .title {
            text-align: center;
        }



        #text {

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #button {

            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }

        #box {

            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>
</head>
<h5><?php echo $err_db; ?></h5>

<body>


    <div id="box">
        <form method="post" action="">
            <h2 class="title">Welcome to Learn Panda</h2>
            <div style="font-size: 20px;margin: 10px;color: white;">Login</div>

            <table>
                <!-- <td>
                    <h3 class="title">Login</h3>
                </td> -->
                <tr>
                    <p>User Name</p>
                    <p> <input id="text" type="text" name="uname" value="<?php echo $uname; ?>"> </p>
                    <p><span> <?php echo $err_uname; ?> </span></p>
                </tr>

                <tr>
                    <p>Password</p>
                    <p> <input id="text" type="password" name="pass"> </p>
                    <p><span> <?php echo $err_pass; ?> </span></p>
                </tr>

                <tr>
                    <td colspan="2" align="right"> <input id="button" type="submit" name="btn_login" value="Log In"> </td>

                </tr>
            </table>
        </form>
    </div>





</body>

</html>