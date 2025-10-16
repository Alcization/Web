# MOCK BANK – SECURITY TEST INTERFACE

## Cài đặt

### 1. Clone repository
```bash
git clone https://github.com/Alcization/Web.git
cd Web

```
### 2. Install container docker
```bash
docker run -d -p 81:80 -v __PATH_TO_Web_FOLDER__\public:var/www/html --name php-public php:apache

docker run -d -p 82:80 -v __PATH_TO_Web_FOLDER__\private:var/www/html --name php-private php:apache

docker run -d -p 83:80 -v __PATH_TO_Web_FOLDER__\admin:var/www/html --name php-admin php:apache

```

### 3. Endpoint
http://localhost:81/index.php           # Trang chủ

http://localhost:81/about.php           # Giới thiệu

http://localhost:81/contact.php         # Giới thiệu

http://localhost:82/dashboard.php       # Trang chào mừng đăng nhập

http://localhost:82/account.php         # Tài khoản

http://localhost:82/transfer.php        # Chuyển tiền

http://localhost:82/transactions.php    # Lịch sử giao dịch

http://localhost:83/admin.php           # Quản trị


