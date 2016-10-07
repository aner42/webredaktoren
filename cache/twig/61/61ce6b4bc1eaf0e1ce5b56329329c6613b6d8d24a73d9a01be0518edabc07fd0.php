<?php

/* partials/base.html.twig */
class __TwigTemplate_6a938e02831a6a6555797a799441c591d82459f1d6d5c3f7bdaca56734a0db94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 37
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
        <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- open/close -->

        ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('navigation', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "


    </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
        ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/favicon.ico");
        echo "\" />

         ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>

        <script src=\"";
        // line 27
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://js/modernizr.custom.js");
        echo "\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/bootstrap.min.css"), "method");
        // line 16
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/jquery.fancybox.css"), "method");
        // line 17
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/flickity.css"), "method");
        // line 18
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 19
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/styles.css"), "method");
        // line 20
        echo "                ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/queries.css"), "method");
        // line 21
        echo "        ";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 45)->display($context);
        // line 46
        echo "        ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "        ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "        ";
    }

    // line 56
    public function block_navigation($context, array $blocks = array())
    {
        // line 57
        echo "           ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "        ";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/toucheffects-min.js"), "method");
        // line 62
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 63
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/flickity.pkgd.min.js"), "method");
        // line 64
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fancybox.pack.js"), "method");
        // line 65
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/retina.js"), "method");
        // line 66
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.min.js"), "method");
        // line 67
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/bootstrap.min.js"), "method");
        // line 68
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/scripts-min.js"), "method");
        // line 69
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 69,  234 => 68,  231 => 67,  228 => 66,  225 => 65,  222 => 64,  219 => 63,  216 => 62,  213 => 61,  210 => 60,  206 => 58,  203 => 57,  200 => 56,  196 => 54,  193 => 53,  190 => 52,  185 => 49,  181 => 50,  178 => 49,  175 => 48,  171 => 46,  168 => 45,  165 => 44,  161 => 21,  158 => 20,  155 => 19,  152 => 18,  149 => 17,  146 => 16,  143 => 15,  140 => 14,  126 => 27,  117 => 22,  115 => 14,  110 => 12,  107 => 11,  105 => 10,  97 => 9,  94 => 8,  91 => 7,  80 => 70,  78 => 60,  75 => 59,  73 => 56,  70 => 55,  68 => 52,  65 => 51,  63 => 48,  60 => 47,  58 => 44,  49 => 37,  47 => 7,  42 => 5,  38 => 4,  34 => 3,  30 => 2,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{{ grav.language.getLanguage ?: 'en' }}"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="{{ grav.language.getLanguage ?: 'en' }}"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9" lang="{{ grav.language.getLanguage ?: 'en' }}"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js" lang="{{ grav.language.getLanguage ?: 'en' }}"> <!--<![endif]-->*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8" />*/
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*         <link rel="icon" type="image/png" href="{{ url('theme://img/favicon.ico') }}" />*/
/* */
/*          {% block stylesheets %}*/
/*                 {% do assets.addCss('theme://css/bootstrap.min.css') %}*/
/*                 {% do assets.addCss('theme://css/jquery.fancybox.css') %}*/
/*                 {% do assets.addCss('theme://css/flickity.css') %}*/
/*                 {% do assets.addCss('theme://css/animate.css') %}*/
/*                 {% do assets.addCss('theme://css/styles.css') %}*/
/*                 {% do assets.addCss('theme://css/queries.css') %}*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/* */
/*         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">*/
/*         <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>*/
/* */
/*         <script src="{{ url('theme://js/modernizr.custom.js') }}"></script>*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*         {% endblock head%}*/
/*     </head>*/
/*     <body>*/
/*         <!--[if lt IE 7]>*/
/*         <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>*/
/*         <![endif]-->*/
/*         <!-- open/close -->*/
/* */
/*         {% block header %}*/
/*              {% include 'partials/header.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*         {% block body %}*/
/*             {% block content %}{% endblock %}*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*              {% include 'partials/footer.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*         {% block navigation %}*/
/*            {% include 'partials/navigation.html.twig' %}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.addJs('theme://js/min/toucheffects-min.js') %}*/
/*             {% do assets.add('jquery',101) %}*/
/*             {% do assets.addJs('theme://js/flickity.pkgd.min.js') %}*/
/*             {% do assets.addJs('theme://js/jquery.fancybox.pack.js') %}*/
/*             {% do assets.addJs('theme://js/retina.js') %}*/
/*             {% do assets.addJs('theme://js/waypoints.min.js') %}*/
/*             {% do assets.addJs('theme://js/bootstrap.min.js') %}*/
/*             {% do assets.addJs('theme://js/min/scripts-min.js') %}*/
/*         {% endblock %}*/
/*         {{ assets.js() }}*/
/* */
/* */
/*     </body>*/
/* </html>*/
/* */
