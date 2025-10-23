# IRIS Payments - Quick Setup Checklist

## ✅ Installation Steps

- [ ] Upload `irispayments.php` to `/modules/gateways/`
- [ ] Set file permissions to 644
- [ ] Upload your IRIS QR code image to a web-accessible directory
- [ ] Log in to WHMCS Admin Panel
- [ ] Go to Setup > Payments > Payment Gateways
- [ ] Find and click "IRIS Payments (Greece)"
- [ ] Configure all settings (see below)
- [ ] Save changes
- [ ] Test with a sample invoice

---

## 📋 Configuration Checklist

### Must Configure:
- [ ] **Payment Instructions** - Customer-facing text
- [ ] **Account Holder Name** - Your business name
- [ ] **IBAN/Account Number** - Your bank account
- [ ] **Bank Name** - Your bank
- [ ] **QR Code Image URL** - Full URL to your QR code (⚠️ CRITICAL)
- [ ] **QR Code Width** - Image size (default: 300px)
- [ ] **Additional Information** - Post-payment instructions

---

## 🖼️ QR Code Setup

1. Generate IRIS QR code from your bank OR use QR generator
2. Save as `iris-qr-code.png`
3. Upload to: `/whmcs/assets/img/`
4. Use full URL: `https://yourdomain.com/assets/img/iris-qr-code.png`
5. Test URL in browser before saving configuration

---

## 🎯 Example Configuration

```
Payment Instructions:
Scan the QR code with your mobile banking app to pay via IRIS.

Account Holder Name:
Your Company Name Ltd

IBAN/Account Number:
GR1601101234567891234567890

Bank Name:
National Bank of Greece

QR Code Image URL:
https://yourdomain.com/assets/img/iris-qr.png

QR Code Width:
300

Additional Information:
After payment, send the transaction reference to billing@yourdomain.com
```

---

## 🧪 Testing

- [ ] View a test invoice as a customer
- [ ] Verify QR code displays correctly
- [ ] Test on mobile device
- [ ] Try scanning QR code
- [ ] Check all text displays properly
- [ ] Test on different browsers

---

## 🔧 Troubleshooting Quick Fixes

**QR Code Not Showing?**
- Check URL is correct and accessible
- Verify HTTPS if site uses SSL
- Clear browser cache

**Module Not Appearing?**
- Check file name: `irispayments.php` (all lowercase)
- Verify file location: `/modules/gateways/`
- Clear WHMCS cache: Utilities > System > Template Cache

**Can't Save Settings?**
- Check file permissions (644)
- Review Module Log in WHMCS

---

## 📁 File Locations

```
/modules/gateways/irispayments.php     [Module file]
/assets/img/iris-qr-code.png           [QR code - suggested location]
```

---

## 💡 Pro Tips

1. Use a high-resolution QR code (300x300px minimum)
2. Test QR code scanning before going live
3. Include clear payment instructions
4. Provide transaction reference submission method
5. Set realistic payment confirmation timeframes

---

## 🚀 Go Live Checklist

- [ ] All settings configured and saved
- [ ] QR code tested and working
- [ ] Test invoice created and verified
- [ ] Mobile display checked
- [ ] Customer instructions clear
- [ ] Team trained on manual payment marking
- [ ] Backup of configuration taken
- [ ] Support team informed

---

**Questions?** Refer to the full INSTALLATION_GUIDE.md for detailed instructions.
