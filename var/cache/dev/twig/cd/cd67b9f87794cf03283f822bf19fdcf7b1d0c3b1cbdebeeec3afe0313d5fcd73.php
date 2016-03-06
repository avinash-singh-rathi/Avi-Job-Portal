<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ab852573ca9996b254de69a637d205fee246d4457a49f9d5528ff1935f192d0d extends Twig_Template
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
        $__internal_8021cd9b21b01fe00ea17fb86a58dcf620abb4cc63b3d602067b927f33c0b4f1 = $this->env->getExtension("native_profiler");
        $__internal_8021cd9b21b01fe00ea17fb86a58dcf620abb4cc63b3d602067b927f33c0b4f1->enter($__internal_8021cd9b21b01fe00ea17fb86a58dcf620abb4cc63b3d602067b927f33c0b4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8021cd9b21b01fe00ea17fb86a58dcf620abb4cc63b3d602067b927f33c0b4f1->leave($__internal_8021cd9b21b01fe00ea17fb86a58dcf620abb4cc63b3d602067b927f33c0b4f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
