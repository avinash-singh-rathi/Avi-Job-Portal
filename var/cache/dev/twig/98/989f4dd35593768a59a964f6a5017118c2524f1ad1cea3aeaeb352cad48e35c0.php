<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_84213d6563d959050f0bf905cbdb2ad4521ccad9cc6d40746bcdfbc87168695f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ef8307676b4c739311b446d2259648e2785f2505cae522b2ccc2e9132413e6e2 = $this->env->getExtension("native_profiler");
        $__internal_ef8307676b4c739311b446d2259648e2785f2505cae522b2ccc2e9132413e6e2->enter($__internal_ef8307676b4c739311b446d2259648e2785f2505cae522b2ccc2e9132413e6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef8307676b4c739311b446d2259648e2785f2505cae522b2ccc2e9132413e6e2->leave($__internal_ef8307676b4c739311b446d2259648e2785f2505cae522b2ccc2e9132413e6e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dadfbff761d6da9b9014d0388546b82445c721fe2e0aa4c012e94c0a2ff2d852 = $this->env->getExtension("native_profiler");
        $__internal_dadfbff761d6da9b9014d0388546b82445c721fe2e0aa4c012e94c0a2ff2d852->enter($__internal_dadfbff761d6da9b9014d0388546b82445c721fe2e0aa4c012e94c0a2ff2d852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_dadfbff761d6da9b9014d0388546b82445c721fe2e0aa4c012e94c0a2ff2d852->leave($__internal_dadfbff761d6da9b9014d0388546b82445c721fe2e0aa4c012e94c0a2ff2d852_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
