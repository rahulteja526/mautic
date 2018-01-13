<?php

/* :blank:message.html.twig */
class __TwigTemplate_d2366b991cabceb522cb0f858b25e50f6cf3537c32b599ae80f80e3924913d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((":" . (isset($context["template"]) ? $context["template"] : null)) . ":base.html.twig"), ":blank:message.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" type=\"text/css\" />
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div>
        ";
        // line 7
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "
        ";
        // line 8
        if (array_key_exists("content", $context)) {
            // line 9
            echo "        <div>";
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "</div>
        ";
        }
        // line 11
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return ":blank:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  48 => 9,  46 => 8,  42 => 7,  39 => 6,  36 => 5,  31 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":blank:message.html.twig", "/var/www/html/mautic/themes/blank/html/message.html.twig");
    }
}
