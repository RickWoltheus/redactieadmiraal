<?php

/* partials/nav.html.twig */
class __TwigTemplate_b4c536d8a75e20ae4efa1191229c997ae569c1e103c8f11ac205324cc0ffb5c9 extends Twig_Template
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
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.login", 1 => "admin.super"))) {
            // line 2
            echo "    <nav id=\"admin-sidebar\" data-quickopen=\"";
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "sidebar", array()), "activate", array()) == "hover")) ? ("true") : ("false"));
            echo "\" data-quickopen-delay=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "sidebar", array()), "hover_delay", array()), "html", null, true);
            echo "\">




        ";
            // line 7
            $this->loadTemplate("partials/nav-user-details.html.twig", "partials/nav.html.twig", 7)->display($context);
            // line 8
            echo "
        ";
            // line 9
            $this->loadTemplate("partials/nav-quick-tray.html.twig", "partials/nav.html.twig", 9)->display($context);
            // line 10
            echo "
        <div class=\"admin-menu-wrapper\">
            <ul id=\"admin-menu\">
                <li class=\"";
            // line 13
            echo ((((isset($context["location"]) ? $context["location"] : null) == "dashboard")) ? ("selected") : (""));
            echo "\">
                    <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-th\"></i><em>Statistieken</em></a>
                </li>
                ";
            // line 16
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration", 1 => "admin.super"))) {
                // line 17
                echo "                    <li class=\"";
                echo ((((((isset($context["location"]) ? $context["location"] : null) == "system") || ((isset($context["location"]) ? $context["location"] : null) == "site")) || ((isset($context["location"]) ? $context["location"] : null) == "config"))) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/config/system\"><i class=\"fa fa-fw fa-wrench\"></i><em>Configuratie</em></a>
                    </li>
                ";
            }
            // line 21
            echo "                ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.pages", 1 => "admin.super"))) {
                // line 22
                echo "                    <li class=\"";
                echo ((((isset($context["location"]) ? $context["location"] : null) == "pages")) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/pages\">
                            <i class=\"fa fa-fw fa-file-text-o\"></i>
                            <em>Pagina's</em>
                            <span class=\"badges\">
                                <span class=\"badge count\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "pagesCount", array()), "html", null, true);
                echo "</span>
                            </span>
                        </a>
                    </li>
                ";
            }
            // line 32
            echo "                ";
            if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_nav", array())) {
                // line 33
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_nav", array()));
                foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                    // line 34
                    echo "                        ";
                    if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(((($this->getAttribute($context["item"], "authorize", array(), "any", true, true) && twig_test_iterable($this->getAttribute($context["item"], "authorize", array())))) ? ($this->getAttribute($context["item"], "authorize", array())) : (array(0 => (($this->getAttribute($context["item"], "authorize", array())) ? ($this->getAttribute($context["item"], "authorize", array())) : (("admin." . (($this->getAttribute($context["item"], "location", array())) ? ($this->getAttribute($context["item"], "location", array())) : ($this->getAttribute($context["item"], "route", array())))))), 1 => "admin.super"))))) {
                        // line 35
                        echo "                            <li class=\"";
                        echo ((((isset($context["location"]) ? $context["location"] : null) == (($this->getAttribute($context["item"], "location", array())) ? ($this->getAttribute($context["item"], "location", array())) : ($this->getAttribute($context["item"], "route", array()))))) ? ("selected") : (""));
                        echo "\">
                                <a href=\"";
                        // line 36
                        echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "route", array())) ? ($this->getAttribute($context["item"], "route", array())) : ($this->getAttribute($context["item"], "location", array()))), "html", null, true);
                        echo "\">
                                    <i class=\"fa fa-fw ";
                        // line 37
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                        echo "\"></i>
                                    <em>";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["label"]), "html", null, true);
                        echo "</em>
                                    ";
                        // line 39
                        if ($this->getAttribute($context["item"], "badge", array())) {
                            // line 40
                            echo "                                    <span class=\"badges ";
                            if ($this->getAttribute($this->getAttribute($context["item"], "badge", array(), "any", false, true), "updates", array(), "any", true, true)) {
                                echo "with-updates";
                            }
                            echo "\">
                                        ";
                            // line 41
                            if ($this->getAttribute($this->getAttribute($context["item"], "badge", array(), "any", false, true), "updates", array(), "any", true, true)) {
                                echo "<span class=\"badge updates\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "badge", array()), "updates", array()), "html", null, true);
                                echo "</span>";
                            }
                            // line 42
                            echo "                                        <span class=\"badge count\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "badge", array()), "count", array()), "html", null, true);
                            echo "</span>
                                    </span>
                                    ";
                        }
                        // line 45
                        echo "                                </a>
                            </li>
                        ";
                    }
                    // line 48
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                ";
            }
            // line 50
            echo "


                ";
            // line 53
            try {
                $this->loadTemplate("partials/nav-pro.html.twig", "partials/nav.html.twig", 53)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 54
            echo "
                <li>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "logout"), 1 => "logout-form", 2 => "logout-nonce"), "method"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-sign-out\"></i><em>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT"), "html", null, true);
            echo "</em></a>
                </li>
            </ul>
        </div>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 56,  167 => 54,  160 => 53,  155 => 50,  152 => 49,  146 => 48,  141 => 45,  134 => 42,  128 => 41,  121 => 40,  119 => 39,  115 => 38,  111 => 37,  105 => 36,  100 => 35,  97 => 34,  92 => 33,  89 => 32,  81 => 27,  74 => 23,  69 => 22,  66 => 21,  60 => 18,  55 => 17,  53 => 16,  48 => 14,  44 => 13,  39 => 10,  37 => 9,  34 => 8,  32 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if authorize(['admin.login', 'admin.super']) %}
    <nav id=\"admin-sidebar\" data-quickopen=\"{{ config.plugins.admin.sidebar.activate == 'hover' ? 'true' : 'false' }}\" data-quickopen-delay=\"{{ config.plugins.admin.sidebar.hover_delay }}\">




        {% include 'partials/nav-user-details.html.twig' %}

        {% include 'partials/nav-quick-tray.html.twig' %}

        <div class=\"admin-menu-wrapper\">
            <ul id=\"admin-menu\">
                <li class=\"{{ (location == 'dashboard') ? 'selected' : '' }}\">
                    <a href=\"{{ base_url_relative }}\"><i class=\"fa fa-fw fa-th\"></i><em>Statistieken</em></a>
                </li>
                {% if authorize(['admin.configuration', 'admin.super']) %}
                    <li class=\"{{ (location == 'system' or location == 'site' or location == 'config') ? 'selected' : '' }}\">
                        <a href=\"{{ base_url_relative }}/config/system\"><i class=\"fa fa-fw fa-wrench\"></i><em>Configuratie</em></a>
                    </li>
                {% endif %}
                {% if authorize(['admin.pages', 'admin.super']) %}
                    <li class=\"{{ (location == 'pages') ? 'selected' : '' }}\">
                        <a href=\"{{ base_url_relative }}/pages\">
                            <i class=\"fa fa-fw fa-file-text-o\"></i>
                            <em>Pagina's</em>
                            <span class=\"badges\">
                                <span class=\"badge count\">{{ admin.pagesCount }}</span>
                            </span>
                        </a>
                    </li>
                {% endif %}
                {% if grav.twig.plugins_hooked_nav %}
                    {% for label, item in grav.twig.plugins_hooked_nav %}
                        {% if authorize((item.authorize is defined and item.authorize is iterable) ? item.authorize : [item.authorize ?: ('admin.' ~ (item.location ?: item.route)), 'admin.super']) %}
                            <li class=\"{{ (location == (item.location ?: item.route)) ? 'selected' : '' }}\">
                                <a href=\"{{ base_url_relative }}/{{ item.route ?: item.location }}\">
                                    <i class=\"fa fa-fw {{ item.icon }}\"></i>
                                    <em>{{ label|tu }}</em>
                                    {% if item.badge %}
                                    <span class=\"badges {% if item.badge.updates is defined %}with-updates{% endif %}\">
                                        {% if item.badge.updates is defined %}<span class=\"badge updates\">{{ item.badge.updates }}</span>{% endif %}
                                        <span class=\"badge count\">{{ item.badge.count }}</span>
                                    </span>
                                    {% endif %}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                {% endif %}



                {% include 'partials/nav-pro.html.twig' ignore missing %}

                <li>
                    <a href=\"{{ uri.addNonce(base_url_relative ~ '/task' ~ config.system.param_sep ~ 'logout', 'logout-form', 'logout-nonce') }}\"><i class=\"fa fa-fw fa-sign-out\"></i><em>{{ \"PLUGIN_ADMIN.LOGOUT\"|tu }}</em></a>
                </li>
            </ul>
        </div>
    </nav>
{% endif %}
", "partials/nav.html.twig", "C:\\wamp64\\www\\school\\jaar3\\redactieadmiraal\\grav\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\nav.html.twig");
    }
}
