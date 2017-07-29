<?php

/* instructors.html.twig */
class __TwigTemplate_94d3b787c6c73f6147d0223a38614e6eb9b68a853d2048691cf9afd2d17df6ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "instructors.html.twig", 1);
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
        $this->loadTemplate("partials/header_small.html.twig", "instructors.html.twig", 4)->display($context);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<style rel=\"text/css\">

body {
  background: #fff;
}

.card-wrapper {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
}

.card {
  /*background:  red;*/
   width: 170px;
   margin-left: 10px;
   background: #f6f6f6;
   padding: 1px;
}
.card-block {
  /*background:  green;*/
  width: 170px;
     padding: 10px;

  height: 120px;
}

.card-image-wrapper {
  overflow: hidden;
  height: 130px;
}

.card img {
  width: 170px;
  margin-top : -24px;
}
.card-title {
  font-size: 0.9em;
  color: #aa0000;
}
.card-text {
  font-size: 0.8em;  
  margin: 0;
}

</style>


<section class=\"section-text\">
  <div class=\"container\">


<h1>Instruktører</h1>
<div class=\"card-wrapper\">
";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "teaminstructors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["inst"]) {
            // line 66
            echo "           
  <div class=\"card\">
  <div class=\"card-image-wrapper\">
    ";
            // line 69
            if ($this->getAttribute($context["inst"], "avatar", array())) {
                // line 70
                echo "    <img class=\"card-img-top\" src=\"";
                echo $this->getAttribute($context["inst"], "avatar", array());
                echo "\" alt=\"Card image cap\">
    ";
            }
            // line 72
            echo "</div>
    <div class=\"card-block\">
      <h1 class=\"card-title\">";
            // line 74
            echo $this->getAttribute($context["inst"], "name", array());
            echo "</h1>
      <p class=\"card-text\">";
            // line 75
            echo $this->getAttribute($context["inst"], "title", array());
            echo "</p>
      <p class=\"card-text\">";
            // line 76
            echo $this->getAttribute($context["inst"], "description", array());
            echo "</p>
      <p class=\"card-text\"><small class=\"text-muted\"></small></p>
    </div>
  </div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "</div>

<br/>
<h1>Sortbælter</h1>
<div class=\"card-wrapper\">
 ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "blackbelts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["inst"]) {
            // line 88
            echo "           
  <div class=\"card\">
    <div class=\"card-image-wrapper\">
    ";
            // line 91
            if ($this->getAttribute($context["inst"], "avatar", array())) {
                // line 92
                echo "    <img class=\"card-img-top\" src=\"";
                echo $this->getAttribute($context["inst"], "avatar", array());
                echo "\" alt=\"Card image cap\">
    ";
            }
            // line 94
            echo "    </div>
    <div class=\"card-block\">
      <h1 class=\"card-title\">";
            // line 96
            echo $this->getAttribute($context["inst"], "name", array());
            echo "</h1>
      <p class=\"card-text\">";
            // line 97
            echo $this->getAttribute($context["inst"], "title", array());
            echo "</p>
      <p class=\"card-text\">";
            // line 98
            echo $this->getAttribute($context["inst"], "description", array());
            echo "</p>
      <p class=\"card-text\"><small class=\"text-muted\"></small></p>
    </div>
  </div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "  </div>
<br/>
<h1>Sempais og Instruktørassistenter</h1>
<div class=\"card-wrapper\">
";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "brownbelts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["inst"]) {
            // line 109
            echo "           
  <div class=\"card\">
  <div class=\"card-image-wrapper\">
    ";
            // line 112
            if ($this->getAttribute($context["inst"], "avatar", array())) {
                // line 113
                echo "    <img class=\"card-img-top\" src=\"";
                echo $this->getAttribute($context["inst"], "avatar", array());
                echo "\" alt=\"Card image cap\">
    ";
            }
            // line 115
            echo "    </div>
    <div class=\"card-block\">
      <h1 class=\"card-title\">";
            // line 117
            echo $this->getAttribute($context["inst"], "name", array());
            echo "</h1>
      <p class=\"card-text\">";
            // line 118
            echo $this->getAttribute($context["inst"], "title", array());
            echo "</p>
      <p class=\"card-text\">";
            // line 119
            echo $this->getAttribute($context["inst"], "description", array());
            echo "</p>
      <p class=\"card-text\"><small class=\"text-muted\"></small></p>
    </div>
  </div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inst'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
</div>



    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 col-xl-10 col-xl-offset-1\">
        ";
        // line 132
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
        return "instructors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 132,  232 => 125,  220 => 119,  216 => 118,  212 => 117,  208 => 115,  202 => 113,  200 => 112,  195 => 109,  191 => 108,  185 => 104,  173 => 98,  169 => 97,  165 => 96,  161 => 94,  155 => 92,  153 => 91,  148 => 88,  144 => 87,  137 => 82,  125 => 76,  121 => 75,  117 => 74,  113 => 72,  107 => 70,  105 => 69,  100 => 66,  96 => 65,  38 => 9,  35 => 8,  29 => 4,  11 => 1,);
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

{% block header %}{% include 'partials/header_small.html.twig' %}{% endblock %}



{% block content %}

<style rel=\"text/css\">

body {
  background: #fff;
}

.card-wrapper {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
}

.card {
  /*background:  red;*/
   width: 170px;
   margin-left: 10px;
   background: #f6f6f6;
   padding: 1px;
}
.card-block {
  /*background:  green;*/
  width: 170px;
     padding: 10px;

  height: 120px;
}

.card-image-wrapper {
  overflow: hidden;
  height: 130px;
}

.card img {
  width: 170px;
  margin-top : -24px;
}
.card-title {
  font-size: 0.9em;
  color: #aa0000;
}
.card-text {
  font-size: 0.8em;  
  margin: 0;
}

</style>


<section class=\"section-text\">
  <div class=\"container\">


<h1>Instruktører</h1>
<div class=\"card-wrapper\">
{% for inst in page.header.teaminstructors %}
           
  <div class=\"card\">
  <div class=\"card-image-wrapper\">
    {% if inst.avatar %}
    <img class=\"card-img-top\" src=\"{{inst.avatar}}\" alt=\"Card image cap\">
    {% endif %}
</div>
    <div class=\"card-block\">
      <h1 class=\"card-title\">{{ inst.name }}</h1>
      <p class=\"card-text\">{{inst.title}}</p>
      <p class=\"card-text\">{{inst.description}}</p>
      <p class=\"card-text\"><small class=\"text-muted\"></small></p>
    </div>
  </div>
  
 {% endfor %}
</div>

<br/>
<h1>Sortbælter</h1>
<div class=\"card-wrapper\">
 {% for inst in page.header.blackbelts %}
           
  <div class=\"card\">
    <div class=\"card-image-wrapper\">
    {% if inst.avatar %}
    <img class=\"card-img-top\" src=\"{{inst.avatar}}\" alt=\"Card image cap\">
    {% endif %}
    </div>
    <div class=\"card-block\">
      <h1 class=\"card-title\">{{ inst.name }}</h1>
      <p class=\"card-text\">{{inst.title}}</p>
      <p class=\"card-text\">{{inst.description}}</p>
      <p class=\"card-text\"><small class=\"text-muted\"></small></p>
    </div>
  </div>

 {% endfor %}
  </div>
<br/>
<h1>Sempais og Instruktørassistenter</h1>
<div class=\"card-wrapper\">
{% for inst in page.header.brownbelts %}
           
  <div class=\"card\">
  <div class=\"card-image-wrapper\">
    {% if inst.avatar %}
    <img class=\"card-img-top\" src=\"{{inst.avatar}}\" alt=\"Card image cap\">
    {% endif %}
    </div>
    <div class=\"card-block\">
      <h1 class=\"card-title\">{{ inst.name }}</h1>
      <p class=\"card-text\">{{inst.title}}</p>
      <p class=\"card-text\">{{inst.description}}</p>
      <p class=\"card-text\"><small class=\"text-muted\"></small></p>
    </div>
  </div>

 {% endfor %}

</div>



    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 col-xl-10 col-xl-offset-1\">
        {{ page.content }}
      </div>
    </div>

    
  </div>
</section>
{% endblock %}

{#{% block footer %}{% endblock %}#}
", "instructors.html.twig", "/var/www/skovbokarate.dk/public_html/user/themes/landio/templates/instructors.html.twig");
    }
}
