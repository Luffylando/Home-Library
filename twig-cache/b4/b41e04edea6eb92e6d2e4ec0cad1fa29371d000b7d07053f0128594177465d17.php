<?php

/* Auth/getLogin.html */
class __TwigTemplate_799f66cdda3485dc4d4e273ab351a766bfaab6d2169463fd41d0fdf80f6801c4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Auth/getLogin.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_global/main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "<h2>Logovanje</h2><br><br>

<form method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "auth/log\">
<div class=\"container\">

<div class=\"col-md-8 mx-auto\">
    <div class=\"form-group row\">
         <label for=\"ime\" class=\"col-sm-3 col-form-label\">Korisnicko Ime:</label>
             <div class=\"col-sm-9\">
                <input type=\"text\" class=\"form-control\" name=\"ime\" id=\"ime\" placeholder=\"Korisnicko Ime\" required>
            </div>
            <div class=\"error\" type=\"hidden\" id=\"error-ime\">
            </div>
    </div>
  
   
    
    <div class=\"form-group row\">
            <label for=\"lozinka\" class=\"col-sm-3 col-form-label\">Lozinka:</label>
              <div class=\"col-sm-9\">
                   <input type=\"password\" class=\"form-control\" id=\"lozinka\" name=\"lozinka\" placeholder=\"Lozinka\" required>
              </div>
    </div>
   
      <div class=\"form-group\">
           
            <button class=\"btn btn-sm btn-secondary float-right\">Uloguj se</button>
          </div>

    </div>
</div>
</form>


";
    }

    public function getTemplateName()
    {
        return "Auth/getLogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Auth/getLogin.html", "/var/www/html/1908/Views/Auth/getLogin.html");
    }
}
