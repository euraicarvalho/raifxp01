<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Hack Dutra Mines - HackingMines</title>
  <!-- Favicon-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <style>
    .back {
      background-image: url(./images/IMG_1957.png);
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .quadrado-grande {
      margin-bottom: 80px;
    }

    .quadrados {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin-bottom: 650px;
    }

    .quadrado-grande {
      width: 250px;
      height: 250px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-bottom: -240px;
    }


    .btn-Gerar-Hack {
      background-color: #00008b;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 20px;
    }

    .btn-acessar-plataforma {
      display: inline-block;
      padding: 10px 10px;
      font-size: 18px;
      font-weight: bold;
      text-align: center;
      text-decoration: none;
      color: #fff;
      background-color: green;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      max-width: 200px;
      /* adicione essa linha para limitar a largura do botão */
      margin-top: 20px
    }


    .quadrado-vazio {
      width: 60px;
      height: 60px;
      margin: 5px;
      border: 2px solid blue;
      border-radius: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #00008b;
    }

    .circle {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background-color: #00bfff;
    }

    .linha {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .button-group {
      display: flex;
      justify-content: center;
    }

    .square-group {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .square {
      width: 50px;
      height: 50px;
      background-color: blue;
      margin: 0 10px;
    }

    #hackGerado {

      text-align: center;
      color: white;
      background-color: black;
      border-radius: 20px;
    }

    #outroTexto {
      position: relative;
      top: 480px;
      /* ou outro valor, conforme necessário */
    }



    #logo {
      position: fixed;
      top: 120px;
      justify-content: center;
    }
  </style>

</head>

<body id="page-top">
  <!-- Masthead-->
  <header class="masthead text-white text-center"
    style="background-repeat: no-repeat; background-size: cover;background-image: url(images/IMG_1957.png)">
    <div class="container d-flex align-items-center flex-column">
      <!--<img src="images/logo.png" style="max-width: 200px;">-->
      <!---------- ################################### -->
      <div class="col-12 col-md-12 col-lg-12">
        <img src="images/logo.png" style="max-width: 200px;" />
      </div>
      <div id="outroTexto"></div>
      <div class="col-md-12 col-lg-12">
        <div id="hackGerado"></div>
      </div>
      <div class="col-12 col-md-6 col-lg-12">
        <div class="linha">
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
        </div>
        <div class="linha">
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
        </div>
        <div class="linha">
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
        </div>
        <div class="linha">
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
        </div>
        <div class="linha">
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
          <div class="quadrado-vazio">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <div id="link" align="center"></div>
      <div class="col-12 col-md-6 col-lg-12">
        <a href="https://k8v3.waway.io/4277-8682164" class="btn btn-success" target="_blank">Cadastre-se Para Jogar</a>
        <button id="gerarBtn" class="btn btn-primary"><img src="images/hack.svg" width="18" height="18"> Gerar
          Hacker</button>
      </div>


      <div id="hackGerado"></div>



      <!-- #-----------------------------------------# -->
    </div>
  </header>
  <!-- Copyright Section-->
  <div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; WebMasterLCK</small></div>
  </div>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script>
    const gerarBtn = document.getElementById("gerarBtn");

    gerarBtn.addEventListener("click", gerarImagens);

    function inicializarTemporizador() {
      // código para iniciar o temporizador aqui
    }

    const outroTexto = document.getElementById("outroTexto");

    let imagensGeradas = [];

    function gerarImagens() {
      // Desabilita o botão "Gerar Hack" e muda o texto para "Aguarde..."
      gerarBtn.disabled = true;
      gerarBtn.innerText = "Aguarde...";

      // Define o tempo total do temporizador em milissegundos
      const tempoTotal = 90000; // 90 segundos

      // Define o tempo inicial como o tempo atual
      const inicioTempo = Date.now();

      // Define uma função para atualizar o temporizador a cada segundo
      const atualizarTemporizador = setInterval(() => {
        const segundosRestantes = Math.ceil((tempoTotal - Date.now() + inicioTempo) / 1000);
        gerarBtn.innerText = `AGUARDE ${segundosRestantes}`;

        // Quando o temporizador chegar a zero, limpa o intervalo e reabilita o botão
        if (segundosRestantes <= 0) {
          clearInterval(atualizarTemporizador);
          gerarBtn.disabled = false;
          gerarBtn.innerText = "Gerar Sinal";
        }
      }, 1000);

      const numImagens = Math.floor(Math.random() * 5) + 2; // gera um número aleatório entre 3 e 9
      const quadradosVazios = Array.from(document.querySelectorAll(".quadrado-vazio"));
      const hackGerado = document.getElementById("hackGerado");
      hackGerado.innerText = "";
      const numMinas = Math.floor(Math.random() * 3) + 2; // gera um número aleatório entre 2 e 4
      const numTentativas = Math.floor(Math.random() * 5) + 2; // gera um número aleatório entre 1 e 5
      hackGerado.innerText += `💣APOSTAR: ${numMinas} MINAS
                           🎯Nº DE TENTATIVAS: ${numTentativas}
                           ⏱️VALIDO ATÉ: 3 MINUTOS`;
      outroTexto.innerText = "Plataforma Correta Abaixo👇👇";

      // Define um tempo para esperar antes de recarregar a página em milissegundos
      const tempoRecarregarPagina = 90000;

      // Espera o tempo definido antes de recarregar a página
      setTimeout(() => {
        location.reload();
      }, tempoRecarregarPagina);

      for (let i = 0; i < numImagens; i++) {
        const quadrado = quadradosVazios[Math.floor(Math.random() * quadradosVazios.length)];
        const imagem = document.createElement("img");
        imagem.src = "images/estrelaa.png"; // substitua pelo caminho para a imagem que você deseja usar
        quadrado.querySelector(".circle").remove(); // remove o círculo do quadrado selecionado
        quadrado.appendChild(imagem);
        quadradosVazios.splice(quadradosVazios.indexOf(quadrado), 1); // remove o quadrado selecionado da lista de quadrados vazios
      }

      gerarBtn.disabled = true; // desabilita o botão "Gerar Hacker" por 60
      segundos
      setTimeout(() => {
        gerarBtn.disabled = false;
      }, 60000);

      // Limpa os quadrados
      const quadradosOcupados = Array.from(document.querySelectorAll(".quadrado-ocupado"));
      quadradosOcupados.forEach((quadrado) => {
        const imagem = quadrado.querySelector("img");
        quadrado.removeChild(imagem);
        const circle = document.createElement("div");
        circle.classList.add("circle");
        quadrado.appendChild(circle);
      });
      const quadradosComMinas = Array.from(document.querySelectorAll(".quadrado-mina"));
      quadradosComMinas.forEach((quadrado) => {
        quadrado.classList.remove("quadrado-mina");
      });
      const quadradosComTentativas = Array.from(document.querySelectorAll(".quadrado-tentativa"));
      quadradosComTentativas.forEach((quadrado) => {
        quadrado.classList.remove("quadrado-tentativa");
      });
    }

  </script>

</body>

</html>