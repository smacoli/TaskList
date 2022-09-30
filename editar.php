<?php
    require __DIR__.'/vendor/autoload.php'; //Chama as classes do projeto

    define('TITLE', 'Editar tarefa');

    use \App\Entity\Tarefa;

    if (!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }

    $obTarefa = Tarefa::getTarefa($_GET['id']);
    //echo "<pre>"; print_r($obTarefa); echo "</pre>"; exit;
    // task validation
    if(!$obTarefa instanceof Tarefa){
        header('location: index.php?status=error');
        exit;
    }

    // POST validation
    if(isset($_POST['nome_tarefa'], $_POST['custo_tarefa'], $_POST['data_tarefa'])){
        //$obTarefa = new Tarefa;
        $obTarefa-> nome_tarefa = $_POST['nome_tarefa'];
        $obTarefa-> custo_tarefa = $_POST['custo_tarefa'];
        $obTarefa-> data_tarefa = $_POST['data_tarefa'];
        $obTarefa-> atualizar(); // Atualiza as novas informações no banco de dados / Updates the new information on the database

        //echo "<pre>"; print_r($obTarefa); echo "</pre>"; exit;
        header('location: index.php?status=success');
        exit;
    }

    include __DIR__.'/includes/header.php'; 
    include __DIR__.'/includes/formulario.php';
    include __DIR__.'/includes/footer.php';

