<?php
    require __DIR__.'/vendor/autoload.php'; //Chama as classes do projeto

    define('TITLE', 'Cadastrar tarefa');

    use \App\Entity\Tarefa;
    $obTarefa = new Tarefa;

    // POST validation
    if(isset($_POST['nome_tarefa'], $_POST['custo_tarefa'], $_POST['data_tarefa'])){ 
        $obTarefa-> nome_tarefa = $_POST['nome_tarefa'];
        $obTarefa-> custo_tarefa = $_POST['custo_tarefa'];
        $obTarefa-> data_tarefa = $_POST['data_tarefa'];
        $obTarefa-> cadastrar();    

        header('location: index.php?status=success');
        exit;
    }

    include __DIR__.'/includes/header.php'; 
    include __DIR__.'/includes/formulario.php';
    include __DIR__.'/includes/footer.php';

