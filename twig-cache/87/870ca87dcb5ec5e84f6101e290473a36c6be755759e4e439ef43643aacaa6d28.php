<?php

/* Auth/postLogin.html */
class __TwigTemplate_46499c7552d1f99d02ddf44089ba1ea1590a900035a98353283e8b0fe11bd5bc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Auth/postLogin.html", 1);
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

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">

    <div align=\"center\"><br><br>
\t\t<h2><p>";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</p></h2>  
\t\t<h4><p>Kliknite <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "auth/log\">ovde</a> da se vratite nazad.</p></h4>  
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Auth/postLogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Auth/postLogin.html", "/var/www/html/1908/Views/Auth/postLogin.html");
    }
}
