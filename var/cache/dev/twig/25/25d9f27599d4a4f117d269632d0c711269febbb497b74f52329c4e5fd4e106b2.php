<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_aa4c1928d1ad072b5ae1b0b07d71ecb0895e991a7cb2f65ae12f1aae9416dcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_6c4047930304cf996a498f2a32300b22678bea576d8133126931ef720197a6d3 = $this->env->getExtension("native_profiler");
        $__internal_6c4047930304cf996a498f2a32300b22678bea576d8133126931ef720197a6d3->enter($__internal_6c4047930304cf996a498f2a32300b22678bea576d8133126931ef720197a6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c4047930304cf996a498f2a32300b22678bea576d8133126931ef720197a6d3->leave($__internal_6c4047930304cf996a498f2a32300b22678bea576d8133126931ef720197a6d3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5528aabdd9513e7e5f98271cca363e16590f5bc6684cf9e952264d7357649b2e = $this->env->getExtension("native_profiler");
        $__internal_5528aabdd9513e7e5f98271cca363e16590f5bc6684cf9e952264d7357649b2e->enter($__internal_5528aabdd9513e7e5f98271cca363e16590f5bc6684cf9e952264d7357649b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_5528aabdd9513e7e5f98271cca363e16590f5bc6684cf9e952264d7357649b2e->leave($__internal_5528aabdd9513e7e5f98271cca363e16590f5bc6684cf9e952264d7357649b2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
