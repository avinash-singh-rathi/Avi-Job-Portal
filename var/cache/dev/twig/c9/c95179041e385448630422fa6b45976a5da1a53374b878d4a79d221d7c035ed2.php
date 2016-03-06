<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_2e870011b86626487edb635402b987421cc44e0056f842814b9e135cecc3094d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9dcd44fff2a241eb452ae84d283336b61d8ee06d4ef937ac0f8b73a33a6468a0 = $this->env->getExtension("native_profiler");
        $__internal_9dcd44fff2a241eb452ae84d283336b61d8ee06d4ef937ac0f8b73a33a6468a0->enter($__internal_9dcd44fff2a241eb452ae84d283336b61d8ee06d4ef937ac0f8b73a33a6468a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dcd44fff2a241eb452ae84d283336b61d8ee06d4ef937ac0f8b73a33a6468a0->leave($__internal_9dcd44fff2a241eb452ae84d283336b61d8ee06d4ef937ac0f8b73a33a6468a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dce5ea82350d74db7a81229fa2d66e2cd3bbcad65fe66141019889731d888dce = $this->env->getExtension("native_profiler");
        $__internal_dce5ea82350d74db7a81229fa2d66e2cd3bbcad65fe66141019889731d888dce->enter($__internal_dce5ea82350d74db7a81229fa2d66e2cd3bbcad65fe66141019889731d888dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_dce5ea82350d74db7a81229fa2d66e2cd3bbcad65fe66141019889731d888dce->leave($__internal_dce5ea82350d74db7a81229fa2d66e2cd3bbcad65fe66141019889731d888dce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
