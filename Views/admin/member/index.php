<?php

    foreach ($members as $member) {
        echo $member->getName();
        echo " | ";
        echo $member->getFedartion();
        echo "<br>";
?>
<a href="/Treinamento 2019.2/member/edit">
<button>
editar
</button>
</a>

<a href="/Treinamento 2019.2/member/delete">
<button>
excluir
</button>
</a>

<?php
}
?>