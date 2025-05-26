# Car Resale Web App

A simple Laravel-based web application that allows individual users to register, post car listings, and browse cars with advanced filters. Built as a diploma project to solve real-world issues faced by users trying to sell cars on general-purpose platforms like Facebook Marketplace.

---

## Features

- User Registration & Login (Authentication)
- Post, Edit, and Delete Car Listings
- Upload and manage car images
- Advanced Search & Filter (make, model, year, price, etc.)
- Add to Favorites (Watchlist)
- User profile and listing management
- Responsive, clean UI using Blade templates

---

## Tech Stack

- **Backend:** PHP (Laravel Framework)
- **Frontend:** HTML5, CSS3, Blade Templates
- **Database:** MariaDB
- **Web Server:** Apache (XAMPP)
- **Testing:** PestPHP, Laravel Artisan Test
- **Tools:** Git, StarUML (for diagrams), VSCode

---

## Getting Started

### 1. Clone the repository

git clone https://github.com/yourusername/car-resale-web-app.git <br>
cd car-resale-web-app

### 2. Install dependencies
composer install <br>
npm install && npm run build

### 3. Configure environment
cp .env.example .env <br>
php artisan key:generate

- Update .env with your database credentials.

### 4. Migrate and seed the database
php artisan migrate --seed

### 5. Serve the app
php artisan serve

### 6. Running Tests
php artisan test

---

## Screenshots

### Home Page

- **Main View**  
  ![Home Page](screenshots/homepage_1.png)

- **Search Section**  
  ![Home Search](screenshots/homepage_2.png)

- **Car Listings**  
  ![Home Car Listings](screenshots/homepage_3.png)

---

### Search Filter

- **Search Filter – View 1**  
  ![Search Filter - figure 1](screenshots/search_filter_1.png)

- **Search Filter – View 2**  
  ![Search Filter - figure 2](screenshots/search_filter_2.png)

---

### Authenticated User Views

#### Car Listing Form

- **Form Overview**  
  ![Car Listing Form - figure 1](screenshots/car_listing_form_1.png)

- **Validation & Upload Section**  
  ![Car Listing Form - figure 2](screenshots/car_listing_form_2.png)

---

#### Profile Page

- **Profile Info View**  
  ![Profile - figure 1](screenshots/profile_1.png)

- **Update Profile Form**  
  ![Profile - figure 2](screenshots/profile_2.png)

---

#### My Cars

This section allows users to:
- View all cars they have posted  
- Edit or delete any of their listings  
- Manage car images

- **List of Posted Cars**  
  ![My Cars - List](screenshots/manage_cars.png)

- **Edit Car Listing – View 1**  
  ![My Cars - Edit - fig 1](screenshots/edit_car_listing_1.png)

- **Edit Car Listing – View 2**  
  ![My Cars - Edit - fig 2](screenshots/edit_car_listing_2.png)

- **Manage Car Images**  
  ![My Cars - Images](screenshots/edit_car_images.png)

---

#### My Favorite Cars

Users can save cars to their watchlist and revisit them here.

- **Favorite Cars List**  
  ![My Favorites - List](screenshots/my_favorite_list.png)

- **Remove from Favorites**  
  ![My Favorites - Remove](screenshots/my_favorite_remove.png)

---

## License
This project is for academic and portfolio purposes.
Feel free to explore, learn, and adapt for non-commercial use.

---

## About the Developer
Built by Pone Nya Soe Nyunt, a junior PHP developer and diploma graduate.
Passionate about building clean, functional web apps with Laravel.