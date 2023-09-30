<?php
switch(@$_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc= $_POST["data_nasc"];
        $sql = "INSERT INTO cadaster(nome, email, senha, data_nasc)VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('cadastrado com sucesso');</script>";
            print "<script>location.href='?page=Listar'</script>";
        }else if($nome || $email == null ){
            print "<script>alert('nao foi possivel cadastrar');</script>";
        }  print "<script>location.href='?page=listar'</script>";
        break;

    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc= $_POST["data_nasc"];

        $sql = "UPDATE cadaster SET 
        nome='{$nome}',  
        email='{$email}', 
        senha='{$senha}', 
        data_nasc='{$data_nasc}' 
        WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
if($res == true){
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=Listar'</script>";
        }else if($nome || $email == null ){
            print "<script>alert('nao foi possivel Editar');</script>";
        }  print "<script>location.href='?page=listar'</script>";
        break;


    case 'excluir':
    $sql = "DELETE FROM cadaster WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        if($res === true){
            print "<script>alert('Excluido  com sucesso');</script>";
            print "<script>location.href='?page=Listar'</script>";
        }else if($nome || $email == null ){
            print "<script>alert('nao foi possivel Excluir');</script>";
        }  print "<script>location.href='?page=listar'</script>";
        break;
}
