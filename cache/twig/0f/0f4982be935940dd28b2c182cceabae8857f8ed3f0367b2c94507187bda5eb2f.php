<?php

/* partials/base.html.twig */
class __TwigTemplate_784a87ce1c8e9ea1da04729afbe5be55b8de651ba0e06a46fbb2160791a6904f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        // line 15
        echo "
    ";
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        // line 22
        echo "
    ";
        // line 24
        echo "        ";
        // line 25
        echo "    ";
        // line 26
        echo "    ";
        // line 27
        echo "
";
        // line 31
        echo "
";
        // line 33
        echo "    ";
        // line 34
        echo "        ";
        // line 35
        echo "            ";
        // line 36
        echo "                ";
        // line 37
        echo "                ";
        // line 38
        echo "            ";
        // line 39
        echo "            ";
        // line 40
        echo "            ";
        // line 41
        echo "                ";
        // line 42
        echo "            ";
        // line 43
        echo "            ";
        // line 44
        echo "        ";
        // line 45
        echo "    ";
        // line 47
        echo "
";
        // line 49
        echo "    ";
        // line 50
        echo "        ";
        // line 51
        echo "        ";
        // line 52
        echo "        ";
        // line 53
        echo "    ";
        // line 55
        echo "
";
        // line 57
        echo "    ";
        // line 58
        echo "        ";
        // line 59
        echo "            ";
        // line 60
        echo "        ";
        // line 61
        echo "    ";
        // line 63
        echo "


";
        // line 68
        echo "


";
        // line 71
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 72
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 73
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>
    ";
        // line 75
        $this->displayBlock('head', $context, $blocks);
        // line 94
        echo "</head>

<body id=\"top\" class=\"";
        // line 96
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
";
        // line 97
        $this->displayBlock('header', $context, $blocks);
        // line 105
        echo "
<header role=\"banner\">

</header>

";
        // line 110
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "
</body>
</html>
";
    }

    // line 75
    public function block_head($context, array $blocks = array())
    {
        // line 76
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    ";
        // line 79
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 79)->display($context);
        // line 80
        echo "    <title>";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
        ";
        // line 81
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 86
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

    ";
    }

    // line 81
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 82
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600", 1 => 100), "method");
        // line 83
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "https://fonts.googleapis.com/css?family=Source+Code+Pro:400,700", 1 => 99), "method");
        // line 84
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css", 1 => 98), "method");
        // line 85
        echo "        ";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/script.js", 1 => 100), "method");
        // line 90
        echo "        ";
    }

    // line 97
    public function block_header($context, array $blocks = array())
    {
        // line 98
        echo "    <nav class=\"navigation\">
        <a href=\"";
        // line 99
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\" class=\"logo\">Redactie Admiraal</a>
    ";
        // line 100
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 103
        echo "    </nav>
";
    }

    // line 100
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 101
        echo "        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 101)->display($context);
        // line 102
        echo "    ";
    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        // line 111
        echo "<main role=\"main\">
";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 113
        echo "</main>
";
    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 112,  268 => 113,  266 => 112,  263 => 111,  260 => 110,  256 => 102,  253 => 101,  250 => 100,  245 => 103,  243 => 100,  239 => 99,  236 => 98,  233 => 97,  229 => 90,  226 => 89,  223 => 88,  219 => 85,  216 => 84,  213 => 83,  210 => 82,  207 => 81,  199 => 91,  197 => 88,  191 => 86,  189 => 81,  180 => 80,  178 => 79,  173 => 76,  170 => 75,  163 => 115,  161 => 110,  154 => 105,  152 => 97,  148 => 96,  144 => 94,  142 => 75,  137 => 73,  134 => 72,  132 => 71,  127 => 68,  122 => 63,  120 => 61,  118 => 60,  116 => 59,  114 => 58,  112 => 57,  109 => 55,  107 => 53,  105 => 52,  103 => 51,  101 => 50,  99 => 49,  96 => 47,  94 => 45,  92 => 44,  90 => 43,  88 => 42,  86 => 41,  84 => 40,  82 => 39,  80 => 38,  78 => 37,  76 => 36,  74 => 35,  72 => 34,  70 => 33,  67 => 31,  64 => 27,  62 => 26,  60 => 25,  58 => 24,  55 => 22,  53 => 21,  51 => 20,  49 => 19,  47 => 18,  45 => 17,  42 => 15,  40 => 14,  37 => 12,  35 => 11,  33 => 10,  30 => 8,  28 => 7,  26 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% set theme_config = attribute(config.themes, config.system.pages.theme) %}#}
{#<!DOCTYPE html>#}
{#<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">#}
{#<head>#}
{#{% block head %}#}
    {#<meta charset=\"utf-8\" />#}
    {#<title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>#}

    {#<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">#}
    {#<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">#}
    {#{% include 'partials/metadata.html.twig' %}#}

    {#<link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />#}
    {#<link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />#}

    {#{% block stylesheets %}#}
        {#{% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}#}
        {#{% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}#}
        {#{% do assets.addCss('theme://css/custom.css', 98) %}#}
    {#{% endblock %}#}
    {#{{ assets.css() }}#}

    {#{% block javascripts %}#}
        {#{% do assets.addJs('jquery', 100) %}#}
    {#{% endblock %}#}
    {#{{ assets.js() }}#}

{#{% endblock head%}#}
{#</head>#}
{#<body id=\"top\" class=\"{{ page.header.body_classes }}\">#}

{#{% block header %}#}
    {#<div class=\"header\">#}
        {#<div class=\"wrapper padding\">#}
            {#<a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">#}
                {#<i class=\"fa fa-rebel\"></i>#}
                {#{{ config.site.title }}#}
            {#</a>#}
            {#{% block header_navigation %}#}
            {#<nav class=\"main-nav\">#}
                {#{% include 'partials/navigation.html.twig' %}#}
            {#</nav>#}
            {#{% endblock %}#}
        {#</div>#}
    {#</div>#}
{#{% endblock %}#}

{#{% block body %}#}
    {#<section id=\"body\">#}
        {#<div class=\"wrapper padding\">#}
        {#{% block content %}{% endblock %}#}
        {#</div>#}
    {#</section>#}
{#{% endblock %}#}

{#{% block footer %}#}
    {#<div class=\"footer text-center\">#}
        {#<div class=\"wrapper padding\">#}
            {#<p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>#}
        {#</div>#}
    {#</div>#}
{#{% endblock %}#}



{#</body>#}
{#</html>#}



{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
    {% block head %}
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    {% include 'partials/metadata.html.twig' %}
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        {% block stylesheets %}
            {% do assets.addCss('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600', 100) %}
            {% do assets.addCss('https://fonts.googleapis.com/css?family=Source+Code+Pro:400,700', 99) %}
            {% do assets.addCss('theme://css/style.css', 98) %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.addJs('theme://js/script.js', 100) %}
        {% endblock %}
        {{ assets.js() }}

    {% endblock head %}
</head>

<body id=\"top\" class=\"{{ page.header.body_classes }}\">
{% block header %}
    <nav class=\"navigation\">
        <a href=\"{{ base_url == '' ? '/' : base_url }}\" class=\"logo\">Redactie Admiraal</a>
    {% block header_navigation %}
        {% include 'partials/navigation.html.twig' %}
    {% endblock %}
    </nav>
{% endblock %}

<header role=\"banner\">

</header>

{% block body %}
<main role=\"main\">
{% block content %}{% endblock %}
</main>
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\themes\\redactie-admiraal-webgem\\templates\\partials\\base.html.twig");
    }
}
