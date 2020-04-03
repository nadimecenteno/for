<html>
    <form action="/Treinamento 2019.2/member/update" method="post">
        <input name="name" placeholder="Nome" value="<?php echo $member->getName() ?>">
        <input name="role" placeholder="Cargo" value="<?php echo $member->getRole() ?>">
        <select name="company_id" placeholder="Selecione uma empresa">
            <?php
                foreach ($companys as $company) {                   
                
            ?>
            <option value=" <?php $company->getId() ?>" <?php if($company->getName() == $member->getCompany()->getName()){ ?> selected="selected" <?php } ?>>  
                <?php echo $company->getName()?>
            </option>
            <?php
                }
            ?>
        </select>       
        <button type="submit"> Salvar </button>        
    </form>
</html>