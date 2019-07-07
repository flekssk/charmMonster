<?php

/* blog/article_form.twig */
class __TwigTemplate_a81aaaef50db14a2cdebd7ce212a375f70b964e5932dc71a001065a09c0fe62a extends Twig_Template
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
        <button type=\"submit\" form=\"form-article\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-article\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 30
        echo (isset($context["tab_links"]) ? $context["tab_links"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 31
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 39
            echo "                <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 43
            echo "                <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 45
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"article_description[";
            // line 47
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 48
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 49
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 50
            echo " </div>
                  </div>
\t\t\t\t  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-h1";
            // line 53
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_h1"]) ? $context["entry_meta_h1"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"article_description[";
            // line 55
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_h1]\" value=\"";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_h1", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_h1"]) ? $context["entry_meta_h1"] : null);
            echo "\" id=\"input-meta-h1";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 59
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"article_description[";
            // line 61
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 65
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"article_description[";
            // line 67
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 71
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"article_description[";
            // line 73
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
\t\t\t\t  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 77
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"article_description[";
            // line 79
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["article_description"]) ? $context["article_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 87
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    

                    ";
        // line 92
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 93
            echo "
                    
                    <option value=\"1\" selected=\"selected\">";
            // line 95
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 96
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    

                    ";
        } else {
            // line 100
            echo "
                    
                    <option value=\"1\">";
            // line 102
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 103
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    

                    ";
        }
        // line 107
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 113
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 115
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 121
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 123
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"article-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article_categories"]) ? $context["article_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article_category"]) {
            // line 125
            echo "                    <div id=\"article-category";
            echo $this->getAttribute($context["article_category"], "blog_category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["article_category"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"article_category[]\" value=\"";
            // line 126
            echo $this->getAttribute($context["article_category"], "blog_category_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "</div>
                </div>
              </div>
\t\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"select-main_category_id\"><span data-toggle=\"tooltip\" title=\"";
        // line 132
        echo (isset($context["help_main_category"]) ? $context["help_main_category"] : null);
        echo "\">";
        echo (isset($context["entry_main_category"]) ? $context["entry_main_category"] : null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t<select name=\"main_blog_category_id\" class=\"form-control\">
\t\t\t\t<option value=\"0\" selected=\"selected\">";
        // line 135
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
\t\t\t\t";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 137
            echo "\t\t\t\t  ";
            if (($this->getAttribute($context["category"], "blog_category_id", array()) == (isset($context["main_blog_category_id"]) ? $context["main_blog_category_id"] : null))) {
                // line 138
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category"], "blog_category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 140
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category"], "blog_category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
\t\t\t\t  ";
            }
            // line 142
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "\t\t\t</select>
\t\t\t</div>
\t\t\t</div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 147
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 150
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 151
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["article_store"]) ? $context["article_store"] : null))) {
                // line 152
                echo "                        <input type=\"checkbox\" name=\"article_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 153
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            } else {
                // line 155
                echo "                        <input type=\"checkbox\" name=\"article_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />
                        ";
                // line 156
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            }
            // line 157
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 163
        echo (isset($context["help_download"]) ? $context["help_download"] : null);
        echo "\">";
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 165
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "\" id=\"input-download\" class=\"form-control\" />
                  <div id=\"article-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article_downloads"]) ? $context["article_downloads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article_download"]) {
            // line 167
            echo "                    <div id=\"article-download";
            echo $this->getAttribute($context["article_download"], "download_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["article_download"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"article_download[]\" value=\"";
            // line 168
            echo $this->getAttribute($context["article_download"], "download_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 174
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 176
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "\" id=\"input-related\" class=\"form-control\" />
                  <div id=\"article-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article_relateds"]) ? $context["article_relateds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article_related"]) {
            // line 178
            echo "                    <div id=\"article-related";
            echo $this->getAttribute($context["article_related"], "article_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["article_related"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"article_related[]\" value=\"";
            // line 179
            echo $this->getAttribute($context["article_related"], "article_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "</div>
                </div>
              </div>
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 185
        echo (isset($context["help_related_product"]) ? $context["help_related_product"] : null);
        echo "\">";
        echo (isset($context["entry_related_product"]) ? $context["entry_related_product"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"relatedproduct\" value=\"\" placeholder=\"";
        // line 187
        echo (isset($context["entry_related_product"]) ? $context["entry_related_product"] : null);
        echo "\" id=\"input-related-product\" class=\"form-control\" />
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_relateds"]) ? $context["product_relateds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 189
            echo "                    <div id=\"product-related";
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_related"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 190
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 201
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 206
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                        <input type=\"hidden\" name=\"image\" value=\"";
        // line 207
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" /></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 216
        echo (isset($context["entry_additional_image"]) ? $context["entry_additional_image"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 217
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 225
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>            
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 230
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
\t\t      <td class=\"text-left\">";
        // line 231
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 236
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 237
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                    <td class=\"text-left\">";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 239
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                        <input type=\"text\" name=\"article_seo_url[";
                // line 240
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["article_seo_url"]) ? $context["article_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["article_seo_url"]) ? $context["article_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\" />
                      </div>
                      ";
                // line 242
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 243
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                      ";
                }
                // line 244
                echo " 
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "                    </tbody>
                  
                </table>
              </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-noindex\">";
        // line 253
        echo (isset($context["entry_noindex"]) ? $context["entry_noindex"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"noindex\" id=\"input-noindex\" class=\"form-control\">
                    ";
        // line 256
        if ((isset($context["noindex"]) ? $context["noindex"] : null)) {
            // line 257
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 258
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 260
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 261
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 263
        echo "                  </select>
                </div>
              </div>
            </div>
\t\t\t<div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 272
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 273
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 278
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 279
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                    <td class=\"text-left\"><select name=\"article_layout[";
            // line 280
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                        <option value=\"\"></option>
                        

                          ";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 285
                echo "                          ";
                if (($this->getAttribute((isset($context["article_layout"]) ? $context["article_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["article_layout"]) ? $context["article_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 286
                    echo "
                        
                        <option value=\"";
                    // line 288
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 292
                    echo "
                        
                        <option value=\"";
                    // line 294
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 298
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "
                      
                      </select></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 304
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=blog/category/autocomplete&user_token=";
        // line 327
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['blog_category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#article-category' + item['value']).remove();

\t\t\$('#article-category').append('<div id=\"article-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"article_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#article-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
// Downloads
\$('input[name=\\'download\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 355
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['download_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'download\\']').val('');

\t\t\$('#article-download' + item['value']).remove();

\t\t\$('#article-download').append('<div id=\"article-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"article_download[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#article-download').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Related
\$('input[name=\\'related\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=blog/article/autocomplete&user_token=";
        // line 384
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
\t\t\$('input[name=\\'related\\']').val('');

\t\t\$('#article-related' + item['value']).remove();

\t\t\$('#article-related').append('<div id=\"article-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"article_related[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#article-related').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
// Related Product
\$('input[name=\\'relatedproduct\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 412
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'relatedproduct\\']').val('');

\t\t\$('#product-related' + item['value']).remove();

\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script> 
  
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 440
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 445
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 450
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
\$('#option a:first').tab('show');
//--></script></div>
";
        // line 459
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "blog/article_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1026 => 459,  1014 => 450,  1006 => 445,  998 => 440,  967 => 412,  936 => 384,  904 => 355,  873 => 327,  848 => 304,  838 => 299,  832 => 298,  823 => 294,  819 => 292,  810 => 288,  806 => 286,  803 => 285,  799 => 284,  792 => 280,  788 => 279,  785 => 278,  781 => 277,  774 => 273,  770 => 272,  759 => 263,  754 => 261,  749 => 260,  744 => 258,  739 => 257,  737 => 256,  731 => 253,  724 => 248,  716 => 245,  709 => 244,  703 => 243,  701 => 242,  688 => 240,  679 => 239,  675 => 238,  671 => 237,  668 => 236,  664 => 235,  657 => 231,  653 => 230,  645 => 225,  634 => 217,  630 => 216,  618 => 207,  612 => 206,  604 => 201,  593 => 192,  584 => 190,  577 => 189,  573 => 188,  569 => 187,  562 => 185,  556 => 181,  547 => 179,  540 => 178,  536 => 177,  532 => 176,  525 => 174,  519 => 170,  510 => 168,  503 => 167,  499 => 166,  495 => 165,  488 => 163,  482 => 159,  474 => 157,  469 => 156,  464 => 155,  459 => 153,  454 => 152,  452 => 151,  449 => 150,  445 => 149,  440 => 147,  434 => 143,  428 => 142,  420 => 140,  412 => 138,  409 => 137,  405 => 136,  401 => 135,  393 => 132,  387 => 128,  378 => 126,  371 => 125,  367 => 124,  363 => 123,  356 => 121,  345 => 115,  340 => 113,  332 => 107,  325 => 103,  321 => 102,  317 => 100,  310 => 96,  306 => 95,  302 => 93,  300 => 92,  292 => 87,  286 => 83,  267 => 79,  260 => 77,  247 => 73,  240 => 71,  227 => 67,  220 => 65,  207 => 61,  200 => 59,  187 => 55,  180 => 53,  175 => 50,  169 => 49,  167 => 48,  157 => 47,  150 => 45,  144 => 43,  140 => 42,  137 => 41,  120 => 39,  116 => 38,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-article" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-article" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*             <li><a href="#tab-links" data-toggle="tab">{{ tab_links }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*             <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                 <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">{% for language in languages %}*/
/*                 <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="article_description[{{ language.language_id }}][name]" value="{{ article_description[language.language_id] ? article_description[language.language_id].name }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_name[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                       {% endif %} </div>*/
/*                   </div>*/
/* 				  <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-h1{{ language.language_id }}">{{ entry_meta_h1 }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="article_description[{{ language.language_id }}][meta_h1]" value="{{ article_description[language.language_id] ? article_description[language.language_id].meta_h1 }}" placeholder="{{ entry_meta_h1 }}" id="input-meta-h1{{ language.language_id }}" class="form-control" />*/
/* 					</div>*/
/* 				  </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="article_description[{{ language.language_id }}][meta_title]" value="{{ article_description[language.language_id] ? article_description[language.language_id].meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control" />*/
/* 					</div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="article_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ article_description[language.language_id] ? article_description[language.language_id].meta_description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="article_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ article_description[language.language_id] ? article_description[language.language_id].meta_keyword }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/* 				  <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="article_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ article_description[language.language_id] ? article_description[language.language_id].description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}</div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-data">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     */
/* */
/*                     {% if status %}*/
/* */
/*                     */
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-links">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="{{ help_category }}">{{ entry_category }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control" />*/
/*                   <div id="article-category" class="well well-sm" style="height: 150px; overflow: auto;"> {% for article_category in article_categories %}*/
/*                     <div id="article-category{{ article_category.blog_category_id }}"><i class="fa fa-minus-circle"></i> {{ article_category.name }}*/
/*                       <input type="hidden" name="article_category[]" value="{{ article_category.blog_category_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/* 			  <div class="form-group">*/
/* 			<label class="col-sm-2 control-label" for="select-main_category_id"><span data-toggle="tooltip" title="{{ help_main_category }}">{{ entry_main_category }}</span></label>*/
/* 			<div class="col-sm-10">*/
/* 			<select name="main_blog_category_id" class="form-control">*/
/* 				<option value="0" selected="selected">{{ text_none }}</option>*/
/* 				{% for category in categories %}*/
/* 				  {% if category.blog_category_id == main_blog_category_id %}*/
/* 					<option value="{{ category.blog_category_id }}" selected="selected">{{ category.name }}</option>*/
/* 					{% else %}*/
/* 					<option value="{{ category.blog_category_id }}">{{ category.name }}</option>*/
/* 				  {% endif %}*/
/* 				{% endfor %}*/
/* 			</select>*/
/* 			</div>*/
/* 			</div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for store in stores %}*/
/*                     <div class="checkbox">*/
/*                       <label> {% if store.store_id in article_store %}*/
/*                         <input type="checkbox" name="article_store[]" value="{{ store.store_id }}" checked="checked" />*/
/*                         {{ store.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="article_store[]" value="{{ store.store_id }}" />*/
/*                         {{ store.name }}*/
/*                         {% endif %} </label>*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-download"><span data-toggle="tooltip" title="{{ help_download }}">{{ entry_download }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="download" value="" placeholder="{{ entry_download }}" id="input-download" class="form-control" />*/
/*                   <div id="article-download" class="well well-sm" style="height: 150px; overflow: auto;"> {% for article_download in article_downloads %}*/
/*                     <div id="article-download{{ article_download.download_id }}"><i class="fa fa-minus-circle"></i> {{ article_download.name }}*/
/*                       <input type="hidden" name="article_download[]" value="{{ article_download.download_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-related"><span data-toggle="tooltip" title="{{ help_related }}">{{ entry_related }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="related" value="" placeholder="{{ entry_related }}" id="input-related" class="form-control" />*/
/*                   <div id="article-related" class="well well-sm" style="height: 150px; overflow: auto;"> {% for article_related in article_relateds %}*/
/*                     <div id="article-related{{ article_related.article_id }}"><i class="fa fa-minus-circle"></i> {{ article_related.name }}*/
/*                       <input type="hidden" name="article_related[]" value="{{ article_related.article_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/* 			  <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-related-product"><span data-toggle="tooltip" title="{{ help_related_product }}">{{ entry_related_product }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="relatedproduct" value="" placeholder="{{ entry_related_product }}" id="input-related-product" class="form-control" />*/
/*                   <div id="product-related" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_related in product_relateds %}*/
/*                     <div id="product-related{{ product_related.product_id }}"><i class="fa fa-minus-circle"></i> {{ product_related.name }}*/
/*                       <input type="hidden" name="product_related[]" value="{{ product_related.product_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_image }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     <tr>*/
/*                       <td class="text-left"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                         <input type="hidden" name="image" value="{{ image }}" id="input-image" /></td>*/
/*                     </tr>*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table id="images" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_additional_image }}</td>*/
/*                       <td class="text-right">{{ entry_sort_order }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-seo">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>            */
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/* 		      <td class="text-left">{{ entry_keyword }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for store in stores %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ store.name }}</td>*/
/*                     <td class="text-left">{% for language in languages %}*/
/*                       <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                         <input type="text" name="article_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if article_seo_url[store.store_id][language.language_id] %}{{ article_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control" />*/
/*                       </div>*/
/*                       {% if error_keyword[store.store_id][language.language_id] %}*/
/*                       <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                       {% endif %} */
/*                       {% endfor %}</td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-noindex">{{ entry_noindex }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="noindex" id="input-noindex" class="form-control">*/
/*                     {% if noindex %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* 			<div class="tab-pane" id="tab-design">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_layout }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for store in stores %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ store.name }}</td>*/
/*                     <td class="text-left"><select name="article_layout[{{ store.store_id }}]" class="form-control">*/
/*                         <option value=""></option>*/
/*                         */
/* */
/*                           {% for layout in layouts %}*/
/*                           {% if article_layout[store.store_id] and article_layout[store.store_id] == layout.layout_id %}*/
/* */
/*                         */
/*                         <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> */
/*   <script type="text/javascript"><!--*/
/* // Category*/
/* $('input[name=\'category\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=blog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['blog_category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'category\']').val('');*/
/* */
/* 		$('#article-category' + item['value']).remove();*/
/* */
/* 		$('#article-category').append('<div id="article-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="article_category[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#article-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* // Downloads*/
/* $('input[name=\'download\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/download/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['download_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'download\']').val('');*/
/* */
/* 		$('#article-download' + item['value']).remove();*/
/* */
/* 		$('#article-download').append('<div id="article-download' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="article_download[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#article-download').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Related*/
/* $('input[name=\'related\']').autocomplete({*/
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
/* 		$('input[name=\'related\']').val('');*/
/* */
/* 		$('#article-related' + item['value']).remove();*/
/* */
/* 		$('#article-related').append('<div id="article-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="article_related[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#article-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* // Related Product*/
/* $('input[name=\'relatedproduct\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'relatedproduct\']').val('');*/
/* */
/* 		$('#product-related' + item['value']).remove();*/
/* */
/* 		$('#product-related').append('<div id="product-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_related[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script> */
/*   */
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* $('#option a:first').tab('show');*/
/* //--></script></div>*/
/* {{ footer }} */
/* */
