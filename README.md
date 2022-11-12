# ControleDeTurma_unicesumar

Você como futuro desenvolvedor Web, foi contratado por uma Software House para realizar estágio supervionado. O seu primeiro projeto a ser desenvolvido será um sistema acadêmico de pequeno porte, pois esta é uma versão de protótipo (MVP) que futuramente será ampliado. Como você é um aluno de Sistemas para Internet, e está no segundo ano, seu superior entregou apenas a modelagem UML, conforme o diagrama de Classe abaixo:

![image](https://user-images.githubusercontent.com/80990220/201475558-9413d1a5-cdca-470b-8b2d-dbe193b322ce.png)

Diante da modelagem acima, foi solicitado a você,  implementar um sistema de controle de turma, onde uma turma pode ter no máximo  5 alunos e cada aluno pode participar de muitas turmas.  Atente-se ao relacionamento das classes, podem ter campos ocultos.

Para isso, seu trabalho precisa ter no mínimo:
1. Diretório chamado Model.
2. Dento do Model a classe Aluno e a classe Turma.
4. Na raiz do seu projeto o arquivo index.php

Regras
1 - Na classe turma deve:
1.1. Criar um atributo que armazene o nome da turma pelo método construtor.
1.2. Deve haver um método que adicione no máximo 5 objetos de alunos. Sendo assim, está função deve devolver um valor booleano para sucesso e false para erro.

2 - Ao executar o arquivo index.php, deve ser executado os passos abaixo:
2.1. Instanciar 5 objetos para a classe aluno, e por meio de um método adicionar os valores para cada objeto, e depois inserir o objetos em um array de alunos.
2.2. Instanciar a classe Turma, e adicionar os objetos de alunos que estão no array alunos. Neste ponto deve-se validar se já foi cadastrado 5 alunos e imprimir o sucesso ou o erro ao inserir o aluno na turma.
2.3. Por fim, imprimir na tela: O nome da Turma, a média da Turma, e a lista de alunos com suas respectivas notas e médias.

Confira a imagem abaixo, como exemplo de resultado esperado em tela.

![image](https://user-images.githubusercontent.com/80990220/201475668-f403ac14-fc35-498f-b0ae-1f5284749cd1.png)
