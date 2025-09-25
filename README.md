# ASSIGNMENT CRYPTO AND CYBER SECURITY

## Cài đặt

### 1. Clone repository
```bash
git clone https://github.com/Alcization/Web.git
cd Web

```
### 2. Install container docker
```bash
docker run -d -p 80:80 -v __PATH_TO_Web_FOLDER__:var/www/html --name php-container php:apache

```
### 3. Endpoint
http://localhost/               # index
http://localhost/about.php      # about
http://localhost/finance.php    # finance
http://localhost/account.php    # account
http://localhost/admin.php      # admin


## Cấu trúc file

```
Web/
├── index.php                 # Entry endpoint
├── about.php                 # About page
├── finance.php               # Finance page
├── account.php               # Account page
├── admin.php                 # Admin page
```
