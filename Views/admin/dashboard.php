<?php 
    session_start();    
    echo "Olá ".$_SESSION['user'];
?>
<a href="/Treinamento Ecompjr/user/logout">Sair</a>

<br>
<br>
<div>
    <a href="/Treinamento Ecompjr/Views/admin/company/index.php">Listar empresas</a>
    <a href="/Treinamento Ecompjr/Views/admin/company/create.php">Cadastrar empresa</a>
</div>