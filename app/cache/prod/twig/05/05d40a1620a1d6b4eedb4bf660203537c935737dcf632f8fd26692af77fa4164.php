<?php

/* :coffee:form.html.twig */
class __TwigTemplate_a01ee43cc181a278afb3a5f4a7d0e8abfa323df900d1a13658f4900d19f7aa08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":coffee:base.html.twig", ":coffee:form.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":coffee:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (array_key_exists("message", $context)) {
            // line 5
            echo "        <div class=\"well text-center\">
            <h2>";
            // line 6
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "</h2>
        </div>
    ";
        }
        // line 9
        echo "
    <div class=\"form-container\">
        ";
        // line 11
        if (array_key_exists("header", $context)) {
            // line 12
            echo "        <h4>";
            echo twig_escape_filter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true);
            echo "</h4>
        ";
        }
        // line 14
        echo "        ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return ":coffee:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  49 => 12,  47 => 11,  43 => 9,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":coffee:form.html.twig", "/var/www/html/mautic/themes/coffee/html/form.html.twig");
    }
}
