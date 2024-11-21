# Black Friday E-commerce Application

A modern e-commerce platform built with Laravel, featuring a sleek black and yellow theme, designed specifically for Black Friday sales and special promotions.


## ✨ Features

### 👤 User Features
- Browse products with dynamic filtering 🛍️
- Search functionality 🔍
- Shopping cart management 🛒
- User authentication 👤
- Responsive design 📱
- Product ratings and reviews ⭐
- Secure checkout process 💳
- Email notifications 📧

### 🔧 Admin Features
- Product management 📊
- Category management 🏷️
- Price and discount management 💰
- Image upload and management 📸
- Sales analytics 📈
- User management 👥
- Promotion management 🎯

## 🚀 Tech Stack

- **Framework:** Laravel 10.x
- **Frontend:** 
  - 🎨 Blade Templates
  - 💅 TailwindCSS
  - 🎯 DaisyUI
  - ⚡ Alpine.js
- **Authentication:** 🔐 Laravel Fortify
- **Database:** 📦 MySQL
- **File Storage:** 💾 Laravel Storage
- **Payment Processing:** 💳 Stripe (coming soon)

## 🛠️ Installation

1. Clone the repository

```bash
git clone https://github.com/yourusername/blackfriday-app.git
```

2. Install dependencies

```bash
composer install
npm install
```

3. Create environment file

```bash
cp .env.example .env
```

4. Generate application key

```bash
php artisan key:generate
```


5. Configure database in `.env` file


```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blackfriday
DB_USERNAME=root
DB_PASSWORD=
```

6. Run migrations

```bash
php artisan migrate
```

7. Seed the database

```bash
php artisan db:seed
```


8. Run the server

```bash
php artisan serve
```


## 📁 Directory Structure

```
📦 blackfriday-app
 ┣ 📂 app
 ┃ ┣ 📂 Http
 ┃ ┃ ┣ 📂 Controllers
 ┃ ┃ ┗ 📂 Middleware
 ┃ ┗ 📂 Models
 ┣ 📂 resources
 ┃ ┣ 📂 views
 ┃ ┃ ┣ 📂 auth
 ┃ ┃ ┣ 📂 components
 ┃ ┃ ┗ 📂 products
 ┃ ┗ 📂 css
 ┣ 📂 routes
 ┃ ┗ 📜 web.php
 ┗ 📂 public
```



## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 🔒 Security

If you discover any security-related issues, please email `security@example.com` instead of using the issue tracker.

## 📝 License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - PHP Framework
- [TailwindCSS](https://tailwindcss.com) - Utility-first CSS
- [DaisyUI](https://daisyui.com) - Tailwind Components
- [Alpine.js](https://alpinejs.dev) - JavaScript Framework

## 💬 Support

For support, email `support@example.com` or join our Slack channel.

---

<div align="center">
  Made with ❤️ by <strong>Your Name</strong><br>
  <sup>© 2024 Black Friday E-commerce. All rights reserved.</sup>
</div>


