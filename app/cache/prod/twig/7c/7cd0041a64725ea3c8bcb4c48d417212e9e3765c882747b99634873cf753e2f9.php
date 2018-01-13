<?php

/* :coffee:message.html.twig */
class __TwigTemplate_5b6815439a5c92e5e37cf0b278d4e28170a9fdfc6355e9a7ca5765c8be7000e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":coffee:base.html.twig", ":coffee:message.html.twig", 1);
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
        echo "    <div class=\"well text-center\">
        <h2>";
        // line 5
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</h2>
        ";
        // line 6
        if (array_key_exists("content", $context)) {
            // line 7
            echo "        <div class=\"text-left\">";
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "</div>
        ";
        }
        // line 9
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return ":coffee:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":coffee:message.html.twig", "/var/www/html/mautic/themes/coffee/html/message.html.twig");
    }
}
