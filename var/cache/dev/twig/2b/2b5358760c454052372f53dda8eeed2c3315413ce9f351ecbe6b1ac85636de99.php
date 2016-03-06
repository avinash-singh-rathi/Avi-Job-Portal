<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_4dabda1dc3abbdf85fba4b086bcb48b63a7d06be59fbab509217d7cad6f747bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_dbd456a9046676a7397e0af53f36ee8c59bc5eec5cd241dfc9b85cc1cf8db82e = $this->env->getExtension("native_profiler");
        $__internal_dbd456a9046676a7397e0af53f36ee8c59bc5eec5cd241dfc9b85cc1cf8db82e->enter($__internal_dbd456a9046676a7397e0af53f36ee8c59bc5eec5cd241dfc9b85cc1cf8db82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd456a9046676a7397e0af53f36ee8c59bc5eec5cd241dfc9b85cc1cf8db82e->leave($__internal_dbd456a9046676a7397e0af53f36ee8c59bc5eec5cd241dfc9b85cc1cf8db82e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50528e2597e018496325ca5d887b3dc938ee335614396b24f829ad9bd943f718 = $this->env->getExtension("native_profiler");
        $__internal_50528e2597e018496325ca5d887b3dc938ee335614396b24f829ad9bd943f718->enter($__internal_50528e2597e018496325ca5d887b3dc938ee335614396b24f829ad9bd943f718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_50528e2597e018496325ca5d887b3dc938ee335614396b24f829ad9bd943f718->leave($__internal_50528e2597e018496325ca5d887b3dc938ee335614396b24f829ad9bd943f718_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
