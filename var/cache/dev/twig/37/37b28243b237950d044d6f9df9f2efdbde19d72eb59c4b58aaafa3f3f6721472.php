<?php

/* category/edit.html.twig */
class __TwigTemplate_bbae28635ca19b404f97d212fb90e93169f2d6140604732b84b15cbfbad1b5c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/edit.html.twig", 1);
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
        $__internal_838d7e5dd3712f5728b164a415910f6ffb0f7f50ab9c4cabd1c73b14f9f2ee5a = $this->env->getExtension("native_profiler");
        $__internal_838d7e5dd3712f5728b164a415910f6ffb0f7f50ab9c4cabd1c73b14f9f2ee5a->enter($__internal_838d7e5dd3712f5728b164a415910f6ffb0f7f50ab9c4cabd1c73b14f9f2ee5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_838d7e5dd3712f5728b164a415910f6ffb0f7f50ab9c4cabd1c73b14f9f2ee5a->leave($__internal_838d7e5dd3712f5728b164a415910f6ffb0f7f50ab9c4cabd1c73b14f9f2ee5a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9db34625c47ebd1d3ca86252fa85291014f73b8bfdc7616707fe4d4871fe371b = $this->env->getExtension("native_profiler");
        $__internal_9db34625c47ebd1d3ca86252fa85291014f73b8bfdc7616707fe4d4871fe371b->enter($__internal_9db34625c47ebd1d3ca86252fa85291014f73b8bfdc7616707fe4d4871fe371b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9db34625c47ebd1d3ca86252fa85291014f73b8bfdc7616707fe4d4871fe371b->leave($__internal_9db34625c47ebd1d3ca86252fa85291014f73b8bfdc7616707fe4d4871fe371b_prof);

    }

    public function getTemplateName()
    {
        return "category/edit.html.twig";
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
