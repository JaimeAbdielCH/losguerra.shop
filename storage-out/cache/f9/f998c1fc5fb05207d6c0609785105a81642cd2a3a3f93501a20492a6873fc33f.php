<?php

/* extension/payment/pp_express_transaction.twig */
class __TwigTemplate_0ac7bf390c84321c92239e3376f6c524c89181c213e981b860712ed633719703 extends Twig_Template
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
        echo "<table class=\"table table-striped table-bordered\">
  <thead>
    <tr>
      <td class=\"text-left\">";
        // line 4
        echo (isset($context["column_transaction"]) ? $context["column_transaction"] : null);
        echo "</td>
      <td class=\"text-left\">";
        // line 5
        echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
        echo "</td>
      <td class=\"text-left\">";
        // line 6
        echo (isset($context["column_type"]) ? $context["column_type"] : null);
        echo "</td>
      <td class=\"text-left\">";
        // line 7
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
      <td class=\"text-left\">";
        // line 8
        echo (isset($context["column_pending_reason"]) ? $context["column_pending_reason"] : null);
        echo "</td>
      <td class=\"text-left\">";
        // line 9
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
      <td class=\"text-left\">";
        // line 10
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
    </tr>
  </thead>
  <tbody>
  
  ";
        // line 15
        if ((isset($context["transactions"]) ? $context["transactions"] : null)) {
            // line 16
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 17
                echo "  <tr>
    <td class=\"text-left\">";
                // line 18
                echo $this->getAttribute($context["transaction"], "transaction_id", array());
                echo "</td>
    <td class=\"text-left\">";
                // line 19
                echo $this->getAttribute($context["transaction"], "amount", array());
                echo "</td>
    <td class=\"text-left\">";
                // line 20
                echo $this->getAttribute($context["transaction"], "payment_type", array());
                echo "</td>
    <td class=\"text-left\">";
                // line 21
                echo $this->getAttribute($context["transaction"], "payment_status", array());
                echo "</td>
    <td class=\"text-left\">";
                // line 22
                echo $this->getAttribute($context["transaction"], "pending_reason", array());
                echo "</td>
    <td class=\"text-left\">";
                // line 23
                echo $this->getAttribute($context["transaction"], "date_added", array());
                echo "</td>
    <td class=\"text-left\">
      ";
                // line 25
                if ($this->getAttribute($context["transaction"], "transaction_id", array())) {
                    // line 26
                    echo "        <a href=\"";
                    echo $this->getAttribute($context["transaction"], "view", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_view"]) ? $context["button_view"] : null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
        ";
                    // line 27
                    if ((($this->getAttribute($context["transaction"], "payment_type", array()) == "instant") && (($this->getAttribute($context["transaction"], "payment_status", array()) == "Completed") || ($this->getAttribute($context["transaction"], "payment_status", array()) == "Partially-Refunded")))) {
                        // line 28
                        echo "          <a href=\"";
                        echo $this->getAttribute($context["transaction"], "refund", array());
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_refund"]) ? $context["button_refund"] : null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a>&nbsp;
        ";
                    }
                    // line 30
                    echo "      ";
                } else {
                    // line 31
                    echo "        <button type=\"button\" value=\"";
                    echo $this->getAttribute($context["transaction"], "resend", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_resend"]) ? $context["button_resend"] : null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></button>
      ";
                }
                // line 33
                echo "    </td>
  </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "  ";
        } else {
            // line 37
            echo "  <tr>
    <td class=\"text-center\" colspan=\"7\">";
            // line 38
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
  </tr>
  ";
        }
        // line 41
        echo "  </tbody>
  
</table>
";
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_express_transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  135 => 38,  132 => 37,  129 => 36,  121 => 33,  113 => 31,  110 => 30,  102 => 28,  100 => 27,  93 => 26,  91 => 25,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  63 => 17,  58 => 16,  56 => 15,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <table class="table table-striped table-bordered">*/
/*   <thead>*/
/*     <tr>*/
/*       <td class="text-left">{{ column_transaction }}</td>*/
/*       <td class="text-left">{{ column_amount }}</td>*/
/*       <td class="text-left">{{ column_type }}</td>*/
/*       <td class="text-left">{{ column_status }}</td>*/
/*       <td class="text-left">{{ column_pending_reason }}</td>*/
/*       <td class="text-left">{{ column_date_added }}</td>*/
/*       <td class="text-left">{{ column_action }}</td>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*   */
/*   {% if transactions %}*/
/*   {% for transaction in transactions %}*/
/*   <tr>*/
/*     <td class="text-left">{{ transaction.transaction_id }}</td>*/
/*     <td class="text-left">{{ transaction.amount }}</td>*/
/*     <td class="text-left">{{ transaction.payment_type }}</td>*/
/*     <td class="text-left">{{ transaction.payment_status }}</td>*/
/*     <td class="text-left">{{ transaction.pending_reason }}</td>*/
/*     <td class="text-left">{{ transaction.date_added }}</td>*/
/*     <td class="text-left">*/
/*       {% if transaction.transaction_id %}*/
/*         <a href="{{ transaction.view }}" data-toggle="tooltip" title="{{ button_view }}" class="btn btn-info"><i class="fa fa-eye"></i></a>*/
/*         {% if transaction.payment_type == 'instant' and (transaction.payment_status == 'Completed' or transaction.payment_status == 'Partially-Refunded') %}*/
/*           <a href="{{ transaction.refund }}" data-toggle="tooltip" title="{{ button_refund }}" class="btn btn-danger"><i class="fa fa-reply"></i></a>&nbsp;*/
/*         {% endif %}*/
/*       {% else %}*/
/*         <button type="button" value="{{ transaction.resend }}" data-toggle="tooltip" title="{{ button_resend }}" class="btn btn-info"><i class="fa fa-refresh"></i></button>*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/*   {% endfor %}*/
/*   {% else %}*/
/*   <tr>*/
/*     <td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*   </tr>*/
/*   {% endif %}*/
/*   </tbody>*/
/*   */
/* </table>*/
/* */
