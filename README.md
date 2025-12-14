# RozeeStore Admin Panel

## a. Project Title & Description

Name: Nur Fadhilah binti Arifin
Student ID: 2024438458
Class: D1CDIM2624A
Subject: IMS566

**RozeeStore Admin Panel** is a modern, responsive, and feature-rich administrative dashboard designed for managing an e-commerce platform. It provides a clean and intuitive interface for tracking sales, managing users, viewing analytics, and handling customer communications. The application is built with a focus on user experience, featuring a persistent dark mode, card-based layouts, and interactive data visualizations to make data management efficient and enjoyable.

---

## b. Features Included

### Core Dashboard & Analytics
*   **Dynamic Dashboard:** Overview with key metrics like Total Sales, Orders, and Customer Growth.
*   **Interactive Charts:** Sales trends using Chart.js and revenue overview using ApexCharts.
*   **Quick Actions:** Shortcuts for common tasks like adding products, viewing orders, and managing customers.

### User Management
*   **User Cards:** Modern card-based layout displaying user avatars, roles (Admin, Seller, Customer), and status.
*   **Role-Based Styling:** Visual differentiation between user roles with color-coded badges.
*   **Status Tracking:** View active, pending, or banned user statuses.

### Sales & Order Management
*   **Sales List:** Detailed view of all sales with product images, names, payment status, and order status.
*   **Product Visualization:** Each sale item is displayed in an interactive card with product imagery.
*   **Pagination:** Easy navigation through large numbers of sales or users.

### Internal Messaging System
*   **Conversation View:** A full-featured messaging interface with a list of conversations and a detailed message view.
*   **Compose & Reply:** Ability to compose new messages and reply to existing conversations.
*   **Search & Filter:** Search messages by sender or content, and filter by All, Unread, or Starred.
*   **Message Actions:** Star important messages or delete conversations.

### Authentication
*   **Secure Login Page:** A clean, responsive login form with validation.
*   **User Registration:** A registration page with form validation and password hashing capabilities (ready for database integration).
*   **PHP Backend:** Server-side logic for processing login and registration securely.

### User Interface & Experience
*   **Persistent Dark Mode:** Users can toggle between light and dark themes, and their preference is saved across all pages using LocalStorage.
*   **Fully Responsive Design:** The layout adapts seamlessly to desktop, tablet, and mobile devices.
*   **Modern Card-Based UI:** Information is presented in clean, interactive cards for better readability.
*   **Interactive Sidebar:** Collapsible navigation menu for more screen real estate on smaller devices.

---

## c. Instructions to Test Login

To test the login and registration functionality locally, you will need a local server environment like XAMPP, MAMP, or WAMP.

**Prerequisites:**
*   A local web server with PHP support (e.g., XAMPP).

**Step 1: Set Up the Project**
1.  Download and extract all project files.
2.  Copy the entire project folder to your server's web root directory (e.g., `C:/xampp/htdocs/rozeestore` for XAMPP).

**Step 2: Start the Server**
1.  Open your XAMPP Control Panel.
2.  Start the **Apache** module.

**Step 3: Access the Application**
1.  Open your web browser.
2.  Navigate to the login page: `http://localhost/rozeestore/login.php`
3.  To test registration, navigate to: `http://localhost/rozeestore/register.php`

**Step 4: Test the Forms**
*   **Login:** You can enter any username and password to test the client-side validation. The PHP backend logic for database authentication is included but commented out for security. You can uncomment it after setting up your database.
*   Username: admin & Password: 123
*   **Registration:** Fill out the form to test validation for matching passwords, email format, and required fields. A success message will appear upon submission.

---

## d. Frameworks/Libraries Used

### Frontend
*   **HTML5:** For the semantic structure of the pages.
*   **CSS3:** For styling, including CSS Variables for dynamic theming (dark/light mode).
*   **JavaScript (ES6+):** For all client-side interactivity, DOM manipulation, and API calls for charts.
*   **Bootstrap 5.3.2:** Used specifically for the responsive grid and components on the `login.php` and `register.php` pages.
*   **Google Fonts (Poppins):** The primary font for the application's clean and modern typography.
*   **Material Icons Sharp:** Provides the consistent and sharp icon set used throughout the dashboard.

### Data Visualization
*   **Chart.js:** A flexible library for rendering the interactive sales line chart on the dashboard.
*   **ApexCharts:** Used to create the modern, gradient-filled revenue area chart.

### Backend
*   **PHP:** The server-side language used for handling authentication, form processing, and preparing data for the frontend.

### Data Storage
*   **LocalStorage (Web API):** Used in the browser to persist the user's dark mode preference across page reloads and navigation.

---
