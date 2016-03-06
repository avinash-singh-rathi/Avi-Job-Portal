<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_dd1e2cf741c44e0bf2ae88a3361edfbbe5ba78e16014e88e1f05415699a63890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f213b0381d78f0e4535d5c3a5ad7d291d19df7c23ad050c888902e6f051510e = $this->env->getExtension("native_profiler");
        $__internal_9f213b0381d78f0e4535d5c3a5ad7d291d19df7c23ad050c888902e6f051510e->enter($__internal_9f213b0381d78f0e4535d5c3a5ad7d291d19df7c23ad050c888902e6f051510e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f213b0381d78f0e4535d5c3a5ad7d291d19df7c23ad050c888902e6f051510e->leave($__internal_9f213b0381d78f0e4535d5c3a5ad7d291d19df7c23ad050c888902e6f051510e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39e97aea4b505be730ed48da441932eb363a282ebf7d875f1b7aec30e96070f2 = $this->env->getExtension("native_profiler");
        $__internal_39e97aea4b505be730ed48da441932eb363a282ebf7d875f1b7aec30e96070f2->enter($__internal_39e97aea4b505be730ed48da441932eb363a282ebf7d875f1b7aec30e96070f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_39e97aea4b505be730ed48da441932eb363a282ebf7d875f1b7aec30e96070f2->leave($__internal_39e97aea4b505be730ed48da441932eb363a282ebf7d875f1b7aec30e96070f2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
