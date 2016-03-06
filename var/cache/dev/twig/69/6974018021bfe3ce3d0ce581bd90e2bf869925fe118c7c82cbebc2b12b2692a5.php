<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_f80fa7cd45aa3e38fe95dc9d1939dd292694ad9fd9f5676e885665e53968fea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_ab56c67862c3032a1062090cd5cf6d8c3bc48b57ea483e5b32470158b7112dbc = $this->env->getExtension("native_profiler");
        $__internal_ab56c67862c3032a1062090cd5cf6d8c3bc48b57ea483e5b32470158b7112dbc->enter($__internal_ab56c67862c3032a1062090cd5cf6d8c3bc48b57ea483e5b32470158b7112dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab56c67862c3032a1062090cd5cf6d8c3bc48b57ea483e5b32470158b7112dbc->leave($__internal_ab56c67862c3032a1062090cd5cf6d8c3bc48b57ea483e5b32470158b7112dbc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_020e3cff28b60ab385d1072a47c88522165777100ed684e4f88d3319e58222a0 = $this->env->getExtension("native_profiler");
        $__internal_020e3cff28b60ab385d1072a47c88522165777100ed684e4f88d3319e58222a0->enter($__internal_020e3cff28b60ab385d1072a47c88522165777100ed684e4f88d3319e58222a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_020e3cff28b60ab385d1072a47c88522165777100ed684e4f88d3319e58222a0->leave($__internal_020e3cff28b60ab385d1072a47c88522165777100ed684e4f88d3319e58222a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
