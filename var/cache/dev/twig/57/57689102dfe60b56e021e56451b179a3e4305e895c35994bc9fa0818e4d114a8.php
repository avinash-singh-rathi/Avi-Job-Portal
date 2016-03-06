<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0ee5c4fb87d70a0ba9b7bca1d734abed30adbb22b57405019ddca5f791f772bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_d0fea5bc94bd7abc3e4a2546ebbab961da3be01a6cc3c66653ca2a5587d7f7b7 = $this->env->getExtension("native_profiler");
        $__internal_d0fea5bc94bd7abc3e4a2546ebbab961da3be01a6cc3c66653ca2a5587d7f7b7->enter($__internal_d0fea5bc94bd7abc3e4a2546ebbab961da3be01a6cc3c66653ca2a5587d7f7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0fea5bc94bd7abc3e4a2546ebbab961da3be01a6cc3c66653ca2a5587d7f7b7->leave($__internal_d0fea5bc94bd7abc3e4a2546ebbab961da3be01a6cc3c66653ca2a5587d7f7b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f273f4d62b0ffa80c4ec798f37488969c54e0c5db37d0e1663b6973996650bd0 = $this->env->getExtension("native_profiler");
        $__internal_f273f4d62b0ffa80c4ec798f37488969c54e0c5db37d0e1663b6973996650bd0->enter($__internal_f273f4d62b0ffa80c4ec798f37488969c54e0c5db37d0e1663b6973996650bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f273f4d62b0ffa80c4ec798f37488969c54e0c5db37d0e1663b6973996650bd0->leave($__internal_f273f4d62b0ffa80c4ec798f37488969c54e0c5db37d0e1663b6973996650bd0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
