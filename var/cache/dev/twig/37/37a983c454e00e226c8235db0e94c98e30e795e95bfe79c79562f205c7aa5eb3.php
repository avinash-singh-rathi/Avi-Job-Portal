<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_594c2f4418e2c46ede5fc4d2c4eed4b827043b48e5a9d02e763a74c7262a65d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_97d312c38e46fde16030b5978f21d297b0d46422fdcc97d0392b04353c8bc0bb = $this->env->getExtension("native_profiler");
        $__internal_97d312c38e46fde16030b5978f21d297b0d46422fdcc97d0392b04353c8bc0bb->enter($__internal_97d312c38e46fde16030b5978f21d297b0d46422fdcc97d0392b04353c8bc0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97d312c38e46fde16030b5978f21d297b0d46422fdcc97d0392b04353c8bc0bb->leave($__internal_97d312c38e46fde16030b5978f21d297b0d46422fdcc97d0392b04353c8bc0bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0eebae7e8e51e2816cee8155216d7da2da4078d3beab522e60fc39b78d4327d7 = $this->env->getExtension("native_profiler");
        $__internal_0eebae7e8e51e2816cee8155216d7da2da4078d3beab522e60fc39b78d4327d7->enter($__internal_0eebae7e8e51e2816cee8155216d7da2da4078d3beab522e60fc39b78d4327d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0eebae7e8e51e2816cee8155216d7da2da4078d3beab522e60fc39b78d4327d7->leave($__internal_0eebae7e8e51e2816cee8155216d7da2da4078d3beab522e60fc39b78d4327d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
