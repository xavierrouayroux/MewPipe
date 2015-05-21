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
        // line 22
        if (((isset($context["max"]) ? $context["max"] : null) == 5)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => 5, "sort" => (isset($context["sort"]) ? $context["sort"] : null), "direction" => (isset($context["direction"]) ? $context["direction"] : null))), "html", null, true);
        echo "\">5</option>
                                     <option ";
        // line 23
        if (((isset($context["max"]) ? $context["max"] : null) == 10)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => 10, "sort" => (isset($context["sort"]) ? $context["sort"] : null), "direction" => (isset($context["direction"]) ? $context["direction"] : null))), "html", null, true);
        echo "\">10</option>
                                     <option ";
        // line 24
        if (((isset($context["max"]) ? $context["max"] : null) == 25)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => 25, "sort" => (isset($context["sort"]) ? $context["sort"] : null), "direction" => (isset($context["direction"]) ? $context["direction"] : null))), "html", null, true);
        echo "\">25</option>
                                     <option ";
        // line 25
        if (((isset($context["max"]) ? $context["max"] : null) == 50)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => 50, "sort" => (isset($context["sort"]) ? $context["sort"] : null), "direction" => (isset($context["direction"]) ? $context["direction"] : null))), "html", null, true);
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
        // line 36
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : null), "date de création", "createdAt");
        echo "</td>
                         <td>";
        // line 37
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : null), $this->env->getExtension('translator')->trans("nombre de vue"), "views");
        echo "</td>
                         <td>";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : null), "titre", "title");
        echo "</td>
                         <td>description</td>
                     </tr>
                     </thead>
                     <tbody>
                     ";
        // line 43
        if (((isset($context["length"]) ? $context["length"] : null) == 0)) {
            // line 44
            echo "                         <tr>
                             <td colspan=\"3\">
                                 <center>";
            // line 46
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_element_available_show_yet", array(), "messages");
            echo "</center>
                             </td>
                         </tr>
                     ";
        }
        // line 50
        echo "                     ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 51
            echo "                         <tr>
                             <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                             <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "views", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</td>
                             <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "description", array()), "html", null, true);
            echo "</td>
                         <tr/>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                     ";
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array(), "method") > 0)) {
            // line 59
            echo "                         <tr>
                             <td colspan=\"4\">
                                 ";
            // line 61
            ob_start();
            // line 62
            echo "                                 ";
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array(), "method") < ((isset($context["max"]) ? $context["max"] : null) * (isset($context["page"]) ? $context["page"] : null)))) {
                // line 63
                echo "                                     ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array(), "method"), "html", null, true);
                echo "
                                 ";
            } else {
                // line 65
                echo "                                     ";
                echo twig_escape_filter($this->env, ((isset($context["max"]) ? $context["max"] : null) * (isset($context["page"]) ? $context["page"] : null)), "html", null, true);
                echo "
                                 ";
            }
            // line 67
            echo "                                 ";
            $context["to"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 68
            echo "                                 ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("sentence_pagination", array("%from%" => ((((isset($context["max"]) ? $context["max"] : null) * (isset($context["page"]) ? $context["page"] : null)) - (isset($context["max"]) ? $context["max"] : null)) + 1), "%to%" => (isset($context["to"]) ? $context["to"] : null), "%nb%" => $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array(), "method")), "messages");
            // line 69
            echo "                             </td>
                             <td colspan=\"5\">
                                 ";
            // line 71
            echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
            echo "
                             </td>
                         </tr>
                     ";
        }
        // line 75
        echo "                     </tbody>
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
        return array (  192 => 75,  185 => 71,  181 => 69,  178 => 68,  175 => 67,  169 => 65,  163 => 63,  160 => 62,  158 => 61,  154 => 59,  151 => 58,  142 => 55,  138 => 54,  134 => 53,  130 => 52,  127 => 51,  122 => 50,  115 => 46,  111 => 44,  109 => 43,  101 => 38,  97 => 37,  93 => 36,  75 => 25,  67 => 24,  59 => 23,  51 => 22,  31 => 4,  28 => 3,  11 => 1,);
    }
}
