<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_ca9fc9120205ced631479a019afae20bc267e55e5f59e72aee3acbdb2aae7dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_9297fe96422c29b8c185d6a019b2aa87b0a30e20d86ca2d5b8ba6026bc7419b4 = $this->env->getExtension("native_profiler");
        $__internal_9297fe96422c29b8c185d6a019b2aa87b0a30e20d86ca2d5b8ba6026bc7419b4->enter($__internal_9297fe96422c29b8c185d6a019b2aa87b0a30e20d86ca2d5b8ba6026bc7419b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9297fe96422c29b8c185d6a019b2aa87b0a30e20d86ca2d5b8ba6026bc7419b4->leave($__internal_9297fe96422c29b8c185d6a019b2aa87b0a30e20d86ca2d5b8ba6026bc7419b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4331def7a9d9dd69add517097dbdb0c70b3b538bc9b5424974a6da44b6b89cf2 = $this->env->getExtension("native_profiler");
        $__internal_4331def7a9d9dd69add517097dbdb0c70b3b538bc9b5424974a6da44b6b89cf2->enter($__internal_4331def7a9d9dd69add517097dbdb0c70b3b538bc9b5424974a6da44b6b89cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_4331def7a9d9dd69add517097dbdb0c70b3b538bc9b5424974a6da44b6b89cf2->leave($__internal_4331def7a9d9dd69add517097dbdb0c70b3b538bc9b5424974a6da44b6b89cf2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
