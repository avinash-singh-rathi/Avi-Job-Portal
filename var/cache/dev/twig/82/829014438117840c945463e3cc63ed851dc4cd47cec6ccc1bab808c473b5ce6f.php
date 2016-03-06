<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_930b8405ef7aa3c3b23bdfe51143af26c52c75c3b7d5a6fbaa97dbe9fdb88436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59ea848ced5e142b460ead567c767309acc296a3003e59c965106fa25a9ed91e = $this->env->getExtension("native_profiler");
        $__internal_59ea848ced5e142b460ead567c767309acc296a3003e59c965106fa25a9ed91e->enter($__internal_59ea848ced5e142b460ead567c767309acc296a3003e59c965106fa25a9ed91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_59ea848ced5e142b460ead567c767309acc296a3003e59c965106fa25a9ed91e->leave($__internal_59ea848ced5e142b460ead567c767309acc296a3003e59c965106fa25a9ed91e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
