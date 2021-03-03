<?php

/* extension/payment/pp_express_order.twig */
class __TwigTemplate_7f1a6ec046d8457b81052c9008f2619c25c4638fddd0967b1b1a3705fc9f9f1a extends Twig_Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</legend>
  <div id=\"paypal-transaction\"></div>
</fieldset>

<fieldset>
  <legend>";
        // line 7
        echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
        echo "</legend>
  <table class=\"table table-bordered\">
    <tr>
      <td>";
        // line 10
        echo (isset($context["text_capture_status"]) ? $context["text_capture_status"] : null);
        echo "</td>
      <td id=\"capture-status\">";
        // line 11
        echo (isset($context["capture_status"]) ? $context["capture_status"] : null);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 14
        echo (isset($context["text_amount_authorised"]) ? $context["text_amount_authorised"] : null);
        echo "</td>
      <td>";
        // line 15
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "
\t  \t";
        // line 16
        if (((isset($context["capture_status"]) ? $context["capture_status"] : null) != "Complete")) {
            // line 17
            echo "        &nbsp;&nbsp;&nbsp;
        <button type=\"button\" id=\"button-void\" data-loading=\"";
            // line 18
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-danger\">";
            echo (isset($context["button_void"]) ? $context["button_void"] : null);
            echo "</button>
        ";
        }
        // line 19
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 22
        echo (isset($context["text_amount_captured"]) ? $context["text_amount_captured"] : null);
        echo "</td>
      <td id=\"paypal-captured\">";
        // line 23
        echo (isset($context["captured"]) ? $context["captured"] : null);
        echo "</td>
    </tr>
    <tr>
      <td>";
        // line 26
        echo (isset($context["text_amount_refunded"]) ? $context["text_amount_refunded"] : null);
        echo "</td>
      <td id=\"paypal-refund\">";
        // line 27
        echo (isset($context["refunded"]) ? $context["refunded"] : null);
        echo "</td>
    </tr>
  </table>
</fieldset>

";
        // line 32
        if (((isset($context["capture_status"]) ? $context["capture_status"] : null) != "Complete")) {
            // line 33
            echo "\t<fieldset id=\"capture-form\">
\t\t<legend>";
            // line 34
            echo (isset($context["tab_capture"]) ? $context["tab_capture"] : null);
            echo "</legend>
\t\t<form id=\"paypal-capture\" class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-capture-amount\">";
            // line 37
            echo (isset($context["entry_capture_amount"]) ? $context["entry_capture_amount"] : null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"amount\" value=\"";
            // line 39
            echo (isset($context["capture_remaining"]) ? $context["capture_remaining"] : null);
            echo "\" id=\"input-capture-amount\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-capture-complete\">";
            // line 43
            echo (isset($context["entry_capture_complete"]) ? $context["entry_capture_complete"] : null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"complete\" value=\"1\" id=\"input-capture-complete\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-capture\" data-loading=\"";
            // line 49
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_capture"]) ? $context["button_capture"] : null);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t</form>
\t</fieldset>
";
        }
        // line 54
        echo "<script type=\"text/javascript\"><!--
\t\$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token=";
        // line 55
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "');

\t\$('#button-capture').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/payment/pp_express/capture&user_token=";
        // line 59
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'amount=' + \$('#input-capture-amount').val() + '&complete=' + (\$('#paypal-capture-complete').prop('checked') == true ? 1 : 0),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-capture').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-capture').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#paypal-capture').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#paypal-capture').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\$('#paypal-captured').text(json['captured']);
\t\t\t\t\t\$('#paypal-capture-amount').val(json['remaining']);

\t\t\t\t\tif (json['capture_status']) {
\t\t\t\t\t\t\$('#capture-status').text(json['capture_status']);

\t\t\t\t\t\t\$('#button-void').remove();

\t\t\t\t\t\t\$('#capture-form').remove();
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t\$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token=";
        // line 91
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "');
\t\t\t}
\t\t});
\t});

\t\$('#button-void').on('click', function() {
\t\tif (confirm('";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["text_confirm_void"]) ? $context["text_confirm_void"] : null), "js");
        echo "')) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/payment/pp_express/void&user_token=";
        // line 99
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-void').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-void').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#paypal-capture').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#capture-status').text(json['capture_status']);

\t\t\t\t\t\t\$('#button-void').remove();

\t\t\t\t\t\t\$('#capture-form').remove();
\t\t\t\t\t}

\t\t\t\t\t\$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token=";
        // line 122
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "');
\t\t\t\t}
\t\t\t});
\t\t}
\t});

\t\$('#paypal-transaction').delegate('button', 'click', function() {
\t\tvar element = this;

\t\t\$.ajax({
\t\t\turl: \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#tab-pp-express').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token=";
        // line 148
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&order_id=";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "');
\t\t\t\t}
\t\t\t}
\t\t});
\t});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_express_order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 148,  228 => 122,  200 => 99,  195 => 97,  184 => 91,  147 => 59,  138 => 55,  135 => 54,  125 => 49,  116 => 43,  109 => 39,  104 => 37,  98 => 34,  95 => 33,  93 => 32,  85 => 27,  81 => 26,  75 => 23,  71 => 22,  66 => 19,  59 => 18,  56 => 17,  54 => 16,  50 => 15,  46 => 14,  40 => 11,  36 => 10,  30 => 7,  22 => 2,  19 => 1,);
    }
}
/* <fieldset>*/
/*   <legend>{{ text_transaction }}</legend>*/
/*   <div id="paypal-transaction"></div>*/
/* </fieldset>*/
/* */
/* <fieldset>*/
/*   <legend>{{ text_payment }}</legend>*/
/*   <table class="table table-bordered">*/
/*     <tr>*/
/*       <td>{{ text_capture_status }}</td>*/
/*       <td id="capture-status">{{ capture_status }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>{{ text_amount_authorised }}</td>*/
/*       <td>{{ total }}*/
/* 	  	{% if capture_status != 'Complete' %}*/
/*         &nbsp;&nbsp;&nbsp;*/
/*         <button type="button" id="button-void" data-loading="{{ text_loading }}" class="btn btn-danger">{{ button_void }}</button>*/
/*         {% endif %}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>{{ text_amount_captured }}</td>*/
/*       <td id="paypal-captured">{{ captured }}</td>*/
/*     </tr>*/
/*     <tr>*/
/*       <td>{{ text_amount_refunded }}</td>*/
/*       <td id="paypal-refund">{{ refunded }}</td>*/
/*     </tr>*/
/*   </table>*/
/* </fieldset>*/
/* */
/* {% if capture_status != 'Complete' %}*/
/* 	<fieldset id="capture-form">*/
/* 		<legend>{{ tab_capture }}</legend>*/
/* 		<form id="paypal-capture" class="form-horizontal">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-capture-amount">{{ entry_capture_amount }}</label>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="amount" value="{{ capture_remaining }}" id="input-capture-amount" class="form-control" />*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-capture-complete">{{ entry_capture_complete }}</label>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="checkbox" name="complete" value="1" id="input-capture-complete" class="form-control" />*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="pull-right">*/
/* 							<button type="button" id="button-capture" data-loading="{{ text_loading }}" class="btn btn-primary">{{ button_capture }}</button>*/
/* 						</div>*/
/* 		</form>*/
/* 	</fieldset>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/* 	$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token={{ user_token }}&order_id={{ order_id }}');*/
/* */
/* 	$('#button-capture').on('click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/payment/pp_express/capture&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: 'amount=' + $('#input-capture-amount').val() + '&complete=' + ($('#paypal-capture-complete').prop('checked') == true ? 1 : 0),*/
/* 			beforeSend: function() {*/
/* 				$('#button-capture').button('loading');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-capture').button('reset');*/
/* 			},*/
/* 			success: function(json) {*/
/* 				$('.alert-dismissible').remove();*/
/* */
/* 				if (json['error']) {*/
/* 					$('#paypal-capture').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					$('#paypal-capture').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 					$('#paypal-captured').text(json['captured']);*/
/* 					$('#paypal-capture-amount').val(json['remaining']);*/
/* */
/* 					if (json['capture_status']) {*/
/* 						$('#capture-status').text(json['capture_status']);*/
/* */
/* 						$('#button-void').remove();*/
/* */
/* 						$('#capture-form').remove();*/
/* 					}*/
/* 				}*/
/* */
/* 				$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token={{ user_token }}&order_id={{ order_id }}');*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	$('#button-void').on('click', function() {*/
/* 		if (confirm('{{ text_confirm_void|escape('js') }}')) {*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=extension/payment/pp_express/void&user_token={{ user_token }}&order_id={{ order_id }}',*/
/* 				dataType: 'json',*/
/* 				beforeSend: function() {*/
/* 					$('#button-void').button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$('#button-void').button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.alert-dismissible').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$('#paypal-capture').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						$('#capture-status').text(json['capture_status']);*/
/* */
/* 						$('#button-void').remove();*/
/* */
/* 						$('#capture-form').remove();*/
/* 					}*/
/* */
/* 					$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token={{ user_token }}&order_id={{ order_id }}');*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	});*/
/* */
/* 	$('#paypal-transaction').delegate('button', 'click', function() {*/
/* 		var element = this;*/
/* */
/* 		$.ajax({*/
/* 			url: $(element).attr('href'),*/
/* 			dataType: 'json',*/
/* 			beforeSend: function() {*/
/* 				$(element).button('loading');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$(element).button('reset');*/
/* 			},*/
/* 			success: function(json) {*/
/* 				$('.alert-dismissible').remove();*/
/* */
/* 				if (json['error']) {*/
/* 					$('#tab-pp-express').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					$('#paypal-transaction').load('index.php?route=extension/payment/pp_express/transaction&user_token={{ user_token }}&order_id={{ order_id }}');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* //--></script>*/
/* */
