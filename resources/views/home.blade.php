<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Estud10 Contar</title>

    <!-- Custom fonts for this template-->
    <link href="{{{ asset('vendor/fontawesome-free/css/all.min.css')}}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{{ asset('css/sb-admin-2.min.css') }}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <img class="img-logo"
                    src=" {{{ asset('img/logo-250px.png') }}}">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - Sing In -->
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}"class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Dashboard</span>
                        </a>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Iniciar sesión</span>
                        </a>
                    @endauth
                </div>
            @endif


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Página principal</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card - Metodología -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Metodología</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Entender al mercado y al consumidor</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card - Objetivo -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Objetivo</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Posicionamiento de marca</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card - Análisis -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Análisis
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Viabilidad del mercado</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card - Propósito -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Propósito</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Innovación y desarrollo del producto</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Enfoque 360º en la Investigación de mercados</h6>
                                </div>
                                <div class="card-body">
                                    Somos un grupo multidisciplinario dedicados a la investigación de mercado en Guadalajara, atendemos proyectos en todo México, Latam, 
                                    Estados Unidos y el mundo. Busca la generación de estrategias inteligentes y la cultura de los datos para la toma de decisiones que transformen 
                                    el mundo de los consumidores de nuestros clientes. 
                                    <br> <br>
                                    Queremos identificar las oportunidades de mercado que ayuden a fortalecer, renovar o crear tu marca y hacerla aún más atractiva. Podemos ayudarte
                                    a:
                                    <br> <br>

                                    <ul>
                                        <li>Comprender de manera más detallada y profunda las necesidades de los consumidores </li>
                                        <li>Pronosticar tendencias futuras que representen cambios y oportunidades. Tendencias de mercado con el uso de Inteligencia Artificial y 
                                            Machine learning. </li>
                                        <li>Tomar decisiones enfocadas en las oportunidades del mercado</li>
                                        <li>Brindamos un enfoque en la adopción y sistematización de la cultura de los datos e información para empresas en transición </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Inteligencia de mercados para el marketing modernos</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Realizamos investigación de mercados para los negocios basados en datos es decir, para la toma de decisiones estratégicas en entornos
                                        rápidamente cambiantes. Proveemos datos confiables para tomar las mejores decisiones y alcanzar tus objetivos de negocio.
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Estudio Contar 2021. All rights reserved. </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src=" {{{ asset('vendor/jquery/jquery.min.js')}}}" ></script>
    <script src=" {{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}} "></script>

    <!-- Core plugin JavaScript-->
    <script src=" {{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}} "></script>

    <!-- Custom scripts for all pages-->
    <script src=" {{{ asset('js/sb-admin-2.min.js')}}} "></script>

    <!-- Page level plugins -->
    <script src="{{{ asset('vendor/chart.js/Chart.min.js') }}}"></script>

    <!-- Page level custom scripts -->
    <script src=" {{{ asset('js/demo/chart-area-demo.js')}}} "></script>
    <script src=" {{{ asset('js/demo/chart-pie-demo.js')}}} "></script>

</body>

</html>