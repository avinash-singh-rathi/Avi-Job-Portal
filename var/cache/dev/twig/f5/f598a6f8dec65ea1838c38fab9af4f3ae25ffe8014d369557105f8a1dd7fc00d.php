<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_bd9dafd94d6997ae5de6b83d4d232f39dce8f0748b08928295e65aaab237a871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_63ef673d746e9d058a992c30cd3e2bfa6012a1a79be902411d6b82d343d245a0 = $this->env->getExtension("native_profiler");
        $__internal_63ef673d746e9d058a992c30cd3e2bfa6012a1a79be902411d6b82d343d245a0->enter($__internal_63ef673d746e9d058a992c30cd3e2bfa6012a1a79be902411d6b82d343d245a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ef673d746e9d058a992c30cd3e2bfa6012a1a79be902411d6b82d343d245a0->leave($__internal_63ef673d746e9d058a992c30cd3e2bfa6012a1a79be902411d6b82d343d245a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22998631c17f28d38dfe97d7aafd143c4c371eda9bddc34c0d4f9ed989303bec = $this->env->getExtension("native_profiler");
        $__internal_22998631c17f28d38dfe97d7aafd143c4c371eda9bddc34c0d4f9ed989303bec->enter($__internal_22998631c17f28d38dfe97d7aafd143c4c371eda9bddc34c0d4f9ed989303bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_22998631c17f28d38dfe97d7aafd143c4c371eda9bddc34c0d4f9ed989303bec->leave($__internal_22998631c17f28d38dfe97d7aafd143c4c371eda9bddc34c0d4f9ed989303bec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
