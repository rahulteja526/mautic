<?php

/* :goldstar:message.html.twig */
class __TwigTemplate_5b095f792c3d9bcd9c73bc247cb7825ab8c35ad43749545f3cc12e5be0ec9809 extends Twig_Template
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
        return $this->loadTemplate(((":" . (isset($context["template"]) ? $context["template"] : null)) . ":base.html.twig"), ":goldstar:message.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"well text-center\">
        ";
        // line 5
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "
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
        return ":goldstar:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  39 => 7,  37 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":goldstar:message.html.twig", "/var/www/html/mautic/themes/goldstar/html/message.html.twig");
    }
}
