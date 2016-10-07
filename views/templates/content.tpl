<div class="register-container container">
    <h2>Não Pertube </h2><span class="red"><strong>Bloqueio de Ligações de Empresa de Telemarketing<br></strong></span>
    <div class="row" id="tag-fb-procon">
        <div class="register span6">
            <form style="background-color: #f8f8f8;" action="<?php echo $PATH_LINK_REGISTER;?>" method="post">
                <h2 id="edit">CADASTRE-SE <br>
                <?php //Para Pessoa Fisica  ?>
                    <span class="red"><strong><?php if(true){echo INFO_PF;} else {echo INFO_PJ;}?></strong></span></h2>
                    <label for="name">Name</label>
                        <input id="name" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>" placeholder="Nome completo." type="text">
                    <label for="email">Email</label>
                        <input id="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" placeholder="user@email.com" type="text">
                    <label for="cpf">CPF</label>
                        <input id="cpf" name="cpf" value="<?php if(isset($_POST['cpf'])) echo htmlspecialchars($_POST['cpf']); ?>" placeholder="Só números" type="text">
                    <label for="rg">RG</label>
                        <input id="rg" name="rg" value="<?php if(isset($_POST['rg'])) echo htmlspecialchars($_POST['rg']); ?>" placeholder="Só números" type="text">
                    <label for="org">Orgão Expedidor</label>
                        <input id="org" name="org" value="<?php if(isset($_POST['org'])) echo htmlspecialchars($_POST['org']); ?>" placeholder="" type="text">
                    <label for="uf">UF</label>
                        <input id="uf" name="uf" value="<?php if(isset($_POST['uf'])) echo htmlspecialchars($_POST['uf']); ?>" placeholder="PB" type="text">
                <?php //Fim Pessoa Fisica?>
                <h2 id="local"> <span class="red"><strong>Endereço</strong></span></h2>
                    <label for="name">Logradouro</label>
                        <input id="rua" name="rua" value="<?php if(isset($_POST['rua'])) echo htmlspecialchars($_POST['rua']); ?>" placeholder="Rua..." type="text">
                    <label for="num_ksa">Nº</label>
                        <input id="num_ksa" name="num_ksa" value="<?php if(isset($_POST['num_ksa'])) echo htmlspecialchars($_POST['num_ksa']); ?>" placeholder="user@email.com" type="text">
                    <label for="cep">CEP</label>
                        <input id="cep" name="cep" value="<?php if(isset($_POST['cep'])) echo htmlspecialchars($_POST['cep']); ?>"placeholder="Só números" type="text">
                    <label for="bairro">Bairro</label>
                        <input id="bairro" name="bairro" value="<?php if(isset($_POST['bairro'])) echo htmlspecialchars($_POST['bairro']); ?>" placeholder="Só números" type="text">
                    <label for="cidade">Cidade</label>
                        <input id="cidade" name="cidade" value="<?php if(isset($_POST['cidade'])) echo htmlspecialchars($_POST['cidade']); ?>" placeholder="PB" type="text">
                    <button type="submit">Cadastrar</button>
            </form>
        </div>
        <div class="iphone span5">
            <h2 id="like"><span class="red"><strong>Termo de Aceito:</strong></span></h2>
            <label for="tl">Telefone</label> <input id="tl" name="tl" placeholder="00 0000 0000" pattern="^\d{4}-\d{3}-\d{4}$" type="tel">
            <div style="text-align: left;">
                <dl>
                    <dd>
                        <pre>Declaro que todas as informações aqui inseridas são verdadeiras e que até a presente data sou titular da linha e/ou endereço eletrônico cadastrado.Estou ciente que a eventual inexatidão dos dados aqui descritos pode acarretar responsabilização civil e penal.
A modificação dos dados do cadastro poderá ser efetuada mediante utilização de senha, de caráter pessoal e intransferível, de minha responsabilidade.
                                       <br><input name="termo" value="aceito" type="checkbox"> Eu Aceito
                        </pre>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="<?php echo $PATH_JS_JAQUERY;?>"></script>
    <script src="<?php echo $PATH_JS_BOOTSTRAP;?>"></script>
    <!--<script src="assets/js/jquery.backstretch.min.js"></script>-->
    <script src="<?php echo $PATH_JS;?>"></script>
</div>
</body>

</html>
