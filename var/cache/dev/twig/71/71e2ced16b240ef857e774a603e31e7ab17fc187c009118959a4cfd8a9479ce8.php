<?php

/* @AviJob/category/edit.html.twig */
class __TwigTemplate_225d97de1168a329edd0e00f90f6d0b5e17eacc22a406f3b692778072a9118f8 extends Twig_Template
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
        $__internal_9a5fa7c129e9e416f505c2033e95c24d4cd6986ada385345d2d042b17628fe2d = $this->env->getExtension("native_profiler");
        $__internal_9a5fa7c129e9e416f505c2033e95c24d4cd6986ada385345d2d042b17628fe2d->enter($__internal_9a5fa7c129e9e416f505c2033e95c24d4cd6986ada385345d2d042b17628fe2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AviJob/category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a5fa7c129e9e416f505c2033e95c24d4cd6986ada385345d2d042b17628fe2d->leave($__internal_9a5fa7c129e9e416f505c2033e95c24d4cd6986ada385345d2d042b17628fe2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cebc5c00700759557f703b8323e6df872da78d95666d9e18b9d825094bcc79dd = $this->env->getExtension("native_profiler");
        $__internal_cebc5c00700759557f703b8323e6df872da78d95666d9e18b9d825094bcc79dd->enter($__internal_cebc5c00700759557f703b8323e6df872da78d95666d9e18b9d825094bcc79dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cebc5c00700759557f703b8323e6df872da78d95666d9e18b9d825094bcc79dd->leave($__internal_cebc5c00700759557f703b8323e6df872da78d95666d9e18b9d825094bcc79dd_prof);

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
