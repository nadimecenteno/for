<?php 
    session_start();    
    echo "Olá ".$_SESSION['user'];
?>
<a href="/Treinamento Ecompjr/user/logout">Sair</a>

<br>
<br>
<div>
    <a href="/Treinamento Ecompjr/member/index">Listar membros</a>
    <a href="/Treinamento Ecompjr/member/create">Cadastrar membro</a>
</div>
<br>
<br>
<div>
    <a href="/Treinamento Ecompjr/company/index">Listar empresas</a>
    <a href="/Treinamento Ecompjr/company/create">Cadastrar empresa</a>
</div>