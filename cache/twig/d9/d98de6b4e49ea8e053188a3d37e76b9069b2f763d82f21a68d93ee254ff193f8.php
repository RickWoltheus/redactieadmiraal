<?php

/* contact.html.twig */
class __TwigTemplate_316ae8e8d786665495be2eb82c16065d6be6e193aae9dfc72b7344ce56a11f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "contact.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <article class=\"contact\">
        <h1>Contact</h1>
        <div class=\"contact--trudy\">
            <img
                src=\"";
        // line 7
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "profileImg", array())), "path", array());
        echo "\"
                srcset=\"\"
                sizes=\"\"
                alt=\"Trudy admiraal.\"
            >
        </div>
        <div class=\"contact--aside\">
            <img src=\"";
        // line 14
        echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "card", array())), "path", array());
        echo "\" alt=\"Redactie Admiraal, visitekaartje.\">
            <div class=\"contact--aside__innerwrap\">
                ";
        // line 16
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
                <div class=\"contact--aside__social\">
                    <a href=\"";
        // line 18
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "linkedin", array());
        echo "\" aria-label=\"naar LinkedIn.\"><img src=\"user/themes/redactie-admiraal-webgem/images/In-2CRev-128px-TM.png\" alt=\"LinkedIn logo.\"></a>
                    <a href=\"";
        // line 19
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "twitter", array());
        echo "\" aria-label=\"naar Twitter.\"><img src=\"user/themes/redactie-admiraal-webgem/images/Twitter_Logo_WhiteOnBlue.svg\" alt=\"Twitter logo.\"></a>
                    <a href=\"";
        // line 20
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "custom", array()), "facebook", array());
        echo "\" aria-label=\"naar Facebook.\"><img src=\"user/themes/redactie-admiraal-webgem/images/facebook.png\" alt=\"Facebook logo.\"></a>
                </div>
            </div>
        </div>
    </article>
    <script src=\"user/themes/redactie-admiraal-webgem/js/script.js\" async></script>
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  61 => 19,  57 => 18,  52 => 16,  47 => 14,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
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
{% block content %}
    <article class=\"contact\">
        <h1>Contact</h1>
        <div class=\"contact--trudy\">
            <img
                src=\"{{ page.header.custom.profileImg|first.path }}\"
                srcset=\"\"
                sizes=\"\"
                alt=\"Trudy admiraal.\"
            >
        </div>
        <div class=\"contact--aside\">
            <img src=\"{{ page.header.custom.card|first.path }}\" alt=\"Redactie Admiraal, visitekaartje.\">
            <div class=\"contact--aside__innerwrap\">
                {{ page.content }}
                <div class=\"contact--aside__social\">
                    <a href=\"{{ page.header.custom.linkedin }}\" aria-label=\"naar LinkedIn.\"><img src=\"user/themes/redactie-admiraal-webgem/images/In-2CRev-128px-TM.png\" alt=\"LinkedIn logo.\"></a>
                    <a href=\"{{ page.header.custom.twitter }}\" aria-label=\"naar Twitter.\"><img src=\"user/themes/redactie-admiraal-webgem/images/Twitter_Logo_WhiteOnBlue.svg\" alt=\"Twitter logo.\"></a>
                    <a href=\"{{ page.header.custom.facebook }}\" aria-label=\"naar Facebook.\"><img src=\"user/themes/redactie-admiraal-webgem/images/facebook.png\" alt=\"Facebook logo.\"></a>
                </div>
            </div>
        </div>
    </article>
    <script src=\"user/themes/redactie-admiraal-webgem/js/script.js\" async></script>
{% endblock %}
", "contact.html.twig", "C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\themes\\redactie-admiraal-webgem\\templates\\contact.html.twig");
    }
}
