<?php

/* Dodaj/index.html */
class __TwigTemplate_035e1f61db2f604dd1672a2dc5d256f4dd7467cbe6ded1b3c1509bcd9fc47232 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Dodaj/index.html", 1);
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
        echo "<h2>Dodaj knjigu</h2>
<form method=\"post\" enctype=\"multipart/form-data\">
<div class=\"container\">

<div class=\"col-md-8 mx-auto\">
    <div class=\"form-group row\">
         <label for=\"naslov\" class=\"col-sm-2 col-form-label\">Naslov:</label>
             <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" name=\"naslov\" id=\"naslov\" placeholder=\"Naslov\">
            </div>
    </div>

    <div class=\"form-group row\">
          <label for=\"autor\" class=\"col-sm-2 col-form-label\">Autor:</label>
            <div class=\"col-sm-10\">
                 <input type=\"text\" class=\"form-control\" id=\"autor\" name=\"autor\" placeholder=\"Autor\">
            </div>
    </div>

    <div class=\"form-group row\">
         <label for=\"zanr\" class=\"col-sm-2 col-form-label\">Zanr:</label>
             <div class=\"col-sm-10\">
                 <select name=\"zanr\" id=\"zanr\">

                     <option value=\"\"></option>
                     <option value=\"Roman\">Roman</option>
                     <option value=\"Istorija\">Istorija</option>
                     <option value=\"Nauka\">Nauka</option>
                     <option value=\"Drama\">Drama</option>
                     <option value=\"Filozofija\">Filozofija</option>
                     <option value=\"Filozofija\">Fanstazija</option>


                 </select>
            </div>
    </div>


    <div class=\"form-group row\">
            <label for=\"status\" class=\"col-sm-2 col-form-label\">Status:</label>
                <div class=\"col-sm-10\">
                    <select name=\"status\" id=\"status\">
   
                        <option value=\"\"></option>
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
              <textarea name=\"citat\" id=\"citat\" cols=\"30\" rows=\"5\"></textarea>
            </div>
    </div>

    <div class=\"form-group row\">
            <label for=\"komentar\" class=\"col-sm-2 col-form-label\">Komentar:</label>
                   <div class=\"col-sm-10\">
                    <textarea name=\"komentar\" id=\"komentar\" cols=\"30\" rows=\"5\"></textarea>
                  </div>
          </div>

    <div class=\"form-group row\">
        <label for=\"slika\" class=\"col-sm-2 col-form-label\">Slika:</label>
        <div class=\"col-sm-10\">
          <input type=\"file\" class=\"form-control\" id=\"slika\" selected=\"selected\" name=\"slika\">
        </div>
      </div>

      <div class=\"form-group\">
           
            <button class=\"btn btn-sm btn-secondary float-right\">Dodaj Knjigu</button>
          </div>

    </div>
</div>
</form>


";
    }

    public function getTemplateName()
    {
        return "Dodaj/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Dodaj/index.html", "/var/www/html/1908/Views/Dodaj/index.html");
    }
}
