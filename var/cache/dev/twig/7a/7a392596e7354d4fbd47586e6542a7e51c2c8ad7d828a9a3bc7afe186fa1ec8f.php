<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_34e2a40adca0ecfd515ae92e2bde391e77dccf45b95bdbd6b25a8d41c774ee56 extends Twig_Template
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
        $__internal_5368967445974b2ceaef333e226c66db7c08cd48845ceda8bf76b649cedc2dca = $this->env->getExtension("native_profiler");
        $__internal_5368967445974b2ceaef333e226c66db7c08cd48845ceda8bf76b649cedc2dca->enter($__internal_5368967445974b2ceaef333e226c66db7c08cd48845ceda8bf76b649cedc2dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5368967445974b2ceaef333e226c66db7c08cd48845ceda8bf76b649cedc2dca->leave($__internal_5368967445974b2ceaef333e226c66db7c08cd48845ceda8bf76b649cedc2dca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ea64bdebdf01c61c566ddca39c14050d4f090a3d173d135031325089f915b9ca = $this->env->getExtension("native_profiler");
        $__internal_ea64bdebdf01c61c566ddca39c14050d4f090a3d173d135031325089f915b9ca->enter($__internal_ea64bdebdf01c61c566ddca39c14050d4f090a3d173d135031325089f915b9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ea64bdebdf01c61c566ddca39c14050d4f090a3d173d135031325089f915b9ca->leave($__internal_ea64bdebdf01c61c566ddca39c14050d4f090a3d173d135031325089f915b9ca_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_228129921074562f3e4c7349e40754c50afb6e2f247c53f837b8281f5368fec3 = $this->env->getExtension("native_profiler");
        $__internal_228129921074562f3e4c7349e40754c50afb6e2f247c53f837b8281f5368fec3->enter($__internal_228129921074562f3e4c7349e40754c50afb6e2f247c53f837b8281f5368fec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_228129921074562f3e4c7349e40754c50afb6e2f247c53f837b8281f5368fec3->leave($__internal_228129921074562f3e4c7349e40754c50afb6e2f247c53f837b8281f5368fec3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e00a0415b7321fe5ae683255178d62f33fae0cf7c60d1c9d032bfe5a98f783af = $this->env->getExtension("native_profiler");
        $__internal_e00a0415b7321fe5ae683255178d62f33fae0cf7c60d1c9d032bfe5a98f783af->enter($__internal_e00a0415b7321fe5ae683255178d62f33fae0cf7c60d1c9d032bfe5a98f783af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e00a0415b7321fe5ae683255178d62f33fae0cf7c60d1c9d032bfe5a98f783af->leave($__internal_e00a0415b7321fe5ae683255178d62f33fae0cf7c60d1c9d032bfe5a98f783af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
