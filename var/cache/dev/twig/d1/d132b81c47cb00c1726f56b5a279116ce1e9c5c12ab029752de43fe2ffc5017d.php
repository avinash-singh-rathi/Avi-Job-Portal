<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_893f18c366dd784d9420d9fcb0daadc4940769e1614808c22c9e50afb112cfd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_89174f7a11f04edd2d15d9d71fad95180747be6242bccb0b4971a30cd456833d = $this->env->getExtension("native_profiler");
        $__internal_89174f7a11f04edd2d15d9d71fad95180747be6242bccb0b4971a30cd456833d->enter($__internal_89174f7a11f04edd2d15d9d71fad95180747be6242bccb0b4971a30cd456833d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89174f7a11f04edd2d15d9d71fad95180747be6242bccb0b4971a30cd456833d->leave($__internal_89174f7a11f04edd2d15d9d71fad95180747be6242bccb0b4971a30cd456833d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65d44daa80127cfcf11228cc432fef140ccb0c936fa7fdb80ee96a9632e00155 = $this->env->getExtension("native_profiler");
        $__internal_65d44daa80127cfcf11228cc432fef140ccb0c936fa7fdb80ee96a9632e00155->enter($__internal_65d44daa80127cfcf11228cc432fef140ccb0c936fa7fdb80ee96a9632e00155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_65d44daa80127cfcf11228cc432fef140ccb0c936fa7fdb80ee96a9632e00155->leave($__internal_65d44daa80127cfcf11228cc432fef140ccb0c936fa7fdb80ee96a9632e00155_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
