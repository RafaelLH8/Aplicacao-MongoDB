
        
        <form class="form" method="post" action="<?php echo HOME_URI?>funcionario/salvar">
        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="endereco" placeholder="Endereço">
        </div>
        <div class="form-group">
            <h2>Sexo</h2>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Masculino</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Feminino</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Outro</label>
        </div>
        <div class="form-group">
            <h2>Data de Nascimento</h2><br>
            <input type="date" id="data" name="date">
        </div>
        <div class="form-group">
            <input type="number" id="salario" name="salario" placeholder="Salário">
        </div>
        <div class="form-group">
            <h2>Cargo</h2>
            <label for="cargo" value="Escolha o cargo">
            <input type="radio" id="Medico" name="cargo" value="Medico">
            <label for="Medico">Médico</label><br>
            <div class="reveal-if-active">
                <label for="crm">CRM</label>
                <input type="text" id="crm" name="crm" class="require-if-active" data-require-pair="#Medico">
            </div>
            <div>
            <input type="radio" id="Engenheiro" name="cargo" value="Engenheiro">
            <label for="Engenheiro">Engenheiro</label><br>
            <div class="reveal-if-active">
                <label for="crea">CREA</label>
                <input type="text" id="crea" name="crea" class="require-if-active" data-require-pair="#Engenheiro">
            </div>
            </div>
            <input type="radio" id="Operario" name="cargo" value="Operario">
            <label for="Operario">Operario</label>
        </div>
        <div class="input-form">
            <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
        </div>
    