<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_0e7fa65000d7d4bb878d3353b522f49c489564c8e6a217793ce4b51b8c5477c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_62546798a9181d901a9cd59c6fa6a2bc84e50a4d4ad35db32f06858c0b8e6ce9 = $this->env->getExtension("native_profiler");
        $__internal_62546798a9181d901a9cd59c6fa6a2bc84e50a4d4ad35db32f06858c0b8e6ce9->enter($__internal_62546798a9181d901a9cd59c6fa6a2bc84e50a4d4ad35db32f06858c0b8e6ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62546798a9181d901a9cd59c6fa6a2bc84e50a4d4ad35db32f06858c0b8e6ce9->leave($__internal_62546798a9181d901a9cd59c6fa6a2bc84e50a4d4ad35db32f06858c0b8e6ce9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca603ddfeb01758644e79accd041329720b2889608c01bf6850fc0a995b27484 = $this->env->getExtension("native_profiler");
        $__internal_ca603ddfeb01758644e79accd041329720b2889608c01bf6850fc0a995b27484->enter($__internal_ca603ddfeb01758644e79accd041329720b2889608c01bf6850fc0a995b27484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_ca603ddfeb01758644e79accd041329720b2889608c01bf6850fc0a995b27484->leave($__internal_ca603ddfeb01758644e79accd041329720b2889608c01bf6850fc0a995b27484_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
