<?php

/* APP/errors/404.twig */
class __TwigTemplate_c8c47fd40709db7f7be68243ead4ba47fe9cd9ef530203e2ef89dfaf695170de extends Twig_Template
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
    <title>404</title>
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
        <h1>404 - Page not found!</h1>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "APP/errors/404.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>404</title>
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
        <h1>404 - Page not found!</h1>
    </div>
</body>
</html>", "APP/errors/404.twig", "C:\\laragon\\www\\codegea-framework\\resource\\views\\APP\\errors\\404.twig");
    }
}
