<div class="register-container container">
      <h2>Não Pertube </h2><span class="red"><strong>Bloqueio de Ligações de Empresa de Telemarketing<br></strong></span>
      <div class="row" id="tag-fb-procon">
          <div class="register span6">
              <form style="background-color: #f8f8f8;" action="../controller/cadastro.php?action=login" method="post">
                  <h2 id="edit">CADASTRE-SE <br>
            <span class="red"><strong>Informções Pessoais</strong></span></h2>
                  <label for="name">Name</label><input id="name" name="name" placeholder="Nome completo." type="text"> <label for="email">Email</label> <input id="email" name="email" placeholder="user@email.com" type="text"> <label for="cpf">CPF</label>
                  <input
                      id="cpf" name="cpf" placeholder="Só números" type="text"> <label for="rg">RG</label><input id="rg" name="rg" placeholder="Só números" type="text"> <label for="og">Orgão
            Expedidor</label><input id="og" name="og" placeholder="" type="text"> <label for="uf">UF</label> <input id="uf" name="uf" placeholder="PB" type="text">
                      <h2 id="local"> <span class="red"><strong>Endereço</strong></span></h2>
                      <label for="name">Logradouro</label> <input id="name" name="name" placeholder="Nome completo." type="text"> <label for="email">Nº</label> <input id="email" name="email" placeholder="user@email.com" type="text"> <label for="cpf">CEP</label>
                      <input
                          id="cpf" name="cpf" placeholder="Só números" type="text"> <label for="rg">Bairro</label>
                          <input id="rg" name="rg" placeholder="Só números" type="text"> <label for="og">Rua</label>
                          <input id="og" name="og" placeholder="" type="text"> <label for="uf">Cidade</label>
                          <input id="uf" name="uf" placeholder="PB" type="text"> <button type="submit">Cadastrar</button>
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
