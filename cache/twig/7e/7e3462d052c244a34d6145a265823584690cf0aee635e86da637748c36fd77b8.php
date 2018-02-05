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
        // line 1
        echo "



    <button id=\"hamburgerBut\" aria-label=\"toggle dropdown\">&#9776;</button>
    <div class=\"navigation--hamburger\">
        <a href=\"schrijfwerk.html\">Schrijfwerk</a>
        <a href=\"speeches.html\" class=\"active\">Speeches</a>
        <a href=\"uitgeverij.html\">Uitgeverij</a>
        <a href=\"portfolio.html\">Portfolio</a>
        <a href=\"contact.html\">Contact</a>
    </div>

<div class=\"navigation--desktop\">
    <ul>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "            ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 19
            echo "
                ";
            // line 20
            if (($this->getAttribute($context["page"], "title", array()) != "Home")) {
                // line 21
                echo "                <a class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\" href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 22
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
                ";
            }
            // line 25
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</ul>
    </div>


";
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
        return array (  69 => 27,  62 => 25,  56 => 22,  49 => 21,  47 => 20,  44 => 19,  41 => 18,  37 => 17,  19 => 1,);
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



    <button id=\"hamburgerBut\" aria-label=\"toggle dropdown\">&#9776;</button>
    <div class=\"navigation--hamburger\">
        <a href=\"schrijfwerk.html\">Schrijfwerk</a>
        <a href=\"speeches.html\" class=\"active\">Speeches</a>
        <a href=\"uitgeverij.html\">Uitgeverij</a>
        <a href=\"portfolio.html\">Portfolio</a>
        <a href=\"contact.html\">Contact</a>
    </div>

<div class=\"navigation--desktop\">
    <ul>

        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}

                {% if page.title != \"Home\" %}
                <a class=\"{{ current_page }}\" href=\"{{ page.url }}\">
                    {{ page.menu }}
                </a>
                {% endif %}

        {% endfor %}
</ul>
    </div>


", "partials/navigation.html.twig", "C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\themes\\redactie-admiraal-webgem\\templates\\partials\\navigation.html.twig");
    }
}
