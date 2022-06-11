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
class __TwigTemplate_e3bafa2cfc33bd5dba16eb7de08bb278e10ecab41c4a7ee2a17ddde2fe14d7cf extends \Twig\Template
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
            $context["class"] = "col-sm-5 product-right";
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
              ";
        } else {
            // line 264
            echo "              <button type=\"button\" id=\"button\" onclick=\"alert('";
            echo ($context["text_outstock"] ?? null);
            echo "');\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block disabled\">";
            echo ($context["text_outstock"] ?? null);
            echo "</button> 
              ";
        }
        // line 266
        echo "               <div class=\"btn-group prd_page\">

            <button type=\"button\" class=\"btn btn-default wishlist\" title=\"";
        // line 268
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_wishlist"] ?? null);
        echo "</button>
            <button type=\"button\" class=\"btn btn-default compare\" title=\"";
        // line 269
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_compare"] ?? null);
        echo "</button>
          </div>
          </div>
            
          ";
        // line 273
        if ((($context["minimum"] ?? null) > 1)) {
            // line 274
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 276
        echo "            </div>

           

           <hr>
       <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 282
        echo ($context["share"] ?? null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
           
            <div class=\"content_product_block\">";
        // line 286
        echo ($context["productblock"] ?? null);
        echo "</div>
           
      </div>
     
            </div>
            <div class=\"col-sm-3 product\">
            <div class=\"product-detail-right\"></div></div>
      </div>
     
          
      ";
        // line 296
        if (($context["tags"] ?? null)) {
            // line 297
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 299
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 299);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 299);
                    echo "</a>,
        ";
                } else {
                    // line 300
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 300);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 300);
                    echo "</a> ";
                }
                // line 301
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 303
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
   
    ";
        // line 306
        echo ($context["column_right"] ?? null);
        echo "
    
     <!-- product page tab code start-->
     ";
        // line 309
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 310
            echo "         ";
            $context["class"] = "col-sm-6";
            // line 311
            echo "         ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 312
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 313
            echo "         ";
        } else {
            // line 314
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 315
            echo "        ";
        }
        // line 316
        echo "    <div id=\"tabs_info\" class=\"product-tab ";
        echo ($context["class"] ?? null);
        echo "\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 318
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 319
        if (($context["attribute_groups"] ?? null)) {
            // line 320
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 322
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 323
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 325
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 327
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 328
        if (($context["attribute_groups"] ?? null)) {
            // line 329
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 332
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 334
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 334);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 338
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 338));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 339
                    echo "                <tr>
                  <td>";
                    // line 340
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 340);
                    echo "</td>
                  <td>";
                    // line 341
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 341);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 344
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 346
            echo "              </table>
            </div>
            ";
        }
        // line 349
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 350
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h4>";
            // line 353
            echo ($context["text_write"] ?? null);
            echo "</h4>
                ";
            // line 354
            if (($context["review_guest"] ?? null)) {
                // line 355
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 357
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 358
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 363
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 365
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 370
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 371
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
                // line 381
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 383
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 386
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 390
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 392
            echo "              </form>
            </div>
            ";
        }
        // line 394
        echo "</div>
      </div>
        ";
        // line 396
        if (($context["products"] ?? null)) {
            // line 397
            echo "      <div class=\"box related_prd\">
     <div class=\"box-head\"> <div class=\"box-heading\">";
            // line 398
            echo ($context["text_related"] ?? null);
            echo "</div></div>
    <div class=\"box-content\">
    <div id=\"products-related\" class=\"related-products\">
      
      ";
            // line 402
            $context["sliderFor"] = 5;
            // line 403
            echo "      ";
            $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
            echo " 
      
        ";
            // line 405
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 406
                echo "          <div class=\"customNavigation\">
            <a class=\"fa prev fa-arrow-left\">&nbsp;</a>
            <a class=\"fa next fa-arrow-right\">&nbsp;</a>
          </div>  
        ";
            }
            // line 411
            echo "        
        <div class=\"box-product ";
            // line 412
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
            // line 413
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 414
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
                // line 417
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 417) == 0)) {
                    echo "outstock";
                }
                echo "\">
     ";
                // line 418
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 418)) {
                    // line 419
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 419);
                    echo "\">
        <button class=\"wishlist\" type=\"button\"  title=\"";
                    // line 420
                    echo ($context["button_wishlist"] ?? null);
                    echo " \" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 420);
                    echo " ');\"></button>
      <img src=\"";
                    // line 421
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 421);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 421);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 421);
                    echo "\" class=\"img-responsive reg-image\"/>
      <div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                    // line 422
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 422);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 422);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 422);
                    echo "\"/>
      </div>
      </a>
      ";
                } else {
                    // line 426
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 426);
                    echo "\">
      <img src=\"";
                    // line 427
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 427);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 427);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 427);
                    echo "\" class=\"img-responsive\"/></a>
      ";
                }
                // line 429
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 429)) {
                    // line 430
                    echo "        <span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 430);
                    echo "%</span>
      ";
                }
                // line 432
                echo "       ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 432) == 0)) {
                    // line 433
                    echo "                <span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
              ";
                }
                // line 435
                echo "      </div>
      <div class=\"product-details\">
      <div class=\"caption\">
      ";
                // line 439
                echo "      <h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 439);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 439);
                echo " </a></h4>
      ";
                // line 440
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 440)) {
                    // line 441
                    echo "       <div class=\"rating\">
       ";
                    // line 442
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 443
                        echo "       ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 443) < $context["i"])) {
                            // line 444
                            echo "       <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
         ";
                        } else {
                            // line 446
                            echo "         <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
         ";
                        }
                        // line 448
                        echo "         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 449
                    echo "         &nbsp;<span style=\"cursor:pointer;\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 449);
                    echo "\" class=\"total-review";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 449);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "review", [], "any", false, false, false, 449);
                    echo " Review</span>
       </div>
      ";
                }
                // line 452
                echo "      
      ";
                // line 453
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 453)) {
                    // line 454
                    echo "      <p class=\"price\">
      ";
                    // line 455
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 455)) {
                        // line 456
                        echo "      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 456);
                        echo "
      ";
                    } else {
                        // line 458
                        echo "      <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 458);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 458);
                        echo "</span>
      ";
                    }
                    // line 460
                    echo "      ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 460)) {
                        // line 461
                        echo "      <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 461);
                        echo "</span>
      ";
                    }
                    // line 463
                    echo "      </p>
      ";
                }
                // line 465
                echo "      <div class=\"product_hover_block\">
\t\t\t  <div class=\"action\">
          ";
                // line 467
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 467) > 0)) {
                    // line 468
                    echo "         <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 468);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
         ";
                } else {
                    // line 470
                    echo "         <button type=\"button\" class=\"cart_button out_of_stock\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 470);
                    echo "');\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
         ";
                }
                // line 472
                echo "\t\t\t\t <div class=\"quickview-button\">
\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 473
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 473);
                echo "\"></a>
\t\t\t\t </div>
\t\t\t\t <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 475
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 475);
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
            // line 485
            echo "        </div>
        <span class=\"related_default_width\" style=\"display:none; visibility:hidden\"></span>
    </div>
    </div>
    </div>
        ";
        }
        // line 491
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
        // line 608
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 613
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 619
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
        // line 686
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 690
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
        // line 818
        if (((isset($context["update_price_status"]) || array_key_exists("update_price_status", $context)) && ($context["update_price_status"] ?? null))) {
            // line 819
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
            // line 840
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
        // line 866
        echo " 
";
        // line 867
        echo ($context["footer"] ?? null);
        echo " 
";
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
        return array (  1934 => 867,  1931 => 866,  1902 => 840,  1879 => 819,  1877 => 818,  1746 => 690,  1739 => 686,  1669 => 619,  1660 => 613,  1652 => 608,  1533 => 491,  1525 => 485,  1507 => 475,  1500 => 473,  1497 => 472,  1487 => 470,  1477 => 468,  1475 => 467,  1471 => 465,  1467 => 463,  1459 => 461,  1456 => 460,  1448 => 458,  1442 => 456,  1440 => 455,  1437 => 454,  1435 => 453,  1432 => 452,  1421 => 449,  1415 => 448,  1411 => 446,  1407 => 444,  1404 => 443,  1400 => 442,  1397 => 441,  1395 => 440,  1388 => 439,  1383 => 435,  1377 => 433,  1374 => 432,  1368 => 430,  1365 => 429,  1356 => 427,  1351 => 426,  1340 => 422,  1332 => 421,  1326 => 420,  1321 => 419,  1319 => 418,  1313 => 417,  1302 => 414,  1298 => 413,  1284 => 412,  1281 => 411,  1274 => 406,  1272 => 405,  1266 => 403,  1264 => 402,  1257 => 398,  1254 => 397,  1252 => 396,  1248 => 394,  1243 => 392,  1237 => 390,  1228 => 386,  1222 => 383,  1217 => 381,  1204 => 371,  1200 => 370,  1192 => 365,  1187 => 363,  1179 => 358,  1175 => 357,  1171 => 355,  1169 => 354,  1165 => 353,  1160 => 350,  1157 => 349,  1152 => 346,  1145 => 344,  1136 => 341,  1132 => 340,  1129 => 339,  1125 => 338,  1118 => 334,  1114 => 332,  1110 => 331,  1106 => 329,  1104 => 328,  1100 => 327,  1096 => 325,  1090 => 323,  1087 => 322,  1081 => 320,  1079 => 319,  1075 => 318,  1069 => 316,  1066 => 315,  1063 => 314,  1060 => 313,  1057 => 312,  1054 => 311,  1051 => 310,  1049 => 309,  1043 => 306,  1036 => 303,  1027 => 301,  1020 => 300,  1010 => 299,  1006 => 298,  1001 => 297,  999 => 296,  986 => 286,  979 => 282,  971 => 276,  965 => 274,  963 => 273,  952 => 269,  944 => 268,  940 => 266,  930 => 264,  923 => 262,  919 => 261,  915 => 260,  911 => 259,  907 => 258,  904 => 257,  898 => 253,  887 => 251,  883 => 250,  879 => 249,  873 => 246,  870 => 245,  867 => 244,  864 => 243,  858 => 242,  845 => 236,  838 => 234,  831 => 233,  828 => 232,  815 => 226,  808 => 224,  801 => 223,  798 => 222,  785 => 216,  778 => 214,  771 => 213,  768 => 212,  760 => 209,  752 => 208,  748 => 207,  741 => 206,  738 => 205,  726 => 202,  720 => 201,  713 => 200,  710 => 199,  698 => 196,  692 => 195,  685 => 194,  682 => 193,  677 => 190,  669 => 188,  662 => 187,  660 => 186,  655 => 185,  639 => 184,  633 => 183,  629 => 181,  623 => 180,  619 => 179,  612 => 178,  609 => 177,  604 => 174,  596 => 172,  589 => 171,  587 => 170,  583 => 169,  565 => 168,  559 => 167,  555 => 165,  549 => 164,  545 => 163,  538 => 162,  535 => 161,  530 => 158,  523 => 156,  516 => 155,  514 => 154,  507 => 153,  503 => 152,  499 => 151,  493 => 150,  487 => 149,  480 => 148,  477 => 147,  473 => 146,  468 => 145,  466 => 144,  463 => 143,  459 => 141,  456 => 140,  445 => 138,  441 => 137,  438 => 136,  435 => 135,  427 => 133,  424 => 132,  416 => 130,  413 => 129,  407 => 126,  403 => 125,  398 => 124,  392 => 121,  389 => 120,  387 => 119,  384 => 118,  382 => 117,  377 => 114,  369 => 112,  367 => 111,  363 => 109,  358 => 107,  353 => 106,  350 => 105,  344 => 103,  341 => 102,  333 => 100,  331 => 99,  324 => 98,  314 => 96,  312 => 95,  307 => 92,  301 => 89,  296 => 88,  290 => 87,  286 => 85,  282 => 83,  279 => 82,  275 => 81,  272 => 80,  270 => 79,  266 => 78,  260 => 75,  257 => 74,  254 => 73,  251 => 72,  248 => 71,  245 => 70,  243 => 69,  239 => 67,  232 => 62,  225 => 58,  203 => 55,  199 => 53,  195 => 52,  176 => 48,  167 => 44,  164 => 43,  157 => 39,  155 => 38,  148 => 35,  145 => 34,  142 => 33,  127 => 31,  122 => 29,  119 => 28,  117 => 27,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  97 => 20,  95 => 19,  91 => 18,  88 => 17,  77 => 15,  73 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/product/product.twig", "");
    }
}
