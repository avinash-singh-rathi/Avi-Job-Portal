<?php

/* @AviJob/category/edit.html.twig */
class __TwigTemplate_849d43efe882a20a99666fdedf220f937c1e44c48bb53d7c361e34557839110d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@AviJob/category/edit.html.twig", 1);
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
        $__internal_0a1f863e1f723d0105eb18a02df128301314ef587960f3b333b825e21f0d1bc0 = $this->env->getExtension("native_profiler");
        $__internal_0a1f863e1f723d0105eb18a02df128301314ef587960f3b333b825e21f0d1bc0->enter($__internal_0a1f863e1f723d0105eb18a02df128301314ef587960f3b333b825e21f0d1bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AviJob/category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a1f863e1f723d0105eb18a02df128301314ef587960f3b333b825e21f0d1bc0->leave($__internal_0a1f863e1f723d0105eb18a02df128301314ef587960f3b333b825e21f0d1bc0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_85b2beb4d8238169b7c740c0a77ec99feebe3566d8f02b2dd0e36fe2dabcce94 = $this->env->getExtension("native_profiler");
        $__internal_85b2beb4d8238169b7c740c0a77ec99feebe3566d8f02b2dd0e36fe2dabcce94->enter($__internal_85b2beb4d8238169b7c740c0a77ec99feebe3566d8f02b2dd0e36fe2dabcce94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85b2beb4d8238169b7c740c0a77ec99feebe3566d8f02b2dd0e36fe2dabcce94->leave($__internal_85b2beb4d8238169b7c740c0a77ec99feebe3566d8f02b2dd0e36fe2dabcce94_prof);

    }

    public function getTemplateName()
    {
        return "@AviJob/category/edit.html.twig";
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
