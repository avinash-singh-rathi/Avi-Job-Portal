<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9ee00631b686cc9a1d03b46706466a8303e96478a31b250b451ea52939c15019 extends Twig_Template
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
        $__internal_17331a90660b29514e1be45585324f7666d46875ae607ddc1e3c900073e9ed02 = $this->env->getExtension("native_profiler");
        $__internal_17331a90660b29514e1be45585324f7666d46875ae607ddc1e3c900073e9ed02->enter($__internal_17331a90660b29514e1be45585324f7666d46875ae607ddc1e3c900073e9ed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_17331a90660b29514e1be45585324f7666d46875ae607ddc1e3c900073e9ed02->leave($__internal_17331a90660b29514e1be45585324f7666d46875ae607ddc1e3c900073e9ed02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
