<?php

/* portfolio.html.twig */
class __TwigTemplate_008e1cf07935070173b1184ac3a7070e671d2c5283bb19128564dfc391f62e57 extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("portfolio.html.twig", "portfolio.html.twig", 2, "1495021726")->display($context);
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}
        {% set category = uri.query('category') %}
        <article class=\"portfolio\">
            <section role=\"navigation\">
                {% if category is empty %}
                    <h1><a href=\"portfolio\" class=\"ah1 active\">Portfolio</a></h1>
                {% else %}
                    <h1><a href=\"portfolio\" class=\"ah1\">Portfolio</a></h1>
                {% endif %}

                {% set ritems = {'artikelen': \"Artikelen\", 'boeken' : \"Boeken\", 'redactie' : \"Redactie\"}|ksort %}
                {% for key, value in ritems %}
                    {% if key == category %}
                        <a href=\"?category={{ key }}\" class=\"active filterLink\">{{ value }}</a>
                    {% else %}
                        <a href=\"?category={{ key }}\" class=\"filterLink\">{{ value }}</a>
                {% endif %}
                {% endfor %}
                <span class=\"spacer\" aria-hidden=\"true\"></span>
                <input id=\"myInput\" onkeyup=\"searchfunc()\" type=\"text\" placeholder=\"zoeken\"/>
            </section>



            {% for child in collection %}
                {% include 'partials/portfolio_item.html.twig' with {'page':child, 'truncate':true, 'category':category} %}
            {% endfor %}

            {% if config.plugins.pagination.enabled and collection.params.pagination %}
                {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
            {% endif %}



        </article>

        <script src=\"user/themes/redactie-admiraal-webgem/js/script.js\" async></script>

    {% endblock %}

{% endembed %}
", "portfolio.html.twig", "C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\themes\\redactie-admiraal-webgem\\templates\\portfolio.html.twig");
    }
}


/* portfolio.html.twig */
class __TwigTemplate_008e1cf07935070173b1184ac3a7070e671d2c5283bb19128564dfc391f62e57_1495021726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "portfolio.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 5
        $context["base_url"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        // line 6
        $context["feed_url"] = (isset($context["base_url"]) ? $context["base_url"] : null);
        // line 8
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == "/")) {
            // line 9
            $context["base_url"] = "";
        }
        // line 12
        if (((isset($context["base_url"]) ? $context["base_url"] : null) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null))) {
            // line 13
            $context["feed_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/") . $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()));
        }
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $context["category"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "query", array(0 => "category"), "method");
        // line 18
        echo "        <article class=\"portfolio\">
            <section role=\"navigation\">
                ";
        // line 20
        if (twig_test_empty((isset($context["category"]) ? $context["category"] : null))) {
            // line 21
            echo "                    <h1><a href=\"portfolio\" class=\"ah1 active\">Portfolio</a></h1>
                ";
        } else {
            // line 23
            echo "                    <h1><a href=\"portfolio\" class=\"ah1\">Portfolio</a></h1>
                ";
        }
        // line 25
        echo "
                ";
        // line 26
        $context["ritems"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->ksortFilter(array("artikelen" => "Artikelen", "boeken" => "Boeken", "redactie" => "Redactie"));
        // line 27
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ritems"]) ? $context["ritems"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 28
            echo "                    ";
            if (($context["key"] == (isset($context["category"]) ? $context["category"] : null))) {
                // line 29
                echo "                        <a href=\"?category=";
                echo $context["key"];
                echo "\" class=\"active filterLink\">";
                echo $context["value"];
                echo "</a>
                    ";
            } else {
                // line 31
                echo "                        <a href=\"?category=";
                echo $context["key"];
                echo "\" class=\"filterLink\">";
                echo $context["value"];
                echo "</a>
                ";
            }
            // line 33
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                <span class=\"spacer\" aria-hidden=\"true\"></span>
                <input id=\"myInput\" onkeyup=\"searchfunc()\" type=\"text\" placeholder=\"zoeken\"/>
            </section>



            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 41
            echo "                ";
            $this->loadTemplate("partials/portfolio_item.html.twig", "portfolio.html.twig", 41)->display(array_merge($context, array("page" => $context["child"], "truncate" => true, "category" => (isset($context["category"]) ? $context["category"] : null))));
            // line 42
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
            ";
        // line 44
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 45
            echo "                ";
            $this->loadTemplate("partials/pagination.html.twig", "portfolio.html.twig", 45)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 46
            echo "            ";
        }
        // line 47
        echo "


        </article>

        <script src=\"user/themes/redactie-admiraal-webgem/js/script.js\" async></script>

    ";
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 47,  257 => 46,  254 => 45,  252 => 44,  249 => 43,  235 => 42,  232 => 41,  215 => 40,  207 => 34,  201 => 33,  193 => 31,  185 => 29,  182 => 28,  177 => 27,  175 => 26,  172 => 25,  168 => 23,  164 => 21,  162 => 20,  158 => 18,  155 => 17,  152 => 16,  148 => 2,  145 => 13,  143 => 12,  140 => 9,  138 => 8,  136 => 6,  134 => 5,  132 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
        {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
        {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}
        {% set category = uri.query('category') %}
        <article class=\"portfolio\">
            <section role=\"navigation\">
                {% if category is empty %}
                    <h1><a href=\"portfolio\" class=\"ah1 active\">Portfolio</a></h1>
                {% else %}
                    <h1><a href=\"portfolio\" class=\"ah1\">Portfolio</a></h1>
                {% endif %}

                {% set ritems = {'artikelen': \"Artikelen\", 'boeken' : \"Boeken\", 'redactie' : \"Redactie\"}|ksort %}
                {% for key, value in ritems %}
                    {% if key == category %}
                        <a href=\"?category={{ key }}\" class=\"active filterLink\">{{ value }}</a>
                    {% else %}
                        <a href=\"?category={{ key }}\" class=\"filterLink\">{{ value }}</a>
                {% endif %}
                {% endfor %}
                <span class=\"spacer\" aria-hidden=\"true\"></span>
                <input id=\"myInput\" onkeyup=\"searchfunc()\" type=\"text\" placeholder=\"zoeken\"/>
            </section>



            {% for child in collection %}
                {% include 'partials/portfolio_item.html.twig' with {'page':child, 'truncate':true, 'category':category} %}
            {% endfor %}

            {% if config.plugins.pagination.enabled and collection.params.pagination %}
                {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
            {% endif %}



        </article>

        <script src=\"user/themes/redactie-admiraal-webgem/js/script.js\" async></script>

    {% endblock %}

{% endembed %}
", "portfolio.html.twig", "C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\themes\\redactie-admiraal-webgem\\templates\\portfolio.html.twig");
    }
}
