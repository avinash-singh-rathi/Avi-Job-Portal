<?php

/* base.html.twig */
class __TwigTemplate_5cee324f42d9274909a72392aa795896092bea8bcd4fc3a35663667925f1cef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_475fd197e80bfe0fdcde8858ac4084895c8d49dd70243948c3ac06a5f4150356 = $this->env->getExtension("native_profiler");
        $__internal_475fd197e80bfe0fdcde8858ac4084895c8d49dd70243948c3ac06a5f4150356->enter($__internal_475fd197e80bfe0fdcde8858ac4084895c8d49dd70243948c3ac06a5f4150356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_475fd197e80bfe0fdcde8858ac4084895c8d49dd70243948c3ac06a5f4150356->leave($__internal_475fd197e80bfe0fdcde8858ac4084895c8d49dd70243948c3ac06a5f4150356_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_637dccb05f700c90e1270598fbba9a8d679a94cd50fdb121f94c43ea10b2f1ce = $this->env->getExtension("native_profiler");
        $__internal_637dccb05f700c90e1270598fbba9a8d679a94cd50fdb121f94c43ea10b2f1ce->enter($__internal_637dccb05f700c90e1270598fbba9a8d679a94cd50fdb121f94c43ea10b2f1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_637dccb05f700c90e1270598fbba9a8d679a94cd50fdb121f94c43ea10b2f1ce->leave($__internal_637dccb05f700c90e1270598fbba9a8d679a94cd50fdb121f94c43ea10b2f1ce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9fe22a1d4064001bf490817c7275218edfdf6e3f127c09ef4d0da62b86fc810 = $this->env->getExtension("native_profiler");
        $__internal_e9fe22a1d4064001bf490817c7275218edfdf6e3f127c09ef4d0da62b86fc810->enter($__internal_e9fe22a1d4064001bf490817c7275218edfdf6e3f127c09ef4d0da62b86fc810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9fe22a1d4064001bf490817c7275218edfdf6e3f127c09ef4d0da62b86fc810->leave($__internal_e9fe22a1d4064001bf490817c7275218edfdf6e3f127c09ef4d0da62b86fc810_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2855bfcb6c7a8c6e42c80c331022c6973569530ba73d9f5c7e5fa3cd7a8ab4b9 = $this->env->getExtension("native_profiler");
        $__internal_2855bfcb6c7a8c6e42c80c331022c6973569530ba73d9f5c7e5fa3cd7a8ab4b9->enter($__internal_2855bfcb6c7a8c6e42c80c331022c6973569530ba73d9f5c7e5fa3cd7a8ab4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2855bfcb6c7a8c6e42c80c331022c6973569530ba73d9f5c7e5fa3cd7a8ab4b9->leave($__internal_2855bfcb6c7a8c6e42c80c331022c6973569530ba73d9f5c7e5fa3cd7a8ab4b9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90db3db900c9d574dd44e97d0b9073704074131500a1d0ac3ca756b04660f962 = $this->env->getExtension("native_profiler");
        $__internal_90db3db900c9d574dd44e97d0b9073704074131500a1d0ac3ca756b04660f962->enter($__internal_90db3db900c9d574dd44e97d0b9073704074131500a1d0ac3ca756b04660f962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_90db3db900c9d574dd44e97d0b9073704074131500a1d0ac3ca756b04660f962->leave($__internal_90db3db900c9d574dd44e97d0b9073704074131500a1d0ac3ca756b04660f962_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
