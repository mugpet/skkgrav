<?php

/* partials/header.html.twig */
class __TwigTemplate_e04e66986e1fb1fa2e736eb797c8e3b6ff19b8df95be9b74888e782e80407304 extends Twig_Template
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
        echo "<header class=\"jumbotron bg-inverse text-center center-vertically\" role=\"banner\">
  <div class=\"container\">
  <img src=\"";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "logoUrl", array());
        echo "\" //>
    <h1 class=\"display-3\">";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "title", array());
        echo "</h1>
    <h2 class=\"m-b-lg\">";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "description", array());
        echo "</h2>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "    <a class=\"btn btn-secondary-outline m-b-md\" href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" role=\"button\"><span class=\"icon-";
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></span>";
            echo $this->getAttribute($context["item"], "text", array());
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    <script type=\"text/javascript\">
        ";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "facebook_url", array())) {
            // line 13
            echo "        // Facebook Shares Count
        \$.getJSON( '//graph.facebook.com/?id=";
            // line 14
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "url", array());
            echo "', function( fbdata ) {
            \$('#facebook-count').text(fbdata.shares)
        });
    ";
        }
        // line 18
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "twitter_url", array())) {
            // line 19
            echo "        // Twitter Shares Count
        \$.getJSON( '//cdn.api.twitter.com/1/urls/count.json?url=";
            // line 20
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "url", array());
            echo "&callback=?', function( twitdata ) {
            \$('#twitter-count').text(twitdata.count)
        });
    ";
        }
        // line 24
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "linkedin_url", array())) {
            // line 25
            echo "        // LinkedIn Shares Count
        \$.getJSON( '//www.linkedin.com/countserv/count/share?url=";
            // line 26
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "url", array());
            echo "&callback=?', function( linkdindata ) {
            \$('#linkedin-count').text(linkdindata.count)
        });
    ";
        }
        // line 30
        echo "    </script>

    <ul class=\"list-inline social-share\">
        ";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "twitter_url", array())) {
            // line 34
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "twitter_url", array());
            echo "\"><span class=\"icon-twitter\"></span> <span class=\"social-text\" id=\"twitter-count\">0</span></a></li>
        ";
        }
        // line 36
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "facebook_url", array())) {
            // line 37
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "facebook_url", array());
            echo "\"><span class=\"icon-facebook\"></span> <span class=\"social-text\" id=\"facebook-count\">0</span></a></li>
        ";
        }
        // line 39
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "linkedin_url", array())) {
            // line 40
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "socialcount", array()), "linkedin_url", array());
            echo "\"><span class=\"icon-linkedin\"></span> <span class=\"social-text\" id=\"linkedin-count\">0</span></a></li>
        ";
        }
        // line 42
        echo "    </ul>
  </div>


</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  119 => 40,  116 => 39,  110 => 37,  107 => 36,  101 => 34,  99 => 33,  94 => 30,  87 => 26,  84 => 25,  81 => 24,  74 => 20,  71 => 19,  68 => 18,  61 => 14,  58 => 13,  56 => 12,  52 => 10,  39 => 8,  35 => 7,  31 => 6,  27 => 5,  23 => 4,  19 => 2,);
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
<header class=\"jumbotron bg-inverse text-center center-vertically\" role=\"banner\">
  <div class=\"container\">
  <img src=\"{{ site.logo.logoUrl }}\" //>
    <h1 class=\"display-3\">{{ site.header.title }}</h1>
    <h2 class=\"m-b-lg\">{{ site.header.description }}</h2>
    {% for item in site.header.buttons %}
    <a class=\"btn btn-secondary-outline m-b-md\" href=\"{{ item.url }}\" role=\"button\"><span class=\"icon-{{ item.icon }}\"></span>{{ item.text }}</a>
    {% endfor %}

    <script type=\"text/javascript\">
        {% if site.socialcount.facebook_url %}
        // Facebook Shares Count
        \$.getJSON( '//graph.facebook.com/?id={{ site.socialcount.url }}', function( fbdata ) {
            \$('#facebook-count').text(fbdata.shares)
        });
    {% endif %}
    {% if site.socialcount.twitter_url %}
        // Twitter Shares Count
        \$.getJSON( '//cdn.api.twitter.com/1/urls/count.json?url={{ site.socialcount.url }}&callback=?', function( twitdata ) {
            \$('#twitter-count').text(twitdata.count)
        });
    {% endif %}
    {% if site.socialcount.linkedin_url %}
        // LinkedIn Shares Count
        \$.getJSON( '//www.linkedin.com/countserv/count/share?url={{ site.socialcount.url }}&callback=?', function( linkdindata ) {
            \$('#linkedin-count').text(linkdindata.count)
        });
    {% endif %}
    </script>

    <ul class=\"list-inline social-share\">
        {% if site.socialcount.twitter_url %}
            <li><a class=\"nav-link\" href=\"{{ site.socialcount.twitter_url }}\"><span class=\"icon-twitter\"></span> <span class=\"social-text\" id=\"twitter-count\">0</span></a></li>
        {% endif %}
        {% if site.socialcount.facebook_url %}
            <li><a class=\"nav-link\" href=\"{{ site.socialcount.facebook_url }}\"><span class=\"icon-facebook\"></span> <span class=\"social-text\" id=\"facebook-count\">0</span></a></li>
        {% endif %}
        {% if site.socialcount.linkedin_url %}
            <li><a class=\"nav-link\" href=\"{{ site.socialcount.linkedin_url }}\"><span class=\"icon-linkedin\"></span> <span class=\"social-text\" id=\"linkedin-count\">0</span></a></li>
        {% endif %}
    </ul>
  </div>


</header>
", "partials/header.html.twig", "/var/www/skovbokarate.dk/public_html/user/themes/landio/templates/partials/header.html.twig");
    }
}
