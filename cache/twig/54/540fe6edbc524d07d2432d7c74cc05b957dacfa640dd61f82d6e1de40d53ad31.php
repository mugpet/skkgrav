<?php

/* default.html.twig */
class __TwigTemplate_78d026007e10d3b8441ff5079ea273b6e38b4574288cd63dd35d6e0cbf6efda5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "             ";
        $this->loadTemplate("partials/header_small.html.twig", "default.html.twig", 5)->display($context);
        // line 6
        echo "        ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<section class=\"section-text\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 col-xl-10 col-xl-offset-1\">
        ";
        // line 14
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  42 => 10,  39 => 9,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{#{% block header %}{% endblock %}#}

        {% block header %}
             {% include 'partials/header_small.html.twig' %}
        {% endblock %}


{% block content %}
<section class=\"section-text\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 col-xl-10 col-xl-offset-1\">
        {{ page.content }}
      </div>
    </div>
  </div>
</section>
{% endblock %}
{#{% block footer %}{% endblock %}#}
", "default.html.twig", "/var/www/skovbokarate.dk/public_html/user/themes/landio/templates/default.html.twig");
    }
}
