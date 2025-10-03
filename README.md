# Laravel 12 Basic Tutorial Project

This repository is a **small learning project** built with **Laravel 12**, following step-by-step lessons to understand the core concepts of Laravel development.  
The project is inspired by [Laravel Daily's From Scratch Lessons](https://laraveldaily.com/lesson/laravel-from-scratch).  

In addition to Laravel basics, the workflow also introduces **Git branching strategies** (using `master`, `develop`, and `feature/*` branches) to simulate real-world professional development practices.

---

## 📚 Lesson Outline

### Installation, Routes, Blade Pages and Layouts
1. **Required Tools and Laravel Installation** (6:17)  
2. **Routing and Creating New Page** (3:12)  
3. **Tailwind in Laravel: New Homepage Design** (4:45)  
4. **Navigation and Reusable Main Layout** (5:28)  

### Viewing Data from Database
5. **New Design Layout for Blog Project** (2:24)  
6. **Database Structure and Migrations** (7:34)  
7. **MVC, DB Queries, and Eloquent Models** (6:49)  
8. **Eloquent Relations and GET Parameters** (7:27)  
9. **Route Model Binding with Parameters** (4:56)  

---

## 🔧 Learning Goals

- Setting up a Laravel 12 project from scratch.  
- Defining routes and creating Blade views.  
- Using **TailwindCSS** for frontend styling.  
- Building layouts and navigation with reusable components.  
- Working with **database migrations** and designing schema.  
- Understanding **MVC architecture** and querying data with **Eloquent ORM**.  
- Learning **Eloquent relationships** and passing parameters through routes.  
- Using **Route Model Binding** to simplify controller logic.  
- Practicing **Git branching workflow**:
  - `master` → production-ready branch  
  - `develop` → active development branch  
  - `feature/*` → isolated features  

---

## 🚀 How to Run (Quick Setup)

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/laravel12-tutorial.git
   cd laravel12-tutorial

2. Install dependencies::
   ```bash
   composer install
   npm install && npm run dev

3. Copy .env and run migrations:
   ```bash
   cp .env.example .env
   php artisan key:generate
   php artisan migrate

4. Start the server:
   ```bash
   php artisan serve

Then open http://localhost:8000 🚀

## 🌿 Git Workflow Example
This project also simulates a professional Git workflow using branches:

1. Start from the latest develop branch:
   ```bash
   git checkout develop
   git pull

2. Create a new feature branch:
   ```bash
   git checkout -b feature/new-homepage

3. Work on your changes, commit them:
   ```bash
   git add .
   git commit -m "Add new homepage layout with Tailwind"

4. Merge back into develop:
   ```bash
   git checkout develop
   git merge feature/new-homepage

5. After testing, merge develop into master for release:
   ```bash
   Copy code
   git checkout master
   git merge develop

This workflow keeps the main branch (master) always stable, while active work happens in develop and isolated feature/* branches.

## 📝 Notes
This project is purely educational and meant to practice:

Laravel 12 basics

Blade templating

Database handling with migrations and Eloquent

Clean Git workflows

## 📖 Source
Tutorial source: Laravel Daily — Laravel From Scratch