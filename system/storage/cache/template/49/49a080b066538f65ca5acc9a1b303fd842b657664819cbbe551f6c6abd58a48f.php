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

/* Demo-Store/template/checkout/confirm.twig */
class __TwigTemplate_aa46e299b2eaf552a36dc8ef4680cbf653907871f7d5315d58d902c13e13063f extends \Twig\Template
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
        if ( !($context["redirect"] ?? null)) {
            // line 2
            echo "
";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 4
                echo " <table class=\"table table-bordered shopping-cart responsive\">
 \t<tr>
 \t\t<td class=\"text-center\">";
                // line 6
                echo ($context["column_name"] ?? null);
                echo "</td>
 \t\t<td class=\"text-center\"><a href=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
                echo "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
        &nbsp;<small> - ";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 8);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 8);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 9)) {
                    echo " <br />
        <span class=\"label label-info\">";
                    // line 10
                    echo ($context["text_recurring_item"] ?? null);
                    echo "</span> <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 10);
                    echo "</small> ";
                }
                echo "</td>
 \t</tr>

 \t<tr>
 \t\t<td class=\"text-center\">";
                // line 14
                echo ($context["column_model"] ?? null);
                echo "</td>
 \t\t<td class=\"text-center\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 15);
                echo "</td>
 \t</tr>

 \t<tr>
 \t\t<td class=\"text-center\">";
                // line 19
                echo ($context["column_quantity"] ?? null);
                echo "</td>
 \t\t<td class=\"text-center\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 20);
                echo "</td>
 \t</tr>

 \t<tr>
 \t\t<td class=\"text-center\">";
                // line 24
                echo ($context["column_price"] ?? null);
                echo "</td>
 \t\t<td class=\"text-center\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25);
                echo "</td>
 \t</tr>

 \t<tr>
 \t\t<td class=\"text-center\">";
                // line 29
                echo ($context["column_total"] ?? null);
                echo "</td>
 \t\t<td class=\"text-center\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 30);
                echo "</td>
 \t</tr>
 </table>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 36
                echo "<table class=\"table table-bordered shopping-cart responsive\">

\t<tr>
 \t\t<td class=\"text-center\">";
                // line 39
                echo ($context["column_name"] ?? null);
                echo "</td>
 \t\t<td class=\"text-center\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 40);
                echo "</td>
 \t</tr>

 \t<tr>
 \t\t<td class=\"text-center\">";
                // line 44
                echo ($context["column_quantity"] ?? null);
                echo "</td>
 \t\t<td class=\"text-center\">1</td>
 \t</tr>

 \t<tr>
 \t\t<td class=\"text-center\">";
                // line 49
                echo ($context["column_price"] ?? null);
                echo "</td>
 \t\t<td class=\"text-center\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 50);
                echo "</td>
 \t</tr>

 \t<tr>
 \t\t<td class=\"text-center\">";
                // line 54
                echo ($context["column_total"] ?? null);
                echo "</td>
 \t\t<td class=\"text-center\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 55);
                echo "</td>
 \t</tr>

</table>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "


\t<table class=\"table table-bordered shopping-cart responsive\">
\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 65
                echo "    <tr>
      <td class=\"text-right\"><strong>";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 66);
                echo ":</strong></td>
      <td class=\"text-right\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 67);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "</table>
    

<div class=\"table-responsive full-view\">
  <table class=\"table table-bordered table-hover shopping-cart\">
    <thead>
      <tr>
        <td class=\"text-left\">";
            // line 77
            echo ($context["column_name"] ?? null);
            echo "</td>
        <td class=\"text-left\">";
            // line 78
            echo ($context["column_model"] ?? null);
            echo "</td>
        <td class=\"text-right\">";
            // line 79
            echo ($context["column_quantity"] ?? null);
            echo "</td>
        <td class=\"text-right\">";
            // line 80
            echo ($context["column_price"] ?? null);
            echo "</td>
        <td class=\"text-right\">";
            // line 81
            echo ($context["column_total"] ?? null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 87
                echo "    <tr>
      <td class=\"text-left\"><a href=\"";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 88);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 88);
                echo "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 88));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
        &nbsp;<small> - ";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 89);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 89);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 90)) {
                    echo " <br />
        <span class=\"label label-info\">";
                    // line 91
                    echo ($context["text_recurring_item"] ?? null);
                    echo "</span> <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 91);
                    echo "</small> ";
                }
                echo "</td>
      <td class=\"text-left\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 92);
                echo "</td>
      <td class=\"text-right\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 93);
                echo "</td>
      <td class=\"text-right\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94);
                echo "</td>
      <td class=\"text-right\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 95);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 99
                echo "    <tr>
      <td class=\"text-left\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 100);
                echo "</td>
      <td class=\"text-left\"></td>
      <td class=\"text-right\">1</td>
      <td class=\"text-right\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 103);
                echo "</td>
      <td class=\"text-right\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 104);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "      </tbody>
    
    <tfoot>
    
    ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 112
                echo "    <tr>
      <td colspan=\"4\" class=\"text-right\"><strong>";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 113);
                echo ":</strong></td>
      <td class=\"text-right total\">";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 114);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "      </tfoot>
    
  </table>
</div>
";
            // line 121
            echo ($context["payment"] ?? null);
            echo "
";
        } else {
            // line 122
            echo " 
<script type=\"text/javascript\"><!--
location = '";
            // line 124
            echo ($context["redirect"] ?? null);
            echo "';
//--></script> 
";
        }
        // line 126
        echo " ";
    }

    public function getTemplateName()
    {
        return "Demo-Store/template/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 126,  380 => 124,  376 => 122,  371 => 121,  365 => 117,  356 => 114,  352 => 113,  349 => 112,  345 => 111,  339 => 107,  330 => 104,  326 => 103,  320 => 100,  317 => 99,  312 => 98,  303 => 95,  299 => 94,  295 => 93,  291 => 92,  283 => 91,  278 => 90,  269 => 89,  259 => 88,  256 => 87,  252 => 86,  244 => 81,  240 => 80,  236 => 79,  232 => 78,  228 => 77,  219 => 70,  210 => 67,  206 => 66,  203 => 65,  199 => 64,  193 => 60,  182 => 55,  178 => 54,  171 => 50,  167 => 49,  159 => 44,  152 => 40,  148 => 39,  143 => 36,  139 => 35,  136 => 34,  126 => 30,  122 => 29,  115 => 25,  111 => 24,  104 => 20,  100 => 19,  93 => 15,  89 => 14,  78 => 10,  73 => 9,  64 => 8,  54 => 7,  50 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Demo-Store/template/checkout/confirm.twig", "");
    }
}
