    <div class="panel panel-primary">
        
        <table class="table">
        
                    <thead>
                        <tr><td>ID</td><td>Nome</td><td>Cargo</td></tr>
                    </thead>
                    <tbody>
                    <button class="btn btn-primary btn-lg"><a href="<?php echo HOME_URI.'funcionario/novo/' ?>">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                Adicione um funcionário</a></button>
                    
        <?php
            
            if($funcionarios){
                foreach($funcionarios AS $func){
            
                    ?>
                    <tr>
                        <td id="id"><?php printf("%s",$func['_id']); ?></td>
                        <td id="nome"><?php printf("%s",$func['nome']); ?></td>
                        <td id="cargo"><?php printf("%s",$func['cargo']); ?></td>
                        <td> <?php echo '<a class="btn btn-danger" href="'.HOME_URI.'funcionario/deletar/'.$func->_id.'">'; ?><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                    <?php
                    
                    }

            }
            
                ?>
                
                </tbody>
                </table>