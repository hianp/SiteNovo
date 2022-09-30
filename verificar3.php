<?php
        include 'config.php';
        switch ($_POST['trocasenha']) {
            case 'mudarsenha':
                $verificar = "SELECT * FROM usuarios WHERE senha='".$_POST['senha']."'";
                $res = $conn->query($verificar);
                $senha = $_POST['senha'];
                
                if($res==true){
                    print "<script>alert('senha valida');</script>";
                    print "<script>location.href='mudarsenha2.php';</script>";
                }else{
                    print "<script>alert('senha invalida');</script>";
                    print "<script>location.href='?page=mudarsenha';</script>";
                }

            case 'mudarsenha2':
                $trocasenha = "UPDATE usuarios SET senha ='".$_POST['senha2']."' WHERE senha = '$senha'";
                $res1 = $conn->query($trocasenha);
                
                if($res1==true){
                    print "<script>alert('senha alterada');</script>";
                    print "<script>location.href='index2.php';</script>";
                }else{
                    print "<script>alert('senha nao foi alterada');</script>";
                    print "<script>location.href='?page=mudarsenha2';</script>";
                }
                break;
            
			}


?>