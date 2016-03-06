<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_59470ea1363c9349ed2f7b651c57780f69a27ff7d80a380439827fe9f160e169 extends Twig_Template
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
        $__internal_f86cdedc667bb1838e09163cead22969bc332f1567ab50f209b9e7731cefe465 = $this->env->getExtension("native_profiler");
        $__internal_f86cdedc667bb1838e09163cead22969bc332f1567ab50f209b9e7731cefe465->enter($__internal_f86cdedc667bb1838e09163cead22969bc332f1567ab50f209b9e7731cefe465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f86cdedc667bb1838e09163cead22969bc332f1567ab50f209b9e7731cefe465->leave($__internal_f86cdedc667bb1838e09163cead22969bc332f1567ab50f209b9e7731cefe465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
