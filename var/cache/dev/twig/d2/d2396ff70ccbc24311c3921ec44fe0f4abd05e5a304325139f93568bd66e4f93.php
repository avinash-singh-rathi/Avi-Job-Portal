<?php

/* base.html.twig */
class __TwigTemplate_5cee324f42d9274909a72392aa795896092bea8bcd4fc3a35663667925f1cef2 extends Twig_Template
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
        $__internal_33240e3787c59d5a7112ae822425c91c283e583a6e8fd80b2020ee959e856395 = $this->env->getExtension("native_profiler");
        $__internal_33240e3787c59d5a7112ae822425c91c283e583a6e8fd80b2020ee959e856395->enter($__internal_33240e3787c59d5a7112ae822425c91c283e583a6e8fd80b2020ee959e856395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_33240e3787c59d5a7112ae822425c91c283e583a6e8fd80b2020ee959e856395->leave($__internal_33240e3787c59d5a7112ae822425c91c283e583a6e8fd80b2020ee959e856395_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7219a59a48c7a197abbf9ebb3ca7154107d3da00ef0390e03401a0098602ac15 = $this->env->getExtension("native_profiler");
        $__internal_7219a59a48c7a197abbf9ebb3ca7154107d3da00ef0390e03401a0098602ac15->enter($__internal_7219a59a48c7a197abbf9ebb3ca7154107d3da00ef0390e03401a0098602ac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7219a59a48c7a197abbf9ebb3ca7154107d3da00ef0390e03401a0098602ac15->leave($__internal_7219a59a48c7a197abbf9ebb3ca7154107d3da00ef0390e03401a0098602ac15_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_699e58595aa9ffabe3d4496ba59a67c1d4f8a93d9e0a7af99b3eec3e07064a3d = $this->env->getExtension("native_profiler");
        $__internal_699e58595aa9ffabe3d4496ba59a67c1d4f8a93d9e0a7af99b3eec3e07064a3d->enter($__internal_699e58595aa9ffabe3d4496ba59a67c1d4f8a93d9e0a7af99b3eec3e07064a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_699e58595aa9ffabe3d4496ba59a67c1d4f8a93d9e0a7af99b3eec3e07064a3d->leave($__internal_699e58595aa9ffabe3d4496ba59a67c1d4f8a93d9e0a7af99b3eec3e07064a3d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_07b8c3d570f7fc27ecabeb46ad2d6a9eafb19b948dcdbdf09690d637a2b07adb = $this->env->getExtension("native_profiler");
        $__internal_07b8c3d570f7fc27ecabeb46ad2d6a9eafb19b948dcdbdf09690d637a2b07adb->enter($__internal_07b8c3d570f7fc27ecabeb46ad2d6a9eafb19b948dcdbdf09690d637a2b07adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_07b8c3d570f7fc27ecabeb46ad2d6a9eafb19b948dcdbdf09690d637a2b07adb->leave($__internal_07b8c3d570f7fc27ecabeb46ad2d6a9eafb19b948dcdbdf09690d637a2b07adb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82d0e9f30bb78107bb5d0a9ef93a65b19a71d36d7c7ecd2929fa0c8411c101c6 = $this->env->getExtension("native_profiler");
        $__internal_82d0e9f30bb78107bb5d0a9ef93a65b19a71d36d7c7ecd2929fa0c8411c101c6->enter($__internal_82d0e9f30bb78107bb5d0a9ef93a65b19a71d36d7c7ecd2929fa0c8411c101c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82d0e9f30bb78107bb5d0a9ef93a65b19a71d36d7c7ecd2929fa0c8411c101c6->leave($__internal_82d0e9f30bb78107bb5d0a9ef93a65b19a71d36d7c7ecd2929fa0c8411c101c6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
