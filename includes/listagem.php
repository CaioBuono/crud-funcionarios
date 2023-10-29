
<section class="topo">
  <h1>Cadastrar vaga</h1>
  <p>Preencha os dados do novo funcionario</p>
</section>

<div class="botao-topo">
  <a href="index.php">
    <button type="button">Voltar</button>
  </a>
</div>

<form method="post">
    <label for="nome">Nome do funcionario</label>
    <input type="text" name="nome">
    <label for="idade">Idade do funcionario</label>
    <input type="number" name="idade">
    <label for="cpf">CPF do funcionario</label>
    <input type="text" name="cpf">
    <label for="contato">Contato de telefone</label>
    <input type="number" name="contato">
    <label for="email">Correio eletronico</label>
    <input type="email" name="email">
    <label for="cargo">Cargo atual</label>
    <input type="text" name="cargo">
    <input type="submit" class="botao-cadastro" value="Cadastrar">
</form>