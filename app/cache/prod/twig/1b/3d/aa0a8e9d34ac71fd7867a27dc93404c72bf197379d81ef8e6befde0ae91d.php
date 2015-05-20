<?php

/* MewPipeVideoBundle:Default:index.html.twig */
class __TwigTemplate_1b3daa0a8e9d34ac71fd7867a27dc93404c72bf197379d81ef8e6befde0ae91d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MewPipeVideoBundle:Default:index.html.twig", 1);
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
        echo " <div class=\"success\">
     Hello world home!
 </div>

     <div class=\"row\">
         <div class=\"panel-heading\">
             <h4>
                 titre panel heading
             </h4>
         </div>
         <div class=\"panel-body\">
             <div class=\"dataTables_wrapper\" role=\"grid\">

                 <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-hover table-bordered datatables paginated\">
                     <thead>
                     <tr>
                         <th>Col 1</th>
                         <th>Col 2</th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                         <th>Cell 1</th>
                         <th>Cell 2</th>
                     </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

         <div class=\"row\">
             <div class=\"panel-heading\">
                 <h4>
                     titre panel heading
                 </h4>
             </div>
             <div class=\"panel-body\">
         <div class=\"col-md-8\" style=\"background: wheat\">
                 <div class=\"videoUiWrapper thumbnail\">
                     <video width=\"100%\" id=\"vdHotPress\" controls>
                         <!-- set width to 100% and add controls for play and volume buttons-->
                         <source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4>
                         Your browser does not support the video tag.
                     </video>
             </div>
         </div>
     </div>
             </div>

 ";
    }

    public function getTemplateName()
    {
        return "MewPipeVideoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
