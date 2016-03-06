<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5e0dded2e11e23b4e97dc3c8495526911c219ff280eabb7d847689acd5c48114 extends Twig_Template
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
        $__internal_454a193225c27b3d46eb26e2323a5e0bafc7ccbbc47805937e1fe00e67dc31ab = $this->env->getExtension("native_profiler");
        $__internal_454a193225c27b3d46eb26e2323a5e0bafc7ccbbc47805937e1fe00e67dc31ab->enter($__internal_454a193225c27b3d46eb26e2323a5e0bafc7ccbbc47805937e1fe00e67dc31ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_454a193225c27b3d46eb26e2323a5e0bafc7ccbbc47805937e1fe00e67dc31ab->leave($__internal_454a193225c27b3d46eb26e2323a5e0bafc7ccbbc47805937e1fe00e67dc31ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
