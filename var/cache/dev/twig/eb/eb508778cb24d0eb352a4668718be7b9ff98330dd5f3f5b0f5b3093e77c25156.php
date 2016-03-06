<?php

/* AviJobBundle:category:edit.html.twig */
class __TwigTemplate_0c11f36d0b2523822d0d035c5caef2d8556c27f3ffe47a3d0cacfd1cbf7f3565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AviJobBundle:category:edit.html.twig", 1);
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
        $__internal_c4028c485af03e7bf8dfc6c2b6df44ca329658a2a79d5bc90023488ee2ba7ac2 = $this->env->getExtension("native_profiler");
        $__internal_c4028c485af03e7bf8dfc6c2b6df44ca329658a2a79d5bc90023488ee2ba7ac2->enter($__internal_c4028c485af03e7bf8dfc6c2b6df44ca329658a2a79d5bc90023488ee2ba7ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AviJobBundle:category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4028c485af03e7bf8dfc6c2b6df44ca329658a2a79d5bc90023488ee2ba7ac2->leave($__internal_c4028c485af03e7bf8dfc6c2b6df44ca329658a2a79d5bc90023488ee2ba7ac2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eeaf580e78b4283b3bca3c5aa8e7ae0e079b93cb63c2503dd5036275ee1fd50 = $this->env->getExtension("native_profiler");
        $__internal_6eeaf580e78b4283b3bca3c5aa8e7ae0e079b93cb63c2503dd5036275ee1fd50->enter($__internal_6eeaf580e78b4283b3bca3c5aa8e7ae0e079b93cb63c2503dd5036275ee1fd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6eeaf580e78b4283b3bca3c5aa8e7ae0e079b93cb63c2503dd5036275ee1fd50->leave($__internal_6eeaf580e78b4283b3bca3c5aa8e7ae0e079b93cb63c2503dd5036275ee1fd50_prof);

    }

    public function getTemplateName()
    {
        return "AviJobBundle:category:edit.html.twig";
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
