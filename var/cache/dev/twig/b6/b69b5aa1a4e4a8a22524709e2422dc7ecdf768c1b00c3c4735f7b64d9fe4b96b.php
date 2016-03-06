<?php

/* AviJobBundle:category:new.html.twig */
class __TwigTemplate_de741ccc449ff323dbafea7a41b6b3aa0aeef863a329b5a501def2d03c7701fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AviJobBundle:category:new.html.twig", 1);
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
        $__internal_0ab181125b9a04b9beec78c665db27ee531815cf1259d1cb30af9335fd273da0 = $this->env->getExtension("native_profiler");
        $__internal_0ab181125b9a04b9beec78c665db27ee531815cf1259d1cb30af9335fd273da0->enter($__internal_0ab181125b9a04b9beec78c665db27ee531815cf1259d1cb30af9335fd273da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AviJobBundle:category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ab181125b9a04b9beec78c665db27ee531815cf1259d1cb30af9335fd273da0->leave($__internal_0ab181125b9a04b9beec78c665db27ee531815cf1259d1cb30af9335fd273da0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_908862d6754bdf88c3df9794a1370d054544d977e0e2d0e8f5c72c98c9db3f1d = $this->env->getExtension("native_profiler");
        $__internal_908862d6754bdf88c3df9794a1370d054544d977e0e2d0e8f5c72c98c9db3f1d->enter($__internal_908862d6754bdf88c3df9794a1370d054544d977e0e2d0e8f5c72c98c9db3f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_908862d6754bdf88c3df9794a1370d054544d977e0e2d0e8f5c72c98c9db3f1d->leave($__internal_908862d6754bdf88c3df9794a1370d054544d977e0e2d0e8f5c72c98c9db3f1d_prof);

    }

    public function getTemplateName()
    {
        return "AviJobBundle:category:new.html.twig";
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
