# WHMCS IRIS Payments Gateway Module

A custom payment gateway module for WHMCS that enables **IRIS instant payments** in Greece. This module displays a QR code and payment instructions, making it easy for customers to complete payments through the IRIS banking system.

## 🌟 Features

- ✅ **QR Code Display** - Shows your IRIS payment QR code on invoices
- ✅ **Customizable Instructions** - Add your own payment instructions
- ✅ **Payment Details** - Displays invoice number, amount, IBAN, and bank info
- ✅ **Mobile Responsive** - Clean, professional design that works on all devices
- ✅ **Easy Configuration** - Set up through WHMCS admin panel
- ✅ **Greek Market Ready** - Built specifically for Greek IRIS payments
- ✅ **Offline Payment Method** - No API integration required
- ✅ **Professional Layout** - Styled interface with clear payment information


## 🚀 Installation

### Step 1: Download
Download the latest release or clone this repository:
```bash
git clone https://github.com/gtsoulou/whmcs-iris-payments.git
```

### Step 2: Upload Module
Upload `irispayments.php` to your WHMCS installation:
```
/path/to/whmcs/modules/gateways/irispayments.php
```

### Step 3: Set Permissions
```bash
chmod 644 /path/to/whmcs/modules/gateways/irispayments.php
```

### Step 4: Activate in WHMCS
1. Log in to WHMCS Admin Panel
2. Navigate to **Setup → Payments → Payment Gateways**
3. Click **All Payment Gateways** tab
4. Find **IRIS Payments (Greece)**
5. Click to configure and activate

## ⚙️ Configuration

### Required Settings

| Setting | Description | Example |
|---------|-------------|---------|
| **Payment Instructions** | Instructions shown to customers | "Scan the QR code to pay via IRIS" |
| **Account Holder Name** | Your business name | "My Company Ltd" |
| **IBAN/Account Number** | Your IBAN | "GR1601101234567891234567890" |
| **Bank Name** | Your bank | "National Bank of Greece" |
| **QR Code Image URL** | Full URL to your QR code | "https://yourdomain.com/iris-qr.png" |
| **QR Code Width** | Display width in pixels | "300" |
| **Additional Information** | Extra instructions | "Send transaction reference after payment" |

### QR Code Setup

1. **Get your IRIS QR code** from your bank's business portal
2. **Upload the image** to a web-accessible directory:
   ```
   /whmcs/assets/img/iris-qr-code.png
   ```
3. **Use the full URL** in configuration:
   ```
   https://yourdomain.com/assets/img/iris-qr-code.png
   ```

## 📖 Documentation

- **[Installation Guide](INSTALLATION_GUIDE.md)** - Complete setup instructions
- **[Quick Setup Checklist](QUICK_SETUP.md)** - Fast reference guide
- **[Changelog](CHANGELOG.md)** - Version history and updates

## 🔧 Requirements

- **WHMCS**: 8.13 or higher
- **PHP**: 7.4 or higher
- **Server**: Any standard WHMCS-compatible hosting
- **QR Code**: IRIS payment QR code from your Greek bank

## 💡 Usage

### For Administrators

After configuration, customers will see the IRIS payment option when viewing invoices. To mark payments as received:

1. Go to **Billing → List Invoices**
2. Open the paid invoice
3. Click **Add Payment**
4. Select "IRIS Payments (Greece)"
5. Enter transaction details
6. Save

### For Customers

Customers will see:
1. Clear payment instructions
2. Payment details (amount, invoice #, IBAN)
3. QR code to scan with their banking app
4. Additional instructions for confirmation

## 🏦 Supported Banks

This module works with any Greek bank that supports IRIS instant payments, including:
- National Bank of Greece
- Alpha Bank
- Eurobank
- Piraeus Bank
- And all other IRIS-participating banks

## 🛠️ Troubleshooting

### QR Code Not Displaying
- Verify the image URL is correct and publicly accessible
- Check file permissions on the image
- Ensure HTTPS if your site uses SSL

### Module Not Appearing
- Check file name is exactly `irispayments.php` (lowercase)
- Verify file location: `/modules/gateways/`
- Clear WHMCS template cache

See the [Installation Guide](INSTALLATION_GUIDE.md) for more troubleshooting tips.

## 🤝 Contributing

Contributions are welcome! Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct and the process for submitting pull requests.

### How to Contribute
1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🌟 Support

If you find this module helpful, please:
- ⭐ Star this repository
- 🐛 Report bugs via [Issues](https://github.com/gtsoulou/whmcs-iris-payments/issues)
- 💡 Suggest features via [Issues](https://github.com/gtsoulou/whmcs-iris-payments/issues)

## 📬 Contact

For questions or support:
- Open an [Issue](https://github.com/YOUR-USERNAME/whmcs-iris-payments/issues)
- Check the [Documentation](INSTALLATION_GUIDE.md)

## ⚖️ Disclaimer

This module is provided as-is. Please ensure compliance with:
- WHMCS licensing terms
- Greek banking regulations
- Your bank's terms of service for IRIS payments

Always test thoroughly in a staging environment before deploying to production.

## 🎯 Roadmap

- [ ] Multi-language support (Greek/English)
- [ ] Multiple QR codes for different accounts
- [ ] Automatic payment confirmation via email
- [ ] Payment reference auto-generation
- [ ] Admin notification on new payments

---

**Made with ❤️ for the Greek WHMCS community** 🇬🇷
