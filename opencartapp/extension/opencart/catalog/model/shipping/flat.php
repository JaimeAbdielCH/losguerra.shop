<?php
namespace Opencart\Catalog\Model\Extension\Opencart\Shipping;
class Flat extends \Opencart\System\Engine\Model {
	function getQuote(array $address): array {
		$this->load->language('extension/opencart/shipping/flat');
		//`geo_zone_id` = '" . (int)$this->config->get('shipping_flat_geo_zone_id') . "' AND 
		$querystr = "SELECT * FROM `" . DB_PREFIX . "zone_to_geo_zone` WHERE `geo_zone_id` = '" . (int)$this->config->get('shipping_flat_geo_zone_id') . "' AND `country_id` = '" . (int)$address['country_id'] . "' AND (`zone_id` = '" . (int)$address['zone_id'] . "' OR `zone_id` = '0')";
		$query = $this->db->query($querystr);

		if (!$this->config->get('shipping_flat_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = [];

		if ($status) {
			$quote_data = [];
			$quote_data['flat'] = [
				'code'         => 'flat.flat',
				'title'        => $this->language->get('text_description'),
				'cost'         => $this->tax->calculate((float)$this->config->get('shipping_flat_cost'), $this->config->get('shipping_flat_tax_class_id')),
				'tax_class_id' => $this->config->get('shipping_flat_tax_class_id'),
				'text'         => $this->currency->format($this->tax->calculate($this->config->get('shipping_flat_cost'), $this->config->get('shipping_flat_tax_class_id'), $this->config->get('config_tax')), $this->session->data['currency'])
			];

			$method_data = [
				'code'       => 'flat',
				'title'      => $this->language->get('heading_title'),
				'quote'      => $quote_data,
				'sort_order' => $this->config->get('shipping_flat_sort_order'),
				'error'      => false
			];
		}

		return $method_data;
	}
}
