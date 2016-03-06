<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f911157a73d4150c583fa01312cdfbed6ed5c82e15f8f12c8e517b4092dd1b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e25260c2a3705a20022525df0cd0e597ab13a2032cdbfaf44dbffec08e87b8d4 = $this->env->getExtension("native_profiler");
        $__internal_e25260c2a3705a20022525df0cd0e597ab13a2032cdbfaf44dbffec08e87b8d4->enter($__internal_e25260c2a3705a20022525df0cd0e597ab13a2032cdbfaf44dbffec08e87b8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e25260c2a3705a20022525df0cd0e597ab13a2032cdbfaf44dbffec08e87b8d4->leave($__internal_e25260c2a3705a20022525df0cd0e597ab13a2032cdbfaf44dbffec08e87b8d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa3f94a158a656a9e602e37b76cbdc887b21a8b4c5021065c25e4d01078cd473 = $this->env->getExtension("native_profiler");
        $__internal_fa3f94a158a656a9e602e37b76cbdc887b21a8b4c5021065c25e4d01078cd473->enter($__internal_fa3f94a158a656a9e602e37b76cbdc887b21a8b4c5021065c25e4d01078cd473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fa3f94a158a656a9e602e37b76cbdc887b21a8b4c5021065c25e4d01078cd473->leave($__internal_fa3f94a158a656a9e602e37b76cbdc887b21a8b4c5021065c25e4d01078cd473_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
