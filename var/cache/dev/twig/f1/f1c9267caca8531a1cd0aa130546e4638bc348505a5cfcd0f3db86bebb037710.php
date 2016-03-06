<?php

/* category/new.html.twig */
class __TwigTemplate_60f28c8154902f7c5186595300417208e42e830903b7ef9c7b174ca9cff5fb7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/new.html.twig", 1);
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
        $__internal_6f86df4cb0bfe027eaca4b8999cf56a08fbbc9f19af329295ce777994fb3b914 = $this->env->getExtension("native_profiler");
        $__internal_6f86df4cb0bfe027eaca4b8999cf56a08fbbc9f19af329295ce777994fb3b914->enter($__internal_6f86df4cb0bfe027eaca4b8999cf56a08fbbc9f19af329295ce777994fb3b914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f86df4cb0bfe027eaca4b8999cf56a08fbbc9f19af329295ce777994fb3b914->leave($__internal_6f86df4cb0bfe027eaca4b8999cf56a08fbbc9f19af329295ce777994fb3b914_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b80f8db4d3e61f4beececd7ea46696f242cbdf465ecb75f1b9df47e69cb64f = $this->env->getExtension("native_profiler");
        $__internal_99b80f8db4d3e61f4beececd7ea46696f242cbdf465ecb75f1b9df47e69cb64f->enter($__internal_99b80f8db4d3e61f4beececd7ea46696f242cbdf465ecb75f1b9df47e69cb64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_99b80f8db4d3e61f4beececd7ea46696f242cbdf465ecb75f1b9df47e69cb64f->leave($__internal_99b80f8db4d3e61f4beececd7ea46696f242cbdf465ecb75f1b9df47e69cb64f_prof);

    }

    public function getTemplateName()
    {
        return "category/new.html.twig";
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
