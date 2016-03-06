<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_983bf75723d53dab2014eeb1e8da7e0fc68abea2999e8b33cd485f67e4f74dbf extends Twig_Template
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
        $__internal_ed7f209fd7fdde41359f76af57ac03f2c3ae2d071c6202ee967e7d6137911012 = $this->env->getExtension("native_profiler");
        $__internal_ed7f209fd7fdde41359f76af57ac03f2c3ae2d071c6202ee967e7d6137911012->enter($__internal_ed7f209fd7fdde41359f76af57ac03f2c3ae2d071c6202ee967e7d6137911012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ed7f209fd7fdde41359f76af57ac03f2c3ae2d071c6202ee967e7d6137911012->leave($__internal_ed7f209fd7fdde41359f76af57ac03f2c3ae2d071c6202ee967e7d6137911012_prof);

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
