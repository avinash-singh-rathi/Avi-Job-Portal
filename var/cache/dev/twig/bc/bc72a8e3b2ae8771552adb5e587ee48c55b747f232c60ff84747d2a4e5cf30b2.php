<?php

/* :category:edit.html.twig */
class __TwigTemplate_860067e60469da6e9c15aa866497279e3729cae14dea72e37189d7407d54d8c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:edit.html.twig", 1);
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
        $__internal_a2a519977b0be128fdfd5e233be6849ed738dcd02828aa7f013108d73b5187a5 = $this->env->getExtension("native_profiler");
        $__internal_a2a519977b0be128fdfd5e233be6849ed738dcd02828aa7f013108d73b5187a5->enter($__internal_a2a519977b0be128fdfd5e233be6849ed738dcd02828aa7f013108d73b5187a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a519977b0be128fdfd5e233be6849ed738dcd02828aa7f013108d73b5187a5->leave($__internal_a2a519977b0be128fdfd5e233be6849ed738dcd02828aa7f013108d73b5187a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11c7d81079fbdc7bfe070474da71f3f27aac7b09dc8acdb08df595a42ef5e915 = $this->env->getExtension("native_profiler");
        $__internal_11c7d81079fbdc7bfe070474da71f3f27aac7b09dc8acdb08df595a42ef5e915->enter($__internal_11c7d81079fbdc7bfe070474da71f3f27aac7b09dc8acdb08df595a42ef5e915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("avi-category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_11c7d81079fbdc7bfe070474da71f3f27aac7b09dc8acdb08df595a42ef5e915->leave($__internal_11c7d81079fbdc7bfe070474da71f3f27aac7b09dc8acdb08df595a42ef5e915_prof);

    }

    public function getTemplateName()
    {
        return ":category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Category edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('avi-category_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
