<?php

/* AviJobBundle:category:new.html.twig */
class __TwigTemplate_63c5500e2112a2c51ec3935e868d8e4c1f37315c39f8920b9a27bb3c36db39f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AviJobBundle:category:new.html.twig", 1);
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
        $__internal_b15a304e5566e817c650f82f1998f80824c01c5613d7658d0a15769074cd8027 = $this->env->getExtension("native_profiler");
        $__internal_b15a304e5566e817c650f82f1998f80824c01c5613d7658d0a15769074cd8027->enter($__internal_b15a304e5566e817c650f82f1998f80824c01c5613d7658d0a15769074cd8027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AviJobBundle:category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b15a304e5566e817c650f82f1998f80824c01c5613d7658d0a15769074cd8027->leave($__internal_b15a304e5566e817c650f82f1998f80824c01c5613d7658d0a15769074cd8027_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c286425c105fc033d88e845c15a404f6cd678f5877eff1346eaa27e2ce4c9129 = $this->env->getExtension("native_profiler");
        $__internal_c286425c105fc033d88e845c15a404f6cd678f5877eff1346eaa27e2ce4c9129->enter($__internal_c286425c105fc033d88e845c15a404f6cd678f5877eff1346eaa27e2ce4c9129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c286425c105fc033d88e845c15a404f6cd678f5877eff1346eaa27e2ce4c9129->leave($__internal_c286425c105fc033d88e845c15a404f6cd678f5877eff1346eaa27e2ce4c9129_prof);

    }

    public function getTemplateName()
    {
        return "AviJobBundle:category:new.html.twig";
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
