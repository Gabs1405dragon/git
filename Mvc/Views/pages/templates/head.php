<?php 

if(isset($_GET['excluir'])){
    session_unset();
    session_destroy();
    header('location: login');
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gabriel.H assis de souza" >
    <title><?php echo $arr['titulo']; ?></title>
    <link rel="stylesheet" href="<?php echo PATH_FULL ?>/estilos/painel.css" >
    <link rel="stylesheet" href="<?php echo PATH_FULL ?>/estilos/style.css" >
    <link rel="stylesheet" href="<?php echo PATH_FULL ?>/estilos/all.min.css" >
    <link rel="stylesheet" href="<?php echo PATH_FULL ?>/estilos/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/zebra_datepicker@latest/dist/css/default/zebra_datepicker.min.css">
   
</head>
<body>