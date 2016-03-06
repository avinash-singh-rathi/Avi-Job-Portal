<?php

/* base.html.twig */
class __TwigTemplate_24be5e88f15790d5a36b2621a9606d3e74c208044f5fb6b4e001db02e4324001 extends Twig_Template
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
        $__internal_8573cd95382b36a5019afe58c2f303fa1a96f60f82d1910d889de23ec9700f8b = $this->env->getExtension("native_profiler");
        $__internal_8573cd95382b36a5019afe58c2f303fa1a96f60f82d1910d889de23ec9700f8b->enter($__internal_8573cd95382b36a5019afe58c2f303fa1a96f60f82d1910d889de23ec9700f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8573cd95382b36a5019afe58c2f303fa1a96f60f82d1910d889de23ec9700f8b->leave($__internal_8573cd95382b36a5019afe58c2f303fa1a96f60f82d1910d889de23ec9700f8b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b276d56aeca593ab88093330e844e7ab4d4a33052c56ec6f5431ab29a29e5b5e = $this->env->getExtension("native_profiler");
        $__internal_b276d56aeca593ab88093330e844e7ab4d4a33052c56ec6f5431ab29a29e5b5e->enter($__internal_b276d56aeca593ab88093330e844e7ab4d4a33052c56ec6f5431ab29a29e5b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b276d56aeca593ab88093330e844e7ab4d4a33052c56ec6f5431ab29a29e5b5e->leave($__internal_b276d56aeca593ab88093330e844e7ab4d4a33052c56ec6f5431ab29a29e5b5e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52e67d67ff0ee276df4e31e10377f5b9e9352b269421ea3bb5fe6974f8f8275d = $this->env->getExtension("native_profiler");
        $__internal_52e67d67ff0ee276df4e31e10377f5b9e9352b269421ea3bb5fe6974f8f8275d->enter($__internal_52e67d67ff0ee276df4e31e10377f5b9e9352b269421ea3bb5fe6974f8f8275d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_52e67d67ff0ee276df4e31e10377f5b9e9352b269421ea3bb5fe6974f8f8275d->leave($__internal_52e67d67ff0ee276df4e31e10377f5b9e9352b269421ea3bb5fe6974f8f8275d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf1be01dcca67af6a345d131a6f156cd70207e8b40f423948683043a0e9ebaf4 = $this->env->getExtension("native_profiler");
        $__internal_cf1be01dcca67af6a345d131a6f156cd70207e8b40f423948683043a0e9ebaf4->enter($__internal_cf1be01dcca67af6a345d131a6f156cd70207e8b40f423948683043a0e9ebaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf1be01dcca67af6a345d131a6f156cd70207e8b40f423948683043a0e9ebaf4->leave($__internal_cf1be01dcca67af6a345d131a6f156cd70207e8b40f423948683043a0e9ebaf4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1fcb784572d850f115f80f01e5d96e3c6487c75a30dc18a2bd6fc1f048efa703 = $this->env->getExtension("native_profiler");
        $__internal_1fcb784572d850f115f80f01e5d96e3c6487c75a30dc18a2bd6fc1f048efa703->enter($__internal_1fcb784572d850f115f80f01e5d96e3c6487c75a30dc18a2bd6fc1f048efa703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1fcb784572d850f115f80f01e5d96e3c6487c75a30dc18a2bd6fc1f048efa703->leave($__internal_1fcb784572d850f115f80f01e5d96e3c6487c75a30dc18a2bd6fc1f048efa703_prof);

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
