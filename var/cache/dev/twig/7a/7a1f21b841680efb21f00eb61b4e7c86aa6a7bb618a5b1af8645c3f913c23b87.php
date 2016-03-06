<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4af71883b77db686ad99c8d1dab1d28a9c283d378d42629599541cf50a0af494 extends Twig_Template
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
        $__internal_1b162967e18df0fc5f493cd84a629a982b43e94007137829050698e5072771d0 = $this->env->getExtension("native_profiler");
        $__internal_1b162967e18df0fc5f493cd84a629a982b43e94007137829050698e5072771d0->enter($__internal_1b162967e18df0fc5f493cd84a629a982b43e94007137829050698e5072771d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1b162967e18df0fc5f493cd84a629a982b43e94007137829050698e5072771d0->leave($__internal_1b162967e18df0fc5f493cd84a629a982b43e94007137829050698e5072771d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
