<?php

/* partials/spinning-wheel.html.twig */
class __TwigTemplate_9f2cff2da3ebfe125f1c108cf92f9d134a89f0e7cc01f7ed2ce8f7a3a5a2076c extends Twig_Template
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
        echo "<div class=\"spinning-wheel\" style=\"display: none\">
\t";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOADING"));
        echo " <i class=\"fa fa-spinner fa-spin\"></i>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/spinning-wheel.html.twig";
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
        return new Twig_Source("<div class=\"spinning-wheel\" style=\"display: none\">
\t{{ \"PLUGIN_ADMIN.LOADING\"|tu|e }} <i class=\"fa fa-spinner fa-spin\"></i>
</div>
", "partials/spinning-wheel.html.twig", "C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\spinning-wheel.html.twig");
    }
}
