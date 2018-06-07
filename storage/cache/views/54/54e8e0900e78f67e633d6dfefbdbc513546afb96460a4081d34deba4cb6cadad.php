<?php

/* APP/pagination/bootstrap.twig */
class __TwigTemplate_2e3a5d9a56d04191c440602315a361b1f958af90d9699d005e91ef2c9e1f066a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "    ";
        if ((($context["lastPage"] ?? null) > 1)) {
            // line 3
            echo "
        ";
            // line 5
            echo "        ";
            $context["extremePagesLimit"] = 3;
            // line 6
            echo "
        ";
            // line 8
            echo "        ";
            $context["nearbyPagesLimit"] = 2;
            // line 9
            echo "
        ";
            // line 10
            if ( !array_key_exists("currentFilters", $context)) {
                $context["currentFilters"] = array();
            }
            // line 11
            echo "        ";
            if ( !array_key_exists("paginationPath", $context)) {
                $context["paginationPath"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
            }
            // line 12
            echo "        ";
            if ( !array_key_exists("showAlwaysFirstAndLast", $context)) {
                $context["showAlwaysFirstAndLast"] = true;
            }
            // line 13
            echo "        <nav>
        <ul class=\"pagination\">
            ";
            // line 15
            if ((($context["currentPage"] ?? null) > 1)) {
                // line 16
                echo "                <li class=\"page-item\"><a class=\"page-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Extension']->path(($context["paginationPath"] ?? null), twig_array_merge(($context["currentFilters"] ?? null), array("page" => (($context["currentPage"] ?? null) - 1)))), "html", null, true);
                echo "\">Previous</a></li>
                ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["extremePagesLimit"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] < (($context["currentPage"] ?? null) - ($context["nearbyPagesLimit"] ?? null)))) {
                        // line 18
                        echo "                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Extension']->path(($context["paginationPath"] ?? null), twig_array_merge(($context["currentFilters"] ?? null), array("page" => $context["i"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "
                ";
                // line 21
                if (((($context["extremePagesLimit"] ?? null) + 1) < (($context["currentPage"] ?? null) - ($context["nearbyPagesLimit"] ?? null)))) {
                    // line 22
                    echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\" href=\"#\" tabindex=\"-1\">...</a>
                    </li>
                ";
                }
                // line 26
                echo "
                ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((($context["currentPage"] ?? null) - ($context["nearbyPagesLimit"] ?? null)), (($context["currentPage"] ?? null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] > 0)) {
                        // line 28
                        echo "                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Extension']->path(($context["paginationPath"] ?? null), twig_array_merge(($context["currentFilters"] ?? null), array("page" => $context["i"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            ";
            } elseif (($context["showAlwaysFirstAndLast"] ?? null)) {
                // line 31
                echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                </li>
            ";
            }
            // line 35
            echo "            
            <li class=\"page-item active\"><a class=\"page-link\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Extension']->path(($context["paginationPath"] ?? null), twig_array_merge(($context["currentFilters"] ?? null), array("page" => ($context["currentPage"] ?? null)))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["currentPage"] ?? null), "html", null, true);
            echo "</a></li>

            ";
            // line 38
            if ((($context["currentPage"] ?? null) < ($context["lastPage"] ?? null))) {
                // line 39
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((($context["currentPage"] ?? null) + 1), (($context["currentPage"] ?? null) + ($context["nearbyPagesLimit"] ?? null))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] <= ($context["lastPage"] ?? null))) {
                        // line 40
                        echo "                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Extension']->path(($context["paginationPath"] ?? null), twig_array_merge(($context["currentFilters"] ?? null), array("page" => $context["i"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "
                ";
                // line 43
                if (((($context["lastPage"] ?? null) - ($context["extremePagesLimit"] ?? null)) > (($context["currentPage"] ?? null) + ($context["nearbyPagesLimit"] ?? null)))) {
                    // line 44
                    echo "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\" href=\"#\" tabindex=\"-1\">...</a>
                    </li>
                ";
                }
                // line 48
                echo "
                ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((($context["lastPage"] ?? null) - ($context["extremePagesLimit"] ?? null)) + 1), ($context["lastPage"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] > (($context["currentPage"] ?? null) + ($context["nearbyPagesLimit"] ?? null)))) {
                        // line 50
                        echo "                    <li class=\"page-item\"><a class=\"page-link\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Extension']->path(($context["paginationPath"] ?? null), twig_array_merge(($context["currentFilters"] ?? null), array("page" => $context["i"]))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                
                <li class=\"page-item\"><a class=\"page-link\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Extension']->path(($context["paginationPath"] ?? null), twig_array_merge(($context["currentFilters"] ?? null), array("page" => (($context["currentPage"] ?? null) + 1)))), "html", null, true);
                echo "\">Next</a></li>
            ";
            } elseif (            // line 54
($context["showAlwaysFirstAndLast"] ?? null)) {
                // line 55
                echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Next</a>
                </li>
            ";
            }
            // line 59
            echo "        </ul>
    </nav>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "APP/pagination/bootstrap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 59,  195 => 55,  193 => 54,  189 => 53,  186 => 52,  174 => 50,  169 => 49,  166 => 48,  160 => 44,  158 => 43,  155 => 42,  143 => 40,  137 => 39,  135 => 38,  128 => 36,  125 => 35,  119 => 31,  116 => 30,  104 => 28,  99 => 27,  96 => 26,  90 => 22,  88 => 21,  85 => 20,  73 => 18,  68 => 17,  63 => 16,  61 => 15,  57 => 13,  52 => 12,  47 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 6,  31 => 5,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
    {% if lastPage > 1 %}

        {# the number of first and last pages to be displayed #}
        {% set extremePagesLimit = 3 %}

        {# the number of pages that are displayed around the active page #}
        {% set nearbyPagesLimit = 2 %}

        {% if currentFilters is not defined %}{% set currentFilters = {} %}{% endif %}
        {% if paginationPath is not defined %}{% set paginationPath = app.request.attributes.get('_route') %}{% endif %}
        {% if showAlwaysFirstAndLast is not defined %}{% set showAlwaysFirstAndLast = true %}{% endif %}
        <nav>
        <ul class=\"pagination\">
            {% if currentPage > 1 %}
                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(paginationPath, currentFilters|merge({page: currentPage-1})) }}\">Previous</a></li>
                {% for i in range(1, extremePagesLimit) if ( i < currentPage - nearbyPagesLimit ) %}
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(paginationPath, currentFilters|merge({page: i})) }}\">{{ i }}</a></li>
                {% endfor %}

                {% if extremePagesLimit + 1 < currentPage - nearbyPagesLimit %}
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\" href=\"#\" tabindex=\"-1\">...</a>
                    </li>
                {% endif %}

                {% for i in range(currentPage-nearbyPagesLimit, currentPage-1) if ( i > 0 ) %}
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(paginationPath, currentFilters|merge({page: i})) }}\">{{ i }}</a></li>
                {% endfor %}
            {% elseif showAlwaysFirstAndLast %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                </li>
            {% endif %}
            
            <li class=\"page-item active\"><a class=\"page-link\" href=\"{{ path(paginationPath, currentFilters|merge({ page: currentPage })) }}\">{{ currentPage }}</a></li>

            {% if currentPage < lastPage %}
                {% for i in range(currentPage+1, currentPage + nearbyPagesLimit) if ( i <= lastPage ) %}
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(paginationPath, currentFilters|merge({page: i})) }}\">{{ i }}</a></li>
                {% endfor %}

                {% if  (lastPage - extremePagesLimit) > (currentPage + nearbyPagesLimit) %}
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\" href=\"#\" tabindex=\"-1\">...</a>
                    </li>
                {% endif %}

                {% for i in range(lastPage - extremePagesLimit+1, lastPage) if ( i > currentPage + nearbyPagesLimit ) %}
                    <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(paginationPath, currentFilters|merge({page: i})) }}\">{{ i }}</a></li>
                {% endfor %}
                
                <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path(paginationPath, currentFilters|merge({page: currentPage+1})) }}\">Next</a></li>
            {% elseif showAlwaysFirstAndLast %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Next</a>
                </li>
            {% endif %}
        </ul>
    </nav>
    {% endif %}
{% endspaceless %}", "APP/pagination/bootstrap.twig", "C:\\laragon\\www\\codegea-framework\\resource\\views\\APP\\pagination\\bootstrap.twig");
    }
}
