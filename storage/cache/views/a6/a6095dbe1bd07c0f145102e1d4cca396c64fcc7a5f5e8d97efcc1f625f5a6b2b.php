<?php

/* home.twig */
class __TwigTemplate_69b905919f05a9e6fe1e8289f8816ddbe4248d7c024fdd5a1227055d14e15ab1 extends Twig_Template
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
            <h2>Welcome to framework!</h2>
            <p>
                Ruta de ejemplo: /users<br>
                PD: Debe de instalar la base de datos de prueba que proporciona el framework
            </p>
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
        return "home.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
            <h2>Welcome to framework!</h2>
            <p>
                Ruta de ejemplo: /users<br>
                PD: Debe de instalar la base de datos de prueba que proporciona el framework
            </p>
            <div class=\"footer\">
                Desarrollado por: <a href=\"https://github.com/pintoderian\">Derian Pinto</a>
            </div>
        </div>
    </div>
</body>
</html>", "home.twig", "C:\\laragon\\www\\codegea-framework\\resource\\views\\home.twig");
    }
}
