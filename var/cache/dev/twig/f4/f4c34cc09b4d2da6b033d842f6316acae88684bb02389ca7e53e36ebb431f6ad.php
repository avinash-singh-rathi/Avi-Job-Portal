<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d95ec0c4f4bc227b06dc0872ad12f027856ca0ea8dee080cc3a77c9b85a714cb extends Twig_Template
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
        $__internal_70226003f3c33d5a8f32e34578c4dda18e94b23e817626cf2f9b5482fa85390a = $this->env->getExtension("native_profiler");
        $__internal_70226003f3c33d5a8f32e34578c4dda18e94b23e817626cf2f9b5482fa85390a->enter($__internal_70226003f3c33d5a8f32e34578c4dda18e94b23e817626cf2f9b5482fa85390a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_70226003f3c33d5a8f32e34578c4dda18e94b23e817626cf2f9b5482fa85390a->leave($__internal_70226003f3c33d5a8f32e34578c4dda18e94b23e817626cf2f9b5482fa85390a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
