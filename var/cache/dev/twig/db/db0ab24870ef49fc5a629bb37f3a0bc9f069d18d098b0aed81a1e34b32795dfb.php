<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_52d2b5eeacf3f92a9f73d0924edeec5616fb21b20f8eaa4032e300bb1fdf3f49 extends Twig_Template
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
        $__internal_d7749543a5f6a8fedcc79597209e4946c3fd6023a6c07d4b1100ace0df1c2942 = $this->env->getExtension("native_profiler");
        $__internal_d7749543a5f6a8fedcc79597209e4946c3fd6023a6c07d4b1100ace0df1c2942->enter($__internal_d7749543a5f6a8fedcc79597209e4946c3fd6023a6c07d4b1100ace0df1c2942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d7749543a5f6a8fedcc79597209e4946c3fd6023a6c07d4b1100ace0df1c2942->leave($__internal_d7749543a5f6a8fedcc79597209e4946c3fd6023a6c07d4b1100ace0df1c2942_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
