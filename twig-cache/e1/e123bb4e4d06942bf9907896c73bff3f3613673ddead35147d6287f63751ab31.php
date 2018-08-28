<?php

/* Pogledaj/index.html */
class __TwigTemplate_1ee7f17b8743c62c88e90f48647e4d8ee486ac371265c7cdc7fb0c04131dcc32 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Pogledaj/index.html", 1);
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
        echo "<div class=\"container\">
    <div class=\"col-md-12\">

    <div class=\"row\">

  
        ";
        // line 11
        if (twig_test_empty(($context["knjige"] ?? null))) {
            // line 12
            echo "
        <h3 id=\"e-t\">Nema dodatih knjiga</h3>

        ";
        } else {
            // line 16
            echo "
     

        <table class=\"table table-striped\">
            <thead class=\"thead-dark\">
              <tr>
                <th>#</th>
                <th>Id</th>
                <th>Naslov</th>
                <th>Autor</th>
                <th>Zanr</th>
                <th>Status</th>
                <th></th>


              </tr>
            </thead>
            <tbody>
               
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["knjige"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["knjiga"]) {
                // line 36
                echo "           

              <tr>
                
                <td class=\"col-1\">
                  <a class=\"btn btn-sm btn-secondary toolbar\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
                echo "pogledaj/knjiga/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "knjige_id", array()), "html", null, true);
                echo "\">Pogledaj detaljnije</a>
                
                </td>
              
                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "knjige_id", array()), "html", null, true);
                echo "</td>

                <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "naslov", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "autor", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "zanr", array()), "html", null, true);
                echo "</td>   
                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "status", array()), "html", null, true);
                echo "</td>          
                <td> <a class=\"btn btn-sm btn-light\" href=\"";
                // line 51
                echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
                echo "obrisi/knjige/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["knjiga"], "knjige_id", array()), "html", null, true);
                echo "\">Obrisi Knjigu</a>
                  </td>

              </tr>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['knjiga'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            
            </tbody>
          </table>

          ";
        }
        // line 62
        echo "         

</div>

</div>

</div>


";
    }

    public function getTemplateName()
    {
        return "Pogledaj/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 62,  127 => 57,  113 => 51,  109 => 50,  105 => 49,  101 => 48,  97 => 47,  92 => 45,  83 => 41,  76 => 36,  72 => 35,  51 => 16,  45 => 12,  43 => 11,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Pogledaj/index.html", "/var/www/html/1908/Views/Pogledaj/index.html");
    }
}
