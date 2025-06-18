# 🛒🍩 PHP Online Bakery Ordering System
_A modern PHP-based website for ordering bakery products, featuring a stylish UI, real-time summary, discount system, and advanced JavaScript interactions._

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP](https://img.shields.io/badge/PHP-Backend%20Processing-777BB4.svg?logo=php)](https://www.php.net/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26.svg?logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/HTML5)

## 📋 Table of Contents
1. [Overview](#-overview)
2. [Key Features](#-key-features)
3. [Screenshots](#-screenshots)
4. [System Requirements](#-system-requirements)
5. [Local Setup](#-local-setup)
6. [Usage](#-usage)
7. [File Structure](#-file-structure)
8. [Notes](#-notes)
9. [Contributing](#-contributing)
10. [License](#-license)
11. [Contact](#-contact)

## 📄 Overview

The **Online Bakery Ordering System** is a modern web application that allows users to order bakery products (donuts, cookies, cakes, coffee) with a beautiful, responsive interface. Built with PHP, JavaScript, and CSS3, it features real-time order summary, discount calculation, and interactive UI elements. The project is ideal as a template for e-commerce or educational purposes.

<br><br>
<p align="center">
  <img src="screenshots/1.gif" width="85%">
</p>

## ✨ Key Features

*   🛒 **Order 4 Products**: Donuts, cookies, cakes, and coffee, each with quantity controls.
*   💸 **Discount System**: 10% discount automatically applied for orders above €12.
*   🧾 **Real-Time Summary**: Live updates of product count and total price.
*   🎨 **Modern Design**: Gradient backgrounds, animated buttons, and responsive layout.
*   ⚡ **Advanced JavaScript**: Keyboard shortcuts, touch gestures, scroll animations, notifications, and data export (JSON).
*   🛡️ **Form Validation**: Ensures products are selected and data is correct.
*   📱 **Mobile-First**: Fully responsive for mobile, tablet, and desktop.
*   📤 **Order Export**: Save your order as a JSON file.
*   🔔 **Visual Notifications**: Elegant alerts for discounts and actions.

## 🖼️ Screenshots

_Sample screenshots of the bakery ordering page and order summary._

<p align="center">
  <img src="screenshots\1.jpg" width="300"/>
  <img src="screenshots\2.jpg" width="300"/>
  <img src="screenshots\3.jpg" width="300"/>
  <img src="screenshots\4.jpg" width="300"/>
  <img src="screenshots\5.jpg" width="300"/>
</p>


## 🛠️ System Requirements

* **Web Server with PHP** (e.g., XAMPP, WAMP, or PHP built-in server)
* **Modern Web Browser** (with CSS3 and ES6 support)
* **Internet Connection** (for icons and images)

## ⚙️ Local Setup

1. **Download or clone the repository:**
    ```bash
    git clone <repository-url>
    cd Ordering_PHP
    ```
2. **Start a PHP server:**
    - With XAMPP/WAMP: Place files in `htdocs`/`www` and start Apache.
    - Or use PHP built-in server:
      ```bash
      php -S localhost:8000
      ```
3. **Open** `index.php` in your browser:
    - [http://localhost:8000/index.php](http://localhost:8000/index.php)

## 📝 Usage

1. **Select products and quantities** using the + / - buttons or keyboard.
2. **See real-time summary** and discount notifications as you add items.
3. **Submit your order** to view the summary page (`order.php`).
4. **Export your order** as JSON if desired.
5. **Reset the form** to start a new order.

## 📁 File Structure

```
Ordering_PHP/
├── index.php          # Main page with order form
├── order.php          # Order summary page
├── styles.css         # Additional styles and animations
├── script.js          # JavaScript functions
├── README.md          # This file
├── LICENSE            # License
├── paczek.jpg         # Donut image
└── screenshots/       # Screenshots directory
```

## 🔔 Notes

* **Discount**: 10% off for orders above €12 is applied automatically.
* **Form Validation**: The form checks for valid product selection before submission.
* **Responsive Design**: Works on all devices (mobile, tablet, desktop).
* **No payment integration**: This is a demo/template project.
* **Modern UI**: Uses CSS3, Flexbox, Grid, and animations for a professional look.
* **Data Export**: Orders can be saved as JSON for demo purposes.

## 🤝 Contributing

Contributions are welcome! Suggestions for new features, bug fixes, or improvements are appreciated.
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Commit your changes.
4. Push to your branch.
5. Open a Pull Request.

## 📃 License

This project is licensed under the **MIT License**. See the `LICENSE` file for details.

## 📧 Contact

Created by **Adrian Lesniak**. For questions or feedback, please open an issue or contact the repository owner.

---

**Note**: This website is an example of modern design and can be used as a template for other e-commerce projects.
