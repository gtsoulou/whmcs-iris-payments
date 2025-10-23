# Changelog

All notable changes to the WHMCS IRIS Payments Gateway Module will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.0] - 2025-10-23

### Added
- Initial release of IRIS Payments Gateway Module
- QR code display functionality for IRIS payments
- Customizable payment instructions
- Payment details display (invoice number, amount, IBAN, bank info)
- Mobile-responsive design
- Admin configuration panel with 7 configurable options:
  - Payment Instructions
  - Account Holder Name
  - IBAN/Account Number
  - Bank Name
  - QR Code Image URL
  - QR Code Width
  - Additional Information
- Professional styled payment interface
- Complete installation documentation
- Quick setup checklist

### Features
- Compatible with WHMCS 8.13+
- PHP 7.4+ support
- Offline payment method (no API required)
- Greek banking system integration ready
- Clean, professional UI with CSS styling
- Security considerations implemented

### Documentation
- Comprehensive installation guide
- Quick setup checklist
- README with examples and troubleshooting
- Contributing guidelines
- MIT License

---

## [Unreleased]

### Planned Features
- Multi-language support (Greek/English interface)
- Support for multiple QR codes (different accounts)
- Automatic payment confirmation emails
- Payment reference auto-generation
- Admin notifications for new payments
- Invoice-specific QR code generation
- Payment status webhook support

---

## Version History

### Version Format
- **Major.Minor.Patch** (e.g., 1.0.0)
- **Major**: Breaking changes or major new features
- **Minor**: New features, backward compatible
- **Patch**: Bug fixes, minor improvements

---

## How to Update

1. Backup your current `irispayments.php` file
2. Download the new version
3. Replace the file in `/modules/gateways/`
4. Clear WHMCS cache
5. Review any configuration changes needed

---

## Support

For issues, questions, or feature requests:
- [GitHub Issues](https://github.com/YOUR-USERNAME/whmcs-iris-payments/issues)
- [Documentation](INSTALLATION_GUIDE.md)

---

[1.0.0]: https://github.com/YOUR-USERNAME/whmcs-iris-payments/releases/tag/v1.0.0
[Unreleased]: https://github.com/YOUR-USERNAME/whmcs-iris-payments/compare/v1.0.0...HEAD
