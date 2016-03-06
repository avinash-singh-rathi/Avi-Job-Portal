<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a1af2f6371744ead601db411adfc3706e4646c94a0620cf781bee3f84f8695eb extends Twig_Template
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
        $__internal_6bc1384fa820926515a8c51d445d25c5e161891c4b10672ef262efe43c578398 = $this->env->getExtension("native_profiler");
        $__internal_6bc1384fa820926515a8c51d445d25c5e161891c4b10672ef262efe43c578398->enter($__internal_6bc1384fa820926515a8c51d445d25c5e161891c4b10672ef262efe43c578398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6bc1384fa820926515a8c51d445d25c5e161891c4b10672ef262efe43c578398->leave($__internal_6bc1384fa820926515a8c51d445d25c5e161891c4b10672ef262efe43c578398_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e736ac41a5f6192c527b30a5eaaa6470ea290c62093344b88e9233d332e70188 = $this->env->getExtension("native_profiler");
        $__internal_e736ac41a5f6192c527b30a5eaaa6470ea290c62093344b88e9233d332e70188->enter($__internal_e736ac41a5f6192c527b30a5eaaa6470ea290c62093344b88e9233d332e70188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e736ac41a5f6192c527b30a5eaaa6470ea290c62093344b88e9233d332e70188->leave($__internal_e736ac41a5f6192c527b30a5eaaa6470ea290c62093344b88e9233d332e70188_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_765c1443a3f5ffd792bc4541a49878ec089e0682e3d8c6e79e5d2eef9a1e5268 = $this->env->getExtension("native_profiler");
        $__internal_765c1443a3f5ffd792bc4541a49878ec089e0682e3d8c6e79e5d2eef9a1e5268->enter($__internal_765c1443a3f5ffd792bc4541a49878ec089e0682e3d8c6e79e5d2eef9a1e5268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_765c1443a3f5ffd792bc4541a49878ec089e0682e3d8c6e79e5d2eef9a1e5268->leave($__internal_765c1443a3f5ffd792bc4541a49878ec089e0682e3d8c6e79e5d2eef9a1e5268_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_23af1dd1b093dfe356d4d6ac8deb46771ea76d6c7d9824ebc25c8eb6cfdb07fa = $this->env->getExtension("native_profiler");
        $__internal_23af1dd1b093dfe356d4d6ac8deb46771ea76d6c7d9824ebc25c8eb6cfdb07fa->enter($__internal_23af1dd1b093dfe356d4d6ac8deb46771ea76d6c7d9824ebc25c8eb6cfdb07fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_23af1dd1b093dfe356d4d6ac8deb46771ea76d6c7d9824ebc25c8eb6cfdb07fa->leave($__internal_23af1dd1b093dfe356d4d6ac8deb46771ea76d6c7d9824ebc25c8eb6cfdb07fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
