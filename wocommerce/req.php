$args = apply_filters(
    'woocommerce_shipping_method_add_rate_args',
    wp_parse_args(
        $args,
        array(
            'id'             => $this->get_rate_id(), // ID for the rate. If not passed, this id:instance default will be used.
            'label'          => '', // Label for the rate.
            'cost'           => '0', // Amount or array of costs (per item shipping).
            'taxes'          => '', // Pass taxes, or leave empty to have it calculated for you, or 'false' to disable calculations.
            'calc_tax'       => 'per_order', // Calc tax per_order or per_item. Per item needs an array of costs.
            'meta_data'      => array(), // Array of misc meta data to store along with this rate - key value pairs.
            'package'        => false, // Package array this rate was generated for @since 2.6.0.
            'price_decimals' => wc_get_price_decimals(),
        )
    )
);

// Encode the array to JSON format
$json_args = json_encode($args, JSON_PRETTY_PRINT);

// Output the JSON
echo $json_args;
