<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c286fac6dbcfe231286c71a716436364b0f1c3246235066c0726a14d78571cd5 extends Twig_Template
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
        $__internal_647eb04b58e1a0261c98dd3cce0f1809f057b581661c4c561f212f2d6d449ce5 = $this->env->getExtension("native_profiler");
        $__internal_647eb04b58e1a0261c98dd3cce0f1809f057b581661c4c561f212f2d6d449ce5->enter($__internal_647eb04b58e1a0261c98dd3cce0f1809f057b581661c4c561f212f2d6d449ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_647eb04b58e1a0261c98dd3cce0f1809f057b581661c4c561f212f2d6d449ce5->leave($__internal_647eb04b58e1a0261c98dd3cce0f1809f057b581661c4c561f212f2d6d449ce5_prof);

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
