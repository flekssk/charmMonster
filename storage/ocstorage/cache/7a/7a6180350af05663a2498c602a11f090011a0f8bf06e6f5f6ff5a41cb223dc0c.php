<?php

/* user/user_group_form.twig */
class __TwigTemplate_6567560155c55fb8a2da2a5e35ffc90376b1dde93d4602d11eea03c84e97839c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-user-group\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-user-group\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 38
        echo (isset($context["entry_access"]) ? $context["entry_access"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 42
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 44
            if (twig_in_filter($context["permission"], (isset($context["access"]) ? $context["access"] : null))) {
                // line 45
                echo "                    <input type=\"checkbox\" name=\"permission[access][]\" value=\"";
                echo $context["permission"];
                echo "\" checked=\"checked\" />
                    ";
                // line 46
                echo $context["permission"];
                echo "
                    ";
            } else {
                // line 48
                echo "                    <input type=\"checkbox\" name=\"permission[access][]\" value=\"";
                echo $context["permission"];
                echo "\" />
                    ";
                // line 49
                echo $context["permission"];
                echo "
                    ";
            }
            // line 51
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 55
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</button></div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 58
        echo (isset($context["entry_modify"]) ? $context["entry_modify"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 62
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 64
            if (twig_in_filter($context["permission"], (isset($context["modify"]) ? $context["modify"] : null))) {
                // line 65
                echo "                    <input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
                echo $context["permission"];
                echo "\" checked=\"checked\" />
                    ";
                // line 66
                echo $context["permission"];
                echo "
                    ";
            } else {
                // line 68
                echo "                    <input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
                echo $context["permission"];
                echo "\" />
                    ";
                // line 69
                echo $context["permission"];
                echo "
                    ";
            }
            // line 71
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 75
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</button></div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 78
        echo (isset($context["help_hide"]) ? $context["help_hide"] : null);
        echo "\">";
        echo (isset($context["entry_hide"]) ? $context["entry_hide"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hiden"]) ? $context["hiden"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["hide"]) {
            // line 82
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 84
            if (twig_in_filter($context["hide"], (isset($context["ishide"]) ? $context["ishide"] : null))) {
                // line 85
                echo "                    <input type=\"checkbox\" name=\"permission[hiden][]\" value=\"";
                echo $context["hide"];
                echo "\" checked=\"checked\" />
                    ";
                // line 86
                echo $context["hide"];
                echo "
                    ";
            } else {
                // line 88
                echo "                    <input type=\"checkbox\" name=\"permission[hiden][]\" value=\"";
                echo $context["hide"];
                echo "\" />
                    ";
                // line 89
                echo $context["hide"];
                echo "
                    ";
            }
            // line 91
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "              </div>
\t\t\t  <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 95
        echo (isset($context["text_select_all"]) ? $context["text_select_all"] : null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo (isset($context["text_unselect_all"]) ? $context["text_unselect_all"] : null);
        echo "</button></div>
\t\t\t</div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 102
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "user/user_group_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 102,  272 => 95,  269 => 94,  261 => 91,  256 => 89,  251 => 88,  246 => 86,  241 => 85,  239 => 84,  235 => 82,  231 => 81,  223 => 78,  215 => 75,  212 => 74,  204 => 71,  199 => 69,  194 => 68,  189 => 66,  184 => 65,  182 => 64,  178 => 62,  174 => 61,  168 => 58,  160 => 55,  157 => 54,  149 => 51,  144 => 49,  139 => 48,  134 => 46,  129 => 45,  127 => 44,  123 => 42,  119 => 41,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-user-group" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-user-group" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_access }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                 {% for permission in permissions %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     {% if permission in access %}*/
/*                     <input type="checkbox" name="permission[access][]" value="{{ permission }}" checked="checked" />*/
/*                     {{ permission }}*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="permission[access][]" value="{{ permission }}" />*/
/*                     {{ permission }}*/
/*                     {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link">{{ text_select_all }}</button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link">{{ text_unselect_all }}</button></div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_modify }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                 {% for permission in permissions %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     {% if permission in modify %}*/
/*                     <input type="checkbox" name="permission[modify][]" value="{{ permission }}" checked="checked" />*/
/*                     {{ permission }}*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="permission[modify][]" value="{{ permission }}" />*/
/*                     {{ permission }}*/
/*                     {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link">{{ text_select_all }}</button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link">{{ text_unselect_all }}</button></div>*/
/*           </div>*/
/* 		  <div class="form-group">*/
/*             <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_hide }}">{{ entry_hide }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;">*/
/*                 {% for hide in hiden %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     {% if hide in ishide %}*/
/*                     <input type="checkbox" name="permission[hiden][]" value="{{ hide }}" checked="checked" />*/
/*                     {{ hide }}*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="permission[hiden][]" value="{{ hide }}" />*/
/*                     {{ hide }}*/
/*                     {% endif %}*/
/*                   </label>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/* 			  <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link">{{ text_select_all }}</button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link">{{ text_unselect_all }}</button></div>*/
/* 			</div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
