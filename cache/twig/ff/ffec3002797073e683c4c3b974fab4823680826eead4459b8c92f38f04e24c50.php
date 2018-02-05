<?php

/* {{ config.plugins.seo.musicevent ? 'true' : 'false' }} */
class __TwigTemplate_53f87b757d994dd7c3b4fb71632c4e980a9b6346f0660eda2e37347753192df1 extends Twig_Template
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
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "seo", array()), "musicevent", array())) ? ("true") : ("false"));
    }

    public function getTemplateName()
    {
        return "{{ config.plugins.seo.musicevent ? 'true' : 'false' }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ config.plugins.seo.musicevent ? 'true' : 'false' }}", "{{ config.plugins.seo.musicevent ? 'true' : 'false' }}", "");
    }
}
