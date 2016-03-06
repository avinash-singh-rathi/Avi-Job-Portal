<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_17edd85c291dce349dac9735e19cd45d9457429cad51ddc1fb0f8e35c5b19ceb extends Twig_Template
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
        $__internal_f9be5b8ac409ef54c3ec73cd4f5e98cb5dc283fcfba8b8a92f0f741c4b6df958 = $this->env->getExtension("native_profiler");
        $__internal_f9be5b8ac409ef54c3ec73cd4f5e98cb5dc283fcfba8b8a92f0f741c4b6df958->enter($__internal_f9be5b8ac409ef54c3ec73cd4f5e98cb5dc283fcfba8b8a92f0f741c4b6df958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f9be5b8ac409ef54c3ec73cd4f5e98cb5dc283fcfba8b8a92f0f741c4b6df958->leave($__internal_f9be5b8ac409ef54c3ec73cd4f5e98cb5dc283fcfba8b8a92f0f741c4b6df958_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
