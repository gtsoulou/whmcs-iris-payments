<?php
/**
 * WHMCS IRIS Payments Gateway Module
 *
 * Payment Gateway modules allow you to integrate payment solutions with the
 * WHMCS platform.
 *
 * For more information, please refer to the online documentation.
 *
 * @see https://developers.whmcs.com/payment-gateways/
 *
 * @copyright Copyright (c) WHMCS Limited 2023
 * @license http://www.whmcs.com/license/ WHMCS Eula
 */

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

/**
 * Define module related meta data.
 *
 * @return array
 */
function irispayments_MetaData()
{
    return array(
        'DisplayName' => 'IRIS Payments (Greece)',
        'APIVersion' => '1.1',
        'DisableLocalCredtCardInput' => true,
        'TokenisedStorage' => false,
    );
}

/**
 * Define gateway configuration options.
 *
 * @return array
 */
function irispayments_config()
{
    return array(
        'FriendlyName' => array(
            'Type' => 'System',
            'Value' => 'IRIS Payments (Greece)',
        ),
        'instructions' => array(
            'FriendlyName' => 'Payment Instructions',
            'Type' => 'textarea',
            'Rows' => '5',
            'Cols' => '60',
            'Default' => 'Please scan the QR code below to complete your payment via IRIS.',
            'Description' => 'Instructions displayed to customers on the invoice',
        ),
        'accountHolder' => array(
            'FriendlyName' => 'Account Holder Name',
            'Type' => 'text',
            'Size' => '50',
            'Default' => '',
            'Description' => 'Enter the account holder name for IRIS payments',
        ),
        'accountNumber' => array(
            'FriendlyName' => 'IBAN/Account Number',
            'Type' => 'text',
            'Size' => '50',
            'Default' => '',
            'Description' => 'Enter your IBAN or account number',
        ),
        'bankName' => array(
            'FriendlyName' => 'Bank Name',
            'Type' => 'text',
            'Size' => '50',
            'Default' => '',
            'Description' => 'Enter your bank name',
        ),
        'qrCodeImage' => array(
            'FriendlyName' => 'QR Code Image URL',
            'Type' => 'text',
            'Size' => '100',
            'Default' => '',
            'Description' => 'Enter the full URL to your IRIS payment QR code image (e.g., https://yourdomain.com/images/iris-qr.png)',
        ),
        'qrCodeWidth' => array(
            'FriendlyName' => 'QR Code Width (pixels)',
            'Type' => 'text',
            'Size' => '10',
            'Default' => '300',
            'Description' => 'Width of the QR code image in pixels',
        ),
        'additionalInfo' => array(
            'FriendlyName' => 'Additional Information',
            'Type' => 'textarea',
            'Rows' => '3',
            'Cols' => '60',
            'Default' => 'After completing the payment, please send us the transaction reference.',
            'Description' => 'Additional information displayed below the QR code',
        ),
    );
}

/**
 * Payment link.
 *
 * @param array $params Payment Gateway Module Parameters
 *
 * @return string
 */
function irispayments_link($params)
{
    // Gateway Configuration Parameters
    $instructions = $params['instructions'];
    $accountHolder = $params['accountHolder'];
    $accountNumber = $params['accountNumber'];
    $bankName = $params['bankName'];
    $qrCodeImage = $params['qrCodeImage'];
    $qrCodeWidth = $params['qrCodeWidth'];
    $additionalInfo = $params['additionalInfo'];

    // Invoice Parameters
    $invoiceId = $params['invoiceid'];
    $description = $params["description"];
    $amount = $params['amount'];
    $currencyCode = $params['currency'];

    // System Parameters
    $companyName = $params['companyname'];
    $systemUrl = $params['systemurl'];

    // Build the payment form HTML
    $htmlOutput = '<div class="iris-payment-container" style="text-align: center; padding: 20px; border: 1px solid #ddd; border-radius: 5px; background-color: #f9f9f9; max-width: 600px; margin: 0 auto;">';
    
    // Instructions
    if (!empty($instructions)) {
        $htmlOutput .= '<div class="iris-instructions" style="margin-bottom: 20px; font-size: 14px; color: #333;">';
        $htmlOutput .= '<p>' . nl2br(htmlspecialchars($instructions)) . '</p>';
        $htmlOutput .= '</div>';
    }

    // Payment Details
    $htmlOutput .= '<div class="iris-payment-details" style="margin-bottom: 20px; text-align: left; background: white; padding: 15px; border-radius: 5px;">';
    $htmlOutput .= '<h4 style="margin-top: 0; color: #333; border-bottom: 2px solid #0066cc; padding-bottom: 10px;">Payment Details</h4>';
    $htmlOutput .= '<table style="width: 100%; font-size: 14px;">';
    $htmlOutput .= '<tr><td style="padding: 5px 0;"><strong>Invoice Number:</strong></td><td style="padding: 5px 0;">' . htmlspecialchars($invoiceId) . '</td></tr>';
    $htmlOutput .= '<tr><td style="padding: 5px 0;"><strong>Amount:</strong></td><td style="padding: 5px 0;">' . htmlspecialchars($amount) . ' ' . htmlspecialchars($currencyCode) . '</td></tr>';
    
    if (!empty($accountHolder)) {
        $htmlOutput .= '<tr><td style="padding: 5px 0;"><strong>Account Holder:</strong></td><td style="padding: 5px 0;">' . htmlspecialchars($accountHolder) . '</td></tr>';
    }
    
    if (!empty($bankName)) {
        $htmlOutput .= '<tr><td style="padding: 5px 0;"><strong>Bank:</strong></td><td style="padding: 5px 0;">' . htmlspecialchars($bankName) . '</td></tr>';
    }
    
    if (!empty($accountNumber)) {
        $htmlOutput .= '<tr><td style="padding: 5px 0;"><strong>IBAN/Account:</strong></td><td style="padding: 5px 0;">' . htmlspecialchars($accountNumber) . '</td></tr>';
    }
    
    $htmlOutput .= '</table>';
    $htmlOutput .= '</div>';

    // QR Code
    if (!empty($qrCodeImage)) {
        $width = !empty($qrCodeWidth) ? intval($qrCodeWidth) : 300;
        $htmlOutput .= '<div class="iris-qr-code" style="margin: 20px 0;">';
        $htmlOutput .= '<h4 style="color: #333; margin-bottom: 15px;">Scan QR Code for IRIS Payment</h4>';
        $htmlOutput .= '<img src="' . htmlspecialchars($qrCodeImage) . '" alt="IRIS Payment QR Code" style="max-width: ' . $width . 'px; width: 100%; height: auto; border: 2px solid #0066cc; border-radius: 5px;" />';
        $htmlOutput .= '</div>';
    } else {
        $htmlOutput .= '<div class="alert alert-warning" style="padding: 10px; background-color: #fff3cd; border: 1px solid #ffc107; border-radius: 5px; color: #856404; margin: 15px 0;">';
        $htmlOutput .= '<strong>Note:</strong> QR Code not configured. Please contact the administrator.';
        $htmlOutput .= '</div>';
    }

    // Additional Information
    if (!empty($additionalInfo)) {
        $htmlOutput .= '<div class="iris-additional-info" style="margin-top: 20px; font-size: 13px; color: #666; padding: 10px; background-color: #e8f4f8; border-radius: 5px;">';
        $htmlOutput .= '<p style="margin: 0;">' . nl2br(htmlspecialchars($additionalInfo)) . '</p>';
        $htmlOutput .= '</div>';
    }

    $htmlOutput .= '</div>';

    return $htmlOutput;
}

/**
 * Refund transaction.
 *
 * Called when a refund is requested for a previously successful transaction.
 * Since this is an offline payment method, refunds must be handled manually.
 *
 * @param array $params Payment Gateway Module Parameters
 *
 * @return array Transaction response status
 */
function irispayments_refund($params)
{
    // This is an offline payment method, refunds must be processed manually
    return array(
        'status' => 'error',
        'rawdata' => 'Refunds for IRIS payments must be processed manually through your banking system.',
        'transid' => $params['transid'],
    );
}
