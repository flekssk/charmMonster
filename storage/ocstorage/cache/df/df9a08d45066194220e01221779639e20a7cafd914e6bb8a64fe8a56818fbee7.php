<?php

/* blog/article_list.twig */
class __TwigTemplate_05cd0fefe281dd45490fc681390a0e4223e5fcc2b6e4216121b99a465f058467 extends Twig_Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-article').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-article\" formaction=\"";
        // line 8
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"submit\" form=\"form-article\" formaction=\"";
        // line 9
        echo (isset($context["enabled"]) ? $context["enabled"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-play\"></i></button>
\t\t<button type=\"submit\" form=\"form-article\" formaction=\"";
        // line 10
        echo (isset($context["disabled"]) ? $context["disabled"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-pause\"></i></button>
\t\t<button type=\"button\" form=\"form-article\" formaction=\"";
        // line 11
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-article').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 13
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
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
        // line 18
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 21
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 27
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 31
        echo "    <div class=\"row\">
      <div id=\"filter-article\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 35
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 39
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
\t\t\t  <div class=\"input-group\">
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 41
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t  <div class=\"input-group-btn\">
                    <button type=\"button\" id=\"button-clear-input-name\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i></button>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>  
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 48
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                  ";
        // line 51
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 52
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 54
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        }
        // line 56
        echo "                  ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 57
            echo "\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t  ";
        } else {
            // line 59
            echo "\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 61
        echo "              </select>
            </div>
\t\t\t<div class=\"form-group\">
              <label class=\"control-label\" for=\"input-noindex\">";
        // line 64
        echo (isset($context["entry_noindex"]) ? $context["entry_noindex"] : null);
        echo "</label>
              <select name=\"filter_noindex\" id=\"input-noindex\" class=\"form-control\">
                <option value=\"\"></option>
                  ";
        // line 67
        if (((isset($context["filter_noindex"]) ? $context["filter_noindex"] : null) == "1")) {
            // line 68
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 70
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  ";
        }
        // line 72
        echo "                  ";
        if (((isset($context["filter_noindex"]) ? $context["filter_noindex"] : null) == "0")) {
            // line 73
            echo "                <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 75
            echo "                <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 77
        echo "              </select>
\t\t\t</div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 80
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
\t\t\t  <button type=\"button\" id=\"button-clear-filter\" class=\"btn btn-default\"><i class=\"fa fa-times\"></i><span class=\"hidden-sm\"> ";
        // line 81
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "</span></button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 89
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 92
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-article\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-center\">";
        // line 98
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 99
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.name")) {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 100
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 101
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.noindex")) {
            echo " <a href=\"";
            echo (isset($context["sort_noindex"]) ? $context["sort_noindex"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_noindex"]) ? $context["column_noindex"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_noindex"]) ? $context["sort_noindex"] : null);
            echo "\">";
            echo (isset($context["column_noindex"]) ? $context["column_noindex"] : null);
            echo "</a> ";
        }
        echo "</td>
\t\t\t\t\t  <td class=\"text-right\">";
        // line 102
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 107
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 108
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 109
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 110
                if (twig_in_filter($this->getAttribute($context["article"], "article_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 111
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["article"], "article_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 113
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["article"], "article_id", array());
                    echo "\" />
                      ";
                }
                // line 114
                echo "</td>
                    <td class=\"text-center\">";
                // line 115
                if ($this->getAttribute($context["article"], "image", array())) {
                    echo " <img src=\"";
                    echo $this->getAttribute($context["article"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["article"], "name", array());
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 116
                echo $this->getAttribute($context["article"], "name", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 117
                echo $this->getAttribute($context["article"], "status", array());
                echo "</td>
\t\t\t\t\t<td class=\"text-left\">";
                // line 118
                echo $this->getAttribute($context["article"], "noindex", array());
                echo "</td>
                    <td class=\"text-right\">
\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 120
                echo $this->getAttribute($context["article"], "href_shop", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_shop"]) ? $context["button_shop"] : null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-eye\"></i></a>
\t\t\t\t\t\t<a href=\"";
                // line 121
                echo $this->getAttribute($context["article"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t</td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                  ";
        } else {
            // line 126
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"9\">";
            // line 127
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 130
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 136
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 137
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}
\t
\tvar filter_noindex = \$('select[name=\\'filter_noindex\\']').val();
\t
\tif (filter_noindex !== '') {
\t\turl += '&filter_noindex=' + encodeURIComponent(filter_noindex);
\t}

\tlocation = 'index.php?route=blog/article&user_token=";
        // line 166
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
\$('#button-clear-filter').on('click', function() {
\tlocation = 'index.php?route=blog/article&user_token=";
        // line 169
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-article\\']').on('click', function(e) {
\t\$('#form-article').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=blog/article/autocomplete&user_token=";
        // line 181
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['article_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});
\$('#button-clear-input-name').on('click',function(){
\t\$('input[name=\\'filter_name\\']').val('');
\t\$('#button-filter').trigger('click');
});
//--></script></div>
";
        // line 202
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "blog/article_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 202,  464 => 181,  449 => 169,  443 => 166,  411 => 137,  407 => 136,  399 => 130,  393 => 127,  390 => 126,  387 => 125,  375 => 121,  369 => 120,  364 => 118,  360 => 117,  356 => 116,  344 => 115,  341 => 114,  335 => 113,  329 => 111,  327 => 110,  324 => 109,  319 => 108,  317 => 107,  309 => 102,  291 => 101,  273 => 100,  255 => 99,  251 => 98,  242 => 92,  236 => 89,  225 => 81,  221 => 80,  216 => 77,  210 => 75,  204 => 73,  201 => 72,  195 => 70,  189 => 68,  187 => 67,  181 => 64,  176 => 61,  170 => 59,  164 => 57,  161 => 56,  155 => 54,  149 => 52,  147 => 51,  141 => 48,  129 => 41,  124 => 39,  117 => 35,  111 => 31,  103 => 27,  100 => 26,  92 => 22,  90 => 21,  85 => 18,  74 => 16,  70 => 15,  65 => 13,  56 => 11,  50 => 10,  44 => 9,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-article').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="submit" form="form-article" formaction="{{ copy }}" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-default"><i class="fa fa-copy"></i></button>*/
/*         <button type="submit" form="form-article" formaction="{{ enabled }}" data-toggle="tooltip" title="{{ button_enable }}" class="btn btn-default"><i class="fa fa-play"></i></button>*/
/* 		<button type="submit" form="form-article" formaction="{{ disabled }}" data-toggle="tooltip" title="{{ button_disable }}" class="btn btn-default"><i class="fa fa-pause"></i></button>*/
/* 		<button type="button" form="form-article" formaction="{{ delete }}" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-article').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-article" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/* 			  <div class="input-group">*/
/*               <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/* 			  <div class="input-group-btn">*/
/*                     <button type="button" id="button-clear-input-name" class="btn btn-default"><i class="fa fa-times"></i></button>*/
/* 			</div>*/
/* 			</div>*/
/* 			</div>  */
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*               <select name="filter_status" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                   {% if filter_status == '1' %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                   {% endif %}*/
/*                   {% if filter_status == '0' %}*/
/* 				<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 				  {% else %}*/
/* 				<option value="0">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*               </select>*/
/*             </div>*/
/* 			<div class="form-group">*/
/*               <label class="control-label" for="input-noindex">{{ entry_noindex }}</label>*/
/*               <select name="filter_noindex" id="input-noindex" class="form-control">*/
/*                 <option value=""></option>*/
/*                   {% if filter_noindex == '1' %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                   {% endif %}*/
/*                   {% if filter_noindex == '0' %}*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*               </select>*/
/* 			</div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/* 			  <button type="button" id="button-clear-filter" class="btn btn-default"><i class="fa fa-times"></i><span class="hidden-sm"> {{ button_clear }}</span></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-article">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-center">{{ column_image }}</td>*/
/*                       <td class="text-left">{% if sort == 'pd.name' %} <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a> {% else %} <a href="{{ sort_name }}">{{ column_name }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'p.status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'p.noindex' %} <a href="{{ sort_noindex }}" class="{{ order|lower }}">{{ column_noindex }}</a> {% else %} <a href="{{ sort_noindex }}">{{ column_noindex }}</a> {% endif %}</td>*/
/* 					  <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% if articles %}*/
/*                   {% for article in articles %}*/
/*                   <tr>*/
/*                     <td class="text-center">{% if article.article_id in selected %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ article.article_id }}" checked="checked" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ article.article_id }}" />*/
/*                       {% endif %}</td>*/
/*                     <td class="text-center">{% if article.image %} <img src="{{ article.image }}" alt="{{ article.name }}" class="img-thumbnail" /> {% else %} <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span> {% endif %}</td>*/
/*                     <td class="text-left">{{ article.name }}</td>*/
/*                     <td class="text-left">{{ article.status }}</td>*/
/* 					<td class="text-left">{{ article.noindex }}</td>*/
/*                     <td class="text-right">*/
/* 						<a target="_blank" href="{{ article.href_shop }}" data-toggle="tooltip" title="{{ button_shop }}" class="btn btn-success"><i class="fa fa-eye"></i></a>*/
/* 						<a href="{{ article.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/* 					</td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="9">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	var url = '';*/
/* */
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/* 	if (filter_status !== '') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status);*/
/* 	}*/
/* 	*/
/* 	var filter_noindex = $('select[name=\'filter_noindex\']').val();*/
/* 	*/
/* 	if (filter_noindex !== '') {*/
/* 		url += '&filter_noindex=' + encodeURIComponent(filter_noindex);*/
/* 	}*/
/* */
/* 	location = 'index.php?route=blog/article&user_token={{ user_token }}' + url;*/
/* });*/
/* $('#button-clear-filter').on('click', function() {*/
/* 	location = 'index.php?route=blog/article&user_token={{ user_token }}';*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* // IE and Edge fix!*/
/* $('button[form=\'form-article\']').on('click', function(e) {*/
/* 	$('#form-article').attr('action', $(this).attr('formaction'));*/
/* });*/
/*   */
/* $('input[name=\'filter_name\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=blog/article/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['article_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_name\']').val(item['label']);*/
/* 	}*/
/* });*/
/* $('#button-clear-input-name').on('click',function(){*/
/* 	$('input[name=\'filter_name\']').val('');*/
/* 	$('#button-filter').trigger('click');*/
/* });*/
/* //--></script></div>*/
/* {{ footer }} */
