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
        if (((isset($context["max"]) ? $context["max"] : null) == 5)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => 5, "sort" => (isset($context["sort"]) ? $context["sort"] : null), "direction" => (isset($context["direction"]) ? $context["direction"] : null))), "html", null, true);
        echo "\">5</option>
                                     <option ";
        // line 20
        if (((isset($context["max"]) ? $context["max"] : null) == 10)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => 10, "sort" => (isset($context["sort"]) ? $context["sort"] : null), "direction" => (isset($context["direction"]) ? $context["direction"] : null))), "html", null, true);
        echo "\">10</option>
                                     <option ";
        // line 21
        if (((isset($context["max"]) ? $context["max"] : null) == 25)) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => 25, "sort" => (isset($context["sort"]) ? $context["sort"] : null), "direction" => (isset($context["direction"]) ? $context["direction"] : null))), "html", null, true);
        echo "\">25</option>
                                     <option ";
        // line 22
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

                     <div class=\"col-xs-3\">
                         <div class=\"dataTables_length\">
                             <label>
                                 <select class=\"form-control\" size=\"1\" id=\"maxPerPage\">
                                     <option ";
        // line 33
        if (((isset($context["sort"]) ? $context["sort"] : null) == "createdAt")) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => (isset($context["max"]) ? $context["max"] : null), "sort" => "createdAt", "direction" => (isset($context["direction"]) ? $context["direction"] : null))), "html", null, true);
        echo "\">date de création</option>
                                     <option ";
        // line 34
        if (((isset($context["sort"]) ? $context["sort"] : null) == "views")) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => (isset($context["max"]) ? $context["max"] : null), "sort" => "views", "direction" => (isset($context["direction"]) ? $context["direction"] : null))), "html", null, true);
        echo "\">nombres de vue</option>
                                     <option ";
        // line 35
        if (((isset($context["sort"]) ? $context["sort"] : null) == "title")) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => (isset($context["max"]) ? $context["max"] : null), "sort" => "title", "direction" => (isset($context["direction"]) ? $context["direction"] : null))), "html", null, true);
        echo "\">titre</option>
                                 </select>
                                 trier par
                             </label>
                         </div>
                     </div>

                     <div class=\"col-xs-3\">
                         <div class=\"dataTables_length\">
                             <label>
                                 <select class=\"form-control\" size=\"1\" id=\"maxPerPage\">
                                     <option ";
        // line 46
        if (((isset($context["direction"]) ? $context["direction"] : null) == "acs")) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => (isset($context["max"]) ? $context["max"] : null), "sort" => (isset($context["sort"]) ? $context["sort"] : null), "direction" => "asc")), "html", null, true);
        echo "\">Croissant</option>
                                     <option ";
        // line 47
        if (((isset($context["direction"]) ? $context["direction"] : null) == "desc")) {
            echo " selected ";
        }
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mew_pipe_video_homepage_pager", array("page" => (isset($context["page"]) ? $context["page"] : null), "max" => (isset($context["max"]) ? $context["max"] : null), "sort" => (isset($context["sort"]) ? $context["sort"] : null), "direction" => "desc")), "html", null, true);
        echo "\">Décroissant</option>
                                 </select>
                                 Direction
                             </label>
                         </div>
                     </div>
                 </div>

                 <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"table table-striped table-hover table-bordered datatables paginated\">
                     <tbody>
                     ";
        // line 57
        if (((isset($context["length"]) ? $context["length"] : null) == 0)) {
            // line 58
            echo "                         <tr>
                             <td colspan=\"4>
                                 <center>";
            // line 60
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_element_available_show_yet", array(), "messages");
            echo "</center>
                             </td>
                         </tr>
                     ";
        }
        // line 64
        echo "                     <div class=\"row\">
                     ";
        // line 65
        $context["elementInLine"] = 1;
        // line 66
        echo "                     ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 67
            echo "                     ";
            if (((isset($context["elementInLine"]) ? $context["elementInLine"] : null) > 4)) {
                // line 68
                echo "                     ";
                $context["elementInLine"] = 0;
                // line 69
                echo "                         </div><div class=\"row\">
                     ";
            }
            // line 71
            echo "
                        <div class=\"col-md-3\">
                            <div class=\"text-primary text-center\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</div>
                            <a href=\"google.fr\" class=\"gallerypic\" title=\"\">
                            <img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("img/" . $this->getAttribute($context["data"], "pathToImage", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "\" class=\"img-thumbnail img-responsive\">
                            <span class=\"zoom-icon\">
                                Information sur la vidéo :<br>
                                Titre : ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "<br>
                                Description : ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "description", array()), "html", null, true);
            echo "<br>
                                nombre de vues : ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "views", array()), "html", null, true);
            echo "
                            </span>
                            </a>
                            <div class=\"text-info text-center\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "views", array()), "html", null, true);
            echo " vues</div>
                        </div>


                     ";
            // line 87
            $context["elementInLine"] = ((isset($context["elementInLine"]) ? $context["elementInLine"] : null) + 1);
            // line 88
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                     </div>
                     ";
        // line 90
        if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array(), "method") > 0)) {
            // line 91
            echo "                         <tr>
                             <td colspan=\"2\">
                                 ";
            // line 93
            ob_start();
            // line 94
            echo "                                 ";
            if (($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array(), "method") < ((isset($context["max"]) ? $context["max"] : null) * (isset($context["page"]) ? $context["page"] : null)))) {
                // line 95
                echo "                                     ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array(), "method"), "html", null, true);
                echo "
                                 ";
            } else {
                // line 97
                echo "                                     ";
                echo twig_escape_filter($this->env, ((isset($context["max"]) ? $context["max"] : null) * (isset($context["page"]) ? $context["page"] : null)), "html", null, true);
                echo "
                                 ";
            }
            // line 99
            echo "                                 ";
            $context["to"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 100
            echo "                                 video ";
            echo twig_escape_filter($this->env, ((((isset($context["max"]) ? $context["max"] : null) * (isset($context["page"]) ? $context["page"] : null)) - (isset($context["max"]) ? $context["max"] : null)) + 1), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, (isset($context["to"]) ? $context["to"] : null), "html", null, true);
            echo " sur ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array(), "method"), "html", null, true);
            echo " vidéos
                             </td>
                             <td colspan=\"2\">
                                 ";
            // line 103
            echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
            echo "
                             </td>
                         </tr>
                     ";
        }
        // line 107
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
        return array (  275 => 107,  268 => 103,  257 => 100,  254 => 99,  248 => 97,  242 => 95,  239 => 94,  237 => 93,  233 => 91,  231 => 90,  228 => 89,  222 => 88,  220 => 87,  213 => 83,  207 => 80,  203 => 79,  199 => 78,  191 => 75,  186 => 73,  182 => 71,  178 => 69,  175 => 68,  172 => 67,  167 => 66,  165 => 65,  162 => 64,  155 => 60,  151 => 58,  149 => 57,  132 => 47,  124 => 46,  106 => 35,  98 => 34,  90 => 33,  72 => 22,  64 => 21,  56 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
