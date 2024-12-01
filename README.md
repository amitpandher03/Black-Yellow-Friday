# Black & Yellow Friday E-commerce Application

A modern e-commerce platform built with Laravel, featuring a sleek black and yellow theme, designed specifically for Black Friday sales and special promotions.

## ✨ Features

### 👤 User Features
- User authentication and authorization 🔐
- Browse products with dynamic filtering and search 🔍
- Shopping cart management 🛒
- Wishlist functionality ❤️
- Product ratings and reviews ⭐
- Responsive design for all devices 📱
- Email notifications for password reset 📧
- Profile management with avatar upload 👤

### 🛍️ Product Features
- Dynamic product listing with pagination
- Category-based filtering
- Price sorting (high to low, low to high)
- Discounted prices calculation
- Product image management
- Stock tracking

## 🚀 Tech Stack

- **Backend:** Laravel 10.x
- **Frontend:** 
  - Blade Templates
  - TailwindCSS
  - DaisyUI Components
  - Alpine.js
- **Authentication:** Laravel Fortify
- **Database:** MySQL
- **File Storage:** Laravel Storage
- **Real-time Updates:** Livewire

## 🛠️ Installation

1. Clone the repository

```bash
git clone https://github.com/amitpandey-github/blackfriday-app.git
```

2. Install dependencies

```bash
composer install
npm install
```

3. Configure environment

```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database in `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=black_and_yellow_friday
DB_USERNAME=root
DB_PASSWORD=root
```

5. Configure mail settings in `.env`

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="your-email@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"
```

6. Run migrations and seeders

```bash
php artisan migrate
php artisan db:seed
```

7. Start the development server

```bash
php artisan serve
npm run dev
```

## 📁 Project Structure

```
📦 black-and-yellow-friday
 ┣ 📂 app
 ┃ ┣ 📂 Http
 ┃ ┃ ┣ 📂 Controllers   # Application controllers
 ┃ ┃ ┣ 📂 Livewire      # Livewire components
 ┃ ┃ ┗ 📂 Middleware    # Custom middleware
 ┃ ┣ 📂 Models          # Eloquent models
 ┃ ┗ 📂 Actions         # Fortify actions
 ┣ 📂 resources
 ┃ ┣ 📂 views
 ┃ ┃ ┣ 📂 auth          # Authentication views
 ┃ ┃ ┣ 📂 cart          # Shopping cart views
 ┃ ┃ ┣ 📂 components    # Blade components
 ┃ ┃ ┣ 📂 layouts       # Layout templates
 ┃ ┃ ┣ 📂 products      # Product views
 ┃ ┃ ┗ 📂 profile       # User profile views
 ┗ 📂 public            # Public assets
```

## 🔑 Key Features Implementation

- **Authentication:** Using Laravel Fortify for secure user authentication
- **File Upload:** Handling profile pictures and product images
- **Shopping Cart:** Real-time cart updates with Livewire
- **Product Management:** CRUD operations with image handling
- **User Profiles:** Custom profile management with avatar support

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 📧 Contact

- **Email:** pandheramit245@gmail.com
- **GitHub:** [@amitpandher03](https://github.com/amitpandher03)

---

<div align="center">
  Made with ❤️ by <strong>Amit Pandher</strong><br>
  <sup>© 2024 Black & Yellow Friday. All rights reserved.</sup>
</div>


