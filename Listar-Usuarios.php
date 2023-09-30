<h1 style="margin-bottom:20px;font-family:Arial; color:#444;">Clientes:</h1>
<?php

$sql = "SELECT * FROM cadaster";

$res = $res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
    print"<table class='table table-hover table-striped table-bordered'>";
    print"<tr>";   
    print"<th>#</th>";
    print"<th>Nome</th>";
    print"<th>email</th>";
    print"<th>data nascimento</th>";
    print"<th>Açoes</th>";
    print"</tr>";
while($row = $res->fetch_object()){
     print"<tr>";   
     print"<td>".$row->id."</td>";
     print"<td>".$row->nome."</td>";
     print"<td>".$row->email."</td>";
     print"<td>".$row->data_nasc."</td>";
     print"<td>
     <button onclick=\"location.href='?page=editar&id=".$row->id."';\"  class='btn btn-success'>Editar</button>
     <button onclick=\"if(confirm('tem certeza que deseja excluir')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"  class='btn btn-danger' >excluir</button>
     </td>";
     print"</tr>";
    }
    print"</table>";

}else{
    print"<p class='alert-danger'>Nao encontrou resultados!</p>";
}
?>