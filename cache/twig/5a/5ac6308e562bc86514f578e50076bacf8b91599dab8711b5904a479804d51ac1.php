<?php

/* {{ config.plugins.seo.musicalbum ? 'true' : 'false' }} */
class __TwigTemplate_4a34ae884705eb8a7516e8c5facd58424c093a1cc9bf9fd6027a498245acf9f7 extends Twig_Template
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
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "seo", array()), "musicalbum", array())) ? ("true") : ("false"));
    }

    public function getTemplateName()
    {
        return "{{ config.plugins.seo.musicalbum ? 'true' : 'false' }}";
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
        return new Twig_Source("{{ config.plugins.seo.musicalbum ? 'true' : 'false' }}", "{{ config.plugins.seo.musicalbum ? 'true' : 'false' }}", "");
    }
}
