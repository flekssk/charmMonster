<?php

/* catalog/product_form.twig */
class __TwigTemplate_7ca8c3a9171177731f1197c28e0d35bdd189a80ff04f8dad356281a3e5beff40 extends Twig_Template
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
                <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\"> ";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i
                        class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 24
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 29
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\"
                      class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
                        ";
        // line 35
        echo "                        <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
        echo "</a></li>
                        ";
        // line 37
        echo "                        ";
        // line 38
        echo "                        ";
        // line 39
        echo "                        ";
        // line 40
        echo "                        <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
                        <li><a href=\"#tab-complection\" data-toggle=\"tab\">Комплектация</a></li>
                        ";
        // line 43
        echo "                        ";
        // line 44
        echo "                        ";
        // line 45
        echo "                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <ul class=\"nav nav-tabs\" id=\"language\">
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 50
            echo "                                    <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img
                                                    src=\"language/";
            // line 51
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\"
                                                    title=\"";
            // line 52
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"/> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            </ul>
                            <div class=\"tab-content\">";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 56
            echo "                                    <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                                        <div class=\"form-group required\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-name";
            // line 59
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 62
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\"
                                                       value=\"";
            // line 63
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 64
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\"
                                                       id=\"input-name";
            // line 65
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                                                ";
            // line 66
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 67
                echo "                                                    <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                                                ";
            }
            // line 69
            echo "                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"select-main_category_id\"><span
                                                        data-toggle=\"tooltip\"
                                                        title=\"";
            // line 74
            echo (isset($context["help_main_category"]) ? $context["help_main_category"] : null);
            echo "\">";
            echo (isset($context["entry_main_category"]) ? $context["entry_main_category"] : null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <select name=\"main_category_id\" class=\"form-control\">
                                                    <option value=\"0\" selected=\"selected\">";
            // line 77
            echo (isset($context["text_none"]) ? $context["text_none"] : null);
            echo "</option>
                                                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 79
                echo "                                                        ";
                if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["main_category_id"]) ? $context["main_category_id"] : null))) {
                    // line 80
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 81
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</option>
                                                        ";
                } else {
                    // line 83
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</option>
                                                        ";
                }
                // line 85
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                                                </select>
                                            </div>
                                        </div>
                                        ";
            // line 90
            echo "                                        ";
            // line 91
            echo "                                        ";
            // line 92
            echo "                                        ";
            // line 93
            echo "                                        ";
            // line 94
            echo "                                        ";
            // line 95
            echo "                                        ";
            // line 96
            echo "                                        ";
            // line 97
            echo "                                        ";
            // line 98
            echo "                                        ";
            // line 99
            echo "                                        ";
            // line 100
            echo "                                        ";
            // line 101
            echo "                                        ";
            // line 102
            echo "                                        ";
            // line 103
            echo "                                        ";
            // line 104
            echo "                                        ";
            // line 105
            echo "                                        ";
            // line 106
            echo "                                        ";
            // line 107
            echo "                                        ";
            // line 108
            echo "                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-h1";
            // line 110
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_h1"]) ? $context["entry_meta_h1"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 113
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_h1]\"
                                                       value=\"";
            // line 114
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_h1", array())) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 115
            echo (isset($context["entry_meta_h1"]) ? $context["entry_meta_h1"] : null);
            echo "\"
                                                       id=\"input-meta-h1";
            // line 116
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-title";
            // line 122
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 125
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\"
                                                       value=\"";
            // line 126
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 127
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\"
                                                       id=\"input-meta-title";
            // line 128
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                       class=\"form-control\"/>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-description";
            // line 134
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 137
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\"
                                                        rows=\"5\" placeholder=\"";
            // line 138
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\"
                                                        id=\"input-meta-description";
            // line 139
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                        class=\"form-control\">";
            // line 140
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-meta-keyword";
            // line 145
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 148
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\"
                                                        rows=\"5\" placeholder=\"";
            // line 149
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\"
                                                        id=\"input-meta-keyword";
            // line 150
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                        class=\"form-control\">";
            // line 151
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-description";
            // line 156
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                                <textarea
                                                        name=\"product_description[";
            // line 159
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\"
                                                        placeholder=\"";
            // line 160
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\"
                                                        id=\"input-description";
            // line 161
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"
                                                        data-toggle=\"summernote\" data-lang=\"";
            // line 162
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\"
                                                        class=\"form-control\">";
            // line 163
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\"
                                                   for=\"input-tag";
            // line 168
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\"
                                                                                                   title=\"";
            // line 169
            echo (isset($context["help_tag"]) ? $context["help_tag"] : null);
            echo "\">";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <input type=\"text\"
                                                       name=\"product_description[";
            // line 172
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][tag]\"
                                                       value=\"";
            // line 173
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "tag", array())) : (""));
            echo "\"
                                                       placeholder=\"";
            // line 174
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "\"
                                                       id=\"input-tag";
            // line 175
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "</div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 183
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"model\" value=\"";
        // line 185
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\"
                                           id=\"input-model\" class=\"form-control\"/>
                                    ";
        // line 187
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 188
            echo "                                        <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>
                                    ";
        }
        // line 189
        echo "</div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\"
                                                                                            title=\"";
        // line 194
        echo (isset($context["help_sku"]) ? $context["help_sku"] : null);
        echo "\">";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sku\" value=\"";
        // line 196
        echo (isset($context["sku"]) ? $context["sku"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "\"
                                           id=\"input-sku\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div style=\"display: none;\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 203
        echo (isset($context["help_upc"]) ? $context["help_upc"] : null);
        echo "\">";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"upc\" value=\"";
        // line 205
        echo (isset($context["upc"]) ? $context["upc"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "\"
                                               id=\"input-upc\" class=\"form-control\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 211
        echo (isset($context["help_ean"]) ? $context["help_ean"] : null);
        echo "\">";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"ean\" value=\"";
        // line 213
        echo (isset($context["ean"]) ? $context["ean"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "\"
                                               id=\"input-ean\" class=\"form-control\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 219
        echo (isset($context["help_jan"]) ? $context["help_jan"] : null);
        echo "\">";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"jan\" value=\"";
        // line 221
        echo (isset($context["jan"]) ? $context["jan"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "\"
                                               id=\"input-jan\" class=\"form-control\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 227
        echo (isset($context["help_isbn"]) ? $context["help_isbn"] : null);
        echo "\">";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"isbn\" value=\"";
        // line 229
        echo (isset($context["isbn"]) ? $context["isbn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "\"
                                               id=\"input-isbn\" class=\"form-control\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 235
        echo (isset($context["help_mpn"]) ? $context["help_mpn"] : null);
        echo "\">";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"mpn\" value=\"";
        // line 237
        echo (isset($context["mpn"]) ? $context["mpn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "\"
                                               id=\"input-mpn\" class=\"form-control\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-location\">";
        // line 243
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"location\" value=\"";
        // line 245
        echo (isset($context["location"]) ? $context["location"] : null);
        echo "\"
                                               placeholder=\"";
        // line 246
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "\" id=\"input-location\"
                                               class=\"form-control\"/>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 253
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"price\" value=\"";
        // line 255
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\"
                                           id=\"input-price\" class=\"form-control\"/>
                                </div>
                            </div>

                            <div style=\"display: none;\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-quantity\">";
        // line 263
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"quantity\" value=\"";
        // line 265
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\"
                                               placeholder=\"";
        // line 266
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\"
                                               class=\"form-control\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span
                                                data-toggle=\"tooltip\"
                                                title=\"";
        // line 273
        echo (isset($context["help_minimum"]) ? $context["help_minimum"] : null);
        echo "\">";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"minimum\" value=\"";
        // line 275
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\"
                                               placeholder=\"";
        // line 276
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "\" id=\"input-minimum\"
                                               class=\"form-control\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"input-subtract\">";
        // line 282
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                                            ";
        // line 287
        if ((isset($context["subtract"]) ? $context["subtract"] : null)) {
            // line 288
            echo "

                                                <option value=\"1\" selected=\"selected\">";
            // line 290
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                                <option value=\"0\">";
            // line 291
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>


                                            ";
        } else {
            // line 295
            echo "

                                                <option value=\"1\">";
            // line 297
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                                <option value=\"0\" selected=\"selected\">";
            // line 298
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>


                                            ";
        }
        // line 302
        echo "

                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span
                                                data-toggle=\"tooltip\"
                                                title=\"";
        // line 310
        echo (isset($context["help_stock_status"]) ? $context["help_stock_status"] : null);
        echo "\">";
        echo (isset($context["entry_stock_status"]) ? $context["entry_stock_status"] : null);
        echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                                            ";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stock_statuses"]) ? $context["stock_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 316
            echo "                                                ";
            if (($this->getAttribute($context["stock_status"], "stock_status_id", array()) == (isset($context["stock_status_id"]) ? $context["stock_status_id"] : null))) {
                // line 317
                echo "

                                                    <option value=\"";
                // line 319
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\"
                                                            selected=\"selected\">";
                // line 320
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>


                                                ";
            } else {
                // line 324
                echo "

                                                    <option value=\"";
                // line 326
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>


                                                ";
            }
            // line 330
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "

                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 337
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\"> ";
        // line 339
        if ((isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 340
            echo "                                                <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                                                ";
            // line 341
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                                            ";
        } else {
            // line 343
            echo "                                                <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                                                ";
            // line 344
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                                            ";
        }
        // line 345
        echo " </label>
                                        <label class=\"radio-inline\"> ";
        // line 346
        if ( !(isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 347
            echo "                                                <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                                                ";
            // line 348
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                                            ";
        } else {
            // line 350
            echo "                                                <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                                                ";
            // line 351
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                                            ";
        }
        // line 352
        echo " </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-date-available\">";
        // line 359
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_available\" value=\"";
        // line 362
        echo (isset($context["date_available"]) ? $context["date_available"] : null);
        echo "\"
                                               placeholder=\"";
        // line 363
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\"
                                               id=\"input-date-available\" class=\"form-control\"/>
                                        <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 371
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"length\" value=\"";
        // line 375
        echo (isset($context["length"]) ? $context["length"] : null);
        echo "\"
                                                   placeholder=\"";
        // line 376
        echo (isset($context["entry_length"]) ? $context["entry_length"] : null);
        echo "\" id=\"input-length\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"width\" value=\"";
        // line 380
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\"
                                                   placeholder=\"";
        // line 381
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\"
                                                   class=\"form-control\"/>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <input type=\"text\" name=\"height\" value=\"";
        // line 385
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\"
                                                   placeholder=\"";
        // line 386
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\"
                                                   class=\"form-control\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-length-class\">";
        // line 394
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                                        ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 400
            echo "                                            ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["length_class_id"]) ? $context["length_class_id"] : null))) {
                // line 401
                echo "

                                                <option value=\"";
                // line 403
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\"
                                                        selected=\"selected\">";
                // line 404
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>


                                            ";
            } else {
                // line 408
                echo "

                                                <option value=\"";
                // line 410
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>


                                            ";
            }
            // line 414
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        echo "

                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 421
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"weight\" value=\"";
        // line 423
        echo (isset($context["weight"]) ? $context["weight"] : null);
        echo "\"
                                           placeholder=\"";
        // line 424
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-weight-class\">";
        // line 429
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                                        ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 435
            echo "                                            ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["weight_class_id"]) ? $context["weight_class_id"] : null))) {
                // line 436
                echo "

                                                <option value=\"";
                // line 438
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\"
                                                        selected=\"selected\">";
                // line 439
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>


                                            ";
            } else {
                // line 443
                echo "

                                                <option value=\"";
                // line 445
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>


                                            ";
            }
            // line 449
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 450
        echo "

                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 456
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">


                                        ";
        // line 461
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 462
            echo "

                                            <option value=\"1\" selected=\"selected\">";
            // line 464
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                            <option value=\"0\">";
            // line 465
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>


                                        ";
        } else {
            // line 469
            echo "

                                            <option value=\"1\">";
            // line 471
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 472
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>


                                        ";
        }
        // line 476
        echo "

                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-sort-order\">";
        // line 483
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"sort_order\" value=\"";
        // line 485
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\"
                                           placeholder=\"";
        // line 486
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\"
                                           class=\"form-control\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-links\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span
                                            data-toggle=\"tooltip\"
                                            title=\"";
        // line 495
        echo (isset($context["help_manufacturer"]) ? $context["help_manufacturer"] : null);
        echo "\">";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 497
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\"
                                           placeholder=\"";
        // line 498
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "\" id=\"input-manufacturer\"
                                           class=\"form-control\"/>
                                    <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 500
        echo (isset($context["manufacturer_id"]) ? $context["manufacturer_id"] : null);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\"
                                                                                               title=\"";
        // line 505
        echo (isset($context["help_filter"]) ? $context["help_filter"] : null);
        echo "\">";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 507
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "\"
                                           id=\"input-filter\" class=\"form-control\"/>
                                    <div id=\"product-filter\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 510
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_filters"]) ? $context["product_filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 511
            echo "                                            <div id=\"product-filter";
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 512
            echo $this->getAttribute($context["product_filter"], "name", array());
            echo "
                                                <input type=\"hidden\" name=\"product_filter[]\"
                                                       value=\"";
            // line 514
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 516
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 520
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 523
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 524
            echo "                                            <div class=\"checkbox\">
                                                <label> ";
            // line 525
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["product_store"]) ? $context["product_store"] : null))) {
                // line 526
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 527
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\"/>
                                                        ";
                // line 528
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                                                    ";
            } else {
                // line 530
                echo "                                                        <input type=\"checkbox\" name=\"product_store[]\"
                                                               value=\"";
                // line 531
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\"/>
                                                        ";
                // line 532
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                                                    ";
            }
            // line 533
            echo " </label>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\"
                                                                                                 title=\"";
        // line 540
        echo (isset($context["help_download"]) ? $context["help_download"] : null);
        echo "\">";
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 542
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "\"
                                           id=\"input-download\" class=\"form-control\"/>
                                    <div id=\"product-download\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 545
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_downloads"]) ? $context["product_downloads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 546
            echo "                                            <div id=\"product-download";
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 547
            echo $this->getAttribute($context["product_download"], "name", array());
            echo "
                                                <input type=\"hidden\" name=\"product_download[]\"
                                                       value=\"";
            // line 549
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 551
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\"
                                                                                                title=\"";
        // line 556
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 558
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "\"
                                           id=\"input-related\" class=\"form-control\"/>
                                    <div id=\"product-related\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 561
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_relateds"]) ? $context["product_relateds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 562
            echo "                                            <div id=\"product-related";
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 563
            echo $this->getAttribute($context["product_related"], "name", array());
            echo "
                                                <input type=\"hidden\" name=\"product_related[]\"
                                                       value=\"";
            // line 565
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        echo "</div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related-article\"><span
                                            data-toggle=\"tooltip\"
                                            title=\"";
        // line 573
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related_article"]) ? $context["entry_related_article"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"product_related_article_input\" value=\"\"
                                           placeholder=\"";
        // line 576
        echo (isset($context["entry_related_article"]) ? $context["entry_related_article"] : null);
        echo "\" id=\"input-related-article\"
                                           class=\"form-control\"/>
                                    <div id=\"article-related\" class=\"well well-sm\"
                                         style=\"height: 150px; overflow: auto;\"> ";
        // line 579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["product_related_article"]);
        foreach ($context['_seq'] as $context["_key"] => $context["product_related_article"]) {
            // line 580
            echo "                                            <div id=\"article-related";
            echo $this->getAttribute($context["product_related_article"], "article_id", array());
            echo "\"><i
                                                        class=\"fa fa-minus-circle\"></i> ";
            // line 581
            echo $this->getAttribute($context["product_related_article"], "name", array());
            echo "
                                                <input type=\"hidden\" name=\"product_related_article[]\"
                                                       value=\"";
            // line 583
            echo $this->getAttribute($context["product_related_article"], "article_id", array());
            echo "\"/>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related_article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 585
        echo "</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-attribute\">
                            <div class=\"table-responsive\">
                                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 594
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 595
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 601
        $context["attribute_row"] = 0;
        // line 602
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_attributes"]) ? $context["product_attributes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 603
            echo "                                        <tr id=\"attribute-row";
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "\">
                                            <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\"
                                                                                             name=\"product_attribute[";
            // line 605
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][name]\"
                                                                                             value=\"";
            // line 606
            echo $this->getAttribute($context["product_attribute"], "name", array());
            echo "\"
                                                                                             placeholder=\"";
            // line 607
            echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
            echo "\"
                                                                                             class=\"form-control\"/>
                                                <input type=\"hidden\"
                                                       name=\"product_attribute[";
            // line 610
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][attribute_id]\"
                                                       value=\"";
            // line 611
            echo $this->getAttribute($context["product_attribute"], "attribute_id", array());
            echo "\"/></td>
                                            <td class=\"text-left\">";
            // line 612
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 613
                echo "                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                                    src=\"language/";
                // line 614
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\"
                                                                    title=\"";
                // line 615
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/></span>
                                                        <textarea
                                                                name=\"product_attribute[";
                // line 617
                echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
                echo "][product_attribute_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][text]\"
                                                                rows=\"5\" placeholder=\"";
                // line 618
                echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
                echo "\"
                                                                class=\"form-control\">";
                // line 619
                echo (($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "text", array())) : (""));
                echo "</textarea>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 621
            echo "</td>
                                            <td class=\"text-right\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#attribute-row";
            // line 624
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 625
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 630
            $context["attribute_row"] = ((isset($context["attribute_row"]) ? $context["attribute_row"] : null) + 1);
            // line 631
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 632
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-right\">
                                            <button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 639
        echo (isset($context["button_attribute_add"]) ? $context["button_attribute_add"] : null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-option\">
                            <div class=\"row\">
                                <div class=\"col-sm-2\">
                                    <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                                        ";
        // line 651
        $context["option_row"] = 0;
        // line 652
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 653
            echo "                                            <li><a href=\"#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" data-toggle=\"tab\"><i
                                                            class=\"fa fa-minus-circle\"
                                                            onclick=\"\$('a[href=\\'#tab-option";
            // line 655
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "
                                                </a></li>
                                            ";
            // line 657
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 658
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 659
        echo "                                        <li>
                                            <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 660
        echo (isset($context["entry_option"]) ? $context["entry_option"] : null);
        echo "\"
                                                   id=\"input-option\" class=\"form-control\"/>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"col-sm-10\">
                                    <div class=\"tab-content\"> ";
        // line 666
        $context["option_row"] = 0;
        // line 667
        echo "                                        ";
        $context["option_value_row"] = 0;
        // line 668
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 669
            echo "                                            <div class=\"tab-pane\" id=\"tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">
                                                <input type=\"hidden\"
                                                       name=\"product_option[";
            // line 671
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][product_option_id]\"
                                                       value=\"";
            // line 672
            echo $this->getAttribute($context["product_option"], "product_option_id", array());
            echo "\"/>
                                                <input type=\"hidden\" name=\"product_option[";
            // line 673
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][name]\"
                                                       value=\"";
            // line 674
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "\"/>
                                                <input type=\"hidden\" name=\"product_option[";
            // line 675
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][option_id]\"
                                                       value=\"";
            // line 676
            echo $this->getAttribute($context["product_option"], "option_id", array());
            echo "\"/>
                                                <input type=\"hidden\" name=\"product_option[";
            // line 677
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][type]\"
                                                       value=\"";
            // line 678
            echo $this->getAttribute($context["product_option"], "type", array());
            echo "\"/>
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\"
                                                           for=\"input-required";
            // line 681
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">";
            echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
            echo "</label>
                                                    <div class=\"col-sm-10\">
                                                        <select name=\"product_option[";
            // line 683
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][required]\"
                                                                id=\"input-required";
            // line 684
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\"
                                                                class=\"form-control\">


                                                            ";
            // line 688
            if ($this->getAttribute($context["product_option"], "required", array())) {
                // line 689
                echo "

                                                                <option value=\"1\"
                                                                        selected=\"selected\">";
                // line 692
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                                                                <option value=\"0\">";
                // line 693
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>


                                                            ";
            } else {
                // line 697
                echo "

                                                                <option value=\"1\">";
                // line 699
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                                                                <option value=\"0\"
                                                                        selected=\"selected\">";
                // line 701
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>


                                                            ";
            }
            // line 705
            echo "

                                                        </select>
                                                    </div>
                                                </div>
                                                ";
            // line 710
            if (($this->getAttribute($context["product_option"], "type", array()) == "text")) {
                // line 711
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 713
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 716
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\"
                                                                   value=\"";
                // line 717
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\"
                                                                   placeholder=\"";
                // line 718
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\"
                                                                   id=\"input-value";
                // line 719
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 724
            echo "                                                ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "textarea")) {
                // line 725
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 727
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <textarea name=\"product_option[";
                // line 729
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\"
                                                                      rows=\"5\" placeholder=\"";
                // line 730
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\"
                                                                      id=\"input-value";
                // line 731
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\"
                                                                      class=\"form-control\">";
                // line 732
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "</textarea>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 736
            echo "                                                ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "file")) {
                // line 737
                echo "                                                    <div class=\"form-group\" style=\"display: none;\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 739
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <input type=\"text\"
                                                                   name=\"product_option[";
                // line 742
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\"
                                                                   value=\"";
                // line 743
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\"
                                                                   placeholder=\"";
                // line 744
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\"
                                                                   id=\"input-value";
                // line 745
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\"
                                                                   class=\"form-control\"/>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 750
            echo "                                                ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "date")) {
                // line 751
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 753
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                                                        <div class=\"col-sm-3\">
                                                            <div class=\"input-group date\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 757
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\"
                                                                       value=\"";
                // line 758
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\"
                                                                       placeholder=\"";
                // line 759
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD\"
                                                                       id=\"input-value";
                // line 761
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 769
            echo "                                                ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "time")) {
                // line 770
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 772
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group time\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 776
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\"
                                                                       value=\"";
                // line 777
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\"
                                                                       placeholder=\"";
                // line 778
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\"
                                                                       data-date-format=\"HH:mm\"
                                                                       id=\"input-value";
                // line 780
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 788
            echo "                                                ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "datetime")) {
                // line 789
                echo "                                                    <div class=\"form-group\">
                                                        <label class=\"col-sm-2 control-label\"
                                                               for=\"input-value";
                // line 791
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                                                        <div class=\"col-sm-10\">
                                                            <div class=\"input-group datetime\">
                                                                <input type=\"text\"
                                                                       name=\"product_option[";
                // line 795
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\"
                                                                       value=\"";
                // line 796
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\"
                                                                       placeholder=\"";
                // line 797
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\"
                                                                       data-date-format=\"YYYY-MM-DD HH:mm\"
                                                                       id=\"input-value";
                // line 799
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\"
                                                                       class=\"form-control\"/>
                                                                <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                                                        </div>
                                                    </div>
                                                ";
            }
            // line 807
            echo "                                                ";
            if ((((($this->getAttribute($context["product_option"], "type", array()) == "select") || ($this->getAttribute($context["product_option"], "type", array()) == "radio")) || ($this->getAttribute($context["product_option"], "type", array()) == "checkbox")) || ($this->getAttribute($context["product_option"], "type", array()) == "image"))) {
                // line 808
                echo "                                                    <div class=\"table-responsive\">
                                                        <table id=\"option-value";
                // line 809
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\"
                                                               class=\"table table-striped table-bordered table-hover\">
                                                            <thead>
                                                            <tr>
                                                                <td class=\"text-left\">";
                // line 813
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 814
                echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                echo "</td>
                                                                <td class=\"text-left\">";
                // line 815
                echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 816
                echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 817
                echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
                echo "</td>
                                                                <td class=\"text-right\">";
                // line 818
                echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                echo "</td>
                                                                <td></td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            ";
                // line 824
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product_option"], "product_option_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 825
                    echo "                                                                <tr id=\"option-value-row";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "\">
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 827
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][option_value_id]\"
                                                                                class=\"form-control\">


                                                                            ";
                    // line 831
                    if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                        // line 832
                        echo "
                                                                                ";
                        // line 833
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 834
                            echo "
                                                                                    ";
                            // line 835
                            if (($this->getAttribute($context["option_value"], "option_value_id", array()) == $this->getAttribute($context["product_option_value"], "option_value_id", array()))) {
                                // line 836
                                echo "

                                                                                        <option value=\"";
                                // line 838
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\"
                                                                                                selected=\"selected\">";
                                // line 839
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>


                                                                                    ";
                            } else {
                                // line 843
                                echo "

                                                                                        <option value=\"";
                                // line 845
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>


                                                                                    ";
                            }
                            // line 849
                            echo "                                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 850
                        echo "                                                                            ";
                    }
                    // line 851
                    echo "

                                                                        </select>
                                                                        <input type=\"hidden\"
                                                                               name=\"product_option[";
                    // line 855
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][product_option_value_id]\"
                                                                               value=\"";
                    // line 856
                    echo $this->getAttribute($context["product_option_value"], "product_option_value_id", array());
                    echo "\"/>
                                                                    </td>
                                                                    <td class=\"text-right\"><input type=\"text\"
                                                                                                  name=\"product_option[";
                    // line 859
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][quantity]\"
                                                                                                  value=\"";
                    // line 860
                    echo $this->getAttribute($context["product_option_value"], "quantity", array());
                    echo "\"
                                                                                                  placeholder=\"";
                    // line 861
                    echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                    echo "\"
                                                                                                  class=\"form-control\"/>
                                                                    </td>
                                                                    <td class=\"text-left\"><select
                                                                                name=\"product_option[";
                    // line 865
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][subtract]\"
                                                                                class=\"form-control\">


                                                                            ";
                    // line 869
                    if ($this->getAttribute($context["product_option_value"], "subtract", array())) {
                        // line 870
                        echo "

                                                                                <option value=\"1\"
                                                                                        selected=\"selected\">";
                        // line 873
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                                                                <option value=\"0\">";
                        // line 874
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>


                                                                            ";
                    } else {
                        // line 878
                        echo "

                                                                                <option value=\"1\">";
                        // line 880
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                                                                <option value=\"0\"
                                                                                        selected=\"selected\">";
                        // line 882
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>


                                                                            ";
                    }
                    // line 886
                    echo "

                                                                        </select></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 890
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price_prefix]\"
                                                                                class=\"form-control\">


                                                                            ";
                    // line 894
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "+")) {
                        // line 895
                        echo "

                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>


                                                                            ";
                    } else {
                        // line 903
                        echo "

                                                                                <option value=\"+\">+</option>


                                                                            ";
                    }
                    // line 909
                    echo "                                                                            ";
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "-")) {
                        // line 910
                        echo "

                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>


                                                                            ";
                    } else {
                        // line 918
                        echo "

                                                                                <option value=\"-\">-</option>


                                                                            ";
                    }
                    // line 924
                    echo "

                                                                        </select>
                                                                        <input type=\"text\"
                                                                               name=\"product_option[";
                    // line 928
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price]\"
                                                                               value=\"";
                    // line 929
                    echo $this->getAttribute($context["product_option_value"], "price", array());
                    echo "\"
                                                                               placeholder=\"";
                    // line 930
                    echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                    echo "\"
                                                                               class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 933
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points_prefix]\"
                                                                                class=\"form-control\">


                                                                            ";
                    // line 937
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "+")) {
                        // line 938
                        echo "

                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>


                                                                            ";
                    } else {
                        // line 946
                        echo "

                                                                                <option value=\"+\">+</option>


                                                                            ";
                    }
                    // line 952
                    echo "                                                                            ";
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "-")) {
                        // line 953
                        echo "

                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>


                                                                            ";
                    } else {
                        // line 961
                        echo "

                                                                                <option value=\"-\">-</option>


                                                                            ";
                    }
                    // line 967
                    echo "

                                                                        </select>
                                                                        <input type=\"text\"
                                                                               name=\"product_option[";
                    // line 971
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points]\"
                                                                               value=\"";
                    // line 972
                    echo $this->getAttribute($context["product_option_value"], "points", array());
                    echo "\"
                                                                               placeholder=\"";
                    // line 973
                    echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
                    echo "\"
                                                                               class=\"form-control\"/></td>
                                                                    <td class=\"text-right\"><select
                                                                                name=\"product_option[";
                    // line 976
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight_prefix]\"
                                                                                class=\"form-control\">


                                                                            ";
                    // line 980
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "+")) {
                        // line 981
                        echo "

                                                                                <option value=\"+\" selected=\"selected\">
                                                                                    +
                                                                                </option>


                                                                            ";
                    } else {
                        // line 989
                        echo "

                                                                                <option value=\"+\">+</option>


                                                                            ";
                    }
                    // line 995
                    echo "                                                                            ";
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "-")) {
                        // line 996
                        echo "

                                                                                <option value=\"-\" selected=\"selected\">
                                                                                    -
                                                                                </option>


                                                                            ";
                    } else {
                        // line 1004
                        echo "

                                                                                <option value=\"-\">-</option>


                                                                            ";
                    }
                    // line 1010
                    echo "

                                                                        </select>
                                                                        <input type=\"text\"
                                                                               name=\"product_option[";
                    // line 1014
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight]\"
                                                                               value=\"";
                    // line 1015
                    echo $this->getAttribute($context["product_option_value"], "weight", array());
                    echo "\"
                                                                               placeholder=\"";
                    // line 1016
                    echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                    echo "\"
                                                                               class=\"form-control\"/></td>
                                                                    <td class=\"text-right\">
                                                                        <button type=\"button\"
                                                                                onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 1020
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "').remove();\"
                                                                                data-toggle=\"tooltip\"
                                                                                title=\"";
                    // line 1022
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\"
                                                                                class=\"btn btn-danger\"><i
                                                                                    class=\"fa fa-minus-circle\"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                ";
                    // line 1028
                    $context["option_value_row"] = ((isset($context["option_value_row"]) ? $context["option_value_row"] : null) + 1);
                    // line 1029
                    echo "                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1030
                echo "                                                            </tbody>

                                                            <tfoot>
                                                            <tr>
                                                                <td colspan=\"6\"></td>
                                                                <td class=\"text-left\">
                                                                    <button type=\"button\"
                                                                            onclick=\"addOptionValue('";
                // line 1037
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "');\"
                                                                            data-toggle=\"tooltip\"
                                                                            title=\"";
                // line 1039
                echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
                echo "\"
                                                                            class=\"btn btn-primary\"><i
                                                                                class=\"fa fa-plus-circle\"></i></button>
                                                                </td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <select id=\"option-values";
                // line 1047
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" style=\"display: none;\">


                                                        ";
                // line 1050
                if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                    // line 1051
                    echo "                                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 1052
                        echo "

                                                                <option value=\"";
                        // line 1054
                        echo $this->getAttribute($context["option_value"], "option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "</option>


                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1058
                    echo "                                                        ";
                }
                // line 1059
                echo "

                                                    </select>
                                                ";
            }
            // line 1062
            echo " </div>
                                            ";
            // line 1063
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 1064
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-recurring\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1073
        echo (isset($context["entry_recurring"]) ? $context["entry_recurring"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1074
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                                        <td class=\"text-left\"></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1080
        $context["recurring_row"] = 0;
        // line 1081
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_recurrings"]) ? $context["product_recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 1082
            echo "                                        <tr id=\"recurring-row";
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 1084
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][recurring_id]\"
                                                        class=\"form-control\">


                                                    ";
            // line 1088
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 1089
                echo "                                                        ";
                if (($this->getAttribute($context["recurring"], "recurring_id", array()) == $this->getAttribute($context["product_recurring"], "recurring_id", array()))) {
                    // line 1090
                    echo "

                                                            <option value=\"";
                    // line 1092
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1093
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>


                                                        ";
                } else {
                    // line 1097
                    echo "

                                                            <option value=\"";
                    // line 1099
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>


                                                        ";
                }
                // line 1103
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1104
            echo "

                                                </select></td>
                                            <td class=\"text-left\"><select
                                                        name=\"product_recurring[";
            // line 1108
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">


                                                    ";
            // line 1112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1113
                echo "                                                        ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_recurring"], "customer_group_id", array()))) {
                    // line 1114
                    echo "

                                                            <option value=\"";
                    // line 1116
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1117
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>


                                                        ";
                } else {
                    // line 1121
                    echo "

                                                            <option value=\"";
                    // line 1123
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>


                                                        ";
                }
                // line 1127
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1128
            echo "

                                                </select></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#recurring-row";
            // line 1133
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "').remove()\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1134
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1139
            $context["recurring_row"] = ((isset($context["recurring_row"]) ? $context["recurring_row"] : null) + 1);
            // line 1140
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1141
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1148
        echo (isset($context["button_recurring_add"]) ? $context["button_recurring_add"] : null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-discount\">
                            <div class=\"table-responsive\">
                                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1161
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1162
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1163
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1164
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1165
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1166
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1172
        $context["discount_row"] = 0;
        // line 1173
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_discounts"]) ? $context["product_discounts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1174
            echo "                                        <tr id=\"discount-row";
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_discount[";
            // line 1176
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">
                                                    ";
            // line 1178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1179
                echo "                                                        ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_discount"], "customer_group_id", array()))) {
                    // line 1180
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1181
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                                                        ";
                } else {
                    // line 1183
                    echo "                                                            <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                                                        ";
                }
                // line 1185
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1186
            echo "                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 1188
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][quantity]\"
                                                                          value=\"";
            // line 1189
            echo $this->getAttribute($context["product_discount"], "quantity", array());
            echo "\"
                                                                          placeholder=\"";
            // line 1190
            echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 1193
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][priority]\"
                                                                          value=\"";
            // line 1194
            echo $this->getAttribute($context["product_discount"], "priority", array());
            echo "\"
                                                                          placeholder=\"";
            // line 1195
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_discount[";
            // line 1198
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][price]\"
                                                                          value=\"";
            // line 1199
            echo $this->getAttribute($context["product_discount"], "price", array());
            echo "\"
                                                                          placeholder=\"";
            // line 1200
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_discount[";
            // line 1205
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_start]\"
                                                           value=\"";
            // line 1206
            echo $this->getAttribute($context["product_discount"], "date_start", array());
            echo "\"
                                                           placeholder=\"";
            // line 1207
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\"
                                                           data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                                            </td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_discount[";
            // line 1216
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_end]\"
                                                           value=\"";
            // line 1217
            echo $this->getAttribute($context["product_discount"], "date_end", array());
            echo "\"
                                                           placeholder=\"";
            // line 1218
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\"
                                                           data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                                            </td>
                                            <td class=\"text-left\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#discount-row";
            // line 1226
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1227
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1232
            $context["discount_row"] = ((isset($context["discount_row"]) ? $context["discount_row"] : null) + 1);
            // line 1233
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1234
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"6\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1241
        echo (isset($context["button_discount_add"]) ? $context["button_discount_add"] : null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-special\">
                            <div class=\"table-responsive\">
                                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1254
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1255
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1256
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1257
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1258
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1264
        $context["special_row"] = 0;
        // line 1265
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_specials"]) ? $context["product_specials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1266
            echo "                                        <tr id=\"special-row";
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "\">
                                            <td class=\"text-left\"><select
                                                        name=\"product_special[";
            // line 1268
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][customer_group_id]\"
                                                        class=\"form-control\">


                                                    ";
            // line 1272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1273
                echo "                                                        ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_special"], "customer_group_id", array()))) {
                    // line 1274
                    echo "

                                                            <option value=\"";
                    // line 1276
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1277
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>


                                                        ";
                } else {
                    // line 1281
                    echo "

                                                            <option value=\"";
                    // line 1283
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>


                                                        ";
                }
                // line 1287
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1288
            echo "

                                                </select></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1292
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][priority]\"
                                                                          value=\"";
            // line 1293
            echo $this->getAttribute($context["product_special"], "priority", array());
            echo "\"
                                                                          placeholder=\"";
            // line 1294
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_special[";
            // line 1297
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][price]\"
                                                                          value=\"";
            // line 1298
            echo $this->getAttribute($context["product_special"], "price", array());
            echo "\"
                                                                          placeholder=\"";
            // line 1299
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_special[";
            // line 1304
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_start]\"
                                                           value=\"";
            // line 1305
            echo $this->getAttribute($context["product_special"], "date_start", array());
            echo "\"
                                                           placeholder=\"";
            // line 1306
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\"
                                                           data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                                            </td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                                <div class=\"input-group date\">
                                                    <input type=\"text\"
                                                           name=\"product_special[";
            // line 1315
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_end]\"
                                                           value=\"";
            // line 1316
            echo $this->getAttribute($context["product_special"], "date_end", array());
            echo "\"
                                                           placeholder=\"";
            // line 1317
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\"
                                                           data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/>
                                                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                                            </td>
                                            <td class=\"text-left\">
                                                <button type=\"button\"
                                                        onclick=\"\$('#special-row";
            // line 1325
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1326
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1331
            $context["special_row"] = ((isset($context["special_row"]) ? $context["special_row"] : null) + 1);
            // line 1332
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1333
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"5\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1340
        echo (isset($context["button_special_add"]) ? $context["button_special_add"] : null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-image\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1353
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\"
                                                                 class=\"img-thumbnail\"><img src=\"";
        // line 1359
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\"
                                                                                            title=\"\"
                                                                                            data-placeholder=\"";
        // line 1361
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\"/></a>
                                            <input type=\"hidden\" name=\"image\" value=\"";
        // line 1362
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\"/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=\"table-responsive\">
                                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1372
        echo (isset($context["entry_additional_image"]) ? $context["entry_additional_image"] : null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1373
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1379
        $context["image_row"] = 0;
        // line 1380
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_images"]) ? $context["product_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1381
            echo "                                        <tr id=\"image-row";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\">
                                            <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1382
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\"
                                                                     data-toggle=\"image\" class=\"img-thumbnail\"><img
                                                            src=\"";
            // line 1384
            echo $this->getAttribute($context["product_image"], "thumb", array());
            echo "\" alt=\"\" title=\"\"
                                                            data-placeholder=\"";
            // line 1385
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\"/></a>
                                                <input type=\"hidden\" name=\"product_image[";
            // line 1386
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][image]\"
                                                       value=\"";
            // line 1387
            echo $this->getAttribute($context["product_image"], "image", array());
            echo "\"
                                                       id=\"input-image";
            // line 1388
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\"/></td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_image[";
            // line 1390
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][sort_order]\"
                                                                          value=\"";
            // line 1391
            echo $this->getAttribute($context["product_image"], "sort_order", array());
            echo "\"
                                                                          placeholder=\"";
            // line 1392
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\"
                                                                          class=\"form-control\"/></td>
                                            <td class=\"text-left\">
                                                <button type=\"button\" onclick=\"\$('#image-row";
            // line 1395
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "').remove();\"
                                                        data-toggle=\"tooltip\" title=\"";
            // line 1396
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\"
                                                        class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        ";
            // line 1401
            $context["image_row"] = ((isset($context["image_row"]) ? $context["image_row"] : null) + 1);
            // line 1402
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1403
        echo "                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <td colspan=\"2\"></td>
                                        <td class=\"text-left\">
                                            <button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\"
                                                    title=\"";
        // line 1410
        echo (isset($context["button_image_add"]) ? $context["button_image_add"] : null);
        echo "\" class=\"btn btn-primary\"><i
                                                        class=\"fa fa-plus-circle\"></i></button>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-complection\">
                            <div class=\"table-responsive\">
                                <div>
                                    <select name=\"main_category_id\" class=\"form-control\">
                                        <h3>Добавить связанную категорию</h3>
                                        <form action=\"";
        // line 1423
        echo (isset($context["addComplectationCategoryUrl"]) ? $context["addComplectationCategoryUrl"] : null);
        echo "\"></form>
                                        <option value=\"0\" selected=\"selected\">";
        // line 1424
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                                        ";
        // line 1425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 1426
            echo "                                            ";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["main_category_id"]) ? $context["main_category_id"] : null))) {
                // line 1427
                echo "                                                <option value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\"
                                                        selected=\"selected\">";
                // line 1428
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
                                            ";
            } else {
                // line 1430
                echo "                                                <option value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</option>
                                            ";
            }
            // line 1432
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1433
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-reward\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\"
                                                                                               title=\"";
        // line 1440
        echo (isset($context["help_points"]) ? $context["help_points"] : null);
        echo "\">";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"points\" value=\"";
        // line 1442
        echo (isset($context["points"]) ? $context["points"] : null);
        echo "\"
                                           placeholder=\"";
        // line 1443
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                                </div>
                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1450
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                                        <td class=\"text-right\">";
        // line 1451
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    ";
        // line 1456
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1457
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1458
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</td>
                                            <td class=\"text-right\"><input type=\"text\"
                                                                          name=\"product_reward[";
            // line 1460
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "][points]\"
                                                                          value=\"";
            // line 1461
            echo (($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array"), "points", array())) : (""));
            echo "\"
                                                                          class=\"form-control\"/></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1465
        echo "                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-seo\">
                            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1471
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1476
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1477
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 1481
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1482
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1483
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                                            <td class=\"text-left\">";
            // line 1484
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1485
                echo "                                                    <div class=\"input-group\"><span class=\"input-group-addon\"><img
                                                                    src=\"language/";
                // line 1486
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\"
                                                                    title=\"";
                // line 1487
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"/></span>
                                                        <input type=\"text\"
                                                               name=\"product_seo_url[";
                // line 1489
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\"
                                                               value=\"";
                // line 1490
                if ($this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\"
                                                               placeholder=\"";
                // line 1491
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\"
                                                               class=\"form-control\"/>
                                                    </div>
                                                    ";
                // line 1494
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 1495
                    echo "                                                        <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                                                    ";
                }
                // line 1497
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1500
        echo "                                    </tbody>

                                </table>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\"
                                       for=\"input-noindex\">";
        // line 1506
        echo (isset($context["entry_noindex"]) ? $context["entry_noindex"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"noindex\" id=\"input-noindex\" class=\"form-control\">
                                        ";
        // line 1509
        if ((isset($context["noindex"]) ? $context["noindex"] : null)) {
            // line 1510
            echo "                                            <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                            <option value=\"0\">";
            // line 1511
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                        ";
        } else {
            // line 1513
            echo "                                            <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                            <option value=\"0\" selected=\"selected\">";
            // line 1514
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                                        ";
        }
        // line 1516
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-design\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td class=\"text-left\">";
        // line 1525
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 1526
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 1530
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1531
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 1532
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                                            <td class=\"text-left\"><select
                                                        name=\"product_layout[";
            // line 1534
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\"
                                                        class=\"form-control\">
                                                    <option value=\"\"></option>


                                                    ";
            // line 1539
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1540
                echo "                                                        ";
                if (($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 1541
                    echo "

                                                            <option value=\"";
                    // line 1543
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\"
                                                                    selected=\"selected\">";
                    // line 1544
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>


                                                        ";
                } else {
                    // line 1548
                    echo "

                                                            <option value=\"";
                    // line 1550
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>


                                                        ";
                }
                // line 1554
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1555
            echo "

                                                </select></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1560
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
    <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
    <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
    <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
    <script type=\"text/javascript\"><!--
        // Manufacturer
        \$('input[name=\\'manufacturer\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1583
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            manufacturer_id: 0,
                            name: '";
        // line 1588
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
                        });

                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['manufacturer_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'manufacturer\\']').val(item['label']);
                \$('input[name=\\'manufacturer_id\\']').val(item['value']);
            }
        });

        // Category
        \$('input[name=\\'category\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1610
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['category_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'category\\']').val('');

                \$('#product-category' + item['value']).remove();

                \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#product-category').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });

        // Filter
        \$('input[name=\\'filter\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1639
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['filter_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'filter\\']').val('');

                \$('#product-filter' + item['value']).remove();

                \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#product-filter').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });

        // Downloads
        \$('input[name=\\'download\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1668
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['download_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'download\\']').val('');

                \$('#product-download' + item['value']).remove();

                \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#product-download').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });

        // Related
        \$('input[name=\\'related\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1697
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['product_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'related\\']').val('');

                \$('#product-related' + item['value']).remove();

                \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#product-related').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });

        // Related Article
        \$('input[name=\\'product_related_article_input\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=blog/article/autocomplete&user_token=";
        // line 1726
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['article_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                \$('input[name=\\'product_related_article\\']').val('');

                \$('#article-related' + item['value']).remove();

                \$('#article-related').append('<div id=\"article-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related_article[]\" value=\"' + item['value'] + '\" /></div>');
            }
        });

        \$('#article-related').delegate('.fa-minus-circle', 'click', function () {
            \$(this).parent().remove();
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        var attribute_row = ";
        // line 1752
        echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
        echo ";

        function addAttribute() {
            html = '<tr id=\"attribute-row' + attribute_row + '\">';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1756
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-left\">';
            ";
        // line 1758
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1759
            echo "            html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\"></textarea></div>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1761
        echo "            html += '  </td>';
            html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1762
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#attribute tbody').append(html);

            attributeautocomplete(attribute_row);

            attribute_row++;
        }

        function attributeautocomplete(attribute_row) {
            \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
                'source': function (request, response) {
                    \$.ajax({
                        url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1776
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                        dataType: 'json',
                        success: function (json) {
                            response(\$.map(json, function (item) {
                                return {
                                    category: item.attribute_group,
                                    label: item.name,
                                    value: item.attribute_id
                                }
                            }));
                        }
                    });
                },
                'select': function (item) {
                    \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
                    \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
                }
            });
        }

        \$('#attribute tbody tr').each(function (index, element) {
            attributeautocomplete(index);
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        var option_row = ";
        // line 1801
        echo (isset($context["option_row"]) ? $context["option_row"] : null);
        echo ";

        \$('input[name=\\'option\\']').autocomplete({
            'source': function (request, response) {
                \$.ajax({
                    url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1806
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response(\$.map(json, function (item) {
                            return {
                                category: item['category'],
                                label: item['name'],
                                value: item['option_id'],
                                type: item['type'],
                                option_value: item['option_value']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
                html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
                html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
                html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
                html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

                html += '\t<div class=\"form-group\">';
                html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1829
        echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
        echo "</label>';
                html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
                html += '\t      <option value=\"1\">";
        // line 1831
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
                html += '\t      <option value=\"0\">";
        // line 1832
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
                html += '\t  </select></div>';
                html += '\t</div>';

                if (item['type'] == 'text') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1838
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1839
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'textarea') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1845
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1846
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'file') {
                    html += '\t<div class=\"form-group\" style=\"display: none;\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1852
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1853
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'date') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1859
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1860
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'time') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1866
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1867
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'datetime') {
                    html += '\t<div class=\"form-group\">';
                    html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1873
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
                    html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1874
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
                    html += '\t</div>';
                }

                if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
                    html += '<div class=\"table-responsive\">';
                    html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
                    html += '  \t <thead>';
                    html += '      <tr>';
                    html += '        <td class=\"text-left\">";
        // line 1883
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1884
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>';
                    html += '        <td class=\"text-left\">";
        // line 1885
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1886
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1887
        echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
        echo "</td>';
                    html += '        <td class=\"text-right\">";
        // line 1888
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</td>';
                    html += '        <td></td>';
                    html += '      </tr>';
                    html += '  \t </thead>';
                    html += '  \t <tbody>';
                    html += '    </tbody>';
                    html += '    <tfoot>';
                    html += '      <tr>';
                    html += '        <td colspan=\"6\"></td>';
                    html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1897
        echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
                    html += '      </tr>';
                    html += '    </tfoot>';
                    html += '  </table>';
                    html += '</div>';

                    html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

                    for (i = 0; i < item['option_value'].length; i++) {
                        html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
                    }

                    html += '  </select>';
                    html += '</div>';
                }

                \$('#tab-option .tab-content').append(html);

                \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

                \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

                \$('[data-toggle=\\'tooltip\\']').tooltip({
                    container: 'body',
                    html: true
                });

                \$('.date').datetimepicker({
                    language: '";
        // line 1925
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
                    pickTime: false
                });

                \$('.time').datetimepicker({
                    language: '";
        // line 1930
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
                    pickDate: false
                });

                \$('.datetime').datetimepicker({
                    language: '";
        // line 1935
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
                    pickDate: true,
                    pickTime: true
                });

                option_row++;
            }
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        var option_value_row = ";
        // line 1945
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

        function addOptionValue(option_row) {
            html = '<tr id=\"option-value-row' + option_value_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
            html += \$('#option-values' + option_row).html();
            html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1952
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
            html += '    <option value=\"1\">";
        // line 1954
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
            html += '    <option value=\"0\">";
        // line 1955
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
            html += '  </select></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1961
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1966
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
            html += '    <option value=\"+\">+</option>';
            html += '    <option value=\"-\">-</option>';
            html += '  </select>';
            html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1971
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1972
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#option-value' + option_row + ' tbody').append(html);
            \$('[rel=tooltip]').tooltip();

            option_value_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var discount_row = ";
        // line 1983
        echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
        echo ";

        function addDiscount() {
            html = '<tr id=\"discount-row' + discount_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 1988
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1989
            echo "            html += '    <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1991
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1992
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1993
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1994
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1995
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1996
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1997
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#discount tbody').append(html);

            \$('.date').datetimepicker({
                pickTime: false
            });

            discount_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var special_row = ";
        // line 2011
        echo (isset($context["special_row"]) ? $context["special_row"] : null);
        echo ";

        function addSpecial() {
            html = '<tr id=\"special-row' + special_row + '\">';
            html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
            ";
        // line 2016
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2017
            echo "            html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2019
        echo "            html += '  </select></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 2020
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 2021
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 2022
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 2023
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2024
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#special tbody').append(html);

            \$('.date').datetimepicker({
                language: '";
        // line 2030
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
                pickTime: false
            });

            special_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var image_row = ";
        // line 2039
        echo (isset($context["image_row"]) ? $context["image_row"] : null);
        echo ";

        function addImage() {
            html = '<tr id=\"image-row' + image_row + '\">';
            html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 2043
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
            html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 2044
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
            html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 2045
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            \$('#images tbody').append(html);

            image_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        var recurring_row = ";
        // line 2055
        echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
        echo ";

        function addRecurring() {
            html = '<tr id=\"recurring-row' + recurring_row + '\">';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
            ";
        // line 2061
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 2062
            echo "            html += '      <option value=\"";
            echo $this->getAttribute($context["recurring"], "recurring_id", array());
            echo "\">";
            echo $this->getAttribute($context["recurring"], "name", array());
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2064
        echo "            html += '    </select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
            ";
        // line 2068
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 2069
            echo "            html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</option>';
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2071
        echo "            html += '    <select>';
            html += '  </td>';
            html += '  <td class=\"left\">';
            html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 2074
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
            html += '  </td>';
            html += '</tr>';

            \$('#tab-recurring table tbody').append(html);

            recurring_row++;
        }

        //--></script>
    <script type=\"text/javascript\"><!--
        \$('.date').datetimepicker({
            language: '";
        // line 2086
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
            pickTime: false
        });

        \$('.time').datetimepicker({
            language: '";
        // line 2091
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
            pickDate: false
        });

        \$('.datetime').datetimepicker({
            language: '";
        // line 2096
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
            pickDate: true,
            pickTime: true
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        \$('#language a:first').tab('show');
        \$('#option a:first').tab('show');
        //--></script>
</div>
";
        // line 2106
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4303 => 2106,  4290 => 2096,  4282 => 2091,  4274 => 2086,  4259 => 2074,  4254 => 2071,  4243 => 2069,  4239 => 2068,  4233 => 2064,  4222 => 2062,  4218 => 2061,  4209 => 2055,  4196 => 2045,  4192 => 2044,  4186 => 2043,  4179 => 2039,  4167 => 2030,  4158 => 2024,  4154 => 2023,  4150 => 2022,  4146 => 2021,  4142 => 2020,  4139 => 2019,  4128 => 2017,  4124 => 2016,  4116 => 2011,  4099 => 1997,  4095 => 1996,  4091 => 1995,  4087 => 1994,  4083 => 1993,  4079 => 1992,  4076 => 1991,  4065 => 1989,  4061 => 1988,  4053 => 1983,  4039 => 1972,  4035 => 1971,  4027 => 1966,  4019 => 1961,  4010 => 1955,  4006 => 1954,  4001 => 1952,  3991 => 1945,  3978 => 1935,  3970 => 1930,  3962 => 1925,  3931 => 1897,  3919 => 1888,  3915 => 1887,  3911 => 1886,  3907 => 1885,  3903 => 1884,  3899 => 1883,  3887 => 1874,  3883 => 1873,  3874 => 1867,  3870 => 1866,  3861 => 1860,  3857 => 1859,  3848 => 1853,  3844 => 1852,  3835 => 1846,  3831 => 1845,  3822 => 1839,  3818 => 1838,  3809 => 1832,  3805 => 1831,  3800 => 1829,  3774 => 1806,  3766 => 1801,  3738 => 1776,  3721 => 1762,  3718 => 1761,  3701 => 1759,  3697 => 1758,  3692 => 1756,  3685 => 1752,  3656 => 1726,  3624 => 1697,  3592 => 1668,  3560 => 1639,  3528 => 1610,  3503 => 1588,  3495 => 1583,  3470 => 1560,  3460 => 1555,  3454 => 1554,  3445 => 1550,  3441 => 1548,  3434 => 1544,  3430 => 1543,  3426 => 1541,  3423 => 1540,  3419 => 1539,  3411 => 1534,  3406 => 1532,  3403 => 1531,  3399 => 1530,  3392 => 1526,  3388 => 1525,  3377 => 1516,  3372 => 1514,  3367 => 1513,  3362 => 1511,  3357 => 1510,  3355 => 1509,  3349 => 1506,  3341 => 1500,  3328 => 1497,  3322 => 1495,  3320 => 1494,  3314 => 1491,  3308 => 1490,  3302 => 1489,  3297 => 1487,  3291 => 1486,  3288 => 1485,  3284 => 1484,  3280 => 1483,  3277 => 1482,  3273 => 1481,  3266 => 1477,  3262 => 1476,  3254 => 1471,  3246 => 1465,  3236 => 1461,  3232 => 1460,  3227 => 1458,  3224 => 1457,  3220 => 1456,  3212 => 1451,  3208 => 1450,  3198 => 1443,  3194 => 1442,  3187 => 1440,  3178 => 1433,  3172 => 1432,  3164 => 1430,  3159 => 1428,  3154 => 1427,  3151 => 1426,  3147 => 1425,  3143 => 1424,  3139 => 1423,  3123 => 1410,  3114 => 1403,  3108 => 1402,  3106 => 1401,  3098 => 1396,  3094 => 1395,  3088 => 1392,  3084 => 1391,  3080 => 1390,  3075 => 1388,  3071 => 1387,  3067 => 1386,  3063 => 1385,  3059 => 1384,  3054 => 1382,  3049 => 1381,  3044 => 1380,  3042 => 1379,  3033 => 1373,  3029 => 1372,  3016 => 1362,  3012 => 1361,  3007 => 1359,  2998 => 1353,  2982 => 1340,  2973 => 1333,  2967 => 1332,  2965 => 1331,  2957 => 1326,  2953 => 1325,  2942 => 1317,  2938 => 1316,  2934 => 1315,  2922 => 1306,  2918 => 1305,  2914 => 1304,  2906 => 1299,  2902 => 1298,  2898 => 1297,  2892 => 1294,  2888 => 1293,  2884 => 1292,  2878 => 1288,  2872 => 1287,  2863 => 1283,  2859 => 1281,  2852 => 1277,  2848 => 1276,  2844 => 1274,  2841 => 1273,  2837 => 1272,  2830 => 1268,  2824 => 1266,  2819 => 1265,  2817 => 1264,  2808 => 1258,  2804 => 1257,  2800 => 1256,  2796 => 1255,  2792 => 1254,  2776 => 1241,  2767 => 1234,  2761 => 1233,  2759 => 1232,  2751 => 1227,  2747 => 1226,  2736 => 1218,  2732 => 1217,  2728 => 1216,  2716 => 1207,  2712 => 1206,  2708 => 1205,  2700 => 1200,  2696 => 1199,  2692 => 1198,  2686 => 1195,  2682 => 1194,  2678 => 1193,  2672 => 1190,  2668 => 1189,  2664 => 1188,  2660 => 1186,  2654 => 1185,  2646 => 1183,  2641 => 1181,  2636 => 1180,  2633 => 1179,  2629 => 1178,  2624 => 1176,  2618 => 1174,  2613 => 1173,  2611 => 1172,  2602 => 1166,  2598 => 1165,  2594 => 1164,  2590 => 1163,  2586 => 1162,  2582 => 1161,  2566 => 1148,  2557 => 1141,  2551 => 1140,  2549 => 1139,  2541 => 1134,  2537 => 1133,  2530 => 1128,  2524 => 1127,  2515 => 1123,  2511 => 1121,  2504 => 1117,  2500 => 1116,  2496 => 1114,  2493 => 1113,  2489 => 1112,  2482 => 1108,  2476 => 1104,  2470 => 1103,  2461 => 1099,  2457 => 1097,  2450 => 1093,  2446 => 1092,  2442 => 1090,  2439 => 1089,  2435 => 1088,  2428 => 1084,  2422 => 1082,  2417 => 1081,  2415 => 1080,  2406 => 1074,  2402 => 1073,  2386 => 1064,  2384 => 1063,  2381 => 1062,  2375 => 1059,  2372 => 1058,  2360 => 1054,  2356 => 1052,  2351 => 1051,  2349 => 1050,  2343 => 1047,  2332 => 1039,  2327 => 1037,  2318 => 1030,  2312 => 1029,  2310 => 1028,  2301 => 1022,  2296 => 1020,  2289 => 1016,  2285 => 1015,  2279 => 1014,  2273 => 1010,  2265 => 1004,  2255 => 996,  2252 => 995,  2244 => 989,  2234 => 981,  2232 => 980,  2223 => 976,  2217 => 973,  2213 => 972,  2207 => 971,  2201 => 967,  2193 => 961,  2183 => 953,  2180 => 952,  2172 => 946,  2162 => 938,  2160 => 937,  2151 => 933,  2145 => 930,  2141 => 929,  2135 => 928,  2129 => 924,  2121 => 918,  2111 => 910,  2108 => 909,  2100 => 903,  2090 => 895,  2088 => 894,  2079 => 890,  2073 => 886,  2066 => 882,  2061 => 880,  2057 => 878,  2050 => 874,  2046 => 873,  2041 => 870,  2039 => 869,  2030 => 865,  2023 => 861,  2019 => 860,  2013 => 859,  2007 => 856,  2001 => 855,  1995 => 851,  1992 => 850,  1986 => 849,  1977 => 845,  1973 => 843,  1966 => 839,  1962 => 838,  1958 => 836,  1956 => 835,  1953 => 834,  1949 => 833,  1946 => 832,  1944 => 831,  1935 => 827,  1929 => 825,  1925 => 824,  1916 => 818,  1912 => 817,  1908 => 816,  1904 => 815,  1900 => 814,  1896 => 813,  1889 => 809,  1886 => 808,  1883 => 807,  1872 => 799,  1867 => 797,  1863 => 796,  1859 => 795,  1850 => 791,  1846 => 789,  1843 => 788,  1832 => 780,  1827 => 778,  1823 => 777,  1819 => 776,  1810 => 772,  1806 => 770,  1803 => 769,  1792 => 761,  1787 => 759,  1783 => 758,  1779 => 757,  1770 => 753,  1766 => 751,  1763 => 750,  1755 => 745,  1751 => 744,  1747 => 743,  1743 => 742,  1735 => 739,  1731 => 737,  1728 => 736,  1721 => 732,  1717 => 731,  1713 => 730,  1709 => 729,  1702 => 727,  1698 => 725,  1695 => 724,  1687 => 719,  1683 => 718,  1679 => 717,  1675 => 716,  1667 => 713,  1663 => 711,  1661 => 710,  1654 => 705,  1647 => 701,  1642 => 699,  1638 => 697,  1631 => 693,  1627 => 692,  1622 => 689,  1620 => 688,  1613 => 684,  1609 => 683,  1602 => 681,  1596 => 678,  1592 => 677,  1588 => 676,  1584 => 675,  1580 => 674,  1576 => 673,  1572 => 672,  1568 => 671,  1562 => 669,  1557 => 668,  1554 => 667,  1552 => 666,  1543 => 660,  1540 => 659,  1534 => 658,  1532 => 657,  1523 => 655,  1517 => 653,  1512 => 652,  1510 => 651,  1495 => 639,  1486 => 632,  1480 => 631,  1478 => 630,  1470 => 625,  1466 => 624,  1461 => 621,  1452 => 619,  1448 => 618,  1442 => 617,  1437 => 615,  1431 => 614,  1428 => 613,  1424 => 612,  1420 => 611,  1416 => 610,  1410 => 607,  1406 => 606,  1402 => 605,  1396 => 603,  1391 => 602,  1389 => 601,  1380 => 595,  1376 => 594,  1365 => 585,  1356 => 583,  1351 => 581,  1346 => 580,  1342 => 579,  1336 => 576,  1328 => 573,  1320 => 567,  1311 => 565,  1306 => 563,  1301 => 562,  1297 => 561,  1291 => 558,  1284 => 556,  1277 => 551,  1268 => 549,  1263 => 547,  1258 => 546,  1254 => 545,  1248 => 542,  1241 => 540,  1234 => 535,  1226 => 533,  1221 => 532,  1217 => 531,  1214 => 530,  1209 => 528,  1205 => 527,  1202 => 526,  1200 => 525,  1197 => 524,  1193 => 523,  1187 => 520,  1181 => 516,  1172 => 514,  1167 => 512,  1162 => 511,  1158 => 510,  1152 => 507,  1145 => 505,  1137 => 500,  1132 => 498,  1128 => 497,  1121 => 495,  1109 => 486,  1105 => 485,  1100 => 483,  1091 => 476,  1084 => 472,  1080 => 471,  1076 => 469,  1069 => 465,  1065 => 464,  1061 => 462,  1059 => 461,  1051 => 456,  1043 => 450,  1037 => 449,  1028 => 445,  1024 => 443,  1017 => 439,  1013 => 438,  1009 => 436,  1006 => 435,  1002 => 434,  994 => 429,  986 => 424,  982 => 423,  977 => 421,  969 => 415,  963 => 414,  954 => 410,  950 => 408,  943 => 404,  939 => 403,  935 => 401,  932 => 400,  928 => 399,  920 => 394,  909 => 386,  905 => 385,  898 => 381,  894 => 380,  887 => 376,  883 => 375,  876 => 371,  865 => 363,  861 => 362,  855 => 359,  846 => 352,  841 => 351,  838 => 350,  833 => 348,  830 => 347,  828 => 346,  825 => 345,  820 => 344,  817 => 343,  812 => 341,  809 => 340,  807 => 339,  802 => 337,  794 => 331,  788 => 330,  779 => 326,  775 => 324,  768 => 320,  764 => 319,  760 => 317,  757 => 316,  753 => 315,  743 => 310,  733 => 302,  726 => 298,  722 => 297,  718 => 295,  711 => 291,  707 => 290,  703 => 288,  701 => 287,  693 => 282,  684 => 276,  680 => 275,  673 => 273,  663 => 266,  659 => 265,  654 => 263,  641 => 255,  636 => 253,  626 => 246,  622 => 245,  617 => 243,  606 => 237,  599 => 235,  588 => 229,  581 => 227,  570 => 221,  563 => 219,  552 => 213,  545 => 211,  534 => 205,  527 => 203,  515 => 196,  508 => 194,  501 => 189,  495 => 188,  493 => 187,  486 => 185,  481 => 183,  475 => 179,  464 => 175,  460 => 174,  456 => 173,  452 => 172,  444 => 169,  440 => 168,  432 => 163,  428 => 162,  424 => 161,  420 => 160,  416 => 159,  408 => 156,  400 => 151,  396 => 150,  392 => 149,  388 => 148,  380 => 145,  372 => 140,  368 => 139,  364 => 138,  360 => 137,  352 => 134,  343 => 128,  339 => 127,  335 => 126,  331 => 125,  323 => 122,  314 => 116,  310 => 115,  306 => 114,  302 => 113,  294 => 110,  290 => 108,  288 => 107,  286 => 106,  284 => 105,  282 => 104,  280 => 103,  278 => 102,  276 => 101,  274 => 100,  272 => 99,  270 => 98,  268 => 97,  266 => 96,  264 => 95,  262 => 94,  260 => 93,  258 => 92,  256 => 91,  254 => 90,  249 => 86,  243 => 85,  235 => 83,  230 => 81,  225 => 80,  222 => 79,  218 => 78,  214 => 77,  206 => 74,  199 => 69,  193 => 67,  191 => 66,  187 => 65,  183 => 64,  179 => 63,  175 => 62,  167 => 59,  160 => 56,  156 => 55,  153 => 54,  143 => 52,  137 => 51,  132 => 50,  128 => 49,  122 => 45,  120 => 44,  118 => 43,  112 => 40,  110 => 39,  108 => 38,  106 => 37,  101 => 35,  97 => 33,  93 => 32,  87 => 29,  81 => 26,  77 => 24,  70 => 20,  67 => 19,  65 => 18,  60 => 15,  49 => 13,  45 => 12,  40 => 10,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-product" data-toggle="tooltip" title="{{ button_save }}"*/
/*                         class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i*/
/*                             class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid"> {% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i*/
/*                         class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-product"*/
/*                       class="form-horizontal">*/
/*                     <ul class="nav nav-tabs">*/
/*                         <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*                         <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*                         {#            <li><a href="#tab-links" data-toggle="tab">{{ tab_links }}</a></li>#}*/
/*                         <li><a href="#tab-attribute" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*                         {#            <li><a href="#tab-option" dtab-recurringata-toggle="tab">{{ tab_option }}</a></li>#}*/
/*                         {#            <li><a href="#tab-recurring" data-toggle="tab">{{ tab_recurring }}</a></li>#}*/
/*                         {#            <li><a href="#tab-discount" data-toggle="tab">{{ tab_discount }}</a></li>#}*/
/*                         {#            <li><a href="#tab-special" data-toggle="tab">{{ tab_special }}</a></li>#}*/
/*                         <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*                         <li><a href="#tab-complection" data-toggle="tab">Комплектация</a></li>*/
/*                         {#            <li><a href="#tab-reward" data-toggle="tab">{{ tab_reward }}</a></li>#}*/
/*                         {#            <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>#}*/
/*                         {#            <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>#}*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane active" id="tab-general">*/
/*                             <ul class="nav nav-tabs" id="language">*/
/*                                 {% for language in languages %}*/
/*                                     <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img*/
/*                                                     src="language/{{ language.code }}/{{ language.code }}.png"*/
/*                                                     title="{{ language.name }}"/> {{ language.name }}</a></li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                             <div class="tab-content">{% for language in languages %}*/
/*                                     <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                                         <div class="form-group required">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="product_description[{{ language.language_id }}][name]"*/
/*                                                        value="{{ product_description[language.language_id] ? product_description[language.language_id].name }}"*/
/*                                                        placeholder="{{ entry_name }}"*/
/*                                                        id="input-name{{ language.language_id }}" class="form-control"/>*/
/*                                                 {% if error_name[language.language_id] %}*/
/*                                                     <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label" for="select-main_category_id"><span*/
/*                                                         data-toggle="tooltip"*/
/*                                                         title="{{ help_main_category }}">{{ entry_main_category }}</span></label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <select name="main_category_id" class="form-control">*/
/*                                                     <option value="0" selected="selected">{{ text_none }}</option>*/
/*                                                     {% for category in categories %}*/
/*                                                         {% if category.category_id == main_category_id %}*/
/*                                                             <option value="{{ category.category_id }}"*/
/*                                                                     selected="selected">{{ category.name }}</option>*/
/*                                                         {% else %}*/
/*                                                             <option value="{{ category.category_id }}">{{ category.name }}</option>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         {#                                        <div class="form-group">#}*/
/*                                         {#                                            <label class="col-sm-2 control-label" for="input-category"><span#}*/
/*                                         {#                                                        data-toggle="tooltip"#}*/
/*                                         {#                                                        title="{{ help_category }}">{{ entry_category }}</span></label>#}*/
/*                                         {#                                            <div class="col-sm-10">#}*/
/*                                         {#                                                <input type="text" name="category" value=""#}*/
/*                                         {#                                                       placeholder="{{ entry_category }}" id="input-category"#}*/
/*                                         {#                                                       class="form-control"/>#}*/
/*                                         {#                                                <div id="product-category" class="well well-sm"#}*/
/*                                         {#                                                     style="height: 150px; overflow: auto;">#}*/
/*                                         {#                                                    {% for product_category in product_categories %}#}*/
/*                                         {#                                                        <div id="product-category{{ product_category.category_id }}"><i#}*/
/*                                         {#                                                                    class="fa fa-minus-circle"></i> {{ product_category.name }}#}*/
/*                                         {#                                                            <input type="hidden" name="product_category[]"#}*/
/*                                         {#                                                                   value="{{ product_category.category_id }}"/>#}*/
/*                                         {#                                                        </div>#}*/
/*                                         {#                                                    {% endfor %}</div>#}*/
/*                                         {#                                            </div>#}*/
/*                                         {#                                        </div>#}*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-h1{{ language.language_id }}">{{ entry_meta_h1 }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="product_description[{{ language.language_id }}][meta_h1]"*/
/*                                                        value="{{ product_description[language.language_id] ? product_description[language.language_id].meta_h1 }}"*/
/*                                                        placeholder="{{ entry_meta_h1 }}"*/
/*                                                        id="input-meta-h1{{ language.language_id }}"*/
/*                                                        class="form-control"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="product_description[{{ language.language_id }}][meta_title]"*/
/*                                                        value="{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}"*/
/*                                                        placeholder="{{ entry_meta_title }}"*/
/*                                                        id="input-meta-title{{ language.language_id }}"*/
/*                                                        class="form-control"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea*/
/*                                                         name="product_description[{{ language.language_id }}][meta_description]"*/
/*                                                         rows="5" placeholder="{{ entry_meta_description }}"*/
/*                                                         id="input-meta-description{{ language.language_id }}"*/
/*                                                         class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea*/
/*                                                         name="product_description[{{ language.language_id }}][meta_keyword]"*/
/*                                                         rows="5" placeholder="{{ entry_meta_keyword }}"*/
/*                                                         id="input-meta-keyword{{ language.language_id }}"*/
/*                                                         class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <textarea*/
/*                                                         name="product_description[{{ language.language_id }}][description]"*/
/*                                                         placeholder="{{ entry_description }}"*/
/*                                                         id="input-description{{ language.language_id }}"*/
/*                                                         data-toggle="summernote" data-lang="{{ summernote }}"*/
/*                                                         class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label"*/
/*                                                    for="input-tag{{ language.language_id }}"><span data-toggle="tooltip"*/
/*                                                                                                    title="{{ help_tag }}">{{ entry_tag }}</span></label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input type="text"*/
/*                                                        name="product_description[{{ language.language_id }}][tag]"*/
/*                                                        value="{{ product_description[language.language_id] ? product_description[language.language_id].tag }}"*/
/*                                                        placeholder="{{ entry_tag }}"*/
/*                                                        id="input-tag{{ language.language_id }}" class="form-control"/>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}</div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-data">*/
/*                             <div class="form-group required">*/
/*                                 <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}"*/
/*                                            id="input-model" class="form-control"/>*/
/*                                     {% if error_model %}*/
/*                                         <div class="text-danger">{{ error_model }}</div>*/
/*                                     {% endif %}</div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-sku"><span data-toggle="tooltip"*/
/*                                                                                             title="{{ help_sku }}">{{ entry_sku }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="sku" value="{{ sku }}" placeholder="{{ entry_sku }}"*/
/*                                            id="input-sku" class="form-control"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div style="display: none;">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-upc"><span data-toggle="tooltip"*/
/*                                                                                                 title="{{ help_upc }}">{{ entry_upc }}</span></label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="upc" value="{{ upc }}" placeholder="{{ entry_upc }}"*/
/*                                                id="input-upc" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-ean"><span data-toggle="tooltip"*/
/*                                                                                                 title="{{ help_ean }}">{{ entry_ean }}</span></label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="ean" value="{{ ean }}" placeholder="{{ entry_ean }}"*/
/*                                                id="input-ean" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-jan"><span data-toggle="tooltip"*/
/*                                                                                                 title="{{ help_jan }}">{{ entry_jan }}</span></label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="jan" value="{{ jan }}" placeholder="{{ entry_jan }}"*/
/*                                                id="input-jan" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-isbn"><span data-toggle="tooltip"*/
/*                                                                                                  title="{{ help_isbn }}">{{ entry_isbn }}</span></label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="isbn" value="{{ isbn }}" placeholder="{{ entry_isbn }}"*/
/*                                                id="input-isbn" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-mpn"><span data-toggle="tooltip"*/
/*                                                                                                 title="{{ help_mpn }}">{{ entry_mpn }}</span></label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="mpn" value="{{ mpn }}" placeholder="{{ entry_mpn }}"*/
/*                                                id="input-mpn" class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label"*/
/*                                            for="input-location">{{ entry_location }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="location" value="{{ location }}"*/
/*                                                placeholder="{{ entry_location }}" id="input-location"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-price">{{ entry_price }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="price" value="{{ price }}" placeholder="{{ entry_price }}"*/
/*                                            id="input-price" class="form-control"/>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div style="display: none;">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label"*/
/*                                            for="input-quantity">{{ entry_quantity }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="quantity" value="{{ quantity }}"*/
/*                                                placeholder="{{ entry_quantity }}" id="input-quantity"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-minimum"><span*/
/*                                                 data-toggle="tooltip"*/
/*                                                 title="{{ help_minimum }}">{{ entry_minimum }}</span></label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="minimum" value="{{ minimum }}"*/
/*                                                placeholder="{{ entry_minimum }}" id="input-minimum"*/
/*                                                class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label"*/
/*                                            for="input-subtract">{{ entry_subtract }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <select name="subtract" id="input-subtract" class="form-control">*/
/* */
/* */
/*                                             {% if subtract %}*/
/* */
/* */
/*                                                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                                 <option value="0">{{ text_no }}</option>*/
/* */
/* */
/*                                             {% else %}*/
/* */
/* */
/*                                                 <option value="1">{{ text_yes }}</option>*/
/*                                                 <option value="0" selected="selected">{{ text_no }}</option>*/
/* */
/* */
/*                                             {% endif %}*/
/* */
/* */
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-stock-status"><span*/
/*                                                 data-toggle="tooltip"*/
/*                                                 title="{{ help_stock_status }}">{{ entry_stock_status }}</span></label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <select name="stock_status_id" id="input-stock-status" class="form-control">*/
/* */
/* */
/*                                             {% for stock_status in stock_statuses %}*/
/*                                                 {% if stock_status.stock_status_id == stock_status_id %}*/
/* */
/* */
/*                                                     <option value="{{ stock_status.stock_status_id }}"*/
/*                                                             selected="selected">{{ stock_status.name }}</option>*/
/* */
/* */
/*                                                 {% else %}*/
/* */
/* */
/*                                                     <option value="{{ stock_status.stock_status_id }}">{{ stock_status.name }}</option>*/
/* */
/* */
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/* */
/* */
/*                                         </select>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label">{{ entry_shipping }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <label class="radio-inline"> {% if shipping %}*/
/*                                                 <input type="radio" name="shipping" value="1" checked="checked"/>*/
/*                                                 {{ text_yes }}*/
/*                                             {% else %}*/
/*                                                 <input type="radio" name="shipping" value="1"/>*/
/*                                                 {{ text_yes }}*/
/*                                             {% endif %} </label>*/
/*                                         <label class="radio-inline"> {% if not shipping %}*/
/*                                                 <input type="radio" name="shipping" value="0" checked="checked"/>*/
/*                                                 {{ text_no }}*/
/*                                             {% else %}*/
/*                                                 <input type="radio" name="shipping" value="0"/>*/
/*                                                 {{ text_no }}*/
/*                                             {% endif %} </label>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label"*/
/*                                        for="input-date-available">{{ entry_date_available }}</label>*/
/*                                 <div class="col-sm-3">*/
/*                                     <div class="input-group date">*/
/*                                         <input type="text" name="date_available" value="{{ date_available }}"*/
/*                                                placeholder="{{ entry_date_available }}" data-date-format="YYYY-MM-DD"*/
/*                                                id="input-date-available" class="form-control"/>*/
/*                                         <span class="input-group-btn">*/
/*                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-length">{{ entry_dimension }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <div class="row">*/
/*                                         <div class="col-sm-4">*/
/*                                             <input type="text" name="length" value="{{ length }}"*/
/*                                                    placeholder="{{ entry_length }}" id="input-length"*/
/*                                                    class="form-control"/>*/
/*                                         </div>*/
/*                                         <div class="col-sm-4">*/
/*                                             <input type="text" name="width" value="{{ width }}"*/
/*                                                    placeholder="{{ entry_width }}" id="input-width"*/
/*                                                    class="form-control"/>*/
/*                                         </div>*/
/*                                         <div class="col-sm-4">*/
/*                                             <input type="text" name="height" value="{{ height }}"*/
/*                                                    placeholder="{{ entry_height }}" id="input-height"*/
/*                                                    class="form-control"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label"*/
/*                                        for="input-length-class">{{ entry_length_class }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="length_class_id" id="input-length-class" class="form-control">*/
/* */
/* */
/*                                         {% for length_class in length_classes %}*/
/*                                             {% if length_class.length_class_id == length_class_id %}*/
/* */
/* */
/*                                                 <option value="{{ length_class.length_class_id }}"*/
/*                                                         selected="selected">{{ length_class.title }}</option>*/
/* */
/* */
/*                                             {% else %}*/
/* */
/* */
/*                                                 <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/* */
/* */
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/* */
/* */
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-weight">{{ entry_weight }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="weight" value="{{ weight }}"*/
/*                                            placeholder="{{ entry_weight }}" id="input-weight" class="form-control"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label"*/
/*                                        for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="weight_class_id" id="input-weight-class" class="form-control">*/
/* */
/* */
/*                                         {% for weight_class in weight_classes %}*/
/*                                             {% if weight_class.weight_class_id == weight_class_id %}*/
/* */
/* */
/*                                                 <option value="{{ weight_class.weight_class_id }}"*/
/*                                                         selected="selected">{{ weight_class.title }}</option>*/
/* */
/* */
/*                                             {% else %}*/
/* */
/* */
/*                                                 <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/* */
/* */
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/* */
/* */
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="status" id="input-status" class="form-control">*/
/* */
/* */
/*                                         {% if status %}*/
/* */
/* */
/*                                             <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                             <option value="0">{{ text_disabled }}</option>*/
/* */
/* */
/*                                         {% else %}*/
/* */
/* */
/*                                             <option value="1">{{ text_enabled }}</option>*/
/*                                             <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* */
/* */
/*                                         {% endif %}*/
/* */
/* */
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label"*/
/*                                        for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="sort_order" value="{{ sort_order }}"*/
/*                                            placeholder="{{ entry_sort_order }}" id="input-sort-order"*/
/*                                            class="form-control"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-links">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-manufacturer"><span*/
/*                                             data-toggle="tooltip"*/
/*                                             title="{{ help_manufacturer }}">{{ entry_manufacturer }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="manufacturer" value="{{ manufacturer }}"*/
/*                                            placeholder="{{ entry_manufacturer }}" id="input-manufacturer"*/
/*                                            class="form-control"/>*/
/*                                     <input type="hidden" name="manufacturer_id" value="{{ manufacturer_id }}"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip"*/
/*                                                                                                title="{{ help_filter }}">{{ entry_filter }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="filter" value="" placeholder="{{ entry_filter }}"*/
/*                                            id="input-filter" class="form-control"/>*/
/*                                     <div id="product-filter" class="well well-sm"*/
/*                                          style="height: 150px; overflow: auto;"> {% for product_filter in product_filters %}*/
/*                                             <div id="product-filter{{ product_filter.filter_id }}"><i*/
/*                                                         class="fa fa-minus-circle"></i> {{ product_filter.name }}*/
/*                                                 <input type="hidden" name="product_filter[]"*/
/*                                                        value="{{ product_filter.filter_id }}"/>*/
/*                                             </div>*/
/*                                         {% endfor %}</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <div class="well well-sm"*/
/*                                          style="height: 150px; overflow: auto;"> {% for store in stores %}*/
/*                                             <div class="checkbox">*/
/*                                                 <label> {% if store.store_id in product_store %}*/
/*                                                         <input type="checkbox" name="product_store[]"*/
/*                                                                value="{{ store.store_id }}" checked="checked"/>*/
/*                                                         {{ store.name }}*/
/*                                                     {% else %}*/
/*                                                         <input type="checkbox" name="product_store[]"*/
/*                                                                value="{{ store.store_id }}"/>*/
/*                                                         {{ store.name }}*/
/*                                                     {% endif %} </label>*/
/*                                             </div>*/
/*                                         {% endfor %}</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-download"><span data-toggle="tooltip"*/
/*                                                                                                  title="{{ help_download }}">{{ entry_download }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="download" value="" placeholder="{{ entry_download }}"*/
/*                                            id="input-download" class="form-control"/>*/
/*                                     <div id="product-download" class="well well-sm"*/
/*                                          style="height: 150px; overflow: auto;"> {% for product_download in product_downloads %}*/
/*                                             <div id="product-download{{ product_download.download_id }}"><i*/
/*                                                         class="fa fa-minus-circle"></i> {{ product_download.name }}*/
/*                                                 <input type="hidden" name="product_download[]"*/
/*                                                        value="{{ product_download.download_id }}"/>*/
/*                                             </div>*/
/*                                         {% endfor %}</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-related"><span data-toggle="tooltip"*/
/*                                                                                                 title="{{ help_related }}">{{ entry_related }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="related" value="" placeholder="{{ entry_related }}"*/
/*                                            id="input-related" class="form-control"/>*/
/*                                     <div id="product-related" class="well well-sm"*/
/*                                          style="height: 150px; overflow: auto;"> {% for product_related in product_relateds %}*/
/*                                             <div id="product-related{{ product_related.product_id }}"><i*/
/*                                                         class="fa fa-minus-circle"></i> {{ product_related.name }}*/
/*                                                 <input type="hidden" name="product_related[]"*/
/*                                                        value="{{ product_related.product_id }}"/>*/
/*                                             </div>*/
/*                                         {% endfor %}</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-related-article"><span*/
/*                                             data-toggle="tooltip"*/
/*                                             title="{{ help_related }}">{{ entry_related_article }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="product_related_article_input" value=""*/
/*                                            placeholder="{{ entry_related_article }}" id="input-related-article"*/
/*                                            class="form-control"/>*/
/*                                     <div id="article-related" class="well well-sm"*/
/*                                          style="height: 150px; overflow: auto;"> {% for product_related_article in product_related_article %}*/
/*                                             <div id="article-related{{ product_related_article.article_id }}"><i*/
/*                                                         class="fa fa-minus-circle"></i> {{ product_related_article.name }}*/
/*                                                 <input type="hidden" name="product_related_article[]"*/
/*                                                        value="{{ product_related_article.article_id }}"/>*/
/*                                             </div>*/
/*                                         {% endfor %}</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-attribute">*/
/*                             <div class="table-responsive">*/
/*                                 <table id="attribute" class="table table-striped table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_attribute }}</td>*/
/*                                         <td class="text-left">{{ entry_text }}</td>*/
/*                                         <td></td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* */
/*                                     {% set attribute_row = 0 %}*/
/*                                     {% for product_attribute in product_attributes %}*/
/*                                         <tr id="attribute-row{{ attribute_row }}">*/
/*                                             <td class="text-left" style="width: 40%;"><input type="text"*/
/*                                                                                              name="product_attribute[{{ attribute_row }}][name]"*/
/*                                                                                              value="{{ product_attribute.name }}"*/
/*                                                                                              placeholder="{{ entry_attribute }}"*/
/*                                                                                              class="form-control"/>*/
/*                                                 <input type="hidden"*/
/*                                                        name="product_attribute[{{ attribute_row }}][attribute_id]"*/
/*                                                        value="{{ product_attribute.attribute_id }}"/></td>*/
/*                                             <td class="text-left">{% for language in languages %}*/
/*                                                     <div class="input-group"><span class="input-group-addon"><img*/
/*                                                                     src="language/{{ language.code }}/{{ language.code }}.png"*/
/*                                                                     title="{{ language.name }}"/></span>*/
/*                                                         <textarea*/
/*                                                                 name="product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]"*/
/*                                                                 rows="5" placeholder="{{ entry_text }}"*/
/*                                                                 class="form-control">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>*/
/*                                                     </div>*/
/*                                                 {% endfor %}</td>*/
/*                                             <td class="text-right">*/
/*                                                 <button type="button"*/
/*                                                         onclick="$('#attribute-row{{ attribute_row }}').remove();"*/
/*                                                         data-toggle="tooltip" title="{{ button_remove }}"*/
/*                                                         class="btn btn-danger"><i class="fa fa-minus-circle"></i>*/
/*                                                 </button>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         {% set attribute_row = attribute_row + 1 %}*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/* */
/*                                     <tfoot>*/
/*                                     <tr>*/
/*                                         <td colspan="2"></td>*/
/*                                         <td class="text-right">*/
/*                                             <button type="button" onclick="addAttribute();" data-toggle="tooltip"*/
/*                                                     title="{{ button_attribute_add }}" class="btn btn-primary"><i*/
/*                                                         class="fa fa-plus-circle"></i></button>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     </tfoot>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-option">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-2">*/
/*                                     <ul class="nav nav-pills nav-stacked" id="option">*/
/*                                         {% set option_row = 0 %}*/
/*                                         {% for product_option in product_options %}*/
/*                                             <li><a href="#tab-option{{ option_row }}" data-toggle="tab"><i*/
/*                                                             class="fa fa-minus-circle"*/
/*                                                             onclick="$('a[href=\'#tab-option{{ option_row }}\']').parent().remove(); $('#tab-option{{ option_row }}').remove(); $('#option a:first').tab('show');"></i> {{ product_option.name }}*/
/*                                                 </a></li>*/
/*                                             {% set option_row = option_row + 1 %}*/
/*                                         {% endfor %}*/
/*                                         <li>*/
/*                                             <input type="text" name="option" value="" placeholder="{{ entry_option }}"*/
/*                                                    id="input-option" class="form-control"/>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="col-sm-10">*/
/*                                     <div class="tab-content"> {% set option_row = 0 %}*/
/*                                         {% set option_value_row = 0 %}*/
/*                                         {% for product_option in product_options %}*/
/*                                             <div class="tab-pane" id="tab-option{{ option_row }}">*/
/*                                                 <input type="hidden"*/
/*                                                        name="product_option[{{ option_row }}][product_option_id]"*/
/*                                                        value="{{ product_option.product_option_id }}"/>*/
/*                                                 <input type="hidden" name="product_option[{{ option_row }}][name]"*/
/*                                                        value="{{ product_option.name }}"/>*/
/*                                                 <input type="hidden" name="product_option[{{ option_row }}][option_id]"*/
/*                                                        value="{{ product_option.option_id }}"/>*/
/*                                                 <input type="hidden" name="product_option[{{ option_row }}][type]"*/
/*                                                        value="{{ product_option.type }}"/>*/
/*                                                 <div class="form-group">*/
/*                                                     <label class="col-sm-2 control-label"*/
/*                                                            for="input-required{{ option_row }}">{{ entry_required }}</label>*/
/*                                                     <div class="col-sm-10">*/
/*                                                         <select name="product_option[{{ option_row }}][required]"*/
/*                                                                 id="input-required{{ option_row }}"*/
/*                                                                 class="form-control">*/
/* */
/* */
/*                                                             {% if product_option.required %}*/
/* */
/* */
/*                                                                 <option value="1"*/
/*                                                                         selected="selected">{{ text_yes }}</option>*/
/*                                                                 <option value="0">{{ text_no }}</option>*/
/* */
/* */
/*                                                             {% else %}*/
/* */
/* */
/*                                                                 <option value="1">{{ text_yes }}</option>*/
/*                                                                 <option value="0"*/
/*                                                                         selected="selected">{{ text_no }}</option>*/
/* */
/* */
/*                                                             {% endif %}*/
/* */
/* */
/*                                                         </select>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 {% if product_option.type == 'text' %}*/
/*                                                     <div class="form-group">*/
/*                                                         <label class="col-sm-2 control-label"*/
/*                                                                for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                                                         <div class="col-sm-10">*/
/*                                                             <input type="text"*/
/*                                                                    name="product_option[{{ option_row }}][value]"*/
/*                                                                    value="{{ product_option.value }}"*/
/*                                                                    placeholder="{{ entry_option_value }}"*/
/*                                                                    id="input-value{{ option_row }}"*/
/*                                                                    class="form-control"/>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if product_option.type == 'textarea' %}*/
/*                                                     <div class="form-group">*/
/*                                                         <label class="col-sm-2 control-label"*/
/*                                                                for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                                                         <div class="col-sm-10">*/
/*                                                             <textarea name="product_option[{{ option_row }}][value]"*/
/*                                                                       rows="5" placeholder="{{ entry_option_value }}"*/
/*                                                                       id="input-value{{ option_row }}"*/
/*                                                                       class="form-control">{{ product_option.value }}</textarea>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if product_option.type == 'file' %}*/
/*                                                     <div class="form-group" style="display: none;">*/
/*                                                         <label class="col-sm-2 control-label"*/
/*                                                                for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                                                         <div class="col-sm-10">*/
/*                                                             <input type="text"*/
/*                                                                    name="product_option[{{ option_row }}][value]"*/
/*                                                                    value="{{ product_option.value }}"*/
/*                                                                    placeholder="{{ entry_option_value }}"*/
/*                                                                    id="input-value{{ option_row }}"*/
/*                                                                    class="form-control"/>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if product_option.type == 'date' %}*/
/*                                                     <div class="form-group">*/
/*                                                         <label class="col-sm-2 control-label"*/
/*                                                                for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                                                         <div class="col-sm-3">*/
/*                                                             <div class="input-group date">*/
/*                                                                 <input type="text"*/
/*                                                                        name="product_option[{{ option_row }}][value]"*/
/*                                                                        value="{{ product_option.value }}"*/
/*                                                                        placeholder="{{ entry_option_value }}"*/
/*                                                                        data-date-format="YYYY-MM-DD"*/
/*                                                                        id="input-value{{ option_row }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if product_option.type == 'time' %}*/
/*                                                     <div class="form-group">*/
/*                                                         <label class="col-sm-2 control-label"*/
/*                                                                for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                                                         <div class="col-sm-10">*/
/*                                                             <div class="input-group time">*/
/*                                                                 <input type="text"*/
/*                                                                        name="product_option[{{ option_row }}][value]"*/
/*                                                                        value="{{ product_option.value }}"*/
/*                                                                        placeholder="{{ entry_option_value }}"*/
/*                                                                        data-date-format="HH:mm"*/
/*                                                                        id="input-value{{ option_row }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if product_option.type == 'datetime' %}*/
/*                                                     <div class="form-group">*/
/*                                                         <label class="col-sm-2 control-label"*/
/*                                                                for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                                                         <div class="col-sm-10">*/
/*                                                             <div class="input-group datetime">*/
/*                                                                 <input type="text"*/
/*                                                                        name="product_option[{{ option_row }}][value]"*/
/*                                                                        value="{{ product_option.value }}"*/
/*                                                                        placeholder="{{ entry_option_value }}"*/
/*                                                                        data-date-format="YYYY-MM-DD HH:mm"*/
/*                                                                        id="input-value{{ option_row }}"*/
/*                                                                        class="form-control"/>*/
/*                                                                 <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                                 {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}*/
/*                                                     <div class="table-responsive">*/
/*                                                         <table id="option-value{{ option_row }}"*/
/*                                                                class="table table-striped table-bordered table-hover">*/
/*                                                             <thead>*/
/*                                                             <tr>*/
/*                                                                 <td class="text-left">{{ entry_option_value }}</td>*/
/*                                                                 <td class="text-right">{{ entry_quantity }}</td>*/
/*                                                                 <td class="text-left">{{ entry_subtract }}</td>*/
/*                                                                 <td class="text-right">{{ entry_price }}</td>*/
/*                                                                 <td class="text-right">{{ entry_option_points }}</td>*/
/*                                                                 <td class="text-right">{{ entry_weight }}</td>*/
/*                                                                 <td></td>*/
/*                                                             </tr>*/
/*                                                             </thead>*/
/*                                                             <tbody>*/
/* */
/*                                                             {% for product_option_value in product_option.product_option_value %}*/
/*                                                                 <tr id="option-value-row{{ option_value_row }}">*/
/*                                                                     <td class="text-left"><select*/
/*                                                                                 name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]"*/
/*                                                                                 class="form-control">*/
/* */
/* */
/*                                                                             {% if option_values[product_option.option_id] %}*/
/* */
/*                                                                                 {% for option_value in option_values[product_option.option_id] %}*/
/* */
/*                                                                                     {% if option_value.option_value_id == product_option_value.option_value_id %}*/
/* */
/* */
/*                                                                                         <option value="{{ option_value.option_value_id }}"*/
/*                                                                                                 selected="selected">{{ option_value.name }}</option>*/
/* */
/* */
/*                                                                                     {% else %}*/
/* */
/* */
/*                                                                                         <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/* */
/* */
/*                                                                                     {% endif %}*/
/*                                                                                 {% endfor %}*/
/*                                                                             {% endif %}*/
/* */
/* */
/*                                                                         </select>*/
/*                                                                         <input type="hidden"*/
/*                                                                                name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]"*/
/*                                                                                value="{{ product_option_value.product_option_value_id }}"/>*/
/*                                                                     </td>*/
/*                                                                     <td class="text-right"><input type="text"*/
/*                                                                                                   name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]"*/
/*                                                                                                   value="{{ product_option_value.quantity }}"*/
/*                                                                                                   placeholder="{{ entry_quantity }}"*/
/*                                                                                                   class="form-control"/>*/
/*                                                                     </td>*/
/*                                                                     <td class="text-left"><select*/
/*                                                                                 name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]"*/
/*                                                                                 class="form-control">*/
/* */
/* */
/*                                                                             {% if product_option_value.subtract %}*/
/* */
/* */
/*                                                                                 <option value="1"*/
/*                                                                                         selected="selected">{{ text_yes }}</option>*/
/*                                                                                 <option value="0">{{ text_no }}</option>*/
/* */
/* */
/*                                                                             {% else %}*/
/* */
/* */
/*                                                                                 <option value="1">{{ text_yes }}</option>*/
/*                                                                                 <option value="0"*/
/*                                                                                         selected="selected">{{ text_no }}</option>*/
/* */
/* */
/*                                                                             {% endif %}*/
/* */
/* */
/*                                                                         </select></td>*/
/*                                                                     <td class="text-right"><select*/
/*                                                                                 name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]"*/
/*                                                                                 class="form-control">*/
/* */
/* */
/*                                                                             {% if product_option_value.price_prefix == '+' %}*/
/* */
/* */
/*                                                                                 <option value="+" selected="selected">*/
/*                                                                                     +*/
/*                                                                                 </option>*/
/* */
/* */
/*                                                                             {% else %}*/
/* */
/* */
/*                                                                                 <option value="+">+</option>*/
/* */
/* */
/*                                                                             {% endif %}*/
/*                                                                             {% if product_option_value.price_prefix == '-' %}*/
/* */
/* */
/*                                                                                 <option value="-" selected="selected">*/
/*                                                                                     -*/
/*                                                                                 </option>*/
/* */
/* */
/*                                                                             {% else %}*/
/* */
/* */
/*                                                                                 <option value="-">-</option>*/
/* */
/* */
/*                                                                             {% endif %}*/
/* */
/* */
/*                                                                         </select>*/
/*                                                                         <input type="text"*/
/*                                                                                name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]"*/
/*                                                                                value="{{ product_option_value.price }}"*/
/*                                                                                placeholder="{{ entry_price }}"*/
/*                                                                                class="form-control"/></td>*/
/*                                                                     <td class="text-right"><select*/
/*                                                                                 name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]"*/
/*                                                                                 class="form-control">*/
/* */
/* */
/*                                                                             {% if product_option_value.points_prefix == '+' %}*/
/* */
/* */
/*                                                                                 <option value="+" selected="selected">*/
/*                                                                                     +*/
/*                                                                                 </option>*/
/* */
/* */
/*                                                                             {% else %}*/
/* */
/* */
/*                                                                                 <option value="+">+</option>*/
/* */
/* */
/*                                                                             {% endif %}*/
/*                                                                             {% if product_option_value.points_prefix == '-' %}*/
/* */
/* */
/*                                                                                 <option value="-" selected="selected">*/
/*                                                                                     -*/
/*                                                                                 </option>*/
/* */
/* */
/*                                                                             {% else %}*/
/* */
/* */
/*                                                                                 <option value="-">-</option>*/
/* */
/* */
/*                                                                             {% endif %}*/
/* */
/* */
/*                                                                         </select>*/
/*                                                                         <input type="text"*/
/*                                                                                name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]"*/
/*                                                                                value="{{ product_option_value.points }}"*/
/*                                                                                placeholder="{{ entry_points }}"*/
/*                                                                                class="form-control"/></td>*/
/*                                                                     <td class="text-right"><select*/
/*                                                                                 name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]"*/
/*                                                                                 class="form-control">*/
/* */
/* */
/*                                                                             {% if product_option_value.weight_prefix == '+' %}*/
/* */
/* */
/*                                                                                 <option value="+" selected="selected">*/
/*                                                                                     +*/
/*                                                                                 </option>*/
/* */
/* */
/*                                                                             {% else %}*/
/* */
/* */
/*                                                                                 <option value="+">+</option>*/
/* */
/* */
/*                                                                             {% endif %}*/
/*                                                                             {% if product_option_value.weight_prefix == '-' %}*/
/* */
/* */
/*                                                                                 <option value="-" selected="selected">*/
/*                                                                                     -*/
/*                                                                                 </option>*/
/* */
/* */
/*                                                                             {% else %}*/
/* */
/* */
/*                                                                                 <option value="-">-</option>*/
/* */
/* */
/*                                                                             {% endif %}*/
/* */
/* */
/*                                                                         </select>*/
/*                                                                         <input type="text"*/
/*                                                                                name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]"*/
/*                                                                                value="{{ product_option_value.weight }}"*/
/*                                                                                placeholder="{{ entry_weight }}"*/
/*                                                                                class="form-control"/></td>*/
/*                                                                     <td class="text-right">*/
/*                                                                         <button type="button"*/
/*                                                                                 onclick="$(this).tooltip('destroy');$('#option-value-row{{ option_value_row }}').remove();"*/
/*                                                                                 data-toggle="tooltip"*/
/*                                                                                 title="{{ button_remove }}"*/
/*                                                                                 class="btn btn-danger"><i*/
/*                                                                                     class="fa fa-minus-circle"></i>*/
/*                                                                         </button>*/
/*                                                                     </td>*/
/*                                                                 </tr>*/
/*                                                                 {% set option_value_row = option_value_row + 1 %}*/
/*                                                             {% endfor %}*/
/*                                                             </tbody>*/
/* */
/*                                                             <tfoot>*/
/*                                                             <tr>*/
/*                                                                 <td colspan="6"></td>*/
/*                                                                 <td class="text-left">*/
/*                                                                     <button type="button"*/
/*                                                                             onclick="addOptionValue('{{ option_row }}');"*/
/*                                                                             data-toggle="tooltip"*/
/*                                                                             title="{{ button_option_value_add }}"*/
/*                                                                             class="btn btn-primary"><i*/
/*                                                                                 class="fa fa-plus-circle"></i></button>*/
/*                                                                 </td>*/
/*                                                             </tr>*/
/*                                                             </tfoot>*/
/*                                                         </table>*/
/*                                                     </div>*/
/*                                                     <select id="option-values{{ option_row }}" style="display: none;">*/
/* */
/* */
/*                                                         {% if option_values[product_option.option_id] %}*/
/*                                                             {% for option_value in option_values[product_option.option_id] %}*/
/* */
/* */
/*                                                                 <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/* */
/* */
/*                                                             {% endfor %}*/
/*                                                         {% endif %}*/
/* */
/* */
/*                                                     </select>*/
/*                                                 {% endif %} </div>*/
/*                                             {% set option_row = option_row + 1 %}*/
/*                                         {% endfor %} </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-recurring">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-striped table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_recurring }}</td>*/
/*                                         <td class="text-left">{{ entry_customer_group }}</td>*/
/*                                         <td class="text-left"></td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* */
/*                                     {% set recurring_row = 0 %}*/
/*                                     {% for product_recurring in product_recurrings %}*/
/*                                         <tr id="recurring-row{{ recurring_row }}">*/
/*                                             <td class="text-left"><select*/
/*                                                         name="product_recurring[{{ recurring_row }}][recurring_id]"*/
/*                                                         class="form-control">*/
/* */
/* */
/*                                                     {% for recurring in recurrings %}*/
/*                                                         {% if recurring.recurring_id == product_recurring.recurring_id %}*/
/* */
/* */
/*                                                             <option value="{{ recurring.recurring_id }}"*/
/*                                                                     selected="selected">{{ recurring.name }}</option>*/
/* */
/* */
/*                                                         {% else %}*/
/* */
/* */
/*                                                             <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/* */
/* */
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/* */
/* */
/*                                                 </select></td>*/
/*                                             <td class="text-left"><select*/
/*                                                         name="product_recurring[{{ recurring_row }}][customer_group_id]"*/
/*                                                         class="form-control">*/
/* */
/* */
/*                                                     {% for customer_group in customer_groups %}*/
/*                                                         {% if customer_group.customer_group_id == product_recurring.customer_group_id %}*/
/* */
/* */
/*                                                             <option value="{{ customer_group.customer_group_id }}"*/
/*                                                                     selected="selected">{{ customer_group.name }}</option>*/
/* */
/* */
/*                                                         {% else %}*/
/* */
/* */
/*                                                             <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/* */
/* */
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/* */
/* */
/*                                                 </select></td>*/
/*                                             <td class="text-left">*/
/*                                                 <button type="button"*/
/*                                                         onclick="$('#recurring-row{{ recurring_row }}').remove()"*/
/*                                                         data-toggle="tooltip" title="{{ button_remove }}"*/
/*                                                         class="btn btn-danger"><i class="fa fa-minus-circle"></i>*/
/*                                                 </button>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         {% set recurring_row = recurring_row + 1 %}*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/* */
/*                                     <tfoot>*/
/*                                     <tr>*/
/*                                         <td colspan="2"></td>*/
/*                                         <td class="text-left">*/
/*                                             <button type="button" onclick="addRecurring()" data-toggle="tooltip"*/
/*                                                     title="{{ button_recurring_add }}" class="btn btn-primary"><i*/
/*                                                         class="fa fa-plus-circle"></i></button>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     </tfoot>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-discount">*/
/*                             <div class="table-responsive">*/
/*                                 <table id="discount" class="table table-striped table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_customer_group }}</td>*/
/*                                         <td class="text-right">{{ entry_quantity }}</td>*/
/*                                         <td class="text-right">{{ entry_priority }}</td>*/
/*                                         <td class="text-right">{{ entry_price }}</td>*/
/*                                         <td class="text-left">{{ entry_date_start }}</td>*/
/*                                         <td class="text-left">{{ entry_date_end }}</td>*/
/*                                         <td></td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* */
/*                                     {% set discount_row = 0 %}*/
/*                                     {% for product_discount in product_discounts %}*/
/*                                         <tr id="discount-row{{ discount_row }}">*/
/*                                             <td class="text-left"><select*/
/*                                                         name="product_discount[{{ discount_row }}][customer_group_id]"*/
/*                                                         class="form-control">*/
/*                                                     {% for customer_group in customer_groups %}*/
/*                                                         {% if customer_group.customer_group_id == product_discount.customer_group_id %}*/
/*                                                             <option value="{{ customer_group.customer_group_id }}"*/
/*                                                                     selected="selected">{{ customer_group.name }}</option>*/
/*                                                         {% else %}*/
/*                                                             <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/*                                                 </select></td>*/
/*                                             <td class="text-right"><input type="text"*/
/*                                                                           name="product_discount[{{ discount_row }}][quantity]"*/
/*                                                                           value="{{ product_discount.quantity }}"*/
/*                                                                           placeholder="{{ entry_quantity }}"*/
/*                                                                           class="form-control"/></td>*/
/*                                             <td class="text-right"><input type="text"*/
/*                                                                           name="product_discount[{{ discount_row }}][priority]"*/
/*                                                                           value="{{ product_discount.priority }}"*/
/*                                                                           placeholder="{{ entry_priority }}"*/
/*                                                                           class="form-control"/></td>*/
/*                                             <td class="text-right"><input type="text"*/
/*                                                                           name="product_discount[{{ discount_row }}][price]"*/
/*                                                                           value="{{ product_discount.price }}"*/
/*                                                                           placeholder="{{ entry_price }}"*/
/*                                                                           class="form-control"/></td>*/
/*                                             <td class="text-left" style="width: 20%;">*/
/*                                                 <div class="input-group date">*/
/*                                                     <input type="text"*/
/*                                                            name="product_discount[{{ discount_row }}][date_start]"*/
/*                                                            value="{{ product_discount.date_start }}"*/
/*                                                            placeholder="{{ entry_date_start }}"*/
/*                                                            data-date-format="YYYY-MM-DD" class="form-control"/>*/
/*                                                     <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                                             </td>*/
/*                                             <td class="text-left" style="width: 20%;">*/
/*                                                 <div class="input-group date">*/
/*                                                     <input type="text"*/
/*                                                            name="product_discount[{{ discount_row }}][date_end]"*/
/*                                                            value="{{ product_discount.date_end }}"*/
/*                                                            placeholder="{{ entry_date_end }}"*/
/*                                                            data-date-format="YYYY-MM-DD" class="form-control"/>*/
/*                                                     <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                                             </td>*/
/*                                             <td class="text-left">*/
/*                                                 <button type="button"*/
/*                                                         onclick="$('#discount-row{{ discount_row }}').remove();"*/
/*                                                         data-toggle="tooltip" title="{{ button_remove }}"*/
/*                                                         class="btn btn-danger"><i class="fa fa-minus-circle"></i>*/
/*                                                 </button>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         {% set discount_row = discount_row + 1 %}*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/* */
/*                                     <tfoot>*/
/*                                     <tr>*/
/*                                         <td colspan="6"></td>*/
/*                                         <td class="text-left">*/
/*                                             <button type="button" onclick="addDiscount();" data-toggle="tooltip"*/
/*                                                     title="{{ button_discount_add }}" class="btn btn-primary"><i*/
/*                                                         class="fa fa-plus-circle"></i></button>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     </tfoot>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-special">*/
/*                             <div class="table-responsive">*/
/*                                 <table id="special" class="table table-striped table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_customer_group }}</td>*/
/*                                         <td class="text-right">{{ entry_priority }}</td>*/
/*                                         <td class="text-right">{{ entry_price }}</td>*/
/*                                         <td class="text-left">{{ entry_date_start }}</td>*/
/*                                         <td class="text-left">{{ entry_date_end }}</td>*/
/*                                         <td></td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* */
/*                                     {% set special_row = 0 %}*/
/*                                     {% for product_special in product_specials %}*/
/*                                         <tr id="special-row{{ special_row }}">*/
/*                                             <td class="text-left"><select*/
/*                                                         name="product_special[{{ special_row }}][customer_group_id]"*/
/*                                                         class="form-control">*/
/* */
/* */
/*                                                     {% for customer_group in customer_groups %}*/
/*                                                         {% if customer_group.customer_group_id == product_special.customer_group_id %}*/
/* */
/* */
/*                                                             <option value="{{ customer_group.customer_group_id }}"*/
/*                                                                     selected="selected">{{ customer_group.name }}</option>*/
/* */
/* */
/*                                                         {% else %}*/
/* */
/* */
/*                                                             <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/* */
/* */
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/* */
/* */
/*                                                 </select></td>*/
/*                                             <td class="text-right"><input type="text"*/
/*                                                                           name="product_special[{{ special_row }}][priority]"*/
/*                                                                           value="{{ product_special.priority }}"*/
/*                                                                           placeholder="{{ entry_priority }}"*/
/*                                                                           class="form-control"/></td>*/
/*                                             <td class="text-right"><input type="text"*/
/*                                                                           name="product_special[{{ special_row }}][price]"*/
/*                                                                           value="{{ product_special.price }}"*/
/*                                                                           placeholder="{{ entry_price }}"*/
/*                                                                           class="form-control"/></td>*/
/*                                             <td class="text-left" style="width: 20%;">*/
/*                                                 <div class="input-group date">*/
/*                                                     <input type="text"*/
/*                                                            name="product_special[{{ special_row }}][date_start]"*/
/*                                                            value="{{ product_special.date_start }}"*/
/*                                                            placeholder="{{ entry_date_start }}"*/
/*                                                            data-date-format="YYYY-MM-DD" class="form-control"/>*/
/*                                                     <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                                             </td>*/
/*                                             <td class="text-left" style="width: 20%;">*/
/*                                                 <div class="input-group date">*/
/*                                                     <input type="text"*/
/*                                                            name="product_special[{{ special_row }}][date_end]"*/
/*                                                            value="{{ product_special.date_end }}"*/
/*                                                            placeholder="{{ entry_date_end }}"*/
/*                                                            data-date-format="YYYY-MM-DD" class="form-control"/>*/
/*                                                     <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div>*/
/*                                             </td>*/
/*                                             <td class="text-left">*/
/*                                                 <button type="button"*/
/*                                                         onclick="$('#special-row{{ special_row }}').remove();"*/
/*                                                         data-toggle="tooltip" title="{{ button_remove }}"*/
/*                                                         class="btn btn-danger"><i class="fa fa-minus-circle"></i>*/
/*                                                 </button>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         {% set special_row = special_row + 1 %}*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/* */
/*                                     <tfoot>*/
/*                                     <tr>*/
/*                                         <td colspan="5"></td>*/
/*                                         <td class="text-left">*/
/*                                             <button type="button" onclick="addSpecial();" data-toggle="tooltip"*/
/*                                                     title="{{ button_special_add }}" class="btn btn-primary"><i*/
/*                                                         class="fa fa-plus-circle"></i></button>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     </tfoot>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-image">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-striped table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_image }}</td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     <tr>*/
/*                                         <td class="text-left"><a href="" id="thumb-image" data-toggle="image"*/
/*                                                                  class="img-thumbnail"><img src="{{ thumb }}" alt=""*/
/*                                                                                             title=""*/
/*                                                                                             data-placeholder="{{ placeholder }}"/></a>*/
/*                                             <input type="hidden" name="image" value="{{ image }}" id="input-image"/>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                             <div class="table-responsive">*/
/*                                 <table id="images" class="table table-striped table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_additional_image }}</td>*/
/*                                         <td class="text-right">{{ entry_sort_order }}</td>*/
/*                                         <td></td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* */
/*                                     {% set image_row = 0 %}*/
/*                                     {% for product_image in product_images %}*/
/*                                         <tr id="image-row{{ image_row }}">*/
/*                                             <td class="text-left"><a href="" id="thumb-image{{ image_row }}"*/
/*                                                                      data-toggle="image" class="img-thumbnail"><img*/
/*                                                             src="{{ product_image.thumb }}" alt="" title=""*/
/*                                                             data-placeholder="{{ placeholder }}"/></a>*/
/*                                                 <input type="hidden" name="product_image[{{ image_row }}][image]"*/
/*                                                        value="{{ product_image.image }}"*/
/*                                                        id="input-image{{ image_row }}"/></td>*/
/*                                             <td class="text-right"><input type="text"*/
/*                                                                           name="product_image[{{ image_row }}][sort_order]"*/
/*                                                                           value="{{ product_image.sort_order }}"*/
/*                                                                           placeholder="{{ entry_sort_order }}"*/
/*                                                                           class="form-control"/></td>*/
/*                                             <td class="text-left">*/
/*                                                 <button type="button" onclick="$('#image-row{{ image_row }}').remove();"*/
/*                                                         data-toggle="tooltip" title="{{ button_remove }}"*/
/*                                                         class="btn btn-danger"><i class="fa fa-minus-circle"></i>*/
/*                                                 </button>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         {% set image_row = image_row + 1 %}*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/* */
/*                                     <tfoot>*/
/*                                     <tr>*/
/*                                         <td colspan="2"></td>*/
/*                                         <td class="text-left">*/
/*                                             <button type="button" onclick="addImage();" data-toggle="tooltip"*/
/*                                                     title="{{ button_image_add }}" class="btn btn-primary"><i*/
/*                                                         class="fa fa-plus-circle"></i></button>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     </tfoot>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-complection">*/
/*                             <div class="table-responsive">*/
/*                                 <div>*/
/*                                     <select name="main_category_id" class="form-control">*/
/*                                         <h3>Добавить связанную категорию</h3>*/
/*                                         <form action="{{  addComplectationCategoryUrl }}"></form>*/
/*                                         <option value="0" selected="selected">{{ text_none }}</option>*/
/*                                         {% for category in categories %}*/
/*                                             {% if category.category_id == main_category_id %}*/
/*                                                 <option value="{{ category.category_id }}"*/
/*                                                         selected="selected">{{ category.name }}</option>*/
/*                                             {% else %}*/
/*                                                 <option value="{{ category.category_id }}">{{ category.name }}</option>*/
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-reward">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip"*/
/*                                                                                                title="{{ help_points }}">{{ entry_points }}</span></label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" name="points" value="{{ points }}"*/
/*                                            placeholder="{{ entry_points }}" id="input-points" class="form-control"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_customer_group }}</td>*/
/*                                         <td class="text-right">{{ entry_reward }}</td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* */
/*                                     {% for customer_group in customer_groups %}*/
/*                                         <tr>*/
/*                                             <td class="text-left">{{ customer_group.name }}</td>*/
/*                                             <td class="text-right"><input type="text"*/
/*                                                                           name="product_reward[{{ customer_group.customer_group_id }}][points]"*/
/*                                                                           value="{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}"*/
/*                                                                           class="form-control"/></td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/* */
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-seo">*/
/*                             <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_store }}</td>*/
/*                                         <td class="text-left">{{ entry_keyword }}</td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for store in stores %}*/
/*                                         <tr>*/
/*                                             <td class="text-left">{{ store.name }}</td>*/
/*                                             <td class="text-left">{% for language in languages %}*/
/*                                                     <div class="input-group"><span class="input-group-addon"><img*/
/*                                                                     src="language/{{ language.code }}/{{ language.code }}.png"*/
/*                                                                     title="{{ language.name }}"/></span>*/
/*                                                         <input type="text"*/
/*                                                                name="product_seo_url[{{ store.store_id }}][{{ language.language_id }}]"*/
/*                                                                value="{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}"*/
/*                                                                placeholder="{{ entry_keyword }}"*/
/*                                                                class="form-control"/>*/
/*                                                     </div>*/
/*                                                     {% if error_keyword[store.store_id][language.language_id] %}*/
/*                                                         <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}</td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/* */
/*                                 </table>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label"*/
/*                                        for="input-noindex">{{ entry_noindex }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="noindex" id="input-noindex" class="form-control">*/
/*                                         {% if noindex %}*/
/*                                             <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                             <option value="0">{{ text_disabled }}</option>*/
/*                                         {% else %}*/
/*                                             <option value="1">{{ text_enabled }}</option>*/
/*                                             <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                                         {% endif %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="tab-pane" id="tab-design">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left">{{ entry_store }}</td>*/
/*                                         <td class="text-left">{{ entry_layout }}</td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for store in stores %}*/
/*                                         <tr>*/
/*                                             <td class="text-left">{{ store.name }}</td>*/
/*                                             <td class="text-left"><select*/
/*                                                         name="product_layout[{{ store.store_id }}]"*/
/*                                                         class="form-control">*/
/*                                                     <option value=""></option>*/
/* */
/* */
/*                                                     {% for layout in layouts %}*/
/*                                                         {% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %}*/
/* */
/* */
/*                                                             <option value="{{ layout.layout_id }}"*/
/*                                                                     selected="selected">{{ layout.name }}</option>*/
/* */
/* */
/*                                                         {% else %}*/
/* */
/* */
/*                                                             <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/* */
/* */
/*                                                         {% endif %}*/
/*                                                     {% endfor %}*/
/* */
/* */
/*                                                 </select></td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet"/>*/
/*     <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet"/>*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*     <link href="view/javascript/summernote/summernote.css" rel="stylesheet"/>*/
/*     <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script>*/
/*     <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/*     <script type="text/javascript"><!--*/
/*         // Manufacturer*/
/*         $('input[name=\'manufacturer\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         json.unshift({*/
/*                             manufacturer_id: 0,*/
/*                             name: '{{ text_none }}'*/
/*                         });*/
/* */
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['manufacturer_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $('input[name=\'manufacturer\']').val(item['label']);*/
/*                 $('input[name=\'manufacturer_id\']').val(item['value']);*/
/*             }*/
/*         });*/
/* */
/*         // Category*/
/*         $('input[name=\'category\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['category_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $('input[name=\'category\']').val('');*/
/* */
/*                 $('#product-category' + item['value']).remove();*/
/* */
/*                 $('#product-category').append('<div id="product-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_category[]" value="' + item['value'] + '" /></div>');*/
/*             }*/
/*         });*/
/* */
/*         $('#product-category').delegate('.fa-minus-circle', 'click', function () {*/
/*             $(this).parent().remove();*/
/*         });*/
/* */
/*         // Filter*/
/*         $('input[name=\'filter\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['filter_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $('input[name=\'filter\']').val('');*/
/* */
/*                 $('#product-filter' + item['value']).remove();*/
/* */
/*                 $('#product-filter').append('<div id="product-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_filter[]" value="' + item['value'] + '" /></div>');*/
/*             }*/
/*         });*/
/* */
/*         $('#product-filter').delegate('.fa-minus-circle', 'click', function () {*/
/*             $(this).parent().remove();*/
/*         });*/
/* */
/*         // Downloads*/
/*         $('input[name=\'download\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=catalog/download/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['download_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $('input[name=\'download\']').val('');*/
/* */
/*                 $('#product-download' + item['value']).remove();*/
/* */
/*                 $('#product-download').append('<div id="product-download' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_download[]" value="' + item['value'] + '" /></div>');*/
/*             }*/
/*         });*/
/* */
/*         $('#product-download').delegate('.fa-minus-circle', 'click', function () {*/
/*             $(this).parent().remove();*/
/*         });*/
/* */
/*         // Related*/
/*         $('input[name=\'related\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['product_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $('input[name=\'related\']').val('');*/
/* */
/*                 $('#product-related' + item['value']).remove();*/
/* */
/*                 $('#product-related').append('<div id="product-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_related[]" value="' + item['value'] + '" /></div>');*/
/*             }*/
/*         });*/
/* */
/*         $('#product-related').delegate('.fa-minus-circle', 'click', function () {*/
/*             $(this).parent().remove();*/
/*         });*/
/* */
/*         // Related Article*/
/*         $('input[name=\'product_related_article_input\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=blog/article/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['article_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 $('input[name=\'product_related_article\']').val('');*/
/* */
/*                 $('#article-related' + item['value']).remove();*/
/* */
/*                 $('#article-related').append('<div id="article-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_related_article[]" value="' + item['value'] + '" /></div>');*/
/*             }*/
/*         });*/
/* */
/*         $('#article-related').delegate('.fa-minus-circle', 'click', function () {*/
/*             $(this).parent().remove();*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         var attribute_row = {{ attribute_row }};*/
/* */
/*         function addAttribute() {*/
/*             html = '<tr id="attribute-row' + attribute_row + '">';*/
/*             html += '  <td class="text-left" style="width: 20%;"><input type="text" name="product_attribute[' + attribute_row + '][name]" value="" placeholder="{{ entry_attribute }}" class="form-control" /><input type="hidden" name="product_attribute[' + attribute_row + '][attribute_id]" value="" /></td>';*/
/*             html += '  <td class="text-left">';*/
/*             {% for language in languages %}*/
/*             html += '<div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><textarea name="product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control"></textarea></div>';*/
/*             {% endfor %}*/
/*             html += '  </td>';*/
/*             html += '  <td class="text-right"><button type="button" onclick="$(\'#attribute-row' + attribute_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*             html += '</tr>';*/
/* */
/*             $('#attribute tbody').append(html);*/
/* */
/*             attributeautocomplete(attribute_row);*/
/* */
/*             attribute_row++;*/
/*         }*/
/* */
/*         function attributeautocomplete(attribute_row) {*/
/*             $('input[name=\'product_attribute[' + attribute_row + '][name]\']').autocomplete({*/
/*                 'source': function (request, response) {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=catalog/attribute/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                         dataType: 'json',*/
/*                         success: function (json) {*/
/*                             response($.map(json, function (item) {*/
/*                                 return {*/
/*                                     category: item.attribute_group,*/
/*                                     label: item.name,*/
/*                                     value: item.attribute_id*/
/*                                 }*/
/*                             }));*/
/*                         }*/
/*                     });*/
/*                 },*/
/*                 'select': function (item) {*/
/*                     $('input[name=\'product_attribute[' + attribute_row + '][name]\']').val(item['label']);*/
/*                     $('input[name=\'product_attribute[' + attribute_row + '][attribute_id]\']').val(item['value']);*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         $('#attribute tbody tr').each(function (index, element) {*/
/*             attributeautocomplete(index);*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         var option_row = {{ option_row }};*/
/* */
/*         $('input[name=\'option\']').autocomplete({*/
/*             'source': function (request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=catalog/option/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function (json) {*/
/*                         response($.map(json, function (item) {*/
/*                             return {*/
/*                                 category: item['category'],*/
/*                                 label: item['name'],*/
/*                                 value: item['option_id'],*/
/*                                 type: item['type'],*/
/*                                 option_value: item['option_value']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function (item) {*/
/*                 html = '<div class="tab-pane" id="tab-option' + option_row + '">';*/
/*                 html += '	<input type="hidden" name="product_option[' + option_row + '][product_option_id]" value="" />';*/
/*                 html += '	<input type="hidden" name="product_option[' + option_row + '][name]" value="' + item['label'] + '" />';*/
/*                 html += '	<input type="hidden" name="product_option[' + option_row + '][option_id]" value="' + item['value'] + '" />';*/
/*                 html += '	<input type="hidden" name="product_option[' + option_row + '][type]" value="' + item['type'] + '" />';*/
/* */
/*                 html += '	<div class="form-group">';*/
/*                 html += '	  <label class="col-sm-2 control-label" for="input-required' + option_row + '">{{ entry_required }}</label>';*/
/*                 html += '	  <div class="col-sm-10"><select name="product_option[' + option_row + '][required]" id="input-required' + option_row + '" class="form-control">';*/
/*                 html += '	      <option value="1">{{ text_yes }}</option>';*/
/*                 html += '	      <option value="0">{{ text_no }}</option>';*/
/*                 html += '	  </select></div>';*/
/*                 html += '	</div>';*/
/* */
/*                 if (item['type'] == 'text') {*/
/*                     html += '	<div class="form-group">';*/
/*                     html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/*                     html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/*                     html += '	</div>';*/
/*                 }*/
/* */
/*                 if (item['type'] == 'textarea') {*/
/*                     html += '	<div class="form-group">';*/
/*                     html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/*                     html += '	  <div class="col-sm-10"><textarea name="product_option[' + option_row + '][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control"></textarea></div>';*/
/*                     html += '	</div>';*/
/*                 }*/
/* */
/*                 if (item['type'] == 'file') {*/
/*                     html += '	<div class="form-group" style="display: none;">';*/
/*                     html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/*                     html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/*                     html += '	</div>';*/
/*                 }*/
/* */
/*                 if (item['type'] == 'date') {*/
/*                     html += '	<div class="form-group">';*/
/*                     html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/*                     html += '	  <div class="col-sm-3"><div class="input-group date"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/*                     html += '	</div>';*/
/*                 }*/
/* */
/*                 if (item['type'] == 'time') {*/
/*                     html += '	<div class="form-group">';*/
/*                     html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/*                     html += '	  <div class="col-sm-10"><div class="input-group time"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/*                     html += '	</div>';*/
/*                 }*/
/* */
/*                 if (item['type'] == 'datetime') {*/
/*                     html += '	<div class="form-group">';*/
/*                     html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/*                     html += '	  <div class="col-sm-10"><div class="input-group datetime"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/*                     html += '	</div>';*/
/*                 }*/
/* */
/*                 if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {*/
/*                     html += '<div class="table-responsive">';*/
/*                     html += '  <table id="option-value' + option_row + '" class="table table-striped table-bordered table-hover">';*/
/*                     html += '  	 <thead>';*/
/*                     html += '      <tr>';*/
/*                     html += '        <td class="text-left">{{ entry_option_value }}</td>';*/
/*                     html += '        <td class="text-right">{{ entry_quantity }}</td>';*/
/*                     html += '        <td class="text-left">{{ entry_subtract }}</td>';*/
/*                     html += '        <td class="text-right">{{ entry_price }}</td>';*/
/*                     html += '        <td class="text-right">{{ entry_option_points }}</td>';*/
/*                     html += '        <td class="text-right">{{ entry_weight }}</td>';*/
/*                     html += '        <td></td>';*/
/*                     html += '      </tr>';*/
/*                     html += '  	 </thead>';*/
/*                     html += '  	 <tbody>';*/
/*                     html += '    </tbody>';*/
/*                     html += '    <tfoot>';*/
/*                     html += '      <tr>';*/
/*                     html += '        <td colspan="6"></td>';*/
/*                     html += '        <td class="text-left"><button type="button" onclick="addOptionValue(' + option_row + ');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';*/
/*                     html += '      </tr>';*/
/*                     html += '    </tfoot>';*/
/*                     html += '  </table>';*/
/*                     html += '</div>';*/
/* */
/*                     html += '  <select id="option-values' + option_row + '" style="display: none;">';*/
/* */
/*                     for (i = 0; i < item['option_value'].length; i++) {*/
/*                         html += '  <option value="' + item['option_value'][i]['option_value_id'] + '">' + item['option_value'][i]['name'] + '</option>';*/
/*                     }*/
/* */
/*                     html += '  </select>';*/
/*                     html += '</div>';*/
/*                 }*/
/* */
/*                 $('#tab-option .tab-content').append(html);*/
/* */
/*                 $('#option > li:last-child').before('<li><a href="#tab-option' + option_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick=" $(\'#option a:first\').tab(\'show\');$(\'a[href=\\\'#tab-option' + option_row + '\\\']\').parent().remove(); $(\'#tab-option' + option_row + '\').remove();"></i>' + item['label'] + '</li>');*/
/* */
/*                 $('#option a[href=\'#tab-option' + option_row + '\']').tab('show');*/
/* */
/*                 $('[data-toggle=\'tooltip\']').tooltip({*/
/*                     container: 'body',*/
/*                     html: true*/
/*                 });*/
/* */
/*                 $('.date').datetimepicker({*/
/*                     language: '{{ datepicker }}',*/
/*                     pickTime: false*/
/*                 });*/
/* */
/*                 $('.time').datetimepicker({*/
/*                     language: '{{ datepicker }}',*/
/*                     pickDate: false*/
/*                 });*/
/* */
/*                 $('.datetime').datetimepicker({*/
/*                     language: '{{ datepicker }}',*/
/*                     pickDate: true,*/
/*                     pickTime: true*/
/*                 });*/
/* */
/*                 option_row++;*/
/*             }*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         var option_value_row = {{ option_value_row }};*/
/* */
/*         function addOptionValue(option_row) {*/
/*             html = '<tr id="option-value-row' + option_value_row + '">';*/
/*             html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]" class="form-control">';*/
/*             html += $('#option-values' + option_row).html();*/
/*             html += '  </select><input type="hidden" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]" value="" /></td>';*/
/*             html += '  <td class="text-right"><input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]" class="form-control">';*/
/*             html += '    <option value="1">{{ text_yes }}</option>';*/
/*             html += '    <option value="0">{{ text_no }}</option>';*/
/*             html += '  </select></td>';*/
/*             html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]" class="form-control">';*/
/*             html += '    <option value="+">+</option>';*/
/*             html += '    <option value="-">-</option>';*/
/*             html += '  </select>';*/
/*             html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]" class="form-control">';*/
/*             html += '    <option value="+">+</option>';*/
/*             html += '    <option value="-">-</option>';*/
/*             html += '  </select>';*/
/*             html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]" value="" placeholder="{{ entry_points }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]" class="form-control">';*/
/*             html += '    <option value="+">+</option>';*/
/*             html += '    <option value="-">-</option>';*/
/*             html += '  </select>';*/
/*             html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]" value="" placeholder="{{ entry_weight }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-left"><button type="button" onclick="$(this).tooltip(\'destroy\');$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" rel="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*             html += '</tr>';*/
/* */
/*             $('#option-value' + option_row + ' tbody').append(html);*/
/*             $('[rel=tooltip]').tooltip();*/
/* */
/*             option_value_row++;*/
/*         }*/
/* */
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         var discount_row = {{ discount_row }};*/
/* */
/*         function addDiscount() {*/
/*             html = '<tr id="discount-row' + discount_row + '">';*/
/*             html += '  <td class="text-left"><select name="product_discount[' + discount_row + '][customer_group_id]" class="form-control">';*/
/*             {% for customer_group in customer_groups %}*/
/*             html += '    <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*             {% endfor %}*/
/*             html += '  </select></td>';*/
/*             html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/*             html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/*             html += '  <td class="text-left"><button type="button" onclick="$(\'#discount-row' + discount_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*             html += '</tr>';*/
/* */
/*             $('#discount tbody').append(html);*/
/* */
/*             $('.date').datetimepicker({*/
/*                 pickTime: false*/
/*             });*/
/* */
/*             discount_row++;*/
/*         }*/
/* */
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         var special_row = {{ special_row }};*/
/* */
/*         function addSpecial() {*/
/*             html = '<tr id="special-row' + special_row + '">';*/
/*             html += '  <td class="text-left"><select name="product_special[' + special_row + '][customer_group_id]" class="form-control">';*/
/*             {% for customer_group in customer_groups %}*/
/*             html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*             {% endfor %}*/
/*             html += '  </select></td>';*/
/*             html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/*             html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/*             html += '  <td class="text-left"><button type="button" onclick="$(\'#special-row' + special_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*             html += '</tr>';*/
/* */
/*             $('#special tbody').append(html);*/
/* */
/*             $('.date').datetimepicker({*/
/*                 language: '{{ datepicker }}',*/
/*                 pickTime: false*/
/*             });*/
/* */
/*             special_row++;*/
/*         }*/
/* */
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         var image_row = {{ image_row }};*/
/* */
/*         function addImage() {*/
/*             html = '<tr id="image-row' + image_row + '">';*/
/*             html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="product_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';*/
/*             html += '  <td class="text-right"><input type="text" name="product_image[' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/*             html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*             html += '</tr>';*/
/* */
/*             $('#images tbody').append(html);*/
/* */
/*             image_row++;*/
/*         }*/
/* */
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         var recurring_row = {{ recurring_row }};*/
/* */
/*         function addRecurring() {*/
/*             html = '<tr id="recurring-row' + recurring_row + '">';*/
/*             html += '  <td class="left">';*/
/*             html += '    <select name="product_recurring[' + recurring_row + '][recurring_id]" class="form-control">>';*/
/*             {% for recurring in recurrings %}*/
/*             html += '      <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>';*/
/*             {% endfor %}*/
/*             html += '    </select>';*/
/*             html += '  </td>';*/
/*             html += '  <td class="left">';*/
/*             html += '    <select name="product_recurring[' + recurring_row + '][customer_group_id]" class="form-control">>';*/
/*             {% for customer_group in customer_groups %}*/
/*             html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>';*/
/*             {% endfor %}*/
/*             html += '    <select>';*/
/*             html += '  </td>';*/
/*             html += '  <td class="left">';*/
/*             html += '    <a onclick="$(\'#recurring-row' + recurring_row + '\').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>';*/
/*             html += '  </td>';*/
/*             html += '</tr>';*/
/* */
/*             $('#tab-recurring table tbody').append(html);*/
/* */
/*             recurring_row++;*/
/*         }*/
/* */
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         $('.date').datetimepicker({*/
/*             language: '{{ datepicker }}',*/
/*             pickTime: false*/
/*         });*/
/* */
/*         $('.time').datetimepicker({*/
/*             language: '{{ datepicker }}',*/
/*             pickDate: false*/
/*         });*/
/* */
/*         $('.datetime').datetimepicker({*/
/*             language: '{{ datepicker }}',*/
/*             pickDate: true,*/
/*             pickTime: true*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         $('#language a:first').tab('show');*/
/*         $('#option a:first').tab('show');*/
/*         //--></script>*/
/* </div>*/
/* {{ footer }}*/
/* */
