<html>
    <form action="/Treinamento 2019.2/member/update" method="post">
        <input name="name" placeholder="Nome">
        <input name="role" placeholder="Cargo">
        <select name="company_id" placeholder="Selecione uma empresa">
            <?php
                foreach ($companys as $company) {                   
                
            ?>
            <option value=" <?php $company->getId()?>">  
                <?php echo $company->getName()?>
            </option>
            <?php
                }
            ?>
        </select>       
        <button type="submit"> Cadastrar </button>        
    </form>
</html>