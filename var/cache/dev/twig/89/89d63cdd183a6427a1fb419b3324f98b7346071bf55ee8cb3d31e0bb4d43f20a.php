<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_c15a4008484b7075645482233fe3513f8263a2850fc45e3630680101e95e5412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_6cc5cdd4a8898594fd6212fb98508e76971a930911e02a07b729c13d802778fa = $this->env->getExtension("native_profiler");
        $__internal_6cc5cdd4a8898594fd6212fb98508e76971a930911e02a07b729c13d802778fa->enter($__internal_6cc5cdd4a8898594fd6212fb98508e76971a930911e02a07b729c13d802778fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc5cdd4a8898594fd6212fb98508e76971a930911e02a07b729c13d802778fa->leave($__internal_6cc5cdd4a8898594fd6212fb98508e76971a930911e02a07b729c13d802778fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cec791f14cd0c010bf544286a7decb891e4b518cca6d1b20d2f6008ae2bf5cbd = $this->env->getExtension("native_profiler");
        $__internal_cec791f14cd0c010bf544286a7decb891e4b518cca6d1b20d2f6008ae2bf5cbd->enter($__internal_cec791f14cd0c010bf544286a7decb891e4b518cca6d1b20d2f6008ae2bf5cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_cec791f14cd0c010bf544286a7decb891e4b518cca6d1b20d2f6008ae2bf5cbd->leave($__internal_cec791f14cd0c010bf544286a7decb891e4b518cca6d1b20d2f6008ae2bf5cbd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
