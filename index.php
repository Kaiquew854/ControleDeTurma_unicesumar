<html>

<head>
  <meta charset="utf-8" />
  <title>atividade 1</title>

</head>

<body>


  <?php
  
  require_once('model/Dados.php');
  require_once('model/Aluno.php');
  require_once('model/Turma.php');


  $j = 0;
  $grupoAlunos = ("");
  $qtAlunosCadastrados = sizeof($dados);
  $cont = 5;


 
  for ($i = 1; $i <= $qtAlunosCadastrados; $i++) {
    $arrObjAlunos['Aluno' . $i] = new Aluno();
  }

 
  extract($arrObjAlunos, EXTR_SKIP);


  foreach ($dados as $dado) { 
    $j++;
    foreach ($dado as $key => $value) {
        $arrObjAlunos['Aluno' . $j]->__set($key, $value);
    }
  }


  ?>
  <div>
    <?php


    ?>
    <div >
      <p >
        <?php
            $turma = new Turma('A-150');


            for ($k = 1; $k <= $qtAlunosCadastrados; $k++) {

                if ($k <= 5) {
                    $turma->addAlunoTurma($arrObjAlunos['Aluno' . $k]);
                    print 'O aluno <b>' . $arrObjAlunos['Aluno' . $k]->nome . '</b> foi inserido na turma.<br>';
                } else {
                    print 'Erro - Turma Lotada';
                }
            }

        ?>
      </p>
    </div>

    <div>

      <p >
        Controle de notas de Turma
      </p>

    </div>


    <div>
      <p>

        <?php
            print 'Notas dos Alunos da Turma ' . $turma->nomeTurma;
        ?>

      </p>

    </div>

    <div>
      <p>
        <?php
          print 'Média da Turma <br> <b>' . $turma->getMediaTurma().'</b>';
        ?>
      </p>

    </div>

    <div class="pt-2">
      <table>
        <thead>
          <tr>
            <th>ALUNO</th>
            <th>NOTA 1</th>
            <th>NOTA 2</th>
            <th>NOTA 3</th>
            <th>NOTA 4</th>
            <th>MÉDIA</th>
          </tr>
        </thead>

        <?php
          for ($i=0; $i <5 ; $i++) { 
            print '<tr>'.
                  '<td>'.$turma->alunosTurma[$i]->nome.'</td>'.
                  '<td>'.$turma->alunosTurma[$i]->nota1.'</td>'.
                  '<td>'.$turma->alunosTurma[$i]->nota2.'</td>'.
                  '<td>'.$turma->alunosTurma[$i]->nota3.'</td>'.
                  '<td>'.$turma->alunosTurma[$i]->nota4.'</td>'.
                  '<td>'.$turma->alunosTurma[$i]->getMedia().'</td>'.
                  '</tr>';
          }
        ?>

      </table>

    </div>

  </div>
  <footer>


  </footer>




</body>

</html>