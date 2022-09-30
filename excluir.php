<?php
    require __DIR__.'/vendor/autoload.php'; //Chama as classes do projeto


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
    if(isset($_POST['excluir'])){     
        $obTarefa-> excluir(); 
        header('location: index.php?status=success');
        exit;
    }

    include __DIR__.'/includes/header.php'; 
    include __DIR__.'/includes/confirmar-exclusao.php';
    include __DIR__.'/includes/footer.php';

