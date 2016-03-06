<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ab4f5c60e723a6ddb7a0af4549b5224de366305839b63e80637baacacb6b9505 extends Twig_Template
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
        $__internal_940778d6414b3a5525ddb1d17d36e669bf4587c07ec71c78211e2af027e0679d = $this->env->getExtension("native_profiler");
        $__internal_940778d6414b3a5525ddb1d17d36e669bf4587c07ec71c78211e2af027e0679d->enter($__internal_940778d6414b3a5525ddb1d17d36e669bf4587c07ec71c78211e2af027e0679d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_940778d6414b3a5525ddb1d17d36e669bf4587c07ec71c78211e2af027e0679d->leave($__internal_940778d6414b3a5525ddb1d17d36e669bf4587c07ec71c78211e2af027e0679d_prof);

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
