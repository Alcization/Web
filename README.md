# MOCK BANK – SECURITY TEST INTERFACE

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
http://localhost/                # Trang chủ (index)

http://localhost/about.php       # Giới thiệu

http://localhost/finance.php     # Tài chính

http://localhost/account.php     # Tài khoản

http://localhost/admin.php       # Quản trị

http://localhost/transfer.php    # Chuyển tiền

http://localhost/transactions.php # Lịch sử giao dịch


## Cấu trúc file

```
mock-bank/
├── index.php                   # Trang chủ
├── about.php                   # Giới thiệu
├── finance.php                 # Tài chính
├── account.php                 # Tài khoản
├── admin.php                   # Trang quản trị
├── transfer.php                # Chuyển tiền
├── transactions.php            # Lịch sử giao dịch
│ 
│ 
├── templates/
│   ├── header.php              # Header chung
│   ├── footer.php              # Footer chung
├── public/
│   ├── css/
│   │   └── style.css           # CSS giao diện
│   └── js/
│       └── main.js             # Script JS (nếu có)
├── data/
│   ├── users.json              # Danh sách người dùng giả lập
│   └── txs.json                # Lịch sử giao dịch
└── README.md                   # Hướng dẫn sử dụng
```
