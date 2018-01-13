<?php

/* :blank:page.html.twig */
class __TwigTemplate_45634590043099e885cd67116aacc1dc6d1e6bec56392a31edabee99bdc266f6 extends Twig_Template
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
        return $this->loadTemplate(((":" . (isset($context["template"]) ? $context["template"] : null)) . ":base.html.twig"), ":blank:page.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"width: 600;\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\">
            <tbody>
                <tr>
                    <td>
                        <div data-slot-container=\"1\" style=\"min-height: 30px\">
                            <div data-slot=\"text\">
                                <br>
                                <h2>Hello there!</h2>
                                <br>
                                We haven't heard from you for a while...
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
</div>
";
    }

    public function getTemplateName()
    {
        return ":blank:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":blank:page.html.twig", "/var/www/html/mautic/themes/blank/html/page.html.twig");
    }
}
