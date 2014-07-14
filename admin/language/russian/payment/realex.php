<?php
// Heading
$_['heading_title']= 'Realex Redirect';
$_['text_realex'] = '<a target="_BLANK" href="http://www.realexpayments.co.uk/partner-refer?id=opencart"><img src="view/image/payment/realex.png" alt="Realex" title="Realex" style="border: 1px solid #EEEEEE;" /></a>';

// Config tabs
$_['tab_account'] = 'API info';
$_['tab_sub_account'] = 'Accounts';
$_['tab_order_status'] = 'Order status';
$_['tab_payment'] = 'Payment settings';
$_['tab_advanced'] = 'Advanced';

// Text
$_['text_payment'] = 'Payment';
$_['text_success'] = 'Success: You have modified Realex account details!';
$_['text_notification_url'] = 'Notification URL';
$_['text_live'] = 'Live';
$_['text_demo'] = 'Demo';
$_['text_yes'] = 'Yes';
$_['text_no'] = 'No';
$_['text_help_total'] = 'The checkout total the order must reach before this payment method becomes active';
$_['text_help_card_select'] = 'Ask the user to choose their card type before they are redirected';
$_['text_help_notification'] = 'You need to supply this URL to Realex to get payment notifications';
$_['text_help_debug'] = 'Enabling debug will write sensitive data to a log file. You should always disable unless instructed otherwise';
$_['text_help_dcc_settle'] = 'If your subaccount is DCC enabled you must use Autosettle';
$_['text_card_type'] = 'Card type';
$_['text_enabled'] = 'Enabled';
$_['text_use_default'] = 'Use default';
$_['text_merchant_id'] = 'Merchant ID';
$_['text_subaccount'] = 'Subaccount';
$_['text_secret'] = 'Shared secret';
$_['text_card_visa'] = 'Visa';
$_['text_card_master'] = 'Mastercard';
$_['text_card_amex'] = 'American Express';
$_['text_card_switch'] = 'Switch/Maestro';
$_['text_card_laser'] = 'Laser';
$_['text_card_diners'] = 'Diners';
$_['text_capture_ok'] = 'Capture was successful';
$_['text_capture_ok_order'] = 'Capture was successful, order status updated to success - settled';
$_['text_rebate_ok'] = 'Rebate was successful';
$_['text_rebate_ok_order'] = 'Rebate was successful, order status updated to rebated';
$_['text_void_ok'] = 'Void was successful, order status updated to voided';
$_['text_settle_auto'] = 'Auto';
$_['text_settle_delayed'] = 'Delayed';
$_['text_settle_multi'] = 'Multi';
$_['text_url_message'] = 'You must supply the store URL to your Realex account manager before going live';

// Entry
$_['entry_merchant_id'] = 'Merchant ID';
$_['entry_secret'] = 'Shared secret';
$_['entry_rebate_password'] = 'Rebate password';
$_['entry_total'] = 'Total';
$_['entry_sort_order'] = 'Sort order';
$_['entry_geo_zone'] = 'Geo zone';
$_['entry_status'] = 'Status';
$_['entry_debug'] = 'Debug logging';
$_['entry_live_demo'] = 'Live / Demo';
$_['entry_auto_settle'] = 'Settlement type';
$_['entry_card_select'] = 'Select card';
$_['entry_tss_check'] = 'TSS checks';
$_['entry_live_url'] = 'Live connection URL';
$_['entry_demo_url'] = 'Demo connection URL';
$_['entry_status_success_settled'] = 'Success - settled';
$_['entry_status_success_unsettled'] = 'Success - not settled';
$_['entry_status_decline'] = 'Decline';
$_['entry_status_decline_pending'] = 'Decline - offline auth';
$_['entry_status_decline_stolen'] = 'Decline - stolen card';
$_['entry_status_decline_bank'] = 'Decline - bank error';
$_['entry_status_void'] = 'Voided';
$_['entry_status_rebate'] = 'Rebated';

// Error
$_['error_merchant_id'] = 'Merchant ID is required';
$_['error_secret'] = 'Shared secret is required';
$_['error_live_url'] = 'Live URL is required';
$_['error_demo_url'] = 'Demo URL is required';
$_['error_data_missing'] = 'Data missing';
$_['error_use_select_card'] = 'You must have "Select Card" enabled for subaccount routing by card type to work';

// Order page - payment tab
$_['text_payment_info'] = 'Payment information';
$_['text_capture_status'] = 'Payment captured';
$_['text_void_status'] = 'Payment voided';
$_['text_rebate_status'] = 'Payment rebated';
$_['text_order_ref'] = 'Order ref';
$_['text_order_total'] = 'Total authorised';
$_['text_total_captured'] = 'Total captured';
$_['text_transactions'] = 'Transactions';
$_['text_column_amount'] = 'Amount';
$_['text_column_type'] = 'Type';
$_['text_column_created'] = 'Created';

$_['text_confirm_void'] = 'Are you sure you want to void the payment?';
$_['text_confirm_capture'] = 'Are you sure you want to capture the payment?';
$_['text_confirm_rebate'] = 'Are you sure you want to rebate the payment?';

$_['btn_capture'] = 'Capture';
$_['btn_rebate'] = 'Rebate / refund';
$_['btn_void'] = 'Void';