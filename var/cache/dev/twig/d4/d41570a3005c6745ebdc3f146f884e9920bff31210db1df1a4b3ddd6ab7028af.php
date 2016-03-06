<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_84981fc462e61b252ebbaecf4821818242d8d86351311fdaeded82addffb0742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_899ee9652ef5bf91f686e2660f0d7f7efbf4aa325b7a2d2042b061c0f56841ee = $this->env->getExtension("native_profiler");
        $__internal_899ee9652ef5bf91f686e2660f0d7f7efbf4aa325b7a2d2042b061c0f56841ee->enter($__internal_899ee9652ef5bf91f686e2660f0d7f7efbf4aa325b7a2d2042b061c0f56841ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_899ee9652ef5bf91f686e2660f0d7f7efbf4aa325b7a2d2042b061c0f56841ee->leave($__internal_899ee9652ef5bf91f686e2660f0d7f7efbf4aa325b7a2d2042b061c0f56841ee_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_621183b3007992952e22adeadbb686c923533f90fd07dfba28f4f960f4c7379d = $this->env->getExtension("native_profiler");
        $__internal_621183b3007992952e22adeadbb686c923533f90fd07dfba28f4f960f4c7379d->enter($__internal_621183b3007992952e22adeadbb686c923533f90fd07dfba28f4f960f4c7379d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_621183b3007992952e22adeadbb686c923533f90fd07dfba28f4f960f4c7379d->leave($__internal_621183b3007992952e22adeadbb686c923533f90fd07dfba28f4f960f4c7379d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a5effc190d2306d2704087dfcaf9e50573222f4e88c6c23126449fafd95c6341 = $this->env->getExtension("native_profiler");
        $__internal_a5effc190d2306d2704087dfcaf9e50573222f4e88c6c23126449fafd95c6341->enter($__internal_a5effc190d2306d2704087dfcaf9e50573222f4e88c6c23126449fafd95c6341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a5effc190d2306d2704087dfcaf9e50573222f4e88c6c23126449fafd95c6341->leave($__internal_a5effc190d2306d2704087dfcaf9e50573222f4e88c6c23126449fafd95c6341_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7b4b16275117c5e1e71c5a57839ce53d4d1511e9af8d70453bdc069e16875899 = $this->env->getExtension("native_profiler");
        $__internal_7b4b16275117c5e1e71c5a57839ce53d4d1511e9af8d70453bdc069e16875899->enter($__internal_7b4b16275117c5e1e71c5a57839ce53d4d1511e9af8d70453bdc069e16875899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7b4b16275117c5e1e71c5a57839ce53d4d1511e9af8d70453bdc069e16875899->leave($__internal_7b4b16275117c5e1e71c5a57839ce53d4d1511e9af8d70453bdc069e16875899_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
