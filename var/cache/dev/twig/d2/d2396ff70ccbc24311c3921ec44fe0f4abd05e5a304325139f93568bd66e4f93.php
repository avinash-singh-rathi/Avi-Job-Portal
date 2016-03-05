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
        $__internal_cd55319205210871dc8a8a03114fb34f7c17ae4889fa18210362661499bd4f98 = $this->env->getExtension("native_profiler");
        $__internal_cd55319205210871dc8a8a03114fb34f7c17ae4889fa18210362661499bd4f98->enter($__internal_cd55319205210871dc8a8a03114fb34f7c17ae4889fa18210362661499bd4f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cd55319205210871dc8a8a03114fb34f7c17ae4889fa18210362661499bd4f98->leave($__internal_cd55319205210871dc8a8a03114fb34f7c17ae4889fa18210362661499bd4f98_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c35257264144970ad217ebded8b81ed9d701465ec4bb0b452b476585d9a5b947 = $this->env->getExtension("native_profiler");
        $__internal_c35257264144970ad217ebded8b81ed9d701465ec4bb0b452b476585d9a5b947->enter($__internal_c35257264144970ad217ebded8b81ed9d701465ec4bb0b452b476585d9a5b947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c35257264144970ad217ebded8b81ed9d701465ec4bb0b452b476585d9a5b947->leave($__internal_c35257264144970ad217ebded8b81ed9d701465ec4bb0b452b476585d9a5b947_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3ced2c1e04d3b0c6a05c2af099db9cf06d510d6d561ef11bb1cd5626c342cb2 = $this->env->getExtension("native_profiler");
        $__internal_d3ced2c1e04d3b0c6a05c2af099db9cf06d510d6d561ef11bb1cd5626c342cb2->enter($__internal_d3ced2c1e04d3b0c6a05c2af099db9cf06d510d6d561ef11bb1cd5626c342cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d3ced2c1e04d3b0c6a05c2af099db9cf06d510d6d561ef11bb1cd5626c342cb2->leave($__internal_d3ced2c1e04d3b0c6a05c2af099db9cf06d510d6d561ef11bb1cd5626c342cb2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d07dffb8d5e439363b10ab85dcbe589a615c9b800bbc05fd9e104057972f37a1 = $this->env->getExtension("native_profiler");
        $__internal_d07dffb8d5e439363b10ab85dcbe589a615c9b800bbc05fd9e104057972f37a1->enter($__internal_d07dffb8d5e439363b10ab85dcbe589a615c9b800bbc05fd9e104057972f37a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d07dffb8d5e439363b10ab85dcbe589a615c9b800bbc05fd9e104057972f37a1->leave($__internal_d07dffb8d5e439363b10ab85dcbe589a615c9b800bbc05fd9e104057972f37a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_975734618ccf4e2a8e386352d90c3ef8df98d679dea9fae0e1af5112df167f40 = $this->env->getExtension("native_profiler");
        $__internal_975734618ccf4e2a8e386352d90c3ef8df98d679dea9fae0e1af5112df167f40->enter($__internal_975734618ccf4e2a8e386352d90c3ef8df98d679dea9fae0e1af5112df167f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_975734618ccf4e2a8e386352d90c3ef8df98d679dea9fae0e1af5112df167f40->leave($__internal_975734618ccf4e2a8e386352d90c3ef8df98d679dea9fae0e1af5112df167f40_prof);

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
