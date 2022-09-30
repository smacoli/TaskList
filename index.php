<?php
    require __DIR__.'/vendor/autoload.php'; //Chama as classes do projeto / Call all the project classes

    use \App\Entity\Tarefa;

    $tarefas = Tarefa::getTarefas();
    //echo "<pre>"; print_r($tarefas); echo "</pre>"; exit;

    include __DIR__.'/includes/header.php'; 
    include __DIR__.'/includes/listagem.php';
    include __DIR__.'/includes/footer.php';

