<?php

/* partials/header_small.html.twig */
class __TwigTemplate_d629c1db598248d31ddd201a86fe5b73911ce753312311d857aad8b1597b6ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<header class=\"jumbotron\" role=\"banner\">
  <div class=\"container\">

    <h1 style=\"color: white\">";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>


    </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header_small.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#<header class=\"jumbotron bg-inverse text-center center-vertically\" role=\"banner\">#}
<header class=\"jumbotron\" role=\"banner\">
  <div class=\"container\">

    <h1 style=\"color: white\">{{ page.title }}</h1>


    </div>

</header>
", "partials/header_small.html.twig", "/var/www/skovbokarate.dk/public_html/user/themes/landio/templates/partials/header_small.html.twig");
    }
}
