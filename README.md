# Alfa Frozen Jaya (AFJ) - Digital Portal


![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)

---

## 📖 Background

Developed to support <strong>Alfa Frozen Jaya's digital transformation</strong>, this portal integrates a professional <strong>Digital Catalog</strong> for resellers with an efficient <strong>Internal Management Tool</strong>. By replacing manual workflows with a web-based solution, the platform enhances product accessibility and ensures high data integrity for staff attendance records.

---

## 🌟 Key Features

### 1. Digital Katalog (Customer Facing)
* **Seamless Browsing:** A modern interface designed for effortless exploration of frozen food and staple goods.
  <img src="public/images/RM1.jpg" width="800" alt="Screenshot Home">
* **Product Catalog:** A grid-organized layout featuring high-quality product images and pricing for better user conversion.
  <img src="public/images/RM2.jpg" width="800" alt="Screenshot Dekstop">
* **Mobile-First Design:** Featuring an intuitive bottom navigation bar for a native app-like experience on smartphones.
  <br><img src="public/images/RM3.jpeg" width="280" alt="Screenshot Mobile">
* **Reseller Gateway:** A dedicated landing page for partnership information and reseller registration.
  <img src="public/images/RM4.jpg" width="800" alt="Screenshot Reseller">

### 2. Attendance System (Internal Operations)
* **Secure Authentication:** A dedicated gateway for staff to access internal features safely.
  <img src="public/images/RM5.jpg" width="800" alt="Screenshot Login">
* **Admin Staff Monitoring:** A comprehensive backend table for administrators to monitor attendance, ensuring operational efficiency and disciplined payroll management.
  <img src="public/images/RM6.jpg" width="800" alt="Screenshot Administrators">
* **Digital Attendance Logs:** A specialized system for employees to record daily clock-in and clock-out times.
  <img src="public/images/RM7.jpg" width="800" alt="Screenshot Attendance">

---

## 🛠️ Stack Teknologi

* **Framework:** Laravel 10 (PHP 8.1+)
* **Frontend:** Tailwind CSS & Alpine.js
* **Database:** MySQL
* **Icons:** Heroicons

---

## 🚀 Installation Guide

### Prerequisites
* PHP >= 8.1
* Composer
* Node.js & NPM
* MySQL Server

### Steps to Run
1.  **Clone Repository**
    ```bash
    git clone [https://github.com/username/alfa-frozen-jaya-portal.git](https://github.com/username/alfa-frozen-jaya-portal.git)
    cd alfa-frozen-jaya-portal
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install && npm run build
    ```

3.  **Environment Configuration**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *Sesuaikan variabel `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` di file `.env`.*

4.  **Database Migration & Seeding**
    ```bash
    php artisan migrate --seed
    ```

5.  **Launch Server**
    ```bash
    php artisan serve
    ```
    Access the application at: `http://localhost:8000`

---

## 📂 Project Structure
* `resources/views/components/`: Contains Desktop and Mobile Navbar components.
* `app/Http/Controllers/`: Core logic for the catalog and attendance algorithms.
* `public/images/`: Visual assets and branding logos.

## 📄 Project Status & License
Developed as part of the Project Based Learning (PBL) / On the Job Training (OJT) program.

* **Developer:** Tommy
* **Institution:** BBPVP Bekasi
* **Industry Partner:** Alfa Frozen Jaya (AFJ)

All rights to design assets and source code are subject to the agreement between the educational institution and the industry partner. Use outside of educational or AFJ operational purposes requires written permission.

---
**Maintained by:** Tommy ([@tommoriaren](https://github.com/tommoriaren))
