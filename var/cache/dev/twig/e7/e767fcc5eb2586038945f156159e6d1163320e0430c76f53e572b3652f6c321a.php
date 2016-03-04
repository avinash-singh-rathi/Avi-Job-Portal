<?php

/* category/new.html.twig */
class __TwigTemplate_debedee21b45c2c1923a9a79034b35e392b591ebccda1c374ec50ee8f2950704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e24c877f0c156b3dce758b8a786ec84c8ff757e2164ef2aa9cd4deace597057 = $this->env->getExtension("native_profiler");
        $__internal_9e24c877f0c156b3dce758b8a786ec84c8ff757e2164ef2aa9cd4deace597057->enter($__internal_9e24c877f0c156b3dce758b8a786ec84c8ff757e2164ef2aa9cd4deace597057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e24c877f0c156b3dce758b8a786ec84c8ff757e2164ef2aa9cd4deace597057->leave($__internal_9e24c877f0c156b3dce758b8a786ec84c8ff757e2164ef2aa9cd4deace597057_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0981d0a963a304a91080c7336de3c81530989ace46e4a13e9e8dd0e8a0d5b1d4 = $this->env->getExtension("native_profiler");
        $__internal_0981d0a963a304a91080c7336de3c81530989ace46e4a13e9e8dd0e8a0d5b1d4->enter($__internal_0981d0a963a304a91080c7336de3c81530989ace46e4a13e9e8dd0e8a0d5b1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("avi-category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0981d0a963a304a91080c7336de3c81530989ace46e4a13e9e8dd0e8a0d5b1d4->leave($__internal_0981d0a963a304a91080c7336de3c81530989ace46e4a13e9e8dd0e8a0d5b1d4_prof);

    }

    public function getTemplateName()
    {
        return "category/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Category creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('avi-category_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
