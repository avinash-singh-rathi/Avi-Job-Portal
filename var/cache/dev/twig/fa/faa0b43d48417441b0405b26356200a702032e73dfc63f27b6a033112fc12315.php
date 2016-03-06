<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_fd7faa0596dc45d6493e79503a4efebed94e9c643f9dabfc379ebc29c3839f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_16e9e01a71699a5abe776fc3e4ab7479c31344a63f043a67ec1af558c0d35007 = $this->env->getExtension("native_profiler");
        $__internal_16e9e01a71699a5abe776fc3e4ab7479c31344a63f043a67ec1af558c0d35007->enter($__internal_16e9e01a71699a5abe776fc3e4ab7479c31344a63f043a67ec1af558c0d35007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16e9e01a71699a5abe776fc3e4ab7479c31344a63f043a67ec1af558c0d35007->leave($__internal_16e9e01a71699a5abe776fc3e4ab7479c31344a63f043a67ec1af558c0d35007_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec0d5c2eacd52e73aea1510693932f442691d4236a5567cd68bdf943c8091cdf = $this->env->getExtension("native_profiler");
        $__internal_ec0d5c2eacd52e73aea1510693932f442691d4236a5567cd68bdf943c8091cdf->enter($__internal_ec0d5c2eacd52e73aea1510693932f442691d4236a5567cd68bdf943c8091cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ec0d5c2eacd52e73aea1510693932f442691d4236a5567cd68bdf943c8091cdf->leave($__internal_ec0d5c2eacd52e73aea1510693932f442691d4236a5567cd68bdf943c8091cdf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
