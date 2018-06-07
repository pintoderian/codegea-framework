<?php

/* form.twig */
class __TwigTemplate_d021617b629ae3ef940a9a89bf78e48a430fb2044ddeb7468ec84aed3a2aa1e1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "form.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"card mb-5\">
    <div class=\"card-header text-center\">
        <h3 class=\"mb-0\">Form Submit</h3>
    </div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">Check Username</h5>
        <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Extension']->current_url(), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 12
        echo $this->extensions['Extension']->csrf("input");
        echo "
            <div class=\"form-group\">
                <input type=\"text\" name=\"title\" class=\"form-control ";
        // line 14
        if ($this->extensions['Extension']->check_has("title")) {
            echo " is-invalid ";
        }
        echo "\" placeholder=\"Enter username.\"/>
                ";
        // line 15
        if ($this->extensions['Extension']->check_has("title")) {
            // line 16
            echo "                    <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, $this->extensions['Extension']->error_has("title"), "html", null, true);
            echo "</div>
                ";
        }
        // line 18
        echo "            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </form>
    </div>
</div>

<div class=\"card mb-5\">
    <div class=\"card-header text-center\">
        <h3 class=\"mb-0\">Form ajax</h3>
    </div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">Check Username</h5>
        <form action=\"\" onsubmit=\"return false\">
            <div id=\"error\" class=\"form-group\">
                <input id=\"title\" type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"Enter username\"/>
                <div id=\"mensaje\" class=\"invalid-feedback\"></div>
            </div>
            <button type=\"submit\" class=\"btn btn-success enviar\">Submit</button>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  61 => 16,  59 => 15,  53 => 14,  48 => 12,  44 => 11,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block content %}

<div class=\"card mb-5\">
    <div class=\"card-header text-center\">
        <h3 class=\"mb-0\">Form Submit</h3>
    </div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">Check Username</h5>
        <form action=\"{{ current_url() }}\" method=\"post\">
            {{ csrf(\"input\")|raw }}
            <div class=\"form-group\">
                <input type=\"text\" name=\"title\" class=\"form-control {% if check_has('title') %} is-invalid {% endif %}\" placeholder=\"Enter username.\"/>
                {% if check_has('title') %}
                    <div class=\"invalid-feedback\">{{ error_has('title') }}</div>
                {% endif %}
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </form>
    </div>
</div>

<div class=\"card mb-5\">
    <div class=\"card-header text-center\">
        <h3 class=\"mb-0\">Form ajax</h3>
    </div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">Check Username</h5>
        <form action=\"\" onsubmit=\"return false\">
            <div id=\"error\" class=\"form-group\">
                <input id=\"title\" type=\"text\" name=\"title\" class=\"form-control\" placeholder=\"Enter username\"/>
                <div id=\"mensaje\" class=\"invalid-feedback\"></div>
            </div>
            <button type=\"submit\" class=\"btn btn-success enviar\">Submit</button>
        </form>
    </div>
</div>
{% endblock %}", "form.twig", "C:\\laragon\\www\\codegea-framework\\resource\\views\\form.twig");
    }
}
