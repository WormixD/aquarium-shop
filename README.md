# Aquarium-Shop

## Overview
An online store with aquarium accessories, created as a student project. The application was built using HTML, CSS, JavaScript, and PHP. It offers basic e-commerce functionalities such as product browsing, shopping cart management, order placement, and a customer account panel.

## Features
- Browse aquarium products (e.g. fish, accessories)
- Register and log in as a customer
- Submit and manage orders
- Admin panel for managing clients, messages, and orders
- Informational "aquarium guide" section

## Files
- `index.php` – Homepage with product listing
- `product-guppy.php` – Example product detail page
- `koszyk.php` – Shopping cart
- `moje-konto.php` – User account page
- `klienci.php`, `zamowienia_klientow.php` – Admin views
- `formularz.php`, `dodawanie.php`, `dodawanie_zam.php` – Adding new products/orders
- `wiadomosci.php`, `usunwanie_wiadomosci.php` – Messaging system
- `polaczenie.php`, `baza.php` – Database connections
- `style.css`, `script.js` and page-specific styles/scripts (e.g. `script-koszyk.js`)
- SQL dump: `sklep_akwarystyczny.sql`

## SQL Queries
1. `sklep_akwarystyczny.sql` – Contains structure and sample data for tables such as products, customers, orders, and messages.

## Instructions
1. Clone the repository or download the files
2. Import the `sklep_akwarystyczny.sql` into your MySQL server
3. Adjust database credentials in `polaczenie.php` / `baza.php`
4. Run the project using a local server (XAMPP recommended)

## Data Source
All product data and images used in this project are fictional and for educational purposes only.

## Author
[Szymon Bloch – LinkedIn](https://www.linkedin.com/in/szymon-bloch/)

## Licence
This project is licensed for educational and non-commercial use only.
