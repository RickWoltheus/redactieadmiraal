<?php

/* partials/navigation.html.twig */
class __TwigTemplate_77adce2261186ac71bb9d22bbc6074dd2010bb345ddbde3148c78746be0a8fe5 extends Twig_Template
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
        // line 36
        echo "
<ul>
    ";
        // line 38
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 39
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 41
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("selected") : (""));
                // line 43
                echo "
                <a href=\"";
                // line 44
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 45
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 46
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    ";
        }
        // line 51
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 52
            echo "
            <a href=\"";
            // line 53
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 54
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 55
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</ul>

";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div class=\"navigation--desktop\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("selected") : (""));
                // line 5
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 6
                    echo "
                <a href=\"";
                    // line 7
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">

                    ";
                    // line 9
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 10
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>


        ";
                } else {
                    // line 15
                    echo "
            ";
                    // line 16
                    if (($this->getAttribute($context["p"], "title", array()) != "Home")) {
                        // line 17
                        echo "                <a href=\"";
                        echo $this->getAttribute($context["p"], "url", array());
                        echo "\">
                    ";
                        // line 18
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                            echo "<i class=\"fa fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                            echo "\"></i>";
                        }
                        // line 19
                        echo "                    ";
                        echo $this->getAttribute($context["p"], "menu", array());
                        echo "
                </a>
            ";
                    }
                    // line 22
                    echo "

        ";
                }
                // line 25
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "</div>
    <button id=\"hamburgerBut\" aria-label=\"toggle dropdown\">&#9776;</button>
    <div class=\"navigation--hamburger\">
        <a href=\"schrijfwerk.html\">Schrijfwerk</a>
        <a href=\"speeches.html\" class=\"active\">Speeches</a>
        <a href=\"uitgeverij.html\">Uitgeverij</a>
        <a href=\"portfolio.html\">Portfolio</a>
        <a href=\"contact.html\">Contact</a>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 26,  177 => 25,  172 => 22,  165 => 19,  159 => 18,  154 => 17,  152 => 16,  149 => 15,  140 => 10,  134 => 9,  129 => 7,  126 => 6,  123 => 5,  120 => 4,  116 => 3,  113 => 2,  101 => 1,  95 => 59,  84 => 55,  78 => 54,  74 => 53,  71 => 52,  66 => 51,  63 => 50,  52 => 46,  46 => 45,  42 => 44,  39 => 43,  36 => 42,  31 => 41,  25 => 39,  23 => 38,  19 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
<div class=\"navigation--desktop\">
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
        {% if p.children.visible.count > 0 %}

                <a href=\"{{ p.url }}\">

                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>


        {% else %}

            {% if p.title != 'Home' %}
                <a href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
            {% endif %}


        {% endif %}
    {% endfor %}
</div>
    <button id=\"hamburgerBut\" aria-label=\"toggle dropdown\">&#9776;</button>
    <div class=\"navigation--hamburger\">
        <a href=\"schrijfwerk.html\">Schrijfwerk</a>
        <a href=\"speeches.html\" class=\"active\">Speeches</a>
        <a href=\"uitgeverij.html\">Uitgeverij</a>
        <a href=\"portfolio.html\">Portfolio</a>
        <a href=\"contact.html\">Contact</a>
    </div>
{% endmacro %}

<ul>
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}

                <a href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>

        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}

            <a href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>

    {% endfor %}
</ul>

", "partials/navigation.html.twig", "C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\themes\\redactie-admiraal-webgem\\templates\\partials\\navigation.html.twig");
    }
}
