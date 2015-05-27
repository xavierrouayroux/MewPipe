<?php

/* FpOpenIdBundle:Security:login.html.twig */
class __TwigTemplate_0fc8e4e2ee7d4fbd2a89758b05bf2bb6559ec22acf1b4a8c7a72a8c8e170b8f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FpOpenIdBundle::layout.html.twig", "FpOpenIdBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fp_openid_content' => array($this, 'block_fp_openid_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FpOpenIdBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fp_openid_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form id=\"fp_openid_login\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fp_openid_security_check");
        echo "\" method=\"post\">
        <label for=\"openid_identifier\">Identifier: </label>
        <input type=\"text\" id=\"openid_identifier\" name=\"openid_identifier\" value=\"\" />
        <input type=\"hidden\" id=\"target_path\" name=\"_target_path\" value=\"\" />

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Login\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "FpOpenIdBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  40 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
