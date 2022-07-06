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

/* Demo-Store/template/product/product.twig */
class __TwigTemplate_a9c5d3d7b09fc226cb44f7ef8dcd819a3d07421aea27577eb0848f409ace9bbf extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
  
  <div class=\"row\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6 productpage";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9 productpage";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12 productpage";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
    <ul class=\"breadcrumb\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </ul>
  ";
        // line 18
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\"> ";
        // line 19
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "        
        ";
            // line 21
            $context["class"] = "col-sm-6 product-left";
            // line 22
            echo "        ";
        } else {
            // line 23
            echo "        ";
            $context["class"] = "col-sm-4 product-left";
            // line 24
            echo "        ";
        }
        // line 25
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> 
    <div class=\"product-info\">    
     ";
        // line 27
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 28
            echo "          <div class=\"left product-image thumbnails\">
         ";
            // line 29
            if (($context["thumb"] ?? null)) {
                echo "      
    <!-- Webdigify Cloud-Zoom Image Effect Start -->
      <div class=\"image\"><a class=\"thumbnail\" href=\"";
                // line 31
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img id=\"tmzoom\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></div> 
      ";
            }
            // line 33
            echo "      ";
            if (($context["images"] ?? null)) {
                // line 34
                echo "       ";
                $context["sliderFor"] = 3;
                // line 35
                echo "      ";
                $context["imageCount"] = twig_length_filter($this->env, ($context["images"] ?? null));
                echo " 
      
     <div class=\"additional-carousel\">  
      ";
                // line 38
                if ((($context["imageCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    // line 39
                    echo "        <div class=\"customNavigation\">
        <a class=\"fa prev fa-arrow-left\">&nbsp;</a>
      <a class=\"fa next fa-arrow-right\">&nbsp;</a>
      </div> 
     ";
                }
                // line 43
                echo "        
      <div id=\"additional-carousel\" class=\"image-additional ";
                // line 44
                if ((($context["imageCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "product-carousel";
                }
                echo "\">
          
      <div class=\"slider-item\">
        <div class=\"product-block\">   
          <a href=\"";
                // line 48
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a>
        </div>
        </div>    
        
      ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 53
                    echo "        <div class=\"slider-item\">
        <div class=\"product-block\">   
              <a href=\"";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 55);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 55);
                    echo "\" data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 55);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 55);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a>
        </div>
        </div>    
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "        
        </div>
      <span class=\"additional_default_width\" style=\"display:none; visibility:hidden\"></span>
      </div>
    ";
            }
            // line 62
            echo "         

  <!-- Webdigify Cloud-Zoom Image Effect End-->
    </div>
    ";
        }
        // line 67
        echo "        </div>
        </div>
        ";
        // line 69
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 70
            echo "        ";
            $context["class"] = "col-sm-6 product-right";
            // line 71
            echo "        ";
        } else {
            // line 72
            echo "        ";
            $context["class"] = "col-sm-7 product-right";
            // line 73
            echo "        ";
        }
        // line 74
        echo "       
        <div class=\"";
        // line 75
        echo ($context["class"] ?? null);
        echo "\">
          
          <div class=\"product-detail-left\">
          <h3 class=\"product-title\">";
        // line 78
        echo ($context["heading_title"] ?? null);
        echo "</h3>
           ";
        // line 79
        if (($context["review_status"] ?? null)) {
            // line 80
            echo "          <div class=\"rating-wrapper\">
            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 82
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 83
                    echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
              ";
                } else {
                    // line 85
                    echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
              ";
                }
                // line 87
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "              <a href=\"\" class=\"review-count\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a>  
              <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\" class=\"write-review\"><i class=\"fa fa-pencil\"></i>";
            // line 89
            echo ($context["text_write"] ?? null);
            echo "</a>
          </div>
          ";
        }
        // line 92
        echo "            <div class=\"description\">
        <table class=\"product-description\">

            ";
        // line 95
        if (($context["manufacturer"] ?? null)) {
            // line 96
            echo "            <tr><td><span class=\"desc\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span></td><td class=\"description-right\"><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></td></tr>
            ";
        }
        // line 98
        echo "            <tr><td><span class=\"desc\">";
        echo ($context["text_model"] ?? null);
        echo "</span></td><td  class=\"description-right\"> ";
        echo ($context["model"] ?? null);
        echo "</td></tr>
            ";
        // line 99
        if (($context["reward"] ?? null)) {
            // line 100
            echo "           <tr><td><span class=\"desc\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> </td><td class=\"description-right\" >";
            echo ($context["reward"] ?? null);
            echo "</td></tr>
            ";
        }
        // line 102
        echo "            ";
        if (($context["sku"] ?? null)) {
            // line 103
            echo "           <tr><td><span class=\"desc\">SKU :</span> </td><td class=\"description-right\" >";
            echo ($context["sku"] ?? null);
            echo "</td></tr>
            ";
        }
        // line 105
        echo "             ";
        if ((($context["stock_qty"] ?? null) == "false")) {
            // line 106
            echo "           <tr><td><span class=\"desc\">";
            echo ($context["text_stock"] ?? null);
            echo "</span> </td><td class=\"description-right\" >
            <span style=\"color:#ff0000;\">";
            // line 107
            echo ($context["stock"] ?? null);
            echo "</span>
          </td></tr> ";
        }
        // line 109
        echo "    
          </table>
          ";
        // line 111
        if ((($context["stock_qty"] ?? null) == "true")) {
            // line 112
            echo "          \t<span class=\"stock_msg\" style=\"color:#228B22;\">";
            echo ($context["text_productavail"] ?? null);
            echo " : ";
            echo ($context["qty_stock"] ?? null);
            echo "</span>
          ";
        }
        // line 114
        echo "
      </div>

          ";
        // line 117
        if (($context["price"] ?? null)) {
            // line 118
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 119
            if ( !($context["special"] ?? null)) {
                // line 120
                echo "            <li>
              <h4 class=\"special-price\"><span class=\"old-prices\">";
                // line 121
                echo ($context["price"] ?? null);
                echo "</span></h4>
            </li>
            ";
            } else {
                // line 124
                echo "            <li><h4 class=\"special-price\"><span class=\"new-prices\">";
                echo ($context["special"] ?? null);
                echo "</span></h4>
            \t<span class=\"old-price\" style=\"text-decoration: line-through;\"><span class=\"old-prices\">";
                // line 125
                echo ($context["price"] ?? null);
                echo "</span></span>
            \t<span class=\"discount-per\">&nbsp;&nbsp;";
                // line 126
                echo ($context["percentsaving"] ?? null);
                echo "% off</span>
            </li>
            ";
            }
            // line 129
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 130
                echo "            <li class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " <span class=\"product-tax\">";
                echo ($context["tax"] ?? null);
                echo "</span></li>
            ";
            }
            // line 132
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 133
                echo "            <li class=\"rewardpoint\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 135
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 136
                echo "           
            ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 138
                    echo "            <li class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 138);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 138);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "            ";
            }
            // line 141
            echo "          </ul>
          ";
        }
        // line 143
        echo "          <div id=\"product\">
       ";
        // line 144
        if (($context["options"] ?? null)) {
            // line 145
            echo "            <h3 class=\"product-option\">";
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 147
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 147) == "select")) {
                    // line 148
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 148)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 149);
                    echo "</label>
              <select name=\"option[";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 151
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 152
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 152));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 153
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 153);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 153);
                        echo "
                ";
                        // line 154
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154)) {
                            // line 155
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 155);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 155);
                            echo ")
                ";
                        }
                        // line 156
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "              </select>
            </div>
            ";
                }
                // line 161
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 161) == "radio")) {
                    // line 162
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 162)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 163);
                    echo "</label>
              <div id=\"input-option";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 164));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 165
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 167
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 167);
                        echo "\" />
                    ";
                        // line 168
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 168)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 168);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 168);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 168);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 169);
                        echo "
                    ";
                        // line 170
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 170)) {
                            // line 171
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 171);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 171);
                            echo ")
                    ";
                        }
                        // line 172
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    echo " </div>
            </div>
            ";
                }
                // line 177
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 177) == "checkbox")) {
                    // line 178
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 178)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 179);
                    echo "</label>
              <div id=\"input-option";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 180));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 181
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 183);
                        echo "\" />
                    ";
                        // line 184
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 184)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 184);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 184);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 184);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 185
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 185);
                        echo "
                    ";
                        // line 186
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 186)) {
                            // line 187
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 187);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187);
                            echo ")
                    ";
                        }
                        // line 188
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 190
                    echo " </div>
            </div>
            ";
                }
                // line 193
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 193) == "text")) {
                    // line 194
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 194)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 195);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 196);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 196);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 199
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 199) == "textarea")) {
                    // line 200
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 200)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 201);
                    echo "</label>
              <textarea name=\"option[";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 202);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 202);
                    echo "</textarea>
            </div>
            ";
                }
                // line 205
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 205) == "file")) {
                    // line 206
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 206)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 207);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "\" />
            </div>
            ";
                }
                // line 212
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 212) == "date")) {
                    // line 213
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 213)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 214);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 216);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 222
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 222) == "datetime")) {
                    // line 223
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 223)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 224);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 224);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 226);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 232
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 232) == "time")) {
                    // line 233
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 233)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 234
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 234);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 234);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 236);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 242
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "            ";
        }
        // line 244
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 245
            echo "            <hr>
            <h3>";
            // line 246
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 249
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 251
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 251);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 251);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 257
        echo "            <div class=\"form-group qty\">
              ";
        // line 258
        if ((($context["stock_qty"] ?? null) == "true")) {
            echo " 
              <label class=\"control-label\" for=\"input-quantity\">";
            // line 259
            echo ($context["entry_qty"] ?? null);
            echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
            // line 260
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 261
            echo ($context["product_id"] ?? null);
            echo "\" />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 262
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
<button type=\"button\" id=\"button-buy\" data-loading-text=\"\"  class=\"btn btn-primary btn-lg btn-block\">";
            // line 263
            echo ($context["buy_now"] ?? null);
            echo "</button>
              ";
        } else {
            // line 265
            echo "              <button type=\"button\" id=\"button\" onclick=\"alert('";
            echo ($context["text_outstock"] ?? null);
            echo "');\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block disabled\">";
            echo ($context["text_outstock"] ?? null);
            echo "</button> 
              ";
        }
        // line 267
        echo "               <div class=\"btn-group prd_page\">

            <button type=\"button\" class=\"btn btn-default wishlist\" title=\"";
        // line 269
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_wishlist"] ?? null);
        echo "</button>
            <button type=\"button\" class=\"btn btn-default compare\" title=\"";
        // line 270
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_compare"] ?? null);
        echo "</button>
          </div>
          </div>
            
          ";
        // line 274
        if ((($context["minimum"] ?? null) > 1)) {
            // line 275
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 277
        echo "            </div>

           

           <hr>
       <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 283
        echo ($context["share"] ?? null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
           
            <div class=\"content_product_block d-none\">";
        // line 287
        echo ($context["productblock"] ?? null);
        echo "</div>
            ";
        // line 288
        if (($context["attribute_groups"] ?? null)) {
            // line 289
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 292
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 294
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 294);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 298
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 298));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 299
                    echo "                <tr>
                  <td>";
                    // line 300
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 300);
                    echo "</td>
                  <td>";
                    // line 301
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 301);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 304
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            echo "              </table>
            </div>
            ";
        }
        // line 309
        echo "           
      </div>
      <div id=\"tabs_info\" class=\"product-tab ";
        // line 311
        echo ($context["class"] ?? null);
        echo "\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 313
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 314
        if (($context["attribute_groups"] ?? null)) {
            // line 315
            echo "            <li class=\"d-none\"><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 317
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 318
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 320
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 322
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 323
        if (($context["review_status"] ?? null)) {
            // line 324
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h4>";
            // line 327
            echo ($context["text_write"] ?? null);
            echo "</h4>
                ";
            // line 328
            if (($context["review_guest"] ?? null)) {
                // line 329
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 331
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 332
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 337
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 339
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 344
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 345
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 355
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 357
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 360
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 364
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 366
            echo "              </form>
            </div>
            ";
        }
        // line 368
        echo "</div>
      </div>
     
            </div>
            <div class=\"col-sm-3 product d-none\">
            <div class=\"product-detail-right\"></div></div>
      </div>
     
          
      ";
        // line 377
        if (($context["tags"] ?? null)) {
            // line 378
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 379
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 380
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 380);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 380);
                    echo "</a>,
        ";
                } else {
                    // line 381
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 381);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 381);
                    echo "</a> ";
                }
                // line 382
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 384
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
   
    ";
        // line 387
        echo ($context["column_right"] ?? null);
        echo "
    
     <!-- product page tab code start-->
     ";
        // line 390
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 391
            echo "         ";
            $context["class"] = "col-sm-6";
            // line 392
            echo "         ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 393
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 394
            echo "         ";
        } else {
            // line 395
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 396
            echo "        ";
        }
        // line 397
        echo "    <div id=\"tabs_info\" class=\"product-tab d-none ";
        echo ($context["class"] ?? null);
        echo "\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 399
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 400
        if (($context["attribute_groups"] ?? null)) {
            // line 401
            echo "            <li class=\"d-none\"><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 403
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 404
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 406
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 408
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 409
        if (($context["review_status"] ?? null)) {
            // line 410
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h4>";
            // line 413
            echo ($context["text_write"] ?? null);
            echo "</h4>
                ";
            // line 414
            if (($context["review_guest"] ?? null)) {
                // line 415
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 417
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 418
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 423
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 425
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 430
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 431
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 441
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 443
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 446
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 450
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 452
            echo "              </form>
            </div>
            ";
        }
        // line 454
        echo "</div>
      </div>
        ";
        // line 456
        if (($context["products"] ?? null)) {
            // line 457
            echo "      <div class=\"box related_prd\">
     <div class=\"box-head\"> <div class=\"box-heading\">";
            // line 458
            echo ($context["text_related"] ?? null);
            echo "</div></div>
    <div class=\"box-content\">
    <div id=\"products-related\" class=\"related-products\">
      
      ";
            // line 462
            $context["sliderFor"] = 5;
            // line 463
            echo "      ";
            $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
            echo " 
      
        ";
            // line 465
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 466
                echo "          <div class=\"customNavigation\">
            <a class=\"fa prev fa-arrow-left\">&nbsp;</a>
            <a class=\"fa next fa-arrow-right\">&nbsp;</a>
          </div>  
        ";
            }
            // line 471
            echo "        
        <div class=\"box-product ";
            // line 472
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "related-carousel";
            } else {
                echo "related-grid";
            }
            echo "\">
            ";
            // line 473
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 474
                echo "        <div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
           <div class=\"product-block product-thumb transition\">
              <div class=\"product-block-inner\">     
      <div class=\"image ";
                // line 477
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 477) == 0)) {
                    echo "outstock";
                }
                echo "\">
     ";
                // line 478
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 478)) {
                    // line 479
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 479);
                    echo "\">
        <button class=\"wishlist\" type=\"button\"  title=\"";
                    // line 480
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 480);
                    echo " ');\"></button>
      <img src=\"";
                    // line 481
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 481);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 481);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 481);
                    echo "\" class=\"img-responsive reg-image\"/>
      <div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                    // line 482
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 482);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 482);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 482);
                    echo "\"/>
      </div>
      </a>
      ";
                } else {
                    // line 486
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 486);
                    echo "\">
      <img src=\"";
                    // line 487
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 487);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 487);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 487);
                    echo "\" class=\"img-responsive\"/></a>
      ";
                }
                // line 489
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 489)) {
                    // line 490
                    echo "        <span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 490);
                    echo "%</span>
      ";
                }
                // line 492
                echo "       ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 492) == 0)) {
                    // line 493
                    echo "                <span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
              ";
                }
                // line 495
                echo "      </div>
      <div class=\"product-details\">
      <div class=\"caption\">
      ";
                // line 499
                echo "      <h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 499);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 499);
                echo " </a></h4>
      ";
                // line 500
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 500)) {
                    // line 501
                    echo "       <div class=\"rating\">
       ";
                    // line 502
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 503
                        echo "       ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 503) < $context["i"])) {
                            // line 504
                            echo "       <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
         ";
                        } else {
                            // line 506
                            echo "         <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
         ";
                        }
                        // line 508
                        echo "         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 509
                    echo "         &nbsp;<span style=\"cursor:pointer;\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 509);
                    echo "\" class=\"total-review";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 509);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 509);
                    echo " Review</span>
       </div>
      ";
                }
                // line 512
                echo "      
      ";
                // line 513
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 513)) {
                    // line 514
                    echo "      <p class=\"price\">
      ";
                    // line 515
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 515)) {
                        // line 516
                        echo "      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 516);
                        echo "
      ";
                    } else {
                        // line 518
                        echo "      <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 518);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 518);
                        echo "</span>
      ";
                    }
                    // line 520
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 520)) {
                        // line 521
                        echo "      <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 521);
                        echo "</span>
      ";
                    }
                    // line 523
                    echo "      </p>
      ";
                }
                // line 525
                echo "      <div class=\"product_hover_block\">
\t\t\t  <div class=\"action\">
          ";
                // line 527
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 527) > 0)) {
                    // line 528
                    echo "         <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 528);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
         ";
                } else {
                    // line 530
                    echo "         <button type=\"button\" class=\"cart_button out_of_stock\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 530);
                    echo "');\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
         ";
                }
                // line 532
                echo "\t\t\t\t <div class=\"quickview-button\">
\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 533
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 533);
                echo "\"></a>
\t\t\t\t </div>
\t\t\t\t <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 535
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 535);
                echo " ');\"></button>
\t\t\t  </div>
\t\t\t</div>
      </div>                  
    </div>
    </div>
          </div>
        </div>
        
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 545
            echo "        </div>
        <span class=\"related_default_width\" style=\"display:none; visibility:hidden\"></span>
    </div>
    </div>
    </div>
        ";
        }
        // line 551
        echo "  </div>
</div>

<script type=\"text/javascript\">
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
  \$.ajax({
    url: 'index.php?route=product/product/getRecurringDescription',
    type: 'post',
    data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
    dataType: 'json',
    beforeSend: function() {
      \$('#recurring-description').html('');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();

      if (json['success']) {
        \$('#recurring-description').html(json['success']);
      }
    }
  });
});
</script> 
<script type=\"text/javascript\">
\$('#button-buy').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
        window.location.href = 'index.php?route=checkout/checkout';
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
\$('#button-cart').on('click', function() {
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
    dataType: 'json',
    beforeSend: function() {
      \$('#button-cart').button('loading');
    },
    complete: function() {
      \$('#button-cart').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
        \$.notify({
          message: json['success'],
          target: '_blank'
        },{
          // settings
          element: 'body',
          position: null,
          type: \"info\",
          allow_dismiss: true,
          newest_on_top: false,
          placement: {
            from: \"top\",
            align: \"center\"
          },
          offset: 0,
          spacing: 10,
          z_index: 2031,
          delay: 5000,
          timer: 1000,
          url_target: '_blank',
          mouse_over: null,
          animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
          },
          onShow: null,
          onShown: null,
          onClose: null,
          onClosed: null,
          icon_type: 'class',
          template: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-success\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&nbsp;&times;</button>' +
            '<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
              '<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
          '</div>' 
        });

        \$('#cart > button').html('<div class=\"cart_detail\"><div class=\"cart_image\"></div><span id=\"cart-total\"> ' + json['total'] + '</span>'  + '</div>');

        //\$('html, body').animate({ scrollTop: 0 }, 'slow');

        \$('#cart > ul').load('index.php?route=common/cart/info ul li');
      }
    },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
  });
});
</script> 
<script type=\"text/javascript\">
\$('.date').datetimepicker({
  language: '";
        // line 721
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 726
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 732
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
</script> 
<script type=\"text/javascript\">
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 799
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 803
        echo ($context["product_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#form-review\").serialize(),
    beforeSend: function() {
      \$('#button-review').button('loading');
    },
    complete: function() {
      \$('#button-review').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible').remove();

      if (json['error']) {
        \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'rating\\']:checked').prop('checked', false);
      }
    }
  });
});

//\$(document).ready(function() {
//  \$('.thumbnails').magnificPopup({
//    type:'image',
//    delegate: 'a',
//    gallery: {
//      enabled: true
//    }
//  });
//});


\$(document).ready(function() {
  var ramswaroop = new URLSearchParams(window.location.search);
  var tarun = ramswaroop.has('review');
  if (tarun == true) {
    setTimeout(function(){ 
      \$('html, body').animate({scrollTop: \$('#tabs_info').offset().top}, 'slow'); 
      \$('a[href=\\'#tab-review\\']').trigger('click');
    }, 1000);
    return false;
  }
});

\$(document).ready(function() {
if (\$(window).width() > 767) {
    \$(\"#tmzoom\").elevateZoom({
        
        gallery:'additional-carousel',
        //inner zoom         
                 
        zoomType : \"inner\", 
        cursor: \"crosshair\" 
        
        /*//tint
        
        tint:true, 
        tintColour:'#F90', 
        tintOpacity:0.5
        
        //lens zoom
        
        zoomType : \"lens\", 
        lensShape : \"round\", 
        lensSize : 200 
        
        //Mousewheel zoom
        
        scrollZoom : true*/
        
        
      });
    var z_index = 0;
                  
                  \$(document).on('click', '.thumbnail', function () {
                    \$('.thumbnails').magnificPopup('open', z_index);
                    return false;
                  });
              
                  \$('.additional-carousel a').click(function() {
                    var smallImage = \$(this).attr('data-image');
                    var largeImage = \$(this).attr('data-zoom-image');
                    var ez =   \$('#tmzoom').data('elevateZoom');  
                    \$('.thumbnail').attr('href', largeImage);  
                    ez.swaptheimage(smallImage, largeImage); 
                    z_index = \$(this).index('.additional-carousel a');
                    return false;
                  });
      
  }else{
    \$(document).on('click', '.thumbnail', function () {
    \$('.thumbnails').magnificPopup('open', 0);
    return false;
    });
  }
});
\$(document).ready(function() {     
  \$('.thumbnails').magnificPopup({
    delegate: 'a.elevatezoom-gallery',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-with-zoom',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title');
      }
    }
  });
});

\$('#custom_tab a').tabs();
 \$('#tabs a').tabs();

</script>

";
        // line 931
        if ((array_key_exists("update_price_status", $context) && ($context["update_price_status"] ?? null))) {
            // line 932
            echo "          
          <script type=\"text/javascript\">
          
            \$(\"#product input[type='checkbox']\").click(function() {
              changePrice();
            });
            
            \$(\"#product input[type='radio']\").click(function() {
              changePrice();
            });
            
            \$(\"#product select\").change(function() {
              changePrice();
            });
            
            \$(\"#input-quantity\").keyup(function() {
              changePrice();
            });
            
            function changePrice() {
              \$.ajax({
                url: 'index.php?route=product/product/updatePrice&product_id=";
            // line 953
            echo ($context["product_id"] ?? null);
            echo "',
                type: 'post',
                dataType: 'json',
                data: \$('#product input[name=\\'quantity\\'], #product select, #product input[type=\\'checkbox\\']:checked, #product input[type=\\'radio\\']:checked'),
                beforeSend: function() {
                  
                },
                complete: function() {
                  
                },
                success: function(json) {
                  \$('.alert-success, .alert-danger').remove();
                  
                  if(json['new_price_found']) {
                    \$('.new-prices').html(json['total_price']);
                    \$('.product-tax').html(json['tax_price']);
                  } else {
                    \$('.old-prices').html(json['total_price']);
                    \$('.product-tax').html(json['tax_price']);
                  }
                }
              });
            }
          </script>
          
        ";
        }
        // line 979
        echo " 
";
        // line 980
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2120 => 980,  2117 => 979,  2088 => 953,  2065 => 932,  2063 => 931,  1932 => 803,  1925 => 799,  1855 => 732,  1846 => 726,  1838 => 721,  1666 => 551,  1658 => 545,  1640 => 535,  1633 => 533,  1630 => 532,  1620 => 530,  1610 => 528,  1608 => 527,  1604 => 525,  1600 => 523,  1592 => 521,  1589 => 520,  1581 => 518,  1575 => 516,  1573 => 515,  1570 => 514,  1568 => 513,  1565 => 512,  1554 => 509,  1548 => 508,  1544 => 506,  1540 => 504,  1537 => 503,  1533 => 502,  1530 => 501,  1528 => 500,  1521 => 499,  1516 => 495,  1510 => 493,  1507 => 492,  1501 => 490,  1498 => 489,  1489 => 487,  1484 => 486,  1473 => 482,  1465 => 481,  1459 => 480,  1454 => 479,  1452 => 478,  1446 => 477,  1435 => 474,  1431 => 473,  1417 => 472,  1414 => 471,  1407 => 466,  1405 => 465,  1399 => 463,  1397 => 462,  1390 => 458,  1387 => 457,  1385 => 456,  1381 => 454,  1376 => 452,  1370 => 450,  1361 => 446,  1355 => 443,  1350 => 441,  1337 => 431,  1333 => 430,  1325 => 425,  1320 => 423,  1312 => 418,  1308 => 417,  1304 => 415,  1302 => 414,  1298 => 413,  1293 => 410,  1291 => 409,  1287 => 408,  1283 => 406,  1277 => 404,  1274 => 403,  1268 => 401,  1266 => 400,  1262 => 399,  1256 => 397,  1253 => 396,  1250 => 395,  1247 => 394,  1244 => 393,  1241 => 392,  1238 => 391,  1236 => 390,  1230 => 387,  1223 => 384,  1214 => 382,  1207 => 381,  1197 => 380,  1193 => 379,  1188 => 378,  1186 => 377,  1175 => 368,  1170 => 366,  1164 => 364,  1155 => 360,  1149 => 357,  1144 => 355,  1131 => 345,  1127 => 344,  1119 => 339,  1114 => 337,  1106 => 332,  1102 => 331,  1098 => 329,  1096 => 328,  1092 => 327,  1087 => 324,  1085 => 323,  1081 => 322,  1077 => 320,  1071 => 318,  1068 => 317,  1062 => 315,  1060 => 314,  1056 => 313,  1051 => 311,  1047 => 309,  1042 => 306,  1035 => 304,  1026 => 301,  1022 => 300,  1019 => 299,  1015 => 298,  1008 => 294,  1004 => 292,  1000 => 291,  996 => 289,  994 => 288,  990 => 287,  983 => 283,  975 => 277,  969 => 275,  967 => 274,  956 => 270,  948 => 269,  944 => 267,  934 => 265,  929 => 263,  923 => 262,  919 => 261,  915 => 260,  911 => 259,  907 => 258,  904 => 257,  898 => 253,  887 => 251,  883 => 250,  879 => 249,  873 => 246,  870 => 245,  867 => 244,  864 => 243,  858 => 242,  845 => 236,  838 => 234,  831 => 233,  828 => 232,  815 => 226,  808 => 224,  801 => 223,  798 => 222,  785 => 216,  778 => 214,  771 => 213,  768 => 212,  760 => 209,  752 => 208,  748 => 207,  741 => 206,  738 => 205,  726 => 202,  720 => 201,  713 => 200,  710 => 199,  698 => 196,  692 => 195,  685 => 194,  682 => 193,  677 => 190,  669 => 188,  662 => 187,  660 => 186,  655 => 185,  639 => 184,  633 => 183,  629 => 181,  623 => 180,  619 => 179,  612 => 178,  609 => 177,  604 => 174,  596 => 172,  589 => 171,  587 => 170,  583 => 169,  565 => 168,  559 => 167,  555 => 165,  549 => 164,  545 => 163,  538 => 162,  535 => 161,  530 => 158,  523 => 156,  516 => 155,  514 => 154,  507 => 153,  503 => 152,  499 => 151,  493 => 150,  487 => 149,  480 => 148,  477 => 147,  473 => 146,  468 => 145,  466 => 144,  463 => 143,  459 => 141,  456 => 140,  445 => 138,  441 => 137,  438 => 136,  435 => 135,  427 => 133,  424 => 132,  416 => 130,  413 => 129,  407 => 126,  403 => 125,  398 => 124,  392 => 121,  389 => 120,  387 => 119,  384 => 118,  382 => 117,  377 => 114,  369 => 112,  367 => 111,  363 => 109,  358 => 107,  353 => 106,  350 => 105,  344 => 103,  341 => 102,  333 => 100,  331 => 99,  324 => 98,  314 => 96,  312 => 95,  307 => 92,  301 => 89,  296 => 88,  290 => 87,  286 => 85,  282 => 83,  279 => 82,  275 => 81,  272 => 80,  270 => 79,  266 => 78,  260 => 75,  257 => 74,  254 => 73,  251 => 72,  248 => 71,  245 => 70,  243 => 69,  239 => 67,  232 => 62,  225 => 58,  203 => 55,  199 => 53,  195 => 52,  176 => 48,  167 => 44,  164 => 43,  157 => 39,  155 => 38,  148 => 35,  145 => 34,  142 => 33,  127 => 31,  122 => 29,  119 => 28,  117 => 27,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  97 => 20,  95 => 19,  91 => 18,  88 => 17,  77 => 15,  73 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/product/product.twig", "");
    }
}
