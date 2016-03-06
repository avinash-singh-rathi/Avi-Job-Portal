<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_1ffb99e8d4dfcd625320dc2de06ca0c8fc433d3a5c7dd5b5a29d04b1fa061440 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_01cc7a085e4d85816752498ff76c1a42d0874413e36a9cad2e683ee3f996f5a4 = $this->env->getExtension("native_profiler");
        $__internal_01cc7a085e4d85816752498ff76c1a42d0874413e36a9cad2e683ee3f996f5a4->enter($__internal_01cc7a085e4d85816752498ff76c1a42d0874413e36a9cad2e683ee3f996f5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01cc7a085e4d85816752498ff76c1a42d0874413e36a9cad2e683ee3f996f5a4->leave($__internal_01cc7a085e4d85816752498ff76c1a42d0874413e36a9cad2e683ee3f996f5a4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab57b68faf3e4b090ab1e588bd02d36b092f33603369fbd466c02e1e186f64dd = $this->env->getExtension("native_profiler");
        $__internal_ab57b68faf3e4b090ab1e588bd02d36b092f33603369fbd466c02e1e186f64dd->enter($__internal_ab57b68faf3e4b090ab1e588bd02d36b092f33603369fbd466c02e1e186f64dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ab57b68faf3e4b090ab1e588bd02d36b092f33603369fbd466c02e1e186f64dd->leave($__internal_ab57b68faf3e4b090ab1e588bd02d36b092f33603369fbd466c02e1e186f64dd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
