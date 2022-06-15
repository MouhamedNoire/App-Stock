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

/* login/index.html.twig */
class __TwigTemplate_290f5f9b6570fb2a373d436f2fc0ef35 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Login</title>

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

<body class=\"bg-gradient-primary\">

    <div class=\"container\">

        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Welcome</h1>
                                    </div>
                                    <form class=\"user\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control form-control-user\"
                                                id=\"exampleInputEmail\" aria-describedby=\"emailHelp\"
                                                placeholder=\"Enter Email Address...\">
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\"
                                                id=\"exampleInputPassword\" placeholder=\"Password\">
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"custom-control custom-checkbox small\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                                                <label class=\"custom-control-label\" for=\"customCheck\">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href=";
        // line 61
        echo "base.html.twig";
        echo " class=\"btn btn-primary btn-user btn-block\">
                                            Se connecter
                                        </a>
                                        <hr>
                                        <a href=\"";
        // line 65
        echo "dashboard-admin/index.html";
        echo " class=\"btn btn-google btn-user btn-block\">
                                            <i class=\"fab fa-google fa-fw\"></i> Login with Google
                                        </a>
                                        <a href=\"";
        // line 68
        echo "dashboard-admin/index.html";
        echo " class=\"btn btn-facebook btn-user btn-block\">
                                            <i class=\"fab fa-facebook-f fa-fw\"></i> <span>Login with Facebook</span>
                                        </a>
                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 74
        echo "dashboard-admin/forgot-password.html";
        echo ">Forgot Password?</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=";
        // line 77
        echo "dashboard-admin/register.html";
        echo ">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=";
        // line 92
        echo "dashboard-admin/vendor/jquery/jquery.min.js";
        echo "></script>
    <script src=";
        // line 93
        echo "dashboard-admin/vendor/bootstrap/js/bootstrap.bundle.min.js";
        echo "></script>

    <!-- Core plugin JavaScript-->
    <script src=";
        // line 96
        echo "dashboard-admin/vendor/jquery-easing/jquery.easing.min.js";
        echo "></script>

    <!-- Custom scripts for all pages-->
    <script src=";
        // line 99
        echo "dashboard-admin/js/sb-admin-2.min.js";
        echo "></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 99,  167 => 96,  161 => 93,  157 => 92,  139 => 77,  133 => 74,  124 => 68,  118 => 65,  111 => 61,  68 => 21,  59 => 15,  43 => 1,);
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

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href={{(\"dashboard-admin/vendor/fontawesome-free/css/all.min.css\")}} rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href={{(\"dashboard-admin/css/sb-admin-2.min.css\")}} rel=\"stylesheet\">

</head>

<body class=\"bg-gradient-primary\">

    <div class=\"container\">

        <!-- Outer Row -->
        <div class=\"row justify-content-center\">

            <div class=\"col-xl-10 col-lg-12 col-md-9\">

                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
                            <div class=\"col-lg-6\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Welcome</h1>
                                    </div>
                                    <form class=\"user\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control form-control-user\"
                                                id=\"exampleInputEmail\" aria-describedby=\"emailHelp\"
                                                placeholder=\"Enter Email Address...\">
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\"
                                                id=\"exampleInputPassword\" placeholder=\"Password\">
                                        </div>
                                        <div class=\"form-group\">
                                            <div class=\"custom-control custom-checkbox small\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                                                <label class=\"custom-control-label\" for=\"customCheck\">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href={{(\"base.html.twig\")}} class=\"btn btn-primary btn-user btn-block\">
                                            Se connecter
                                        </a>
                                        <hr>
                                        <a href=\"{{(\"dashboard-admin/index.html\")}} class=\"btn btn-google btn-user btn-block\">
                                            <i class=\"fab fa-google fa-fw\"></i> Login with Google
                                        </a>
                                        <a href=\"{{(\"dashboard-admin/index.html\")}} class=\"btn btn-facebook btn-user btn-block\">
                                            <i class=\"fab fa-facebook-f fa-fw\"></i> <span>Login with Facebook</span>
                                        </a>
                                    </form>
                                    <hr>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"{{(\"dashboard-admin/forgot-password.html\")}}>Forgot Password?</a>
                                    </div>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href={{(\"dashboard-admin/register.html\")}}>Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src={{(\"dashboard-admin/vendor/jquery/jquery.min.js\")}}></script>
    <script src={{(\"dashboard-admin/vendor/bootstrap/js/bootstrap.bundle.min.js\")}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{(\"dashboard-admin/vendor/jquery-easing/jquery.easing.min.js\")}}></script>

    <!-- Custom scripts for all pages-->
    <script src={{(\"dashboard-admin/js/sb-admin-2.min.js\")}}></script>

</body>

</html>", "login/index.html.twig", "C:\\Users\\ordi\\App-Stock\\templates\\login\\index.html.twig");
    }
}
