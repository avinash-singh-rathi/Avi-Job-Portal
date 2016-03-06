<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_961fe0dc6aaf085786814e5e37efd70a0b7c26d91de8db5872430ff676cc9cd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_1afeb9d94de2c99d58db010a72259f57b9cd21e0435727e2d42939297a4c8a63 = $this->env->getExtension("native_profiler");
        $__internal_1afeb9d94de2c99d58db010a72259f57b9cd21e0435727e2d42939297a4c8a63->enter($__internal_1afeb9d94de2c99d58db010a72259f57b9cd21e0435727e2d42939297a4c8a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1afeb9d94de2c99d58db010a72259f57b9cd21e0435727e2d42939297a4c8a63->leave($__internal_1afeb9d94de2c99d58db010a72259f57b9cd21e0435727e2d42939297a4c8a63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8a42aa6fa97aee864f6afadea8717676fa43c7a3181cac15e30ac95a2785930 = $this->env->getExtension("native_profiler");
        $__internal_e8a42aa6fa97aee864f6afadea8717676fa43c7a3181cac15e30ac95a2785930->enter($__internal_e8a42aa6fa97aee864f6afadea8717676fa43c7a3181cac15e30ac95a2785930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e8a42aa6fa97aee864f6afadea8717676fa43c7a3181cac15e30ac95a2785930->leave($__internal_e8a42aa6fa97aee864f6afadea8717676fa43c7a3181cac15e30ac95a2785930_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
