<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_f00529f0e778bb562f96ae69677be150aa7501b63747015b6bf39cee5918fc89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_46df07245b137673c0676e2f1ee2a666f5be76704b28c38c38debee74f75c6e5 = $this->env->getExtension("native_profiler");
        $__internal_46df07245b137673c0676e2f1ee2a666f5be76704b28c38c38debee74f75c6e5->enter($__internal_46df07245b137673c0676e2f1ee2a666f5be76704b28c38c38debee74f75c6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46df07245b137673c0676e2f1ee2a666f5be76704b28c38c38debee74f75c6e5->leave($__internal_46df07245b137673c0676e2f1ee2a666f5be76704b28c38c38debee74f75c6e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c42db6128bf904c700fda9e78fb3e037db8774ef0744c98336d174b8ca089ca = $this->env->getExtension("native_profiler");
        $__internal_8c42db6128bf904c700fda9e78fb3e037db8774ef0744c98336d174b8ca089ca->enter($__internal_8c42db6128bf904c700fda9e78fb3e037db8774ef0744c98336d174b8ca089ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_8c42db6128bf904c700fda9e78fb3e037db8774ef0744c98336d174b8ca089ca->leave($__internal_8c42db6128bf904c700fda9e78fb3e037db8774ef0744c98336d174b8ca089ca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
