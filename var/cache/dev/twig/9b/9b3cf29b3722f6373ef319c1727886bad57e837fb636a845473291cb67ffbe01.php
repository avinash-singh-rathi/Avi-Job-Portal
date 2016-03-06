<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d16a8710b9f1c99b4fa5149ae22681c6aa6f65de104b58bd7768a69bf49a6b5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_54f1bb0e83a43790d5376729cff336bb9ba21cc6eabfdb7fdca2a1c6840adb47 = $this->env->getExtension("native_profiler");
        $__internal_54f1bb0e83a43790d5376729cff336bb9ba21cc6eabfdb7fdca2a1c6840adb47->enter($__internal_54f1bb0e83a43790d5376729cff336bb9ba21cc6eabfdb7fdca2a1c6840adb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f1bb0e83a43790d5376729cff336bb9ba21cc6eabfdb7fdca2a1c6840adb47->leave($__internal_54f1bb0e83a43790d5376729cff336bb9ba21cc6eabfdb7fdca2a1c6840adb47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_394ae2c14c683e3b1c109a232b46884831d6402f2774126604794d08d102ba62 = $this->env->getExtension("native_profiler");
        $__internal_394ae2c14c683e3b1c109a232b46884831d6402f2774126604794d08d102ba62->enter($__internal_394ae2c14c683e3b1c109a232b46884831d6402f2774126604794d08d102ba62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_394ae2c14c683e3b1c109a232b46884831d6402f2774126604794d08d102ba62->leave($__internal_394ae2c14c683e3b1c109a232b46884831d6402f2774126604794d08d102ba62_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
