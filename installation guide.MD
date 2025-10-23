# IRIS Payments Gateway Module for WHMCS
## Installation & Configuration Guide

### Overview
This custom payment gateway module enables IRIS payments (Greece) in WHMCS 8.13+. It displays a QR code and payment instructions to customers, making it easy for them to complete payments through the IRIS system.

---

## Installation Instructions

### Step 1: Upload the Module File

1. Download the `irispayments.php` file
2. Connect to your WHMCS server via FTP or SSH
3. Navigate to: `/modules/gateways/`
4. Upload `irispayments.php` to this directory
5. Set file permissions to 644 (read/write for owner, read for others)

**File Location:**
```
/path/to/whmcs/modules/gateways/irispayments.php
```

### Step 2: Activate the Gateway in WHMCS

1. Log in to your WHMCS Admin Panel
2. Navigate to: **Setup > Payments > Payment Gateways**
3. Click on **All Payment Gateways** tab
4. Find **IRIS Payments (Greece)** in the list
5. Click on it to configure

---

## Configuration Settings

### Required Settings

#### 1. **Payment Instructions**
- Instructions displayed to customers at the top of the payment page
- Default: "Please scan the QR code below to complete your payment via IRIS."
- Example: "Scan the QR code with your banking app to pay via IRIS instantly."

#### 2. **Account Holder Name**
- Your business name or account holder name
- Example: "My Company Ltd"

#### 3. **IBAN/Account Number**
- Your IBAN or account number for IRIS payments
- Example: "GR1601101234567891234567890"

#### 4. **Bank Name**
- Name of your bank
- Example: "National Bank of Greece"

#### 5. **QR Code Image URL** ⚠️ IMPORTANT
- Full URL to your IRIS payment QR code image
- Must be accessible publicly (https recommended)
- Example: `https://yourdomain.com/images/iris-qr-code.png`

**How to upload your QR code:**
1. Upload your QR code image to `/whmcs/assets/img/` or any web-accessible directory
2. Use the full URL: `https://yourdomain.com/assets/img/iris-qr.png`

#### 6. **QR Code Width**
- Width of the QR code in pixels
- Default: 300
- Recommended: 250-400 pixels

#### 7. **Additional Information**
- Additional text displayed below the QR code
- Default: "After completing the payment, please send us the transaction reference."
- Example: "Payment confirmation may take 1-2 business days. Keep your receipt."

---

## Configuration Example

Here's a complete configuration example:

```
Payment Instructions:
"Please scan the QR code below with your mobile banking app to complete 
your payment instantly via IRIS. Payments are processed immediately."

Account Holder Name:
"ACME Web Hosting Ltd"

IBAN/Account Number:
"GR1601101234567891234567890"

Bank Name:
"Piraeus Bank"

QR Code Image URL:
"https://yourdomain.com/assets/img/iris-payment-qr.png"

QR Code Width:
"300"

Additional Information:
"After completing the payment, you will receive a confirmation email. 
For immediate activation, please send the transaction reference to 
billing@yourdomain.com"
```

---

## Generating Your IRIS QR Code

### Option 1: Use Your Bank's Portal
Most Greek banks provide IRIS QR code generation in their business banking portal:
1. Log in to your business banking account
2. Navigate to IRIS/Instant Payments section
3. Generate a QR code for your account
4. Download the QR code image

### Option 2: Use a QR Code Generator
You can generate a QR code containing your payment information:

**IRIS Payment Data Format (example):**
```
BCD
002
1
SCT
BANKBICXXX
Your Company Name
GR1601101234567891234567890
EUR10.00
Payment for Invoice {INVOICE_ID}
```

**Online QR Generators:**
- https://www.qr-code-generator.com/
- https://goqr.me/

**Note:** Check with your bank for the exact IRIS QR code format requirements.

---

## How Customers See It

When customers view their invoice and select IRIS Payments:

1. **Payment Instructions** appear at the top
2. **Payment Details Table** shows:
   - Invoice Number
   - Amount to pay
   - Account Holder
   - Bank Name
   - IBAN/Account Number
3. **QR Code** displays prominently in the center
4. **Additional Information** appears at the bottom

The interface is clean, mobile-responsive, and easy to scan.

---

## Setting as Default Payment Method

To make IRIS Payments the default gateway:

1. Go to **Setup > Payments > Payment Gateways**
2. Ensure IRIS Payments is activated
3. Go to **Setup > General Settings > Ordering**
4. Set **Default Payment Gateway** to "IRIS Payments (Greece)"

---

## Processing Payments

Since this is an **offline payment method**, you need to manually mark invoices as paid:

### Method 1: From Invoice
1. Go to **Billing > List Invoices**
2. Open the invoice
3. Click **Add Payment**
4. Select "IRIS Payments (Greece)" as the gateway
5. Enter transaction details
6. Click **Add Payment**

### Method 2: Via Bulk Actions
1. Go to **Billing > List Invoices**
2. Select multiple invoices
3. Use **Bulk Actions > Add Payment**

---

## Troubleshooting

### QR Code Not Displaying
**Problem:** QR code doesn't appear on invoice
**Solutions:**
- Verify the QR code URL is correct and publicly accessible
- Test the URL in your browser directly
- Ensure the image file exists and has correct permissions
- Check if HTTPS is required (mixed content issues)

### Module Not Appearing
**Problem:** IRIS Payments doesn't show in gateway list
**Solutions:**
- Verify file is uploaded to `/modules/gateways/`
- Check file permissions (should be 644)
- Clear WHMCS template cache: **Utilities > System > Template Cache**
- Check file name is exactly `irispayments.php` (lowercase)

### Configuration Not Saving
**Problem:** Settings revert after saving
**Solutions:**
- Check file permissions on the module file
- Clear PHP opcache if enabled
- Check WHMCS error logs in **Utilities > Logs > Module Log**

---

## File Structure

```
whmcs/
├── modules/
│   └── gateways/
│       └── irispayments.php          [The gateway module]
└── assets/
    └── img/
        └── iris-qr-code.png          [Your QR code - example location]
```

---

## Security Considerations

1. **Use HTTPS:** Always serve your QR code over HTTPS
2. **File Permissions:** Set to 644 for the module file
3. **QR Code Access:** Ensure QR code image is in a public directory
4. **Regular Updates:** Keep WHMCS updated to latest version

---

## Customization Options

### Styling
The module includes inline CSS. To customize:
1. Edit the `irispayments.php` file
2. Modify the CSS in the `irispayments_link()` function
3. Save and clear WHMCS cache

### Adding Custom Fields
To add more configuration options:
1. Add new array entries to the `irispayments_config()` function
2. Use the fields in `irispayments_link()` function
3. Follow WHMCS gateway development documentation

---

## Support & Resources

### WHMCS Documentation
- Payment Gateway Docs: https://developers.whmcs.com/payment-gateways/
- System Requirements: https://docs.whmcs.com/System_Requirements

### Testing
Test the module thoroughly:
1. Create a test invoice
2. View it as a customer
3. Verify all elements display correctly
4. Test on mobile devices
5. Test QR code scanning

---

## Version Information

- **Module Version:** 1.0
- **WHMCS Compatibility:** 8.13+
- **PHP Requirement:** 7.4+
- **Last Updated:** October 2025

---

## License & Disclaimer

This module is provided as-is for use with WHMCS installations. Ensure compliance with:
- WHMCS licensing terms
- Greek banking regulations for IRIS payments
- Your bank's terms of service

---

## Need Help?

If you encounter issues:
1. Check WHMCS logs: **Utilities > Logs > Module Log**
2. Review this documentation
3. Contact your WHMCS administrator
4. Verify with your bank that IRIS QR codes are correctly formatted

---

**Happy Processing! 🇬🇷**
