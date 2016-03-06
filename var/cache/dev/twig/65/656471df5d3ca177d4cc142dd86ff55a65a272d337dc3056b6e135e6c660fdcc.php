<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fbcd0d1a7388d30ab6ec8e7187696c977a9b85d283e0143c8b083a06ebfa7852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2b890f9c0ccf086fe4303170a3fbeb41264ea5200a83016906de4d1fec123cca = $this->env->getExtension("native_profiler");
        $__internal_2b890f9c0ccf086fe4303170a3fbeb41264ea5200a83016906de4d1fec123cca->enter($__internal_2b890f9c0ccf086fe4303170a3fbeb41264ea5200a83016906de4d1fec123cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b890f9c0ccf086fe4303170a3fbeb41264ea5200a83016906de4d1fec123cca->leave($__internal_2b890f9c0ccf086fe4303170a3fbeb41264ea5200a83016906de4d1fec123cca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f80ad5909e0140ba71e167c27780bc3cebbad8ddf217c9976e600eb03a215895 = $this->env->getExtension("native_profiler");
        $__internal_f80ad5909e0140ba71e167c27780bc3cebbad8ddf217c9976e600eb03a215895->enter($__internal_f80ad5909e0140ba71e167c27780bc3cebbad8ddf217c9976e600eb03a215895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f80ad5909e0140ba71e167c27780bc3cebbad8ddf217c9976e600eb03a215895->leave($__internal_f80ad5909e0140ba71e167c27780bc3cebbad8ddf217c9976e600eb03a215895_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
