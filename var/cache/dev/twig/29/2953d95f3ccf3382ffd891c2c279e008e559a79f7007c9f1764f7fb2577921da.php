<?php

/* @AviJob/category/new.html.twig */
class __TwigTemplate_1ddc4346a0876ca331f54f2179f4bc50a718989f4f35f69dda16d37d1864e98d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@AviJob/category/new.html.twig", 1);
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
        $__internal_41333b38dee02baa1029a0d285ae563f34c563aa656ca3ed45b4b204f25a08cc = $this->env->getExtension("native_profiler");
        $__internal_41333b38dee02baa1029a0d285ae563f34c563aa656ca3ed45b4b204f25a08cc->enter($__internal_41333b38dee02baa1029a0d285ae563f34c563aa656ca3ed45b4b204f25a08cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AviJob/category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41333b38dee02baa1029a0d285ae563f34c563aa656ca3ed45b4b204f25a08cc->leave($__internal_41333b38dee02baa1029a0d285ae563f34c563aa656ca3ed45b4b204f25a08cc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e2c2302140336073ae9ea3684741f5ba60940b8ad7ba0227f55d834cad4e393 = $this->env->getExtension("native_profiler");
        $__internal_0e2c2302140336073ae9ea3684741f5ba60940b8ad7ba0227f55d834cad4e393->enter($__internal_0e2c2302140336073ae9ea3684741f5ba60940b8ad7ba0227f55d834cad4e393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e2c2302140336073ae9ea3684741f5ba60940b8ad7ba0227f55d834cad4e393->leave($__internal_0e2c2302140336073ae9ea3684741f5ba60940b8ad7ba0227f55d834cad4e393_prof);

    }

    public function getTemplateName()
    {
        return "@AviJob/category/new.html.twig";
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
