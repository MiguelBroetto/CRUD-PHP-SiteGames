<?php

include 'funcoes.php';
require 'bdcom.php';

echo criarTopo($SITE);

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<main><table>
    <tr>
    <td>Botões</td>
    <td>ID</td>
    <td>EMAIL</td>
    <td>SENHA</td>
    <tr>";
    while($row = mysqli_fetch_assoc($result)){
        // echo "ID: " . $row["id"] .
        //      " - Email: " . $row["email"] . " -
        //     Senha: " . $row["senha"] . 
        // "<br>";

        echo '<tr>
                    <td>
                        <a class="deletar" href="deletar_usuario.php?id='.$row["id"].'">Deletar</a>
                        <a class="editar" href="editar_usuario.php">Editar</a>
                    </td>
                    
                        <td>'.$row["id"].'</td>;
                        <td>'.$row["email"].'</td>;
                        <td>'.md5($row["senha"]).'</td>
                    </tr>';
}

echo '</table></main>';

} else {
    echo " Nenhum usuário encontrado.";
}

mysqli_close($conn);

echo "<br>";

echo criarRodape();
?>