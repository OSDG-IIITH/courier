#Courier Portal

Courier Portal currently in use at IIIT-Hyderabad.
You can find the Database dump in file `database.sql`

Students login through CAS.
New users can be added from the user `admin`, while the interface visible to security can be seen from user `security`.
Add both these users in the table `information` before proceeding.

SETUP

1) Open `config_database.php`

2) Change Hostname, Username, Database name, Password according to your mysql setting.

3) Use the `database.sql` dump for setting up the database.