<?php

/* partials/portfolio_item.html.twig */
class __TwigTemplate_debb12b8ba45fb679feb24ade0e6c8f17775641cd772557dff1393103d24d7d7 extends Twig_Template
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
        if (twig_test_empty((isset($context["category"]) ? $context["category"] : null))) {
            // line 2
            echo "    ";
            if ((twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "shape", array())) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "shape", array()) == "standing"))) {
                // line 3
                echo "<section data-role=\"portfolio-item\">
    ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 4
(isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "shape", array()) == "pinned")) {
                // line 5
                echo "    <section data-role=\"portfolio-item\" class=\"pinned\">
        ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 6
(isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "shape", array()) == "rectangle")) {
                // line 7
                echo "        <section  data-role=\"portfolio-item\" class=\"rectangle\">
            ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 8
(isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "shape", array()) == "pinnedRectangle")) {
                // line 9
                echo "            <section  data-role=\"portfolio-item\" class=\"pinned rectangle\">
                ";
            }
            // line 11
            echo "
                ";
            // line 12
            if ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "coverImage", array())), "path", array())) {
                // line 13
                echo "                    <img
                        src=\"";
                // line 14
                echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "coverImage", array())), "path", array());
                echo "\"
                        alt=\"Boek cover, ";
                // line 15
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
                echo "\"
                    >

                ";
            } else {
                // line 19
                echo "                    <img src=\" images/placeholder.png\">
                ";
            }
            // line 21
            echo "
                <div>
                    <h2><a class=\"portfolioheader\" href=\"";
            // line 23
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" data-tags=\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo $context["tag"];
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
            echo "\" >";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
            echo "</a></h2>
                    <p>
                        ";
            // line 25
            echo \Grav\Common\Utils::truncate($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 160);
            echo "
                    </p>
                </div>
            </section>

            ";
        } else {
            // line 31
            echo "                ";
            if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "category", array()) == (isset($context["category"]) ? $context["category"] : null))) {
                // line 32
                echo "                    <section>
                        ";
                // line 33
                if ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "coverImage", array())), "path", array())) {
                    // line 34
                    echo "                            <img
                                src=\"";
                    // line 35
                    echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "coverImage", array())), "path", array());
                    echo "\"
                                alt=\"Boek cover, ";
                    // line 36
                    echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
                    echo "\"
                            >

                        ";
                } else {
                    // line 40
                    echo "                            <img src=\" images/placeholder.png\">
                        ";
                }
                // line 42
                echo "
                        <div>
                            <h2><a href=\"";
                // line 44
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\">";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
                echo "</a></h2>
                            <p>
                                ";
                // line 46
                echo \Grav\Common\Utils::truncate($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 160);
                echo "
                            </p>
                        </div>
                    </section>
                ";
            }
            // line 51
            echo "            ";
        }
    }

    public function getTemplateName()
    {
        return "partials/portfolio_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 51,  134 => 46,  127 => 44,  123 => 42,  119 => 40,  112 => 36,  108 => 35,  105 => 34,  103 => 33,  100 => 32,  97 => 31,  88 => 25,  70 => 23,  66 => 21,  62 => 19,  55 => 15,  51 => 14,  48 => 13,  46 => 12,  43 => 11,  39 => 9,  37 => 8,  34 => 7,  32 => 6,  29 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if category is empty%}
    {% if page.header.custom.shape is empty or page.header.custom.shape == \"standing\" %}
<section data-role=\"portfolio-item\">
    {% elseif page.header.custom.shape == \"pinned\" %}
    <section data-role=\"portfolio-item\" class=\"pinned\">
        {% elseif page.header.custom.shape == \"rectangle\" %}
        <section  data-role=\"portfolio-item\" class=\"rectangle\">
            {% elseif page.header.custom.shape == \"pinnedRectangle\" %}
            <section  data-role=\"portfolio-item\" class=\"pinned rectangle\">
                {% endif %}

                {% if page.header.custom.coverImage|first.path %}
                    <img
                        src=\"{{ page.header.custom.coverImage|first.path }}\"
                        alt=\"Boek cover, {{ page.header.title }}\"
                    >

                {% else %}
                    <img src=\" images/placeholder.png\">
                {% endif %}

                <div>
                    <h2><a class=\"portfolioheader\" href=\"{{ page.url }}\" data-tags=\"{% for tag in page.header.custom.tags %}{{tag}}{% endfor %} {{ page.header.title }}\" >{{ page.header.title }}</a></h2>
                    <p>
                        {{ page.content|truncate(160) }}
                    </p>
                </div>
            </section>

            {% else %}
                {% if page.header.category == category %}
                    <section>
                        {% if page.header.custom.coverImage|first.path %}
                            <img
                                src=\"{{ page.header.custom.coverImage|first.path }}\"
                                alt=\"Boek cover, {{ page.header.title }}\"
                            >

                        {% else %}
                            <img src=\" images/placeholder.png\">
                        {% endif %}

                        <div>
                            <h2><a href=\"{{ page.url }}\">{{ page.header.title }}</a></h2>
                            <p>
                                {{ page.content|truncate(160) }}
                            </p>
                        </div>
                    </section>
                {% endif %}
            {% endif %}
", "partials/portfolio_item.html.twig", "C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\themes\\redactie-admiraal-webgem\\templates\\partials\\portfolio_item.html.twig");
    }
}
