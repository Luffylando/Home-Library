<?php

/* Home/index.html */
class __TwigTemplate_1ff7267d6537e9c0fcbb30605547526ed094e5eb66823d47df8fd5818c11dec2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Home/index.html", 1);
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

  
 ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, ($context["korisnici"] ?? null), "korisnicko_ime", array()) != "")) {
            // line 10
            echo "

<h2>Zdravo ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["korisnici"] ?? null), "korisnicko_ime", array()), "html", null, true);
            echo ". Dobrodosao na nas sajt.</h2>



";
        } else {
            // line 17
            echo "
<h2>Dobrodosli na sajt. <br>
Morate biti registrovani i ulogovani kako biste mogli <br>
 da napravite svoju istoriju citanja.</h2>

";
        }
        // line 23
        echo "    
</div>

";
    }

    public function getTemplateName()
    {
        return "Home/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  55 => 17,  47 => 12,  43 => 10,  41 => 9,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Home/index.html", "/var/www/html/1908/Views/Home/index.html");
    }
}
