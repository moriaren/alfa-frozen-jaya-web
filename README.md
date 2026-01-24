# Alfa Frozen Jaya (AFJ) - Digital Portal


![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)

---

## 🌟 Key Features

### 1. Digital Katalog (Customer Facing)
* **Seamless Browsing:** A modern interface designed for effortless exploration of frozen food and staple goods.
  ![Screenshot Home](images/RM1.jpg)
* **Responsive Dual-Nav:**
    * **Desktop:** Elegant header featuring dual branding (AFJ & Sembako).
        ![Screenshot Dekstop](images/RM2.jpg)
    * **Mobile:** Intuitive bottom navigation bar for a native app-like user experience.
        ![Screenshot Mobile](images/RM3.jpg)
* **Reseller Gateway:** A dedicated landing page for partnership information and reseller registration.
  ![Screenshot Reseller](images/RM4.jpg)

### 2. Sistem Absensi (Internal Operations)
* **Digital Logs:** Secure employee login system for recording daily clock-in and clock-out times.
  ![Screenshot Login](images/RM5.jpg)
* **Staff Data Management:** Real-time attendance monitoring for administrators to streamline payroll and discipline.
  ![Screenshot Administrator](images/RM6.jpg)
* **Secure Authentication:** Role-based access control ensuring the attendance portal is restricted to authorized staff only.
  ![Screenshot Attendance](images/RM7.jpg)

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
