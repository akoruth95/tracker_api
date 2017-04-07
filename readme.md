# About the Tracker API
This API is built to allow developers to create a working web application and integrate with databases easily. This API uses a RESTful interface with standard HTTP methods (GET, POST, PUT, DELETE). All responses are returned as JSON. It manages calls to 3 different databases. It was built completely with PHP Laravel framework (https://laravel.com/).

First, it can make calls to retrieve data about food items and their macronutritional information. This can be used in applications built for diet tracking, creating weight loss goals, or just simply for monitoring day to day activities. Next, it manages calls to retrieve info from database that contains data regarding public attractions within the Chapel Hill area. This ideally could be used by the city government for applications for visitors and tourists to get comfortable with the area. Lastly, calls can be made to a database storing the wealthiest athletes in the world.

## Installation Instructions
1. Download MAMP at https://www.mamp.info/en/.
2. Download Composer at https://getcomposer.org/download/.
2. Open MAMP preferences and change web server to file location of this project locally.
3. Still in preferences, change Apache port and Nginx port to 8888. Change MySQL port to 8889.
4. Go to .env folder and change DB_DATABASE, DB_USERNAME, DB_PASSWORD to personal database settings.
5. In terminal, go into project folder and run 'php artisan migrate' to create tables in database. 
6. Download Advanced Rest Client from Chrome web store to test HTTP allowed requests to API. 
7. Project will be running on localhost:8888.

For more info on using the API visit https://www.gitbook.com/book/akoruth95/tracker_api/details

