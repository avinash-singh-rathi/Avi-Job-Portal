<?php

/* ::base.html.twig */
class __TwigTemplate_23754c76b2955d5473bffd260ac28c7ae80f7c1a7b8f3107ac03ff7edfb29627 extends Twig_Template
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
        $__internal_c4cd1285fbc3c3af781f48055aaf0a8a868aa8f224a1eadba4dfcb5ddecb4ddf = $this->env->getExtension("native_profiler");
        $__internal_c4cd1285fbc3c3af781f48055aaf0a8a868aa8f224a1eadba4dfcb5ddecb4ddf->enter($__internal_c4cd1285fbc3c3af781f48055aaf0a8a868aa8f224a1eadba4dfcb5ddecb4ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c4cd1285fbc3c3af781f48055aaf0a8a868aa8f224a1eadba4dfcb5ddecb4ddf->leave($__internal_c4cd1285fbc3c3af781f48055aaf0a8a868aa8f224a1eadba4dfcb5ddecb4ddf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc1dc41c0a1bb19a96b45c4f8d448c74d974c5d7d871ee70f16c8ee864d9c593 = $this->env->getExtension("native_profiler");
        $__internal_bc1dc41c0a1bb19a96b45c4f8d448c74d974c5d7d871ee70f16c8ee864d9c593->enter($__internal_bc1dc41c0a1bb19a96b45c4f8d448c74d974c5d7d871ee70f16c8ee864d9c593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc1dc41c0a1bb19a96b45c4f8d448c74d974c5d7d871ee70f16c8ee864d9c593->leave($__internal_bc1dc41c0a1bb19a96b45c4f8d448c74d974c5d7d871ee70f16c8ee864d9c593_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e0aa8d88aaf188cc69a1b67d55a15e887cd0ea1e99e078cced4ce094ea6cb7f = $this->env->getExtension("native_profiler");
        $__internal_0e0aa8d88aaf188cc69a1b67d55a15e887cd0ea1e99e078cced4ce094ea6cb7f->enter($__internal_0e0aa8d88aaf188cc69a1b67d55a15e887cd0ea1e99e078cced4ce094ea6cb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e0aa8d88aaf188cc69a1b67d55a15e887cd0ea1e99e078cced4ce094ea6cb7f->leave($__internal_0e0aa8d88aaf188cc69a1b67d55a15e887cd0ea1e99e078cced4ce094ea6cb7f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e188ea62766c1d34b78f9a26d4d8c569344a355df9f314afb06bd135f9e0d7b2 = $this->env->getExtension("native_profiler");
        $__internal_e188ea62766c1d34b78f9a26d4d8c569344a355df9f314afb06bd135f9e0d7b2->enter($__internal_e188ea62766c1d34b78f9a26d4d8c569344a355df9f314afb06bd135f9e0d7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e188ea62766c1d34b78f9a26d4d8c569344a355df9f314afb06bd135f9e0d7b2->leave($__internal_e188ea62766c1d34b78f9a26d4d8c569344a355df9f314afb06bd135f9e0d7b2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a17abf8c00b93051ca6e30de7e21c1175373b43c8315ca96308b234724085442 = $this->env->getExtension("native_profiler");
        $__internal_a17abf8c00b93051ca6e30de7e21c1175373b43c8315ca96308b234724085442->enter($__internal_a17abf8c00b93051ca6e30de7e21c1175373b43c8315ca96308b234724085442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a17abf8c00b93051ca6e30de7e21c1175373b43c8315ca96308b234724085442->leave($__internal_a17abf8c00b93051ca6e30de7e21c1175373b43c8315ca96308b234724085442_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
