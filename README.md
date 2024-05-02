# Property Management System

This is a simple Property Management System built with Laravel.

## Setup Instructions

1. **Clone the repository:**

    ```
    git clone <https://github.com/xanderper/bookmybooking_assessement.git>
    ```

2. **Install Dependencies:**

    ```
    cd property-management-system
    composer install
    ```

3. **Copy `.env.example` to `.env`:**

    ```
    cp .env.example .env
    ```

4. **Generate Application Key:**

    ```
    php artisan key:generate
    ```

5. **Configure Database:**

   Update `.env` file with your database credentials.

6. **Run Migrations:**

    ```
    php artisan migrate
    ```

7. **Serve the Application:**

    ```
    php artisan serve
    ```

8. **Access the Application:**

   Open your web browser and navigate to `http://localhost:8000`.

## Additional Notes

- the page of http://localhost:8000/clients/{clientId}/properties is niet werkend, ben lang bezig geweest om dit te fixen maar het is niet gelukt. en heb eigenlijk ook geen idee waarom het niet werkt. terwijl die voor de rooms wel werkt.
de rest van de paginas werken wel.
- de stats op de http://localhost:8000/properties/{propertyId} pagina werkt ook niet, door een rare error die ik niet heb weten te fixen. maar de stats van de pagina voor de clients is wel werkend.
- 
