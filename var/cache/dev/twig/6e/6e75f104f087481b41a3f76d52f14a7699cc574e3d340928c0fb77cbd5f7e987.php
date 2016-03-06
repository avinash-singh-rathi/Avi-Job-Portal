<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d2b552dd7f255dd5ab1498cec46b5494c0ad1a7fd41b85ddf817b8d87ffc1b27 extends Twig_Template
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
        $__internal_5286beb148292f7969508bac211ed0369988569d946d241a7d80264eed57e8cc = $this->env->getExtension("native_profiler");
        $__internal_5286beb148292f7969508bac211ed0369988569d946d241a7d80264eed57e8cc->enter($__internal_5286beb148292f7969508bac211ed0369988569d946d241a7d80264eed57e8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5286beb148292f7969508bac211ed0369988569d946d241a7d80264eed57e8cc->leave($__internal_5286beb148292f7969508bac211ed0369988569d946d241a7d80264eed57e8cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
