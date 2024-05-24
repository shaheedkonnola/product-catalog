# product-catalog

This project is a basic product catalog management system built with Laravel 10. It provides  CRUD (Create, Read, Update, Delete) operations for managing product.

## Features

Product:
  - **Create:** Add new products with a user-friendly form, including validation.
  - **Read:** View a list of all products.
  - **Update:** Edit existing product details.
  - **Delete:** Remove products with a confirmation prompt.
    
Search:
  -  Easily search for products by name using a search bar.
  -  Case-insensitive and substring matching for flexible searches.
    
Frontend:
  -  Utilizes Laravel Blade templates for a simple and effective UI.
  -  Bootstrap for styling and layout consistency.
  -  Added a message alert section for confirmation.

Backend:
  -  backend powered by Laravel 10.
  -  Utilizes Eloquent ORM for efficient database interaction.
  -  Resource controllers for streamlined CRUD operations.

## Technical Approach

Backend (Laravel 10):
  -  **Model:** The Product model represents the product data structure, including attributes like name and timestamps.
  -  **Controller:** The ProductController handles all CRUD operations, search logic, and data validation.
  -  **Routes:** Resource routes are used for defining RESTful endpoints for product management.
  -  **Database:** MySQL is used for storing product data.

Frontend (Laravel Blade Templates):
  -  **Templates:** The user interface is built using Blade templates, which provide a convenient way to create dynamic views 
     within Laravel.
  -  **Forms:** HTML forms are used for product creation and editing, with CSRF protection for security.
  -  **Tables:** Product lists are displayed using HTML tables with Bootstrap styling for a clean and responsive presentation.

## Scalability Considerations

Here's how it can be scaled:

-   **Full-Text Search:** Integrate with a dedicated search engine like Elasticsearch for advanced search capabilities.
-   **Filtering and Sorting:** Add filtering and sorting options to the product list based on attributes like category, price, etc.
-   **Authentication and Authorization:** Secure specific actions like product creation and editing by implementing user 
    authentication and role-based access control.
-   **API:** Build a RESTful API to allow external applications to interact with the product catalog.
-   **Front-End:** Implement advanced JS features like form validation, error handling, and real-time updates.


## Installation and Usage

Clone the Repository:
        
    git clone <repository-url>

Install Dependencies:
    
    composer install

Set Up Environment:

    set up .env and update your database credentials.
  
Run migrations: 
    
    php artisan migrate

Run the Development Server:

    php artisan serve
