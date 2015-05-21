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
        echo "     
     <div class=\"row\">
         <div class=\"panel-heading\">
             <h4>
                 Dernière vidéo !
             </h4>
         </div>
         <div class=\"panel-body\">
             <div class=\"dataTables_wrapper\" role=\"grid\">

                 <div class=\"row\">
                     <div class=\"col-xs-3\">
                         <div class=\"dataTables_length\">
                             <label>
                                 <select class=\"form-control\" size=\"1\" id=\"maxPerPage\">
                                     <option ";
        // line 19
        if (((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")) == 5)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "max" => 5, "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">5</option>
                                     <option ";
        // line 20
        if (((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")) == 10)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "max" => 10, "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">10</option>
                                     <option ";
        // line 21
        if (((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")) == 25)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "max" => 25, "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">25</option>
                                     <option ";
        // line 22
        if (((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")) == 50)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "max" => 50, "sort" => (isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")), "direction" => (isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")))), "html", null, true);
        echo "\">50</option>
                                 </select>
                                 videos par page
                             </label>
                         </div>
                     </div>
                 </div>

                 <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-hover table-bordered datatables paginated\">
                     <thead>
                     <tr>
                         <td>";
        // line 33
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "date de création", "createdAt");
        echo "</td>
                         <td>";
        // line 34
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("nombre de vue"), "views");
        echo "</td>
                         <td>";
        // line 35
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "titre", "title");
        echo "</td>
                         <td>description</td>
                     </tr>
                     </thead>
                     <tbody>
                     ";
        // line 40
        if (((isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")) == 0)) {
            // line 41
            echo "                         <tr>
                             <td colspan=\"3\">
                                 <center>";
            // line 43
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_element_available_show_yet", array(), "messages");
            echo "</center>
                             </td>
                         </tr>
                     ";
        }
        // line 47
        echo "                     ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 48
            echo "                         <tr>
                             <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                             <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "views", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "description", array()), "html", null, true);
            echo "</td>
                         <tr/>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                     ";
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array(), "method") > 0)) {
            // line 56
            echo "                         <tr>
                             <td colspan=\"2\">
                                 ";
            // line 58
            ob_start();
            // line 59
            echo "                                 ";
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array(), "method") < ((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")) * (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))) {
                // line 60
                echo "                                     ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array(), "method"), "html", null, true);
                echo "
                                 ";
            } else {
                // line 62
                echo "                                     ";
                echo twig_escape_filter($this->env, ((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")) * (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "html", null, true);
                echo "
                                 ";
            }
            // line 64
            echo "                                 ";
            $context["to"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 65
            echo "                                 video ";
            echo twig_escape_filter($this->env, ((((isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")) * (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))) - (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max"))) + 1), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")), "html", null, true);
            echo " sur ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array(), "method"), "html", null, true);
            echo " vidéos
                             </td>
                             <td colspan=\"2\">
                                 ";
            // line 68
            echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "
                             </td>
                         </tr>
                     ";
        }
        // line 72
        echo "                     </tbody>
                 </table>


             </div>
         </div>
     </div>

         <div class=\"row\">
             <div class=\"panel-heading\">
                 <h4>
                     La vidéo du moment !
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
        return array (  193 => 72,  186 => 68,  175 => 65,  172 => 64,  166 => 62,  160 => 60,  157 => 59,  155 => 58,  151 => 56,  148 => 55,  139 => 52,  135 => 51,  131 => 50,  127 => 49,  124 => 48,  119 => 47,  112 => 43,  108 => 41,  106 => 40,  98 => 35,  94 => 34,  90 => 33,  72 => 22,  64 => 21,  56 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
