<?php

/* extension/report/customer_reward_info.twig */
class __TwigTemplate_da228148069f02466cd4b03a309e3fe65e5ac49446697a86d3d99943f7ece2b0 extends Twig_Template
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
        echo "<div class=\"row\">
  <div id=\"filter-report\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 5
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-date-start\">";
        // line 9
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 11
        echo (isset($context["filter_date_start"]) ? $context["filter_date_start"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-customer\">";
        // line 17
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
          <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 18
        echo (isset($context["filter_customer"]) ? $context["filter_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-date-end\">";
        // line 21
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 23
        echo (isset($context["filter_date_end"]) ? $context["filter_date_end"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 29
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart\"></i> ";
        // line 37
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 44
        echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 45
        echo (isset($context["column_email"]) ? $context["column_email"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 46
        echo (isset($context["column_customer_group"]) ? $context["column_customer_group"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 47
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 48
        echo (isset($context["column_points"]) ? $context["column_points"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 49
        echo (isset($context["column_orders"]) ? $context["column_orders"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 50
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 51
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 56
        if ((isset($context["customers"]) ? $context["customers"] : null)) {
            // line 57
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 58
                echo "            <tr>
              <td class=\"text-left\">";
                // line 59
                echo $this->getAttribute($context["customer"], "customer", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 60
                echo $this->getAttribute($context["customer"], "email", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 61
                echo $this->getAttribute($context["customer"], "customer_group", array());
                echo "</td>
              <td class=\"text-left\">";
                // line 62
                echo $this->getAttribute($context["customer"], "status", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 63
                echo $this->getAttribute($context["customer"], "points", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 64
                echo $this->getAttribute($context["customer"], "orders", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 65
                echo $this->getAttribute($context["customer"], "total", array());
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 66
                echo $this->getAttribute($context["customer"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            ";
        } else {
            // line 70
            echo "            <tr>
              <td class=\"text-center\" colspan=\"8\">";
            // line 71
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
            </tr>
            ";
        }
        // line 74
        echo "            </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 79
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 80
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';
\t
\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();
\t
\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}
\t
\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();
\t
\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}
\t
\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();
\t
\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}
\t
\tlocation = 'index.php?route=report/report&code=customer_reward&user_token=";
        // line 108
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 113
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 121
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/customer_reward_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 121,  244 => 113,  236 => 108,  205 => 80,  201 => 79,  194 => 74,  188 => 71,  185 => 70,  182 => 69,  171 => 66,  167 => 65,  163 => 64,  159 => 63,  155 => 62,  151 => 61,  147 => 60,  143 => 59,  140 => 58,  135 => 57,  133 => 56,  125 => 51,  121 => 50,  117 => 49,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  97 => 44,  87 => 37,  76 => 29,  65 => 23,  60 => 21,  52 => 18,  48 => 17,  37 => 11,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <div class="row">*/
/*   <div id="filter-report" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-date-start">{{ entry_date_start }}</label>*/
/*           <div class="input-group date">*/
/*             <input type="text" name="filter_date_start" value="{{ filter_date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" id="input-date-start" class="form-control" />*/
/*             <span class="input-group-btn">*/
/*             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*             </span></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-customer">{{ entry_customer }}</label>*/
/*           <input type="text" name="filter_customer" value="{{ filter_customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control" />*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="input-date-end">{{ entry_date_end }}</label>*/
/*           <div class="input-group date">*/
/*             <input type="text" name="filter_date_end" value="{{ filter_date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" id="input-date-end" class="form-control" />*/
/*             <span class="input-group-btn">*/
/*             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*             </span></div>*/
/*         </div>*/
/*         <div class="form-group text-right">*/
/*           <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-bar-chart"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-left">{{ column_customer }}</td>*/
/*                 <td class="text-left">{{ column_email }}</td>*/
/*                 <td class="text-left">{{ column_customer_group }}</td>*/
/*                 <td class="text-left">{{ column_status }}</td>*/
/*                 <td class="text-right">{{ column_points }}</td>*/
/*                 <td class="text-right">{{ column_orders }}</td>*/
/*                 <td class="text-right">{{ column_total }}</td>*/
/*                 <td class="text-right">{{ column_action }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             */
/*             {% if customers %}*/
/*             {% for customer in customers %}*/
/*             <tr>*/
/*               <td class="text-left">{{ customer.customer }}</td>*/
/*               <td class="text-left">{{ customer.email }}</td>*/
/*               <td class="text-left">{{ customer.customer_group }}</td>*/
/*               <td class="text-left">{{ customer.status }}</td>*/
/*               <td class="text-right">{{ customer.points }}</td>*/
/*               <td class="text-right">{{ customer.orders }}</td>*/
/*               <td class="text-right">{{ customer.total }}</td>*/
/*               <td class="text-right"><a href="{{ customer.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% else %}*/
/*             <tr>*/
/*               <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*             </tr>*/
/*             {% endif %}*/
/*             </tbody>*/
/*             */
/*           </table>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	var url = '';*/
/* 	*/
/* 	var filter_customer = $('input[name=\'filter_customer\']').val();*/
/* 	*/
/* 	if (filter_customer) {*/
/* 		url += '&filter_customer=' + encodeURIComponent(filter_customer);*/
/* 	}*/
/* 	*/
/* 	var filter_date_start = $('input[name=\'filter_date_start\']').val();*/
/* 	*/
/* 	if (filter_date_start) {*/
/* 		url += '&filter_date_start=' + encodeURIComponent(filter_date_start);*/
/* 	}*/
/* 	*/
/* 	var filter_date_end = $('input[name=\'filter_date_end\']').val();*/
/* 	*/
/* 	if (filter_date_end) {*/
/* 		url += '&filter_date_end=' + encodeURIComponent(filter_date_end);*/
/* 	}*/
/* 	*/
/* 	location = 'index.php?route=report/report&code=customer_reward&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('input[name=\'filter_customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_customer\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script>*/
