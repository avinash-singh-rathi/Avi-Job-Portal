<?php

/* AviJobBundle:category/new.html.twig */
class __TwigTemplate_de741ccc449ff323dbafea7a41b6b3aa0aeef863a329b5a501def2d03c7701fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AviJobBundle:category/new.html.twig", 1);
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
        $__internal_d6434ce810915ff906129018a823dc002d350085e52687a29e1a78d6b4f16d3c = $this->env->getExtension("native_profiler");
        $__internal_d6434ce810915ff906129018a823dc002d350085e52687a29e1a78d6b4f16d3c->enter($__internal_d6434ce810915ff906129018a823dc002d350085e52687a29e1a78d6b4f16d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AviJobBundle:category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6434ce810915ff906129018a823dc002d350085e52687a29e1a78d6b4f16d3c->leave($__internal_d6434ce810915ff906129018a823dc002d350085e52687a29e1a78d6b4f16d3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdff15b226b655f7d1957abda81dfed51628e7997fcc861046e1e5677ad07159 = $this->env->getExtension("native_profiler");
        $__internal_fdff15b226b655f7d1957abda81dfed51628e7997fcc861046e1e5677ad07159->enter($__internal_fdff15b226b655f7d1957abda81dfed51628e7997fcc861046e1e5677ad07159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fdff15b226b655f7d1957abda81dfed51628e7997fcc861046e1e5677ad07159->leave($__internal_fdff15b226b655f7d1957abda81dfed51628e7997fcc861046e1e5677ad07159_prof);

    }

    public function getTemplateName()
    {
        return "AviJobBundle:category/new.html.twig";
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
