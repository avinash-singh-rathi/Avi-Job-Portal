<?php

/* @AviJob/category/new.html.twig */
class __TwigTemplate_5485346b12ac0bc09e8ad122cd179e53cdb2fc86101e81e3e96bfa3316f53a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@AviJob/category/new.html.twig", 1);
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
        $__internal_cd95353e6246c5f9c1dde80da3b58a7744978e21a7e2d39a444adc6910fd51a2 = $this->env->getExtension("native_profiler");
        $__internal_cd95353e6246c5f9c1dde80da3b58a7744978e21a7e2d39a444adc6910fd51a2->enter($__internal_cd95353e6246c5f9c1dde80da3b58a7744978e21a7e2d39a444adc6910fd51a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AviJob/category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd95353e6246c5f9c1dde80da3b58a7744978e21a7e2d39a444adc6910fd51a2->leave($__internal_cd95353e6246c5f9c1dde80da3b58a7744978e21a7e2d39a444adc6910fd51a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d38d9569b1ae4da33924c3200a8b28053fb74a8b2e9774cf4df1faf5c538bffc = $this->env->getExtension("native_profiler");
        $__internal_d38d9569b1ae4da33924c3200a8b28053fb74a8b2e9774cf4df1faf5c538bffc->enter($__internal_d38d9569b1ae4da33924c3200a8b28053fb74a8b2e9774cf4df1faf5c538bffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d38d9569b1ae4da33924c3200a8b28053fb74a8b2e9774cf4df1faf5c538bffc->leave($__internal_d38d9569b1ae4da33924c3200a8b28053fb74a8b2e9774cf4df1faf5c538bffc_prof);

    }

    public function getTemplateName()
    {
        return "@AviJob/category/new.html.twig";
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
