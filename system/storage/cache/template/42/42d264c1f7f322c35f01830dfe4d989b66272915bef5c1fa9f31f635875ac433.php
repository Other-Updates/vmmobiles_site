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
class __TwigTemplate_ca236e3848fdcaafe46aa43e82b8042cb28ee99a316c68f5c24d2767a82dccae extends \Twig\Template
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
\t\t\t ";
                // line 137
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "              <p class=\"price\">
                ";
                    // line 139
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 139)) {
                        // line 140
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 140);
                        echo "
              ";
                    } else {
                        // line 142
                        echo "              <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 142);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 142);
                        echo "</span>
              ";
                    }
                    // line 144
                    echo "              </p>
              ";
                }
                // line 146
                echo "
              <div class=\"product_hover_block\">
                <div class=\"action\">
                  ";
                // line 149
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 149) > 0)) {
                    // line 150
                    echo "         <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 150);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
         ";
                } else {
                    // line 152
                    echo "\t\t\t\t\t\t <button type=\"button\" class=\"cart_button out_of_stock\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 152);
                    echo "');\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
         ";
                }
                // line 154
                echo "\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 155
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 155);
                echo "\"></a>
\t\t\t\t\t</div>
          <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 157
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
                echo " ');\"></button>
\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 158
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 158);
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
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 167);
                echo "').on('click', function() { 
             var t='";
                // line 168
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 168);
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
            // line 176
            echo "      <div class=\"pagination-wrapper\">
        <div class=\"col-sm-6 text-right page-result\">";
            // line 177
            echo ($context["results"] ?? null);
            echo "</div>  
      <div class=\"col-sm-6 text-left page-link\">";
            // line 178
            echo ($context["pagination"] ?? null);
            echo "</div>
      
     </div>     
      ";
        } else {
            // line 182
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 184
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 187
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 188
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
</div>
</div>
";
        // line 192
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
        return array (  573 => 192,  566 => 188,  561 => 187,  553 => 184,  547 => 182,  540 => 178,  536 => 177,  533 => 176,  519 => 168,  515 => 167,  501 => 158,  495 => 157,  488 => 155,  485 => 154,  475 => 152,  465 => 150,  463 => 149,  458 => 146,  454 => 144,  446 => 142,  440 => 140,  438 => 139,  435 => 138,  433 => 137,  428 => 136,  417 => 133,  411 => 132,  407 => 130,  403 => 128,  400 => 127,  396 => 126,  393 => 125,  391 => 124,  384 => 123,  378 => 118,  372 => 117,  369 => 116,  363 => 114,  360 => 113,  351 => 111,  346 => 110,  336 => 107,  328 => 106,  322 => 105,  317 => 104,  315 => 103,  309 => 102,  304 => 99,  300 => 98,  293 => 93,  287 => 92,  279 => 90,  271 => 88,  268 => 87,  264 => 86,  257 => 82,  250 => 77,  244 => 76,  236 => 74,  228 => 72,  226 => 71,  220 => 70,  213 => 66,  204 => 62,  197 => 58,  193 => 57,  188 => 54,  185 => 53,  179 => 49,  166 => 45,  156 => 43,  154 => 42,  150 => 40,  146 => 39,  138 => 35,  135 => 34,  131 => 32,  126 => 30,  123 => 29,  121 => 28,  116 => 26,  113 => 25,  102 => 22,  100 => 21,  95 => 19,  90 => 17,  87 => 16,  76 => 14,  72 => 13,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/product/category.twig", "");
    }
}
