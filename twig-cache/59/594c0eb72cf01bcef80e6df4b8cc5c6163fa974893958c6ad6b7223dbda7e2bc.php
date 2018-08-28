<?php

/* _global/main.html */
class __TwigTemplate_cdfa0046c07e46b355c68f62323489d87686b79b4c90375521e377e5328589d4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <title>Biblioteka</title>


        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/main.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/bootstrap.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/bootstrap.js\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">

    </head>

    <body>
       
            <nav class=\"navbar navbar-dark\" id=\"navbar-main\">
                <div class=\"container-fluid\">

                      

                    <ul>
                       
                        <a class=\"navbar-brand\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">Biblioteka</a>  
                        
                        ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["korisnici"] ?? null), "korisnicko_ime", array()) != "")) {
            // line 25
            echo "                        <a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "dodaj\">Dodaj Knjigu</a>                  
                        <a class=\"navbar-brand\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "pogledaj\">Pogledaj sve svoje knjige</a>                  

                    
             
                    ";
        } else {
            // line 31
            echo "
                    ";
        }
        // line 33
        echo "                </ul>


                <ul class=\"float-right\">

                    ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["korisnici"] ?? null), "korisnicko_ime", array()) != "")) {
            // line 39
            echo "                       
                                       
                        <a class=\"navbar-brand\" style=\"margin-left: 180%;\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auth/logout\">Izloguj se!</a> 
                    ";
        } else {
            // line 43
            echo "                    <div>
                    <a class=\"navbar-brand\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auth/log\">Logovanje</a>    
                    <a class=\"navbar-brand\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auth/reg\">Registracija</a> 
                        </div>
                    ";
        }
        // line 48
        echo "
                    
                </ul>

                ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["korisnici"] ?? null), "korisnicko_ime", array()) != "")) {
            // line 53
            echo "
                <form class=\"form-inline\" method=\"post\" action=\"";
            // line 54
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "knjige/pretraga\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" name=\"pretraga\" minlength=\"2\" placeholder=\"Pretraga\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-light\" type=\"submit\">Pretrazi</button>
                  </form>

                  ";
        } else {
            // line 60
            echo "
                  ";
        }
        // line 62
        echo "
                </div>
                  
               
             </nav>



        ";
        // line 70
        $this->displayBlock('main', $context, $blocks);
        // line 75
        echo "
        <footer>

              &copy; 2018 - Biblioteka
              
        </footer>
 
    </body>
</html>";
    }

    // line 70
    public function block_main($context, array $blocks = array())
    {
        // line 71
        echo "
        <main>
       </main>
        ";
    }

    public function getTemplateName()
    {
        return "_global/main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 71,  159 => 70,  147 => 75,  145 => 70,  135 => 62,  131 => 60,  122 => 54,  119 => 53,  117 => 52,  111 => 48,  105 => 45,  101 => 44,  98 => 43,  93 => 41,  89 => 39,  87 => 38,  80 => 33,  76 => 31,  68 => 26,  63 => 25,  61 => 24,  56 => 22,  39 => 8,  35 => 7,  31 => 6,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/main.html", "/var/www/html/Home-Library/Views/_global/main.html");
    }
}
