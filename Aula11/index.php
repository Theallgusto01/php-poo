<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Visitante.php';
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
    require_once 'Professor.php';
    require_once 'Tecnico.php';
    $vis = new Visitante();
    $vis->setNome("Thiago");
    print_r($vis);
    $joao = new Aluno();
    $joao->setNome("João");
    $joao->setMatricula(111111);
    $joao->setIdade(16);
    $joao->setSexo("Masculino");
    $joao->setCurso("Informática");
    $joao->pagarMensalidade();
    print_r($joao);
    $b1 = new Bolsista();
    $b1->setMatricula(222222);
    $b1->setNome("Antonio");
    $b1->setBolsa("12.5");
    $b1->setCurso("Administração");
    $b1->setIdade("17");
    $b1->pagarMensalidade();
    print_r($b1);
    $prof = new Professor;
    $prof->setNome("Francisco");
    $prof->setEspecialidade("Matemática");
    $prof->receberAumento(500);
    print_r($prof);
    $tec = new Tecnico;
    $tec->setNome("Januario");
    $tec->praticar();
    print_r($tec);

    ?>
    </pre>
</body>
</html>