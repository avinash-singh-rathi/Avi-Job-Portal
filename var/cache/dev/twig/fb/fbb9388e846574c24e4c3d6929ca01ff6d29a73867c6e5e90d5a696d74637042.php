<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_57d9f1d98fdca11d1438e5433f6e7f1193267509179d335b6fe9a55567a36558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_dd187514a9a401ec182569d7ae38d8775a563c5d43cc8b998644cdaccefaee3b = $this->env->getExtension("native_profiler");
        $__internal_dd187514a9a401ec182569d7ae38d8775a563c5d43cc8b998644cdaccefaee3b->enter($__internal_dd187514a9a401ec182569d7ae38d8775a563c5d43cc8b998644cdaccefaee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd187514a9a401ec182569d7ae38d8775a563c5d43cc8b998644cdaccefaee3b->leave($__internal_dd187514a9a401ec182569d7ae38d8775a563c5d43cc8b998644cdaccefaee3b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b8d9e3a5e2514c6038919146ff613d811b799b5123f343ef6985fb3c559d1fb = $this->env->getExtension("native_profiler");
        $__internal_8b8d9e3a5e2514c6038919146ff613d811b799b5123f343ef6985fb3c559d1fb->enter($__internal_8b8d9e3a5e2514c6038919146ff613d811b799b5123f343ef6985fb3c559d1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8b8d9e3a5e2514c6038919146ff613d811b799b5123f343ef6985fb3c559d1fb->leave($__internal_8b8d9e3a5e2514c6038919146ff613d811b799b5123f343ef6985fb3c559d1fb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
