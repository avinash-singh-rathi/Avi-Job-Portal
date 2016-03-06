<?php

/* :category:new.html.twig */
class __TwigTemplate_348ab2e09dfddbd5dc9c4c9c73aa40026c75752199cda04d3a2f0febdd67c0b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:new.html.twig", 1);
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
        $__internal_66a8dd51538d5d9beaf97b9f837094d482a28a4f061a5c55e857737c6833795d = $this->env->getExtension("native_profiler");
        $__internal_66a8dd51538d5d9beaf97b9f837094d482a28a4f061a5c55e857737c6833795d->enter($__internal_66a8dd51538d5d9beaf97b9f837094d482a28a4f061a5c55e857737c6833795d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66a8dd51538d5d9beaf97b9f837094d482a28a4f061a5c55e857737c6833795d->leave($__internal_66a8dd51538d5d9beaf97b9f837094d482a28a4f061a5c55e857737c6833795d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a18e52c3a722f1ca4407e34c53677ce4e4d8a7df902d10af9f2a01e1354baec1 = $this->env->getExtension("native_profiler");
        $__internal_a18e52c3a722f1ca4407e34c53677ce4e4d8a7df902d10af9f2a01e1354baec1->enter($__internal_a18e52c3a722f1ca4407e34c53677ce4e4d8a7df902d10af9f2a01e1354baec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a18e52c3a722f1ca4407e34c53677ce4e4d8a7df902d10af9f2a01e1354baec1->leave($__internal_a18e52c3a722f1ca4407e34c53677ce4e4d8a7df902d10af9f2a01e1354baec1_prof);

    }

    public function getTemplateName()
    {
        return ":category:new.html.twig";
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
