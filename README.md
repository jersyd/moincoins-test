Steps to run:
- composer install
- npm install
- php artisan migrate
- php artisan import:categories
- php artisan import:products
- change APP_URL to http://localhost:8000
- php artisan serve
- npm run dev

import:categories and import:products commands import data 
from storage/app/category.csv and storage/app/product.csv files to database
