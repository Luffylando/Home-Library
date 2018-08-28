<?php

/* Knjiga/getIzmeni.html */
class __TwigTemplate_4307cd3d5db551ef100f3bb7b304094f0352e37f442e598ff7703fd44497c437 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Knjiga/getIzmeni.html", 1);
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
        echo "<h2>Izmeni Podatke</h2>
<form method=\"post\" enctype=\"multipart/form-data\">
<div class=\"container\">

<div class=\"col-md-8 mx-auto\">
    <div class=\"form-group row\">
         <label for=\"naslov\" class=\"col-sm-2 col-form-label\">Naslov:</label>
             <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "naslov", array()), "html", null, true);
        echo "\" name=\"naslov\" id=\"naslov\" placeholder=\"Naslov\">
            </div>
    </div>


    <div class=\"form-group row\">
          <label for=\"autor\" class=\"col-sm-2 col-form-label\">Autor:</label>
            <div class=\"col-sm-10\">
                 <input type=\"text\" class=\"form-control\" id=\"autor\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "autor", array()), "html", null, true);
        echo "\" name=\"autor\" placeholder=\"Autor\">
            </div>
    </div>

    
              
            <input type=\"hidden\" id=\"id\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "knjige_id", array()), "html", null, true);
        echo "\" name=\"id\">
            
      

    <div class=\"form-group row\">
         <label for=\"zanr\" class=\"col-sm-2 col-form-label\">Zanr:</label>
             <div class=\"col-sm-10\">
                 <select name=\"zanr\" id=\"zanr\">

                 <option value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "zanr", array()), "html", null, true);
        echo "\" selected=\"selected\">
                                ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "zanr", array()), "html", null, true);
        echo "
                 </option>
                    
                     <option value=\"Roman\">Roman</option>
                     <option value=\"Istorija\">Istorija</option>
                     <option value=\"Nauka\">Nauka</option>
                     <option value=\"Drama\">Drama</option>
                     <option value=\"Filozofija\">Filozofija</option>
                     <option value=\"Fantazija\">Fanstazija</option>


                 </select>
            </div>
    </div>


    <div class=\"form-group row\">
            <label for=\"status\" class=\"col-sm-2 col-form-label\">Status:</label>
                <div class=\"col-sm-10\">
                    <select name=\"status\" id=\"status\">
   
                       
                            <option value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "status", array()), "html", null, true);
        echo "\" selected>
                                    ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "status", array()), "html", null, true);
        echo "
                     </option>
                        <option value=\"Procitano\">Procitano</option>

                        <option value=\"Trenutno se cita\">Trenutno se cita</option>
                        <option value=\"Neprocitano\">Neprocitano</option>
                        <option value=\"Napusteno\">Napusteno</option>  
   
                    </select>
               </div>
       </div>

    <div class=\"form-group row\">
      <label for=\"citat\" class=\"col-sm-2 col-form-label\">Citat:</label>
             <div class=\"col-sm-10\">
              <textarea name=\"citat\" id=\"citat\" cols=\"30\" maxlength=\"250\" rows=\"5\" placeholder=\"(max 250 characters)\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "citat", array()), "html", null, true);
        echo "</textarea>
            </div>
    </div>

    <div class=\"form-group row\">
            <label for=\"komentar\" class=\"col-sm-2 col-form-label\">Komentar:</label>
                   <div class=\"col-sm-10\">
                    <textarea name=\"komentar\" id=\"komentar\" maxlength=\"100\" cols=\"30\" rows=\"5\" placeholder=\"(max 100 characters)\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "komentar", array()), "html", null, true);
        echo "</textarea>
                  </div>
          </div>

        
    <div class=\"form-group row\">
        <label for=\"slika\" class=\"col-sm-2 col-form-label\">Slika:</label>
        <div class=\"col-sm-10\">
            <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "slika", array()), "html", null, true);
        echo "\" alt=\"img\" width=\"180\" height=\"200\">
          <input type=\"file\" class=\"form-control\" id=\"slika\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["knjiga"] ?? null), "slika", array()), "html", null, true);
        echo "\" name=\"slika\" placeholder=\"Slika\">
        </div>
      </div>

      <div class=\"form-group\">
           
            <button class=\"btn btn-sm btn-secondary float-right\">Potvrdi Izmeni</button>
          </div>

    </div>
</div>
</form>


";
    }

    public function getTemplateName()
    {
        return "Knjiga/getIzmeni.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 91,  149 => 90,  138 => 82,  128 => 75,  110 => 60,  106 => 59,  81 => 37,  77 => 36,  65 => 27,  56 => 21,  45 => 13,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Knjiga/getIzmeni.html", "/var/www/html/1908/Views/Knjiga/getIzmeni.html");
    }
}
