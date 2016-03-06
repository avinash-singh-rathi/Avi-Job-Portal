<?php

/* :category:edit.html.twig */
class __TwigTemplate_7d3e9615ab548eb8874db5e32d9abf1787130f2403a590651d27c5afc56d8c99 extends Twig_Template
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
        $__internal_79741b16c08c1fe08527bf92f454dced1ec835c830ecab202f45608c76139cfe = $this->env->getExtension("native_profiler");
        $__internal_79741b16c08c1fe08527bf92f454dced1ec835c830ecab202f45608c76139cfe->enter($__internal_79741b16c08c1fe08527bf92f454dced1ec835c830ecab202f45608c76139cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79741b16c08c1fe08527bf92f454dced1ec835c830ecab202f45608c76139cfe->leave($__internal_79741b16c08c1fe08527bf92f454dced1ec835c830ecab202f45608c76139cfe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f86af8e64ef29f2fe3fd4c60e170350dbc813084207d5f54da37d5f8b46d87cf = $this->env->getExtension("native_profiler");
        $__internal_f86af8e64ef29f2fe3fd4c60e170350dbc813084207d5f54da37d5f8b46d87cf->enter($__internal_f86af8e64ef29f2fe3fd4c60e170350dbc813084207d5f54da37d5f8b46d87cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f86af8e64ef29f2fe3fd4c60e170350dbc813084207d5f54da37d5f8b46d87cf->leave($__internal_f86af8e64ef29f2fe3fd4c60e170350dbc813084207d5f54da37d5f8b46d87cf_prof);

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
