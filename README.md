# Login System with Session Timeout

## Overview
Basic PHP/MySQL login system that:
- Authenticates against a `users` table
- Redirects to `admin.php` on success
- Redirects to `error.php` on failure
- Implements a 1-minute inactivity timeout
- Prevents direct access to `admin.php` after logout or timeout

## Database Setup
Run `init_db.sql` to create the `users` table and seed one user:
- username: `admin`
- password: `AdminPass123`

## File Structure
login-system/
├─ config.php # DB connection
├─ init_db.sql # DDL + sample DML
├─ login.php # form + authentication
├─ error.php # on login failure
├─ admin.php # protected page + timeout
├─ logout.php # ends session
└─ README.md

markdown
Copy
Edit

## Deployment
1. Upload all files to a PHP/MySQL–enabled host (e.g. 000WebHost, InfinityFree).  
2. Import `init_db.sql` into your database.  
3. Edit `config.php` with your host/db credentials.  
4. Visit `login.php` to test.

## Testing Flows
- **Successful Login** → `admin.php`  
- **Failed Login** → `error.php`  
- **Inactivity > 60s** → auto-redirect to `login.php`  
- **Logout** → `login.php`  
- Direct access to `admin.php` without session → `login.php`
