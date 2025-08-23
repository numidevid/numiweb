# **NUMI Community Website (numiweb)**

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css)
![License](https://img.shields.io/github/license/numidevid/numiweb?style=for-the-badge)

The official website for NUMI Community, a digital home forged by the community, for the community. Built with Laravel to provide a solid and modern platform.

### **[Join Our Discord](https://discord.com/invite/numi-community-829963971258875925)**

## **About The Project**

`numiweb` is a project dedicated to building the official online presence for **NUMI Community**. This website serves not only as a landing page but also as an information hub, a gallery of our history, and the main gateway for new members to join our family.

The primary goal of this project is to tell our story—from a humble gaming community founded in 2018 to the diverse ecosystem it is today for gamers, creators, and tech enthusiasts across the Indonesian archipelago.

Key features of the website include:
* A main landing page that introduces our vision and mission.
* A showcase of our journey and legendary events, such as the annual **NUMI Minecraft Ramadhan**.
* Profiles of the dedicated core team behind NUMI.
* A gateway to connect with all our social platforms, especially our Discord server.

## **Built With**

This project is built with modern technologies to ensure performance, security, and scalability.

* **Backend:**
    * [Laravel 12](https://laravel.com/)
    * PHP 8.2+
* **Frontend:**
    * [Vite](https://vitejs.dev/)
    * [Tailwind CSS](https://tailwindcss.com/)
* **Database:**
    * MySQL
* **Development:**
    * [Composer](https://getcomposer.org/)
    * [NPM/Yarn](https://www.npmjs.com/)

## **Getting Started**

To get a local copy up and running, follow these simple steps.

### **Prerequisites**

Ensure you have the following software installed:
* PHP >= 8.2
* Composer
* Node.js & NPM / Yarn
* A Database Server (e.g., MySQL, MariaDB)

### **Installation**

1.  **Clone the repository:**
    ```sh
    git clone https://github.com/numidevid/numiweb.git
    ```
2.  **Navigate to the project directory:**
    ```sh
    cd numiweb
    ```
3.  **Install PHP dependencies via Composer:**
    ```sh
    composer install
    ```
4.  **Install frontend dependencies via NPM:**
    ```sh
    npm install
    ```
5.  **Create your environment file:**
    ```sh
    cp .env.example .env
    ```
6.  **Generate the Laravel application key:**
    ```sh
    php artisan key:generate
    ```
7.  **Configure your `.env` file:**
    Open the `.env` file and set up your database connection (DB\_HOST, DB\_PORT, DB\_DATABASE, DB\_USERNAME, DB\_PASSWORD).
8.  **Run the database migrations:**
    ```sh
    php artisan migrate
    ```
    If available, you can also run the seeders:
    ```sh
    php artisan db:seed
    ```
9.  **Run the development servers:**
    * In your first terminal, run Vite to compile frontend assets:
        ```sh
        npm run dev
        ```
    * In a second terminal, run the Laravel server:
        ```sh
        php artisan serve
        ```
10. **Done!** Open your browser and navigate to `http://127.0.0.1:8000`.

## **Contributing**

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request

## **License**

Distributed under the MIT License. See `LICENSE` for more information.