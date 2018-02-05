<?php

/* home.html.twig */
class __TwigTemplate_8b6c1da4ed823f0cf6ab8a00541da440a09e5d248cae50093bd40023a3f8d145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        echo "    <figure class=\"home--drawing\">
        <img
            src=\"links/homepage_tekening.jpg\"
            srcset=\"
          user/themes/redactie-admiraal-webgem/images/homepage_tekening@0,25x.jpg 268w,
          user/themes/redactie-admiraal-webgem/images/homepage_tekening@0,5x.jpg 536w,
          user/themes/redactie-admiraal-webgem/images/homepage_tekening@0,75x.jpg 804w,
          user/themes/redactie-admiraal-webgem/images/homepage_tekening.jpg 1072w,
          user/themes/redactie-admiraal-webgem/images/homepage_tekening@2x.jpg 2144w,
        \"
            sizes=\"
          (max-width: 800px) 70vw,
          (max-width: 1024px) 350px,
          (max-width: 1281px) 400px,
          600px
        \"
            alt=\"Tekening van Trudy Admiraal's bureau.\"
        >
        <figcaption>Illustratie: Animways.com</figcaption>
    </figure>
    <article class=\"home\">
        <p>
            ";
        // line 25
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </p>
        <a role=\"button\" href=\"schrijfwerk\">Naar Schrijfwerk</a>
    </article>
    <script src=\"user/themes/redactie-admiraal-webgem/js/script.js\" async></script>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 25,  31 => 3,  28 => 2,  11 => 1,);
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
    <figure class=\"home--drawing\">
        <img
            src=\"links/homepage_tekening.jpg\"
            srcset=\"
          user/themes/redactie-admiraal-webgem/images/homepage_tekening@0,25x.jpg 268w,
          user/themes/redactie-admiraal-webgem/images/homepage_tekening@0,5x.jpg 536w,
          user/themes/redactie-admiraal-webgem/images/homepage_tekening@0,75x.jpg 804w,
          user/themes/redactie-admiraal-webgem/images/homepage_tekening.jpg 1072w,
          user/themes/redactie-admiraal-webgem/images/homepage_tekening@2x.jpg 2144w,
        \"
            sizes=\"
          (max-width: 800px) 70vw,
          (max-width: 1024px) 350px,
          (max-width: 1281px) 400px,
          600px
        \"
            alt=\"Tekening van Trudy Admiraal's bureau.\"
        >
        <figcaption>Illustratie: Animways.com</figcaption>
    </figure>
    <article class=\"home\">
        <p>
            {{ page.content }}
        </p>
        <a role=\"button\" href=\"schrijfwerk\">Naar Schrijfwerk</a>
    </article>
    <script src=\"user/themes/redactie-admiraal-webgem/js/script.js\" async></script>
{% endblock %}
", "home.html.twig", "C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\themes\\redactie-admiraal-webgem\\templates\\home.html.twig");
    }
}
