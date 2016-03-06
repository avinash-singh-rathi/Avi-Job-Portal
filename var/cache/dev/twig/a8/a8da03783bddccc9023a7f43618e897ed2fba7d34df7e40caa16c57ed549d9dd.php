<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_eb3607c2d6ff5504df7bdcaaf655951d67adf47f7dc9fd0159f8c045e6ebac9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_13fd1611c2652e0fed353e1b901519545e30fa2eff487384436c5f8fdb046533 = $this->env->getExtension("native_profiler");
        $__internal_13fd1611c2652e0fed353e1b901519545e30fa2eff487384436c5f8fdb046533->enter($__internal_13fd1611c2652e0fed353e1b901519545e30fa2eff487384436c5f8fdb046533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13fd1611c2652e0fed353e1b901519545e30fa2eff487384436c5f8fdb046533->leave($__internal_13fd1611c2652e0fed353e1b901519545e30fa2eff487384436c5f8fdb046533_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1b5b009300b273bb3c8d0ced5a55eab19b249c9ee0358ac608dd1de9fa4f1dc = $this->env->getExtension("native_profiler");
        $__internal_a1b5b009300b273bb3c8d0ced5a55eab19b249c9ee0358ac608dd1de9fa4f1dc->enter($__internal_a1b5b009300b273bb3c8d0ced5a55eab19b249c9ee0358ac608dd1de9fa4f1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a1b5b009300b273bb3c8d0ced5a55eab19b249c9ee0358ac608dd1de9fa4f1dc->leave($__internal_a1b5b009300b273bb3c8d0ced5a55eab19b249c9ee0358ac608dd1de9fa4f1dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
