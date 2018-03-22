<?php

/* users.twig */
class __TwigTemplate_ccacb1b1261e4a8383cf0f7519706f30cf312d097a7bd768f43ab07c4f7b1b72 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Welcome to framework</title>
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Source+Sans+Pro:200,400,700,600,400italic,700italic' rel='stylesheet' type='text/css'>
    <style>
        body {
            color: #525252;
            font-family: \"Source Sans Pro\",sans-serif;
            font-size: 16px;
        }
        h1 {
            font-size: 48px;
            font-weight: 200;
            text-align: center;
        }
        a {
            color: #fff;
        }
        .codegea {
            width: 65%;
            margin: auto !important;
        }
        .content {
            padding: 2px 28px 24px;
            background: #000;
            color: #ccc;
        }
        .content > h2{
            border-bottom: 2px dashed;
        }
    </style>
</head>
<body>
    <div class=\"codegea\">
        <h1>Framework Codegea</h1>
        <div class=\"content\">
            <h2>Usuarios agregados en la BD!</h2>
            <p>
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 44
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", array()), "html", null, true);
            echo "<br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </p>
            <div class=\"footer\">
                Desarrollado por: <a href=\"https://github.com/pintoderian\">Derian Pinto</a>
            </div>
        </div>
    </div>
</body>
</html>";
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
        return array (  80 => 46,  71 => 44,  67 => 43,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Welcome to framework</title>
    <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Source+Sans+Pro:200,400,700,600,400italic,700italic' rel='stylesheet' type='text/css'>
    <style>
        body {
            color: #525252;
            font-family: \"Source Sans Pro\",sans-serif;
            font-size: 16px;
        }
        h1 {
            font-size: 48px;
            font-weight: 200;
            text-align: center;
        }
        a {
            color: #fff;
        }
        .codegea {
            width: 65%;
            margin: auto !important;
        }
        .content {
            padding: 2px 28px 24px;
            background: #000;
            color: #ccc;
        }
        .content > h2{
            border-bottom: 2px dashed;
        }
    </style>
</head>
<body>
    <div class=\"codegea\">
        <h1>Framework Codegea</h1>
        <div class=\"content\">
            <h2>Usuarios agregados en la BD!</h2>
            <p>
                {% for e in user %}
                    {{ e.name }}<br>
                {% endfor %}
            </p>
            <div class=\"footer\">
                Desarrollado por: <a href=\"https://github.com/pintoderian\">Derian Pinto</a>
            </div>
        </div>
    </div>
</body>
</html>", "users.twig", "C:\\laragon\\www\\codegea-framework\\resource\\views\\users.twig");
    }
}
