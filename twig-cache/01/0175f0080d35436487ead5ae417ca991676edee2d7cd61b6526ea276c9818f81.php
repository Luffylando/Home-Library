<?php

/* Error/error.html */
class __TwigTemplate_6968a924b8631a60c91c0529681b027a89087f8a0a96ddb9728ac57aa419bad8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Error/error.html", 1);
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
        echo "
<div class=\"mx-auto\">
    <h2>Nesto nije u redu. Kliknite <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">ovde</a> da se vratite na pocetnu stranu.</h2>
    
</div>


";
    }

    public function getTemplateName()
    {
        return "Error/error.html";
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
        return new Twig_Source("", "Error/error.html", "/var/www/html/1908/Views/Error/error.html");
    }
}
