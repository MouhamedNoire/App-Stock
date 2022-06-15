<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_f6ee663477089317e9737b5b2da48641 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href=";
        // line 15
        echo "dashboard-admin/vendor/fontawesome-free/css/all.min.css";
        echo " rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=";
        // line 21
        echo "dashboard-admin/css/sb-admin-2.min.css";
        echo " rel=\"stylesheet\">

</head>

<body id=\"page-top\">

  
    <div id=\"wrapper\">
 
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">Admin</div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=";
        // line 45
        echo "dashboard-admin/index.html";
        echo ">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>
 
            <hr class=\"sidebar-divider\">

       
            <div class=\"sidebar-heading\">
                Interface
            </div>
 
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                    aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Categorie</span>
                </a>
                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Liste Categorie:</h6>                         
                        <a class=\"collapse-item\" href=";
        // line 66
        echo "dashboard-admin/buttons.html";
        echo ">Buttons</a>
                        <a class=\"collapse-item\" href=";
        // line 67
        echo "dashboard-admin/cards.html";
        echo ">Cards</a>
                    </div>
                </div>
            </li>
 
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                    aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                    <i class=\"fas fa-fw fa-wrench\"></i>
                    <span>Produits</span>
                </a>
                <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                    data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Custom Utilities:</h6>
                        <a class=\"collapse-item\" href=";
        // line 82
        echo "dashboard-admin/utilities-color.html";
        echo ">Colors</a>
                        <a class=\"collapse-item\" href=";
        // line 83
        echo "dashboard-admin/utilities-border.html";
        echo ">Borders</a>
                        <a class=\"collapse-item\" href=";
        // line 84
        echo "dashboard-admin/utilities-animation.html";
        echo ">Animations</a>
                        <a class=\"collapse-item\" href=";
        // line 85
        echo "dashboard-admin/utilities-other.html";
        echo ">Other</a>
                    </div>
                </div>
            </li>

             
            <hr class=\"sidebar-divider\">

            
            <div class=\"sidebar-heading\">
                Addons
            </div>

             
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
                    aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-folder\"></i>
                    <span>Stocks</span>
                </a>
                <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Login Screens:</h6>
                        <a class=\"collapse-item\" href=";
        // line 108
        echo "dashboard-admin/login.html";
        echo ">Login</a>
                        <a class=\"collapse-item\" href=";
        // line 109
        echo "dashboard-admin/register.html";
        echo ">Register</a>
                        <a class=\"collapse-item\" href=";
        // line 110
        echo "dashboard-admin/forgot-password.html";
        echo ">Forgot Password</a>
                        <div class=\"collapse-divider\"></div>
                        <h6 class=\"collapse-header\">Other Pages:</h6>
                        <a class=\"collapse-item\" href=";
        // line 113
        echo "dashboard-admin/404.html";
        echo ">404 Page</a>
                        <a class=\"collapse-item\" href=";
        // line 114
        echo "dashboard-admin/blank.html";
        echo ">Blank Page</a>
                    </div>
                </div>
            </li>

            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=";
        // line 121
        echo "dashboard-admin/charts.html";
        echo ">
                    <i class=\"fas fa-fw fa-chart-area\"></i>
                    <span>Entree</span></a>
            </li>

           
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=";
        // line 128
        echo "dashboard-admin/tables.html";
        echo ">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Sortie</span></a>
            </li>

         
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

             
            

        </ul>
       

        
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

          
            <div id=\"content\">

               
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                     
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                   
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                     
                    <ul class=\"navbar-nav ml-auto\">

                         
                        <li class=\"nav-item dropdown no-arrow d-sm-none\">
                            <a class=\"nav-link dropdown-toggle\" href=\"\" id=\"searchDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-search fa-fw\"></i>
                            </a>
                             
                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                aria-labelledby=\"searchDropdown\">
                                <form class=\"form-inline mr-auto w-100 navbar-search\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                            placeholder=\"Search for...\" aria-label=\"Search\"
                                            aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\">
                                                <i class=\"fas fa-search fa-sm\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

 
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"\" id=\"alertsDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-bell fa-fw\"></i>
                                 
                                <span class=\"badge badge-danger badge-counter\">3+</span>
                            </a>
                            
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"\">Show All Alerts</a>
                            </div>
                        </li>

                    
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"\" id=\"messagesDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-envelope fa-fw\"></i>
                               
                                <span class=\"badge badge-danger badge-counter\">7</span>
                            </a>
                             
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=";
        // line 269
        echo "dashboard-admin/img/undraw_profile_1.svg";
        echo "
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=";
        // line 281
        echo "dashboard-admin/img/undraw_profile_2.svg";
        echo "
                                            alt=\"...\">
                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=";
        // line 293
        echo "dashboard-admin/img/undraw_profile_3.svg";
        echo "
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=";
        // line 327
        echo "dashboard-admin/img/undraw_profile.svg";
        echo ">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profile
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Settings
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Activity Log
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                <h4>Categorie</h4></div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                <h4>Produit</h4></div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stock -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-info shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\"><h4>Stock</h4>
                                            </div>
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\">
                                                        <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                            style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                            aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Entree -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-warning shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                <h4>Entree</h4></div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                          
                        </div>
                        <!-- Sortie -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-warning shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                <h4>Sortie</h4></div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                           

    
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=";
        // line 486
        echo "dashboard-admin/login.html";
        echo ">Logout</a>
                </div>
            </div>
        </div>
    </div>

     
    <script src=";
        // line 493
        echo "dashboard-admin/vendor/jquery/jquery.min.js";
        echo "></script>
    <script src=";
        // line 494
        echo "dashboard-admin/vendor/bootstrap/js/bootstrap.bundle.min.js";
        echo "></script>

 
    <script src=";
        // line 497
        echo "dashboard-admin/vendor/jquery-easing/jquery.easing.min.js";
        echo "></script>
 
    <script src=";
        // line 499
        echo "dashboard-admin/js/sb-admin-2.min.js";
        echo "></script>

   
    <script src=";
        // line 502
        echo "dashboard-admin/vendor/chart.js/Chart.min.js";
        echo "></script>
 
    <script src=";
        // line 504
        echo "dashboard-admin/js/demo/chart-area-demo.js";
        echo "></script>
    <script src=";
        // line 505
        echo "dashboard-admin/js/demo/chart-pie-demo.js";
        echo "></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 505,  626 => 504,  621 => 502,  615 => 499,  610 => 497,  604 => 494,  600 => 493,  590 => 486,  428 => 327,  391 => 293,  376 => 281,  361 => 269,  217 => 128,  207 => 121,  197 => 114,  193 => 113,  187 => 110,  183 => 109,  179 => 108,  153 => 85,  149 => 84,  145 => 83,  141 => 82,  123 => 67,  119 => 66,  95 => 45,  68 => 21,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href={{ (\"dashboard-admin/vendor/fontawesome-free/css/all.min.css\")}} rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href={{ (\"dashboard-admin/css/sb-admin-2.min.css\")}} rel=\"stylesheet\">

</head>

<body id=\"page-top\">

  
    <div id=\"wrapper\">
 
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">Admin</div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href={{ (\"dashboard-admin/index.html\")}}>
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>
 
            <hr class=\"sidebar-divider\">

       
            <div class=\"sidebar-heading\">
                Interface
            </div>
 
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                    aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                    <i class=\"fas fa-fw fa-cog\"></i>
                    <span>Categorie</span>
                </a>
                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Liste Categorie:</h6>                         
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/buttons.html\")}}>Buttons</a>
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/cards.html\")}}>Cards</a>
                    </div>
                </div>
            </li>
 
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                    aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                    <i class=\"fas fa-fw fa-wrench\"></i>
                    <span>Produits</span>
                </a>
                <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                    data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Custom Utilities:</h6>
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/utilities-color.html\")}}>Colors</a>
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/utilities-border.html\")}}>Borders</a>
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/utilities-animation.html\")}}>Animations</a>
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/utilities-other.html\")}}>Other</a>
                    </div>
                </div>
            </li>

             
            <hr class=\"sidebar-divider\">

            
            <div class=\"sidebar-heading\">
                Addons
            </div>

             
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"\" data-toggle=\"collapse\" data-target=\"#collapsePages\"
                    aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-folder\"></i>
                    <span>Stocks</span>
                </a>
                <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Login Screens:</h6>
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/login.html\")}}>Login</a>
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/register.html\")}}>Register</a>
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/forgot-password.html\")}}>Forgot Password</a>
                        <div class=\"collapse-divider\"></div>
                        <h6 class=\"collapse-header\">Other Pages:</h6>
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/404.html\")}}>404 Page</a>
                        <a class=\"collapse-item\" href={{ (\"dashboard-admin/blank.html\")}}>Blank Page</a>
                    </div>
                </div>
            </li>

            
            <li class=\"nav-item\">
                <a class=\"nav-link\" href={{ (\"dashboard-admin/charts.html\")}}>
                    <i class=\"fas fa-fw fa-chart-area\"></i>
                    <span>Entree</span></a>
            </li>

           
            <li class=\"nav-item\">
                <a class=\"nav-link\" href={{ (\"dashboard-admin/tables.html\")}}>
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Sortie</span></a>
            </li>

         
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

             
            

        </ul>
       

        
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

          
            <div id=\"content\">

               
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                     
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                   
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                     
                    <ul class=\"navbar-nav ml-auto\">

                         
                        <li class=\"nav-item dropdown no-arrow d-sm-none\">
                            <a class=\"nav-link dropdown-toggle\" href=\"\" id=\"searchDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-search fa-fw\"></i>
                            </a>
                             
                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                aria-labelledby=\"searchDropdown\">
                                <form class=\"form-inline mr-auto w-100 navbar-search\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                            placeholder=\"Search for...\" aria-label=\"Search\"
                                            aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\">
                                                <i class=\"fas fa-search fa-sm\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

 
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"\" id=\"alertsDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-bell fa-fw\"></i>
                                 
                                <span class=\"badge badge-danger badge-counter\">3+</span>
                            </a>
                            
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"\">Show All Alerts</a>
                            </div>
                        </li>

                    
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"\" id=\"messagesDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-envelope fa-fw\"></i>
                               
                                <span class=\"badge badge-danger badge-counter\">7</span>
                            </a>
                             
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src={{(\"dashboard-admin/img/undraw_profile_1.svg\")}}
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src={{(\"dashboard-admin/img/undraw_profile_2.svg\")}}
                                            alt=\"...\">
                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src={{(\"dashboard-admin/img/undraw_profile_3.svg\")}}
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                                <img class=\"img-profile rounded-circle\"
                                    src={{(\"dashboard-admin/img/undraw_profile.svg\")}}>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profile
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Settings
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Activity Log
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                <h4>Categorie</h4></div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                <h4>Produit</h4></div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stock -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-info shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\"><h4>Stock</h4>
                                            </div>
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\">
                                                        <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                            style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                            aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Entree -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-warning shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                <h4>Entree</h4></div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                          
                        </div>
                        <!-- Sortie -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-warning shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                <h4>Sortie</h4></div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>


                           

    
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href={{ (\"dashboard-admin/login.html\")}}>Logout</a>
                </div>
            </div>
        </div>
    </div>

     
    <script src={{ (\"dashboard-admin/vendor/jquery/jquery.min.js\")}}></script>
    <script src={{ (\"dashboard-admin/vendor/bootstrap/js/bootstrap.bundle.min.js\")}}></script>

 
    <script src={{ (\"dashboard-admin/vendor/jquery-easing/jquery.easing.min.js\")}}></script>
 
    <script src={{ (\"dashboard-admin/js/sb-admin-2.min.js\")}}></script>

   
    <script src={{ (\"dashboard-admin/vendor/chart.js/Chart.min.js\")}}></script>
 
    <script src={{ (\"dashboard-admin/js/demo/chart-area-demo.js\")}}></script>
    <script src={{ (\"dashboard-admin/js/demo/chart-pie-demo.js\")}}></script>

</body>

</html>", "home/index.html.twig", "C:\\Users\\ordi\\App-Stock\\templates\\home\\index.html.twig");
    }
}
