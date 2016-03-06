<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_589c9c7783da6433a93d43b0dfd547db3b6d19157ff316a5e2a2bb552acc42c4 extends Twig_Template
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
        $__internal_ccf72efe4769991c89b7f8c9c11fcc6f9fffdeb29f31398b9fe17afbdc81f06b = $this->env->getExtension("native_profiler");
        $__internal_ccf72efe4769991c89b7f8c9c11fcc6f9fffdeb29f31398b9fe17afbdc81f06b->enter($__internal_ccf72efe4769991c89b7f8c9c11fcc6f9fffdeb29f31398b9fe17afbdc81f06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ccf72efe4769991c89b7f8c9c11fcc6f9fffdeb29f31398b9fe17afbdc81f06b->leave($__internal_ccf72efe4769991c89b7f8c9c11fcc6f9fffdeb29f31398b9fe17afbdc81f06b_prof);

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
