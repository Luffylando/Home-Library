<?php

/* Knjiga/index.html */
class __TwigTemplate_247d5a0acd50e4aa2be90b3615ed9246f40a5432e480c093e3ae2a69c4a29dad extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Knjiga/index.html", 1);
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

<div class=\"card col-md-6\" id=\"card-grid\">
    
       
        <div class=\"card-header mx-auto\">
              <b>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "naslov", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "autor", array()), "html", null, true);
        echo "</b>
        </div>


        <div class=\"row\">
            <div class=\"card-body col-md-6\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "slika", array()), "html", null, true);
        echo "\" alt=\"img\" id=\"card-slika\"></div> 
            <div class=\"card-body col-md-6\">

                <input type=\"hidden\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "knjige_id", array()), "html", null, true);
        echo "\" name=\"id\" id=\"id\">

                <div id=\"font-knjiga\">
                    <div>Naslov: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "naslov", array()), "html", null, true);
        echo "</div>
                    <div>Autor: ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "autor", array()), "html", null, true);
        echo "</div>
                    <div>Zanr: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "zanr", array()), "html", null, true);
        echo "</div>
                    <div>Komentar: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "komentar", array()), "html", null, true);
        echo "</div>
                    <div>Status: ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "status", array()), "html", null, true);
        echo "</div><br>
                    
                    <div>Citat: \"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "citat", array()), "html", null, true);
        echo "\"</div>

                </div>
            </div> 
        </div>

        <div class=\"card-footer\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "knjiga/izmeni/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "knjige_id", array()), "html", null, true);
        echo "\"><button class=\"btn btn-sm btn-secondary float-right\">Izmeni podatke</button></a></div> 
       

</div> 


    ";
    }

    public function getTemplateName()
    {
        return "Knjiga/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  86 => 28,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  59 => 19,  53 => 16,  43 => 11,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Knjiga/index.html", "/var/www/html/1908/Views/Knjiga/index.html");
    }
}
