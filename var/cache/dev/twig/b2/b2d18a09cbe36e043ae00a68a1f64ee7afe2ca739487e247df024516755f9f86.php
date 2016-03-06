<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_54e84aa8c5887da2230bd9ad7ff77ef82982321899458bba2d1012941be2731e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b462291d753d16198fcfe2532ab9e45ae0a4d14c8b64621319e6387be29051a7 = $this->env->getExtension("native_profiler");
        $__internal_b462291d753d16198fcfe2532ab9e45ae0a4d14c8b64621319e6387be29051a7->enter($__internal_b462291d753d16198fcfe2532ab9e45ae0a4d14c8b64621319e6387be29051a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b462291d753d16198fcfe2532ab9e45ae0a4d14c8b64621319e6387be29051a7->leave($__internal_b462291d753d16198fcfe2532ab9e45ae0a4d14c8b64621319e6387be29051a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18a5ceb018706c5dbe812379dd7c31d752142d8ada0a2f9cc977e033bda6e330 = $this->env->getExtension("native_profiler");
        $__internal_18a5ceb018706c5dbe812379dd7c31d752142d8ada0a2f9cc977e033bda6e330->enter($__internal_18a5ceb018706c5dbe812379dd7c31d752142d8ada0a2f9cc977e033bda6e330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_18a5ceb018706c5dbe812379dd7c31d752142d8ada0a2f9cc977e033bda6e330->leave($__internal_18a5ceb018706c5dbe812379dd7c31d752142d8ada0a2f9cc977e033bda6e330_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
