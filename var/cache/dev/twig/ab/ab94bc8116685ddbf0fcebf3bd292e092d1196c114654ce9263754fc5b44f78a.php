<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_87b9fd7fe5c96bb5557ff8ed79a8119412672c2478ed678525f1a5692c10f561 extends Twig_Template
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
        $__internal_f8356e893a425dd6301d0fa54d2ddc3e7c033be541bccc07acecc51c28b70455 = $this->env->getExtension("native_profiler");
        $__internal_f8356e893a425dd6301d0fa54d2ddc3e7c033be541bccc07acecc51c28b70455->enter($__internal_f8356e893a425dd6301d0fa54d2ddc3e7c033be541bccc07acecc51c28b70455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f8356e893a425dd6301d0fa54d2ddc3e7c033be541bccc07acecc51c28b70455->leave($__internal_f8356e893a425dd6301d0fa54d2ddc3e7c033be541bccc07acecc51c28b70455_prof);

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
