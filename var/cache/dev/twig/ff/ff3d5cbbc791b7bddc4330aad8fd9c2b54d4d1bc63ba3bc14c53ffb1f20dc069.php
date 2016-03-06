<?php

/* ::base.html.twig */
class __TwigTemplate_87eeccf0914a2eb27450f35358715b6a50f18734f8b33c2caa838f8c58f9f270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7eeac267535a9aad612bd96da5a9d09c0110c71bc49a0e999467f58880456470 = $this->env->getExtension("native_profiler");
        $__internal_7eeac267535a9aad612bd96da5a9d09c0110c71bc49a0e999467f58880456470->enter($__internal_7eeac267535a9aad612bd96da5a9d09c0110c71bc49a0e999467f58880456470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7eeac267535a9aad612bd96da5a9d09c0110c71bc49a0e999467f58880456470->leave($__internal_7eeac267535a9aad612bd96da5a9d09c0110c71bc49a0e999467f58880456470_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0608a61a4a9af9399b42761da389bb994d5d3153e6b9bc4267d18cad7472d8c = $this->env->getExtension("native_profiler");
        $__internal_c0608a61a4a9af9399b42761da389bb994d5d3153e6b9bc4267d18cad7472d8c->enter($__internal_c0608a61a4a9af9399b42761da389bb994d5d3153e6b9bc4267d18cad7472d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c0608a61a4a9af9399b42761da389bb994d5d3153e6b9bc4267d18cad7472d8c->leave($__internal_c0608a61a4a9af9399b42761da389bb994d5d3153e6b9bc4267d18cad7472d8c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95ebf61d1c4fc5f6afa4cccc84a156399d848cf65d72cc1acce0dcad6f6d900d = $this->env->getExtension("native_profiler");
        $__internal_95ebf61d1c4fc5f6afa4cccc84a156399d848cf65d72cc1acce0dcad6f6d900d->enter($__internal_95ebf61d1c4fc5f6afa4cccc84a156399d848cf65d72cc1acce0dcad6f6d900d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_95ebf61d1c4fc5f6afa4cccc84a156399d848cf65d72cc1acce0dcad6f6d900d->leave($__internal_95ebf61d1c4fc5f6afa4cccc84a156399d848cf65d72cc1acce0dcad6f6d900d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f504e0c051c148ca24e98d1576bb3fe6de63b50cb0d00998a485f5a96a669675 = $this->env->getExtension("native_profiler");
        $__internal_f504e0c051c148ca24e98d1576bb3fe6de63b50cb0d00998a485f5a96a669675->enter($__internal_f504e0c051c148ca24e98d1576bb3fe6de63b50cb0d00998a485f5a96a669675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f504e0c051c148ca24e98d1576bb3fe6de63b50cb0d00998a485f5a96a669675->leave($__internal_f504e0c051c148ca24e98d1576bb3fe6de63b50cb0d00998a485f5a96a669675_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_700c72ea30554ac5e651d041df820090aa7c3268c9d44b322201ed3e22088ad2 = $this->env->getExtension("native_profiler");
        $__internal_700c72ea30554ac5e651d041df820090aa7c3268c9d44b322201ed3e22088ad2->enter($__internal_700c72ea30554ac5e651d041df820090aa7c3268c9d44b322201ed3e22088ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_700c72ea30554ac5e651d041df820090aa7c3268c9d44b322201ed3e22088ad2->leave($__internal_700c72ea30554ac5e651d041df820090aa7c3268c9d44b322201ed3e22088ad2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
