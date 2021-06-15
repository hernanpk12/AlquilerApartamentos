<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid">
                    <a  class="navbar-brand logo_h"href="index.html"><img src="img/log.jpg"width="25%" height="25%" alt=""> </a>
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav nav-tabs">
                            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url().'/';?>" >Inicio</a></li> 
                            <li class="nav-item"><a class="nav-link  " href="<?php echo base_url().'/addapartment/login';?>">Agregar Apartamento</a></li> 
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'/apartmentowner';?>">Apartamento por propietario</a>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'/perfil';?>">Perfil</a>
                            
                        </ul>
                    </div> 
                    <div class="row">
                        <div class="col col-md-offset-2">
                            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                <div class="card-body"></div>
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url().'/login';?>" > Inicio Sesion </a></li> 
                                        <li class="nav-item"><a class="nav-link  " href="<?php echo base_url().'/register';?>">Registro</a></li> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>  
