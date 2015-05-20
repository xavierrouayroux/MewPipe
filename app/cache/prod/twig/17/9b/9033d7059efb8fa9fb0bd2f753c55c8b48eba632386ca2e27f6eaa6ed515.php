<?php

/* MewPipeVideoBundle:Video:upload.html.twig */
class __TwigTemplate_179b9033d7059efb8fa9fb0bd2f753c55c8b48eba632386ca2e27f6eaa6ed515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MewPipeVideoBundle:Video:upload.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
     <div class=\"row\">
         <div class=\"panel-heading\">
             <h4>
                 Ajouter une nouvelle video
             </h4>
         </div>
         <div class=\"panel-body\">
             ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

             <div class=\"form-group\">
                 ";
        // line 15
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "valid", array())) {
            // line 16
            echo "                     <div class=\"form-group\">
                         ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                     </div>
                 ";
        }
        // line 20
        echo "             </div>
             <legend><i class=\"fa fa-user\"></i> </legend>
             <fieldset>
                 <div class=\"form-group\">
                     ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'row');
        echo "
                 </div>
                 <div class=\"form-group\">
                     ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'row');
        echo "
                 </div>
                 <div class=\"form-group\">
                     ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'row');
        echo "
                 </div>
             </fieldset>
             <legend><i class=\"fa fa-video-camera\"></i> </legend>
             <fieldset>
                 <div class=\"form-group\">
                     ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'row');
        echo "
                 </div>
             </fieldset>

             ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
             <div class=\"panel-footer\">
                 <div class=\"row\">
                     <div class=\"col-sm-6 col-sm-offset-3\">
                         <div class=\"btn-toolbar\">
                             ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'widget');
        echo "
                         </div>
                     </div>
                 </div>
             </div>
             ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end', array("render_rest" => false));
        echo "
         </div>
     </div>

 ";
    }

    public function getTemplateName()
    {
        return "MewPipeVideoBundle:Video:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 50,  100 => 45,  92 => 40,  85 => 36,  76 => 30,  70 => 27,  64 => 24,  58 => 20,  52 => 17,  49 => 16,  47 => 15,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
