<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>FlyBox - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
<style>
        html,
    body {
        height: 100%;
    }
    
    #layoutAuthentication {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    #layoutAuthentication #layoutAuthentication_content {
        min-width: 0;
        flex-grow: 1;
    }
    #layoutAuthentication #layoutAuthentication_footer {
        min-width: 0;
    }
    
    #layoutSidenav {
        display: flex;
    }
    #layoutSidenav #layoutSidenav_nav {
        flex-basis: 225px;
        flex-shrink: 0;
        transition: transform 0.15s ease-in-out;
        z-index: 1038;
        transform: translateX(-225px);
    }
    #layoutSidenav #layoutSidenav_content {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-width: 0;
        flex-grow: 1;
        min-height: calc(100vh - 56px);
        margin-left: -225px;
    }
    
    .sb-sidenav-toggled #layoutSidenav #layoutSidenav_nav {
        transform: translateX(0);
    }
    .sb-sidenav-toggled #layoutSidenav #layoutSidenav_content:before {
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 1037;
        opacity: 0.5;
        transition: opacity 0.3s ease-in-out;
    }
    
    @media (min-width: 992px) {
        #layoutSidenav #layoutSidenav_nav {
            transform: translateX(0);
        }
        #layoutSidenav #layoutSidenav_content {
            margin-left: 0;
            transition: margin 0.15s ease-in-out;
        }
        .sb-sidenav-toggled #layoutSidenav #layoutSidenav_nav {
            transform: translateX(-225px);
        }
        .sb-sidenav-toggled #layoutSidenav #layoutSidenav_content {
            margin-left: -225px;
        }
        .sb-sidenav-toggled #layoutSidenav #layoutSidenav_content:before {
            display: none;
        }
    }
    .sb-nav-fixed .sb-topnav {
        z-index: 1039;
    }
    .sb-nav-fixed #layoutSidenav #layoutSidenav_nav {
        width: 225px;
        height: 100vh;
        z-index: 1038;
    }
    .sb-nav-fixed #layoutSidenav #layoutSidenav_nav .sb-sidenav {
        padding-top: 56px;
    }
    .sb-nav-fixed #layoutSidenav #layoutSidenav_nav .sb-sidenav .sb-sidenav-menu {
        overflow-y: auto;
    }
    .sb-nav-fixed #layoutSidenav #layoutSidenav_content {
        padding-left: 225px;
        top: 56px;
    }
    
    #layoutError {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    #layoutError #layoutError_content {
        min-width: 0;
        flex-grow: 1;
    }
    #layoutError #layoutError_footer {
        min-width: 0;
    }
    
    .img-error {
        max-width: 20rem;
    }
    
    .nav .nav-link .sb-nav-link-icon,
    .sb-sidenav-menu .nav-link .sb-nav-link-icon {
        margin-right: 0.5rem;
    }
    
    .sb-topnav {
        padding-left: 0;
        height: 56px;
        z-index: 1039;
    }
    .sb-topnav .navbar-brand {
        width: 225px;
        margin: 0;
    }
    .sb-topnav.navbar-dark #sidebarToggle {
        color: rgba(255, 255, 255, 0.5);
    }
    .sb-topnav.navbar-light #sidebarToggle {
        color: #212529;
    }
    
    .sb-sidenav {
        display: flex;
        flex-direction: column;
        height: 100%;
        flex-wrap: nowrap;
    }
    .sb-sidenav .sb-sidenav-menu {
        flex-grow: 1;
    }
    .sb-sidenav .sb-sidenav-menu .nav {
        flex-direction: column;
        flex-wrap: nowrap;
    }
    .sb-sidenav .sb-sidenav-menu .nav .sb-sidenav-menu-heading {
        padding: 1.75rem 1rem 0.75rem;
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
    }
    .sb-sidenav .sb-sidenav-menu .nav .nav-link {
        display: flex;
        align-items: center;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        position: relative;
    }
    .sb-sidenav .sb-sidenav-menu .nav .nav-link .sb-nav-link-icon {
        font-size: 0.9rem;
    }
    .sb-sidenav .sb-sidenav-menu .nav .nav-link .sb-sidenav-collapse-arrow {
        display: inline-block;
        margin-left: auto;
        transition: transform 0.15s ease;
    }
    .sb-sidenav
        .sb-sidenav-menu
        .nav
        .nav-link.collapsed
        .sb-sidenav-collapse-arrow {
        transform: rotate(-90deg);
    }
    .sb-sidenav .sb-sidenav-menu .nav .sb-sidenav-menu-nested {
        margin-left: 1.5rem;
        flex-direction: column;
    }
    .sb-sidenav .sb-sidenav-footer {
        padding: 0.75rem;
        flex-shrink: 0;
    }
    
    .sb-sidenav-dark {
        background-color: #212529;
        color: rgba(255, 255, 255, 0.5);
    }
    .sb-sidenav-dark .sb-sidenav-menu .sb-sidenav-menu-heading {
        color: rgba(255, 255, 255, 0.25);
    }
    .sb-sidenav-dark .sb-sidenav-menu .nav-link {
        color: rgba(255, 255, 255, 0.5);
    }
    .sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-nav-link-icon {
        color: rgba(255, 255, 255, 0.25);
    }
    .sb-sidenav-dark .sb-sidenav-menu .nav-link .sb-sidenav-collapse-arrow {
        color: rgba(255, 255, 255, 0.25);
    }
    .sb-sidenav-dark .sb-sidenav-menu .nav-link:hover {
        color: #fff;
    }
    .sb-sidenav-dark .sb-sidenav-menu .nav-link.active {
        color: #fff;
    }
    .sb-sidenav-dark .sb-sidenav-menu .nav-link.active .sb-nav-link-icon {
        color: #fff;
    }
    .sb-sidenav-dark .sb-sidenav-footer {
        background-color: #343a40;
    }
    
    .sb-sidenav-light {
        background-color: #f8f9fa;
        color: #212529;
    }
    .sb-sidenav-light .sb-sidenav-menu .sb-sidenav-menu-heading {
        color: #adb5bd;
    }
    .sb-sidenav-light .sb-sidenav-menu .nav-link {
        color: #212529;
    }
    .sb-sidenav-light .sb-sidenav-menu .nav-link .sb-nav-link-icon {
        color: #adb5bd;
    }
    .sb-sidenav-light .sb-sidenav-menu .nav-link .sb-sidenav-collapse-arrow {
        color: #adb5bd;
    }
    .sb-sidenav-light .sb-sidenav-menu .nav-link:hover {
        color: #0d6efd;
    }
    .sb-sidenav-light .sb-sidenav-menu .nav-link.active {
        color: #0d6efd;
    }
    .sb-sidenav-light .sb-sidenav-menu .nav-link.active .sb-nav-link-icon {
        color: #0d6efd;
    }
    .sb-sidenav-light .sb-sidenav-footer {
        background-color: #e9ecef;
    }
    
    .datatable-wrapper .datatable-container {
        font-size: 0.875rem;
    }
    
    .datatable-wrapper.no-header .datatable-container {
        border-top: none;
    }
    
    .datatable-wrapper.no-footer .datatable-container {
        border-bottom: none;
    }
    
    .datatable-top {
        padding: 0 0 1rem;
    }
    
    .datatable-bottom {
        padding: 0;
    }
    
    .datatable-top > nav:first-child,
    .datatable-top > div:first-child,
    .datatable-bottom > nav:first-child,
    .datatable-bottom > div:first-child {
        float: left;
    }
    
    .datatable-top > nav:last-child,
    .datatable-top > div:last-child,
    .datatable-bottom > nav:last-child,
    .datatable-bottom > div:last-child {
        float: right;
    }
    
    .datatable-selector {
        width: auto;
        display: inline-block;
        padding-left: 1.125rem;
        padding-right: 2.125rem;
        margin-right: 0.25rem;
    }
    
    .datatable-info {
        margin: 7px 0;
    }
    
    /* PAGER */
    .datatable-pagination a:hover {
        background-color: #e9ecef;
    }
    
    .datatable-pagination .active a,
    .datatable-pagination .active a:focus,
    .datatable-pagination .active a:hover {
        background-color: #0d6efd;
    }
    
    .datatable-pagination .ellipsis a,
    .datatable-pagination .disabled a,
    .datatable-pagination .disabled a:focus,
    .datatable-pagination .disabled a:hover {
        cursor: not-allowed;
    }
    
    .datatable-pagination .disabled a,
    .datatable-pagination .disabled a:focus,
    .datatable-pagination .disabled a:hover {
        cursor: not-allowed;
        opacity: 0.4;
    }
    
    .datatable-pagination .pager a {
        font-weight: bold;
    }
    
    /* TABLE */
    .datatable-table {
        border-collapse: collapse;
    }
    
    .datatable-table > tbody > tr > td,
    .datatable-table > tbody > tr > th,
    .datatable-table > tfoot > tr > td,
    .datatable-table > tfoot > tr > th,
    .datatable-table > thead > tr > td,
    .datatable-table > thead > tr > th {
        vertical-align: top;
        padding: 0.5rem 0.5rem;
    }
    
    .datatable-table > thead > tr > th {
        vertical-align: bottom;
        text-align: left;
        border-bottom: none;
    }
    
    .datatable-table > tfoot > tr > th {
        vertical-align: bottom;
        text-align: left;
    }
    
    .datatable-table th {
        vertical-align: bottom;
        text-align: left;
    }
    
    .datatable-table th a {
        text-decoration: none;
        color: inherit;
    }
    
    .datatable-sorter {
        display: inline-block;
        height: 100%;
        position: relative;
        width: 100%;
        padding-right: 1rem;
    }
    
    .datatable-sorter::before,
    .datatable-sorter::after {
        content: '';
        height: 0;
        width: 0;
        position: absolute;
        right: 4px;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        opacity: 0.2;
    }
    
    .datatable-sorter::before {
        bottom: 4px;
    }
    
    .datatable-sorter::after {
        top: 0px;
    }
    
    .asc .datatable-sorter::after,
    .desc .datatable-sorter::before {
        opacity: 0.6;
    }
    
    .datatables-empty {
        text-align: center;
    }
    
    .datatable-top::after,
    .datatable-bottom::after {
        clear: both;
        content: ' ';
        display: table;
    }
    
    .datatable-pagination li.datatable-hidden {
        visibility: visible;
    }
    
    .btn-datatable {
        height: 20px !important;
        width: 20px !important;
        font-size: 0.75rem;
        border-radius: 0.375rem !important;
    }

    .button {
  background-color: #4CAF50;
  border: none;
  color: white; 
  padding: 15px 32px; 
  text-align: center; 
  text-decoration: none; 
  display: inline-block; 
  font-size: 16px; 
  margin: 4px 2px; 
  cursor: pointer; 
  border-radius: 12px; 
}

.button:hover {
  background-color: #45a049; /* Cambio de color de fondo al pasar el ratón */
}

.button:active {
  background-color: #3e8e41; /* Cambio de color de fondo al hacer clic */
}

/* Estilo para el formulario de búsqueda */
.search-form {
  text-align: center; /* Alineación del contenido al centro */
  margin-top: 50px; /* Espacio superior */
}

/* Estilo para el título del formulario */
.hero__title {
  font-family: Arial, sans-serif; /* Fuente del título */
  font-size: 24px; /* Tamaño del título */
  color: #333; /* Color del texto */
  margin-bottom: 20px; /* Espacio inferior */
}

/* Estilo para el campo de entrada de texto */
.imput-color input[type="text"] {
  width: 300px; /* Ancho del campo de entrada */
  padding: 10px; /* Espaciado interno */
  border: 1px solid #ccc; /* Borde del campo */
  border-radius: 5px; /* Radio del borde */
  font-family: Arial, sans-serif; /* Fuente del texto */
  font-size: 16px; /* Tamaño del texto */
}

/* Estilo para el botón de búsqueda */
.button {
  background-color: #3E4FE6; /* Color de fondo */
  border: none; /* Sin borde */
  color: white; /* Color de texto */
  padding: 15px 32px; /* Espaciado interno */
  text-align: center; /* Alineación del texto */
  text-decoration: none; /* Sin subrayado */
  display: inline-block; /* Mostrar como elemento en línea */
  font-family: Arial, sans-serif; /* Fuente del texto */
  font-size: 16px; /* Tamaño del texto */
  margin-top: 20px; /* Espacio superior */
  cursor: pointer; /* Cambiar cursor al pasar el ratón */
  border-radius: 5px; 
  transition: 0.5s;/* Radio de borde */
}

/* Estilo para el botón de búsqueda al pasar el ratón */
.button:hover {
  background-color: #3D83E6; /* Cambio de color de fondo */
}

/* Estilo para el botón de búsqueda al hacer clic */
.button:active {
  background-color: #3E4FE6;
   /* Cambio de color de fondo */
}

body {
  margin: 0;
  font-family: Helvetica, sans-serif;
  background-color: #1481BA;
}

a {
  color: #000;
}

/* header */

.header {
  background-color: #fff;
  box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
  position: fixed;
  width: 100%;
  z-index: 3;
}

.header ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
  background-color: #fff;
}

.header li a {
  display: block;
  padding: 20px 20px;
  border-right: 1px solid #f4f4f4;
  text-decoration: none;
}

.header li a:hover,
.header .menu-btn:hover {
  background-color: #f4f4f4;
}

.header .logo {
  display: block;
  float: left;
  font-size: 2em;
  padding: 10px 20px;
  text-decoration: none;
}

/* menu */

.header .menu {
  clear: both;
  max-height: 0;
  transition: max-height .2s ease-out;
}

/* menu icon */

.header .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 28px 20px;
  position: relative;
  user-select: none;
}

.header .menu-icon .navicon {
  background: #333;
  display: block;
  height: 2px;
  position: relative;
  transition: background .2s ease-out;
  width: 18px;
}

.header .menu-icon .navicon:before,
.header .menu-icon .navicon:after {
  background: #333;
  content: '';
  display: block;
  height: 100%;
  position: absolute;
  transition: all .2s ease-out;
  width: 100%;
}

.header .menu-icon .navicon:before {
  top: 5px;
}

.header .menu-icon .navicon:after {
  top: -5px;
}

/* menu btn */

.header .menu-btn {
  display: none;
}

.header .menu-btn:checked ~ .menu {
  max-height: 240px;
}

.header .menu-btn:checked ~ .menu-icon .navicon {
  background: transparent;
}

.header .menu-btn:checked ~ .menu-icon .navicon:before {
  transform: rotate(-45deg);
}

.header .menu-btn:checked ~ .menu-icon .navicon:after {
  transform: rotate(45deg);
}

.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
  top: 0;
}

/* 48em = 768px */

@media (min-width: 48em) {
  .header li {
    float: left;
  }
  .header li a {
    padding: 20px 30px;
  }
  .header .menu {
    clear: none;
    float: right;
    max-height: none;
  }
  .header .menu-icon {
    display: none;
  }
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th,td {
    border: 1px solid #E8E8E8;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #BBC3EB;
}

tr:nth-child(even) {
    background-color: #E8E8E8;
}
/*	
	Table Responsive
	===================
	Author: https://github.com/pablorgarcia
 */

 @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #E8E5DA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #f7f7f7; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #E8E8E8;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #E8E8E8;
	   -moz-box-shadow: 0 2px 2px -2px #E8E8E8;
	        box-shadow: 0 2px 2px -2px #E8E8E8;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #f7f7f7;
}

.container td:first-child { color: #f7f7f7; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #E8E8E8;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}

.container {
    border-radius: 10px;
    padding: 20px;
    background-color: #677DB7;
}

.hero__title {
    text-align: center;
    color: #333;
}

.imput-color input[type="text"] {
    padding: 10px;
    width: 80%;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}

button.dropdown-item {
    padding: 20px 50px;
    background-color: #DD1C1A;
    color: #08090A;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button.dropdown-item:hover {
    background-color: #EE8775;
}

.container {
        max-width: 8000px;
        margin: 0 auto;
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 10px;
        background-color: #f9f9f9;
        display: flex;
        flex-direction: row;
    }

    .message-container {
        flex: 1;
        padding-right: 20px;
    }

    .message {
        padding: 20px;
        border: 2px solid #ccc;
        border-radius: 10px;
        background-color: #fff;
    }

    .message p {
        margin-bottom: 20px;
    }

    .image {
        flex: 1;
        text-align: center;
    }

    .image img {
        max-width: 70%;
        height: auto;
        border-radius: 8px;
    }

</style>
</head>

<body>
    <header class="header">
        <a href="{{route('rastreador')}}" class="logo">FLYBOX</a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
          <li><a href="{{ROUTE('dashboard')}}">INICIO</a></li>
          <li><a href="{{ROUTE('tarifaenvio')}}">CREAR ENVÍO</a></li>
          <li><a href="{{ROUTE('paqueteria')}}">PAQUETERIA</a></li>
          <li><a href="{{ROUTE('rastreador')}}">RASTREADOR</a></li>

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('perfil.edit') }}">Editar perfil</a></li><br><br>
                <li>
                    <form action="{{ route('logout') }}" method="GET"> <!-- Cambiado a GET -->
                        @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                    </form>  
                </li>
            </ul>
        </ul>
      </header>

            <div id="layoutSidenav_content">
                <main>
                        <center><br><br><h1 class="tit">BIENVENIDO A FLYBOX , {{ Auth::user()->name }}</h1></center>
                        <ol class="breadcrumb mb-4">
                            <div class="container-fluid container-xl d-flex align-items-center justify-content-center">
                                <!-- Hero Section -->
                                <div class="row">
                                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" id="hero">
                                        <div class="hero-text">
                                            <section>
                                                <div class="container">
                                                    <div class="message-container">
                                                        <div class="message">
                                                            <p>Bienvenido a FlyBox, tu compañero confiable en el mundo de la paquetería y la logística. En un mundo cada vez más conectado, reconocemos la importancia de ofrecer soluciones integrales y eficientes para el envío y rastreo de paquetes. En FlyBox, nos enorgullecemos de ofrecer una plataforma completa que no solo te permite enviar tus paquetes de manera rápida y segura, sino que también te brinda la tranquilidad de poder rastrearlos en tiempo real, desde el momento en que salen de tus manos hasta que llegan a su destino final.</p>
                                                
                                                            <p>En FlyBox, la seguridad y la confiabilidad son nuestras principales prioridades. Trabajamos arduamente para garantizar que tus paquetes estén protegidos en todo momento y que tu información personal se mantenga privada y segura. Nuestro equipo está constantemente monitoreando y mejorando nuestros sistemas para brindarte la mejor experiencia posible en cada envío.</p>
                                                
                                                            <p>Además, en FlyBox no solo nos preocupamos por ofrecerte un excelente servicio de envío de paquetes, sino que también nos esforzamos por ser una empresa socialmente responsable y comprometida con el medio ambiente. Implementamos prácticas sostenibles en nuestra operación y buscamos constantemente formas de reducir nuestro impacto en el planeta.</p>
                                                
                                                            <p>En resumen, en FlyBox no solo encontrarás una plataforma de paquetería, sino un socio confiable que está aquí para apoyarte en cada paso del camino. Únete a nosotros hoy y descubre por qué miles de personas confían en FlyBox para sus necesidades de envío y logística.</p>
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <img src="https://images.pexels.com/photos/22756320/pexels-photo-22756320.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="FlyBox Image">
                                                    </div>
                                                </div>
                                            </section>
                                            <section>
                                                <h1>¿CUAL ES NUESTRA MISIÓN?</h1>
                                                <div class="container">
                                                    <div class="message-container">
                                                        <div class="message">
                                                            <p>En FlyBox, nuestra principal prioridad es garantizar la seguridad y rapidez en el envío de productos para nuestros clientes y empresas asociadas. Nuestra misión consiste en asegurar que nuestros drones operen de manera funcional y efectiva, de modo que podamos brindar una experiencia satisfactoria a nuestros clientes y terceros.</p>
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <img src="https://images.pexels.com/photos/22751697/pexels-photo-22751697.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-flybox">
                                                    </div>
                                                </div>
                                            </section>
                                            <section>
                                                <h1>¿CUAL ES NUESTRA VISIÓN?</h1>
                                                <div class="container">
                                                    <div class="message-container">
                                                        <div class="message">
                                                            <p>En nuestra empresa de paquetería, tenemos la visión de liderar el mercado global ofreciendo servicios de la más alta calidad y confiabilidad. Para lograrlo, nos enfocamos en soluciones innovadoras que superen las expectativas de nuestros clientes y que al mismo tiempo, contribuyan de manera positiva al bienestar de la sociedad y al cuidado del medio ambiente. Estamos comprometidos con ofrecer un servicio excepcional y hacer nuestra parte para construir un mundo mejor y más sostenible.</p>
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <center><img src="https://media.istockphoto.com/id/1477603847/es/foto/levitando-cajas-de-cart%C3%B3n.jpg?s=612x612&w=0&k=20&c=jT-DR_AgYLtkplXCTYrvYh8YDRLB_VoKrdJ-niwZhyY=" class="img-flybox"></center>
                                                    </div>
                                                </div>
                                            </section>


                                            <section>
                                                <h1>HISTORIA DE FLYBOX</h1>
                                                <div class="container">
                                                    <div class="message-container">
                                                        <div class="message">
                                                            
                                                        <p>Hace unos años, en un mundo donde la congestión del tráfico y la necesidad de entregas rápidas eran constantes, un grupo de amigos con una pasión compartida por la tecnología y la innovación se reunieron para abordar este desafío. Imaginaron un futuro donde las entregas pudieran realizarse de manera rápida, eficiente y sin obstáculos.</p>

                                                        <p>La primera tarea fue resolver los desafíos técnicos. Desarrollaron drones autónomos capaces de transportar paquetes de forma segura y eficiente. Estos drones estaban equipados con tecnología avanzada de navegación y comunicación para garantizar entregas precisas y sin problemas.</p>
                                                
                                                        <p>Además, se embarcaron en una campaña de concienciación pública para educar a la gente sobre los beneficios de la entrega de drones y disipar cualquier temor o escepticismo. Organizaron demostraciones en vivo y ofrecieron pruebas gratuitas para mostrar la eficacia y la seguridad de su servicio.</p>
                                                        
                                                        <p>Hoy en día, la empresa de envío de paquetería mediante drones es una historia de éxito. Han expandido sus operaciones a nivel nacional, brindando un servicio rápido, eficiente y respetuoso con el medio ambiente.</p>

                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <center><img src="https://images.pexels.com/photos/22756320/pexels-photo-22756320.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-flybox"></center>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ol><br><br>
                </main>
            </div>
        
        


                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                        crossorigin="anonymous"></script>
                    <script src="js/scripts.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
                        crossorigin="anonymous"></script>
                    <script src="assets/demo/chart-area-demo.js"></script>
                    <script src="assets/demo/chart-bar-demo.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
                        crossorigin="anonymous"></script>
                    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>