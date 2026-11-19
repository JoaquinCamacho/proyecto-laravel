ISEC

CARRERA: Tecnicatura Superior en Diseño y Programación Web

MATERIA: Portales y Comercio Electrónico

TRABAJO PRÁCTICO: Segundo Parcial

PROFESOR: Carlos Ferrer

ALUMNO/S:
Camacho, Joaquin
Luna, Ezequiel

CUATRIMESTRE: Segundo

AÑO: 2026

TURNO: Mañana

COMISIÓN: Mañana

PASOS PARA EJECUTAR EL PROYECTO:

1. composer install
2. Copiar .env.example a .env.
3. Configurar DB_DATABASE, DB_USERNAME y DB_PASSWORD.
4. php artisan key:generate
5. php artisan migrate --seed
6. php artisan serve