<?php

/* FpOpenIdBundle::layout.html.twig */
class __TwigTemplate_68360ab756d4e19bfc9376303e88ea40924c9585e89bfba0db3d9b6752d3aefa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fp_openid_content' => array($this, 'block_fp_openid_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_OPENID")) {
            // line 9
            echo "                logged in via an openid provider:
                <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fp_openid_security_logout");
            echo "\">Logout</a>
            ";
        } else {
            // line 12
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fp_openid_security_login");
            echo "\">Login</a>
            ";
        }
        // line 14
        echo "        </div>

        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 17
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 19
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        <div>
            ";
        // line 25
        $this->displayBlock('fp_openid_content', $context, $blocks);
        // line 27
        echo "        </div>
    </body>
</html>
";
    }

    // line 25
    public function block_fp_openid_content($context, array $blocks = array())
    {
        // line 26
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FpOpenIdBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  91 => 25,  84 => 27,  82 => 25,  78 => 23,  72 => 22,  63 => 19,  58 => 18,  53 => 17,  49 => 16,  45 => 14,  39 => 12,  34 => 10,  31 => 9,  29 => 8,  20 => 1,);
    }
}
