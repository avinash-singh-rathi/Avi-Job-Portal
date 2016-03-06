<?php

/* :category:new.html.twig */
class __TwigTemplate_16040b20a928806c11556e5ee6ab0ac1e4fde71f9fa1e08ddc27900e8a0ca723 extends Twig_Template
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
        $__internal_85a69c3ec6b34c1dd213bb1b1e9c18ede652f24f5d367fc2a517414956a9875f = $this->env->getExtension("native_profiler");
        $__internal_85a69c3ec6b34c1dd213bb1b1e9c18ede652f24f5d367fc2a517414956a9875f->enter($__internal_85a69c3ec6b34c1dd213bb1b1e9c18ede652f24f5d367fc2a517414956a9875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85a69c3ec6b34c1dd213bb1b1e9c18ede652f24f5d367fc2a517414956a9875f->leave($__internal_85a69c3ec6b34c1dd213bb1b1e9c18ede652f24f5d367fc2a517414956a9875f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c50d55831da50ce961030643c681260219dbd2133ff14bb4adad6ce81a79430 = $this->env->getExtension("native_profiler");
        $__internal_5c50d55831da50ce961030643c681260219dbd2133ff14bb4adad6ce81a79430->enter($__internal_5c50d55831da50ce961030643c681260219dbd2133ff14bb4adad6ce81a79430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c50d55831da50ce961030643c681260219dbd2133ff14bb4adad6ce81a79430->leave($__internal_5c50d55831da50ce961030643c681260219dbd2133ff14bb4adad6ce81a79430_prof);

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
