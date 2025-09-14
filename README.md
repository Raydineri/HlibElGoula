# HlibElGoula
![Symfony](https://img.shields.io/badge/Symfony-000000?style=for-the-badge&logo=symfony&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Twig](https://img.shields.io/badge/Twig-339933?style=for-the-badge&logo=twig&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
<div align="center">
  <img src="logo.png" alt="HlibElGoula Logo" width="300" height="200">
   <b>HlibElGoula</b>
  <p><em>Vous Pouvez Le Trouver Ici</em></p>
</div>

## About

HlibElGoula is a modern e-commerce platform built with Symfony, offering a seamless shopping experience for dairy products and more. Our platform combines robust backend functionality with an intuitive user interface.


## Features

- 🛒 **Product Management** - Complete catalog with categories and inventory tracking
- 👥 **User Management** - Registration, authentication, and profile management
- 🛍️ **Shopping Cart** - Add, remove, and modify cart items
- 💳 **Payment Integration** - Secure payment processing
- 📦 **Order Management** - Track orders from placement to delivery
- 🔍 **Search & Filter** - Advanced product search and filtering options
- 📱 **Responsive Design** - Mobile-friendly interface
- 🛡️ **Security** - Built-in Symfony security features

## Technology Stack

- **Framework**: Symfony 6.x
- **PHP**: 8.1+
- **Database**: MySQL/MariaDB
- **Frontend**: Twig, Bootstrap, JavaScript
- **Package Manager**: Composer
- **Asset Management**: Webpack Encore

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL/MariaDB
- Node.js & npm (for asset compilation)

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/hlibelgoula.git
   cd hlibelgoula
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env .env.local
   # Edit .env.local with your database credentials
   ```

4. **Database setup**
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   php bin/console doctrine:fixtures:load
   ```

5. **Build assets**
   ```bash
   npm run build
   ```

6. **Start the development server**
   ```bash
   symfony serve -d
   ```

## Configuration

### Database Configuration
Edit your `.env.local` file:
```env
DATABASE_URL="mysql://username:password@127.0.0.1:3306/hlibelgoula"
```

### Mailer Configuration
```env
MAILER_DSN=smtp://localhost:1025
```

## Usage

1. Access the application at `http://localhost:8000`
2. Register a new account or use demo credentials
3. Browse products and add them to your cart
4. Proceed to checkout and complete your order

## Project Structure

```
├── assets/                 # Frontend assets
├── config/                 # Configuration files
├── migrations/             # Database migrations
├── public/                 # Web root
├── src/
│   ├── Controller/         # Controllers
│   ├── Entity/            # Doctrine entities
│   ├── Form/              # Form types
│   ├── Repository/        # Repository classes
│   └── Service/           # Business logic services
├── templates/             # Twig templates
└── tests/                # Test files
```

## Development

### Running Tests
```bash
php bin/phpunit
```

### Code Quality
```bash
# PHP CS Fixer
vendor/bin/php-cs-fixer fix

# PHPStan
vendor/bin/phpstan analyse
```

### Asset Development
```bash
# Watch for changes
npm run watch

# Build for production
npm run build
```

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support

If you have any questions or issues, please:
- Check the [documentation](docs/)
- Open an issue on GitHub
- Contact us at support@hlibelgoula.com

## Acknowledgments

- Symfony community for the excellent framework
- Contributors who helped improve this project
- Our users for their valuable feedback

---

<div align="center">
  Made with ❤️ by the Rayen Bne othman
</div>

