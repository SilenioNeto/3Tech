<?php
include_once('./admin/connect.php');
include_once('./admin/listar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>3TECH</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <style>
      body{font-family: Arial, Helvetica, sans-serif}
      .content{display: flex; justify-content: center}
      .contato{width: 100%;max-width: 500px;}
      .form{display: flex;flex-direction: column;}
      .field{padding: 10px; margin-bottom: 5px;border: 1px solid #000000;border-radius: 5px;}
      textarea{height: 150px;}
  </style>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <nav class="img-logo navbar navbar-expand-lg bg-black">
        <div class="container ">
          <a class="navbar-brand" href="#">
            <img src="./images/logo-3tech.png" alt="3TECH" width="100" height="50" />
          </a>
        </div>
        <div class="container-fluid lado">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >SOBRE</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SERVIÇOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CONTATO</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section class="sec-1">
        <div
          id="carouselExampleSlidesOnly"
          class="carousel slide bg-primary"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="./images/logo-3tech.png"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="./images/logo-3tech.png"
                class="d-block w-100"
                alt="..."
              />
            </div>
          </div>
        </div>
      </section>

      <section class="sec-2 padding-top">
        <?php foreach ($results as $posts) : ?>
        <div class="container">
          <div class="row">
            <div class="col">
              <img src="<?= $posts["imagem"]?>" alt=""  width="569"  height="335" />
            </div>
            <div class="col order-5">
              <h1>   <?= $posts["titulo"]?></h1>
              <p>
              <?= $posts["descricao"]?>
              </p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </section>

      <section class="sec-3 bg-light padding-top">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1>RELACIONAMENTO</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Veritatis perferendis illo voluptatem deleniti, ipsum qui
                suscipit ut vitae ratione? Sint?
              </p>
            </div>
            <div class="col order-5">
              <img
                src="./images/download (39).webp"
                alt=""
                width="569"
                height="335"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="sec-4 padding-top">
        <h1 class="text-center">SERVIÇOS</h1>

        <div class="container">
          <div class="row">
            <div class="col">
              <div class="card" width="269" height="333">
                <img
                  src="images/img-web-p.jpg"
                  alt=""
                  width="269"
                  height="333"
                />
                <h2>Sistemas Web</h2>
                <p>
                  Desenvolvimento de sistemas, APIs, plataformas SaaS,
                  integrações, utilitários, ERP, CRM, etc.
                </p>
              </div>
            </div>

            <div class="col order-5">
              <div class="card" width="269" height="333">
                <img
                  src="images/img-consultoria-p.jpg"
                  alt=""
                  width="269"
                  height="333"
                />
                <h2>Consultoria</h2>
                <p>
                  Análise de viabilidade de projetos e adequação à LGPD (Lei
                  Geral de Proteção de Dados).
                </p>
              </div>
            </div>

            <div class="col order-1">
              <div class="card" width="269" height="333">
                <img
                  src="images/img-agilidade-p.jpg"
                  alt=""
                  width="269"
                  height="333"
                />
                <h2>Agilidade</h2>
                <p>
                  Transformação Digital e Acelera o seu desempenho, moderniza
                  processos e transforma equipes de forma Ágil.
                </p>
              </div>
            </div>

            <div class="col order-4">
              <div class="card" width="269" height="333">
                <img
                  src="images/img-mobile-p.jpg"
                  alt=""
                  width="269"
                  height="333"
                />
                <h2>Aplicativos Mobile</h2>
                <p>
                  Desenvolvimento de apps Android e iOS, com geolocalização,
                  notificações push, bluetooth, etc.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="sec-5 bg-light padding-top">
        <h1 class="text-center">Parceiros</h1>
        <div class="parcerias">
          <div class="par">
            <div class="img">
              <img id="img-x" src="images/christina-wocintechchat-com-faEfWCdOKIg-unsplash.jpg" alt="">
            </div>
            <div class="parceiros">
              <img src="images/628fe366c2ea8c4f127e0cf5_arquitetura-agil-apis.jpg" alt="">
            </div>
            <div class="parceiros">
              <img src="images/c-d-x-PDX_a_82obo-unsplash.jpg" alt="">
            </div>
            <div class="parceiros">
              <img src="images/carson-masterson-0mXw-dvuLok-unsplash.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="parcerias">
          <div class="par">
            <div class="parceiros">
              <img src="images/luca-bravo-XJXWbfSo2f0-unsplash.jpg" alt="">
            </div>
 
            <div class="parceiros">
              <img id="img-5" src="images/martin-shreder-5Xwaj9gaR0g-unsplash.jpg" alt="">
            </div>
            <div class="parceiros">
              <img src="images/omar-prestwich-0TQa-Ur6Zqg-unsplash.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="parcerias">
          <div class="par">
            <div class="parceiros">
              <img src="images/simon-abrams-k_T9Zj3SE8k-unsplash.jpg" alt="">
            </div>
            <div class="parceiros">
              <img src="images/c-d-x-PDX_a_82obo-unsplash.jpg" alt="">
            </div>
            <div class="parceiros">
              <img id="img-6" src="images/cel.jpg" alt="">
            </div>
           
          </div>
         
        </div>
      </section>

      <section class="sec-6"> 
        <div class="text-center padding-top">
          <h1>FeedBack</h1>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/slide.jpg" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
              <img src="images/slide.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/slide.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </section>

      <!--formulario-->
      <section class="sec-7 bg-light padding-top">
        <div class="text-center">
        <h3>Contato</h3>
        <h4>Solicite seu orçamento</h4>
      </div>
        <div class="content bg-light">
            <div class="contato">
             
              <form class="form" method="POST" action="./email.php">
                  <input class="field" type="text" name="nome" placeholder="Nome">
                  <input class="field" type="email" name="email" placeholder="E-mail">
                  <input class="field" type="text" name="empresa" placeholder="Empresa">
                  <input class="field" type="text" name="cidade" placeholder="Cidade">
                  <input class="field" type="text" name="area" placeholder="Área de atuação">
                  <input class="field" type="tel" name="telefone" placeholder="Telefone">
                  <input class="field" type="text" name="servico" placeholder="Escolha o serviço">
                  <input class="field" type="text" name="tipo" placeholder="O projeto será para que área:">
                  <input class="field" type="text" name="encontra" placeholder="Como nos encontrou:">
                  <input class="field" type="text" name="premissa" placeholder="Existe alguma premissa ou pré-requisito(exemplo, limite de data ou orçamento)?">
                  <textarea class="field" name="message" placeholder="Descrição do projeto:"></textarea>
                  <input class="field" type="submit" value="Solicitar orçamento">
              </form>
  
              
          </div>
        </div>
  
      </section>

    </main>

  
  
    <footer>
      <section class="sec-8">
      <nav class="bg-black">
        <div class="container text-white">
          <div class="text-center">
            Todos os Direitos Reservados. Powered by Three Tec &copy; 2022
          </div>
        </div>
      </nav>
    </section>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>