<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="pt-BR">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>

  <head>
    <title>Formulário Simples</title>
    <style>
      body {
        background-color: rgb(11, 11, 141);
        font-family: Arial, Helvetica, sans-serif;
        font-size: large;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 210vh;
      }


      form {
        display: grid;
        gap: 18px;
      }

      .form-container {
        width: 600px;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        text-align: left;
        height: 204vh;
      }

      @media (max-width: 768px) {

        body {
          height: 305vh;
        }

        .form-container {
          width: 600px;
          background-color: #fff;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          padding: 15px;
          text-align: left;
          height: 305vh;
          margin: 50px 0;
        }
      }


      .form-title {
        font-size: 18px;
        margin-bottom: 15px;
      }

      .form-question {
        font-size: 16px;
        margin-bottom: 10px;
      }

      .checkbox-label {
        display: block;
        margin-bottom: 8px;
      }

      .submit-button {
        display: block;
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 15px;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="text"] {
        width: 100%;
        padding: 5px;
        border-top: none;
        border-left: none;
        border-right: none;
        box-shadow: 0 0 0 0;
        border: 1 none;
        outline: 0;
      }

      input[type="number"] {
        width: 100%;
        padding: 5px;
        border-top: none;
        border-left: none;
        border-right: none;
        box-shadow: 0 0 0 0;
        border: 1 none;
        outline: 0;
      }
    </style>
  </head>

<body>

<?php
$hostname ="localhost";
$bancodedados = "central";
$usario = "root";
$senha = "";

$my = new mysqli("$hostname","$bancodedados","$usario","$senha");
if($mysqli->connect_errno){
  echo"Falhar ao conectar:(" . $mysqli->connect_errno . ")" .$mysqli->coonect_error;
}else
 echo "Conectado!";
?>

  <div class="form-container">

    <article>

      <h1><STROng>Formulário de Avaliação - Plano de Saúde</STROng></h1>

      <p>
        O Plano de Saúde e assistência médico-hospitalar e ambulatorial (ASSIM Saúde) tem como responsabilidade prestar serviços que abrangem exames complementares, terapias, diagnósticos, internações clínico-cirúrgicas, obstétricas e em terapia intensiva, tanto em situações eletivas quanto emergenciais, em hospitais e clínicas, com acomodações coletivas comportando até três leitos hospitalares, sem restrição de faixa etária, para TODOS os colaboradores desta CENTRAL e seus dependentes.
      </p>

      <p>
        Portanto, é solicitado que todos os colaboradores beneficiários preencham este formulário para avaliar sua satisfação com o plano, além de registrar elogios ou quaisquer falhas identificadas.
      </p>
    </article>

    <img src="./fdfdf.png" alt=""><br><br><br>

    <form action="/" method="post" id="meuFormulario">
      <div class="form-title">Formulário de Matrícula</div>
      <div class="form-topic">
        <label for="matricula">Matrícula:</label>
        <input type="number" id="matricula" name="matricula" required>
      </div>

      <div class="form-topic">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
      </div>


      <div>
        <div class="form-question" required>Você está satisfeito com a maneira que os serviços do plano de saúde são descritos e comunicados?</div>
        <label class="checkbox-label"><input type="radio" id="perguntaServico1" name="pergunta1" value="satisfeito" required>Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaServico2" name="pergunta1" value="muitosatisfeito" required> Muito Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaServico3" name="pergunta1" value="insatisfeito" required> Insatisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaServico4" name="pergunta1" value="muitoinsatisfeito" required>Muito Insatisfeito</label>
      </div>
      <div class="bk">
        <div class="form-question">Qual o seu grau de satisfação com o canal de atendimento da ASSIM?</div>
        <label class="checkbox-label"><input type="radio" id="perguntaAtendimento1" name="pergunta2" value="satisfeito" required>Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaAtendimento2" name="pergunta2" value="muitosatisfeito" required> Muito Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaAtendimento3" name="pergunta2" value="insatisfeito" required> Insatisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaAtendimento4" name="pergunta2" value="muitoinsatisfeito" required>Muito Insatisfeito</label>
      </div>

      <div class="bk">
        <div class="form-question">Você tem ou teve dificuldade em realizar uma marcação de consulta, exame ou internação?</div>
        <label class="checkbox-label"><input type="radio" id="perguntaConsulta1" name="pergunta3" value="sim" required>SIM</label>
        <label class="checkbox-label"><input type="radio" id="perguntaConsulta2" name="pergunta3" value="nao" required>NÃO</label>
      </div>
      <div class="bk">
        <div class="form-question">Qual sua maior dificuldade na utilização dos serviços do plano de saúde? </div>
        <label class="checkbox-label"><input type="radio" id="perguntaUtilizacao" name="pergunta4" value="sim" required>SIM</label>
        <label class="checkbox-label"><input type="radio" id="perguntaUtilizacao" name="pergunta4" value="nao" required>NÃO</label>
      </div>
      <div class="bk">
        <div class="form-question">Qual o seu grau de satisfação com os serviços prestados?</div>
        <label class="checkbox-label"><input type="radio" id="perguntaSatisfacao1" name="pergunta5" value="satisfeito" required>Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaSatisfacao2" name="pergunta5" value="muitosatisfeito" required> Muito Satisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaSatisfacao3" name="pergunta5" value="insatisfeito" required> Insatisfeito</label>
        <label class="checkbox-label"><input type="radio" id="perguntaSatisfacao4" name="pergunta5" value="muitoinsatisfeito" required>Muito Insatisfeito</label>
      </div>

      <div class="bk">
        <div class="form-question">Você já realizou alguma reclamação direto ao Plano de Saúde que não foi resolvida?</div>
        <label class="checkbox-label"><input type="radio" id="perguntaPlano1" name="pergunta6" value="sim" required>SIM</label>
        <label class="checkbox-label"><input type="radio" id="perguntaPlano2" name="pergunta6" value="nao" required>NÃO</label>
      </div>
      <div class="bk">
        <label for="pergunta2">Você possui algum ELOGIO ou QUEIXA relacionado aos serviços do Plano de Saúde?</label>
        <input type="text" id="perguntaQueixa1" name="resposta7" required>
      </div>
      <div class="bk">
        <label for="pergunta2">Algum dos seus Dependentes no plano possuem ELOGIO ou QUEIXA relacionado aos serviços do Plano de Saúde? Se SIM especificar o nome do Dependente.</label>
        <input type="text" id="perguntaQueixa2" name="resposta7" required>
      </div>
      <div class="bk">
        <label for="pergunta2">Você possui alguma sugestão de melhoria ao Plano de Saúde</label>
        <input type="text" id="perguntaQueixa3" name="resposta7" required>
      </div>
      <div class="bk">
        <div class="form-question"> Em uma escala de “0” a “10”, qual o seu grau de satisfação com o Plano de Saúde. “0” significa que se sente totalmente insatisfeito: 10 significa que se sente totalmente satisfeito. No meio da escala está o 5 que significa neutro (nem satisfeito nem insatisfeito).</div>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau1" name="pergunta8" value="opcao1" required>1</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau2" name="pergunta8" value="opcao2" required>2</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau3" name="pergunta8" value="opcao3" required>3</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau4" name="pergunta8" value="opcao4" required>4</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau5" name="pergunta8" value="opcao5" required>5 (NEUTRO)</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau6" name="pergunta8" value="opcao6" required>6</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau7" name="pergunta8" value="opcao7" required>7</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau8" name="pergunta8" value="opcao8" required>8</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau9" name="pergunta8" value="opcao9" required>9</label>
        <label class="checkbox-label"><input type="radio" id="perguntaGrau10" name="pergunta8" value="opcao10" required>10</label>
        <script>
          document.getElementById("meuFormulario").addEventListener("submit", function (event) {
            var requiredCheckboxes = document.querySelectorAll('input[type="radio"][required]');
            var checkedRequired = false;

            for (var i = 0; i < requiredCheckboxes.length; i++) {
              if (requiredCheckboxes[i].checked) {
                checkedRequired = true;
                break;
              }
            }

            if (!checkedRequired) {
              event.preventDefault();
              alert("Selecione pelo menos uma opção obrigatória.");
            }
          });
        </script>
      </div>
      <button class="submit-button" type="submit">Enviar</button>
    </form>
  </div>
</body>

</html>