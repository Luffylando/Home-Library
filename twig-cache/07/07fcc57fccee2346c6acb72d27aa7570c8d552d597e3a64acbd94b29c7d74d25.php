<?php

/* Auth/getRegister.html */
class __TwigTemplate_f2cc97f4659375309c5cd1c85da6125e7409ed4c8ed62deaa5b7b85bf0c11713 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Auth/getRegister.html", 1);
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
        echo "<h2>Registracija</h2><br><br>
<form method=\"post\">
<div class=\"container-fluid\">

<div class=\"col-md-8 mx-auto\">
    <div class=\"form-group row\">
         <label for=\"ime\" class=\"col-sm-3 col-form-label\">Korisnicko Ime:</label>
             <div class=\"col-sm-6\">
                <input type=\"text\" class=\"form-control\" onFocusOut=\"errorIme()\" required name=\"ime\" id=\"ime\" placeholder=\"Korisnicko Ime\">
            </div>
  
      <div class=\"error\" type=\"hidden\" id=\"error-ime\">
      </div>
  </div>


    <div class=\"form-group row\">
          <label for=\"eposta\" class=\"col-sm-3 col-form-label\">E-posta:</label>
            <div class=\"col-sm-6\">
                 <input type=\"email\" class=\"form-control\" onFocusOut=\"errorEposta()\" required id=\"eposta\" name=\"eposta\" placeholder=\"E-posta\">
            </div>

          <div class=\"error\" type=\"hidden\" id=\"error-eposta\">
          </div>

    </div>

    
    <div class=\"form-group row\">
            <label for=\"lozinka\" class=\"col-sm-3 col-form-label\">Lozinka:</label>
              <div class=\"col-sm-6\">
                   <input type=\"password\" class=\"form-control\" onFocusOut=\"errorLozinka()\" required id=\"lozinka\" name=\"lozinka\" placeholder=\"Lozinka\">
              </div>

        <div class=\"error\" type=\"hidden\" id=\"error-lozinka\">
        </div>

    </div>

     
    <div class=\"form-group row\">
            <label for=\"loz_provera\" class=\"col-sm-3 col-form-label\">Ponovi lozinku:</label>
              <div class=\"col-sm-6\">
                   <input type=\"password\" class=\"form-control\" onFocusOut=\"errorRepeticija()\" required id=\"loz_provera\" name=\"loz_provera\" placeholder=\"Ponovi Lozinku\">
              </div>

        <div class=\"error\" type=\"hidden\" id=\"error-lozp\">
        </div>

    </div> 

    
      <div class=\"form-group\">
           
            <button class=\"btn btn-sm btn-secondary\" id=\"btn-reg\">Registruj se</button>
          </div>

    </div>
</div>
</form>
<script>

  function errorIme() {
     var x, text;
     // Get the value of the input field with id=\"username\"
     x = document.getElementById(\"ime\").value;
     linebreak = document.createElement(\"br\");
     var matches = x.match(/^[A-Za-z0-9]{6,20}\$/);
     if (x === '' || x != matches) {     
         
         text = document.getElementById(\"ime\").style.border = '1px double red';  
         text = document.getElementById(\"error-ime\").style.color = \"red\";
         string = 'Ime nije ispravnog formata.';
         
        
 
     } else {
         
         text = document.getElementById(\"ime\").style.border = \"1px double green\";
         text = document.getElementById(\"error-ime\").style.color = \"green\";       
         string = 'Odlicno!';               
     }
    
     document.getElementById(\"error-ime\").innerHTML = string;
 }
 
 function errorLozinka() {
    var x, text;

    // Get the value of the input field with id=\"username\"
    x = document.getElementById(\"lozinka\").value;
    linebreak = document.createElement(\"br\");
    var matches = x.match(/^[A-Za-z0-9]{8,20}\$/);


    if (x === '' || x != matches) {     
        
        text = document.getElementById(\"lozinka\").style.border = '1px double red';  
        text = document.getElementById(\"error-lozinka\").style.color = \"red\";
        string = 'Lozinka nije ispravnog formata!';

    } else {
        
        text = document.getElementById(\"lozinka\").style.border = \"1px double green\";
        text = document.getElementById(\"error-lozinka\").style.color = \"green\";      
        string = 'Odlicno!';
    }
   
    document.getElementById(\"error-lozinka\").innerHTML = string;
}

 function errorRepeticija() {
    var x, text;

    // Get the value of the input field with id=\"username\"
    x = document.getElementById(\"loz_provera\").value;
    linebreak = document.createElement(\"br\");
    var matches = x.match(/^[A-Za-z0-9]{8,20}\$/);
    var lozinka = document.getElementById(\"lozinka\").value;


    if (x === '' || x != matches || x != lozinka) {     
        
        text = document.getElementById(\"loz_provera\").style.border = '1px double red';  
        text = document.getElementById(\"error-lozp\").style.color = \"red\";
        string = 'Nije ponovljena ista lozinka!';

    } else {
        
        text = document.getElementById(\"loz_provera\").style.border = \"1px double green\";
        text = document.getElementById(\"error-lozp\").style.color = \"green\";      
        string = 'Odlicno!';
    }
   
    document.getElementById(\"error-lozp\").innerHTML = string;
}

function errorEposta() {
    var x, text;
    // Get the value of the input field with id=\"username\"
    x = document.getElementById(\"eposta\").value;
    linebreak = document.createElement(\"br\");
    var matches = x.match(/^.*[a-zA-Z0-9][@][a-z0-9]{1,20}\\.[a-z0-9]{1,20}\$/);


    if (x === '' || x != matches) {     
        
        text = document.getElementById(\"eposta\").style.border = '1px double red';  
        text = document.getElementById(\"error-eposta\").style.color = \"red\";
        string = 'Eposta nije ispravnog formata!';

    } else {
        
        text = document.getElementById(\"eposta\").style.border = \"1px double green\";
        text = document.getElementById(\"error-eposta\").style.color = \"green\";     
        string = 'Odlicno!';
    }
   
    document.getElementById(\"error-eposta\").innerHTML = string;
}


 </script>
 

";
    }

    public function getTemplateName()
    {
        return "Auth/getRegister.html";
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
        return new Twig_Source("", "Auth/getRegister.html", "/var/www/html/1908/Views/Auth/getRegister.html");
    }
}
