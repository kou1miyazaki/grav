<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/themes-details.html.twig */
class __TwigTemplate_3a92c88e38cbb0a972231469125f37c7afdabd52b976796c18c74f5502420d4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["gpm"] = $this->getAttribute(($context["admin"] ?? null), "gpm", [], "method");
        // line 2
        $context["installed"] = $this->getAttribute(($context["gpm"] ?? null), "isThemeInstalled", [0 => $this->getAttribute(($context["admin"] ?? null), "route", [])], "method");
        // line 3
        $context["isTestingRelease"] = $this->getAttribute(($context["gpm"] ?? null), "isTestingRelease", [0 => $this->getAttribute(($context["plugin"] ?? null), "slug", [])], "method");
        // line 4
        echo "
<div class=\"grav-update theme\" data-gpm-theme=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "route", []), "html", null, true);
        echo "\">
</div>

<h1>
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "name", []));
        echo "
    ";
        // line 10
        if ($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", [0 => ($context["theme"] ?? null)], "method")) {
            // line 11
            echo "        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_THEME"), "html", null, true);
            echo "\"></i></span></small>
    ";
        }
        // line 13
        echo "    ";
        if ($this->getAttribute(($context["admin"] ?? null), "isPremiumProduct", [0 => ($context["theme"] ?? null)], "method")) {
            // line 14
            echo "        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
            echo "</span></small>
    ";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute(($context["theme"] ?? null), "symlink", [])) {
            // line 17
            echo "    <small class=\"hint--bottom\"  data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED"), "html", null, true);
            echo "\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    ";
        }
        // line 21
        echo "    <small>";
        (($this->getAttribute(($context["theme"] ?? null), "version", [])) ? (print (twig_escape_filter($this->env, ("v" . twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "version", []))), "html", null, true))) : (print ("")));
        echo "</small>
    ";
        // line 22
        if (($context["isTestingRelease"] ?? null)) {
            echo "<span class=\"gpm-testing\">test release</span>";
        }
        // line 23
        echo "</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "icon", []), "html", null, true);
        echo "\"></i>
    <table>
        ";
        // line 27
        if ($this->getAttribute(($context["theme"] ?? null), "version", [])) {
            // line 28
            echo "        <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VERSION"), "html", null, true);
            echo ":</td>
            <td class=\"double\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "version", []), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 33
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "author", [])) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AUTHOR"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                    ";
            // line 37
            if ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "url", [])) {
                // line 38
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "url", []), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "name", []), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 40
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "name", []), "html", null, true);
                echo "
                    ";
            }
            // line 42
            echo "                    ";
            if ($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", [])) {
                // line 43
                echo "                         - <a href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["theme"] ?? null), "author", []), "email", []), "html", null, true);
                echo "</a>
                    ";
            }
            // line 45
            echo "                </td>
            </tr>
        ";
        }
        // line 48
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "homepage", [])) {
            // line 49
            echo "        <tr>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.HOMEPAGE"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "homepage", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "homepage", []), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 54
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "demo", [])) {
            // line 55
            echo "        <tr>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEMO"), "html", null, true);
            echo ":</td>
            <td class=\"double\"><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "demo", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "demo", []), "html", null, true);
            echo "</a></td>
        </tr>
        ";
        }
        // line 60
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "bugs", [])) {
            // line 61
            echo "            <tr>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BUG_TRACKER"), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "bugs", []), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "bugs", []), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 66
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "keywords", [])) {
            // line 67
            echo "            <tr>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.KEYWORDS"), "html", null, true);
            echo ":</td>
                <td class=\"double\">
                   ";
            // line 70
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["theme"] ?? null), "keywords", []), ", "), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        // line 74
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "license", [])) {
            // line 75
            echo "            <tr>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LICENSE"), "html", null, true);
            echo ":</td>
                <td class=\"double\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "license", []), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 80
        echo "        ";
        if ($this->getAttribute(($context["theme"] ?? null), "description", [])) {
            // line 81
            echo "            <tr>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DESCRIPTION"), "html", null, true);
            echo ":</td>
                <td class=\"double\">";
            // line 83
            echo $this->getAttribute(($context["theme"] ?? null), "description_html", []);
            echo "</td>
            </tr>
        ";
        }
        // line 86
        echo "
        ";
        // line 87
        if (($this->getAttribute(($context["theme"] ?? null), "readme", []) || $this->getAttribute(($context["theme"] ?? null), "homepage", []))) {
            // line 88
            echo "            ";
            $context["readme_link"] = (($this->getAttribute(($context["theme"] ?? null), "readme", [])) ? ($this->getAttribute(($context["theme"] ?? null), "readme", [])) : (($this->getAttribute(($context["theme"] ?? null), "homepage", []) . "/blob/master/README.md")));
            // line 89
            echo "            <tr>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.README"), "html", null, true);
            echo ":</td>
                <td class=\"double\"><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, ($context["readme_link"] ?? null), "html", null, true);
            echo "</a></td>
            </tr>
        ";
        }
        // line 94
        echo "    </table>
</div>

";
        // line 97
        if (($context["installed"] ?? null)) {
            // line 98
            echo "    ";
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("themes/" . $this->getAttribute(($context["admin"] ?? null), "route", []))], "method");
            // line 99
            echo "    ";
            $this->loadTemplate("partials/blueprints.html.twig", "partials/themes-details.html.twig", 99)->display(twig_array_merge($context, ["data" => ($context["data"] ?? null), "blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", [])]));
            // line 100
            echo "
    ";
            // line 101
            if (($this->getAttribute(($context["config"] ?? null), "get", [0 => "system.pages.theme"], "method") != $this->getAttribute(($context["admin"] ?? null), "route", []))) {
                // line 102
                echo "    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        ";
                // line 104
                if ( !$this->getAttribute(($context["theme"] ?? null), "symlink", [])) {
                    // line 105
                    echo "            <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REINSTALL_THEME"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 107
                echo "        <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.REMOVE_THEME"), "html", null, true);
                echo "</a>
    </div>
    ";
            }
        } else {
            // line 111
            echo "    <div class=\"button-bar success\">
        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute(($context["theme"] ?? null), "slug", []), "html", null, true);
            echo "\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL_THEME"), "html", null, true);
            echo "</a>
    </div>
";
        }
        // line 115
        echo "
";
        // line 116
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/themes-details.html.twig", 116)->display($context);
        // line 117
        $this->loadTemplate("partials/modal-remove-package.html.twig", "partials/themes-details.html.twig", 117)->display(twig_array_merge($context, ["type" => "theme", "package" => ($context["theme"] ?? null)]));
        // line 118
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/themes-details.html.twig", 118)->display(twig_array_merge($context, ["type" => "theme"]));
        // line 119
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/themes-details.html.twig", 119)->display(twig_array_merge($context, ["type" => "theme"]));
        // line 120
        $this->loadTemplate("partials/modal-reinstall-package.html.twig", "partials/themes-details.html.twig", 120)->display(twig_array_merge($context, ["type" => "theme", "package" => ($context["theme"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "partials/themes-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 120,  339 => 119,  337 => 118,  335 => 117,  333 => 116,  330 => 115,  322 => 112,  319 => 111,  311 => 107,  305 => 105,  303 => 104,  299 => 102,  297 => 101,  294 => 100,  291 => 99,  288 => 98,  286 => 97,  281 => 94,  273 => 91,  269 => 90,  266 => 89,  263 => 88,  261 => 87,  258 => 86,  252 => 83,  248 => 82,  245 => 81,  242 => 80,  236 => 77,  232 => 76,  229 => 75,  226 => 74,  219 => 70,  214 => 68,  211 => 67,  208 => 66,  200 => 63,  196 => 62,  193 => 61,  190 => 60,  182 => 57,  178 => 56,  175 => 55,  172 => 54,  164 => 51,  160 => 50,  157 => 49,  154 => 48,  149 => 45,  141 => 43,  138 => 42,  132 => 40,  124 => 38,  122 => 37,  117 => 35,  114 => 34,  111 => 33,  105 => 30,  101 => 29,  98 => 28,  96 => 27,  91 => 25,  87 => 23,  83 => 22,  78 => 21,  70 => 17,  67 => 16,  61 => 14,  58 => 13,  52 => 11,  50 => 10,  46 => 9,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set gpm = admin.gpm() %}
{% set installed = gpm.isThemeInstalled(admin.route) %}
{% set isTestingRelease = gpm.isTestingRelease(plugin.slug) %}

<div class=\"grav-update theme\" data-gpm-theme=\"{{ admin.route }}\">
</div>

<h1>
    {{ theme.name|e }}
    {% if admin.isTeamGrav(theme) %}
        <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"{{ \"PLUGIN_ADMIN.GRAV_OFFICIAL_THEME\"|tu }}\"></i></span></small>
    {% endif %}
    {% if admin.isPremiumProduct(theme) %}
        <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> {{ \"PLUGIN_ADMIN.PREMIUM_PRODUCT\"|tu }}</span></small>
    {% endif %}
    {% if theme.symlink %}
    <small class=\"hint--bottom\"  data-hint=\"{{ \"PLUGIN_ADMIN.THEME_SYMBOLICALLY_LINKED\"|tu }}\">
        <i class=\"fa fa-fw fa-link\"></i>
    </small>
    {% endif %}
    <small>{{ theme.version ? 'v' ~ theme.version|e }}</small>
    {% if isTestingRelease %}<span class=\"gpm-testing\">test release</span>{% endif %}
</h1>
<div class=\"gpm-item-info\">
    <i class=\"gpm-item-icon fa fa-fw fa-{{  theme.icon }}\"></i>
    <table>
        {% if theme.version %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.VERSION\"|tu }}:</td>
            <td class=\"double\">{{ theme.version }}</td>
        </tr>
        {% endif %}
        {% if theme.author %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.AUTHOR\"|tu }}:</td>
                <td class=\"double\">
                    {% if theme.author.url %}
                        <a href=\"{{ theme.author.url }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.author.name }}</a>
                    {% else %}
                        {{ theme.author.name }}
                    {% endif %}
                    {% if theme.author.email %}
                         - <a href=\"mailto:{{ theme.author.email }}\">{{ theme.author.email }}</a>
                    {% endif %}
                </td>
            </tr>
        {% endif %}
        {% if theme.homepage %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.HOMEPAGE\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ theme.homepage }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.homepage }}</a></td>
        </tr>
        {% endif %}
        {% if theme.demo %}
        <tr>
            <td>{{ \"PLUGIN_ADMIN.DEMO\"|tu }}:</td>
            <td class=\"double\"><a href=\"{{ theme.demo }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.demo }}</a></td>
        </tr>
        {% endif %}
        {% if theme.bugs %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.BUG_TRACKER\"|tu }}:</td>
                <td class=\"double\"><a href=\"{{ theme.bugs }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ theme.bugs }}</a></td>
            </tr>
        {% endif %}
        {% if theme.keywords %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.KEYWORDS\"|tu }}:</td>
                <td class=\"double\">
                   {{ theme.keywords|join(', ') }}
                </td>
            </tr>
        {% endif %}
        {% if theme.license %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.LICENSE\"|tu }}:</td>
                <td class=\"double\">{{ theme.license }}</td>
            </tr>
        {% endif %}
        {% if theme.description %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.DESCRIPTION\"|tu }}:</td>
                <td class=\"double\">{{ theme.description_html|raw }}</td>
            </tr>
        {% endif %}

        {% if theme.readme or theme.homepage %}
            {% set readme_link = theme.readme ?: theme.homepage ~ '/blob/master/README.md' %}
            <tr>
                <td>{{ \"PLUGIN_ADMIN.README\"|tu }}:</td>
                <td class=\"double\"><a href=\"{{ readme_link }}\" target=\"_blank\" rel=\"noopener noreferrer\">{{ readme_link }}</a></td>
            </tr>
        {% endif %}
    </table>
</div>

{% if (installed) %}
    {% set data = admin.data('themes/' ~ admin.route) %}
    {% include 'partials/blueprints.html.twig' with { data: data, blueprints: data.blueprints } %}

    {% if (config.get('system.pages.theme') != admin.route) %}
    <div class=\"button-bar danger\">
        <span class=\"danger-zone\"></span>
        {% if not theme.symlink %}
            <a class=\"button button-reinstall-package hidden\" href=\"#\" data-remodal-target=\"reinstall-package\"><i class=\"fa fa-fw fa-repeat\"></i> {{ \"PLUGIN_ADMIN.REINSTALL_THEME\"|tu }}</a>
        {% endif %}
        <a class=\"button\" href=\"#\" data-remodal-target=\"remove-package\"><i class=\"fa fa-fw fa-warning\"></i> {{ \"PLUGIN_ADMIN.REMOVE_THEME\"|tu }}</a>
    </div>
    {% endif %}
{% else %}
    <div class=\"button-bar success\">
        <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"{{ theme.slug }}\" data-theme-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.INSTALL_THEME\"|tu }}</a>
    </div>
{% endif %}

{% include 'partials/modal-changes-detected.html.twig' %}
{% include 'partials/modal-remove-package.html.twig' with { type: 'theme', package: theme } %}
{% include 'partials/modal-add-package.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-update-packages.html.twig' with { type: 'theme' } %}
{% include 'partials/modal-reinstall-package.html.twig' with { type: 'theme', package: theme } %}
", "partials/themes-details.html.twig", "/mnt/nfs/grav/user/plugins/admin/themes/grav/templates/partials/themes-details.html.twig");
    }
}
