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

    </head>

    <body>
       
            <nav class=\"navbar navbar-dark\" id=\"navbar-main\">
                <div class=\"container-fluid\">

                      

                    <ul>
                       
                        <a class=\"navbar-brand\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">Biblioteka</a>  
                        
                        ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["korisnici"] ?? null), "korisnicko_ime", array()) != "")) {
            // line 24
            echo "                        <a class=\"navbar-brand\" href=\"";
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "dodaj\">Dodaj Knjigu</a>                  
                        <a class=\"navbar-brand\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "pogledaj\">Pogledaj sve svoje knjige</a>                  

                    
             
                    ";
        } else {
            // line 30
            echo "
                    ";
        }
        // line 32
        echo "                </ul>


                <ul class=\"float-right\">

                    ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["korisnici"] ?? null), "korisnicko_ime", array()) != "")) {
            // line 38
            echo "                       
                                       
                        <a class=\"navbar-brand\" style=\"margin-left: 180%;\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auth/logout\">Izloguj se!</a> 
                    ";
        } else {
            // line 42
            echo "                    <div>
                    <a class=\"navbar-brand\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auth/log\">Logovanje</a>    
                    <a class=\"navbar-brand\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auth/reg\">Registracija</a> 
                        </div>
                    ";
        }
        // line 47
        echo "
                    
                </ul>

                ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, ($context["korisnici"] ?? null), "korisnicko_ime", array()) != "")) {
            // line 52
            echo "
                <form class=\"form-inline\" method=\"post\" action=\"";
            // line 53
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "knjige/pretraga\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" name=\"pretraga\" minlength=\"2\" placeholder=\"Pretraga\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-light\" type=\"submit\">Pretrazi</button>
                  </form>

                  ";
        } else {
            // line 59
            echo "
                  ";
        }
        // line 61
        echo "
                </div>
                  
               
             </nav>



        ";
        // line 69
        $this->displayBlock('main', $context, $blocks);
        // line 74
        echo "
        <footer>

              &copy; 2018 - Biblioteka
              
        </footer>
 
    </body>
</html>";
    }

    // line 69
    public function block_main($context, array $blocks = array())
    {
        // line 70
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
        return array (  161 => 70,  158 => 69,  146 => 74,  144 => 69,  134 => 61,  130 => 59,  121 => 53,  118 => 52,  116 => 51,  110 => 47,  104 => 44,  100 => 43,  97 => 42,  92 => 40,  88 => 38,  86 => 37,  79 => 32,  75 => 30,  67 => 25,  62 => 24,  60 => 23,  55 => 21,  39 => 8,  35 => 7,  31 => 6,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/main.html", "/var/www/html/1908/Views/_global/main.html");
    }
}
