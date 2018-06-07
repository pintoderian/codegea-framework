<?php

/* layout.twig */
class __TwigTemplate_589f730cfcee5c3f41a0c09b21e07608855fbf102ea9714a197c7b20bf941ec5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Extension']->assets("css/app.css"), "html", null, true);
        echo "\">
    ";
        // line 9
        echo $this->extensions['Extension']->csrf("meta");
        echo "
    <style>
        code {
            margin-bottom: 1rem;
            display: block;
            background: #f9f9f9ee;
            padding: 18px;
        }
    </style>
</head>
<body>
    <div class=\"codegea\">
        <nav class=\"navbar navbar-expand-lg navbar-codegea navbar-light mb-5\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Extension']->url(), "html", null, true);
        echo "\">Codegea</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Extension']->url(), "html", null, true);
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Extension']->url("form"), "html", null, true);
        echo "\">Form</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Extension']->url("users"), "html", null, true);
        echo "\">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"container\">
            <div class=\"row justify-content-md-center\">
                <div class=\"col-md-8\">
                    ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "                </div>
            </div>
        </div>
    </div>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Extension']->assets("js/app.js"), "html", null, true);
        echo "\"></script>
    <script>
    if(\$('.enviar')[0]){
        \$('.enviar').click(function() {
            \$.ajax({
                type: \"post\", 
                url: \"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Extension']->current_url(), "html", null, true);
        echo "\",
                data: {title: \$('#title').val()},
                success: function () {
                    \$('#mensaje').html('');
                    \$(\"#title\").removeClass(\"is-invalid\");
                },
                error: function (request, status, error) {
                    var error = request.responseText;
                    var data = JSON.parse(error);
                    \$('#mensaje').html(data.title);
                    \$(\"#title\").addClass(\"is-invalid\");
                }
            });
        });
    }
    </script>
</body>
</html>";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  107 => 58,  98 => 52,  92 => 48,  90 => 47,  78 => 38,  72 => 35,  64 => 30,  54 => 23,  37 => 9,  33 => 8,  24 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ assets('css/app.css') }}\">
    {{ csrf(\"meta\")|raw }}
    <style>
        code {
            margin-bottom: 1rem;
            display: block;
            background: #f9f9f9ee;
            padding: 18px;
        }
    </style>
</head>
<body>
    <div class=\"codegea\">
        <nav class=\"navbar navbar-expand-lg navbar-codegea navbar-light mb-5\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ url() }}\">Codegea</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"{{ url() }}\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                    </ul>
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ url('form') }}\">Form</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ url('users') }}\">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class=\"container\">
            <div class=\"row justify-content-md-center\">
                <div class=\"col-md-8\">
                    {% block content %}{% endblock %}
                </div>
            </div>
        </div>
    </div>
    <script src=\"{{ assets('js/app.js') }}\"></script>
    <script>
    if(\$('.enviar')[0]){
        \$('.enviar').click(function() {
            \$.ajax({
                type: \"post\", 
                url: \"{{ current_url() }}\",
                data: {title: \$('#title').val()},
                success: function () {
                    \$('#mensaje').html('');
                    \$(\"#title\").removeClass(\"is-invalid\");
                },
                error: function (request, status, error) {
                    var error = request.responseText;
                    var data = JSON.parse(error);
                    \$('#mensaje').html(data.title);
                    \$(\"#title\").addClass(\"is-invalid\");
                }
            });
        });
    }
    </script>
</body>
</html>", "layout.twig", "C:\\laragon\\www\\codegea-framework\\resource\\views\\layout.twig");
    }
}
