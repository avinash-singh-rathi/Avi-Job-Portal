<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_7474e07f733b5159b32372968cc62b5af8487b39d353f2212ee3f5b4bbe24922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_da03d051ea37a4c1342ca1c4851b853c7a884871f500e474fceb60ca49694ce3 = $this->env->getExtension("native_profiler");
        $__internal_da03d051ea37a4c1342ca1c4851b853c7a884871f500e474fceb60ca49694ce3->enter($__internal_da03d051ea37a4c1342ca1c4851b853c7a884871f500e474fceb60ca49694ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da03d051ea37a4c1342ca1c4851b853c7a884871f500e474fceb60ca49694ce3->leave($__internal_da03d051ea37a4c1342ca1c4851b853c7a884871f500e474fceb60ca49694ce3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e23bafeb39581ad4a7820d65b89ec8f74a976effe5ad63e6d4564dfa48d94f6 = $this->env->getExtension("native_profiler");
        $__internal_7e23bafeb39581ad4a7820d65b89ec8f74a976effe5ad63e6d4564dfa48d94f6->enter($__internal_7e23bafeb39581ad4a7820d65b89ec8f74a976effe5ad63e6d4564dfa48d94f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7e23bafeb39581ad4a7820d65b89ec8f74a976effe5ad63e6d4564dfa48d94f6->leave($__internal_7e23bafeb39581ad4a7820d65b89ec8f74a976effe5ad63e6d4564dfa48d94f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
