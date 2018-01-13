<?php

/* :goldstar:form.html.twig */
class __TwigTemplate_d5a17bd4f61c9ad3986732eb58255ce2ca8e8542fea33fdff84ffd4e39b66b8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((":" . (isset($context["template"]) ? $context["template"] : null)) . ":base.html.twig"), ":goldstar:form.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
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
        return ":goldstar:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  48 => 12,  46 => 11,  42 => 9,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":goldstar:form.html.twig", "/var/www/html/mautic/themes/goldstar/html/form.html.twig");
    }
}
