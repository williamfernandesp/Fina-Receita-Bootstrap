<?php
session_start();

include "../conexao/conexao.php";

if (empty($_SESSION)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  include('../header/cabecalho.php');
} else {
  include('../header/cabecalhoLogado.php');
}
?>

<!--Conteúdo-->

<div class="card p-3 m-4 mx-auto" style="width: 50%">
  <div class="text-center d-flex justify-content-center">
    <img src="img/chef.png" style="height: 2rem" />
    <p style="color: #236828">Doces</p>
  </div>

  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/bolo_cenoura_brigadeiro_zona_sul.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../bolo_cenoura/bolo_cenoura.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Bolo de Cenoura com cobertura de chocolate</h5>
            <p class="card-text">Bolo de cenouro macio, com cobertura de chocolate. Com poucos ingredientes você faz uma sobremesa e tanto. </p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/bombom de morango.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../bombom/bombom.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Bombom de Morango na travessa</h5>
            <p class="card-text">Simples e fácil de fazer, o bombom na travessa é uma receita de sobremesa que leva apenas 5 ingredientes.</p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/brigadeiro.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../brigadeiro/brigadeiro.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Brigadeiro</h5>
            <p class="card-text">O brigadeiro é um doce típico da culinária brasileira, de origem paulista, o qual rapidamente se difundiu pelo resto do país.</p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
            </p>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/pudim.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../pudim/pudim.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Pudim de leite</h5>
            <p class="card-text">Receita de pudim de leite com apenas quatro ingredientes muito fácil de fazer para você que está procurando um pudim diferente.</p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="img/sonho.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="../sonho/sonho.php" style="text-decoration: none; color:black">
            <h5 class="card-title">Sonho</h5>
            <p class="card-text">A bola de Berlim (português europeu) ou sonho (português brasileiro) é um bolo tradicional da culinária alemã.</p>
            <div>
              <button type="button" class="btn btn-outline-success">Ver mais</button>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>


  <button type="button" class="col-lg-2 mx-auto btn btn-outline-success" style="display: none;">Ver mais</button>
</div>


<!--Conteúdo-->

<?php include('../footer/rodape.php'); ?>