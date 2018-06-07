<?php

/* home.twig */
class __TwigTemplate_0e12c4465640f249924615662de48c0bf59a590e86b84abbad26c2726e9da0f5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "home.twig", 1);
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
        echo "<div class=\"card\">
    <div class=\"card-header text-center\">
        <h3 class=\"mb-0\">Codegea Framework</h3>
    </div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">Welcome to framework</h5>
        <div class=\"card-text\">
                <p>The page you are looking at is being generated dynamically by Codegea.</p>
                <p>If you would like to edit this page you'll find it located at:</p>
                <code>resource/views/home.twig</code>
                <p>The corresponding controller for this page is found at:</p>
                <code>app/Controllers/FrontEndController.php</code>
                <p>If you are exploring Codegea for the very first time, you should start by reading the <a href=\"https://github.com/pintoderian/codegea-framework/wiki\">User Guide</a>.</p>
        </div>
    </div>
    <div class=\"card-footer\">
        Page rendered in ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Extension']->elapsed_time(), "html", null, true);
        echo " seconds.
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block content %}
<div class=\"card\">
    <div class=\"card-header text-center\">
        <h3 class=\"mb-0\">Codegea Framework</h3>
    </div>
    <div class=\"card-body\">
        <h5 class=\"card-title\">Welcome to framework</h5>
        <div class=\"card-text\">
                <p>The page you are looking at is being generated dynamically by Codegea.</p>
                <p>If you would like to edit this page you'll find it located at:</p>
                <code>resource/views/home.twig</code>
                <p>The corresponding controller for this page is found at:</p>
                <code>app/Controllers/FrontEndController.php</code>
                <p>If you are exploring Codegea for the very first time, you should start by reading the <a href=\"https://github.com/pintoderian/codegea-framework/wiki\">User Guide</a>.</p>
        </div>
    </div>
    <div class=\"card-footer\">
        Page rendered in {{ elapsed_time() }} seconds.
    </div>
</div>
{% endblock %}", "home.twig", "C:\\laragon\\www\\codegea-framework\\resource\\views\\home.twig");
    }
}
