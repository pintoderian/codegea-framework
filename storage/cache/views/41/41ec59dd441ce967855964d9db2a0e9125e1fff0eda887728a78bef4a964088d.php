<?php

/* users.twig */
class __TwigTemplate_0398af0bbbd13c6cfa17dc030e78dc66ad88b033dc05831351680653bdf63481 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "users.twig", 1);
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
        <h3 class=\"mb-0\">Users</h3>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Username</th>
                    <th scope=\"col\">Email</th>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 32
        echo twig_include($this->env, $context, "APP/pagination/bootstrap.twig", array("currentPage" => twig_get_attribute($this->env, $this->source,         // line 33
($context["users"] ?? null), "currentPage", array()), "lastPage" => twig_round((twig_get_attribute($this->env, $this->source,         // line 34
($context["users"] ?? null), "total", array()) / twig_get_attribute($this->env, $this->source, ($context["users"] ?? null), "perPage", array()))), "showAlwaysFirstAndLast" => true));
        // line 36
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 36,  89 => 34,  88 => 33,  87 => 32,  82 => 29,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  58 => 22,  54 => 21,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block content %}

<div class=\"card mb-5\">
    <div class=\"card-header text-center\">
        <h3 class=\"mb-0\">Users</h3>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Username</th>
                    <th scope=\"col\">Email</th>
                  </tr>
                </thead>
                <tbody>
                    {% for user in users %}
                    <tr>
                        <th scope=\"row\">{{ user.id }}</th>
                        <td>{{ user.name }}</td>
                        <td>{{ user.username }}</td>
                        <td>{{ user.email }}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        {{ include('APP/pagination/bootstrap.twig', { 
            currentPage: users.currentPage,
            lastPage: (users.total / users.perPage)|round,
            showAlwaysFirstAndLast: true
        }) }}
    </div>
</div>
{% endblock %}", "users.twig", "C:\\laragon\\www\\codegea-framework\\resource\\views\\users.twig");
    }
}
