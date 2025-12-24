<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel CRUD Assignment - Teacher Management System

## 👤 Student Information

-   **Name:** Ngov Kimsouheng
-   **ID:** B20243095
-   **Group:** Computer Science E3 Evening
-   **Instructor:** Oum Saokosal
-   **Due Date:** 29/12/2025

---

## 📝 Project Overview

This project is a standard CRUD (Create, Read, Update, Delete) application developed using the Laravel framework. It manages a list of teachers stored in a MySQL database, demonstrating the use of Eloquent ORM, Controllers, and Blade components.

### 🗄️ Database Schema

The application uses a custom table structure defined as follows:

**Table Name:** `tbl_teacher`

| Column      | Type   | Description                  |
| :---------- | :----- | :--------------------------- |
| `tid`       | BigInt | Primary Key (Auto-increment) |
| `full_name` | String | Teacher's Full Name          |
| `tel`       | String | Telephone Number             |

---

## 🛠 Project Components

### 1. Model: `Teacher.php`

The model is configured to handle the non-standard table name and primary key:

-   Uses `protected $table = 'tbl_teacher';`
-   Uses `protected $primaryKey = 'tid';`
-   Allows mass assignment via `protected $fillable = ['full_name', 'tel'];`

### 2. Controller: `TeacherController.php`

Contains the CRUD logic:

-   `index()`: Displays a table of all teachers.
-   `create()` / `store()`: Provides and processes the form for adding teachers.
-   `edit()` / `update()`: Provides and processes the form for modifying records.
-   `destroy()`: Deletes a teacher based on their `tid`.

### 3. Routes: `web.php`

Utilizes Laravel's resource routing for efficient endpoint management:

```php
Route::resource('teachers', TeacherController::class);
```
