<?php
// This is the email separator line
$separator = "<tr><td colspan=\"2\" style=\"margin: 10px 0; height: 10px; font-size: 0.1px; border-bottom: 1px solid [email:emailBackground];\">&nbsp;</td></tr>";
// If true, it means that there are both the invoice and the shipping addresses
$doubleUData = isset($orderData['userShippingData']) && is_array($orderData['userShippingData']);
$doubleUData = $doubleUData && isset($orderData['userShippingData']) && is_array($orderData['userShippingData']);

echo str_replace("<br>", "\n", $l10n->get('cart_order_no') . ": " . $orderData['orderNo']) . "\n";
// Opening Message
if ($showCustomerMessages) {
    echo strip_tags(str_replace("<br />", "\n", $settings['email_opening'])) . "\n";
}
// Invoice & Shipping Data
// Data header
if ($doubleUData) {
    echo "\n" . str_replace("<br />", "\n", $l10n->get('cart_vat_address')) . "\n\n";
} else {
    echo "\n" . str_replace("<br />", "\n", $l10n->get('cart_vat_address') . "/" . $l10n->get('cart_shipping_address')) . "\n\n";
}
// Invoice Data
if (isset($orderData['userInvoiceData']) && is_array($orderData['userInvoiceData'])) {
    $i = 0;
    foreach ($orderData['userInvoiceData'] as $key => $value) {
        if (trim($value['value']) != "") {
            // Attachment file: strip its name removing the timestamp prefix
            if ($value['id'] == 'Attachment') {
                $splitedFileName = explode("_", $value['value'], 2);
                $fieldValue = $splitedFileName[1];
            }
            else
                $fieldValue = $value['value'];  
            
            echo "\t" . $value['label'] . ": " . $fieldValue . "\n";
            $i++;
        }
    }
}
// Columns separations
if ($doubleUData) {
    echo "\n" . str_replace("<br />", "\n", $l10n->get('cart_shipping_address')) . "\n\n";
}
// Shipping Data
if (isset($orderData['userShippingData'])) {
    $i = 0;
    foreach ($orderData['userShippingData'] as $key => $value) {
        if (trim($value['value']) != "") {
            echo "\t" . $value['label'] . ": " . $value['value'] . "\n";
            $i++;
        }
    }
}
// Order Data
echo "\n" . $l10n->get('cart_product_list') . "\n\n";

if (isset($orderData['products']) && is_array($orderData['products'])) {
    $i = 0;
    $opt = false;
    foreach ($orderData['products'] as $key => $value) {
        if (isset($value["option"]) && $value["option"] != "null" && strlen($value["option"])) {
            $opt = true;
        }
        $vat = ($settings['vat_type'] != "none");
        $colspan = 3 + ($opt ? 1 : 0) + ($vat ? 1 : 0);
    }
    foreach ($orderData['products'] as $key => $value) {
        $descr = strip_tags(str_replace(array("\n", "\r"), "", $value["description"]));
        echo "\t" . strip_tags(str_replace(array("\n", "\r"), "", $value["name"]))
        . (($opt && $value["option"] != "null") ? " " . $value["option"] . ( $value["suboption"] != "null" ? " " . $value["suboption"] : "") : "")
        . (strlen($descr) ? " - " . $descr : "") . "\n"
        . "\t " . $value["quantity"] . " x " 
        . ( $settings['vat_type'] == "excluded" ?
        "(" . $value["singlePrice"] . " + " . $value['vatName'] . " " . $value["vat"] . ")"
        :
        $value["singlePricePlusVat"]
        )
        . " = " . ($settings['vat_type'] == "excluded" ? $value["price"] : $value['pricePlusVat']) . "\n";
    }
    // Shipping data
    if (isset($orderData['shipping']) && is_array($orderData['shipping'])) {
        echo "\n" . $l10n->get('cart_shipping') . "\n\n";
        echo "\t" . $orderData['shipping']['name'] . ": " . ($settings['vat_type'] == "excluded" ? $orderData['shipping']['price'] : $orderData['shipping']['pricePlusVat']) . "\n";
    }
    // Payment Data
    if (isset($orderData['payment']) && is_array($orderData['payment'])) {
        echo "\n" . $l10n->get('cart_payment') . "\n\n";
        echo "\t" . $orderData['payment']['name'] . ": " . ($settings['vat_type'] == "excluded" ? $orderData['payment']['price'] : $orderData['payment']['pricePlusVat']) . "\n";
    }
    // Total Amount
    switch ($settings['vat_type']) {
        case "excluded":
            echo "\n" . $orderData['vatName'] . ": " . $orderData['totalVat'] . "\n";
            echo str_replace('[NAME]', $orderData['vatName'], $l10n->get('cart_total_vat')) . ": " . $orderData['totalPricePlusVat'] . "\n";
        break;
        case "included":
            echo "\n" . str_replace('[NAME]', $orderData['vatName'], $l10n->get('cart_total_vat')) . ": " . $orderData['totalPricePlusVat'] . "\n";
            echo str_replace('[NAME]', $orderData['vatName'], $l10n->get("cart_vat_included")) . ": " . $orderData['totalVat'] . "\n";
        break;
        case "none":
            echo "\n" . $l10n->get('cart_total_price') . ": " . $orderData['totalPricePlusVat'] . "\n";
        break;
    }
    // Coupon
    if ((isset($orderData['coupon']) && $orderData['coupon'] !== "" && $orderData['rawCouponDiscount'] > 0) || (isset($orderData['rawOrderTotalDiscount']) && $orderData['rawOrderTotalDiscount'] !== "" && $orderData['rawOrderTotalDiscount'] > 0)) {
        if (isset($orderData['coupon']) && $orderData['coupon'] !== "" && $orderData['rawCouponDiscount'] > 0) {
            echo "\n" . $l10n->get('cart_coupon_code', "Coupon Code") . " (" . $orderData['coupon'] . "): -" . $orderData['couponDiscount'] . "\n";
        }
        if (isset($orderData['rawOrderTotalDiscount']) && $orderData['rawOrderTotalDiscount'] !== "" && $orderData['rawOrderTotalDiscount'] > 0) {
            echo "\n" . $l10n->get('cart_order_total_discount', "Order Total Discount") . ": -" . $orderData['orderTotalDiscount'] . "\n";
        }
        echo "\n" . $l10n->get('cart_grand_total', "Grand total") . ": " . $orderData['totalToPay'] . "\n";
    }
    else if (isset($orderData['coupon']) && $orderData['coupon'] !== "") {
        echo "\n" . $l10n->get('cart_coupon_code', "Coupon Code") . ": " . $orderData['coupon'] . "\n";
    }
}
// Payment Text
if (isset($orderData['payment']) && is_array($orderData['payment'])) {
    echo "\n" . str_replace("<br />", "\n", $l10n->get('cart_payment') . "\n" . $orderData['payment']['name'] . ($showCustomerMessages ? "\n" . $orderData['payment']['email_text'] : "")) . "\n";
}
// Shipping Text
if (isset($orderData['shipping']) && is_array($orderData['shipping'])) {
    echo "\n" . str_replace("<br />", "\n", $l10n->get('cart_shipping') . "\n" . $orderData['shipping']['name'] . ($showCustomerMessages ? "\n" . $orderData['shipping']['email_text'] : "")) . "\n";
}
// Closing message
if ($showCustomerMessages) {
    echo "\n" . strip_tags(str_replace("<br />", "\n", $settings['email_closing']));
}
