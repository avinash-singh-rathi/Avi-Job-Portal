<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_91ee7842cdcbff0b1bb487df88101f83804893fadd79d4959ffcfe37d9f39baf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_6c6245b4906d20fbbabb419623e253e4c9a664328e1deb9fcc74e79aa157e0cc = $this->env->getExtension("native_profiler");
        $__internal_6c6245b4906d20fbbabb419623e253e4c9a664328e1deb9fcc74e79aa157e0cc->enter($__internal_6c6245b4906d20fbbabb419623e253e4c9a664328e1deb9fcc74e79aa157e0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c6245b4906d20fbbabb419623e253e4c9a664328e1deb9fcc74e79aa157e0cc->leave($__internal_6c6245b4906d20fbbabb419623e253e4c9a664328e1deb9fcc74e79aa157e0cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba4cceac95f9cebd8388ae6e45fe196441438cf3519fc00108231413136af971 = $this->env->getExtension("native_profiler");
        $__internal_ba4cceac95f9cebd8388ae6e45fe196441438cf3519fc00108231413136af971->enter($__internal_ba4cceac95f9cebd8388ae6e45fe196441438cf3519fc00108231413136af971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ba4cceac95f9cebd8388ae6e45fe196441438cf3519fc00108231413136af971->leave($__internal_ba4cceac95f9cebd8388ae6e45fe196441438cf3519fc00108231413136af971_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
