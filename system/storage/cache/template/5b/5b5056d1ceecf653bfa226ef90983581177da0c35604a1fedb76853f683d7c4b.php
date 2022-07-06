<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Demo-Store/template/product/category.twig */
class __TwigTemplate_3ad82072353f6ee9e1770d69e1127a04507cf0d40b37f764092c8b0a6ba20476 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-special\" class=\"container\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      <ul class=\"breadcrumb\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
      ";
        // line 17
        echo ($context["content_top"] ?? null);
        echo "
     
\t   ";
        // line 19
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            echo " 
      <div class=\"row category_thumb\">
        ";
            // line 21
            if (($context["thumb"] ?? null)) {
                // line 22
                echo "        <div class=\"col-sm-2 category_img\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
        
        ";
            }
            // line 25
            echo "        <div class=\"col-sm-12\">
        <h2 class=\"page-title\">";
            // line 26
            echo ($context["heading_title"] ?? null);
            echo "</h2>
        <div>
        ";
            // line 28
            if (($context["description"] ?? null)) {
                // line 29
                echo "        
        <div class=\"col-sm-10 category_description\">";
                // line 30
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 32
            echo "      </div>     
      ";
        }
        // line 34
        echo "       ";
        if (($context["categories"] ?? null)) {
            // line 35
            echo "      <h3 class=\"refine-search\">";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
      <div class=\"row\">
        <div class=\"col-sm-12 category_list\">
          <ul>
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 40
                echo "                   
            <div class=\"img-thumbnail text-center\" style=\"margin-bottom: 10px;\">
            ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 43);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                    echo "\" class=\"img-responsive\" />
             ";
                }
                // line 45
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 45);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45);
                echo "</a>
            </div>
        
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </ul>
        </div>
      </div>
       ";
        }
        // line 53
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 54
            echo "      <div class=\"category_filter\">
        <div class=\"col-md-4 btn-list-grid\">
          <div class=\"btn-group\">
             <button type=\"button\" id=\"grid-view\" class=\"btn btn-default grid\"  title=\"";
            // line 57
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default list\" title=\"";
            // line 58
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
           
          </div>
        </div>
    <div class=\"compare-total\"><a href=\"";
            // line 62
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
    <div class=\"pagination-right\">
     <div class=\"sort-by-wrapper\">
      <div class=\"col-md-2 text-right sort-by\">
        <label class=\"control-label\" for=\"input-sort\">";
            // line 66
            echo ($context["text_sort"] ?? null);
            echo "</label>
      </div>
      <div class=\"col-md-3 text-right sort\">
        <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                echo " 
        ";
                // line 71
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 71) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 72
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 72);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 72);
                    echo "</option>
        ";
                } else {
                    // line 74
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 74);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 74);
                    echo " </option>
         ";
                }
                // line 76
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        </select>
      </div>
     </div>
     <div class=\"show-wrapper\">
      <div class=\"col-md-1 text-right show\">
        <label class=\"control-label\" for=\"input-limit\">";
            // line 82
            echo ($context["text_limit"] ?? null);
            echo "</label>
      </div>
      <div class=\"col-md-2 text-right limit\">
        <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 87
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 87) == ($context["limit"] ?? null))) {
                    // line 88
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 88);
                    echo " \" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 88);
                    echo "</option>
        ";
                } else {
                    // line 90
                    echo "        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 90);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 90);
                    echo " </option>
        ";
                }
                // line 92
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        </select>
      </div>
    </div>
      </div>
    </div>
        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 99
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-block product-thumb\">
         <div class=\"product-block-inner\">
      <div class=\"image ";
                // line 102
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 102) == 0)) {
                    echo "outstock";
                }
                echo "\">
        ";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 104);
                    echo "\">
        <button class=\"wishlist\" type=\"button\"  title=\"";
                    // line 105
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 105);
                    echo " ');\"></button>
      <img src=\"";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 106);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                    echo "\" class=\"img-responsive reg-image\"/>
      <div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 107);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107);
                    echo "\"/></div>
      </a>
      ";
                } else {
                    // line 110
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 110);
                    echo "\">
      <img src=\"";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 111);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 111);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 111);
                    echo "\" class=\"img-responsive\"/></a>
      ";
                }
                // line 113
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "        <span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 114);
                    echo "%</span>
      ";
                }
                // line 116
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 116) == 0)) {
                    // line 117
                    echo "      <span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
    ";
                }
                // line 118
                echo "     
          </div>
            <div class=\"product-details\">
              <div class=\"caption\">
               ";
                // line 123
                echo "               <h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 123);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 123);
                echo "</a></h4> 
\t\t\t ";
                // line 124
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 124)) {
                    // line 125
                    echo "              <div class=\"rating\">
                ";
                    // line 126
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 127
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 127) < $context["i"])) {
                            // line 128
                            echo "                   <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
                      ";
                        } else {
                            // line 130
                            echo "                   <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                   ";
                        }
                        // line 132
                        echo "                   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 133
                    echo "                   &nbsp;<span style=\"cursor:pointer;\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 133);
                    echo "\" class=\"total-review";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 133);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 133);
                    echo " Review</span>
                   </div>
               ";
                }
                // line 136
                echo "             <p class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 136);
                echo "</p>
             ";
                // line 137
                if (twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
                    // line 140
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "attribute_groups", [], "any", false, false, false, 140));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                        // line 141
                        echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 143);
                        echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                        // line 147
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 147));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                            // line 148
                            echo "                <tr>
                  <td>";
                            // line 149
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 149);
                            echo "</td>
                  <td>";
                            // line 150
                            echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 150);
                            echo "</td>
                </tr>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 153
                        echo "                  </tbody>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo "              </table>
            </div>
            ";
                }
                // line 158
                echo "\t\t\t ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "              <p class=\"price\">
                ";
                    // line 160
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 160)) {
                        // line 161
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 161);
                        echo "
              ";
                    } else {
                        // line 163
                        echo "              <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 163);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 163);
                        echo "</span>
              ";
                    }
                    // line 165
                    echo "              </p>
              ";
                }
                // line 167
                echo "
              <div class=\"product_hover_block\">
                <div class=\"action\">
                  ";
                // line 170
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 170) > 0)) {
                    // line 171
                    echo "         <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 171);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
         ";
                } else {
                    // line 173
                    echo "\t\t\t\t\t\t <button type=\"button\" class=\"cart_button out_of_stock\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 173);
                    echo "');\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
         ";
                }
                // line 175
                echo "\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 176
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 176);
                echo "\"></a>
\t\t\t\t\t</div>
          <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 178
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 178);
                echo " ');\"></button>
\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 179
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 179);
                echo " ');\"></button>
                   </div>
\t\t      </div>
              </div>
            </div>
      </div>
          </div>
        </div>
        <script> 
            \$('.total-review";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 188);
                echo "').on('click', function() { 
             var t='";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 189);
                echo "'; 
            const parseResult = new DOMParser().parseFromString(t, \"text/html\");
            const parsedUrl = parseResult.documentElement.textContent;
            window.location.href = parsedUrl + '&review';
            return false;
          });
      </script>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "      <div class=\"pagination-wrapper\">
        <div class=\"col-sm-6 text-right page-result\">";
            // line 198
            echo ($context["results"] ?? null);
            echo "</div>  
      <div class=\"col-sm-6 text-left page-link\">";
            // line 199
            echo ($context["pagination"] ?? null);
            echo "</div>
      
     </div>     
      ";
        } else {
            // line 203
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 205
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 208
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 209
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
</div>
";
        // line 213
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 213,  620 => 209,  615 => 208,  607 => 205,  601 => 203,  594 => 199,  590 => 198,  587 => 197,  573 => 189,  569 => 188,  555 => 179,  549 => 178,  542 => 176,  539 => 175,  529 => 173,  519 => 171,  517 => 170,  512 => 167,  508 => 165,  500 => 163,  494 => 161,  492 => 160,  489 => 159,  486 => 158,  481 => 155,  474 => 153,  465 => 150,  461 => 149,  458 => 148,  454 => 147,  447 => 143,  443 => 141,  439 => 140,  435 => 138,  433 => 137,  428 => 136,  417 => 133,  411 => 132,  407 => 130,  403 => 128,  400 => 127,  396 => 126,  393 => 125,  391 => 124,  384 => 123,  378 => 118,  372 => 117,  369 => 116,  363 => 114,  360 => 113,  351 => 111,  346 => 110,  336 => 107,  328 => 106,  322 => 105,  317 => 104,  315 => 103,  309 => 102,  304 => 99,  300 => 98,  293 => 93,  287 => 92,  279 => 90,  271 => 88,  268 => 87,  264 => 86,  257 => 82,  250 => 77,  244 => 76,  236 => 74,  228 => 72,  226 => 71,  220 => 70,  213 => 66,  204 => 62,  197 => 58,  193 => 57,  188 => 54,  185 => 53,  179 => 49,  166 => 45,  156 => 43,  154 => 42,  150 => 40,  146 => 39,  138 => 35,  135 => 34,  131 => 32,  126 => 30,  123 => 29,  121 => 28,  116 => 26,  113 => 25,  102 => 22,  100 => 21,  95 => 19,  90 => 17,  87 => 16,  76 => 14,  72 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/product/category.twig", "");
    }
}
