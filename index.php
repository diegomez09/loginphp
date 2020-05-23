<?php
$BBDD_host="127.0.0.1";
$BBDD_BBDD="virtua";
$BBDD_user="root";
$BBDD_pass="";

$con=mysqli_connect($BBDD_host,$BBDD_user,$BBDD_pass);
if(mysqli_connect_errno()){
echo "<script>
alert('NO SE CONECTO AL HOST');
window.location.href='registrar.php';
</script>";
}
mysqli_set_charset($con,"UTF8");
mysqli_select_db($con,$BBDD_BBDD) or die ("
echo '<script>
alert('ERROR AL CONECTARSE');
window.location.href='registrar.php';
</script>';
");

?>
<html>
<head>
<script src="https://kit.fontawesome.com/89c25c868f.js" crossorigin="anonymous"></script>
<title>
Virtualizacion Proyecto
</title>
</head>
<body>
<style>
    .center{
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        position: fixed;
        z-index: 1;
        bottom: 30px;
    }
    #snackbar {
    visibility: hidden;
    min-width: 250px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    font-size: 17px;
    }

    #snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
    }

    @keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
    }

    @-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
    }

    @keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
    }

    @import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body {
        background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
    background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
    background-attachment: fixed;
    background-repeat: no-repeat;
        font-family: 'Vibur', cursive;
        font-family: 'Abel', sans-serif;
        opacity: .95;
    }
    form {
        width: 450px;
        min-height: 500px;
        height: auto;
        border-radius: 5px;
        margin: 2% auto;
        box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
        padding: 2%;
        background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
    }
    form .con {
        display: -webkit-flex;
        display: flex;
    
        -webkit-justify-content: space-around;
        justify-content: space-around;
    
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
    
        margin: 0 auto;
    }
    header {
        margin: 2% auto 10% auto;
        text-align: center;
    }
    header h2 {
        font-size: 250%;
        font-family: 'Playfair Display', serif;
        color: #3e403f;
    }
    header p {letter-spacing: 0.05em;}
    .input-item {
        background: #fff;
        color: #333;
        padding: 14.5px 5px 15px 9px;
        border-radius: 5px 0px 0px 5px;
    }
    #eye {
        background: #fff;
        color: #333;
    
        margin: 5.9px 0 0 0;
        margin-left: -20px;
        padding: 15px 9px 19px 9px;
        border-radius: 0px 5px 5px 0px;
    
        float: right;
        position: relative;
        right: 1%;
        top: -.2%;
        z-index: 5;
        
        cursor: pointer;
    }
    input[class="form-input"]{
        width: 240px;
        height: 50px;
    
        margin-top: 2%;
        padding: 15px;
        
        font-size: 16px;
        font-family: 'Abel', sans-serif;
        color: #5E6472;
    
        outline: none;
        border: none;
    
        border-radius: 0px 5px 5px 0px;
        transition: 0.2s linear;
        
    }
    input[id="txt-input"] {width: 250px;}
    input:focus {
        transform: translateX(-2px);
        border-radius: 5px;
    }
    button {
        display: inline-block;
        color: #252537;
    
        width: 280px;
        height: 50px;
    
        padding: 0 20px;
        background: #fff;
        border-radius: 5px;
        
        outline: none;
        border: none;
    
        cursor: pointer;
        text-align: center;
        transition: all 0.2s linear;
        
        margin: 7% auto;
        letter-spacing: 0.05em;
    }
    .button {
        display: inline-block;
        color: #252537;
    
        width: 280px;
        height: 50px;
    
        padding: 0 20px;
        background: #fff;
        border-radius: 5px;
        
        outline: none;
        border: none;
    
        cursor: pointer;
        text-align: center;
        transition: all 0.2s linear;
        
        margin: 7% auto;
        letter-spacing: 0.05em;
    }
    .submits {
        width: 100%;
        display: inline-block;
        float: left;
    }
    .frgt-pass {background: transparent;}
    .sign-up {background: #B8F2E6;}
    input{
        background: white;
    }
    button:hover {
        transform: translatey(3px);
        box-shadow: none;
    }
    button:hover {
        animation: ani9 0.4s ease-in-out infinite alternate;
    }
    @keyframes ani9 {
        0% {
            transform: translateY(3px);
        }
        100% {
            transform: translateY(5px);
        }
    }

</style>
<div class="overlay">
<form action="index.php" method="post">
   <div class="con">
   <header class="head-form">
      <h2>Iniciar Sesion</h2>
      <p>Usa tu Usuario y contraseña</p>
   </header>
   <br>
    <div class="field-set">
            <span class="input-item">
            <i class="fa fa-user-circle"></i>
            </span>
            <input class="form-input" id="txt-input" name="username" type="text" placeholder="@UserName" required>
        <br>
        <span class="input-item">
            <i class="fa fa-key"></i>
        </span>
        <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
        <span>
            <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
        </span>
        <br>
        <input class="button" type="submit" name="iniciar_sesion" value="INICIAR SESION">
        <div class="other">
            <input class="button btn submits sign-up" type="submit" name="registrar" value="REGISTRARSE">
        </div>
    </div>
  </div>
</form>
</div>
<?php
    if(isset($_POST['iniciar_sesion'])){
        if($_POST['username']!="" && $_POST['password']!=""){
            $user1=$_POST['username'];
            $pass1=$_POST['password'];
            $consultaX="SELECT * FROM usuarios WHERE nombre='$user1' AND contra='$pass1'";
            $resultados1=mysqli_query($con,$consultaX);
            $row = mysqli_fetch_array($resultados1);
            $countX=mysqli_num_rows($resultados1);
            if(!empty($countX)){
                echo '
                <script type="text/javascript">',
                    '
                    setTimeout(function(){var x = document.getElementById("snackbar"); x.className = "show";}, 1000);
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                    ',
                '</script>
                <div class="center"><div id="snackbar">Bienvenido '.$user1.'</div></div>
                ';
            } else {
                echo '
                <script type="text/javascript">',
                    '
                    setTimeout(function(){var x = document.getElementById("snackbar"); x.className = "show";}, 1000);
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                    ',
                '</script>
                <div class="center"><div id="snackbar">Los datos son incorrectos</div></div>
                ';
            }
        }
    }
    if(isset($_POST['registrar'])){
        if($_POST['username']!="" && $_POST['password']!=""){
            $user1=$_POST['username'];
            $pass1=$_POST['password'];
            $consultaX="INSERT INTO usuarios (nombre, registro, correo, contra) VALUES ('$user1', '', '', '$pass1')";
            $result=mysqli_query($con,$consultaX);
            if($result){
                echo '
                <script type="text/javascript">',
                    '
                    setTimeout(function(){var x = document.getElementById("snackbar"); x.className = "show";}, 1000);
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                    ',
                '</script>
                <div class="center"><div id="snackbar">El usuario '.$user1.' fue registrado exitosamente</div></div>
                ';
            }
        }
    }
?>

<script>

function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);



</script>
</body>
</html>