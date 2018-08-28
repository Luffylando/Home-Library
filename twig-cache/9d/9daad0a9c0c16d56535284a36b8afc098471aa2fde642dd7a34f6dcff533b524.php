<?php

/* Dodaj/post.html */
class __TwigTemplate_53bd12f6550764485807763e48b44e40da8aab696cf7259b2196e884a91f1cde extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/main.html", "Dodaj/post.html", 1);
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
        echo "<div>
\t
\t\t<p>Kliknite <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "dodaj\">ovde</a> da se vratite nazad.</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "Dodaj/post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Dodaj/post.html", "/var/www/html/1908/Views/Dodaj/post.html");
    }
}
