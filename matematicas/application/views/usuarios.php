 
 <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Matematicas v1</title>


    <script type="text/javascrip" src="<?= base_url()?>plantilla/MathJax/MathJax.js"> </script>
    <script type= "text/javascript" src= "http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML" > 
    </script>
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
          "HTML-CSS": { linebreaks: { automatic: true } },
          SVG: { linebreaks: { automatic: true } },
           MathML: {
             extensions: ["mml3.js"]
          }
        });
        MathJax.Hub.Config({
            jax: ["input/TeX","output/HTML-CSS"],
            displayAlign: "left"
        });
     
        MathJax.Hub.Config({
          "HTML-CSS": {
            imageFont: null
          }
        });
    </script>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- jQuery 2.1.4 -->
    <script src="<?= base_url()?>plantilla/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>


     
    <!--<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>-->
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= base_url()?>plantilla/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url()?>plantilla/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url() ?>plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>plantilla/bootstrap/css/css/estilos.css">
    <link href="<?= base_url() ?>plantilla/bootstrap/css/css/login-box.css" rel="stylesheet" type="text/css" />


    <!-- WIRIS EDITOR-->
    <script src="http://www.wiris.net/demo/editor/editor"></script>
    <script>
        var editor;
        window.onload = function (){
          editor = com.wiris.jsEditor.JsEditor.newInstance({'language': 'en', 'toolbar': '<toolbar ref="quizzes"/>'});
          editor.insertInto(document.getElementById('editor'));
        }
    </script>
    <!-- Graficos-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>plantilla/JSXGraph/jsxgraph.css">
    <script type="text/javascript" src="<?= base_url() ?>plantilla/JSXGraph/jsxgraphcore.js"></script>
    <link rel="stylesheet" type="text/css" href="http://jsxgraph.uni-bayreuth.de/distrib/jsxgraph.css" >
    <script type="text/javascript" src="http://jsxgraph.uni-bayreuth.de/distrib/jsxgraphcore.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>

 <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>M</b>AT </span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">  <marquee onclick="this.stop()" ondblclick="this.start()" scrollamount="2" scrolldelay="50" behavior="alternate">Matemáticas</marquee></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation </span>
          </a>
          

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                    Materia <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">Elige un Matería</li>
                  <li><a href="#" id = 'aritmetica'  ><i class="fa fa-circle-o text-aqua"></i>Aritmética</a></li>
                  <li class="divider"></li>
                  <li><a href="#" id= 'algebra' ><i class="fa fa-circle-o text-aqua"></i>Algebra</a></li>  
                </ul>
              </li>-->
              <!-- Messages: style can be found in dropdown.less-->
             <!--
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                     <ul class="menu">
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              -->
              <li>
                <a href="#" id = 'salir'><i>| Cerrar Sesión |</i></a>
              </li>
              <li>
                <a href="#" id = 'nombreUsuario'><i>  </i></a>
              </li>
              
              <li>
                <a href="#" data-toggle="control-sidebar"><i>| Editor |</i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
    
     <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar" >
        <!-- sidebar: style can be found in sidebar.less--> 
      <section class="sidebar" id='temario' >            
       <!--  <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
          </div>
        </form> 
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          
          <li class="treeview">
            <a href="#">
              <br/><label class="header"><i class="fa fa-book"  > A R I T M E T I C A </i></label>  <br/>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            
            <ul class="treeview-menu">

              <li><a href="#"><span>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-pie-chart"></i>
                      <span>Propiedades de la Igualdad</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#" id = "carga"> <i class="fa fa-circle-o text-aqua"></i> Ejercicios</a></li>
                    <li><a href="#" id= "ejerciciosPropiedades2"><i class="fa fa-circle-o text-yellow"></i> Ejemplos que justifican<br/> las propiedades</a></li> 
                  </ul>
                </li>
              </span></a></li>
                

              <li><a href="#"><span>
                <li> 
                  <a href="#" id="relaciones">
                    <i class="fa fa-chevron-right"></i> <span>Relaciones de Igualdad<br/> y desigualdad</span>
                  </a>
                </li>
              </span></a></li>

              <li><a href="#"><span>
                <li> 
                  <a href="#" id="sumas">
                    <i class="fa fa-plus"></i> <span>Suma</span>
                  </a>
                </li>
              </span></a></li>

              <li><a href="#"><span>
                <li>
                  <a href="#" id="restas">
                    <i class="fa fa-minus"></i> <span>Resta</span>
                  </a>
                </li>
              </span></a></li>

              <li><a href="#"><span>
                <li>
                  <a href="#" id="mult">
                    <i class="fa fa-remove"></i> <span>Multiplicación</span>
                  </a>
                </li>
              </span></a></li>

              <li><a href="#"><span>
                <li>
                  <a href="#"id="div">
                    <i class="fa fa-pie-chart"></i> <span>División</span>
                  </a>
                </li>
              </span></a></li>

              <li><a href="#"><span> 
                <li>
                  <a href="#" id="mcm">
                    <i class="fa fa-chevron-up"></i> <span>Mínimo Común Múltiplo</span>
                  </a>
                </li>
              </span></a></li>

              <li><a href="#"><span> 
                <li>
                  <a href="#" id="mcd1">
                    <i class="fa fa-chevron-up"></i> <span>Máximo Común Divisor</span>
                  </a>
                </li>
              </span></a></li>
                
              <li><a href="#"><span> 
                <li>
                  <a href="#" id="nprimo">
                    <i class="fa fa-chevron-up"></i> <span>Números Primos</span>
                  </a>
                </li>
              </span></a></li>
                
              <li><a href="#"><span>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Fracciones</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>

                  <ul class="treeview-menu">
                    <li><a href="#" id = "sumaFrac"> <i class="fa fa-circle-o text-aqua"></i>Suma y Resta</a></li>
                    <li><a href="#" id = "multFrac"> <i class="fa fa-circle-o text-yellow"></i>Multiplicación</a></li>
                    <li><a href="#" id= "divFrac"><i class="fa fa-circle-o text-aqua"></i>División</a></li>
                    <li><a href="#" id= "simplifFrac"><i class="fa fa-circle-o text-yellow"></i>Simplificación</a></li> 
                    <li><a href="#" id= "conversFrac"><i class="fa fa-circle-o text-aqua"></i>Conversiones</a></li> 
                    <li><a href="#" id= "ejerciciosFrac"><i class="fa fa-circle-o text-yellow"></i>Varios Ejemplos</a></li> 
                  </ul>
                </li>
              </span></a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
               <span class="header"><i class="fa fa-book"  > A L G E B R A </i></span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            
            <ul class="treeview-menu">
              

              <li><a href="#"><span>
              <li>
                <a href="#" id="multMsxMs">
                  <i class="fa fa-pencil"></i> <label> Multiplicación</label>  
                </a>
              </li>

             <li><a href="#"><span>
              <li>
                <a href="#" id="sumaAlgebra">
                  <i class="fa fa-pencil"></i> <label>  Suma y Resta</label>  
                </a>
              </li>
             </span></a></li>

             <li><a href="#"><span>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-pie-chart"></i>
                  <span>División algebraica</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#" id = "divAlgebra"> <i class="fa fa-circle-o text-aqua"></i>Monomio entre monomio</a> </li>
                  <li><a href="#" id= "divAlgebra2"><i class="fa fa-circle-o text-yellow"></i> Polinomios entre <br/>monomios</a> </li>
                </ul>
              </li>
            </span></a></li>

            <li><a href="#"><span>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-pie-chart"></i>
                  <label>  Productos y Cocientes<br/> Notables</label>  
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#" id = "pNotableCuadrado"> <i class="fa fa-circle-o text-aqua"></i><label>  Cuadrado de la Suma <br/>y Diferencia de Dos Cantidades </label>  </a> </li>
                  <!--<li><a href="#" id= "pNotableProductoSumYRes"><i class="fa fa-circle-o text-yellow"></i><label>  Producto de la Suma Por la<br/>Diferencia de dos Cantidades </label>  </a> </li>-->
                </ul>
              </li>
            </span></a></li>

            <li><a href="#"><span>
              <li class="treeview">
                  <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <label>  Ecuaciones Simultaneas <br/>de Primer Grado <br/>con 2 incógnitas</label>  
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#" id = "metIgual"> <i class="fa fa-circle-o text-aqua"></i><label>  Método de Igualación</label>  </a></li>
                    <li><a href="#" id= "metSust"><i class="fa fa-circle-o text-yellow"></i><label>  Método de Sustitución</label>  </a></li>
                    <li><a href="#" id= "metReduc"><i class="fa fa-circle-o text-aqua"></i><label>  Método de Reducción</label>  </a></li> 
                    <li><a href="#" id= "metDeter"><i class="fa fa-circle-o text-yellow"></i><label>  Por Determinantes</label>  </a></li>
                  </ul>
              </li>
            </span></a></li>
          
            <li><a href="#"><span>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-pie-chart"></i>
                  <label>  Ecuaciones Simultaneas <br/>de Primer Grado <br/>con 3 incógnitas</label>  
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">  
                  <li><a href="#" id= "metUno"><i class="fa fa-circle-o text-aqua"></i><label>  Por Suma y Resta </label>  </a></li>
                  <li><a href="#" id= "metDeterTresEcu"><i class="fa fa-circle-o text-yellow"></i><label>  Por Determinantes </label>  </a></li>
                </ul>
              </li>
            </span></a></li>
          
            <li><a href="#"><span>       
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-pie-chart"></i>
                  <label>  Ecuaciones de Segundo <br/>con una Incógnita</label>  
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#" id = "formGeneral"> <i class="fa fa-circle-o text-aqua"></i><label>  Aplicando Fórmula General</label>  </a></li>
                  <li><a href="#" id= "represGrafica"><i class="fa fa-circle-o text-aqua"></i><label>  Representación y Solución<br/> Gráfica</label>  </a></li> 
                  </ul>
              </li>  
            </span></a></li>

            <li><a href="#"><span>
              <li>
                <a href="#" id="funciones">
                 <!-- <i class="fa fa-pencil"></i> <label>  Funciones</label>  -->
                </a>
              </li>
            </span></a></li>

          </ul>
        </li>        
      </ul>
      </section>
        <!-- /.sidebar -->
    </aside>

      <!-- Conten
      t Wrapper. Contains page content -->
    <div class="content-wrapper" id="cuerpo">
         <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12" id="dos">   </div>
        </div><!-- /.row -->
          <!-- Main row -->
        <div class="row">
            <!-- Left col -->
          <div class="col-md-12" id="tres" >  </div>
        </div>
        <div class="row">
            <!-- Left col -->
          <div  id="cuatro" class='col-sm-10 col-md-offset-1'> </div>
        </div>
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy;</strong> Universidad Autónoma Benito Júarez de oaxaca-Instituto Tecnológico de Oaxaca.
        <img src = "<?= base_url() ?>plantilla/dist/img/logo_uabjo.png"  width='3%'/>
        <img src = "<?= base_url() ?>plantilla/dist/img/logo_ito.png"  width='3%'/>
      </footer>

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark" id="editor">    </aside><!-- /.control-sidebar -->
  </div><!-- ./wrapper -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.5 -->
    <script src="<?= base_url() ?>plantilla/bootstrap/js/bootstrap.min.js"> </script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?= base_url() ?>plantilla/plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ?>plantilla/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?= base_url() ?>plantilla/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url() ?>plantilla/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url() ?>plantilla/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?= base_url() ?>plantilla/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?= base_url() ?>plantilla/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= base_url() ?>plantilla/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?= base_url() ?>plantilla/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>plantilla/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>plantilla/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
     <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>plantilla/dist/js/demo.js"></script>
    <script src="<?= base_url()?>plantilla/plugins/datatables/dataTables.min.js"></script>
     <script src="<?= base_url()?>plantilla/plugins/datatables/jquery.dataTables.min.css"></script>
      <script src=" https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"></script>
    
 
    
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/funcion1.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/funcion2.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/fracciones.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/ejemplosfraccione.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/Algebra1.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/Algebra2.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/mcm.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/mcd.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/sumaAlgebra.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/productosNotables.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/factorizacion1.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/ecuacionesLinealesDosIncog.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/ecuacionesDeSegundoGrado.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/ecuacionesLinealesTresIncog.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/funcionesUsuarios.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/usuariosSalir.js"></script>

    <script  src="<?= base_url() ?>plantilla/jsUsuarios/ejemplosPropiedade2.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/relacionesIgualdad.js"></script>
    <script  src="<?= base_url() ?>plantilla/jsUsuarios/divisionAlgebra.js"></script>

  </body>
</html>