<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_06a0726f7f30468d1a953685e373cc7e1903c7645cb9ed9aa3278b9abe6d750c extends Twig_Template
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
        $__internal_f7d1b72e8bc76f7223ff9d76399419c30c233b1768033fa139fb4983c14882ba = $this->env->getExtension("native_profiler");
        $__internal_f7d1b72e8bc76f7223ff9d76399419c30c233b1768033fa139fb4983c14882ba->enter($__internal_f7d1b72e8bc76f7223ff9d76399419c30c233b1768033fa139fb4983c14882ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f7d1b72e8bc76f7223ff9d76399419c30c233b1768033fa139fb4983c14882ba->leave($__internal_f7d1b72e8bc76f7223ff9d76399419c30c233b1768033fa139fb4983c14882ba_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e83c0f19261bcc20c58c2c3281204db60e39f934cfa91e5b331ea74f946d8538 = $this->env->getExtension("native_profiler");
        $__internal_e83c0f19261bcc20c58c2c3281204db60e39f934cfa91e5b331ea74f946d8538->enter($__internal_e83c0f19261bcc20c58c2c3281204db60e39f934cfa91e5b331ea74f946d8538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e83c0f19261bcc20c58c2c3281204db60e39f934cfa91e5b331ea74f946d8538->leave($__internal_e83c0f19261bcc20c58c2c3281204db60e39f934cfa91e5b331ea74f946d8538_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9cfca3a447701c44622730f8004e91874d4db8d11f06b69b5ef74b3fd3fd4558 = $this->env->getExtension("native_profiler");
        $__internal_9cfca3a447701c44622730f8004e91874d4db8d11f06b69b5ef74b3fd3fd4558->enter($__internal_9cfca3a447701c44622730f8004e91874d4db8d11f06b69b5ef74b3fd3fd4558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9cfca3a447701c44622730f8004e91874d4db8d11f06b69b5ef74b3fd3fd4558->leave($__internal_9cfca3a447701c44622730f8004e91874d4db8d11f06b69b5ef74b3fd3fd4558_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_601e09954d2274003abe474b3fe093a7d7b35ba7c9672d90c4952d37674d85d7 = $this->env->getExtension("native_profiler");
        $__internal_601e09954d2274003abe474b3fe093a7d7b35ba7c9672d90c4952d37674d85d7->enter($__internal_601e09954d2274003abe474b3fe093a7d7b35ba7c9672d90c4952d37674d85d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_601e09954d2274003abe474b3fe093a7d7b35ba7c9672d90c4952d37674d85d7->leave($__internal_601e09954d2274003abe474b3fe093a7d7b35ba7c9672d90c4952d37674d85d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
