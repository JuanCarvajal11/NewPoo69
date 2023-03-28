<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script language="JavaScript">
    function comprobar() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-center',
            showConfirmButton: false,
            timer: 3000,
            color: '#000000',
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: 'Inicio de Sesion Correcto'
        })
    }

    function denegar() {
        Swal.fire({
            icon: 'error',
            title: 'Lo siento...',
            text: 'Correo o contraseña incorrectos',
            showConfirmButton: false
        })
    }
</script>
<script language="JavaScript">
    function redireccionar() {
        setTimeout("window.location='../home.php';", 3000);
    }
</script>
<script language="JavaScript">
    function redevolver() {
        setTimeout("window.location = '../index.php';", 3000);
    }
</script>
<?php


if(isset($_POST['submit'])){
    if(isset($_POST['usr'])){
        include_once('Classpoo.php');
        $user = $_POST['usr'];
        $pass = $_POST['pss'];
        $loguin = New Loguin();
        $loguin->entradaDatos($user,$pass);
        $loguin->loguear();
        $response = $loguin->loguear();

        if($response === 'true'){
            echo "<font color=\"white\">b</font>";
            echo "<script>";
            echo "comprobar();";
            echo "</script>";
            echo "<script>";
            echo "redireccionar();";
            echo "</script>";
            exit();
        }else{
            echo "<font color=\"white\">b</font>";
            echo "<script>";
            echo "denegar();";
            echo "</script>";
            echo "<script>";
            echo "redevolver();";
            echo "</script>";
            exit();

        }

    }

}