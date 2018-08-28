<?php

/* Home/postSearch.html */
class __TwigTemplate_c42cd0960c6cee64c4bdcca75f4462c4bebb9ce3797312722a9b91c382f1dc08 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Home/postSearch.html", 1);
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

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "<h2 id=\"naslov\">Rezultat pretrage:</h2><br>


        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["knjige"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["knjiga"]) {
            // line 7
            echo "        
       



\t\t
\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "pogledaj/knjiga/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "knjige_id", array()), "html", null, true);
            echo "\" id=\"href-1\"> 
    <div class=\"container\">

    <div class=\"row\">
            <h5>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "knjige_id", array()), "html", null, true);
            echo ". &nbsp;</h5>
            <h5>\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "naslov", array()), "html", null, true);
            echo "\" -&nbsp;</h5>
            <h5>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "autor", array()), "html", null, true);
            echo "&nbsp;</h5>
            <h5>(";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "zanr", array()), "html", null, true);
            echo ")</h5>
        </div>
    </div>
</a>

\t\t\t 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['knjiga'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        
        ";
        // line 28
        if (twig_test_empty(($context["knjige"] ?? null))) {
            // line 29
            echo "
        <h4 align=\"center\">Nema rezultata pretrage koji odgovara trazenoj reci: \"";
            // line 30
            echo twig_escape_filter($this->env, ($context["keyword"] ?? null), "html", null, true);
            echo "\"</h4>

        ";
        }
        // line 33
        echo "

";
    }

    public function getTemplateName()
    {
        return "Home/postSearch.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  94 => 30,  91 => 29,  89 => 28,  86 => 27,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  52 => 13,  44 => 7,  40 => 6,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Home/postSearch.html", "/var/www/html/1908/Views/Home/postSearch.html");
    }
}
