<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_1e39e5cc3e4c107a078c8180a07029bc8fc32db14e84a5f9d1cead11d1facd20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_f9846090c4bc732b3d1a607b85c5780d7e26173bfbfc5775654d8fd83a6bda1b = $this->env->getExtension("native_profiler");
        $__internal_f9846090c4bc732b3d1a607b85c5780d7e26173bfbfc5775654d8fd83a6bda1b->enter($__internal_f9846090c4bc732b3d1a607b85c5780d7e26173bfbfc5775654d8fd83a6bda1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9846090c4bc732b3d1a607b85c5780d7e26173bfbfc5775654d8fd83a6bda1b->leave($__internal_f9846090c4bc732b3d1a607b85c5780d7e26173bfbfc5775654d8fd83a6bda1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5d785e72b07ecac8c37f8661f1e4e450b791b235e4e27d60593e4f61272cc4a = $this->env->getExtension("native_profiler");
        $__internal_e5d785e72b07ecac8c37f8661f1e4e450b791b235e4e27d60593e4f61272cc4a->enter($__internal_e5d785e72b07ecac8c37f8661f1e4e450b791b235e4e27d60593e4f61272cc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_e5d785e72b07ecac8c37f8661f1e4e450b791b235e4e27d60593e4f61272cc4a->leave($__internal_e5d785e72b07ecac8c37f8661f1e4e450b791b235e4e27d60593e4f61272cc4a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
