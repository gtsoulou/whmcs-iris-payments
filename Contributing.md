# Contributing to WHMCS IRIS Payments Gateway Module

First off, thank you for considering contributing to this project! 🎉

The following is a set of guidelines for contributing to the WHMCS IRIS Payments Gateway Module. These are mostly guidelines, not rules. Use your best judgment, and feel free to propose changes to this document in a pull request.

## Table of Contents

- [Code of Conduct](#code-of-conduct)
- [How Can I Contribute?](#how-can-i-contribute)
- [Development Setup](#development-setup)
- [Coding Standards](#coding-standards)
- [Commit Guidelines](#commit-guidelines)
- [Pull Request Process](#pull-request-process)

## Code of Conduct

This project and everyone participating in it is governed by our Code of Conduct. By participating, you are expected to uphold this code. Please report unacceptable behavior by opening an issue.

### Our Standards

- Using welcoming and inclusive language
- Being respectful of differing viewpoints and experiences
- Gracefully accepting constructive criticism
- Focusing on what is best for the community
- Showing empathy towards other community members

## How Can I Contribute?

### Reporting Bugs

Before creating bug reports, please check existing issues as you might find that you don't need to create one. When you create a bug report, include as many details as possible:

- **Use a clear and descriptive title**
- **Describe the exact steps to reproduce the problem**
- **Provide specific examples**
- **Describe the behavior you observed** and **what you expected**
- **Include screenshots** if relevant
- **Include your environment details**:
  - WHMCS version
  - PHP version
  - Server environment
  - Browser (if frontend issue)

### Suggesting Enhancements

Enhancement suggestions are tracked as GitHub issues. When creating an enhancement suggestion, include:

- **Use a clear and descriptive title**
- **Provide a detailed description** of the suggested enhancement
- **Explain why this enhancement would be useful**
- **List any similar features** in other projects if applicable

### Your First Code Contribution

Unsure where to begin? You can start by looking through these issues:

- **Beginner issues** - issues which should only require a few lines of code
- **Help wanted issues** - issues which might be a bit more involved

### Pull Requests

1. Fork the repository
2. Create a new branch from `main`:
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. Make your changes
4. Test thoroughly
5. Commit your changes (see [Commit Guidelines](#commit-guidelines))
6. Push to your fork
7. Submit a pull request

## Development Setup

### Prerequisites

- PHP 7.4 or higher
- WHMCS 8.13 or higher (for testing)
- Git
- A text editor or IDE

### Setting Up Your Development Environment

1. **Fork and Clone**
   ```bash
   git clone https://github.com/YOUR-USERNAME/whmcs-iris-payments.git
   cd whmcs-iris-payments
   ```

2. **Create a Test WHMCS Installation**
   - Set up a local WHMCS installation for testing
   - Copy `irispayments.php` to `/modules/gateways/`

3. **Make Your Changes**
   - Edit the module file
   - Test in your WHMCS installation

4. **Test Thoroughly**
   - Test with different configurations
   - Test on different PHP versions if possible
   - Test the display on mobile devices

## Coding Standards

### PHP Coding Style

Follow these guidelines when writing PHP code:

1. **Indentation**: Use 4 spaces (no tabs)

2. **Naming Conventions**:
   - Functions: `camelCase` or `snake_case` (match WHMCS style)
   - Variables: `$camelCase`
   - Constants: `UPPER_SNAKE_CASE`

3. **Comments**:
   ```php
   /**
    * Function description
    *
    * @param array $params Description
    * @return string Description
    */
   ```

4. **Security**:
   - Always sanitize user input: `htmlspecialchars()`, `htmlentities()`
   - Validate configuration parameters
   - Escape output properly

5. **Error Handling**:
   - Check for empty/null values
   - Provide fallback displays
   - Log errors appropriately

### HTML/CSS Style

- Use semantic HTML
- Keep inline styles minimal (module limitation)
- Ensure mobile responsiveness
- Test cross-browser compatibility

### Documentation Style

- Use clear, concise language
- Provide examples where helpful
- Keep formatting consistent
- Update relevant documentation files

## Commit Guidelines

### Commit Message Format

```
type(scope): subject

body

footer
```

### Types

- **feat**: New feature
- **fix**: Bug fix
- **docs**: Documentation changes
- **style**: Code style changes (formatting, missing semi-colons, etc)
- **refactor**: Code refactoring
- **test**: Adding tests
- **chore**: Maintenance tasks

### Examples

```
feat(qr-code): add support for dynamic QR code generation

Added functionality to generate QR codes dynamically based on
invoice amount and reference number.

Closes #123
```

```
fix(display): correct QR code alignment on mobile devices

The QR code was not centering properly on screens smaller than
768px. Updated CSS to use flexbox for better responsiveness.

Fixes #456
```

```
docs(readme): update installation instructions

Added section about PHP version requirements and clarified
the QR code upload process.
```

## Pull Request Process

1. **Update Documentation**: Ensure all documentation reflects your changes
2. **Update CHANGELOG.md**: Add your changes to the "Unreleased" section
3. **Test Your Changes**: Verify everything works as expected
4. **Keep It Focused**: One feature/fix per pull request
5. **Write Clear Description**: Explain what, why, and how

### Pull Request Template

```markdown
## Description
Brief description of changes

## Type of Change
- [ ] Bug fix
- [ ] New feature
- [ ] Documentation update
- [ ] Code refactoring

## Testing
Describe how you tested your changes

## Checklist
- [ ] Code follows project style guidelines
- [ ] Self-review completed
- [ ] Documentation updated
- [ ] CHANGELOG.md updated
- [ ] Tested in WHMCS installation
- [ ] Mobile responsive (if UI change)

## Screenshots (if applicable)
Add screenshots here
```

## Questions?

Feel free to open an issue with your question or reach out to the maintainers.

## Recognition

Contributors will be recognized in:
- README.md contributors section (coming soon)
- GitHub contributors page
- Release notes for significant contributions

---

Thank you for contributing! 🙏🇬🇷
