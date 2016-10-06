<?php

class SJB_InvoiceDetails extends SJB_ObjectDetails
{
    public static function getDetails()
    {
		return array(
			array(
				'id'         => 'user_sid',
				'caption'    => 'Customer',
				'type'       => 'id',
				'length'     => '20',
				'table_name' => 'invoices',
				'is_required'=> true,
				'is_system'  => true,
			),
			array(
				'id'         => 'subuser_sid',
				'caption'    => 'Subuser sid',
				'type'       => 'id',
				'length'     => '20',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  => true,
			),
			array(
				'id'         => 'status',
				'caption'    => 'Invoice Status',
				'type'       => 'list',
				'table_name' => 'invoices',
				'is_required'=> true,
				'is_system'  => true,
				'list_values'=> array(
					array(
						'id'        => 'Paid',
						'caption'   => 'Paid',
					),
					array(
						'id'        => 'Unpaid',
						'caption'   => 'Unpaid',
					),
					array(
						'id'        => 'Pending',
						'caption'   => 'Pending',
					),
				),
			),
			array(
				'id'         => 'date',
				'caption'    => 'Invoice Date',
				'type'       => 'date',
				'length'     => '20',
				'table_name' => 'invoices',
				'is_required'=> true,
				'is_system'  => true,
			),
			array(
				'id'         => 'payment_method',
				'caption'    => 'Payment method',
				'type'       => 'list',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  => true,
				'list_values'=> SJB_PaymentGatewayManager::getActivePaymentGatewaysCaptions(),
			),
			array(
				'id'         => 'items',
				'caption'    => 'Items',
				'type'       => 'complex',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  => true,
				'fields'     => array(
				array(
					'id'            => 'products',
					'caption'       => 'Items',
					'type'          => 'list',
					'list_values'   => array(),
					'length'        => '20',
					'is_required'   => false,
					'is_system'     => true,
					'order'         => 1,
					),
				array(
					'id'            => 'qty',
					'caption'       => 'Qty',
					'type'          => 'integer',
					'length'        => '20',
					'is_required'   => false,
					'is_system'     => true,
					'order'         => 2,
					'minimum'       => 1,
				),
				array(
					'id'            => 'price',
					'caption'       => 'Price',
					'type'          => 'float',
					'length'        => '20',
					'is_required'   => false,
					'is_system'     => true,
					'order'         => 3,
					'minimum'       => 0,
				),
				array(
					'id'            => 'amount',
					'caption'       => 'Amount',
					'type'          => 'float',
					'length'        => '20',
					'is_required'   => false,
					'is_system'     => true,
					'order'         => 4,
					'minimum'       => 0,
				),
				array(
					'id'            => 'custom_item',
					'caption'       => 'Custom item',
					'type'          => 'string',
					'length'        => '20',
					'is_required'   => false,
					'is_system'     => true,
					'order'         => 5,
				),
				array(
					'id'            => 'custom_info',
					'caption'       => 'Custom info',
					'type'          => 'list',
					'length'        => '20',
					'is_required'   => false,
					'is_system'     => true,
					'order'         => 5,
					),
				),
			),
			array(
				'id'         => 'sub_total',
				'caption'    => 'Sub Total',
				'type'       => 'float',
				'length'     => '20',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  => true,
				'minimum'    => 0,
			),
			array(
				'id'         => 'tax_info',
				'caption'    => 'Tax Info',
				'type'       => 'complex',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  => true,
				'fields'     => array(
					array(
						'id'         => 'sid',
						'caption'    => 'Tax SID',
						'type'       => 'id',
						'length'     => '20',
						'table_name' => 'invoices',
						'is_required'=> false,
						'is_system'  => true,
						'order'      => 1,
					),
					array(
						'id'         => 'tax_name',
						'caption'    => 'Tax Name',
						'type'       => 'string',
						'length'     => '20',
						'table_name' => 'invoices',
						'is_required'=> false,
						'is_system'  => true,
						'order'      => 2,
					),
					array(
						'id'         => 'tax_amount',
						'caption'    => 'Tax Amount',
						'type'       => 'float',
						'length'     => '20',
						'table_name' => 'invoices',
						'is_required'=> false,
						'is_system'  => true,
						'order'      => 3,
						'minimum'    => 0,
					),
					array(
						'id'         => 'price_includes_tax',
						'caption'    => 'Price Includes Tax',
						'type'       => 'boolean',
						'length'     => '20',
						'table_name' => 'invoices',
						'is_required'=> false,
						'is_system'  => true,
						'order'      => 4,
					),
					array(
						'id'         => 'tax_rate',
						'caption'    => 'Tax Rate',
						'type'       => 'float',
						'length'     => '20',
						'table_name' => 'invoices',
						'is_required'=> false,
						'is_system'  => true,
						'order'      => 5,
						'minimum'    => 0,
					),
				),
			),
			array(
				'id'         => 'total',
				'caption'    => 'Total',
				'type'       => 'float',
				'length'     => '20',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  => true,
				'minimum'    => 0,
			),
			array(
				'id'         => 'include_tax',
				'caption'    => 'Include Tax',
				'type'       => 'boolean',
				'length'     => '20',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  => true,
			),
			array(
				'id'         => 'success_page_url',
				'caption'    => 'success_page_url',
				'type'       => 'text',
				'length'     => '20',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  => true,
			),
			array(
				'id'         => 'callback_data',
				'caption'    => 'callback_data',
				'type'       => 'text',
				'length'     => '20',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  => true,
			),
			array(
				'id'         => 'verification_response',
				'caption'    => 'verification_response',
				'type'       => 'text',
				'length'     => '20',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  => true,
			),
			array(
				'id'         => 'is_recurring',
				'caption'    => 'Is Recurring',
				'type'       => 'boolean',
				'table_name' => 'invoices',
				'is_required'=> false,
				'is_system'  =>  true,
			),
		);
	}
}
